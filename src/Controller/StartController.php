<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    #[Route('/', name: 'app_start')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
        ]);
    }
}
