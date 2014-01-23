<?php

// Define the preferences

pref
(
	'[Engage-Designer]/CTemplate/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'templates',
		STRING_NUMBER_SINGULAR => 'template',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce template. Etes-vous certain?');


// Form

$this->setString(STRING_PROPERTY, 'context',  array('label'), 'Contexte : ');
$this->setString(STRING_PROPERTY, 'context',  array('placeholder'), 'Contexte');
$this->setString(STRING_PROPERTY, 'content',  array('placeholder'), 'Contenu:');
$this->setString(STRING_PROPERTY, 'content',  array('label'), 'Contenu');
$this->setString(STRING_PROPERTY, 'designId',  array('label'), 'Design ID : ');
$this->setString(STRING_PROPERTY, 'name',  array('label'), 'Nom : ');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), 'Nom');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'A propos du template');

?>
