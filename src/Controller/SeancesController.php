<?php

namespace App\Controller;

use App\Entity\EntrainementRealise;
use App\Entity\Seance;
use App\Entity\Zone;
use App\Form\SeanceType;
use App\Form\ZoneType;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/seances")]
class SeancesController extends AbstractController
{
    #[Route('/semaine/{num?0}', name: 'seances.all')]
    public function showAll(ManagerRegistry $doctrine, $num): Response
    {
        $repository = $doctrine->getRepository(Seance::class);
        if ($num == 0) {
            $seances = $repository->findAll();
        } else {
            $seances = $repository->findBySemaine($num);
        }
        return $this->render('seances/index.html.twig', [
            'seances' => $seances
        ]);
    }

    #[Route('/ma-seance/{num?0}', name: 'seances.day')]
    public function mySeance(ManagerRegistry $doctrine, $num): Response
    {
        $repository = $doctrine->getRepository(Seance::class);
        if ($num == 0) {
            $seances = $repository->getSeancesWithAutors();
        } else {
            $seances = $repository->findBySemaine($num);
        }
        return $this->render('seances/index.html.twig', [
            'seances' => $seances
        ]);
    }

    #[Route('/edit/{id?0}', name: 'seances.edit')]
    public function editSeance(ManagerRegistry $doctrine, Request $request, Seance $seance = null): Response
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
            $seance->setCreatedby($this->getUser());
            $em->persist($seance);
            $em->flush();
            $this->addFlash('success', 'Seance a été edité avec succès !');
            $this->redirect('seances.edit');
        }
        if ($formZone->isSubmitted()) {
            $em->persist($zone);
            $em->flush();
            $this->addFlash('success', 'Nouvelle zone a été crée avec succès !');
            return $this->redirectToRoute('programme.edit');
        }

        return $this->render('seances/edit.html.twig', [
            'form' => $form->createView(),
            'zoneForm' => $formZone->createView(),
        ]);
    }

    #[Route('/semaine/pdf/{num?0}', name: 'seances.pdf')]
    public function seanceToPDf(ManagerRegistry $doctrine, PdfService $pdfService, int $num): Response
    {
        $repository = $doctrine->getRepository(Seance::class);
        $seances = $repository->findBySeance($num);
        $html = $this->render('seances/seancePDF.html.twig', [
            'seances' => $seances,
            'numSemaine' => $num
        ]);
        return $pdfService->pdf($html);
    }


    #[Route('/semaine/seance/add/{id?=0}', name: 'seances.termine')]
    public function seanceToEntrainementRealise(EntityManagerInterface $em,Seance $id): Response
    {
        $entrainement = new EntrainementRealise();
        $entrainement->setDate(new \DateTime());
        $entrainement->setUser($this->getUser());
        $entrainement->setSeanceRealise($id);
        $em->persist($entrainement);
        $em->flush();
        $this->addFlash('success',"Bravo ! Vous avez terminé votre entrainement!");
        return $this->redirectToRoute('app.home.muscu');
    }
}
