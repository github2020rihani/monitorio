<?php


namespace App\Controller\Api\Statistique;

use App\Repository\ProfilRepository;
use App\Repository\ProjetRepository;
use App\Repository\ProjetSectRepository;
use App\Repository\SecteurRepository;
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
     * Nombre des projets qui a été crée pendant une semaine
     * @Route("/index", name="statistique_projet",  methods={"GET"})
     * @OA\Get(description="Nombre des projets qui a été crée pendant une semaine"
     * ),
     * @OA\Response(response="200",description="succès "
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
                'Nombre de projet' => $p['nbrProjet'],
                'DateCreat' => $p['DateCreat']->format('d-m-Y')
            ];
        }
        return $this->response($data);

    }

    /**
     * Nombre des projets par localisation
     * @Route("/index2", name="statistique_nbr_project_by_loc" , methods={"GET"})
     * @OA\Get(description="Nombre des projets par localisation "
     * ),
     * @OA\Response(response="200",description="succès "
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function statistiqueProjetByLocalisation()
    {
        $data = $this->projetRepository->countProjetByLocalisation();
        return $this->response($data);

    }



    /**
     * Nombre des projets par état
     * @Route("/index3",name="statistique_nbr_projet_par_etat", methods={"GET"})
     * @OA\Get(description="Nombre des projets par état "
     * ),
     * @OA\Response(response="200",description="succés ",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function statistiqueProjetByEtat()
    {
        $data = $this->projetRepository->countProjetByEtat();
        return $this->response($data);

    }

    /**
     * Nombre des projets qui sont en cours
     * @Route("/inprogress", name="count_proj_encours", methods={"GET"})
     * @OA\Get(description="Nombre des projets qui sont  en cours"
     * ),
     * @OA\Response(response="200",description="succès",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function projetsInprogress() {
        $currentDate = new \DateTime();
        $projets = $this->projetRepository->getProjetInProgress($currentDate);
        return $this->json(count($projets));


    }
    /**
     * Nombre des projets qui sont fermée
     * @Route("/finish", name="count_proj_finish" ,methods={"GET"})
     * @OA\Get(description="Nombre des projets qui sont fermée "
     * ),
     * @OA\Response(response="200",description="succès",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     */
    public function projetFinish() {
        $currentDate = new \DateTime();
        $projets = $this->projetRepository->getProjetFinish($currentDate);
        return $this->json(count($projets));

    }

    /**
     * Nombre de projets globals
     * @Route("/count", name="count_projet_global" ,methods={"GET"})
     * @OA\Get(description="Nombre de projets globals "
     * ),
     * @OA\Response(response="200",description="succès ",
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


    /**
     * Nombre des projets par secteur
     * @OA\Get(description="Nombre des projets par secteur "
     * ),
     * @OA\Response(response="200",description="succés ",
     * ),
     * @OA\Tag(name="Statistique-Projet")
     * @param SecteurRepository $secteurRepository
     * @param ProjetSectRepository $projetSectRepository
     * @return void
     * @Route("/by/secteur", name="count_projet_global" ,methods={"GET"})
     *
     */
    public function getProjetBySecteurs(SecteurRepository $secteurRepository, ProjetSectRepository $projetSectRepository) {

        $secteurs = $secteurRepository->findAll();
        $data = [];
        foreach ($secteurs as $s) {
            $countProjets = $projetSectRepository->findBy(array('secteur'=>$s->getId()));
            $data[] = [
                'name' => $s->getLibSecteur(),
                'value' => count($countProjets)
            ];
        }
        return $this->json($data);

    }




}