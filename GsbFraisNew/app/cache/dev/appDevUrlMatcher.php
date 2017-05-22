<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // mttlgsb_homepage
        if ($pathinfo === '/Accueil') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mttlgsb_homepage',);
        }

        // mttlgsb_connexion
        if ($pathinfo === '/Connexion') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::formExterneAction',  '_route' => 'mttlgsb_connexion',);
        }

        // mttlgsb_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::deconnexionAction',  '_route' => 'mttlgsb_deconnexion',);
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

        // mttlgsb_AVisiteur
        if ($pathinfo === '/AVisiteur') {
            return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::AVisiteurAction',  '_route' => 'mttlgsb_AVisiteur',);
        }

        if (0 === strpos($pathinfo, '/Vrenseigner')) {
            // mttlgsb_Vrenseigner
            if ($pathinfo === '/Vrenseigner') {
                return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::VrenseignerAction',  '_route' => 'mttlgsb_Vrenseigner',);
            }

            // mttlgsb_VrenseignerHF
            if ($pathinfo === '/VrenseignerHF') {
                return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::VrenseignerHFAction',  '_route' => 'mttlgsb_VrenseignerHF',);
            }

        }

        // mttlgsb_supHF
        if (0 === strpos($pathinfo, '/supHF') && preg_match('#^/supHF/(?P<idlignefraishorsforfait>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mttlgsb_supHF')), array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::supHFAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // mttlgsb_suivisPFicheFrais
            if ($pathinfo === '/cSuivis') {
                return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::cSuivisAction',  '_route' => 'mttlgsb_suivisPFicheFrais',);
            }

            // mttlgsb_cDescriptifFiche
            if (0 === strpos($pathinfo, '/cDescriptif') && preg_match('#^/cDescriptif(?P<idfichefrais>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mttlgsb_cDescriptifFiche')), array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::cdescriptifAction',));
            }

            // mttlgsb_cValiderFiche
            if (0 === strpos($pathinfo, '/cValiderFiche') && preg_match('#^/cValiderFiche(?P<idfichefrais>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mttlgsb_cValiderFiche')), array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::cvaliderficheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/valider')) {
            // mttlgsb_validerFicheFrais
            if ($pathinfo === '/validerFicheFrais') {
                return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::validerFicheFraisAction',  '_route' => 'mttlgsb_validerFicheFrais',);
            }

            // mttlgsb_validerVisuFiche
            if ($pathinfo === '/validerVisuFiche') {
                return array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::validerVisuFicheAction',  '_route' => 'mttlgsb_validerVisuFiche',);
            }

        }

        // mttlgsb_refus
        if (0 === strpos($pathinfo, '/refus') && preg_match('#^/refus/(?P<idlignefraishorsforfait>[^/]++)/(?P<mois>[^/]++)/(?P<idVisiteur>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mttlgsb_refus')), array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::refusAction',));
        }

        // mttlgsb_validation
        if (0 === strpos($pathinfo, '/validation') && preg_match('#^/validation/(?P<idFiche>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mttlgsb_validation')), array (  '_controller' => 'mttl\\gsbBundle\\Controller\\DefaultController::validerAction',));
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
