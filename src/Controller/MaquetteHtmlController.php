<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaquetteHtmlController extends AbstractController
{
    #[Route('/maquette/html', name: 'maquette_html')]
    public function index(): Response
    {
        return $this->render('maquette_html/index.html.twig', [
            'controller_name' => 'MaquetteHtmlController',
        ]);
    }
}
