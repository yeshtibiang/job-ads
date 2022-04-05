<?php

namespace App\Repository;

use App\Entity\Motifs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Motifs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Motifs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Motifs[]    findAll()
 * @method Motifs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotifsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Motifs::class);
    }

    // /**
    //  * @return Motifs[] Returns an array of Motifs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Motifs
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
