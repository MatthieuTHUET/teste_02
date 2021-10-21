<?php

namespace App\DataFixtures;

use App\Entity\Articles;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
// use Faker;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        
        for ($i=0; $i<20 ; $i++ ) 
        { 
            $articles = new Articles();
            
            $articles->setTitle(" Titre de l'article N°$i ")
                    ->setContenu(" Contenu de l'article N° $i ");
                   // ->setDate(new \DateTime());
            $manager->persist($articles);
        }
     $manager->flush();
    }
}
