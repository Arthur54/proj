<?php
	echo $this->Session->flash();
	echo $form->create('Annonce',array('url'=>array('action'=>'add')));
	echo $form->input('Annonce.titre',array('label'=>'titre : '));
	echo $form->input('Annonce.descriptif',array('label'=>'Annonce : '));
	echo $form->input('Annonce.users_id',array('type' => 'hidden','value' => $this->Session->read('Auth.User.id')));
	echo $form->input('Annonce.id',array('type' => 'hidden'));
	echo $form->end('envoyer');
?>