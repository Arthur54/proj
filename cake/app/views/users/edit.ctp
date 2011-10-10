<h1> Edition des Membres : </h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
foreach($membres as $a):
	echo '<li>'.$html->link($a['User']['id'],array('action'=>'add',$a['User']['id'])).'</li>';
endforeach;
?>
</ul>