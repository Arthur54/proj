<h1> Informations sur le groupe </h1>
<?php
echo 'Nom du groupe : '.$groupe['Groupe']['nom'];
echo '<br/>Situation du groupe : ';
if($groupe['Groupe']['status_id']==1)
    echo 'Le groupe est actuellement ˆ la recherche de musiciens';
else
    echo 'Le groupe est actuellement complet !';
    
if($this->Session->read('Auth.User.groupes_id')==$groupe['Groupe']['id']){
    echo '<br/>Vous tes un membre du groupe, vous pouvez acceder ˆ '.$html->link('l\'administration du groupe',array('action'=>'gestion',$groupe['Groupe']['id']));
}
?>