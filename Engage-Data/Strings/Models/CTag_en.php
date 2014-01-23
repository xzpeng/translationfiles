<?php

// Define the preferences

pref
(
	'[Engage-Data]/CTag/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'tags',
		STRING_NUMBER_SINGULAR => 'tag',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
