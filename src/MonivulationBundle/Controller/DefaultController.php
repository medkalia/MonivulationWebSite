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

    public function addPurchaseAction()
    {
        $em= $this->getDoctrine();
        $purchase= new Purchase();
        if ($form->isSubmitted()){
            $em->persist($purchase);
            $em->flush();
        }

        return $this->render('MonivulationBundle:Default:addPurchase.html.twig',array("form"=>$form->createView()));
    }
}
