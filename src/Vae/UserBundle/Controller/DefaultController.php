<?php

namespace Vae\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VaeUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
