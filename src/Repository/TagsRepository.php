<?php

namespace App\Repository;

use App\Entity\Tags;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tags|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tags|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tags[]    findAll()
 * @method Tags[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tags::class);
    }

    public function fetchAllTags()
    {

        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $alcool =  Tags::Tag_Alcools;
        $context = Tags::Tag_Context;
        $cara = Tags::Tag_Caracteristique;

        $query = $connection->prepare("
            SELECT t.id, t.name, t.type FROM tags as t
            WHERE t.type = :type
            UNION
            SELECT t2.id, t2.name, t2.type  FROM tags as t2
            WHERE t2.type = :type2
            UNION 
            SELECT t3.id, t3.name, t3.type  FROM tags as t3
            WHERE t3.type = :type3
            ");
        $query->bindParam("type", $alcool);
        $query->bindParam("type2", $cara);
        $query->bindParam("type3", $context);


        $query->execute();
        return  $query->fetchAll();
    }
//    /**
//     * @return Tags[] Returns an array of Tags objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tags
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
