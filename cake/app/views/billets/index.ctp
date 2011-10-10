<h1>Billets</h1>
<ul>
<?php
	echo '<li>'.$html->link('Ajouter un billet',array('action'=>'add')).'</li>';
	echo '<li>'.$html->link('Administration des billets',array('action'=>'admin')).'</li>';
?>
</ul>