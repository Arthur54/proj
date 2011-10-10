<?php
	echo $form->create('Billet',array('url'=>array('action'=>'add')));
	echo $form->input('Billet.descriptif',array('label'=>'Billet : '));
	echo $form->input('Billet.date',array('type' => 'hidden','value'=>'date')); // modifier la date
	echo $form->input('Billet.id_auteur',array('type' => 'hidden','value' => '1'));  // a modifier aprés ( faire le lien avec l'auteur)
	echo $form->input('Billet.id',array('type' => 'hidden'));
	echo $form->end('envoyer');
?>