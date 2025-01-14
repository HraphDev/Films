<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard')]
    public function adminDashboard(): Response
    {
        // Deny access if the user doesn't have ROLE_ADMIN
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Render the admin dashboard page
        return $this->render('admin/dashboard.html.twig');
    }
}
