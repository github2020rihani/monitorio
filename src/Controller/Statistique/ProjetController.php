<?php


namespace App\Controller\Statistique;

use App\Repository\ProfilRepository;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api/projet", name="api_projet")
 */
class ProjetController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;
    /**
     * @var ProjetRepository
     */
    private $projetRepository;
    private $profilRepository;

    /**
     * @param EntityManagerInterface $manager
     * @param ProjetRepository $projetRepository
     */
    public function __construct(EntityManagerInterface $manager,
                                ProfilRepository       $profilRepository,
                                ProjetRepository       $projetRepository)
    {
        $this->manager = $manager;
        $this->profilRepository = $profilRepository;
        $this->projetRepository = $projetRepository;
    }


    /**
     * statistique projet demo 1
     * @Route("/index", name="statistique_projet",  methods={"GET"})
     * @OA\Get(description="statistique projet demo 1 "
     * ),
     * @OA\Response(response="200",description="statistique usersby profile "
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function statistiqueProjet()
    {
        $currentDate = (new \DateTime());
        $firstDate = date('Y-m-d', strtotime($currentDate->format('Y-m-d') . ' -7 days'));
        $data = [];

        $projets = $this->projetRepository->countProjetByDay($firstDate ,$currentDate->format('Y-m-d'));
        foreach ($projets as $p) {
            $data[] = [
                'nbrProjet' => $p['nbrProjet'],
                'DateCreat' => $p['DateCreat']->format('d-m-Y')
            ];
        }
        return $this->response($data);

    }

    /**
     * statistique projet by localisation
     * @Route("/index2", methods={"GET"})
     * @OA\Get(description="statistique projet by localisation "
     * ),
     * @OA\Response(response="200",description="statistique projet by localisation "
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function statistiqueProjetByLocalisation()
    {
        $data = $this->projetRepository->countProjetByLocalisation();
        return $this->response($data);

    }



    /**
     * statistique projet by etat
     * @Route("/index3", methods={"GET"})
     * @OA\Get(description="statistique projet by etat "
     * ),
     * @OA\Response(response="200",description="statistique projet by etat ",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function statistiqueProjetByEtat()
    {
        $data = $this->projetRepository->countProjetByEtat();
        return $this->response($data);

    }

    /**
     * Nombre de projets en cours
     * @Route("/inprogress", methods={"GET"})
     * @OA\Get(description="Nombre de projets en cours"
     * ),
     * @OA\Response(response="200",description="Nombre de projets en cours",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function projetsInprogress() {
        $currentDate = new \DateTime();
        $projets = $this->projetRepository->getProjetInProgress($currentDate);
        return $this->json(count($projets));


    }
    /**
     * Nombre de projets terminée
     * @Route("/finish", methods={"GET"})
     * @OA\Get(description="Nombre de projets terminée "
     * ),
     * @OA\Response(response="200",description="Nombre de projets terminée",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function projetFinish() {
        $currentDate = new \DateTime();
        $projets = $this->projetRepository->getProjetFinish($currentDate);
        return $this->json(count($projets));

    }

    /**
     * Nombre de projets
     * @Route("/index4", methods={"GET"})
     * @OA\Get(description="Nombre de projets "
     * ),
     * @OA\Response(response="200",description="Nombre de projets ",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function countProjet() {
        $projets = $this->projetRepository->findAll();
        return $this->json(count($projets));
    }

    public function response($data, $status = 200, $headers = [])
    {
        return new JsonResponse($data, $status, $headers);
    }

}