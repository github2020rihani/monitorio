<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use App\Entity\ProfilUser;
use App\Entity\User;
use App\Repository\ProfilRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    private $profilRepository;

    public function __construct(ProfilRepository $profilRepository)
    {
        $this->profilRepository = $profilRepository;

    }

    public function load(ObjectManager $manager): void
    {
        $profils = [];
        $profil = new Profil();
        $profil->setNomProfil('Administrator');
        $profil->setProfilDesc('Administrator');
        $profil->setProfilSys(true);
        $profil->setDateCreat(new \DateTime());
        $manager->persist($profil);
        $profils[] =$profil->getId();
        $manager->flush();

        $profil2 = new Profil();
        $profil2->setNomProfil('Decision committee');
        $profil2->setProfilDesc('Decision committee');
        $profil2->setProfilSys(true);
        $profil2->setDateCreat(new \DateTime());
        $manager->persist($profil2);
        $profils[] =$profil2->getId();

        $manager->flush();

        $profil3 = new Profil();
        $profil3->setNomProfil('Internal reviewer');
        $profil3->setProfilDesc('Internal reviewer');
        $profil3->setProfilSys(true);
        $profil3->setDateCreat(new \DateTime());
        $manager->persist($profil3);
        $profils[] =$profil3->getId();

        $manager->flush();

        $profil4 = new Profil();
        $profil4->setNomProfil('Auditor');
        $profil4->setProfilDesc('Auditor');
        $profil4->setProfilSys(true);
        $profil4->setDateCreat(new \DateTime());
        $manager->persist($profil4);
        $profils[] =$profil4->getId();
        $manager->flush();

        $profil5 = new Profil();
        $profil5->setNomProfil('Collaborator');
        $profil5->setProfilDesc('Collaborator');
        $profil5->setProfilSys(true);
        $profil5->setDateCreat(new \DateTime());
        $manager->persist($profil5);
        $profils[] =$profil5->getId();

        $manager->flush();

        $profil6 = new Profil();
        $profil6->setNomProfil('Project Manager');
        $profil6->setProfilDesc('Project Manager');
        $profil6->setProfilSys(true);
        $profil6->setDateCreat(new \DateTime());
        $manager->persist($profil6);
        $profils[] =$profil6->getId();

        $manager->flush();


        $isConnect = [true, false];
        $Date = "2022-04-02";
        $lastConnect = date('Y-m-d', strtotime($Date . ' + 5 days'));
        for ($i = 1; $i < 28; $i++) {
            $user = new User();
            $user->setLogin("login$i@email.com");
            $user->setNom("nom $i");
            $user->setPrenom("prenom $i");
            $user->setPwd("password");
            $user->setEtatActiv(true);
            $user->setEtatConnect($isConnect[array_rand($isConnect)]);
            $user->setIsAdminOng(false);
            $user->setDateDernCon(new \DateTime($lastConnect));
            $user->setDateCreat(new \DateTime());
            $manager->persist($user);

            $profil_user = new ProfilUser();
            $profil_user->setUser($user);
            $profil_user->setProfil($this->profilRepository->find(rand(31,36)));
            $manager->persist($profil_user);
        }

        $manager->flush();
    }
}
