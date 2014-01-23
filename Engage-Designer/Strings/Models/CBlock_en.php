<?php

// Define the preferences

pref
(
	'[Engage-Designer]/CBlock/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'blocks',
		STRING_NUMBER_SINGULAR => 'block',
		STRING_CONSONANT => true
	)
);


$this->setString(null, null, null, 'Block');
$this->setString(null, null, array('plural'), 'Blocks');

// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this block. Are you sure?');


// Form

$this->setString(STRING_PROPERTY, 'title',  array('label'), 'Title:');
$this->setString(STRING_PROPERTY, 'name',  array('label'), 'Name:');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), 'Name');
$this->setString(STRING_PROPERTY, 'type',  array('label'), 'Type:');
$this->setString(STRING_PROPERTY, 'content',  array('label'), 'Content:');
$this->setString(STRING_PROPERTY, 'dateofcreation',  array('inline'), 'Created on :');

// Sections

$this->setString(STRING_SECTION, 'about', null, 'About the design');
$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');


// Action 

$this->setString(STRING_ACTION, 'edit', null, 'Edit');
$this->setString(STRING_ACTION, 'delete', null, 'Delete');
$this->setString(STRING_ACTION, 'save', null, 'Save');

$this->setString(STRING_ACTION, 'search', array('placeholder'), 'Search a block by name');

?>
