<?php

// Define the preferences

pref
(
	'[Engage-Data]/CItemTag/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'tags de l\'article',
		STRING_NUMBER_SINGULAR => 'tag de l\'article',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_LIST, 'tagName', null, 'Nom des tags');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


?>
