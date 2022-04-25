<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $isProgram = [true, false];
        $etatsProj = ['A', 'B' , 'C' , 'D', 'E'];
        for ($i = 0; $i < 100; $i++) {
            $projet = new Projet();
            $projet ->setCodeProjet($_ENV['PREFIX_CODE_PROJET'] . $i);
                $projet->setDescProjet('description');
              $projet  ->setTitreProjet("Projet $i");
              $projet  ->setEtatProj($etatsProj[array_rand($etatsProj)]);
              $projet  ->setIsProgram($isProgram[array_rand($isProgram)]);
              $projet  ->setLoginAdmin('admin@admin.com');
              $projet  ->setBudget(mt_rand(($i + 1) * 10, ($i + 1) * 10 + 250) / 10);
              $projet  ->setMainContact('ali tounsi');
              $projet  ->setUserCreat('admin@admin.com');
             $projet   ->setDateCreat(new \DateTime('now'));
             $projet->setStartDate(new \DateTime());
             $projet->setEndDate((new \DateTime())->add(new \DateInterval('P1D')));
;

            $manager->persist($projet);
        }
        $manager->flush();
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, 1)];
        }
        return $randomString;
    }
}
