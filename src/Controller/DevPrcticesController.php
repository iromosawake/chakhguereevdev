<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevPrcticesController extends AbstractController
{
    #[Route('/dev/prctices', name: 'app_dev_prctices')]
    public function index(): Response
    {
        return $this->render('dev_prctices/index.html.twig', [

        ]);
    }
}
