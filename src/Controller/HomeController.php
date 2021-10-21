<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
    * @Route("/")
    */
    class HomeController extends AbstractController
{
    /**
     * @Route("/index", name="home_index")
     */
    public function index(Request $request): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/articlesnew", name="home_articles", methods={"GET","POST"})
     */
    public function new_articles(Request $request): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $articles = new Articles();
        $articles->setTitle("Le Doctrine au Coeur de Symfony");
        $articles->setContenu("Un très court article.");
    //    $articles->setDate(2021-10-20-14-51-45);

    // Je Prepare et je persite 
        $em->persist($articles);
        $em->flush();

        
        return $this->render('articles/nouveau.html.twig', [
            'articles' => $articles,
        ]);
    }



}
