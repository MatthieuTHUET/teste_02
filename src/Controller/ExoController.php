<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/exo")
     */
    
     class ExoController extends AbstractController
{
    /**
     * @Route("/", name="view_index")
     */
    public function index(): Response
    {
        return $this->render('view/index.html.twig', [
            'controller_name' => 'ViewController',
        ]);
    }

    /**
     * @Route("/exo1", name="view_exo1")
     */
    public function exo1(): Response
    {
        return $this->render('view/exo1.html.twig', [
            'controller_name' => 'ViewController',
            /*
                'Nom'=>'Mathieu',
                'Prenom'=>'Thuet'
            */
        ]);
    }

    /**
     * @Route("/exo2", name="view_exo2")
     */
    public function exo2(): Response
    {
        $stagiaire = ['Fabrice','Moaz','Rudu','Valery','modou'];
        return $this->render('view/exo2.html.twig', [
            'controller_name' => 'ViewController',
            'tableau'=> $stagiaire, 
        ]);
    }

    /**
     * @Route("/exo3", name="view_exo3")
     */
    public function exo3(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'ViewController',
        ]);
    }
}
