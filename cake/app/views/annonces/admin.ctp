<h1>Administration des Annonces</h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
	foreach($annonces as $a):
		echo '<li>'.$a['Annonce']['titre'].$html->link('  Editer cette annonce',array('action'=>'add',$a['Annonce']['id'])).'  /  '.$html->link('Supprimer cette annonce', "/annonces/delete/{$a['Annonce']['id']}", null, 'Etes-vous sûr ?' ).'</li>';
		echo '<p>'.$a['Annonce']['descriptif'].'</p>';
	endforeach;
?>