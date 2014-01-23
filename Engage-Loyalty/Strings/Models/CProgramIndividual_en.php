<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CProgramIndividual/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'Subscriptions to a program',
		STRING_NUMBER_SINGULAR => 'Subscription to a program',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this program. Are you sure?');


//	List

$this->setString(STRING_LIST, 'programName', null, 'Program');
$this->setString(STRING_LIST, 'individual', null, 'Name');
$this->setString(STRING_LIST, 'dateOfOptIn', null, 'Date of opt-in');
$this->setString(STRING_LIST, 'tierName', null, 'Tier');
$this->setString(STRING_LIST, 'nqPoints', null, 'Nb NQ points');
$this->setString(STRING_LIST, 'qPoints', null, 'Nb Q points');


// Properties

$this->setString(STRING_PROPERTY, 'nqPoints', null, 'Number of non-qualifying points');
$this->setString(STRING_PROPERTY, 'programId', null, 'Loyalty program ID');
$this->setString(STRING_PROPERTY, 'programName', null, 'Loyalty program');
$this->setString(STRING_PROPERTY, 'programName', array('inline'), 'Loyalty program');
$this->setString(STRING_PROPERTY, 'tierId', null, 'Tier ID');
$this->setString(STRING_PROPERTY, 'tierName', null, 'Tier');
$this->setString(STRING_PROPERTY, 'tierName', array('inline'), 'Tier');
$this->setString(STRING_PROPERTY, 'individual', null, 'Individual');
$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual ID');
$this->setString(STRING_PROPERTY, 'dateOfOptIn', null, 'Date of OptIn');
$this->setString(STRING_PROPERTY, 'qPoints', null, 'Number of qualifying points');
$this->setString(STRING_PROPERTY, 'qpoints', null, 'Number of qualifying points');

?>
