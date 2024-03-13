<?php

namespace App\Controller;


use App\Entity\Programme;
use App\Form\ProgrammeType;
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

        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        $em = $doctrine->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($programme);
            $em->flush();
            $this->addFlash('success', 'Programme a été edité avec succès !');
            return $this->redirectToRoute('programme.edit');
        } else {
            return $this->render('programme/index.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }

    #[Route('/show/{page?1}/{nombre?6}', name: 'programme.show')]
    public function show_programmes(ManagerRegistry $doctrine, $page, $nombre): Response
    {
        $isPaginated = true;
        $repository = $doctrine->getRepository(Programme::class);

        $nbElements = $repository->count([]);
        //nombre des occurences / nombre d'affichée par page, ceil arrondi au supérieur
        $nbPAges = ceil($nbElements / $nombre);

        $programmes = $repository->findBy([], [], $nombre, ($page - 1) * $nombre);

        return $this->render('programme/show.html.twig', [
            'programmes' => $programmes,
            'isPaginated' => $isPaginated,
            'nbPages' => $nbPAges,
            'page' => $page,
            'elements' => $nombre
        ]);
    }

    #[Route('/action/{id?1}', name: 'programme.action')]
    public function action($id, ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Programme::class);
        $programme = $repository->findOneBy(array('id' => $id));
        return $this->render('programme/action.html.twig', [
            'programme' => $programme,
        ]);
    }

}
