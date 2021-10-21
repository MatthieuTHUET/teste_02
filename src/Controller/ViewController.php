<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/view")
     */
    
     class ViewController extends AbstractController
{
    /**
     * @Route("/", name="view_index")
     */
    public function index(): Response
    {
        return $this->render('exo/index.html.twig', [
            'controller_name' => 'ViewController',
        ]);
    }

    
    // Opérations sur des  Variables dans la vue
        /**
         * @Route("/operation/", name="view_operation")
         */
        public function viewOpearationn()
        {
        return $this->render('my_view/operation.html.twig', array(
        ));
        }

    // Conditions sur des  Variables dans la vue

        /**
         * @Route("/condition/", name="view_condition")
         */
        public function viewCondition()
        {
    
        return $this->render('my_view/condition.html.twig', array(
        ));
        
        }

  // Structure itérative

        /**
         * @Route("/iteration/", name="view_interation")
         */
        public function viewInteration()
        {
    
        return $this->render('my_view/interation.html.twig', array(
        ));
        }

  // Les Filtres

        /**
         * @Route("/filtre/", name="view_filtre")
         */
        public function viewFiltre()
        {
    
        return $this->render('my_view/filtre.html.twig', array(
        ));
        }      
    
}
