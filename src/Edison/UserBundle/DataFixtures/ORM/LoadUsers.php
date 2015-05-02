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
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadUsers implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;
    /**
     * @var ContainerInterface
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('EdisonValdez');
        //$user->setPassword($this->encodePassword($user, 'Thesecret1'));
        $user->setPlainPassword('Thesecret1');
        $user->setEmail('eddynvg@hotmail.com');
        $user->setRoles(array('ROLE_USER'));

        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('wayne');
        //$admin->setPassword($this->encodePassword($admin, 'waynepass'));
        $admin->setPlainPassword('waynepass');
        $admin->setEmail('wayne@hotmail.com');
        $admin->setRoles(array('ROLE_ADMIN'));
        $manager->persist($admin);

        $manager->flush();
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

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 10;
    }
}