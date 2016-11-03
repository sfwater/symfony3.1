<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/helloworld')) {
            // app_helloworld_index
            if ($pathinfo === '/helloworld/index') {
                return array (  '_controller' => 'AppBundle\\Controller\\HelloWorldController::indexAction',  '_route' => 'app_helloworld_index',);
            }

            // app_helloworld_hello
            if ($pathinfo === '/helloworld/hello') {
                return array (  '_controller' => 'AppBundle\\Controller\\HelloWorldController::helloAction',  '_route' => 'app_helloworld_hello',);
            }

            // app_helloworld_number
            if ($pathinfo === '/helloworld/number') {
                return array (  '_controller' => 'AppBundle\\Controller\\HelloWorldController::numberAction',  '_route' => 'app_helloworld_number',);
            }

        }

        // blog_list
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_list')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\HelloWorldController::listAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
