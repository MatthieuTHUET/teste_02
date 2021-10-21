<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


    /**
     * @Route("/articles")
     */
    
     class ArticlesController extends AbstractController
    {
    /**
     * @Route("/", name="articles_index")
     */

    // 1e Methode
    
    public function index(): Response
    {   
        $repo= $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repo->findAll();

        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'articles' => $articles,
        ]);
    }
     
    
    /**
     * @Route("/new", name="articles_new", methods={"GET","POST"})
     */
    public function new_articles(Request $request): Response
    {
        // Je fais appelle à Doctrine/Manager pour l'insertion de mes données
        $em = $this->getDoctrine()->getManager();

        // Je donne des valeurs à mon Article
        $articles = new Articles();
        $articles->setTitle("Le Doctrine au Coeur de Symfony");
        $articles->setContenu("Un très court article.");
    //    $articles->setDate(2021-10-20-14-51-45);

    // Je Prepare et je persite 
        $em->persist($articles);
        $em->flush();

    // J'appelle la vue sur laquelle je vais afficher mes articles    
        return $this->render('articles/nouveau.html.twig', [
            'articles' => $articles,
        ]);
    }


    /**
     * @Route("/{id}", name="articles_affichage", methods={"GET"})
     */
    public function show(Articles $articles, ArticlesRepository $articlesRepository, Request $request, EntityManagerInterface $manager): Response
    {
        return $this->render('articles/affichage.html.twig', [
            'id'=>$articles->getId(),
            'articles' => $articles,
        ]);
    }
}
