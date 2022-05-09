<?php

namespace App\Controller\Api\Full;

use App\Entity\Users;
use App\Form\UserType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use OpenApi\Annotations as OA;

/**
 * @Route("/api/Users")
 */
class UserController extends AbstractController
{


    /**
     * @Route("/index", name="user_index", methods={"GET"})
     * @OA\Tag(name="Users")
     */
    public function index(UsersRepository $userRepository): Response
    {

        $data = $userRepository->findAll();
        return $this->response($data);
    }

    /**
     * @Route("/new", name="User_new", methods={"PUT"})
     * @OA\Tag(name="Users")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {

        try {
            $request = $this->transformJsonBody($request);
            if (!$request || !$request->get('Login') || !$request->request->get('Nom') || !$request->request->get('Prenom')) {
                throw new \Exception();
            }

            $user = new Users();
            $user->setLogin($request->get('Login'));
            $user->setNom($request->get('Nom'));
            $user->setPrenom($request->get('Prenom'));
            // $password = $user->rand_pwd(8);
            // $en_pwd= sha1($password);
            // $user->setPwd($request->get($en_pwd));
            $entityManager->persist($user);
            $entityManager->flush();
            $data = [
                'status' => 200,
                'success' => "User added successfully",
            ];
            return $this->response($data);

        } catch (\Exception $e) {
            $data = [
                'status' => 422,
                'errors' => "Data no valid",
            ];
            return $this->response($data, 422);
        }
    }


    /**
     * @Route("/show/{id}", name="User_show", methods={"GET"})
     * @OA\Tag(name="Users")
     */
    public function show(UsersRepository $UserRepository, $id)
    {
        $user = $UserRepository->find($id);

        if (!$user) {
            $data = [
                'status' => 404,
                'errors' => "User not found",
            ];
            return $this->response($data, 404);
        }
        return $this->response($user);
    }


    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET", "POST"})
     * @OA\Tag(name="Users")
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, UsersRepository $UserRepository, $id)
    {
        try {
            $user = $UserRepository->find($id);

            if (!$user) {
                $data = [
                    'status' => 404,
                    'errors' => "User not found",
                ];
                return $this->response($data, 404);
            }

            $request = $this->transformJsonBody($request);

            if (!$request || !$request->get('Login') || !$request->request->get('Nom') || !$request->request->get('Prenom')) {
                throw new \Exception();
            }

            $user->setLogin($request->get('Login'));
            $user->setNom($request->get('Nom'));
            $user->setPrenom($request->get('Prenom'));

            $entityManager->flush();

            $data = [
                'status' => 200,
                'errors' => "User updated successfully",
            ];
            return $this->response($data);

        } catch (\Exception $e) {
            $data = [
                'status' => 422,
                'errors' => "Data no valid",
            ];
            return $this->response($data, 422);
        }

    }

    /**
     * @Route("/delete/{id}", name="users_delete", methods={"DELETE"})
     * @OA\Tag(name="Users")
     */
    public function delete(EntityManagerInterface $entityManager, UsersRepository $UserRepository, $id)
    {
        $user = $UserRepository->find($id);
        if (!$user) {
            $data = [
                'status' => 404,
                'errors' => "User not found",
            ];
            return $this->response($data, 404);
        }

        $entityManager->remove($user);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'errors' => "User deleted successfully",
        ];
        return $this->response($data);
    }

    public function response($data, $status = 200, $headers = [])
    {
        return new JsonResponse($data, $status, $headers);
    }

    protected function transformJsonBody(\Symfony\Component\HttpFoundation\Request $request)
    {
        $data = json_decode($request->getContent(), true);

        if ($data === null) {
            return $request;
        }

        $request->request->replace($data);

        return $request;
    }
}
