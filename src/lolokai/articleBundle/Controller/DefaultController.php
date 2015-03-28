<?php

namespace lolokai\articleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('lolokaiarticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
