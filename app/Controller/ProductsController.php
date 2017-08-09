<?php
class ProductsController extends AppController{
	
	public $components = array('Session');
	
	public function index(){
		$products = $this->Product->find('all');
		$this->set('products',$products);
	}
}
?>