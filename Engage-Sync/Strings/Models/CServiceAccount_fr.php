<?php

// Define the preferences

pref
(
	'[Engage-Sync]/CServiceAccount/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'services',
		STRING_NUMBER_SINGULAR => 'service',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_CHECK_CONNECTION, null, 'Tester la connexion');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cet individu. Etes-vous certain?');


// Label

$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('label'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'parameters', array('label'), 'Paramètres');
$this->setString(STRING_PROPERTY, 'password', array('label'), 'Mot de passe');
$this->setString(STRING_PROPERTY, 'scope', array('label'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('label'), 'Nom du service');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('label'), 'Url');

$this->setString(STRING_PROPERTY, 'description', array('placeholder'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('placeholder'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Nom');
$this->setString(STRING_PROPERTY, 'parameters', array('placeholder'), 'Paramètres');
$this->setString(STRING_PROPERTY, 'password', array('placeholder'), 'Mot de passe');
$this->setString(STRING_PROPERTY, 'scope', array('placeholder'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('placeholder'), 'Nom du service');
$this->setString(STRING_PROPERTY, 'serviceId', array('placeholder'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('placeholder'), 'Url');

$this->setString(STRING_PROPERTY, 'description', array('inline'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('inline'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('inline'), 'Nom');
$this->setString(STRING_PROPERTY, 'parameters', array('inline'), 'Paramètres');
$this->setString(STRING_PROPERTY, 'password', array('inline'), 'Mot de passe');
$this->setString(STRING_PROPERTY, 'scope', array('inline'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('inline'), 'Nom du service');
$this->setString(STRING_PROPERTY, 'serviceId', array('inline'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('inline'), 'Url');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'login', null, 'Login');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'parameters', null, 'Paramètres');
$this->setString(STRING_PROPERTY, 'password', null, 'Mot de passe');
$this->setString(STRING_PROPERTY, 'scope', null, 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', null, 'Nom du service');
$this->setString(STRING_PROPERTY, 'serviceId', null, 'Service');
$this->setString(STRING_PROPERTY, 'url', null, 'Url');


//	String list

$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'name', null, 'Nom');
$this->setString(STRING_LIST, 'login', null, 'Login');
$this->setString(STRING_LIST, 'serviceName', null, 'Nom du service');



// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'services', null, 'Services');
$this->setString(STRING_PROPERTY, 'services', array('count'), 'Nombre de services');
$this->setString(STRING_PROPERTY, 'serviceId', null, 'Service');



// Sections

$this->setString(STRING_SECTION, 'Service', null, 'Service');
$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'Preferences', null, 'Preferences');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
