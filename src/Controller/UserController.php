<?php

namespace App\Controller;


use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user.update')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function currentUserUpdate(Request $request, EntityManagerInterface $em,UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        $userForm = $this->createForm(UserType::class, $user);
        $userForm->remove('password');
        $userForm->remove('sexe');
        $userForm->remove('photo');
        $userForm->remove('avant');
        $userForm->remove('apres');
        $userForm->remove('email');
        $userForm->add('newPassword', PasswordType::class, ['label' => 'Nouveau mot de passe','required'=>false]);

        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $newPassword = $user->getNewPassword();
            if ($newPassword && !empty($newPassword)) {
                $hash = $passwordHasher->hashPassword($user,$newPassword);
                $user->setPassword($hash);
            }
            $em->flush();
            $this->addFlash('success','Modification sauvegardée !');
        }


        return $this->render('user/index.html.twig', [
            'form' => $userForm->createView(),
        ]);
    }
}
