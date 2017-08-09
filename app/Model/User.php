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
	
	public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'gen')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
}
?>