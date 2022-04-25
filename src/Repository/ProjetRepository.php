<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Projet $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Projet $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function countProjetByDay($startDate, $endDate) {
        return $this->createQueryBuilder('p')
            ->select('count(p.id) as nbrProjet', 'p.DateCreat')
            ->where('p.DateCreat > :star_date')
            ->andWhere('p.DateCreat <= :end_date')
            ->setParameter('star_date', $startDate)
            ->setParameter('end_date', $endDate)
            ->orderBy('p.DateCreat', 'ASC')
            ->groupBy('p.DateCreat')
            ->getQuery()
            ->getResult()
            ;
    }

    public function countProjetByLocalisation() {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.location', 'pays')
            ->select('count(p.id) as nbrProjet', 'pays.nomPays')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->groupBy('p.location')
            ->getQuery()
            ->getResult()
            ;
    }
    public function countProjetByEtat() {
        return $this->createQueryBuilder('p')
            ->select('count(p.id) as nbrProjet', 'p.EtatProj')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->groupBy('p.EtatProj')
            ->getQuery()
            ->getResult()
            ;
    }


    public function getProjetInProgress($currentDate) {
        return $this->createQueryBuilder('p')
            ->where('p.EndDate >= :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->getQuery()
            ->getResult()
            ;
    }


    public function getProjetFinish($currentDate) {
        return $this->createQueryBuilder('p')
            ->where('p.EndDate < :currentDate')
            ->setParameter('currentDate', $currentDate)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Projet[] Returns an array of Projet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Projet
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
