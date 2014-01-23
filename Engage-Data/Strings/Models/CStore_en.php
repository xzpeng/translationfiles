<?php

// Define the preferences

pref
(
	'[Engage-Data]/CStore/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'stores',
		STRING_NUMBER_SINGULAR => 'store',
		STRING_CONSONANT => true
	)
);


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Location');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');


// Indicators

$this->setString(STRING_INDICATOR, 'totalRevenue', null, 'Total revenue');
$this->setString(STRING_INDICATOR, 'averageCart', null, 'Average cart');
$this->setString(STRING_INDICATOR, 'nbPurchasingIndividuals', null, 'Purchasings individuals');
$this->setString(STRING_INDICATOR, 'nbNewPurchasingIndividuals', null, 'New purchasings individuals');
$this->setString(STRING_INDICATOR, 'nbExclusivePurchasingIndividuals', null, 'Exclusives purchasing individuals');
$this->setString(STRING_INDICATOR, 'newPurchasingIndividualsRatio', null, 'Ratio of new purchasing individuals');
$this->setString(STRING_INDICATOR, 'nbPurchaseProducts', null, 'Number of products purchased');
$this->setString(STRING_INDICATOR, 'nbPurchasedProducts', null, 'Number of products purchased');
$this->setString(STRING_INDICATOR, 'localPurchasingIndividualsProportion', null, 'Local purchasing individuals proportion');
$this->setString(STRING_INDICATOR, 'retentionRate', null, 'Retention rate');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this store. Are you sure?');


// Properties

$this->setString(STRING_PROPERTY, 'creationDate', null, 'Store creation date');
$this->setString(STRING_PROPERTY, 'address1', null, 'Address 1');
$this->setString(STRING_PROPERTY, 'address2', null, 'Address 2');
$this->setString(STRING_PROPERTY, 'address3', null, 'Address 3');
$this->setString(STRING_PROPERTY, 'address1', array('label'), 'Address 1');
$this->setString(STRING_PROPERTY, 'address2', array('label'), 'Address 2');
$this->setString(STRING_PROPERTY, 'address3', array('label'), 'Address 3');

$this->setString(STRING_PROPERTY, 'city', null, 'City');
$this->setString(STRING_PROPERTY, 'city', array('label'), 'City');
$this->setString(STRING_PROPERTY, 'countryCode', null, 'Country');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), 'Country');
$this->setString(STRING_PROPERTY, 'individuals', array('count'), 'Number of individuals');
$this->setString(STRING_PROPERTY, 'individuals', null, 'Individuals');
$this->setString(STRING_PROPERTY, 'receipts', null, 'Receipts');
$this->setString(STRING_PROPERTY, 'latitude', null, 'Latitude');
$this->setString(STRING_PROPERTY, 'longitude', null, 'Longitude');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'postalCode', null, 'Postal code');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), 'Postal code');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), 'Number of receipts');
$this->setString(STRING_PROPERTY, 'state1', null, 'State 1');
$this->setString(STRING_PROPERTY, 'state2', null, 'State 2');
$this->setString(STRING_PROPERTY, 'state3', null, 'State 3');
$this->setString(STRING_PROPERTY, 'streetNumber', null, 'Street number');
$this->setString(STRING_PROPERTY, 'streetType', null, 'Street type');


// Section

$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'individuals', null, 'Individuals');
$this->setString(STRING_SECTION, 'receipts', null, 'Receipts');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
