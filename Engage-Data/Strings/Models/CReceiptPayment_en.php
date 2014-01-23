<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceiptPayment/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'receipt payments',
		STRING_NUMBER_SINGULAR => 'receipt payment',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

$this->setString(STRING_LIST, 'methodType', null, 'Payment method');
$this->setString(STRING_LIST, 'currencyCode', null, 'Currency code');
$this->setString(STRING_LIST, 'dateOfPayment', null, 'Date of payment');
$this->setString(STRING_LIST, 'universalValue', null, 'Amount');

?>
