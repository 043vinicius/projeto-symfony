<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class HelloController
{
    #[Route("/")]
    public function index(): Response
    {
        return new Response('Olá, mundo!');
    }

    #[Route("/animal/{slug}")]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-', ' ', $slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, '. $newSlug );
    }

}