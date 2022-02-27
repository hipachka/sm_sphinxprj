<?php

namespace App\Repository;

use App\Entity\EduPages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EduPages|null find($id, $lockMode = null, $lockVersion = null)
 * @method EduPages|null findOneBy(array $criteria, array $orderBy = null)
 * @method EduPages[]    findAll()
 * @method EduPages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EduPagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EduPages::class);
    }

    // /**
    //  * @return EduPages[] Returns an array of EduPages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EduPages
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
