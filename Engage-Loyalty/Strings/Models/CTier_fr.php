<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CTier/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'niveaux',
		STRING_NUMBER_SINGULAR => 'niveau',
		STRING_CONSONANT => true
	)
);


//	Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous allez définitivement supprimer ce niveau. Confirmez-vous ce choix ?');


// List 

$this->setString(STRING_LIST, 'name', null, 'Nom');
$this->setString(STRING_LIST, 'multiplier', null, 'Multiplieur');
$this->setString(STRING_LIST, 'rank', null, 'Rang');


// Properties

$this->setString(STRING_PROPERTY, 'color', null, 'Couleur');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');

$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, 'Date de l\'achat');
$this->setString(STRING_PROPERTY, 'dateOfUpdate', null, 'Date de mise à jour');

$this->setString(STRING_PROPERTY, 'durationOfAvailability', array('label'), 'Durée de validité');
$this->setString(STRING_PROPERTY, 'durationOfGrace', array('label'), 'Délai de grâce');
$this->setString(STRING_PROPERTY, 'durationOfHolding', array('label'), 'Délai d\'obtention');
$this->setString(STRING_PROPERTY, 'durationOfAvailability', null, 'Durée de validité');
$this->setString(STRING_PROPERTY, 'durationOfGrace', null, 'Délai de grâce');
$this->setString(STRING_PROPERTY, 'durationOfHolding', null, 'Délai d\'obtention');

$this->setString(STRING_PROPERTY, 'filterId', null, 'ID du filtre');

$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', array('label'), 'Métrique de la durée de validité');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', array('label'), 'Métrique du délai de grâce');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', array('label'), 'Métrique du délai d\'obtention');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', null, 'Métrique de la durée de validité');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', null, 'Métrique du délai de grâce');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', null, 'Métrique du délai d\'obtention');
$this->setString(STRING_PROPERTY, 'multiplier', array('label'), 'Multiplicateur');
$this->setString(STRING_PROPERTY, 'multiplier', array('inline'), 'Multiplicateur');
$this->setString(STRING_PROPERTY, 'multiplier', null, 'Multiplicateur');

$this->setString(STRING_PROPERTY, 'programId', null, 'ID du programme');

$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('inline'), 'Nom');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rang');
$this->setString(STRING_PROPERTY, 'rank', array('inline'), 'Rang');
$this->setString(STRING_PROPERTY, 'rank', null, 'Rang');

str('core.property.tierId', 'Tier ID');
str('core.property.languageIsoCode', 'Langue');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
