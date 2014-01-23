<?php 

// Define the preferences

pref
(
	'[Engage-Target]/CTarget/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'cibles',
		STRING_NUMBER_SINGULAR => 'cible',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer une cible. Confirmez-vous ?');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'Aucune cible.');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, 'Aucune condition pour cette cible.');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom : ');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description : ');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Nom de la cible');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'A propos de la cible');

?>
