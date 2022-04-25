<?php

namespace App\Controller;

use App\Entity\Permission;
use App\Repository\PermissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

/**
 * @Route("api/permission", name= "permission")
 */
class PermissionController extends AbstractController
{


    /**
     * @Route("/index", methods={"GET"})
     * @OA\Tag(name="Permission")
     */

    public function index(PermissionRepository $permissionRepository)
    {

        $Permission = $this->getDoctrine()
            ->getRepository(Permission::class)
            ->findAll();

        $data = [];

        foreach ($Permission as $Permission) {
            $data[] = [
                'id' => $Permission->getId(),
                'CodePerm' => $Permission->getCodePerm(),
                'DescPerm' => $Permission->getDescPerm(),
                'DateCreat' => $Permission->getDateCreat(),
                'UserCreat' => $Permission->getUserCreat(),
                'ParDefaut' => $Permission->getParDefaut(),
                // 'UserCreat' => $profil->getDateCreat(),
            ];
        }


        return $this->json($data);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param PermissionRepository $permissionRepository
     * @return JsonResponse
     * @throws \Exception
     * @Route("/new", name="permission_add", methods={"POST"})
     * @OA\Tag(name="Permission")
     */
    public function add(Request $request, EntityManagerInterface $entityManager, PermissionRepository $permissionRepository)
    {

        try {
            $request = $this->transformJsonBody($request);

            if (!$request || !$request->get('CodePerm') || !$request->request->get('DescPerm')) {
                throw new \Exception();
            }

            $permission = new Permission();
            $permission->setCodePerm($request->get('CodePerm'));
            $permission->setDescPerm($request->get('DescPerm'));
            $entityManager->persist($permission);
            $entityManager->flush();

            $data = [
                'status' => 200,
                'success' => "permission added successfully",
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
     * @Route("/show/{id}", name="Permission_show", methods={"GET"})
     * @OA\Tag(name="Permission")
     */

    public function show(PermissionRepository $PermissionRepository, $id)
    {
        $Permission = $PermissionRepository->find($id);

        if (!$Permission) {
            $data = [
                'status' => 404,
                'errors' => "Permission not found",
            ];
            return $this->response($data, 404);
        }
        return $this->response($Permission);
    }


    /**
     * @Route("/edit/{id}", name="Permission_edit", methods={"PUT"})
     * @OA\Tag(name="Permission")
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, PermissionRepository $PermissionRepository, $id)
    {
        try {
            $Permission = $PermissionRepository->find($id);

            if (!$Permission) {
                $data = [
                    'status' => 404,
                    'errors' => "Permission not found",
                ];
                return $this->response($data, 404);
            }

            $request = $this->transformJsonBody($request);

            if (!$request || !$request->get('CodePerm') || !$request->request->get('DescPerm')) {
                throw new \Exception();
            }

            $Permission->setNomProfil($request->get('CodePerm'));
            $Permission->setProfilDesc($request->get('DescPerm'));

            $entityManager->flush();

            $data = [
                'status' => 200,
                'errors' => "Permission updated successfully",
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
     * @Route("/delete/{id}", name="Permission_delete", methods={"DELETE"})
     * @OA\Tag(name="Permission")
     */
    public function delete(EntityManagerInterface $entityManager, PermissionRepository $PermissionRepository, $id)
    {
        $Permission = $PermissionRepository->find($id);
        if (!$Permission) {
            $data = [
                'status' => 404,
                'errors' => "Permission not found",
            ];
            return $this->response($data, 404);
        }

        $entityManager->remove($Permission);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'errors' => "Permissione deleted successfully",
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
