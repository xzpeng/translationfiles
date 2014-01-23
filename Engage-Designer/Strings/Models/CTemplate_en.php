<?php

// Define the preferences

pref
(
	'[Engage-Designer]/CTemplate/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'templates',
		STRING_NUMBER_SINGULAR => 'template',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this template. Are you sure?');


// Form

$this->setString(STRING_PROPERTY, 'context',  array('label'), 'Context:');
$this->setString(STRING_PROPERTY, 'context',  array('placeholder'), 'Context');
$this->setString(STRING_PROPERTY, 'content',  array('placeholder'), 'Content:');
$this->setString(STRING_PROPERTY, 'content',  array('label'), 'Content');
$this->setString(STRING_PROPERTY, 'designId',  array('label'), 'Design ID:');
$this->setString(STRING_PROPERTY, 'name',  array('label'), 'Name:');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), 'Name');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'About the template');

?>
