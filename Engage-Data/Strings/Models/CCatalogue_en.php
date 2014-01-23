<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCatalogue/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'catalogues',
		STRING_NUMBER_SINGULAR => 'catalogue',
		STRING_CONSONANT => true
	)
);


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');



// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this catalogue. Are you sure?');


// Properties

$this->setString(STRING_PROPERTY, 'categories', null, 'Categories');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_PROPERTY, 'name', null, 'Title');
$this->setString(STRING_PROPERTY, 'items', null, 'Items');


// Section

$this->setString(STRING_SECTION, 'categories', null, 'Categories');
$this->setString(STRING_SECTION, 'items', null, 'Items');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
