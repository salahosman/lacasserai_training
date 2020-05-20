<?php

namespace App\Repository;

use App\Entity\OrganisationId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrganisationId|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrganisationId|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrganisationId[]    findAll()
 * @method OrganisationId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganisationIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrganisationId::class);
    }

    // /**
    //  * @return OrganisationId[] Returns an array of OrganisationId objects
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
    public function findOneBySomeField($value): ?OrganisationId
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
