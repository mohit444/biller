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
	
	public function cedit($id){
		
		$data = $this->Customer->findById($id);	
		if($this->request->is(array('post','put'))){
			$this->Customer->id=$id;
			$this->Customer->save($this->request->data);      
			$this->Session->setFlash('User has been updated.');
			$this->redirect("index");
		}
		else{			
			$this->request->data=$data;
		} 		
	}
	
	public function cdelete($id= null){
        $this->Customer->id= $id;
        if($this->request->is(array('post' , 'put'))){
            if($this->Customer->delete()){
                $this->Session->setFlash('User has been deleted');                
            }			
        }
		$this->redirect("index");
    }
}

?>