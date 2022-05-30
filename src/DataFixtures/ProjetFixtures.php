<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\ProjetSect;
use App\Repository\PaysRepository;
use App\Repository\SecteurRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjetFixtures extends Fixture
{
    public function __construct(private SecteurRepository $secteurRepository, private PaysRepository $paysRepository)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $isProgram = [true, false];
        $etatsProj = ['A', 'B', 'C', 'D', 'E'];
        $randamnbrSecteur = random_int(1,3);
        $secteurs_array = [];
        $pays_array = [];
        $secteurs = $this->secteurRepository->findAll();
        foreach ($secteurs as $key=> $s) {
            $secteurs_array[$key] = $s->getId();
        }

        $pays = $this->paysRepository->findAll();
        foreach ($pays as $key=> $p) {
            $pays_array[$key] = $p->getId();
        }
        for ($i = 0; $i < 25; $i++) {
            $projet = new Projet();
            $projet->setCodeProjet($_ENV['PREFIX_CODE_PROJET'] . $i);
            $projet->setDescProjet('description');
            $projet->setTitreProjet("Projet $i");
            $projet->setEtatProj($etatsProj[array_rand($etatsProj)]);
            $projet->setIsProgram($isProgram[array_rand($isProgram)]);
            $projet->setLoginAdmin('admin@admin.com');
            $projet->setBudget(mt_rand(($i + 1) * 10, ($i + 1) * 10 + 250) / 10);
            $projet->setLocation($this->paysRepository->find($pays_array[array_rand($pays_array)]));

            $projet->setMainContact('ali tounsi');
            $projet->setUserCreat('admin@admin.com');
            $projet->setDateCreat(new \DateTime('now'));
            $projet->setStartDate(new \DateTime());
            $projet->setEndDate((new \DateTime())->add(new \DateInterval('P' . $i . 'D')));
            $manager->persist($projet);

            for ($j = 0 ; $j < $randamnbrSecteur ; $j++) {
                $projSec = new ProjetSect();
                $projSec->setProjet($projet); //save objet
                $projSec->setSecteur($this->secteurRepository->find($secteurs_array[array_rand($secteurs_array)])); //find by id
                $manager->persist($projSec);
            }




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
