<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        $dashboard = true;

        return $this->render('admin/index.html.twig', [
            'dashboard' => $dashboard,
        ]);
    }

    #[Route('/admin/user', name: 'app_admin_user')]
    public function user(): Response
    {
        $user = true;
        return $this->render('admin/user.html.twig', [
            'user' => $user,
        ]);
    }
}
