<?php

// Define the preferences

pref
(
	'[Engage-Data]/CCatalogueCategory/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'catégorie du catalogue',
		STRING_NUMBER_SINGULAR => 'catégorie du catalogue',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_LIST, 'categoryname', null, 'Nom de la category');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
