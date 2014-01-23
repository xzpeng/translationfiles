<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividualLanguage/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'individual languages',
		STRING_NUMBER_SINGULAR => 'individual language',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'languageIsoCode', null, 'ISO Code');
$this->setString(STRING_LIST, 'language', null, 'Language');
$this->setString(STRING_LIST, 'rank', null, 'Rank');


// Properties

$this->setString(STRING_PROPERTY, 'language', array('label'), 'Language');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
