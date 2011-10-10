<h1>Edition d'un membre</h1>

<?php
	$options1=array('0'=>'Membre','1'=>'Modérateur','2'=>'Admin');
	echo 'Permission : '. $form->select('User.id_permission',$options1);
	echo $form->create('User',array('url'=>array('action'=>'add')));
	echo $form->input('User.username',array('label'=>'Pseudo : '));
	echo $form->input('User.password',array('label'=>'Password : '));
	echo $form->input('User.nom',array('label'=>'Nom : '));
	echo $form->input('User.prenom',array('label'=>'Prenom : '));
	echo $form->input('User.mail',array('label'=>'Adresse mail : '));
	echo $form->input('User.adresse',array('label'=>'Adresse : '));
	echo $form->input('User.cp',array('label'=>'Code postal : '));
	echo $form->input('User.ville',array('label'=>'Ville : '));
	$options=array('1'=>'Je cherche un groupe','2'=>'J\'ai déjà un groupe');
	echo 'Situation : '. $form->select('User.status_id',$options); 
	echo $form->input('User.id',array('type' => 'hidden'));
	echo $form->end('envoyer');
?>