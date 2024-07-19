<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController {

    #[Route("api/news/{id}")]
    public function getNew(string $id=null): Response 
    {
        // TODO - criar uma query real para buscar a notícia no banco de dados
        $new = [
            'id' => $id,
            'titulo' => 'Desenvolvedor desenvolve um sistema para desenvolvimento de novos desenvolvedores mais desenvolvidos.',
            'categoria' => 'Tecnologia',
            'descricao' => 'O desenvolvedor de sistemas Vinicius Moreira desenvolveu um sistema para desenvolver novos desenvolvedores mais desenvolvidos. O sistema foi desenvolvido utilizando a linguagem de programação PHP.',
            'data' => '2024-07-18',
            'imagem' => 'https://via.placeholder.com/800x400',
        ];
        return new JsonResponse($new);
    }
}