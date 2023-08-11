<?php

namespace App\Controller;

use App\Entity\Challenge;
use App\Entity\User;
use App\Form\ChallengeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home', name: 'app.home.muscu')]
    public function home(ManagerRegistry $doctrine, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        if (!$user->getChallenge()) {
            $challenge = new Challenge();
            $date =new \DateTime();
            $date->format("d/m/Y");

            $challenge->setDateDebut($date);
            $challenge->setNbSemaine(8);

            $form = $this->createForm(ChallengeType::class, $challenge);
            $form->handleRequest($request);

            $em = $doctrine->getManager();

            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($challenge);
                $user->setChallenge($challenge);
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Votre challenge a été créé avec succès !');

                return $this->redirectToRoute('app.home.muscu');
            }
            return $this->render('home/home.html.twig', [
                'controller_name' => 'HomeController',
                'form' => $form,
            ]);
        }else{
            return $this->render('home/home.html.twig', [
                'controller_name' => 'HomeController',
            ]);
        }


    }


}
