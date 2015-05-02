<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/21/15
 * Time: 6:52 PM
 */

namespace Edison\DemoBundle\Twig;

use Edison\DemoBundle\Util\DateUtil;

class DemoExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'demo';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('ago', array(
                $this, 'calculateAgo'
            ))
        );
    }

    public function calculateAgo(\DateTime $dt)
    {
        return DateUtil::ago($dt);
    }
}