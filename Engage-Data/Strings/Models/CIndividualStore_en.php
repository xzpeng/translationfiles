<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividualStore/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'attached stores',
		STRING_NUMBER_SINGULAR => 'attached store',
		STRING_CONSONANT => true
	)
);


//	List 

$this->setString(STRING_LIST, 'rank', null, 'Rank');
$this->setString(STRING_LIST, 'storeName', null, 'Store');
$this->setString(STRING_LIST, 'storeAdresse', null, 'Location');


//	Property

$this->setString(STRING_PROPERTY, 'rank', null, 'Rank');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank');
$this->setString(STRING_PROPERTY, 'storeName', null, 'Nom du magasin');
$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual ID');
$this->setString(STRING_PROPERTY, 'storeId', null, 'Store ID');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');


?>
