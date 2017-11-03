<?php
class OrdersController extends AppController{
	
	public $components = array('Session');
	public $uses = array('Customer','Product');

	public function index(){
		$customers = $this->Customer->find('list', array('fields' => array('id','name'),'recursive' => -1) );
		$this->set(compact('customers'));

		$prcodelist = $this->Product->find('list',array('fields'=>array('id','prcode'))); 
		$this->set('prcodelist',$prcodelist);
		/*echo '<pre>';
        print_r($prcodelist);
		echo "</pre>";*/

		$titlelist = $this->Product->find('list',array('fields'=>array('id','title'))); 
		$this->set('titlelist',$titlelist);
	}


}
?>