<?php

// Define the preferences

pref
(
	'[Engage-Data]/CStore/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'magasins',
		STRING_NUMBER_SINGULAR => 'magasin',
		STRING_CONSONANT => true
	)
);


//	List 

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Location');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'rank', null, 'Nom');


// Indicators

$this->setString(STRING_INDICATOR, 'totalRevenue', null, 'CA total');
$this->setString(STRING_INDICATOR, 'averageCart', null, 'Panier moyen');
$this->setString(STRING_INDICATOR, 'nbPurchasingIndividuals', null, 'Acheteurs distincts');
$this->setString(STRING_INDICATOR, 'nbNewPurchasingIndividuals', null, 'Nouveaux acheteurs');
$this->setString(STRING_INDICATOR, 'nbExclusivePurchasingIndividuals', null, 'Acheteurs distincts exclusifs');
$this->setString(STRING_INDICATOR, 'newPurchasingIndividualsRatio', null, 'Taux de nouveaux acheteurs');
$this->setString(STRING_INDICATOR, 'nbPurchaseProducts', null, 'Nombre de produits achetés');
$this->setString(STRING_INDICATOR, 'nbPurchasedProducts', null, 'Nombre de produits achetés');
$this->setString(STRING_INDICATOR, 'localPurchasingIndividualsProportion', null, 'Proportion de clients locaux');
$this->setString(STRING_INDICATOR, 'retentionRate', null, 'Taux de rétention');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce magasin. Etes-vous certain?');


// Properties

$this->setString(STRING_PROPERTY, 'creationDate', null, 'Date de création du magasin');
$this->setString(STRING_PROPERTY, 'address1', null, 'Adresse 1');
$this->setString(STRING_PROPERTY, 'address2', null, 'Adresse 2');
$this->setString(STRING_PROPERTY, 'address3', null, 'Adresse 3');
$this->setString(STRING_PROPERTY, 'address1', array('label'), 'Adresse 1');
$this->setString(STRING_PROPERTY, 'address2', array('label'), 'Adresse 2');
$this->setString(STRING_PROPERTY, 'address3', array('label'), 'Adresse 3');

$this->setString(STRING_PROPERTY, 'city', null, 'Ville');
$this->setString(STRING_PROPERTY, 'city', array('label'), 'Ville');
$this->setString(STRING_PROPERTY, 'countryCode', null, 'Pays');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), 'Pays');
$this->setString(STRING_PROPERTY, 'individuals', array('count'), 'Nombre d\'individus');
$this->setString(STRING_PROPERTY, 'individuals', null, 'Individus');
$this->setString(STRING_PROPERTY, 'receipts', null, 'Tickets');
$this->setString(STRING_PROPERTY, 'latitude', null, 'Latitude');
$this->setString(STRING_PROPERTY, 'longitude', null, 'Longitude');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'postalCode', null, 'Code postal');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), 'Code postal');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), 'Nombre de tickets');
$this->setString(STRING_PROPERTY, 'state1', null, 'Province');
$this->setString(STRING_PROPERTY, 'state2', null, 'Etat');
$this->setString(STRING_PROPERTY, 'state3', null, 'Pays');
$this->setString(STRING_PROPERTY, 'streetNumber', null, 'Numéro de rue');
$this->setString(STRING_PROPERTY, 'streetType', null, 'Type de voie');


// Section

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'individuals', null, 'Individus');
$this->setString(STRING_SECTION, 'receipts', null, 'Tickets');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


?>
