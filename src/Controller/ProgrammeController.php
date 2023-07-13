<?php

namespace App\Controller;


use App\Entity\PatternMuscle;
use App\Entity\Programme;
use App\Entity\Seance;
use App\Entity\Zone;
use App\Form\PatterMuscleType;
use App\Form\ProgrammeType;
use App\Form\SeanceType;
use App\Form\ZoneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/programme")]
class ProgrammeController extends AbstractController
{
    #[Route('/edit/{id?0}', name: 'programme.edit')]
    public function index(ManagerRegistry $doctrine, Request $request, Programme $programme = null): Response
    {
        if (!$programme) {
            $programme = new Programme();
        }
        $zone = new Zone();
        $seance = new Seance();
        $patternMuscle = new PatternMuscle();


        $form = $this->createForm(ProgrammeType::class, $programme);
        $formSeance = $this->createForm(SeanceType::class, $seance);
        $formZone = $this->createForm(ZoneType::class, $zone);
        $formPatternMuscle = $this->createForm(PatterMuscleType::class, $patternMuscle);

        $form->handleRequest($request);
        $formSeance->handleRequest($request);
        $formZone->handleRequest($request);
        $formPatternMuscle->handleRequest($request);

        $em = $doctrine->getManager();

        if ($form->isSubmitted()) {
            $em->persist($programme);
            $em->flush();
            $this->addFlash('succes', ' a été edité avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        if ($formSeance->isSubmitted()) {
            $em->persist($seance);
            $em->flush();
            $this->addFlash('succes', 'Nouvelle zone a été crée avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        if ($formZone->isSubmitted()) {
            $em->persist($zone);
            $em->flush();
            $this->addFlash('succes', 'Nouvelle seance a été crée avec succès !');
            $this->redirectToRoute('programme.edit');

        }

        if ($formPatternMuscle->isSubmitted()) {
            $em->persist($patternMuscle);
            $em->flush();
            $this->addFlash('succes', 'Nouvelle pattern muscle a été crée avec succès !');
            $this->redirectToRoute('app_programme');

        }

        return $this->render('programme/index.html.twig', [
            'controller_name' => 'ProgrammeController',
            'form' => $form->createView(),
            'seanceForm' => $formSeance->createView(),
            'zoneForm' => $formZone->createView(),
            'patternMuscleForm' => $formPatternMuscle->createView()
        ]);
    }

    #[Route('/show', name: 'programme.show')]
    public function show_programmes(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Programme::class);
        $programmes = $repository->findAll();

        return $this->render('programme/show.html.twig', [
            'controller_name' => 'ProgrammeController',
            'programmes' => $programmes
        ]);
    }
}
