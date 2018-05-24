<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Tags;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Cocktail;

/**
 *
 * @Route("/api")
 */
class CocktailController extends Controller
{
    /**
     * Lists all cocktails and tags
     * @FOSRest\Get("/tags")
     */
    public function getCocktails()
    {
        $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->fetchAllCocktails();
        $ingredients = $this->getDoctrine()->getRepository(Ingredients::class)->fetchAllIngredients();
        $tags = $this->getDoctrine()->getRepository(Tags::class)->fetchAllTags();

        dump($cocktails);die;

        return View::create($cocktails, Response::HTTP_OK, []);
    }


    /**
     * Create cocktail.
     * @FOSRest\Post("/cocktail")
     */
    public function postCocktail(Request $request)
    {
        $article = new Cocktail();
        $article->setName($request->get('name'));
        $article->setDescription($request->get('description'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return View::create($article, Response::HTTP_CREATED, []);
    }
}