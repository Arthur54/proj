<?php
class Annonce extends AppModel
{
var $name = 'Annonce';
var $validate = array(
	'titre' => array(
	'between' => array(
	'rule' => array('between', 4, 30),
	'message' => 'Titre : entre 4 et 30 caractères.'
	)
	),
	'descriptif' => array(
	'between' => array(
	'rule' => array('between', 15, 100000),
	'message' => 'Minimum 15 caractères pour poster une annonce'
	)
	)
);
}
?>
