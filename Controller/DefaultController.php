<?php

namespace Juceveju\GreetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	// only one comment
    public function indexAction($name)
    {
        return $this->render('JucevejuGreetingBundle:Default:index.html.twig', array('name' => $name));
    }
}
