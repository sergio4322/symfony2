<?php 
namespace ecommarg\cart;
use ecommarg\cart\ProductoInterface as Product;

Interface CartInterface{
	public function add(Product $p);
	public function get($id);
	public function getAll();
	public function replace($array);
}


 