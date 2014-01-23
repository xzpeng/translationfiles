<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CEmailForgeReport/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'campagnes EF',
		STRING_NUMBER_SINGULAR => 'campagnes',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'campaignName', null, 'Campagne');
$this->setString(STRING_LIST, 'operationCode', null, 'Opération');
$this->setString(STRING_LIST, 'dateOfStart', null, 'Date d\'envoi');
$this->setString(STRING_LIST, 'subject', null, 'Subject');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Opt-in?');
$this->setString(STRING_LIST, 'isValid', null, 'isValid?');


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individu');
$this->setString(STRING_PROPERTY, 'universe', null, 'Univers');
$this->setString(STRING_PROPERTY, 'campaignId', null, 'EF ID de campagne');
$this->setString(STRING_PROPERTY, 'contactId', null, 'ID du contact');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date début d\'envoi');
$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'campaignName', null, 'EF Nom de campagne');
$this->setString(STRING_PROPERTY, 'operationCode', null, 'EF code opération');
$this->setString(STRING_PROPERTY, 'subject', null, 'Objet');
$this->setString(STRING_PROPERTY, 'status', null, 'Statut');
$this->setString(STRING_PROPERTY, 'hasClicked', null, 'A cliqué');
$this->setString(STRING_PROPERTY, 'hasOpened', null, 'A ouvert');
$this->setString(STRING_PROPERTY, 'hasUnsubscribed', null, 'S\'est désinscrit');
$this->setString(STRING_PROPERTY, 'isSpam', null, 'Plainte pour Spam');
$this->setString(STRING_PROPERTY, 'blackListDate', null, 'Entrée en liste bloquée');
$this->setString(STRING_PROPERTY, 'messageId', null, 'ID du message');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
