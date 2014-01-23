<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReview/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'avis',
		STRING_NUMBER_SINGULAR => 'avis',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'itemName', null, 'Article');
$this->setString(STRING_LIST, 'score', null, 'Score');
$this->setString(STRING_LIST, 'description', null, 'Commentaire');
$this->setString(STRING_LIST, 'dateOfCreation', null, 'Date de publication');


//	Property

$this->setString(STRING_PROPERTY, 'itemName', null, 'Nom du produit');
$this->setString(STRING_PROPERTY, 'score', null, 'Score');
$this->setString(STRING_PROPERTY, 'title', null, 'Titre');
$this->setString(STRING_PROPERTY, 'title', array('label'), 'Titre');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'score', null, 'Score');
$this->setString(STRING_PROPERTY, 'score', array('label'), 'Score');

//

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'Item', null, 'Article');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
