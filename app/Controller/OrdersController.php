<?php
class OrdersController extends AppController{
	
	public $components = array('Session');
	public $uses = array('Customer');
	public function index(){
		$customers = $this->Customer->find('list', array('fields' => array('id','name'),'recursive' => -1) );
		$this->set(compact('customers'));
		/*echo '<pre>';
        print_r($customers);
		echo "</pre>";*/
	}
}
?>