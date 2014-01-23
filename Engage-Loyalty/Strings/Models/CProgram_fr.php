<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CProgram/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'programmes de fidélité',
		STRING_NUMBER_SINGULAR => 'programme de fidélité',
		STRING_CONSONANT => true
	)
);


//	Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous allez définitivement supprimer ce programme. Confirmez-vous ce choix ?');


// Properties

$this->setString(STRING_PROPERTY, 'color', null, 'Couleur');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date de fin');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date de fin');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date de début');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date de début');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'hasDateOfClosure', null, 'Définir une fin');
$this->setString(STRING_PROPERTY, 'hasDateOfClosure', array('label'), 'Définir une fin');

$this->setString(STRING_PROPERTY, 'includeDiscounts', null, 'Inclure des remises');
$this->setString(STRING_PROPERTY, 'includeDiscounts', array('label'), 'Inclure des remises');
$this->setString(STRING_PROPERTY, 'includeVat', null, 'Inclure la TVA');
$this->setString(STRING_PROPERTY, 'includeVat', array('label'), 'Inclure la TVA');	
$this->setString(STRING_PROPERTY, 'individuals', null, 'Individus');
$this->setString(STRING_PROPERTY, 'individuals', array('label'), 'Individus');

$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');

$this->setString(STRING_PROPERTY, 'optOutNoTier', null, 'Désabonner les individus non rattaché à un niveau');
$this->setString(STRING_PROPERTY, 'optOutNoTier', array('label'), 'Désabonner les individus non rattaché à un niveau');

$this->setString(STRING_PROPERTY, 'programNQPointId', null, 'Points non qualifiant');
$this->setString(STRING_PROPERTY, 'programNQPointId', array('label'), 'Points non qualifiant');
$this->setString(STRING_PROPERTY, 'programQPointId', null, 'Points qualifiant');
$this->setString(STRING_PROPERTY, 'programQPointId', array('label'), 'Points qualifiant');

$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', null, 'Mode d\'arrondi pour les points non qualifiant');
$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', array('label'), 'Mode d\'arrondi pour les points non qualifiant');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', null, 'Mode d\'arrondi pour les points qualifiant');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', array('label'), 'Mode d\'arrondi pour les points qualifiant');

$this->setString(STRING_PROPERTY, 'tiers', null, 'Niveaux');
$this->setString(STRING_PROPERTY, 'tiers', array('label'), 'Niveaux');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'A propos');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'individuals', null, 'Individus');
$this->setString(STRING_SECTION, 'population', null, 'Population');
$this->setString(STRING_SECTION, 'demographics', null, 'Démographie');
$this->setString(STRING_SECTION, 'earn-burn', null, 'Earn & Burn');
$this->setString(STRING_SECTION, 'nQPoints', null, 'Points non qualifiant');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'qPoints', null, 'Points qualifiant');
$this->setString(STRING_SECTION, 'tiers', null, 'Niveaux');
$this->setString(STRING_SECTION, 'system', null, 'Système');


str('core.property.programid', 'ID du programme');


// List

$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');

?>
