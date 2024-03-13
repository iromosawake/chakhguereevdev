<?php

namespace App\Repository;

use App\Entity\EntrainementRealise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EntrainementRealise>
 *
 * @method EntrainementRealise|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntrainementRealise|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntrainementRealise[]    findAll()
 * @method EntrainementRealise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntrainementRealiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntrainementRealise::class);
    }

    /**
     * @return EntrainementRealise[] Returns an array of EntrainementRealise objects
     */
    public function findUserEntrainementsRealises($user): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.user = :val')
            ->setParameter('val', $user)
            ->orderBy('e.date', 'DESC')
            ->setMaxResults(7)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?EntrainementRealise
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
