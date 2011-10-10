<?php
class User extends AppModel
{
var $name = 'User';

var $validate = array(
	'username' => array(
	'r1' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
	'r2' => array(
	'rule' => array('between', 3, 15),
	'message' => 'Entre 3 et 15 caractères'
	)
	),
	'nom' => array(
	'r1' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
	'r2' => array(
	'rule' => array('between', 3, 15),
	'message' => 'Entre 3 et 15 caractères'
	)
	),
	'prenom' => array(
	'r1' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
	'r2' => array(
	'rule' => array('between', 3, 15),
	'message' => 'Entre 3 et 15 caractères'
	)
	),
	'ville' => array(
	'r1' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
	'r2' => array(
	'rule' => array('between', 3, 15),
	'message' => 'Entre 3 et 15 caractères'
	)
	),
	'mail' => array(
	'rule' => array('email', true),
	'message' => 'Merci de soumettre une adresse email valide.'
	),
	'cp' => array(
	'rule' => array('postal', '#^([0-9]{5})$#'),
	'message'=> 'Merci de soumettre un code postal valide'
	)
	);
	
	function beforeSave(){
		$this->data[$this->name]['password']=Security::hash($this->data[$this->name]['password'],null,true);
		return true;
	}
}
?>
