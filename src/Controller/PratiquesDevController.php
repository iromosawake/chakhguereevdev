<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PratiquesDevController extends AbstractController
{
    #[Route('/pratiques/dev', name: 'app_pratiques_dev')]
    public function index(): Response
    {
        return $this->render('pratiques_dev/index.html.twig', [
            'controller_name' => 'PratiquesDevController',
        ]);
    }
}
