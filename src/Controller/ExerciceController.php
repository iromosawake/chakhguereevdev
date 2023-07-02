<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Entity\PatternMuscle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/exercice")]
class ExerciceController extends AbstractController
{
    #[Route('/create', name: 'exercice_create')]
    public function createExercice(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        $pattern = $em->getRepository(PatternMuscle::class)->find(1);

        $exercice = new Exercice();
        $exercice->setNom("Squat");
        $exercice->setConsigne("Travaille dur");
        $exercice->setVideo("http://blablabla.com");
        $exercice->setPrincipal(0);
        $exercice->setPatternMuscle($pattern);
        $em->persist($exercice);        
        $em->flush();

        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
            'exercice_cree'=>$exercice
        ]);
    }
}
