<?php
class UsersController extends AppController{
	
	public $components = array('Session','Flash');
	
	public function isAuthorized($user){
		if( in_array($this->action, array('login','logout')) ){
			return true;			
		}
		return parent::isAuthorized($user);
	}
	
	public function login(){
        if($this->request->is('post')){
            if($this->Auth->login() ){
             
                $this->redirect(array('action'=>'index'));
            }
            else{
                $this->Session->setFlash('Invalid User');
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        $this->redirect('login');
    }
	
	public function index(){
		$users = $this->User->find('all');
		$this->set('users',$users);
		#echo "<pre>";
		#print_r ($users);
		#echo "</pre>";
	}
	
	public function uadd(){
		
		if($this->request->is('post')){
			$this->User->create();
			if( $this->User->save($this->request->data) ){
				$this->Session->setFlash('User added.');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Unable to add.');
		}
	}
	
	public function uedit($id){
		
		$data = $this->User->findById($id);	
		if($this->request->is(array('post','put'))){
			$this->User->id=$id;
			$this->User->save($this->request->data);      
			#$this->Session->setFlash('User has been updated.');
			$this->redirect("index");
		}
		else{			
			$this->request->data=$data;
		} 		
	}
	
	public function udelete($id= null){
        $this->User->id= $id;
        if($this->request->is(array('post' , 'put'))){
            if($this->User->delete()){
                $this->Session->setFlash('User has been deleted');                
            }			
        }
		$this->redirect("index");
    }
	
}
?>