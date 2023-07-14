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
            $this->addFlash('success', 'Programme a été edité avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        if ($formSeance->isSubmitted()) {
            $em->persist($seance);
            $em->flush();
            $this->addFlash('success', 'Seance a été crée avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        if ($formZone->isSubmitted()) {
            $em->persist($zone);
            $em->flush();
            $this->addFlash('success', 'Nouvelle zone a été crée avec succès !');
            $this->redirectToRoute('programme.edit');

        }

        if ($formPatternMuscle->isSubmitted()) {
            $em->persist($patternMuscle);
            $em->flush();
            $this->addFlash('success', 'Nouvelle pattern muscle a été crée avec succès !');
            $this->redirectToRoute('programme.edit');

        }

        return $this->render('programme/index.html.twig', [
            'controller_name' => 'ProgrammeController',
            'form' => $form->createView(),
            'seanceForm' => $formSeance->createView(),
            'zoneForm' => $formZone->createView(),
            'patternMuscleForm' => $formPatternMuscle->createView()
        ]);
    }

    #[Route('/show/{page?1}/{nombre?6}', name: 'programme.show')]
    public function show_programmes(ManagerRegistry $doctrine,$page,$nombre): Response
    {
        $isPaginated = true;
        $repository = $doctrine->getRepository(Programme::class);

        $nbElements = $repository->count([]);
        //nombre des occurences / nombre d'affichée par page, ceil arrondi au supérieur
        $nbPAges = ceil($nbElements / $nombre);

        $programmes = $repository->findBy([],[],$nombre, ($page-1)*$nombre);

        return $this->render('programme/show.html.twig', [
            'controller_name' => 'ProgrammeController',
            'programmes' => $programmes,
            'isPaginated' =>$isPaginated,
            'nbPages'=>$nbPAges,
            'page'=>$page,
            'elements'=>$nombre
        ]);
    }
}
