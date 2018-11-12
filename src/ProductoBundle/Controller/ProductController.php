<?php

namespace ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
	    /**
     * @Route("/products/view/{id}", name="Product_view")
     */
    public function viewAction($id)
    {
    	$Producto = $this->getDoctrine()-> getRepository('ProductoBundle:Producto')->find($id);
        return $this->render('ProductoBundle:Default:view.html.twig',
        						['producto'=> $Producto]);
    }
}
