<?php

// Define the preferences

pref
(
	'[Engage-Data]/CLocation/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'adresses',
		STRING_NUMBER_SINGULAR => 'adresse',
		STRING_VOWELL => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individu ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), 'Identifiant de l\'individu:');

$this->setString(STRING_PROPERTY, 'isChecked', null, 'A été vérifié');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), 'a été vérifié:');

$this->setString(STRING_PROPERTY, 'isValid', null, 'Est valide');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), 'Est valide:');

$this->setString(STRING_PROPERTY, 'rank', null, 'Rang');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rang : ');

$this->setString(STRING_PROPERTY, 'type', null, 'Type d\'adresse');
$this->setString(STRING_PROPERTY, 'type', array('label'), 'Type d\'adresse : ');

$this->setString(STRING_PROPERTY, 'address1', null, 'Lieu-dit');
$this->setString(STRING_PROPERTY, 'address1', array('label'), 'Lieu-dit : ');

$this->setString(STRING_PROPERTY, 'address2', null, 'Rue');
$this->setString(STRING_PROPERTY, 'address2', array('label'), ' Rue :');

$this->setString(STRING_PROPERTY, 'address3', null, 'Complément d\'adresse');
$this->setString(STRING_PROPERTY, 'address3', array('label'), 'Complément d\'adresse : ' );

$this->setString(STRING_PROPERTY, 'city', null, 'Ville');
$this->setString(STRING_PROPERTY, 'city', array('label'), 'Ville :');

$this->setString(STRING_PROPERTY, 'countryCode', null, 'Code pays');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), 'Code pays : ');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, 'Opt-in');
$this->setString(STRING_PROPERTY, 'isNotificationChannel', array('label'), 'Opt-in : ');

$this->setString(STRING_PROPERTY, 'latitude', null, 'Latitude');
$this->setString(STRING_PROPERTY, 'latitude', array('label'), 'Latitude : ');

$this->setString(STRING_PROPERTY, 'longitude', null, 'Longitude');
$this->setString(STRING_PROPERTY, 'longitude', array('label'), 'Longitude : ');

$this->setString(STRING_PROPERTY, 'postalCode', null, 'Code postal');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), 'Code postal : ');

$this->setString(STRING_PROPERTY, 'state1', null, 'Province');
$this->setString(STRING_PROPERTY, 'state1', array('label'), 'Province : ');

$this->setString(STRING_PROPERTY, 'state2', null, 'Etat');
$this->setString(STRING_PROPERTY, 'state2', array('label'), 'Etat : ');

$this->setString(STRING_PROPERTY, 'state3', null, 'Pays');
$this->setString(STRING_PROPERTY, 'state3', array('label'), 'Pays : ');

$this->setString(STRING_PROPERTY, 'streetNumber', null, 'Numéro de voie');
$this->setString(STRING_PROPERTY, 'streetNumber', array('label'), 'Numéro de voie : ');

$this->setString(STRING_PROPERTY, 'streetType', null, 'Type de voie');
$this->setString(STRING_PROPERTY, 'streetType', array('label'), 'Type de voie : ');


// List

$this->setString(STRING_LIST, 'defaultDescription', null, 'Addresse');
$this->setString(STRING_LIST, 'isChecked', null, 'Is checked ?');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Opt-in ?');
$this->setString(STRING_LIST, 'isValid', null, 'Est validé ?');
$this->setString(STRING_LIST, 'concatAddress', null, 'Adresse');
$this->setString(STRING_LIST, 'postalCode', null, 'Code postal');
$this->setString(STRING_LIST, 'city', null, 'Ville');
$this->setString(STRING_LIST, 'concatState', null, 'Etat');
$this->setString(STRING_LIST, 'countryCode', null, 'Pays');

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


// Tags

$this->setString(null, 'optIn', array('tag'), 'Opt-in');			
$this->setString(null, 'notValid', array('tag'), 'Non valide');
$this->setString(null, 'notChecked', array('tag'), 'Non vérifié');
$this->setString(null, 'valid', array('tag'), 'Valide');

?>
