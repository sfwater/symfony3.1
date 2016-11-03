<?php

namespace Yiiwater\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/page/{page_num}",defaults={"page_num":10},requirements={"page_num"="\d+"})
     * @Template()
     */
    public function indexAction($page_num,Request $request)
    {
        $a=$request->query->get("a");
//         $a=$request->getSession()->get('name');//session
//        $response=new Response("<h1>hello</h1>",Response::HTTP_ALREADY_REPORTED);
        return $this->render('YiiwaterWebBundle:Default:index.html.twig',array('num'=>$a));

//        return $this->render();
    }
}
