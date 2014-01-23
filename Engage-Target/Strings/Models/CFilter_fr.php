<?php

// Define the preferences

pref
(
	'[Engage-Target]/CFilter/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'filtres',
		STRING_NUMBER_SINGULAR => 'filtre',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, 'exportToCsv', null, 'Exporter en csv');
$this->setString(STRING_ACTION, 'exportEmailToEmailForge', null, 'Exporter vers EmailForge (Email)');
$this->setString(STRING_ACTION, 'exportSmsToEmailForge', null, 'Exporter vers EmailForge (Sms)');
$this->setString(STRING_ACTION, 'convertToTarget', null, 'Convertir en cible');


// List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer un filtre. Les cibles et segments associés seront également supprimés. Confirmez-vous ?');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, 'Aucune condition pour ce filtre.');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom : ');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Nom du filtre');

$this->setString(STRING_PROPERTY, 'equation', null, 'Equation');
$this->setString(STRING_PROPERTY, 'equation', array('label'), 'Equation: ');
$this->setString(STRING_PROPERTY, 'equation', array('placeholder'), '');

?>
