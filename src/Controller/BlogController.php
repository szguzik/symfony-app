<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    public function __construct(
        private readonly ArticleRepository $articleRepository
    )
    {

    }

    #[Route('/articles', 'blog-article')]
    public function mainPage(): Response
    {
        $articles = $this->articleRepository->findAll();
        // dane widac w profiler
        // dump($articles);
        // dane widac na froncie
        // dd($articles);
        // return new Response('test');

        $parameters = [
            'articles' => $articles
        ];

        return $this->render('articles.html.twig', $parameters);
    }
}
