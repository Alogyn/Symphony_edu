<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index/{name}', name: 'app_index')]
    public function index(string $name): Response
    {
        return new Response(content: "Hello ". $name . " !");
    }
}
