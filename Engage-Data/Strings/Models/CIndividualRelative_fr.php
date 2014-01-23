<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividualRelative/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'relations',
		STRING_NUMBER_SINGULAR => 'relation',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'Aucune relation trouvée pour cet individu.');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
