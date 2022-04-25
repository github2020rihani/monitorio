<?php

namespace App\Repository;

use App\Entity\ObjectifsHist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ObjectifsHist|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectifsHist|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectifsHist[]    findAll()
 * @method ObjectifsHist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectifsHistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectifsHist::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ObjectifsHist $entity, bool $flush = true): void
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
    public function remove(ObjectifsHist $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return ObjectifsHist[] Returns an array of ObjectifsHist objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObjectifsHist
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
