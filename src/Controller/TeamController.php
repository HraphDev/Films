<?php

// src/Controller/TeamController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends AbstractController
{
    #[Route('/team', name: 'team')]
    public function index(): Response
    {
        return $this->render('pages/team.html.twig');
    }
}
