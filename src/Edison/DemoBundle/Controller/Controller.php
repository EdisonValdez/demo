<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/16/15
 * Time: 1:56 PM
 */

namespace Edison\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Edison\DemoBundle\Entity\Demo;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class Controller extends BaseController
{
    /**
     * @return \Symfony\Component\Security\Core\SecurityContext
     */
    public function getSecurityContext()
        {
            return $this->container->get('security.context');

        }

    public function enforceOwnerSecurity(Demo $demo)
    {
        $user = $this->getUser();

        if($user != $demo->getOwner())
        {
            throw $this->createAccessDeniedException('You are not the owner of this Event!');
        }
    }
} 