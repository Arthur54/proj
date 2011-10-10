<h1>Administration de votre groupe</h1>
<ul>
    <?php
    $opt=array();
    foreach($users as $u) {
      $opt[$u['User']['id']] =  $u['User']['username'] ;
    }

    echo '<li>Modifier les informations du groupes </li>';
    echo '<p>'.$form->create('Groupe',array('url'=>array('action'=>'add2')));
	echo $form->input('Groupe.nom',array('label'=>'Nom du groupe : '));
	echo $form->input('Groupe.adresse_web',array('label'=>'Site web du groupe : '));
	echo $form->input('Groupe.cp',array('label'=>'Code postal du lieu de rŽpŽtition du groupe : '));
	echo $form->input('Groupe.ville',array('label'=>'Ville de rŽpŽtition du groupe : '));
	$options=array('1'=>'Le groupe cherche des membres','2'=>'Le groupe est complet');
	echo 'Situation : '. $form->select('Groupe.status_id',$options); 
        echo $form->input('Groupe.id',array('type' => 'hidden'));
	echo $form->end('envoyer').'</p>';
    
        
    echo '<li>Ajouter un membre au groupe</li>';
        echo '<p>'.$form->create('User',array('url'=>array('action'=>'addG')));
        echo 'Pseudo du membre ˆ ajouter : '.$form->select('pseudo',$opt).'</p>';
        echo $form->input('Groupe.id',array('type' => 'hidden'));
        echo $form->end('Ajouter le membre');
        
    ?>