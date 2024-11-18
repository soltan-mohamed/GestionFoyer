<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionnaireDeFoyerController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }

    #[Route('/tables', name: 'app_tables')]
    public function table(): Response
    {
        return $this->render('tables.html.twig');
    }

    #[Route('/billing', name: 'app_billing')]
    public function billing(): Response
    {
        return $this->render('billing.html.twig');
    }

}
