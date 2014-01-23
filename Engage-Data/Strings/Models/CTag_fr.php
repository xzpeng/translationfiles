<?php

// Define the preferences

pref
(
	'[Engage-Data]/CTag/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'étiquettes',
		STRING_NUMBER_SINGULAR => 'étiquette',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
