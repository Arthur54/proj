<?php
class AccueilController extends AppController{
	var $name ='Accueil';
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	
	function index(){}
}