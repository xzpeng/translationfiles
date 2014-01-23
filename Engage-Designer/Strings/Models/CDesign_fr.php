<?php

// Define the preferences

pref
(
	'[Engage-Designer]/CDesign/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'Créations',
		STRING_NUMBER_SINGULAR => 'Création',
		STRING_CONSONANT => true
	)
);


$this->setString(null, null, null, 'Création');
$this->setString(null, null, array('plural'), 'Créations');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce design. Etes-vous certain?');


// Form

$this->setString(STRING_PROPERTY, 'title',  array('label'), 'Titre:');
$this->setString(STRING_PROPERTY, 'content',  array('label'), 'Contenu:');
$this->setString(STRING_PROPERTY, 'name',  array('label'), 'Nom : ');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), 'Nom');
$this->setString(STRING_PROPERTY, 'templates',  array('label'), 'Templates');
$this->setString(STRING_PROPERTY, 'type',  array('label'), 'Type : ');
$this->setString(STRING_PROPERTY, 'dateofcreation',  array('inline'), 'Créée le:');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'À propos du design');
$this->setString(STRING_SECTION, 'About', null, 'A propos');

// Action 

$this->setString(STRING_ACTION, 'edit', null, 'Modifier');
$this->setString(STRING_ACTION, 'save', null, 'Sauvegarder');
$this->setString(STRING_ACTION, 'delete', null, 'Supprimer');
$this->setString(STRING_ACTION, 'view/preview', null, 'Aperçu');
$this->setString(STRING_ACTION, 'view/structure', null, 'Afficher la structure');
$this->setString(STRING_ACTION, 'search', array('placeholder'), 'Rechercher une création par son nom');

?>
