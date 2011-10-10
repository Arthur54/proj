<h1> Edition des Billets : </h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
foreach($billets as $a):
	echo '<li>'.$html->link($a['Billet']['id'],array('action'=>'add',$a['Billet']['id'])).'</li>';
endforeach;
?>
</ul>