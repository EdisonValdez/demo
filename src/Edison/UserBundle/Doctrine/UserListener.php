<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/21/15
 * Time: 10:43 PM
 */

namespace Edison\UserBundle\Doctrine;

use Edison\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Doctrine\ORM\Event\LifecycleEventArgs;


class UserListener
{
    private $encoderFactory;

    public  function __construct(EncoderFactory $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if($entity instanceof User){
            $this->handleEvent($entity);
        }
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if($entity instanceof User){
            $this->handleEvent($entity);
        }
    }

    private function handleEvent(User $user)
    {
        $plainPassword = $user->getPlainPassword();

        if (!$plainPassword) {
            return;
        }
        $encoder = $this->encoderFactory
            ->getEncoder($user);

        $password = $encoder->encodePassword($plainPassword, $user->getSalt());
        $user->setPassword($password);
    }
} 