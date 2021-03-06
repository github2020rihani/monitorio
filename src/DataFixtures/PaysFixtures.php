<?php

namespace App\DataFixtures;

use App\Entity\Pays;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PaysFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i= 1 ; $i < 55 ; $i++) {
            $pays = new Pays();
            $pays->setNomPays("payer $i");
            $pays->setDateCreat(new \DateTime());
            $manager->persist($pays);


        }
            $manager->flush();
    }
}
