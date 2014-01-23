<?php

// Define the preferences

pref
(
	'[Engage-Data]/CWishlistItem/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'Produits de la liste d\'envie',
		STRING_NUMBER_SINGULAR => 'Produits des listes d\'envie',
		STRING_CONSONANT => true
	)
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');


$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

$this->setString(STRING_LIST, 'wishlistname', null, 'Nom');
$this->setString(STRING_LIST, 'wishlistname', array('label'), 'Nom');
$this->setString(STRING_LIST, 'wishlistDescription', null, 'Description');
$this->setString(STRING_LIST, 'wishlistDescription', array('label'), 'Description');

?>
