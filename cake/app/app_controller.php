<?php
class AppController extends Controller{
	
	var $components = array("Session","Auth");
	
	function beforeFilter(){
		$this->Auth->deny('*');
		$this->Auth->allow('login');
		$this->Auth->authError="Acces interdit à cette section !";
		$this->Auth->loginAction = '/users/login';
		$this->Auth->loginRedirect = array('controller' => 'accueils', 'action' => 'index');
		$this->Auth->loginError="Login ou password incorrect !";
	}
}
?>