<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividualLanguage/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'langues',
		STRING_NUMBER_SINGULAR => 'langue',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'languageIsoCode', null, 'ISO Code');
$this->setString(STRING_LIST, 'language', null, 'Langue');
$this->setString(STRING_LIST, 'rank', null, 'Classement');

// Properties

$this->setString(STRING_PROPERTY, 'language', array('label'), 'Langue');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Classement');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
