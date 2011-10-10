<h1>Annonces</h1>
<ul>
<?php
	echo '<li>'.$html->link('Ajouter une annonce',array('action'=>'add')).'</li>';
	echo '<li>'.$html->link('Administration des annonces',array('action'=>'admin')).'</li>';
?>
</ul>