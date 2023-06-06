<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NutritionController extends AbstractController
{
    #[Route('/nutrition', name: 'app_nutrition')]
    public function index(): Response
    {
        return $this->render('nutrition/index.html.twig', [
            'controller_name' => 'NutritionController',
        ]);
    }
}
