<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Tags;
use JMS\Serializer\Exclusion\DisjunctExclusionStrategy;
use JMS\Serializer\Expression\ExpressionEvaluator;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\DependencyInjection\ExpressionLanguage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Cocktail;
use Nelmio\ApiDocBundle\ApiDocGenerator;

/**
 *
 * @Route("/api")
 * @package ApiBundle\Controller
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
     * search a list of cocktail or a list of tags.  --
     * if alcool and ingredients are set => return list of cocktails.
     * if search is set => return a cocktail
     * if get_tags is set to 1 => return the tag's list and the cocktail's list.
     * if nothing is set => return the 12 first best notes i get.
     * @FOSRest\Post("/tags")
     * @FOSRest\QueryParam(name="ingredients", nullable=true, description="string d'ingredients séparé par des virgules.")
     * @FOSRest\QueryParam(name="context", nullable=true, description="string d'context séparé par des virgules.")
     * @FOSRest\QueryParam(name="caracteristique", nullable=true, description="string d'caracteristique séparé par des virgules.")
     * @FOSRest\QueryParam(name="alcool", nullable=true, description="string d'alcools séparé par des virgules")
     * @FOSRest\QueryParam(name="search", nullable=true, description="search if not blank return the cocktail searched")
     * @FOSRest\QueryParam(name="get_tags", nullable=true, description="get_tags if true send the tags array with the answer")
     *
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
        $cocktail = $this->getDoctrine()->getRepository(Cocktail::class)->find($id);

        if(empty($cocktail)) {
            return View::create("not found dude", Response::HTTP_NOT_FOUND, []);
        }

        $serializer = $this->get('jms_serializer');
        $cocktailJSON = $serializer->serialize($cocktail, 'json', SerializationContext::create()->enableMaxDepthChecks());

        return new Response($cocktailJSON, 200, array(), true);
    }

    /**
     * rate a specific cocktail
     * if cocktail not found return a 404
     * @FOSRest\Post("/cocktail/{id}/rate")
     * @todo  fix requirements
     * @FOSRest\QueryParam(name="rate", nullable=false, description="rate value in [1..5]", requirements={"/^[1-5]$/"})
     *
     */
    public function rateACocktail($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $cocktail = $this->getDoctrine()->getRepository(Cocktail::class)->findByid($id);
        $cocktail->setGlobalRateVotes($cocktail->getGlobalRateVotes() +1);
        $cocktail->setGlobalRate($cocktail->getGlobalRate() + $request->get('rate'));

        $em->persist($cocktail);
        $em->flush();


        if(empty($cocktail)) {
            return View::create("not found dude", Response::HTTP_NOT_FOUND, []);
        }

        return new JsonResponse($cocktail, 200, array(), true);
    }


    /**
     * @FOSRest\Get("/cyrilHereYouGo")
     */
    public function getCocktailsForCyrus()
    {
        $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findAll();
        $ingredients = $this->getDoctrine()->getRepository(Ingredients::class)->fetchAllIngredients();
        $tags = $this->getDoctrine()->getRepository(Tags::class)->fetchAllTags();

        foreach ($ingredients as $key => $ingredient){
            $ingredients[$key]["type"] = "ingredient";
            array_push($tags, $ingredients[$key]);
        }

        $serializer = $this->get('jms_serializer');
        $result = [
            "cocktails" => $cocktails,
            "tags" => $tags,
        ];

        $cocktailJSON = $serializer->serialize($result, 'json', SerializationContext::create()->enableMaxDepthChecks());

        return new JsonResponse($cocktailJSON, 200, array(), true);
    }
}