<?php
class ContactController extends AppController {
	
	var $name = 'Contact';
	var $uses=array('User');
	var $components=array("Email");
	
	function index(){
		$this->Contact->email=$this->data['Contact']['email'];
		$this->Contact->titre=$this->data['Contact']['titre'];
		$this->Contact->users_id=$this->data['Contact']['users_id'];
		$this->Contact->message=$this->data['Contact']['message'];
		if($this->Contact->validate())
			$mail=$this->requestAction(array('controller' => 'users', 'action' => 'recupMail'),array('id'=>$this->data['Contact']['users_id']));
		
		$this->autoRender = false;
	}
}
?>
