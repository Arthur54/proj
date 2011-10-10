<?php
class AnnoncesController extends AppController {

	var $name = 'Annonces';
	var $paginate = array(
		'Annonce' => array(
		'limit' => 5,        
	    'order' => array(
     	'Annonce.created' => 'desc'
	        )
	    ));
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('viewAll');
	}
	
	function index(){
		
	}
	
	function add($id=null){
		if(isset($this->data)){
			if($this->Annonce->save($this->data))
			$this->flash('L annonce avec ajoutée avec succés', '/accueil');
		}
		if($id!=null){
			$this->Annonce->id=$id;
			$this->data=$this->Annonce->read();
		}
	}
	
	
	function delete($id){
		if($this->Annonce->delete($id)){
			$this->flash('L annonce avec l\'id: '.$id.' a été supprimée.', '/accueil');
		}
		
	}
	
	function admin(){
		$q = $this->paginate('Annonce');
		$this->set('annonces',$q);
	}
	
	function edit(){
		$q = $this->paginate('Annonce');
		$this->set('annonces',$q);
	}
	
	function viewAll(){
		$q = $this->paginate('Annonce');
		$this->set('annonces',$q);
	}
	
	function viewOne($id){
		$this->Annonce->id=$id;
		$this->data=$this->Annonce->read();
		$this->set('a',$this->data);
	}
}
?>