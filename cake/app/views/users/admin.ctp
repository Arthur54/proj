<h1>Administration des membres</h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
	foreach($membres as $a):
		$status='visiteur';
		switch($a['User']['id_permission']){
			case 0:
				$status='membre';
				break;
			case 1:
				$status='modérateur';
				break;
			case 2:
				$status='admin';
				break;
		}
		echo '<li>'.$a['User']['username']." Permission : $status ----------------".$html->link('  Editer les informations de ce membre',array('action'=>'add',$a['User']['id'])).'  /  '.$html->link('Supprimer ce membre', "/membres/delete/{$a['User']['id']}", null, 'Etes-vous sûr ?' ).'</li>';
	endforeach;
?>