<?php

namespace ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/products/list", name="productlist"))
     */
    public function indexAction()
    {
        return $this->render('ProductoBundle:Default:index.html.twig');
    }
}
