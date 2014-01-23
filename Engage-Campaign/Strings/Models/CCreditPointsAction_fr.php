<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CCreditPointAction/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'créditer des points',
		STRING_NUMBER_SINGULAR => 'créditer des points',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');

$this->setString(STRING_PROPERTY, 'nbNQPoints', null, 'Nombre de points non qualifiants');
$this->setString(STRING_PROPERTY, 'nbNQPoints', array('label'), 'Nombre de points non qualifiants :');
$this->setString(STRING_PROPERTY, 'nbQPoints', null, 'Nombre de points qualifiants');
$this->setString(STRING_PROPERTY, 'nbQPoints', array('label'), 'Nombre de points qualifiants :');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
