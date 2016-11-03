<?php
/**
 * User: water
 * Time: 16-9-7 12:39
 * Desc:
 */
namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HelloWorldController
 * @package AppBundle\Controller
 *
 */
class HelloWorldController extends Controller
{
    /**
     * @Route("/helloworld/index",name="index")
     */
    public function indexAction(Request $request)
    {

        $a=$request->server->get('a');
        $number = mt_rand(0, 100);
        $json=$this->json(array('name'=>'water'));
        return new Response(
            '<html><body>Lucky number: ' .$a.'--'.$json.'</body></html>'
        );
    }

    /**
     * @Route("/helloworld/hello",name="hello")
     */
    public function helloAction(Request $request)
    {
        return new Response(
            "<h1>每天都要给自己打鸡血</h1>"
        );
    }

    /**
     * @Route("/helloworld/number")
     */
    public function numberAction()
    {
        $num=mt_rand(0,100);
        $i=3;
        $friends=array();
        while($i>0){
            $friends[]=array('name'=>'name'.$i,'index'=>$i);
            $i--;
        }
        return $this->render('helloworld/number.html.twig',array('number'=>$num,'friends'=>$friends));
    }
    /**
     * @Route("/blog/{page}",name="blog_list",requirements={"page":"\d+"})
     */
    public function listAction($page=1){
            return new Response('<html><body>Lucky number: ' . $page .                          '</body></html>');
    }
    /**
     *@Route("/helloworld/session")
     */
    public function sessionAction(Request $request){
        $session=$request->getSession();
        $session->set('name','water');
        $name=$session->get('name');
        $this->addFlash('sex','男');
        $this->addFlash('sex','女');
        $this->addFlash('sex','基佬');
        return $this->render('helloworld/session.html.twig',array('name'=>$name));
    }
}