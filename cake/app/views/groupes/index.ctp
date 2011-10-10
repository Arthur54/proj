<h1>Gestion des groupes</h1>
<ul>
<?php
echo '<li>'.$html->link('Consulter la liste des groupes',array('action'=>'viewAll')).'</li>';
echo '<li>'.$html->link('Ajouter un groupe',array('action'=>'add')).'</li>';
echo '<li>'.$html->link('Administration des groupes',array('action'=>'admin')).'</li>';
?>
</ul>