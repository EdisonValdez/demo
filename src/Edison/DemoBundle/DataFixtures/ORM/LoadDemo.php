<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/9/15
 * Time: 11:36 PM
 */

namespace Edison\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Edison\DemoBundle\Entity\Demo;


class LoadDemo implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $demo = new Demo();
        $demo->setLocation('Gustav Muller strasse 123, Schoneberg Berlin');
        $demo->setName('Missing my Berlin');
        $demo->setTime(new \DateTime('tomorrow noon'))   ;
        $demo->setDetails('Ich liebe Berlin, meine am besten stadt in der welt!') ;
        $manager->persist($demo);

        $demo1 = new Demo();
        $demo1->setLocation('Passeig Tore Blanca 11, sant cugat del valles Barcelona Spain');
        $demo1->setTime(new \DateTime('now'))   ;
        $demo1->setName('Missing my BCN');
        $demo1->setDetails('Book 2nd Edition (2014) Switch to 1st Edition Download Ebook The entire Pro Git book, written by Scott Chacon and Ben Straub and published by Apress, is available here. All content is licensed under the Creative Commons Attribution Non Commercial Share Alike 3.0 license. Print versions of the book are available on Amazon.com.');
        $manager->persist($demo1);

        $manager->flush();
    }
}