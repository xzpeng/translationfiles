<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CTier/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'tiers',
		STRING_NUMBER_SINGULAR => 'tier',
		STRING_CONSONANT => true
	)
);


//	Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to delete this tier, are you sure?');


// List 

$this->setString(STRING_LIST, 'name', null, 'Name');
$this->setString(STRING_LIST, 'multiplier', null, 'Multiplier');
$this->setString(STRING_LIST, 'rank', null, 'Rank');


// Properties


$this->setString(STRING_PROPERTY, 'color', null, 'Color');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');

$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, 'Date of purchase');

$this->setString(STRING_PROPERTY, 'durationOfAvailability', array('label'), 'Duration of availability');
$this->setString(STRING_PROPERTY, 'durationOfGrace', array('label'), 'Duration of grace');
$this->setString(STRING_PROPERTY, 'durationOfHolding', array('label'), 'Duration of holding');
$this->setString(STRING_PROPERTY, 'durationOfAvailability', null, 'Duration of availability');
$this->setString(STRING_PROPERTY, 'durationOfGrace', null, 'Duration of grace');
$this->setString(STRING_PROPERTY, 'durationOfHolding', null, 'Duration of holding');

$this->setString(STRING_PROPERTY, 'filterId', null, 'Filter ID');

$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', array('label'), 'Metric of duration of availability');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', array('label'), 'Metric of duration of grace');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', array('label'), 'Metric of duration of holding');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', null, 'Metric of duration of availability');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', null, 'Metric of duration of grace');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', null, 'Metric of duration of holding');
$this->setString(STRING_PROPERTY, 'multiplier', array('label'), 'Multiplier');
$this->setString(STRING_PROPERTY, 'multiplier', array('inline'), 'Multiplier');
$this->setString(STRING_PROPERTY, 'multiplier', null, 'Multiplier');

$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'name', array('inline'), 'Name');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');

$this->setString(STRING_PROPERTY, 'programId', null, 'Program ID');

$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank');
$this->setString(STRING_PROPERTY, 'rank', array('inline'), 'Rank');
$this->setString(STRING_PROPERTY, 'rank', null, 'Rank');

str('core.property.tierId', 'ID du tier');
str('core.property.languageIsoCode', 'Language');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
