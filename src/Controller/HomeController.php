<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/experience-pro', name: 'experiencePro')]
    public function experiencePro(): Response
    {
        return $this->render('home/expPro.html.twig');
    }

    #[Route('/realisations', name: 'realisations')]
    public function realisations(): Response
    {
        return $this->render('home/realisations.html.twig');
    }

    #[Route('/references', name: 'references')]
    public function references(): Response
    {
        return $this->render('home/references.html.twig');
    }
}
