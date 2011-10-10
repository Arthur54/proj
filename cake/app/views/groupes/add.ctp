<h1>Creation d'un groupe</h1>

<?php
	echo $this->Session->flash();
	echo $form->create('Groupe',array('url'=>array('action'=>'add')));
	echo $form->input('Groupe.nom',array('label'=>'Nom du groupe : '));
	echo $form->input('Groupe.adresse_web',array('label'=>'Site web du groupe : '));
	echo $form->input('Groupe.cp',array('label'=>'Code postal du lieu de répétition du groupe : '));
	echo $form->input('Groupe.ville',array('label'=>'Ville de répétition du groupe : '));
	$options=array('1'=>'Le groupe cherche des membres','2'=>'Le groupe est complet');
	echo 'Situation : '. $form->select('Groupe.status_id',$options); 
    echo $form->input('Groupe.id',array('type' => 'hidden'));
	echo $form->end('envoyer');
?>