<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HommeUltimeController extends AbstractController
{
    #[Route('/homme/ultime', name: 'app_homme_ultime')]
    public function index(): Response
    {
        return $this->render('homme_ultime/index.html.twig', [
            'controller_name' => 'HommeUltimeController',
        ]);
    }
}
