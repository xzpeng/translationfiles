<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCatalogueCategory/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'catalogues',
		STRING_NUMBER_SINGULAR => 'catalogue category',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_LIST, 'categoryname', null, 'Category name');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');
?>
