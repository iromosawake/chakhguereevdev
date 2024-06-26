<?php

namespace App\Controller;

use App\Entity\EntrainementRealise;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        ]);
    }

    #[Route('/home', name: 'app.home.muscu')]
    #[IsGranted('ROLE_USER')]
    public function home(ManagerRegistry $d): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
            $repo = $d->getRepository(EntrainementRealise::class);
            $entrainements = $repo->findUserEntrainementsRealises($this->getUser());

            return $this->render('home/home.html.twig', [
                'entrainements' => $entrainements
            ]);
        }

}
