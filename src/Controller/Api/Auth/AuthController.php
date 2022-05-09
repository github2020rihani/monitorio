<?php

namespace App\Controller\Api\Auth;

use App\Entity\ProfilUser;
use App\Repository\ProfilRepository;
use App\Repository\ProfilUserRepository;
use App\Repository\ProjetRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Firebase\JWT\JWT;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;
use OpenApi\Annotations as OA;
use function PHPUnit\Framework\returnArgument;


class AuthController extends AbstractController
{

    public function __construct(private UsersRepository $usersRepository,
                                private ProfilRepository  $profilRepository,
                                private EntityManagerInterface $entityManager,
                                private Security $security,
                                private SerializerInterface $serialize)
    {
    }

    /**
     * Inscription
     * @OA\Get(description="Inscription des utilisateurs "
     * ),
     * @OA\Response(response="200",description="succès ",
     * ),
     * @Route("api/register", name="user.register")
     * @param Request $request
     * @return JsonResponse
     * @OA\Tag(name="Authentification")
     */
    public function register(Request $request, JWTTokenManagerInterface $JWTTokenManager): JsonResponse
    {
        $jsonData = json_decode($request->getContent());
        $user = $this->usersRepository->create($jsonData);
        if (!$user) {
            return new JsonResponse([
                'message' => 'error survenue',
            ], 400);
        }

        $token = $JWTTokenManager->create($user);
        //save profile users
        $profilUser = new ProfilUser();
        $profilUser->setUser($user);
        $profilUser->setProfil($this->profilRepository->findBy(array('NomProfil' => 'Administrator'))[0]);
        $this->entityManager->persist($profilUser);
        $this->entityManager->flush();
        return new JsonResponse([
            'user' => $this->serialize->serialize($user, 'json'),
            'token' => $token

        ], 201);
    }


    /**
     * @Route("api/profile", name="user.profile")
     * @OA\Tag(name="Authentification")
     * @return JsonResponse
     */
    public function profile(ProfilUserRepository $profilUserRepository, UsersRepository $usersRepository, ProjetRepository $projetRepository) : JsonResponse {
        $currentUser = $this->security->getUser();
        $users = $usersRepository->findAll();
        $currentDate = new \DateTime();
        $projetsFinish = $projetRepository->getProjetFinish($currentDate);
        $projetsInprogress = $projetRepository->getProjetInProgress($currentDate);
        $projets = $projetRepository->findAll();
        $user = $this->serialize->serialize($currentUser, 'json');
        if ($user){
            return new JsonResponse([
                'user' => $this->serialize->serialize($user, 'json'),
                'nbrUsers' => count($users),
                'nbrProjetEncour' => count($projetsInprogress),
                'nbrProjetfinish' => count($projetsFinish),
                'nbrProjets' => count($projets),
            ] , 200);
        }else{
            return new JsonResponse([
                'message' => 'error survenue'
            ] , 400);
        }



    }

    /**
     * @param ProfilUserRepository $profilUserRepository
     * @Route("api/detail", name="user.detail")
     * @OA\Tag(name="Authentification")
     * @return JsonResponse
     */
    public function detailProfile(ProfilUserRepository $profilUserRepository, ProjetRepository $projetRepository) : JsonResponse {
        $data = [];

        $currentUser = $this->security->getUser();
        $profileUser = $profilUserRepository->findOneBy(array('user'=> $currentUser->getId()))->getProfil()->getNomProfil();
        $projets = $projetRepository->findBy(array('UserCreat'=> $currentUser->getEmail()));

        $data['user'] =  $currentUser;
        $data['Nom'] =  $currentUser->getNom();
        $data['email'] =  $currentUser->getEmail();
        $data['profile'] = $profileUser;
        $data['projets'] = $projets;
        $data['status'] = 200;
        return $this->json($data);
    }


    /**
     * @Route("api/auth/login", name="auth_login", methods={"POST"})
     * @OA\Tag(name="Authentification")
     */
    public function loginauth(Request $request, UsersRepository $userRepository, UserPasswordHasherInterface $encoder,
                              JWTTokenManagerInterface $JWTTokenManager)
    {
        $jsonData = json_decode($request->getContent());
        $user = $userRepository->findOneBy([
            'email'=>$jsonData->email,
        ]);
        if (!$user || !$encoder->isPasswordValid($user,$jsonData->password)) {
            return $this->json([
                'message' => 'email or password is wrong.',
            ]);
        }
        $user->setEtatConnect(true);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $token = $JWTTokenManager->create($user) ;

        return new JsonResponse([
            'user' => $this->serialize->serialize($user, 'json'),
            'token' => $token

        ], 201);
    }

    /**
     * @Route("api/logout", name="auth_logout", methods={"GET"})
     * @OA\Tag(name="Authentification")
     */
    public function authLogout() {
        $currentUser = $this->security->getUser();
        $currentUser->setEtatConnect(false);
        $currentUser->setDateDernCon(new \DateTime());
        $this->entityManager->persist($currentUser);
        $this->entityManager->flush();
        return $this->json('user deconnected');


    }

}

