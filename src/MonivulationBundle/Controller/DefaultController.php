<?php

namespace MonivulationBundle\Controller;

use MonivulationBundle\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonivulationBundle:Default:index.html.twig');
    }
}
