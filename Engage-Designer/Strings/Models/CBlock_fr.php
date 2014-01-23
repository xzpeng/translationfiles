<?php

// Define the preferences

pref
(
	'[Engage-Designer]/CBlock/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'blocks',
		STRING_NUMBER_SINGULAR => 'block',
		STRING_CONSONANT => true
	)
);


$this->setString(null, null, null, 'Bloc');
$this->setString(null, null, array('plural'), 'Blocs');

// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce block. Etes-vous certain?');


// Form

$this->setString(STRING_PROPERTY, 'title',  array('label'), 'Titre:');
$this->setString(STRING_PROPERTY, 'content',  array('label'), 'Contenu:');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), 'Nom');
$this->setString(STRING_PROPERTY, 'name',  array('label'), 'Nom : ');
$this->setString(STRING_PROPERTY, 'templates',  array('label'), 'Templates');
$this->setString(STRING_PROPERTY, 'type',  array('label'), 'Type : ');
$this->setString(STRING_PROPERTY, 'dateofcreation',  array('inline'), 'Créé le:');

// Sections

$this->setString(STRING_SECTION, 'About', null, 'À propos du block');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

// Action 

$this->setString(STRING_ACTION, 'edit', null, 'Modifier');
$this->setString(STRING_ACTION, 'save', null, 'Sauvegarder');
$this->setString(STRING_ACTION, 'delete', null, 'Supprimer');

$this->setString(STRING_ACTION, 'search', array('placeholder'), 'Rechercher un bloc par son nom');

?>
