<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCategory/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'categories',
		STRING_NUMBER_SINGULAR => 'category',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Title');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Title');
$this->setString(STRING_PROPERTY, 'parentCategoryId', null, 'Parent category');
$this->setString(STRING_PROPERTY, 'parentCategoryId', array('label'), 'Parent category');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
