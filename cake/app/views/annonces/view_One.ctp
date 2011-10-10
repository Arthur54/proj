<h1> Détail de l' Annonce : </h1>
<ul>
<?php
	echo '<li>Titre : '.$a['Annonce']['titre'].' Postée le : '.$a['Annonce']['created'].'</li>';
	echo '<p>'.$a['Annonce']['descriptif'].'</p>';
	echo '<p> Derniere modification le '.$a['Annonce']['modified'].'</p>';
	echo '<br/><br/><br/>';
	
	echo $form->create("Mail",array('url'=>array('controller'=>'users','action'=>'sendMail')));
	echo $form->input("titre",array('type'=>'hidden','value'=>'Réponse à votre annonce '.$a['Annonce']['titre']));
	echo $form->input("users_id",array('type'=>'hidden','value'=>$a['Annonce']['users_id']));
	echo $form->input("email",array('label'=>'Adresse eMail :'));
	echo $form->input("message",array('label'=>'message :'));
	echo $form->end("Envoyer");

?>
</ul>