<?php
class ProductsController extends AppController{
	
	public $components = array('Session');
	
	public function index(){
		$products = $this->Product->find('all');
		$this->set('products',$products);
		/*echo "<pre>";
		print_r ($products);
		echo "</pre>";*/
	}
	
	public function padd(){
		
		if($this->request->is('post')){
			$this->Product->create();
			if( $this->Product->save($this->request->data) ){
				$this->Session->setFlash('Product has been saved.');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Something is wrong. Please check.');
		}
	}
	
	public function pedit($id){
		
		$data = $this->Product->findById($id);	
		if($this->request->is(array('post','put'))){
			$this->Product->id=$id;
			$this->Product->save($this->request->data);      
			$this->Session->setFlash('Product has been updated.');
			$this->redirect("index");
		}
		else{			
			$this->request->data=$data;
		} 		
	}
	
	public function pdelete($id){
		
		$this->Product->id= $id;
        if($this->request->is(array('post' , 'put'))){
            if($this->Product->delete()){
                $this->Session->setFlash('Product has been deleted');                
            }			
        }
		$this->redirect("index");
	}
	
}
?>