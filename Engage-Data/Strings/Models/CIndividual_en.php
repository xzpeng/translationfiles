<?php

// Define the preferences

pref
(
	'[Engage-Data]/CIndividual/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'individuals',
		STRING_NUMBER_SINGULAR => 'individual',
		STRING_VOWELL => true
	)
);


// Indicators

$this->setString(STRING_INDICATOR, 'averageCart', null, 'Average cart');
$this->setString(STRING_INDICATOR, 'averageCartPerStore', null, 'Average cart per store');
$this->setString(STRING_INDICATOR, 'averageShoppingCart', null, 'Average shopping cart');
$this->setString(STRING_INDICATOR, 'campaignEmailClickRate', null, 'E-mail click rate');
$this->setString(STRING_INDICATOR, 'campaignEmailOpenRate', null, 'E-mail open rate');
$this->setString(STRING_INDICATOR, 'invoiceTotal', null, 'Total purchased');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerStore', null, 'Total purchased per store');
$this->setString(STRING_INDICATOR, 'nbAcquaintances', null, 'Acquaintances');
$this->setString(STRING_INDICATOR, 'nbCampaigns', null, 'Campaigns');
$this->setString(STRING_INDICATOR, 'nbContributions', null, 'Contributions');
$this->setString(STRING_INDICATOR, 'nbContributionsPerSocialNetwork', null, 'Contributions per social network');
$this->setString(STRING_INDICATOR, 'nbOrders', null, 'Orders');
$this->setString(STRING_INDICATOR, 'nbOrdersPerStore', null, 'Orders per store');
$this->setString(STRING_INDICATOR, 'nbProductsPurchasedPerStore', null, 'Products purchased per store');
$this->setString(STRING_INDICATOR, 'nbPurchases', null, 'Number of purchases');
$this->setString(STRING_INDICATOR, 'totalPurchased', null, 'Total purchased');
$this->setString(STRING_INDICATOR, 'invoiceTotalExcludedVat', null, 'Total purchased excluded VAT');
$this->setString(STRING_INDICATOR, 'invoiceTotalExclVat', null, 'Total purchased excluded VAT');
$this->setString(STRING_INDICATOR, 'invoiceTotalPerItemType', null, 'Total purchased per type of item');
$this->setString(STRING_INDICATOR, 'nbOrdersPerItemType', null, 'Nb orders per type of item');
$this->setString(STRING_INDICATOR, 'averageCartPerItemType', null, 'Average cart per type of item');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this individual. Are you sure?');


// Label

$this->setString(STRING_PROPERTY, 'contacts', array('label'), 'Contacts');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('label'), 'Date of birth');

$this->setString(STRING_PROPERTY, 'email', array('label'), 'E-mail');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('label'), 'Campaigns');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', array('label'), 'Date of creation (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfDeletion', null, 'Date of deletion (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, 'Date of update (external)');
$this->setString(STRING_PROPERTY, 'externalId', array('label'), 'ID (external)');
$this->setString(STRING_PROPERTY, 'externalSource', array('label'), 'Source (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), 'External date of update');
$this->setString(STRING_PROPERTY, 'familySituation', array('label'), 'Family situation');
$this->setString(STRING_PROPERTY, 'firstName', array('label'), 'Firstname');
$this->setString(STRING_PROPERTY, 'gender', array('label'), 'Gender');
$this->setString(STRING_PROPERTY, 'initialStoreId', array('label'), 'Initial store ID');
$this->setString(STRING_PROPERTY, 'lastName', array('label'), 'Lastname');
$this->setString(STRING_PROPERTY, 'locations', array('label'), 'Locations');
$this->setString(STRING_PROPERTY, 'programs', null, 'Loyalty programs');
$this->setString(STRING_PROPERTY, 'programs', array('label'), 'Loyalty programs');
$this->setString(STRING_PROPERTY, 'stores', array('label'), 'Stores');
$this->setString(STRING_PROPERTY, 'receipts', array('label'), 'Receipts');
$this->setString(STRING_PROPERTY, 'reviews', array('label'), 'Reviews');
$this->setString(STRING_PROPERTY, 'wishlists', array('label'), 'Wishlists');

$this->setString(STRING_PROPERTY, 'locationOfBirth', array('label'), 'Location of birth');
$this->setString(STRING_PROPERTY, 'maidenName', array('label'), 'Maiden name');
$this->setString(STRING_PROPERTY, 'masterIndividualId', array('label'), 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', array('label'), 'Middle name');
$this->setString(STRING_PROPERTY, 'nickName', array('label'), 'Nickname');
$this->setString(STRING_PROPERTY, 'title', array('label'), 'Title');


//	String list

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'optInEmail', null, 'Opt-in email');
$this->setString(STRING_LIST, 'optInCellPhone', null, 'Opt-in cellphone');


// Placeholder

$this->setString(STRING_PROPERTY, 'contacts', array('placeholder'), 'Contacts');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('placeholder'), 'Date of birth');

$this->setString(STRING_PROPERTY, 'description', array('placeholder'), 'Description');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), 'E-mail');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('placeholder'), 'Campaigns');
$this->setString(STRING_PROPERTY, 'familySituation', array('placeholder'), 'Family situation');
$this->setString(STRING_PROPERTY, 'firstName', array('placeholder'), 'Firstname');
$this->setString(STRING_PROPERTY, 'gender', array('placeholder'), 'Gender');
$this->setString(STRING_PROPERTY, 'individualStores', null, 'Stores attached');
$this->setString(STRING_PROPERTY, 'initialStoreId', array('placeholder'), 'Initial store ID');
$this->setString(STRING_PROPERTY, 'lastName', array('placeholder'), 'Lastname');
$this->setString(STRING_PROPERTY, 'locations', array('placeholder'), 'Locations');
$this->setString(STRING_PROPERTY, 'stores', array('placeholder'), 'Stores');
$this->setString(STRING_PROPERTY, 'receipts', array('placeholder'), 'Receipts');
$this->setString(STRING_PROPERTY, 'reviews', array('placeholder'), 'Reviews');
$this->setString(STRING_PROPERTY, 'wishlists', array('placeholder'), 'Wishlists');
$this->setString(STRING_PROPERTY, 'locationOfBirth', array('placeholder'), 'Location of birth');
$this->setString(STRING_PROPERTY, 'maidenName', array('placeholder'), 'Maiden name');
$this->setString(STRING_PROPERTY, 'masterIndividualId', array('placeholder'), 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', array('placeholder'), 'Middle name');
$this->setString(STRING_PROPERTY, 'nickName', array('placeholder'), 'Nickname');
$this->setString(STRING_PROPERTY, 'title', array('placeholder'), 'Title');


// Properties

$this->setString(STRING_PROPERTY, 'contacts', null, 'Contacts');
$this->setString(STRING_PROPERTY, 'contacts', array('count'), 'Number of contacts');
$this->setString(STRING_PROPERTY, 'dateOfBirth', null, 'Date of birth');
$this->setString(STRING_PROPERTY, 'dateOfBirth', array('label'), 'Date of birth');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'emailForgeReports', null, 'Campaigns');
$this->setString(STRING_PROPERTY, 'emailForgeReports', array('count'), 'Number of campaigns');
$this->setString(STRING_PROPERTY, 'externalDateOfCreation', null, 'Date of creation (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfDeletion', null, 'Date of deletion (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, 'Date of update (external)');
$this->setString(STRING_PROPERTY, 'externalId', null, 'ID (external)');
$this->setString(STRING_PROPERTY, 'externalSource', null, 'Source (external)');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', null, 'External date of update');
$this->setString(STRING_PROPERTY, 'externalDateOfUpdate', array('label'), 'External date of update:');
$this->setString(STRING_PROPERTY, 'familySituation', null, 'Family situation');
$this->setString(STRING_PROPERTY, 'firstName', null, 'Firstname');
$this->setString(STRING_PROPERTY, 'gender', null, 'Gender');
$this->setString(STRING_PROPERTY, 'initialStoreId', null, 'Initial store ID');
$this->setString(STRING_PROPERTY, 'lastName', null, 'Lastname');
$this->setString(STRING_PROPERTY, 'languages', null, 'Languages');
$this->setString(STRING_PROPERTY, 'languages', array('count'), 'Number of languages');
$this->setString(STRING_PROPERTY, 'locations', null, 'Locations');
$this->setString(STRING_PROPERTY, 'locations', array('count'), 'Number of locations');
$this->setString(STRING_PROPERTY, 'optInCellPhone', null, 'Opt-in cellphone');
$this->setString(STRING_PROPERTY, 'optInCellPhone', array('label'), 'Opt-in cellphone');
$this->setString(STRING_PROPERTY, 'optInEmail', null, 'Opt-in email');
$this->setString(STRING_PROPERTY, 'optInEmail', array('label'), 'Opt-in email');
$this->setString(STRING_PROPERTY, 'stores', null, 'Stores');
$this->setString(STRING_PROPERTY, 'stores', array('count'), 'Number of stores');
$this->setString(STRING_PROPERTY, 'receipts', null, 'Receipts');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), 'Number of receipts');
$this->setString(STRING_PROPERTY, 'reviews', null, 'Reviews');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), 'Number of reviews');
$this->setString(STRING_PROPERTY, 'wishlists', null, 'Wishlists');
$this->setString(STRING_PROPERTY, 'wishlists', array('count'), 'Number of wishlists');
$this->setString(STRING_PROPERTY, 'programs', array('count'), 'Number of programs');

$this->setString(STRING_PROPERTY, 'locationOfBirth', null, 'Location of birth');
$this->setString(STRING_PROPERTY, 'maidenName', null, 'Maiden name');
$this->setString(STRING_PROPERTY, 'masterIndividualId', null, 'Master individual');
$this->setString(STRING_PROPERTY, 'middleName', null, 'Middle name');
$this->setString(STRING_PROPERTY, 'nickName', null, 'Nickname');
$this->setString(STRING_PROPERTY, 'title', null, 'Title');


// Sections

$this->setString(STRING_SECTION, 'Contacts', null, 'Contacts');
$this->setString(STRING_SECTION, 'Languages', null, 'Languages');
$this->setString(STRING_SECTION, 'Locations', null, 'Locations');
$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'Stores', null, 'Stores');
$this->setString(STRING_SECTION, 'sales', null, 'Sales');
$this->setString(STRING_SECTION, 'campaigns', null, 'Campaigns');
$this->setString(STRING_SECTION, 'earn-burn', null, 'Earn & Burn');
$this->setString(STRING_SECTION, 'Wishlists', null, 'Wishlists');
$this->setString(STRING_SECTION, 'Reviews', null, 'Reviews');
$this->setString(STRING_SECTION, 'Receipts', null, 'Receipts');
$this->setString(STRING_SECTION, 'Programs', null, 'Loyalty programs');
$this->setString(STRING_SECTION, 'EmailForgeReports', null, 'Campaigns');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');
?>
