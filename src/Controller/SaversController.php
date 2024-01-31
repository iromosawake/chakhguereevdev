<?php

namespace App\Controller;

use App\Entity\Savers;
use App\Form\SaversType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/savers")]
class SaversController extends AbstractController
{
    #[Route('/update', name: 'savers.insert')]
    public function index(ManagerRegistry $doctrine, Request $request, Savers $savers = null): Response
    {
        $savers = new Savers();
        $em = $doctrine->getManager();
        $user = $this->getUser();
// findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
        $saverses = $em->getRepository(Savers::class)->findAllSavers($user);

        $form = $this->createForm(SaversType::class, $savers);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $savers->setCreatedAt(new \DateTime());
            $savers->setUser($this->getUser());
            $em->persist($savers);
            $em->flush();
            $this->addFlash('success', 'SAVERS a été edité saisi !');
            $savers = new Savers();
            return $this->redirectToRoute('savers.insert');
        }


        return $this->render('savers/index.html.twig', [
            'controller_name' => 'SaversController',
            'form' => $form->createView(),
            'saverses' => $saverses
        ]);
    }
}
