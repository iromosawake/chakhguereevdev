<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChakhguereevCVController extends AbstractController
{
    #[Route('/chakhguereev/c/v', name: 'app_chakhguereev_c_v')]
    public function index(): Response
    {
        return $this->render('chakhguereev_cv/index.html.twig', [
            'controller_name' => 'ChakhguereevCVController',
        ]);
    }
}
