<?php
class BilletsController extends AppController {

	var $name = 'Billets';
	var $paginate = array(
		'Billet' => array(
		'limit' => 5,        
	    'order' => array(
     	'Billet.created' => 'desc'
	        )
	    ));
	
	
	function index(){
		
	}
	
	function add($id=null){
		if(isset($this->data)){
			$this->Billet->save($this->data);
			$this->flash('Billet ajouté avec succès ','/billets');
		}
		if($id!=null){
			$this->Billet->id=$id;
			$this->data=$this->Billet->read();
		}
	}
	
	function delete($id){
		$this->Billet->delete($id);
		$this->flash('Le billet avec l\'id: '.$id.' a été supprimé.', '/billets');
	}
	
	function admin(){
		$q = $this->paginate('Billet');
		$this->set('billets',$q);
	}
	
	function edit(){
		$q = $this->paginate('Billet');
		$this->set('billets',$q);
	}
}
?>