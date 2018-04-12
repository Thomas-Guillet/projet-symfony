<?php

namespace App\Repository;

use App\Entity\Clement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Clement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clement[]    findAll()
 * @method Clement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Clement::class);
    }

//    /**
//     * @return Clement[] Returns an array of Clement objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clement
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
