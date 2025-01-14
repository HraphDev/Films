<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/Home.html.twig', [
            'site_name' => 'Flick Fusion',
            'page_title' => 'Welcome',
            'hero_title' => 'Welcome to FlickFusion',
            'hero_description' => 'Where Entertainment Comes to Life',
        ]);
    }
}
