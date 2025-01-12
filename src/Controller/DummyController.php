<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
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

    #[Route(path:'/home', name: 'app_home')]
    public function home(): Response
    {
        $text = "Hello This is home !";
        $tabYear = [2020, 2021, 2022, 2023];
        return $this->render('dummy/home.html.twig', parameters: [
            'text' => $text,
            'years' => $tabYear,
        ]);
    }

    #[Route(path:'/news', name: 'app_news')]
    public function news(): Response
    {
        $text = "Welcome to the News Page!";
        $newsItems = ["News 1", "News 2", "News 3"];
        return $this->render('dummy/news.html.twig', parameters: [
            'text' => $text,
            'newsItems' => $newsItems,
        ]);
    }

    #[Route(path:'/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $text = "Get in touch with us!";
        $contactMethods = ["Email", "Phone", "Address"];
        return $this->render('dummy/contact.html.twig', parameters: [
            'text' => $text,
            'contactMethods' => $contactMethods,
        ]);
    }

    #[Route(path:'/about', name: 'app_about')]
    public function about(): Response
    {
        $text = "Learn more about us!";
        $aboutInfo = ["Mission", "Vision", "Team"];
        return $this->render('dummy/about.html.twig', parameters: [
            'text' => $text,
            'aboutInfo' => $aboutInfo,
        ]);
    }

    #[Route(path: '/add-book', name: 'app_book_add')]
    public function addBook(): Response
    {
        $book = new Book();

        $bookForm = $this->createForm(type: BookType::class, data: $book);

        return $this->render('dummy/book.html.twig', parameters: [
            'bookForm' => $bookForm
        ]);
    }
}