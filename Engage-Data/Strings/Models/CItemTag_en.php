<?php

// Define the preferences

pref
(
	'[Engage-Data]/CItemTag/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'items tags',
		STRING_NUMBER_SINGULAR => 'item tag',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_LIST, 'tagName', null, 'Tag name');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
