<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<HEAD>
		<?php
		$html->css('/theme/html/style.css');
		?>
		<TITLE>Projet tut</TITLE>
	</HEAD>
	<BODY style="background:white">
	<h1>Administration</h1>
	<?php
		echo '<li>'.$html->link('Ajouter un article',array('controller'=>'annonces','action'=>'add')).'</li>';
	?>
	<?php echo $content_for_layout;?>
	</BODY>
</HTML>