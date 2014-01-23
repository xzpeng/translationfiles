<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCategory/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'catégories',
		STRING_NUMBER_SINGULAR => 'catégorie',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Titre');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Titre');
$this->setString(STRING_PROPERTY, 'parentCategoryId', null, 'Catégorie parente');
$this->setString(STRING_PROPERTY, 'parentCategoryId', array('label'), 'Catégorie parente');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


?>
