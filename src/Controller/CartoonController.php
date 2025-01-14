<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CartoonController extends AbstractController
{
    #[Route('/cartoons', name: 'cartoons')]
    public function index(): Response
    {
        return $this->render('cartoon/index.html.twig');
    }

    #[Route('/cartoons/kids', name: 'kids_cartoons')]
    public function kids(): Response
    {
        return $this->render('cartoon/kids.html.twig');
    }

    #[Route('/cartoons/family', name: 'family_cartoons')]
    public function family(): Response
    {
        return $this->render('cartoon/family.html.twig');
    }

    #[Route('/cartoons/animated-series', name: 'animated_series')]
    public function animatedSeries(): Response
    {
        return $this->render('cartoon/animated_series.html.twig');
    }
}