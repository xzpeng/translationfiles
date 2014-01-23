<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividualStore/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'magasin rattachés',
		STRING_NUMBER_SINGULAR => 'magasin rattaché',
		STRING_CONSONANT => true
	)
);


//	List 

$this->setString(STRING_LIST, 'rank', null, 'Classement');
$this->setString(STRING_LIST, 'storeName', null, 'Magasin');
$this->setString(STRING_LIST, 'storeAdresse', null, 'Adresse');


//	Properties

$this->setString(STRING_PROPERTY, 'rank', null, 'Rank');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank');
$this->setString(STRING_PROPERTY, 'storeName', null, 'Nom du magasin');
$this->setString(STRING_PROPERTY, 'individualId', null, 'ID de l\'individu');
$this->setString(STRING_PROPERTY, 'storeId', null, 'ID du magasin');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
