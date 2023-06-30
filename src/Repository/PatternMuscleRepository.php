<?php

namespace App\Repository;

use App\Entity\PatternMuscle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PatternMuscle>
 *
 * @method PatternMuscle|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatternMuscle|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatternMuscle[]    findAll()
 * @method PatternMuscle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatternMuscleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatternMuscle::class);
    }

    public function save(PatternMuscle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PatternMuscle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PatternMuscle[] Returns an array of PatternMuscle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PatternMuscle
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
