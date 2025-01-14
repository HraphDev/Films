<?php

// src/Controller/SeriesController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'series')]
    public function index(): Response
    {
        return $this->render('series/index.html.twig');
    }

    #[Route('/series/thriller', name: 'thriller_series')]
    public function thriller(): Response
    {
        return $this->render('series/thriller.html.twig');
    }

    #[Route('/series/romance', name: 'romance_series')]
    public function romance(): Response
    {
        return $this->render('series/romance.html.twig');
    }

    #[Route('/series/sci-fi', name: 'sci_fi_series')]
    public function sciFi(): Response
    {
        return $this->render('series/sci_fi.html.twig');
    }

    #[Route('/series/documentaries', name: 'documentaries_series')]
    public function documentaries(): Response
    {
        return $this->render('series/documentaries.html.twig');
    }
}
