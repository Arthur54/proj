<h1> Edition des Groupes : </h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
foreach($groupes as $a):
	echo '<li>'.$html->link($a['Groupe']['id'],array('action'=>'add',$a['Groupe']['id'])).'</li>';
endforeach;
?>
</ul>