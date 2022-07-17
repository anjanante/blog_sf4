<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/actualites", name="actualites_")
 */
class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(): Response
    {
        //liste de tous les articles
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();
        // $articlesR = $ar->findAll();
        return $this->render('articles/index.html.twig', [
            'title' => 'Liste des articles',
            'articles' => $articles,
        ]);
    }
}
