<?php

namespace App\Controller;


use App\Entity\Programme;
use App\Form\ProgrammeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammeController extends AbstractController
{
    #[Route('/edit-programme/{id?0}', name: 'app_programme')]
    public function index(ManagerRegistry $doctrine, Request $request,Programme $programme = null): Response
    {
        if (!$programme) {
            $programme = new Programme();
        }

        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($programme);
            $em->flush();
            $this->addFlash('succes',  ' a été edité avec succès !');
            $this->redirectToRoute('app_programme');

        }

        return $this->render('programme/index.html.twig', [
            'controller_name' => 'ProgrammeController',
            'form' => $form->createView()
        ]);
    }
}
