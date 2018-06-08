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
            ->select("c.id", "c.name", "c.image", "c.globalRateVotes", "c.GlobalRate", "c.speedRate", "c.difficultyRate", "c.PriceRate");

        if ( $request->get('ingredients') ){
            $ids = explode(",", $request->get('ingredients'));
            $qb
                ->join("c.ingredients","i")
                ->where('i.id IN (:ingredients)')
                ->setParameter("ingredients", $ids);
        }

        if ( $request->get('alcool') ){
            $ids = explode(",", $request->get('alcool'));
            $qb
                ->join("c.tags","a")
                ->andWhere('a.id IN (:alcool)')
                ->setParameter("alcool", $ids);
        }

//        if ( $request->get('context') ){
//            $ids = explode(",", $request->get('context'));
//            $qb
//                ->leftjoin("c.tags","t");
////                ->andWhere('t.id IN (:context)')
////                ->setParameter("context", $ids);
//        }
//
//        if ( $request->get('caracteristique') ){
//            $ids = explode(",", $request->get('caracteristique'));
//            $qb
//                ->leftjoin("c.tags","ca");
//        }
            $qb->groupBy("c.id");

        return $qb->getQuery()->getResult();
    }

    public function findCocktailByName($id)
    {
        $qb = $this->createQueryBuilder("c");
        $qb
            ->select("c.id", "c.name", "c.image", "c.globalRateVotes", "c.GlobalRate")
            ->where('c.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getResult();

    }

    public function findTheBest()
    {
        $qb = $this->createQueryBuilder("c");
        $qb
            ->select("c.id", "c.name", "c.image", "c.globalRateVotes", "c.GlobalRate", "c.difficultyRate", "c.speedRate", "c.PriceRate")
            ->orderBy("c.GlobalRate", "DESC")
            ->setMaxResults(12);

        return $qb->getQuery()->getResult();
    }

    public function findByid($id)
    {

        $qb = $this->createQueryBuilder("c");
        $qb
//            ->select("c.id", "c.name", "c.image", "c.globalRateVotes", "c.GlobalRate",
//                "c.speedRate", "c.speedRateVotes", "c.difficultyRate", "c.difficultyRateVotes", "c.PriceRate", "c.priceRateVotes",
//                "t.id", "t.name as tagName", "t.type",
//                "s.id", "s.name as stepname", "s.description", "s.url", "s.image", "s.nStep",
//                "i.id", "i.name as ingredientName", "i.quantity", "i.unity"
//            )
//            ->join("c.tags", "t")
//            ->join("c.steps", "s")
//            ->join("c.ingredients", "i")
            ->where("c.id = :id")
            ->setParameter("id", $id);

        return $qb->getQuery()->getOneOrNullResult();

    }
}