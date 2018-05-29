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

    public function filterCocktails($request)
    {
        $qb = $this->createQueryBuilder("c");
        $qb
            ->select("c.id", "c.name", "c.image", "c.globalRateVotes", "c.GlobalRate");

        if ( $request->get('ingredients') ){
            $ids = explode(",", $request->get('ingredients'));
            $qb
                ->join("c.ingredients","i")
                ->where('i.id IN (:ingredients)')
                ->setParameter("ingredients", $ids);
        }
        if ( $request->get('context') ){
            $ids = explode(",", $request->get('context'));
            $qb
                ->join("c.tags","t")
                ->andWhere('t.id IN (:context)')
                ->setParameter("context", $ids);
        }

        if ( $request->get('alcool') ){
            $ids = explode(",", $request->get('alcool'));
            $qb
                ->join("c.tags","a")
                ->andWhere('a.id IN (:alcool)')
                ->setParameter("alcool", $ids);
        }
        if ( $request->get('caracteristique') ){
            $ids = explode(",", $request->get('caracteristique'));
            $qb
                ->join("c.tags","ca")
                ->andWhere('ca.id IN (:caracteristique)')
                ->setParameter("caracteristique", $ids);
        }


        return $qb->getQuery()->getResult();
    }
}