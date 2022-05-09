<?php

namespace App\Controller\Api\Statistique;

use App\Repository\ProfilRepository;
use App\Repository\ProfilUserRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints\DateTime;
use Nelmio\ApiDocBundle\Annotation\Security;


/**
 * @Route("/api/users", name="api_users")
 */
class UserController extends AbstractController
{


    private $userRepository;
    private $profilRepository;
    private $profilUserRepository;

    /**
     * @param UsersRepository $userRepository
     * @param ProfilRepository $profilRepository
     * @param ProfilUserRepository $profilUserRepository
     */
    public function __construct(UsersRepository $userRepository,
                                ProfilRepository $profilRepository, ProfilUserRepository $profilUserRepository)
    {
        $this->userRepository = $userRepository;
        $this->profilRepository = $profilRepository;
        $this->profilUserRepository = $profilUserRepository;

    }

    /**
     * Nombre des utilisateurs par profile.
     * @OA\Response(
     *     response=200,
     *     description="return tableaux chaque profile et le nombre de utilisateurs"
     * )
     *
     * @OA\Tag(name="Statistique-Users")
     * @Security(name="Bearer")
     * @Route("/index", name="statistique_users_by_profil",  methods={"GET"})
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
     * Nombre de inscriptions .
     * @OA\Response(
     *     response=200,
     *     description="return nombre de inscription"
     * )
     *
     * @OA\Tag(name="Statistique-Users")
     * @Security(name="Bearer")
     * @Route("/statRegister", name="statistique_users_created",  methods={"GET"})
     */
    public function statistiqueUserCreated()
    {

        $currentDate = (new \DateTime());
        $firstDate = date('Y-m-d', strtotime($currentDate->format('Y-m-d') . ' -7 days'));
        $users = $this->userRepository->countUserRegister($firstDate ,$currentDate->format('Y-m-d'));
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'inscriptions' => $user['nbrUsers'],
                'DateCreat' => $user['DateCreat']->format('d-m-Y')
            ];
        }
        return $this->json($data);

    }


    /**
     * Statistique des utilisateurs qui a connecté  aujourd'hui
     * @Route("/index3", name="statistique_users-connected",  methods={"GET"})
     * @OA\Get(description="Statistique des utilisateurs qui a connecté  aujourd'hui "
     * ),
     * @OA\Response(response="200",description="succès"
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
     * Nombre des utilisateurs globals
     * @Route("/count", name="nbr_users_global",  methods={"GET"})
     * @OA\Get(description="Nombre des utilisateurs globals"
     * ),
     * @OA\Response(response="200",description="succès "
     * ),
     * @OA\Tag(name="Statistique-Users")
     */

    public function countRegister() {
        $users = $this->userRepository->findAll();
        return $this->json(count($users));

    }

    /**
     * @Route("/countStat", name="nbr_users_count",  methods={"GET"})
     */
    public function countUsers() {
        $currentDate = (new \DateTime());
        $users = $this->userRepository->findAll();
        $usersConnected = $this->userRepository->countUserConnectedByDay($currentDate->format('Y-m-d'));
        $data = [];
        $res1['title'] = count($users) ;
        $res1['color'] =  '#00C4B4' ;
        $res1['subTitle'] = 'Nombre de utilisateurs' ;
        $res1['imageIcon'] = '/images/dashboard/icon-wallet.png' ;

        $res2['title'] = count($usersConnected) ;
        $res2['color'] =  '#00C4B4' ;
        $res2['subTitle'] = 'Nombre de utilisateurs connectée' ;
        $res2['imageIcon'] = '/images/dashboard/icon-wallet.png' ;
        $data = [$res1, $res2];

        return $this->json($data);
    }


    /**
     * @Route("/statProfil", name="nbr_users_profile",  methods={"GET"})
     */

    public function countProfileUser() {
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
     * Nombre des utilisateur qui visitée l'application .
     * @OA\Response(
     *     response=200,
     *     description="Nombre des utilisateur qui visitée l'application ."
     * )
     *
     * @OA\Tag(name="Statistique-Users")
     * @Security(name="Bearer")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route("/visitor", name="nbr_users_profile",  methods={"GET"})
     */
    public function countUserVisitor()
    {

        $currentDate = (new \DateTime());
        $firstDate = date('Y-m-d', strtotime($currentDate->format('Y-m-d') . ' -7 days'));
        $users = $this->userRepository->countUserVisitor($firstDate ,$currentDate->format('Y-m-d'));
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'utilisateurs' => $user['nbrUsers'],
                'DateDernCon' => $user['DateDernCon']->format('d-m-Y')
            ];
        }
        return $this->json($data);

    }


}