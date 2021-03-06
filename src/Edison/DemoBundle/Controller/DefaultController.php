<?php

namespace Edison\DemoBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('DemoBundle:Demo');

        $demo = $repo->findOneBy(array('name' => 'EdisonValdez'));

       return $this->render(
            'DemoBundle:Default:index.html.twig', array('name' => 'EdisonValdez', 'demo' => $demo)
        );
    }
}
