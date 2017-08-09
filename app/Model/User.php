<?php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
	
	#public $displayField = 'name';
	
	public function beforeSave($option = array()){

        if(isset($this->data['User']['password'])){
            $passwordHasher= new BlowfishPasswordHasher();
            $this->data['User']['password']=$passwordHasher->hash($this->data['User']['password']);
        }
    }
}
?>