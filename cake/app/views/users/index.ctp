<h1>Gestion des membres</h1>
<ul>
<?php
	echo '<li>'.$html->link('ajouter un membre (inscription)',array('action'=>'add')).'</li>';
	echo '<li>'.$html->link('Administration des membres',array('action'=>'admin')).'</li>';
?>
</ul>