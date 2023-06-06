<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuiviJoutnalierController extends AbstractController
{
    
    #[Route('/suivi/joutnalier', name: 'app_suivi_joutnalier')]
    public function index(): Response
    {
        return $this->render('suivi_joutnalier/index.html.twig', [
            'controller_name' => 'SuiviJoutnalierController',
        ]);
    }
}
