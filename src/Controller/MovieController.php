<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('movie/index.html.twig');
    }

    #[Route('/movies/action', name: 'action_movies')]
    public function action(): Response
    {
        return $this->render('movie/action.html.twig');
    }

    #[Route('/movies/comedy', name: 'comedy_movies')]
    public function comedy(): Response
    {
        return $this->render('movie/comedy.html.twig');
    }

    #[Route('/movies/drama', name: 'drama_movies')]
    public function drama(): Response
    {
        return $this->render('movie/drama.html.twig');
    }

    #[Route('/movies/horror', name: 'horror_movies')]
    public function horror(): Response
    {
        return $this->render('movie/horror.html.twig');
    }
}