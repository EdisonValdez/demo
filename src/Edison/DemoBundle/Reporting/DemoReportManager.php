<?php
/**
 * Created by PhpStorm.
 * User: EdisonValdez
 * Date: 4/20/15
 * Time: 5:23 PM
 */

namespace Edison\DemoBundle\Reporting;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Routing\Router;


class DemoReportManager
{
    private $em;

    private $router;

    public function __construct(EntityManager $em, Router $router)
    {
        $this->em = $em;
        $this->router = $router;
    }

    public function getRecentlyUpdatedReport()
    {
        $demos = $this->em->getRepository('DemoBundle:Demo')
            ->getRecentlyUpdatedDemo();

        $rows = array();
        foreach ($demos as $demo) {
            $data = array(
                $demo->getId(),
                $demo->getName(),
                $demo->getTime()->format('Y-m-d H:i:s'),
                $this->router->generate(
                    'demo_show',
                    array('slug' => $demo->getSlug()),
                    true
                )
            );

            $rows[] = implode(', ', $data);
        }

        return implode("\n", $rows);
    }
}
