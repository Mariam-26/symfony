<?php

namespace App\Repository;

use App\Entity\PouvoirCreature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PouvoirCreature|null find($id, $lockMode = null, $lockVersion = null)
 * @method PouvoirCreature|null findOneBy(array $criteria, array $orderBy = null)
 * @method PouvoirCreature[]    findAll()
 * @method PouvoirCreature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PouvoirCreatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PouvoirCreature::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PouvoirCreature $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(PouvoirCreature $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PouvoirCreature[] Returns an array of PouvoirCreature objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PouvoirCreature
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
