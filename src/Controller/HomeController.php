<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route("/")]
    public function index(): Response
    {
        $categories = [
            ['title' => 'Mundo', 'text' => 'Notícias sobre o mundo'],
            ['title' => 'Esportes', 'text' => 'Notícias sobre esportes'],
            ['title' => 'Tecnologia', 'text' => 'Notícias sobre tecnologia'],
            ['title' => 'Política', 'text' => 'Notícias sobre política'],
            ['title' => 'Economia', 'text' => 'Notícias sobre economia'],
        ];

        $pageTitle = 'Sistema de Notícias';
        return $this->render('home.html.twig', [
            'pageTitle' => $pageTitle,
            'categories' => $categories,
        ]);
    }

    #[Route("/categoria/{slug}")]
    public function category(string $slug = null): Response
    {
        $categories = [
            ['title' => 'Mundo', 'text' => 'Notícias sobre o mundo'],
            ['title' => 'Esportes', 'text' => 'Notícias sobre esportes'],
            ['title' => 'Tecnologia', 'text' => 'Notícias sobre tecnologia'],
            ['title' => 'Política', 'text' => 'Notícias sobre política'],
            ['title' => 'Economia', 'text' => 'Notícias sobre economia'],
        ];

        $pageTitle = $slug;
        return $this->render('category.html.twig', [
            'pageTitle' => $pageTitle,
            'categories' => $categories,
        ]);
    }
}
