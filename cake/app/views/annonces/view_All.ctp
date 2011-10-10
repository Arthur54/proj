<h1> Toutes les Annonces : </h1>
<ul>
<?php echo "Page : ".$paginator->numbers(); ?>
<?php
foreach($annonces as $a):
	echo '<li>Titre : '.$a['Annonce']['titre'].' Postée le : '.$a['Annonce']['created'].'</li>';
	echo '<p>'.$a['Annonce']['descriptif'].'</p>';
	echo '<p>'.$html->link('Plus de détails',array('controller'=>'Annonces','action'=>'viewOne',$a['Annonce']['id'])).'</p>';
	echo '<hr>';
endforeach;
?>
</ul>