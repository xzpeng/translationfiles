<?php

// Define the preferences

pref
(
	'[Engage-Data]/CWishlistItem/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'wishlist items',
		STRING_NUMBER_SINGULAR => 'wishlist item',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');


$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

$this->setString(STRING_LIST, 'wishlistname', null, 'Name');
$this->setString(STRING_LIST, 'wishlistname', array('label'), 'Name');
$this->setString(STRING_LIST, 'wishlistDescription', null, 'Description');
$this->setString(STRING_LIST, 'wishlistDescription', array('label'), 'Description');

?>
