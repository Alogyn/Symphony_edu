<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        $text = "I am template";
        $years = [2020,2021,2022,2023,2024];
        return $this->render('home/dummy.html.twig', [
            'text' => $text,
            'years' => $years
        ]);
    }
}
