<?php
class OrdersController extends AppController{
	
	public $components = array('Session');
	
	public function index(){
		$customers = $this->Order->Bill->Customer->find('all', array('fields' => array('id','name')) );
		$this->set(compact('customers'));
	}
}
?>