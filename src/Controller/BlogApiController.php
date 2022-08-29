<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{
    #[Route('/api/posts/{id}', methods:['GET','HEAD'] ,name: 'app_blog_api')]
    public function show(int $id): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'controller_name' => 'BlogApiController',
            'id' => $id,
            'json' => json_encode([$id])
        ]);
    }
}
