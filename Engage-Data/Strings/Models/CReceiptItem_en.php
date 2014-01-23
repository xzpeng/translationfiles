<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceiptItem/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'receipt items',
		STRING_NUMBER_SINGULAR => 'receipt item',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'priceIncVat', null, 'Price (inc. VAT)');
$this->setString(STRING_PROPERTY, 'quantity', null, 'Quantity');
$this->setString(STRING_PROPERTY, 'quantity', array('label'), 'Quantity');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

$this->setString(STRING_LIST, 'itemName', null, 'Name');
$this->setString(STRING_LIST, 'quantity', null, 'quantity');
$this->setString(STRING_LIST, 'priceIncVat', null, 'Price (inc VAT)');

?>
