<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/9/15
 * Time: 11:36 PM
 */

namespace Edison\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Edison\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



class LoadUsers implements FixtureInterface, ContainerAwareInterface
{
    private $container;
    /**
     * @var ContainerInterface
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('EdisonValdez');
        $user->setPassword($this->encodePassword($user, 'Thesecret1'));
        $user->setEmail('eddynvg@hotmail.com');
        $user->setRoles(array('ROLE_USER'));

        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('wayne');
        $admin->setPassword($this->encodePassword($admin, 'waynepass'));
        $admin->setEmail('wayne@hotmail.com');
        $admin->setRoles(array('ROLE_ADMIN'));
        $manager->persist($admin);

        $manager->flush();
    }

    private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
                    ->getEncoder($user);
        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
       $this->container = $container;
    }
}