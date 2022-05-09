<?php

namespace App\DataFixtures;

use App\Entity\Secteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SecteurFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $secteur = new Secteur();
            $secteur->setLibSecteur('Secteur '.$i);
            $secteur->setDateCreat(new \DateTime());
            $manager->persist($secteur);



        }

        $manager->flush();
    }
}
