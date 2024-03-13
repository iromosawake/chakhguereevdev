<?php

namespace App\Repository;

use App\Entity\Seance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Seance>
 *
 * @method Seance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Seance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Seance[]    findAll()
 * @method Seance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seance::class);
    }

    public function save(Seance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Seance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Seance[] Returns an array of Seance objects
     */
    public function findBySemaine($value): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.semaine = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findBySeance($value): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    //Récupérer les seances selon l'objectif
    public function findSeanceByObjectif($value): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }

    /* requete optimiséee */
    public function getSeancesWithAutors()
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.createdby', 'u')
            ->addSelect('u')
            ->leftJoin('s.programmes', 'p')
            ->addSelect('p')
            ->leftJoin('p.exercice', 'e')
            ->addSelect('e')
            ->leftJoin('s.zone', 'z')
            ->addSelect('z')
            ->leftJoin('e.patternMuscle', 'ptr')
            ->addSelect('ptr')
            ->getQuery()
            ->getResult();
    }

}
