<?php

// Define the preferences

pref
(
	'[Engage-Data]/CWishlist/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'listes d\'envie',
		STRING_NUMBER_SINGULAR => 'liste d\'envie',
		STRING_CONSONANT => true
	)
);


//	List

$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');


//	Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'items', null, 'Articles');

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
