<?php

// Define the preferences

pref
(
	'[Engage-Target]/CFilter/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'filters',
		STRING_NUMBER_SINGULAR => 'filter',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, 'exportToCsv', null, 'Export to csv');
$this->setString(STRING_ACTION, 'exportEmailToEmailForge', null, 'Export to EmailForge (Email)');
$this->setString(STRING_ACTION, 'exportSmsToEmailForge', null, 'Export to EmailForge (Sms)');
$this->setString(STRING_ACTION, 'convertToTarget', null, 'Convert to Target');

// List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to delete the filter. This will remove the filter as well as all targets and segments associated to it. Are you sure you want to proceed?');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, 'No conditions for this filter');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name: ');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Name of filter');

$this->setString(STRING_PROPERTY, 'equation', null, 'Equation');
$this->setString(STRING_PROPERTY, 'equation', array('label'), 'Equation: ');
$this->setString(STRING_PROPERTY, 'equation', array('placeholder'), '');

?>
