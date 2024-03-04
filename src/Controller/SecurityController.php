<?php

namespace App\Controller;

use App\Entity\ResetPassword;
use App\Repository\ResetPasswordRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app.login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('target_path');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app.logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    #[Route(path: '/reset-password/{token}', name: 'reset.password')]
    public function resetPassword(UserPasswordHasherInterface $userPasswordHasher, Request $request, EntityManagerInterface $em, string $token, ResetPasswordRepository $resetPasswordRepository)
    {
        $resetPassword = $resetPasswordRepository->findOneBy(['token' => sha1($token)]);
        if (!$resetPassword || $resetPassword->getExpiredAt() < new \DateTime('now')) {
            if ($resetPassword) {
                $em->remove($resetPassword);
                $em->flush();
            }
            $this->addFlash('error', 'Votre demande est expirée veuillez refaire une demande.');
            return $this->redirectToRoute('app.login');
        }

        $passwordForm = $this->createFormBuilder()
            ->add('password', PasswordType::class, [
                'label' => 'Nouveau mot de passe',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit faire au moins 6 caractères.'
                    ]),
                    new NotBlank([
                        'message' => 'Veuillez renseigner un mot de passe.'
                    ])
                ]
            ])
            ->getForm();

        $passwordForm->handleRequest($request);
        if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
            $password = $passwordForm->get('password')->getData();
            $user = $resetPassword->getUser();
            $hash = $userPasswordHasher->hashPassword($user, $password);
            $user->setPassword($hash);
            $em->remove($resetPassword);
            $em->flush();
            $this->addFlash('success', 'Votre mot de passe a été modifié.');
            return $this->redirectToRoute('app.login');
        }

        return $this->render('security/reset-password.html.twig', [
            'form' => $passwordForm->createView()
        ]);
    }




    #[Route(path: '/reset-password-request', name: 'reset.password.request')]
    public function resetPasswordRequest(RateLimiterFactory $passwordRecoveryLimiter, MailerInterface $mailer, Request $request, UserRepository $userRepository, ResetPasswordRepository $resetPasswordRepository, EntityManagerInterface $em):Response
    {
        $emailForm = $this->createFormBuilder()->add('email', EmailType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez renseigner votre email'
                ])
            ]
        ])->getForm();
        $emailForm->handleRequest($request);
        if ($emailForm->isSubmitted() && $emailForm->isValid()) {
            //rate_limiteur basé sur l'adresse ip client
            $limiter = $passwordRecoveryLimiter->create($request->getClientIp());
            if(false === $limiter->consume(1)->isAccepted()){
                $this->addFlash('error','Le nombre de tentaives est dépassé, veuillez réessayer plus tard !');
                $this->redirectToRoute('app.login');
            }

            $emailValue = $emailForm->get('email')->getData();
            $user = $userRepository->findOneBy(['email' => $emailValue]);
            if ($user) {
                //vider token
                $oldResetPassword = $resetPasswordRepository->findOneBy(['user' => $user]);
                if ($oldResetPassword) {
                    $em->remove($oldResetPassword);
                    $em->flush();
                }
                $resetPassword = new ResetPassword();
                $resetPassword->setUser($user);
                $resetPassword->setExpiredAt(new \DateTimeImmutable('+1 hours'));
                $token = substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes(30))), 0, 20);
                $resetPassword->setToken(sha1($token));
                $em->persist($resetPassword);
                $em->flush();
                $email = new TemplatedEmail();
                $email->to($emailValue)
                    ->from(new Address('lioma@atelier-electronik.com', 'Lioma CHAKHGUEREEV'))
                    ->subject('Demande de réinitialisation de mot de passe')
                    ->htmlTemplate('@email_templates/reset_password_request.html.twig')
                    ->context([
                        'token' => $token
                    ]);
                try {
                   $mailer->send($email);
                } catch (TransportExceptionInterface $e) {
                    // some error prevented the email sending; display an
                    // error message or try to resend the message
                }
            }
            $this->addFlash('success', 'Un email vous a été envoyé pour réinitialiser votre mot de passe');
            return $this->redirectToRoute('app.home.muscu');
        }

        return $this->render('security/reset-password-request.html.twig', [
            'form' => $emailForm->createView()
        ]);
    }


}
