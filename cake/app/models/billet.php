<?php
class Billet extends AppModel
{
var $name = 'Billets';
var $validte = array(
	'descriptif' => array(
	'rule' => array('between', 1, 50000),
	'message' => 'Nombre de caractères inssufisants'
	)
);
}
?>
