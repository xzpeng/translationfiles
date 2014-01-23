<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CProgram/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'loyalty programs',
		STRING_NUMBER_SINGULAR => 'loyalty program',
		STRING_CONSONANT => true
	)
);


//	Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to delete this program, are you sure?');


// List

$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');


// Properties

$this->setString(STRING_PROPERTY, 'color', null, 'Color');

$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date of closure');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date of closure');

$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date of start');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date of start');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');

$this->setString(STRING_PROPERTY, 'hasDateOfClosure', null, 'Has a closure');
$this->setString(STRING_PROPERTY, 'hasDateOfClosure', array('label'), 'Set an end');

$this->setString(STRING_PROPERTY, 'includeDiscounts', null, 'Include discounts');
$this->setString(STRING_PROPERTY, 'includeDiscounts', array('label'), 'Include discounts');
$this->setString(STRING_PROPERTY, 'includeVat', null, 'Include VAT');
$this->setString(STRING_PROPERTY, 'includeVat', array('label'), 'Include VAT');	
$this->setString(STRING_PROPERTY, 'individuals', null, 'Individuals');
$this->setString(STRING_PROPERTY, 'individuals', array('label'), 'Individuals');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'optOutNoTier', null, 'Opt out individuals without tier');
$this->setString(STRING_PROPERTY, 'optOutNoTier', array('label'), 'Opt out the individual without tier');
$this->setString(STRING_PROPERTY, 'programNQPointId', null, 'Non-qualifying points');
$this->setString(STRING_PROPERTY, 'programNQPointId', array('label'), 'Non-qualifying points');
$this->setString(STRING_PROPERTY, 'programQPointId', null, 'Qualifying points');
$this->setString(STRING_PROPERTY, 'programQPointId', array('label'), 'Qualifying points');

$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', null, 'Rounding mode for non-qualifying points');
$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', array('label'), 'Rounding mode for non-qualifying points');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', null, 'Rounding mode for qualifying points');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', array('label'), 'Rounding mode for qualifying points');

$this->setString(STRING_PROPERTY, 'tiers', null, 'Tiers');
$this->setString(STRING_PROPERTY, 'tiers', array('label'), 'Tiers');

str('core.property.programid', 'Program ID');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'individuals', null, 'Individuals');
$this->setString(STRING_SECTION, 'population', null, 'Population');
$this->setString(STRING_SECTION, 'demographics', null, 'Demographics');
$this->setString(STRING_SECTION, 'earn-burn', null, 'Earn & Burn');
$this->setString(STRING_SECTION, 'nQPoints', null, 'Non-qualifying points');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'qPoints', null, 'Qualifying points');
$this->setString(STRING_SECTION, 'tiers', null, 'Tiers');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
