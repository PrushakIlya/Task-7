<?php

namespace App\Repository;

use App\Entity\Vehicles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vehicles>
 *
 * @method Vehicles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicles[]    findAll()
 * @method Vehicles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehiclesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicles::class);
    }

    public function add(Vehicles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Vehicles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function averagePriceSoldAllTime()
    {
        return $this->createQueryBuilder('v')
           ->where('v.dateOfSold != :dateOfSold')
           ->setParameter('dateOfSold', 0)
           ->select('AVG(v.price)')
           ->getQuery()
           ->getOneOrNullResult()
        ;
    }

    public function averagePriceSoldToday()
    {
        return $this->createQueryBuilder('v')
           ->where('v.dateOfSold = :dateOfSold')
           ->setParameter('dateOfSold', date("Y-m-d"))
           ->select('AVG(v.price)')
           ->getQuery()
           ->getOneOrNullResult()
        ;
    }

    public function numbersOfCarsSoldByDate()
    {
        return $this->createQueryBuilder('v')
           ->select('v.dateOfSold', 'count(v.dateOfSold) as count')
           ->where('v.dateOfSold != :dateOfSold')
           ->setParameter('dateOfSold', 0)
           ->groupBy('v.dateOfSold')
           ->getQuery()
           ->getResult()
        ;
    }

    public function unsoldCars()
    {
        return $this->createQueryBuilder('v')
           ->where('v.dateOfSold = :dateOfSold')
           ->setParameter('dateOfSold', 0)
           ->orderBy('v.price','ASC')
           ->orderBy('v.yearOfProduction','ASC')
           ->getQuery()
           ->getResult()
        ;
    }

    public function currentlyOnSale()
    {
        return $this->createQueryBuilder('v')
           ->where('v.sale = :sale')
           ->setParameter('sale', 1)
           ->getQuery()
           ->getResult()
        ;
    }
//    /**
//     * @return Vehicles[] Returns an array of Vehicles objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vehicles
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
