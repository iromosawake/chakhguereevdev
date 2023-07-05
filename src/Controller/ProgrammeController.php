<?php

namespace App\Controller;


use App\Entity\Programme;
use App\Entity\Seance;
use App\Form\ProgrammeType;
use App\Form\SeanceType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammeController extends AbstractController
{
    #[Route('/edit-programme/{id?0}', name: 'app_programme')]
    public function index(ManagerRegistry $doctrine, Request $request, Programme $programme = null): Response
    {
        if (!$programme) {
            $programme = new Programme();
        }
        $seance = new Seance();

        $form = $this->createForm(ProgrammeType::class, $programme);
        $formSeance = $this->createForm(SeanceType::class, $seance);

        $form->handleRequest($request);
        $formSeance->handleRequest($request);

        $em = $doctrine->getManager();

        if ($form->isSubmitted()) {
            $em->persist($programme);
            $em->flush();
            $this->addFlash('succes', ' a été edité avec succès !');
            $this->redirectToRoute('app_programme');
        }

        if ($formSeance->isSubmitted() ) {
            $em->persist($seance);
            $em->flush();
            $this->addFlash('succes', 'Nouvelle seance a été crée avec succès !');
            $this->redirectToRoute('app_programme');

        }

        return $this->render('programme/index.html.twig', [
            'controller_name' => 'ProgrammeController',
            'form' => $form->createView(),
            'seanceForm' => $formSeance->createView()
        ]);
    }
}
