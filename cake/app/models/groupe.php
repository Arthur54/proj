<?php
class Groupe extends AppModel
{
var $name = 'Groupes';
var $validate = array(
	'nom' => array(
	'r1' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
	'r2' => array(
	'rule' => array('between', 2, 25),
	'message' => 'Entre 2 et 25 caractères'
	)
	),
	'adresse_web' => array(
	'r1' => array(
	'rule' => 'url',
	'message' => 'Entrer une bonne adresse web ! ',
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
	'cp' => array(
	'rule' => array('postal', '#^([0-9]{5})$#'),
	'message'=> 'Merci de soumettre un code postal valide'
	)
	);
}
?>
