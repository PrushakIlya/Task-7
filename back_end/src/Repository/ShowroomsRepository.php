<?php

namespace App\Repository;

use App\Entity\Showrooms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Showrooms>
 *
 * @method Showrooms|null find($id, $lockMode = null, $lockVersion = null)
 * @method Showrooms|null findOneBy(array $criteria, array $orderBy = null)
 * @method Showrooms[]    findAll()
 * @method Showrooms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowroomsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Showrooms::class);
    }

    public function add(Showrooms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Showrooms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getId()
    {
        return $this->createQueryBuilder('v')
           ->select('v.id')
           ->getQuery()
           ->getResult()
        ;
    }

//    /**
//     * @return Showrooms[] Returns an array of Showrooms objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Showrooms
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
