<?php

// Define the preferences

pref
(
	'[Engage-Data]/CLocation/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'locations',
		STRING_NUMBER_SINGULAR => 'location',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), 'Individual ID:');

$this->setString(STRING_PROPERTY, 'isChecked', null, 'Is checked');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), 'Is checked:');

$this->setString(STRING_PROPERTY, 'isValid', null, 'Is valid');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), 'Is valid:');

$this->setString(STRING_PROPERTY, 'rank', null, 'Rank');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank:');

$this->setString(STRING_PROPERTY, 'type', null, 'Type of location');
$this->setString(STRING_PROPERTY, 'type', array('label'), 'Type of location:');

$this->setString(STRING_PROPERTY, 'address1', null, 'Address 1');
$this->setString(STRING_PROPERTY, 'address1', array('label'), 'Address 1:');

$this->setString(STRING_PROPERTY, 'address2', null, 'Address 2');
$this->setString(STRING_PROPERTY, 'address2', array('label'), 'Address 2:');

$this->setString(STRING_PROPERTY, 'address3', null, 'Address 3');
$this->setString(STRING_PROPERTY, 'address3', array('label'), 'Address 3:');

$this->setString(STRING_PROPERTY, 'city', null, 'City');
$this->setString(STRING_PROPERTY, 'city', array('label'), 'City:');

$this->setString(STRING_PROPERTY, 'countryCode', null, 'Country code');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), 'Country:');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, 'Valid for notifications');
$this->setString(STRING_PROPERTY, 'isNotificationChannel', array('label'), 'Valid for notifications:');

$this->setString(STRING_PROPERTY, 'latitude', null, 'Latitude');
$this->setString(STRING_PROPERTY, 'latitude', array('label'), 'Latitude:');

$this->setString(STRING_PROPERTY, 'longitude', null, 'Longitude');
$this->setString(STRING_PROPERTY, 'longitude', array('label'), 'Longitude:');

$this->setString(STRING_PROPERTY, 'postalCode', null, 'Postal code');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), 'Postal code:');

$this->setString(STRING_PROPERTY, 'state1', null, 'State 1');
$this->setString(STRING_PROPERTY, 'state1', array('label'), 'State 1:');

$this->setString(STRING_PROPERTY, 'state2', null, 'State 2');
$this->setString(STRING_PROPERTY, 'state2', array('label'), 'State 2:');

$this->setString(STRING_PROPERTY, 'state3', null, 'State 3');
$this->setString(STRING_PROPERTY, 'state3', array('label'), 'State 3:');

$this->setString(STRING_PROPERTY, 'streetNumber', null, 'Street number');
$this->setString(STRING_PROPERTY, 'streetNumber', array('label'), 'Street number:');

$this->setString(STRING_PROPERTY, 'streetType', null, 'Street type');
$this->setString(STRING_PROPERTY, 'streetType', array('label'), 'Street type:');


// List

$this->setString(STRING_LIST, 'defaultDescription', null, 'Address');
$this->setString(STRING_LIST, 'isChecked', null, 'Is checked?');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Opt-in?');
$this->setString(STRING_LIST, 'isValid', null, 'isValid?');
$this->setString(STRING_LIST, 'concatAddress', null, 'Address');
$this->setString(STRING_LIST, 'postalCode', null, 'Postal Code');
$this->setString(STRING_LIST, 'city', null, 'City');
$this->setString(STRING_LIST, 'concatState', null, 'State');
$this->setString(STRING_LIST, 'countryCode', null, 'Country');


//

$this->setString(STRING_SECTION, 'About', null, 'About');

// Tags

$this->setString(null, 'optIn', array('tag'), 'Opt-in');		
$this->setString(null, 'notValid', array('tag'), 'Not Valid');
$this->setString(null, 'notChecked', array('tag'), 'Not checked');
$this->setString(null, 'valid', array('tag'), 'Valid');


$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
