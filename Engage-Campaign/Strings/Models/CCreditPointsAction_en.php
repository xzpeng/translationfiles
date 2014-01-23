<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CCreditPointAction/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'credit point actions',
		STRING_NUMBER_SINGULAR => 'credit point action',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');

$this->setString(STRING_PROPERTY, 'nbNQPoints', null, 'Number of non qualifying points');
$this->setString(STRING_PROPERTY, 'nbNQPoints', array('label'), 'Number of non qualifying points:');
$this->setString(STRING_PROPERTY, 'nbQPoints', null, 'Number of qualifying points');
$this->setString(STRING_PROPERTY, 'nbQPoints', array('label'), 'Number of qualifying points:');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
