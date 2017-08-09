<?php
class UsersController extends AppController{
	
	public $components = array('Session','Flash');
	
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
}
?>