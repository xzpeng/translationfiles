<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CEmailForgeReport/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'campaigns EF',
		STRING_NUMBER_SINGULAR => 'campaign EF',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'campaignName', null, 'Campaign');
$this->setString(STRING_LIST, 'operationCode', null, 'Operation');
$this->setString(STRING_LIST, 'dateOfStart', null, 'Date of expedition');
$this->setString(STRING_LIST, 'subject', null, 'Subject');
$this->setString(STRING_LIST, 'email', null, 'Email');


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual');
$this->setString(STRING_PROPERTY, 'universe', null, 'Universe');
$this->setString(STRING_PROPERTY, 'campaignId', null, 'EF campaign ID');
$this->setString(STRING_PROPERTY, 'contactId', null, 'Contact ID');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date of start');
$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'campaignName', null, 'EF name of campaign');
$this->setString(STRING_PROPERTY, 'operationCode', null, 'EF code of operation');
$this->setString(STRING_PROPERTY, 'subject', null, 'Subject');
$this->setString(STRING_PROPERTY, 'status', null, 'Status');
$this->setString(STRING_PROPERTY, 'hasClicked', null, 'Has clicked');
$this->setString(STRING_PROPERTY, 'hasOpened', null, 'Has opened');
$this->setString(STRING_PROPERTY, 'hasUnsubscribed', null, 'Has unsubscribed');
$this->setString(STRING_PROPERTY, 'isSpam', null, 'Is spam');
$this->setString(STRING_PROPERTY, 'blackListDate', null, 'Date of black list');
$this->setString(STRING_PROPERTY, 'messageId', null, 'Message ID');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');


?>
