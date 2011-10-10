<h1>Liste des groupes : </h1>
<ul>
<?php
echo $this->Session->flash();
echo "Page : ".$paginator->numbers(); 
foreach($groupes as $g){
    echo '<li>'.$html->link($g['Groupe']['nom'],array('controller'=>'Groupes','action'=>'viewOne',$g['Groupe']['id'])).'</li>';
}
?>
</ul>