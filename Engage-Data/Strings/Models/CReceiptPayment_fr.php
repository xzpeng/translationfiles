<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReceiptPayment/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'paiements du ticket',
		STRING_NUMBER_SINGULAR => 'paiement du ticket',
		STRING_CONSONANT => true
	)
);

$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

$this->setString(STRING_LIST, 'methodType', null, 'Moyen de paiement');
$this->setString(STRING_LIST, 'currencyCode', null, 'Code');
$this->setString(STRING_LIST, 'dateOfPayment', null, 'Date de paiement');
$this->setString(STRING_LIST, 'universalValue', null, 'Montant');
?>
