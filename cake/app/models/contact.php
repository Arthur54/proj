<?php
class Contact extends AppModel
{
var $name = 'Contact';
var $useTable=false;
var $_schema = array(
	'message' => array(
		'type' => 'text'
		),
	'email' => array(
		'type' => 'string',
		'length' => 30
		),
	'titre' =>array(
		'type' => 'string',
		'length' => 50
	),
	'id_auteur' => array(
		'type' => 'integer'
	)
	);

var $validate=array(
    'message' => array(
	'rule' => 'alphanumeric',
	'required' => true,
	'message' => 'Chiffres et lettres uniquement !',
	),
    	'email' => array(
	'rule' => array('email', true),
	'message' => 'Merci de soumettre une adresse email valide.'
	)
    );

}
?>
