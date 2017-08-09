<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public $components = array(
		'Session',
		'Auth' => array(
			'authenticate' => array(     //authentication Handler
				'Form' => array(
					'fields' => array('username' => 'name' , 'password' => 'password'),
					'passwordHasher' => 'Blowfish'
				)
			),
			'authorize' => array('Controller')
		)
	);
	
	public function beforeRender()
    {
        $this->response->disableCache();
    }
	
	public function isAuthorized($user)
	{
		return true;
	}
}
