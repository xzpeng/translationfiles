<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceipt/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'receipts',
		STRING_NUMBER_SINGULAR => 'receipt',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this receipt. Are you sure?');


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'c1', null, 'Receipt #');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'individualName', null, 'Individual');
$this->setString(STRING_LIST, 'storeName', null, 'Store');


// Properties

$this->setString(STRING_PROPERTY, 'cashier', null, 'Cashier');
$this->setString(STRING_PROPERTY, 'cashier', array('label'), 'Cashier');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, 'Purchase date');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', array('label'), 'Purchase date');
$this->setString(STRING_PROPERTY, 'currencyCode', null, 'Currency code');
$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual');
$this->setString(STRING_PROPERTY, 'individualName', null, 'Individual name');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, 'Date of purchase');
$this->setString(STRING_PROPERTY, 'nbItems', null, 'nbItems');
$this->setString(STRING_PROPERTY, 'receiptItems', null, 'Receipt items');
$this->setString(STRING_PROPERTY, 'receiptItems', array('count'), 'Number of receipt items');
$this->setString(STRING_PROPERTY, 'receiptPayments', null, 'Receipt payments');
$this->setString(STRING_PROPERTY, 'receiptPayments', array('count'), 'Number of receipt payments');
$this->setString(STRING_PROPERTY, 'status', null, 'Status');
$this->setString(STRING_PROPERTY, 'storeId', null, 'Store ID');
$this->setString(STRING_PROPERTY, 'storeName', null, 'Store name');
$this->setString(STRING_PROPERTY, 'till', null, 'Till');
$this->setString(STRING_PROPERTY, 'totalDiscountExclVat', null, 'Total discount (excl. VAT)');
$this->setString(STRING_PROPERTY, 'totalDiscountIncVat', null, 'Total discount (inc. VAT)');
$this->setString(STRING_PROPERTY, 'totalExclVat', null, 'Total (excl. VAT)');
$this->setString(STRING_PROPERTY, 'totalPriceExclVat', null, 'Total price (excl. VAT)');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', null, 'Total price (inc. VAT)');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', array('label'), 'Total price (inc. VAT)');
$this->setString(STRING_PROPERTY, 'totalShippingExclVat', null, 'Total shipping (excl. VAT)');
$this->setString(STRING_PROPERTY, 'totalShippingIncVat', null, 'Total shipping (inc. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountExclVat', null, 'Universal total discount (excl. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountIncVat', null, 'Universal total discount (inc. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalPriceExclVat', null, 'Universal total price (excl. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalPriceIncVat', null, 'Universal total price (inc. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalShippingExclVat', null, 'Universal total price shipping (excl. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalShippingIncVat', null, 'Universal total shipping (inc. VAT)');

$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');
$this->setString(STRING_SECTION, 'Individuals', null, 'Individuals');
$this->setString(STRING_SECTION, 'ReceiptItems', null, 'Items');
$this->setString(STRING_SECTION, 'ReceiptPayments', null, 'Payments');
?>
