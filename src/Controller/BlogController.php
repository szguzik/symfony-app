<?php

namespace App\Controller;

use App\Entity\Article;
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

    #[Route('/articles', 'blog-articles')]
    public function showArticles(): Response
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

    #[Route('/article/{article}', 'blog-article')]
    public function showArticle(Article $article): Response {
//        dd($article);
//        return new Response($this->articleRepository->find($articleId));
        return new Response($article->getContent());
    }
}
