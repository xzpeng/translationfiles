<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceipt/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'tickets',
		STRING_NUMBER_SINGULAR => 'ticket',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer ce ticket. Etes-vous certain?'); 


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'c1', null, 'Ticket n°');
$this->setString(STRING_LIST, 'individualName', null, 'Individus');
$this->setString(STRING_LIST, 'storeName', null, 'Magasin');


// Properties

$this->setString(STRING_PROPERTY, 'cashier', null, 'Caissier');
$this->setString(STRING_PROPERTY, 'cashier', array('label'), 'Caissier');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, 'Date d\'achat');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', array('label'), 'Date d\'achat');
$this->setString(STRING_PROPERTY, 'currencyCode', null, 'Devise');

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individu');
$this->setString(STRING_PROPERTY, 'individualName', null, 'Nom de l\'individu');
$this->setString(STRING_PROPERTY, 'nbItems', null, 'Nb lignes');
$this->setString(STRING_PROPERTY, 'receiptItems', null, 'Articles du ticket');
$this->setString(STRING_PROPERTY, 'receiptItems', array('count'), 'Nombre d\'articles');
$this->setString(STRING_PROPERTY, 'receiptPayments', null, 'Paiements du ticket');
$this->setString(STRING_PROPERTY, 'receiptPayments', array('count'), 'Nombre de paiements');
$this->setString(STRING_PROPERTY, 'status', null, 'Statut');
$this->setString(STRING_PROPERTY, 'storeId', null, 'Magasin d\'achat (ID)');
$this->setString(STRING_PROPERTY, 'storeName', null, 'Magasin d\'achat (ID)');
$this->setString(STRING_PROPERTY, 'till', null, 'Comptoir');
$this->setString(STRING_PROPERTY, 'totalDiscountExclVat', null, 'Remise totale (TVA excl.)');
$this->setString(STRING_PROPERTY, 'totalDiscountIncVat', null, 'Remise totale (TVA inc.)');
$this->setString(STRING_PROPERTY, 'totalExclVat', null, 'Mt total (TVA excl.)');
$this->setString(STRING_PROPERTY, 'totalPriceExclVat', null, 'Mt total (TVA excl.)');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', null, 'Mt total (TVA inc.)');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', array('label'), 'Mt total (TVA inc.)');
$this->setString(STRING_PROPERTY, 'totalShippingExclVat', null, 'Frais liv. tot (TVA excl.)');
$this->setString(STRING_PROPERTY, 'totalShippingIncVat', null, 'Frais liv. tot (TVA inc.)');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountExclVat', null, 'Devise gest Remise totale (TVA excl. VAT)');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountIncVat', null, 'Devise gest Remise totale (TVA inc.)');
$this->setString(STRING_PROPERTY, 'universalTotalPriceExclVat', null, 'Devise gest Mt total (TVA excl.))');
$this->setString(STRING_PROPERTY, 'universalTotalPriceIncVat', null, 'Devise gest Mt total (TVA inc.)');
$this->setString(STRING_PROPERTY, 'universalTotalShippingExclVat', null, 'Devise gest Frais liv. tot (TVA excl.)');
$this->setString(STRING_PROPERTY, 'universalTotalShippingIncVat', null, 'Devise gest Frais liv. tot (TVA inc.)');

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'Individuals', null, 'Individus');

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');
$this->setString(STRING_SECTION, 'Individuals', null, 'Individus');
$this->setString(STRING_SECTION, 'ReceiptItems', null, 'Produits');
$this->setString(STRING_SECTION, 'ReceiptPayments', null, 'Paiments');
?>
