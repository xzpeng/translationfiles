<?php

// Define the preferences

pref
(
	'[Engage-Data]/CWishlist/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'wishlists',
		STRING_NUMBER_SINGULAR => 'wishlist',
		STRING_CONSONANT => true
	)
);


//	List

$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');


//	Properties

$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'items', null, 'Items');

$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
