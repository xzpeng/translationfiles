<?php

pref
(
	'[Engage-Campaign]/COperation/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'operations',
		STRING_NUMBER_SINGULAR => 'operation',
		STRING_VOWELL => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_START, null, 'Start the scenario');
$this->setString(STRING_ACTION, ACTION_STOP, null, 'Stop the scenario');


// List

$this->setString(STRING_LIST, 'operationName', null, 'Operation name');
$this->setString(STRING_LIST, 'dateOfStart', null, 'Date of start');
$this->setString(STRING_LIST, 'dateOfClosure', null, 'Date of closure');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date of dispatching');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, 'Individual action');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'campaignId', null, 'Campaign ID');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date of start');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date of start');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date of closure');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date of closure');
$this->setString(STRING_PROPERTY, 'isRepeatable', null, 'Is repeatable');
$this->setString(STRING_PROPERTY, 'repeatInterval', null, 'Repeat interval');
$this->setString(STRING_PROPERTY, 'sequenceId', null, 'Sequence ID');
$this->setString(STRING_PROPERTY, 'trapPopulationClassName', null, 'Trap population class name');
$this->setString(STRING_PROPERTY, 'trapPopulationExtensionId', null, 'Trap population extension ID');
$this->setString(STRING_PROPERTY, 'trapPopulationId', null, 'Trap population ID');
$this->setString(STRING_PROPERTY, 'trapPopulation', array('label'), 'Trap Population');

$this->setString(STRING_SECTION, 'trapPopulation', null, 'Trap Population');
$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_SECTION, 'editor', null, 'Scenario editor');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
