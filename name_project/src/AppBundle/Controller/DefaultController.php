<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }


    /**
     * @Route("/produits/{num}", requirements={"num": "[1-9]\d*"}, name="produits")
     */
    public function produitsAction($num=0) {
        return $this->render('default/produits.html.twig',array('num' => $num));
    }

    /**
     * @Route("/histoire", name="histoire")
     */
    public function histoireAction() {
        return $this->render('default/histoire.html.twig');
    }

    protected function renderView($view, array $parameters = array())
    {
    }

    
}