<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Entity\PatternMuscle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    #[Route('/exercice', name: 'app_exercice')]
    public function addExercice(ManagerRegistry $doctrine): Response
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
        die("ajout fait");
        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
        ]);
    }
}
