<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components=array("Email");
	
	var $paginate = array(
		'User' => array(
		'limit' => 4,        
	    'order' => array(
     	'User.id' => 'asc'
	        )
	    ));
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('inscription');
	}
	
	function index(){}
	
	function login(){
	}
	
	function logout(){
		$this->Session->destroy();
		$this->redirect(array('controller'=>'wsites', 'action'=>'index'));
	}
	
	function admin(){
		$q = $this->paginate('User');
		$this->set('membres',$q);
	}
	
	function delete($id){
		if($this->User->delete($id)){
			$this->flash('Le membre avec l\'id: '.$id.' a été supprimé.', '/users');
		}
	}
	
	function add($id=null){
		if(isset($this->data)){
			if($this->User->save($this->data)){
				$this->flash('Le membre ajouté !', '/users');
			}
		}
		if($id!=null){
			$this->User->id=$id;
			$this->data=$this->User->read();
		}
	}

	
	function edit(){
		$q = $this->paginate('User');
		$this->set('membres',$q);
	}
	
	function inscription(){
		if(isset($this->data)){
			if($this->User->save($this->data)){
				$this->flash('Inscription réussie', '/accueil');
			}
		}
	}
	
	function findAll(){
		$tab=$this->User->find('all');
		return $tab;
		$this->autoRender = false;
	}
	
	function sendMail(){
		$this->User->id=$this->data['Mail']['users_id'];
		$u=$this->User->read();
		$this->Email->to =$u['User']['mail']; 
		$this->Email->subject =$this->data['Mail']['titre'];
		$this->Email->replyTo =$this->data['Mail']['email'];
		$this->Email->from =$this->data['Mail']['email'];
		if($this->Email->send($this->data['Mail']['message'])){
			$this->flash('Message envoyé à l\'annonceur !', '/accueil');
		}
		$this->autoRender = false;
	}
	
	function addG(){
		$this->User->query('update users set groupes_id='.$this->data['Groupe']['id'] .' where id='.$this->data['User']['pseudo'].';');
		$this->redirect('/groupes/viewAll');
		$this->autoRender = false;
	}

}
?>