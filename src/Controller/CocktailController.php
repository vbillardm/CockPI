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
     * @return mixed array
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
        return $result;
//        return View::create($result, Response::HTTP_OK, []);
    }


    /**
     * search a cocktail.
     * @FOSRest\Post("/tags")
     * @FOSRest\QueryParam(name="ingredients", nullable=true, description="ingredients")
     * @FOSRest\QueryParam(name="context", nullable=true, description="context")
     * @FOSRest\QueryParam(name="caracteristique", nullable=true, description="caracteristique")
     * @FOSRest\QueryParam(name="alcool", nullable=true, description="alcool")
     * @FOSRest\QueryParam(name="search", nullable=true, description="search")
     * @FOSRest\QueryParam(name="get_tags", nullable=true, description="get_tags")
     */
    public function postCocktail(Request $request)
    {
        if(($id = $request->get('search')) != null) {
            $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findCocktailByName($id);
            if(empty($cocktails)) {
                return View::create("This name does not match any cocktail bitch", Response::HTTP_BAD_REQUEST, []);
            }
        }elseif ( $request->get('alcool') != "" and $request->get('ingredients') != ""){
            $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->filterCocktails($request);

            // algo valeurs ajouté pour les tags
            foreach ($cocktails as $index => $cocktail){
                $cocktails[$index]["value"] = 1;
                $tags = ($this->getDoctrine()->getRepository(Cocktail::class)->find($cocktail["id"]))->getTags();
                foreach ($tags as $tag){
                    $ids = explode(",", $request->get('caracteristique'));
                    if(in_array($tag->getId(), $ids )){
                        $cocktails[$index]["value"] += 2;
                    };

                    $ids_context = explode(",", $request->get('context'));
                    if(in_array($tag->getId(), $ids_context )){
                        $cocktails[$index]["value"] += 1;
                    };
                }
            }
        }else{
            $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findTheBest();
        }

        if ( intval($request->get('get_tags')) === 1){
            $tags = $this->getCocktails();
            $result = [$tags, $cocktails];
            return View::create($result, Response::HTTP_CREATED, []);
        }

        return View::create($cocktails, Response::HTTP_CREATED, []);
    }

    /**
     * search for a specific cocktail by id
     * @FOSRest\Get("/cocktail/{id}", requirements={"\d+"})
     */
    public function getCocktailById($id)
    {
        $cocktail = $this->getDoctrine()->getRepository(Cocktail::class)->findByid($id);

        if(empty($cocktail)) {
            return View::create("not found dude", Response::HTTP_NOT_FOUND, []);
        }
        return View::create($cocktail, Response::HTTP_FOUND, []);
    }
}