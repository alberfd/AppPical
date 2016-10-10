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

        // pical_secretaria_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pical_secretaria_homepage')), array (  '_controller' => 'SecretariaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/socio')) {
            // pical_secretaria_socios_index
            if ($pathinfo === '/socios/index') {
                return array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::indexAction',  '_route' => 'pical_secretaria_socios_index',);
            }

            // pical_secretaria_socio_edit
            if (preg_match('#^/socio/(?P<idSocio>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pical_secretaria_socio_edit')), array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::editAction',));
            }

            // pical_secretaria_socio_view
            if (0 === strpos($pathinfo, '/socio/view') && preg_match('#^/socio/view/(?P<idSocio>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pical_secretaria_socio_view')), array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::viewAction',));
            }

            // pical_secretaria_socio_delete
            if (0 === strpos($pathinfo, '/socio/delete') && preg_match('#^/socio/delete/(?P<idSocio>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pical_secretaria_socio_delete')), array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::deleteAction',));
            }

            // pical_secretaria_socio_form_add
            if ($pathinfo === '/socio/form_add') {
                return array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::form_addAction',  '_route' => 'pical_secretaria_socio_form_add',);
            }

            // pical_secretaria_socio_add
            if ($pathinfo === '/socio/add') {
                return array (  '_controller' => 'SecretariaBundle\\Controller\\SociosController::addAction',  '_route' => 'pical_secretaria_socio_add',);
            }

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
