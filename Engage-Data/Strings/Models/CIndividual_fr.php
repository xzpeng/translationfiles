<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividual/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'individus',
		STRING_NUMBER_SINGULAR => 'individu',
		STRING_VOWELL => true
	)
); 


// Indicators 

$this->setString(STRING_INDICATOR, 'averageCart', null, 'Panier moyen');
$this->setString(STRING_INDICATOR, 'averageCartPerStore', null, 'Panier moyen par magasin');
$this->setString(STRING_INDICATOR, 'averageShoppingCart', null, 'Panier moyen achat');
$this->setString(STRING_INDICATOR, 'campaignEmailClickRate', null, 'E-mail taux de clics');
$this->setString(STRING_INDICATOR, 'campaignEmailOpenRate', null, 'E-mail taux d\'ouverture');
$this->setString(STRING_INDICATOR, 'invoiceTotal', null, 'Montant tickets');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerStore', null, 'Montants tickets par magasin');
$this->setString(STRING_INDICATOR, 'nbAcquaintances', null, 'Connaissances');
$this->setString(STRING_INDICATOR, 'nbCampaigns', null, 'Campagnes');
$this->setString(STRING_INDICATOR, 'nbContributions', null, 'Contributions');
$this->setString(STRING_INDICATOR, 'nbContributionsPerSocialNetwork', null, 'Contributions par réseau social');
$this->setString(STRING_INDICATOR, 'nbOrders', null, 'Commandes');
$this->setString(STRING_INDICATOR, 'nbOrdersPerStore', null, 'Commandes par magasin');
$this->setString(STRING_INDICATOR, 'nbProductsPurchasedPerStore', null, 'Produits achetés par magasin');
$this->setString(STRING_INDICATOR, 'nbPurchases', null, 'Nombres d\'achats');
$this->setString(STRING_INDICATOR, 'totalPurchased', null, 'Total achats');
$this->setString(STRING_INDICATOR, 'invoiceTotalExcludedVat', null, 'Montant total TVA exclues');
$this->setString(STRING_INDICATOR, 'invoiceTotalExclVat', null, 'Montant total TVA exclues');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerItemType', null, 'Montant total par type d\'article');
$this->setString(STRING_INDICATOR, 'nbOrdersPerItemType', null, 'Nombre de commandes par type d\'article');
$this->setString(STRING_INDICATOR, 'averageCartPerItemType', null, 'Panier moyen par type d\'article');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cet individu. Etes-vous certain?');


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'optInEmail', null, 'Opt-in email');
$this->setString(STRING_LIST, 'optInCellPhone', null, 'Opt-in cellphone');


// Properties

$this->setString(STRING_PROPERTY, 'contacts', null, 'Contacts');
$this->setString(STRING_PROPERTY, 'contacts', array('count'), 'Nombre de contacts');
$this->setString(STRING_PROPERTY, 'contacts', array('label'), 'Contacts');
$this->setString(STRING_PROPERTY, 'dateOfBirth', null, 'Date de naissance');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('label'), 'Date de naissance');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'email', array('label'), 'E-mail');
$this->setString(STRING_PROPERTY, 'emailForgeReports', null, 'Campagnes');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('label'), 'Campagnes');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('count'), 'Nombre de campagnes');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', null, 'Date de création (ext.)');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', array('label'), 'Date de création (ext.)');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, 'Date de mise à jour source ext.');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), 'Date de mise à jour source ext.');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), 'Date de mise à jour source ext. : ');

$this->setString(STRING_PROPERTY, 'familySituation', null, 'Situation familiale');
$this->setString(STRING_PROPERTY, 'familySituation', array('label'), 'Situation familiale');
$this->setString(STRING_PROPERTY, 'firstName', null, 'Prénom');
$this->setString(STRING_PROPERTY, 'firstName', array('label'), 'Prénom');
$this->setString(STRING_PROPERTY, 'gender', null, 'Genre');
$this->setString(STRING_PROPERTY, 'gender', array('label'), 'Genre');
$this->setString(STRING_PROPERTY, 'individualStores', null, 'Magasins rattachés');
$this->setString(STRING_PROPERTY, 'initialStoreId', null, 'Magasin de création');
$this->setString(STRING_PROPERTY, 'initialStoreId', array('label'), 'Magasin de création');
$this->setString(STRING_PROPERTY, 'lastName', null, 'Nom');
$this->setString(STRING_PROPERTY, 'lastName', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'languages', null, 'Langues');
$this->setString(STRING_PROPERTY, 'languages', array('count'), 'Nombre de langues');
$this->setString(STRING_PROPERTY, 'locations', null, 'Adresses');
$this->setString(STRING_PROPERTY, 'locations', array('label'), 'Adresses');
$this->setString(STRING_PROPERTY, 'locations', array('count'), 'Nombre d\'adresses');
$this->setString(STRING_PROPERTY, 'optInCellPhone', null, 'Opt-in cellphone');
$this->setString(STRING_PROPERTY, 'optInCellPhone', array('label'), 'Opt-in cellphone');
$this->setString(STRING_PROPERTY, 'optInEmail', null, 'Opt-in email');
$this->setString(STRING_PROPERTY, 'optInEmail', array('label'), 'Opt-in email');
$this->setString(STRING_PROPERTY, 'programs', array('label'), 'Programmes');
$this->setString(STRING_PROPERTY, 'programs', null, 'Programmes');
$this->setString(STRING_PROPERTY, 'programs', array('count'), 'Nombre de programmes');
$this->setString(STRING_PROPERTY, 'stores', null, 'Magasins');
$this->setString(STRING_PROPERTY, 'stores', array('label'), 'Magasins');
$this->setString(STRING_PROPERTY, 'stores', array('count'), 'Nombre de magasins');
$this->setString(STRING_PROPERTY, 'receipts', null, 'Tickets');
$this->setString(STRING_PROPERTY, 'receipts', array('label'), 'Tickets');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), 'Nombre de tickets');
$this->setString(STRING_PROPERTY, 'reviews', null, 'Revues');
$this->setString(STRING_PROPERTY, 'reviews', array('label'), 'Revues');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), 'Nombre de revues');
$this->setString(STRING_PROPERTY, 'wishlists', null, 'Listes de souhaits');
$this->setString(STRING_PROPERTY, 'wishlists', array('label'), 'Listes de souhaits');
$this->setString(STRING_PROPERTY, 'wishlists', array('count'), 'Nombre de listes de souhaits');

$this->setString(STRING_PROPERTY, 'locationOfBirtharray', array('label'), 'Lieu de naissance');
$this->setString(STRING_PROPERTY, 'locationOfBirth', null, 'Lieu de naissance');
$this->setString(STRING_PROPERTY, 'locationOfBirth', array('label'), 'Lieu de naissance');
$this->setString(STRING_PROPERTY, 'maidenName', null, 'Nom jeune fille');
$this->setString(STRING_PROPERTY, 'maidenName', array('label'), 'Nom jeune fille');
$this->setString(STRING_PROPERTY, 'masterIndividualId', null, 'Individu parent');
$this->setString(STRING_PROPERTY, 'masterIndividualId', array('label'), 'Individu parent');
$this->setString(STRING_PROPERTY, 'middleName', null, 'Patronyme');
$this->setString(STRING_PROPERTY, 'middleName', array('label'), 'Patronyme');
$this->setString(STRING_PROPERTY, 'nickName', null, 'Surnom');
$this->setString(STRING_PROPERTY, 'nickName', array('label'), 'Surnom');
$this->setString(STRING_PROPERTY, 'title', null, 'Titre');
$this->setString(STRING_PROPERTY, 'title', array('label'), 'Titre');


// Sections

$this->setString(STRING_SECTION, 'Contacts', null, 'Contacts');
$this->setString(STRING_SECTION, 'Languages', null, 'Langues');
$this->setString(STRING_SECTION, 'Locations', null, 'Adresses');
$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'Stores', null, 'Magasins');
$this->setString(STRING_SECTION, 'sales', null, 'Ventes');
$this->setString(STRING_SECTION, 'campaigns', null, 'Campagnes');
$this->setString(STRING_SECTION, 'earn-burn', null, 'Earn & Burn');
$this->setString(STRING_SECTION, 'Wishlists', null, 'Listes d\'envies');
$this->setString(STRING_SECTION, 'Reviews', null, 'Avis');
$this->setString(STRING_SECTION, 'Receipts', null, 'Tickets');
$this->setString(STRING_SECTION, 'Programs', null, 'Programmes de fidélité');
$this->setString(STRING_SECTION, 'EmailForgeReports', null, 'Campagnes');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

?>
