<?php

namespace App\Repository;

use App\Entity\Cocktail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CocktailRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cocktail::class);
    }

    public function fetchAllCocktails()
    {
        $qb = $this->createQueryBuilder("c");

        $qb
            ->select("c.id as id", "c.name as name")
            ->distinct(true);

        return $qb->getQuery()->getResult();
    }
}