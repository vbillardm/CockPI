<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use App\Entity\Cocktail;
/**
 * Brand controller.
 *
 * @Route("/api")
 */
class CocktailController extends Controller
{
    /**
     * Lists all Articles.
     * @FOSRest\Get("/cocktails")
     *
     */
    public function getArticleAction()
    {
        $repository = $this->getDoctrine()->getRepository(Cocktail::class);
        $cocktails = $repository->findall();

        return View::create($cocktails, Response::HTTP_OK , []);
    }
    /**
     * Create Article.
     * @FOSRest\Post("/cocktail")
     */
    public function postArticleAction(Request $request)
    {
        $article = new Cocktail();
        $article->setName($request->get('name'));
        $article->setDescription($request->get('description'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return View::create($article, Response::HTTP_CREATED , []);
    }
}