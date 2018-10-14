<?php

namespace App\Repository;

use App\Entity\GentleGiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GentleGiant|null find($id, $lockMode = null, $lockVersion = null)
 * @method GentleGiant|null findOneBy(array $criteria, array $orderBy = null)
 * @method GentleGiant[]    findAll()
 * @method GentleGiant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GentleGiantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GentleGiant::class);
    }

//    /**
//     * @return GentleGiant[] Returns an array of GentleGiant objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GentleGiant
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
