<h1>LE SITE WEB :</h1>
<ul>
<?php

	echo '<li>'.$html->link('Consulter les annonces ',array('controller'=>'Annonces','action'=>'viewAll')).'</li>';
	echo '<li>'.$html->link('Poster une annonce ',array('controller'=>'Annonces','action'=>'add')).'</li>';
	echo '<li>'.$html->link('Consulter la liste des groupes ',array('controller'=>'Groupes','action'=>'viewAll')).'</li>';
	echo '<li>'.$html->link('Inscription',array('controller'=>'users','action'=>'inscription')).'</li>';
	echo '<li>'.$html->link('Connexion',array('controller'=>'users','action'=>'login')).'</li>';
	echo '<li>'.$html->link('Deconnexion',array('controller'=>'users','action'=>'logout')).'</li>';
	echo '<li>'.$html->link('Administration',array('controller'=>'wsites','action'=>'index')).'</li>';
?>
</ul>