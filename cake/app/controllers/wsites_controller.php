<?php
class WsitesController extends AppController {

	var $name = 'Wsites';
	
	function beforeFilter(){
		parent::beforeFilter();
	}
	
	function index(){}
	
	function login(){}
	
	function logout(){
		$this->redirect(array('controller'=>'wsites', 'action'=>'index'));
	}
	
}

?>