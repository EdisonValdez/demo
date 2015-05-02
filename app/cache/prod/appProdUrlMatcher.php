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

        // demo_show
        if (preg_match('#^/(?P<slug>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_show')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::showAction',));
        }

        // demo_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::newAction',  '_route' => 'demo_new',);
        }

        // demo_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_demo_create;
            }

            return array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::createAction',  '_route' => 'demo_create',);
        }
        not_demo_create:

        // demo_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_edit')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::editAction',));
        }

        // demo_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_demo_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_update')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::updateAction',));
        }
        not_demo_update:

        // demo_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_demo_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_delete')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::deleteAction',));
        }
        not_demo_delete:

        // demo_likes
        if (preg_match('#^/(?P<id>[^/]++)/likes(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_likes')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::likesAction',  'format' => 'html',));
        }

        // demo_unlikes
        if (preg_match('#^/(?P<id>[^/]++)/unlikes(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_unlikes')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::unlikesAction',  'format' => 'html',));
        }

        // demo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demo_homepage')), array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DefaultController::indexAction',));
        }

        // demo
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'demo');
            }

            return array (  '_controller' => 'Edison\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => 'demo',);
        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Edison\\UserBundle\\Controller\\RegisterController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Edison\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Edison\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Edison\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
