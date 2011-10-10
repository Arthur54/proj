<h1> Edition des Annonces : </h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
foreach($annonces as $a):
	echo '<li>'.$html->link($a['Annonce']['titre'],array('action'=>'add',$a['Annonce']['id'])).'</li>';
endforeach;
?>
</ul>