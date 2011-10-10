<h1>Administration des groupes</h1>
<ul>
<?php
	foreach($groupes as $g):
		echo '<li>'.$g['Groupe']['nom'].$html->link('  Editer les informations de ce groupe',array('action'=>'add',$g['Groupe']['id'])).'  /  '.$html->link('Supprimer ce groupe', "/groupes/delete/{$g['Groupe']['id']}", null, 'Etes-vous sûr ?' ).'</li>';
	endforeach;
?>