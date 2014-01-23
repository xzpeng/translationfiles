<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CForwardAction/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'forward actions',
		STRING_NUMBER_SINGULAR => 'forward action',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date of dispatching');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, 'Individual action');

$this->setString(STRING_PROPERTY, 'designId', null, 'Design');
$this->setString(STRING_PROPERTY, 'designId', array('label'), 'Design:');
$this->setString(STRING_PROPERTY, 'replyToEmail', null, 'Reply to email');
$this->setString(STRING_PROPERTY, 'replyToEmail', array('label'), 'Reply to email:');
$this->setString(STRING_PROPERTY, 'sendFrom', null, 'Send from');
$this->setString(STRING_PROPERTY, 'sendFrom', array('label'), 'Send from:');
$this->setString(STRING_PROPERTY, 'serviceAccountId', null, 'Service account ID');
$this->setString(STRING_PROPERTY, 'serviceAccountId', array('label'), 'Service account ID:');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');
?>
