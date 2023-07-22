<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Entity\PatternMuscle;
use App\Form\ExerciceType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route("/exercice")]
class ExerciceController extends AbstractController
{
    #[Route('/edit/{id?0}', name: 'exercice_edit')]
    public function addExercice(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger, Exercice $exercice = null): Response
    {
        //si exercice n'existe pas
        if (!$exercice) {
            $exercice = new Exercice();
        }

        $form = $this->createForm(ExerciceType::class, $exercice);
        //mon formulaire va traiter la requête
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $image = $form->get('image')->getData();
            // this condition is needed because the 'photo' field is not required
            // so the image file must be processed only when a file is uploaded
            if ($image) {
                //CREATION NOM FICHIER
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move($this->getParameter('exercice_directory'), $newFilename);
                    $exercice->setImage($newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    $this->addFlash('error', $exercice->getNom() . ' impossible d\'importer l\'image !' . $e->getMessage());
                }
            }
            $em->persist($exercice);
            $em->flush();
            $this->addFlash('success', $exercice->getNom() . ' a été edité avec succès !');
            $this->redirectToRoute('exercice_edit');

        }
        return $this->render('exercice/add-exercice.html.twig', [
            'controller_name' => 'ExerciceController',
            'form' => $form->createView()
        ]);

    }


}
