<h1>Administration</h1>
<?php
	echo 'login : '.$this->Session->read('Auth.User.username').'<br/>';
	echo $html->link('Gerer les annonces',array('controller'=>'annonces','action'=>'index'));
	echo '<br/>';
	echo $html->link('Gerer les membres',array('controller'=>'users','action'=>'index'));
	echo '<br/>';
	echo $html->link('Gerer les groupes',array('controller'=>'groupes','action'=>'index'));
?>