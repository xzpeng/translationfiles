<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CForwardAction/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'Email via Forward',
		STRING_NUMBER_SINGULAR => 'Email via Forward',
		STRING_VOWELL => true
	)
);

// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date d\'envoi');

$this->setString(STRING_PROPERTY, 'designId', null, 'Design');
$this->setString(STRING_PROPERTY, 'designId', array('label'), 'Design:');
$this->setString(STRING_PROPERTY, 'replyToEmail', null, 'Email de réponse');
$this->setString(STRING_PROPERTY, 'replyToEmail', array('label'), 'Email de réponse :');
$this->setString(STRING_PROPERTY, 'sendFrom', null, 'Email d\'envoi');
$this->setString(STRING_PROPERTY, 'sendFrom', array('label'), 'Email d\'envoi :');
$this->setString(STRING_PROPERTY, 'serviceAccountId', null, 'ID du compte de service');
$this->setString(STRING_PROPERTY, 'serviceAccountId', array('label'), 'ID du compte de service:');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
