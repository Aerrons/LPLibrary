<?php

namespace Alexandrie\Repository;

use Alexandrie\Entity\Lending;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Lending|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lending|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lending[]    findAll()
 * @method Lending[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LendingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lending::class);
    }

    // /**
    //  * @return Lending[] Returns an array of Lending objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lending
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
