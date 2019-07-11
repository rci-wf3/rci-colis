<?php

namespace App\Repository;

use App\Entity\RCI;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RCI|null find($id, $lockMode = null, $lockVersion = null)
 * @method RCI|null findOneBy(array $criteria, array $orderBy = null)
 * @method RCI[]    findAll()
 * @method RCI[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RCIRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RCI::class);
    }

    // /**
    //  * @return RCI[] Returns an array of RCI objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RCI
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
