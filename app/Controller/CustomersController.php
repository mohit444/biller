<?php
class CustomersController extends AppController{
	
	public $components = array('Session');
	
	public function index(){
		$customers = $this->Customer->find('all');
		$this->set('customers',$customers);
	}
	
	public function cadd(){
		if($this->request->is('post')){
			$this->Customer->create();
			if( $this->Customer->save($this->request->data) ){
				$this->Session->setFlash('Customer added.');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Unable to add.');
		}
	}
}

?>