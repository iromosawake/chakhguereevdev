<?php

namespace App\Repository;

use App\Entity\Savers;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Savers>
 *
 * @method Savers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Savers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Savers[]    findAll()
 * @method Savers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaversRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Savers::class);
    }

    public function save(Savers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Savers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllSavers(User $user)
    {
        return $this->findBy(['user' => $user],array('created_at'=> 'DESC'),7);
    }
}
