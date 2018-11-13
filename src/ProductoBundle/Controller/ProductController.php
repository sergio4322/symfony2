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

    	$producto = $this->getDoctrine()-> getRepository('ProductoBundle:Producto')->find($id);
    	// echo json_encode($producto);
   		$this->get('app.cart');
        return $this->render('ProductoBundle:Default:view.html.twig',
        						['producto'=> $producto]);  
    }

    /**
     * @Route("/products/cart/add/{id}/quantity/{quantity}", name="Product_add_cart")
     */
    public function addToCartAction($id, $quantity)
    {
    	$producto = $this->getDoctrine()-> getRepository('ProductoBundle:Producto')->find($id);
    	if(null === $producto)
    	{
    		throw new \Exception("Producto not found");
    	}
    	$this->get('app.cart')->add($producto);
    	die();
    }

   /**
     * @Route("/products/Cart/view", name="Product_view_cart")
     */
    public function viewCartAction()
    {
   		var_dump($this->get('app.cart')->get(1));
        die();
    }
}
