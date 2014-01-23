<?php

// Define the preferences

pref
(
	'[Engage-Target]/CTarget/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'targets',
		STRING_NUMBER_SINGULAR => 'target',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to delete the target. Are you sure you want to proceed?');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'No target.');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, 'No conditions for this target');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name: ');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description: ');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Name of target');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'About');

?>
