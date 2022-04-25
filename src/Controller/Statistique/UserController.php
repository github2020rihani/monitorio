<?php

namespace App\Controller\Statistique;

use App\Repository\ProfilRepository;
use App\Repository\ProfilUserRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints\DateTime;


/**
 * @Route("/api/users", name="api_users")
 */
class UserController extends AbstractController
{


    private $userRepository;
    private $profilRepository;
    private $profilUserRepository;

    /**
     * @param UserRepository $userRepository
     * @param ProfilRepository $profilRepository
     * @param ProfilUserRepository $profilUserRepository
     */
    public function __construct(UserRepository $userRepository, ProfilRepository $profilRepository, ProfilUserRepository $profilUserRepository)
    {
        $this->userRepository = $userRepository;
        $this->profilRepository = $profilRepository;
        $this->profilUserRepository = $profilUserRepository;

    }

    /**
     * statistique usersby profile
     * @Route("/index", name="statistique_users_by_profil",  methods={"GET"})
     * @OA\Get(description="statistique usersby profile "
     * ),
     * @OA\Response(response="200",description="statistique usersby profile "
     * ),
     * @OA\Tag(name="Statistique-Users")
     */
    public function statistiqueUserByProfile()
    {

        $data = [];
        $profils = $this->profilRepository->findAll();
        if ($profils) {
            foreach ($profils as $profil) {
                $data[] = [
                    'profileName' => $profil->getNomProfil(),
                    'nbrUsers' => $this->profilUserRepository->countUserByProfil($profil->getId())[1]
                ];

            }
        }
        return $this->json($data);


    }

    /**
     * statistique users created
     * @Route("/index2", name="statistique users created",  methods={"GET"})
     * @OA\Get(description="statistique users created "
     * ),
     * @OA\Response(response="200",description="statistique users created "
     * ),
     * @OA\Tag(name="Statistique-Users")
     */
    public function statistiqueUserCreated()
    {

        $currentDate = (new \DateTime());
        $firstDate = date('Y-m-d', strtotime($currentDate->format('Y-m-d') . ' -7 days'));
        $users = $this->userRepository->countUserRegister($firstDate ,$currentDate->format('Y-m-d'));
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'nbrUsers' => $user['nbrUsers'],
                'DateCreat' => $user['DateCreat']->format('d-m-Y')
            ];
        }
        return $this->json($data);

    }


    /**
     * statistique users connected by day
     * @Route("/index3", name="statistique users connected by day",  methods={"GET"})
     * @OA\Get(description="statistique users created "
     * ),
     * @OA\Response(response="200",description="statistique users connected by day "
     * ),
     * @OA\Tag(name="Statistique-Users")
     */
    public function statistiqueUserConnected()
    {
        $currentDate = (new \DateTime());
        $users = $this->userRepository->countUserConnectedByDay($currentDate->format('Y-m-d'));
        $data = [];
//
        foreach ($users as $user) {
            $data[] = [
                'nbrUsers' => $user['nbrUsers'],
                'DateCreat' => $user['DateCreat']->format('d-m-Y')
            ];
        }
        return $this->json($data);

    }

    /**
     * Nombre des enregistrement des utilisateurs
     * @Route("/index4", name="Nombre des enregistrement des utilisateurs",  methods={"GET"})
     * @OA\Get(description="Nombre des enregistrement des utilisateurs "
     * ),
     * @OA\Response(response="200",description="Nombre des enregistrement des utilisateurs "
     * ),
     * @OA\Tag(name="Statistique-Users")
     */

    public function countRegister() {
        $users = $this->userRepository->findAll();
        return $this->json(count($users));

    }



}