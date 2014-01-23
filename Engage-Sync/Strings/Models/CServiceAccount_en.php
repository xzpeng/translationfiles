<?php

// Define the preferences

pref
(
	'[Engage-Sync]/CServiceAccount/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'service accounts',
		STRING_NUMBER_SINGULAR => 'service account',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_CHECK_CONNECTION, null, 'Check connection');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this service account. Are you sure?');


// Label

$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('label'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'parameters', array('label'), 'Parameters');
$this->setString(STRING_PROPERTY, 'password', array('label'), 'Password');
$this->setString(STRING_PROPERTY, 'scope', array('label'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('label'), 'Service Name');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('label'), 'Url');

$this->setString(STRING_PROPERTY, 'description', array('placeholder'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('placeholder'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Name');
$this->setString(STRING_PROPERTY, 'parameters', array('placeholder'), 'Parameters');
$this->setString(STRING_PROPERTY, 'password', array('placeholder'), 'Password');
$this->setString(STRING_PROPERTY, 'scope', array('placeholder'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('placeholder'), 'Service Name');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('placeholder'), 'Url');

$this->setString(STRING_PROPERTY, 'description', array('inline'), 'Description');
$this->setString(STRING_PROPERTY, 'login', array('inline'), 'Login');
$this->setString(STRING_PROPERTY, 'name', array('inline'), 'Name');
$this->setString(STRING_PROPERTY, 'parameters', array('inline'), 'Parameters');
$this->setString(STRING_PROPERTY, 'password', array('inline'), 'Password');
$this->setString(STRING_PROPERTY, 'scope', array('inline'), 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', array('inline'), 'Service Name');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), 'Service');
$this->setString(STRING_PROPERTY, 'url', array('inline'), 'Url');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'login', null, 'Login');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'parameters', null, 'Parameters');
$this->setString(STRING_PROPERTY, 'password', null, 'Password');
$this->setString(STRING_PROPERTY, 'scope', null, 'Scope');
$this->setString(STRING_PROPERTY, 'serviceName', null, 'Service Name');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), 'Service');
$this->setString(STRING_PROPERTY, 'url', null, 'Url');


//	String list

$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'name', null, 'Name');
$this->setString(STRING_LIST, 'login', null, 'Login');
$this->setString(STRING_LIST, 'serviceName', null, 'Service Name');



// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'services', null, 'Services');
$this->setString(STRING_PROPERTY, 'services', array('count'), 'Number of services');
$this->setString(STRING_PROPERTY, 'serviceId', null, 'Service');


// Sections

$this->setString(STRING_SECTION, 'Service', null, 'Service');
$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'Preferences', null, 'Preferences');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
