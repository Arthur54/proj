<h1>Administration des Billets</h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
	foreach($billets as $a):
		echo '<li>'.$a['Billet']['id'].$html->link('  Editer ce billet',array('action'=>'add',$a['Billet']['id'])).'  /  '.$html->link('Supprimer ce billet', "/billets/delete/{$a['Billet']['id']}", null, 'Etes-vous sûr ?' ).'</li>';
		echo '<p>'.$a['Billet']['descriptif'].'</p>';
	endforeach;
?>