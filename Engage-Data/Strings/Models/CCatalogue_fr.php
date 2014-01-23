<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCatalogue/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'catalogues',
		STRING_NUMBER_SINGULAR => 'catalogue',
		STRING_CONSONANT => true
	)
);


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');

// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce catalogue. Etes-vous certain?');


// Properties

$this->setString(STRING_PROPERTY, 'categories', null, 'Catégories');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_SECTION, 'about', null, 'A propos');
$this->setString(STRING_PROPERTY, 'name', null, 'Titre');
$this->setString(STRING_PROPERTY, 'items', null, 'Articles');


// Section

$this->setString(STRING_SECTION, 'categories', null, 'Catégories');
$this->setString(STRING_SECTION, 'items', null, 'Articles');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
