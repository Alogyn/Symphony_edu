<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy/{name}', name: 'app_dummy')]
    public function index(string $name): Response
    {
        return $this->render('dummy/index.html.twig', parameters: [
            'name' => $name,
        ]);
    }
}
