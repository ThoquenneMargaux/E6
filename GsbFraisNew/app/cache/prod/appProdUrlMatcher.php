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

        // mttlgsb_homepage
        if ($pathinfo === '/Accueil') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mttlgsb_homepage',);
        }

        // mttlgsb_connexion
        if ($pathinfo === '/Connexion') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::formExterneAction',  '_route' => 'mttlgsb_connexion',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle:Security:login',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // mttlgsb_Vconsulter
        if ($pathinfo === '/Vconsulter') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::VconsulterAction',  '_route' => 'mttlgsb_Vconsulter',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
