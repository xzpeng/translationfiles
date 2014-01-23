<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceiptItem/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'ligne article du ticket',
		STRING_NUMBER_SINGULAR => 'lignes articles du ticket',
		STRING_CONSONANT => true
	)
); 


// Properties

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'priceIncVat', null, 'Prix (TVA inc.)');
$this->setString(STRING_PROPERTY, 'quantity', null, 'Quantité');
$this->setString(STRING_PROPERTY, 'quantity', array('label'), 'Quantité');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

$this->setString(STRING_LIST, 'itemName', null, 'Nom');
$this->setString(STRING_LIST, 'quantity', null, 'Quantité');
$this->setString(STRING_LIST, 'priceIncVat', null, 'Prix (inc TVA)');

?>
