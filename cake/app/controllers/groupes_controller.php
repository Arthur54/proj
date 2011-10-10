<?php
Class GroupesController extends AppController{
	
	var $name='Groupes';
	var $paginate = array(
		'Groupe' => array(
		'limit' => 4,        
	    'order' => array(
     	'Groupe.id' => 'asc'
	        )
	    ));
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('viewAll');
	}
	
	function index(){
		;
	}
	
	function add($id=null){
		if(isset($this->data)){
			if($this->Groupe->save($this->data)){
				$this->Session->setFlash('groupe ajouté avec succés');
			}
		}
		if($id!=null){
			$this->Groupe->id=$id;
			$this->data=$this->Groupe->read();
		}
	}
	
	function add2(){
		if(isset($this->data)){
			if($this->Groupe->save($this->data)){
				$this->flash('Le groupe à été créer', '/groupes/viewAll');
				}
			}
		$this->autoRender = false;
	}
	
	function admin(){
		$q=$this->paginate('Groupe');
		$this->set('groupes',$q);
	}
	
 	function delete($id){
			if($this->Groupe->delete($id)){
				$this->flash('Le groupe avec l\'id: '.$id.' a été supprimé.', '/groupes');
			}
	}
	
	function edit(){
		$q = $this->paginate('Groupe');
		$this->set('groupes',$q);
	}
	
	function viewAll(){
		$q = $this->paginate('Groupe');
		$this->set('groupes',$q);
	}
	
	function viewOne($id){
		$this->Groupe->id=$id;
		$this->data=$this->Groupe->read();
		$this->set('groupe',$this->data);
	}
	
	function gestion($id){
		if($this->Session->read('Auth.User.groupes_id')!=$id)
			$this->redirect('/groupes/viewAll');
		$d=$this->requestAction(array('controller' => 'users', 'action' => 'findAll'));
		$this->set('users',$d);
		if(isset($this->data)){
			if($this->Groupe->save($this->data)){
				$this->flash('Modification bien enregistrées', '/groupes/viewAll');
			}
		}
		if($id!=null){
			$this->Groupe->id=$id;
			$this->data=$this->Groupe->read();
		}
	}
	
}

?>