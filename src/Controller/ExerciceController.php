<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Entity\PatternMuscle;
use App\Form\ExerciceType;
use App\Form\PatterMuscleType;
use App\Service\UploaderService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route("/exercice")]
class ExerciceController extends AbstractController
{
    #[Route('/edit/{id?0}', name: 'exercice.edit')]
    public function addExercice(ManagerRegistry $doctrine, Request $request, UploaderService $uploaderService, Exercice $exercice = null): Response
    {
        //si exercice n'existe pas
        if (!$exercice) {
            $exercice = new Exercice();
        }

        $patternMuscle = new PatternMuscle();

        $formPatternMuscle = $this->createForm(PatterMuscleType::class, $patternMuscle);
        $form = $this->createForm(ExerciceType::class, $exercice);

        $form->handleRequest($request);
        $formPatternMuscle->handleRequest($request);

        $em = $doctrine->getManager();
        if ($formPatternMuscle->isSubmitted()) {
            $em->persist($patternMuscle);
            $em->flush();
            $this->addFlash('success', 'Nouvelle pattern muscle a été crée avec succès !');
            $this->redirectToRoute('programme.edit');
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            // this condition is needed because the 'photo' field is not required
            // so the image file must be processed only when a file is uploaded
            if ($image) {
                $directoryFolder = $this->getParameter('upload_directory');
                $exercice->setImage($uploaderService->uploadImage($image, $directoryFolder));
            }
            $em->persist($exercice);
            $em->flush();
            $this->addFlash('success', $exercice->getNom() . ' a été edité avec succès !');
            return $this->redirectToRoute('exercice.edit');

        }
        return $this->render('exercice/add-exercice.html.twig', [
            'controller_name' => 'ExerciceController',
            'form' => $form->createView(),
            'patternMuscleForm' => $formPatternMuscle->createView()
        ]);

    }

    #[Route('/all/', name: 'exercice.all')]
    public function allExercices(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Exercice::class);
        $exercices = $repository->findAll();

        return $this->render('exercice/all-exercice.html.twig', [
            'controller_name' => 'ExerciceController',
            'exercices' => $exercices
        ]);
    }


}
