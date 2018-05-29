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

        foreach ($ingredients as $key => $ingredient){
            $ingredients[$key]["type"] = "ingredient";
            array_push($tags, $ingredients[$key]);
        }

        $result = [
            "cocktails" => $cocktails,
            "tags" => $tags,
        ];

        return View::create($result, Response::HTTP_OK, []);
    }


    /**
     * search a cocktail.
     * @FOSRest\Post("/tags")
     * @FOSRest\QueryParam(name="ingredients", nullable=true, description="ingredients")
     * @FOSRest\QueryParam(name="context", nullable=true, description="context")
     * @FOSRest\QueryParam(name="caracteristique", nullable=true, description="caracteristique")
     * @FOSRest\QueryParam(name="alcool", nullable=true, description="alcool")
     * @FOSRest\QueryParam(name="search", nullable=true, description="search")
     */
    public function postCocktail(Request $request)
    {

        if(($id = $request->get('search')) != null) {
            $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findCocktailByName($id);
            if(empty($cocktails)) {
                return View::create("This name does not match any cocktail bitch", Response::HTTP_BAD_REQUEST, []);
            }
        }else{
            $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->filterCocktails($request);
        }

        return View::create($cocktails, Response::HTTP_CREATED, []);
    }
}