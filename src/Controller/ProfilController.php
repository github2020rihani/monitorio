<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Psr\Log\LoggerInterface;

/**
 * @Route("api/profile", name= "profils")
 */
class ProfilController extends AbstractController
{
    /**
     * list all profiles
     * @Route("/index", methods={"GET"})
     * @OA\Get(description="list of profiles"
     * ),
     * @OA\Response(response="200",description="Returns the list of profile",
     *content={
     *@OA\MediaType(mediaType="application/json",
     *@OA\Schema(
     *@OA\Property(property="NomProfil", type="string"),
     *@OA\Property(property="ProfilDesc", type="string")
     *)
     *
     *)
     *}
     * ),
     * @OA\Tag(name="Profil")
     */

    public function index(ProfilRepository $profilRepository)
    {

        $profile = $this->getDoctrine()
            ->getRepository(Profil::class)
            ->findAll();

        $data = [];

        foreach ($profile as $profil) {
            $data[] = [
                'id' => $profil->getId(),
                'NomProfil' => $profil->getNomProfil(),
                'ProfilDesc' => $profil->getProfilDesc(),
                'ProfilSys' => $profil->getProfilSys(),
                'DateCreat' => $profil->getDateCreat(),

                // 'UserCreat' => $profil->getDateCreat(),
            ];
        }


        return $this->json($data);
    }

    /**
     * @Route("/new", name="Profile_new", methods={"POST"})
     * @OA\Tag(name="Profil")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        try {
            $request = $this->transformJsonBody($request);
            if (!$request || !$request->get('NomProfil') || !$request->request->get('ProfilDesc') || !$request->request->get('ProfilSys')) {
                throw new \Exception();
            }
            $profil = new Profil();
            $profil->setNomProfil($request->get('NomProfil'));
            $profil->setProfilDesc($request->get('ProfilDesc'));
            $profil->setProfilSys($request->get('ProfilSys'));

            $entityManager->persist($profil);
            $entityManager->flush();
            $data = [
                'status' => 200,
                'success' => "Profile added successfully",
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
     * @Route("/show/{id}", name="profil_show", methods={"GET"})
     *@OA\Tag(name="Profil")
     */
    public function show(ProfilRepository $profilRepository, $id)
    {
        $profil = $profilRepository->find($id);

        if (!$profil) {
            $data = [
                'status' => 404,
                'errors' => "Profile not found",
            ];
            return $this->response($data, 404);
        }
        return $this->response($profil);
    }

    /**
     * @Route("/edit/{id}", name="profil_edit", methods={"PUT"})
     *@OA\Tag(name="Profil")
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, ProfilRepository $profilRepository, $id)
    {
        try {
            $profil = $profilRepository->find($id);

            if (!$profil) {
                $data = [
                    'status' => 404,
                    'errors' => "Profile not found",
                ];
                return $this->response($data, 404);
            }

            $request = $this->transformJsonBody($request);

            if (!$request || !$request->get('NomProfil') || !$request->request->get('ProfilDesc') || !$request->request->get('ProfilSys')) {
                throw new \Exception();
            }

            $profil->setNomProfil($request->get('NomProfil'));
            $profil->setProfilDesc($request->get('ProfilDesc'));
            $profil->setProfilSys($request->get('ProfilSys'));

            $entityManager->flush();

            $data = [
                'status' => 200,
                'errors' => "Profile updated successfully",
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
     * @Route("/delete/{id}", name="profil_delete", methods={"DELETE"})
     *@OA\Tag(name="Profil")
     */
    public function delete(EntityManagerInterface $entityManager, ProfilRepository $profilRepository, $id)
    {
        $profil = $profilRepository->find($id);
        if (!$profil) {
            $data = [
                'status' => 404,
                'errors' => "Profile not found",
            ];
            return $this->response($data, 404);
        }

        $entityManager->remove($profil);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'errors' => "Profile deleted successfully",
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