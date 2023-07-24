<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Entity\Zone;
use App\Form\SeanceType;
use App\Form\ZoneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/seances")]
class SeancesController extends AbstractController
{
    #[Route('/semaine/{num?1}', name: 'seances.all')]
    public function showAll(ManagerRegistry $doctrine, $num): Response
    {
        $repository = $doctrine->getRepository(Seance::class);
        $seances = $repository->findBySemaine($num);

        return $this->render('seances/index.html.twig', [
            'controller_name' => 'SeancesController',
            'seances'=>$seances
        ]);
    }

    #[Route('/edit/{id?0}', name: 'seances.edit')]
    public function index(ManagerRegistry $doctrine, Request $request, Seance $seance = null): Response
    {
        if (!$seance) {
            $seance = new Seance();
        }
        $zone = new Zone();

        $formZone = $this->createForm(ZoneType::class, $zone);
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);
        $formZone->handleRequest($request);

        $em = $doctrine->getManager();
        if ($form->isSubmitted()) {
            $em->persist($seance);
            $em->flush();
            $this->addFlash('success', 'Seance a été edité avec succès !');
            $this->redirectToRoute('seances.edit');
        }
        if ($formZone->isSubmitted()) {
            $em->persist($zone);
            $em->flush();
            $this->addFlash('success', 'Nouvelle zone a été crée avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        return $this->render('seances/edit.html.twig', [
            'controller_name' => 'SeancesController',
            'form' => $form->createView(),
            'zoneForm' => $formZone->createView(),
        ]);
    }
}
