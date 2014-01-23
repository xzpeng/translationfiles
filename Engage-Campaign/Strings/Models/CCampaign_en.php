<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CCampaign/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'campaigns',
		STRING_NUMBER_SINGULAR => 'campaign',
		STRING_CONSONANT => true
	)
);

// Actions

$this->setString(STRING_ACTION, 'createOperation', null, 'Create an operation');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this campaign. Are you sure?');
$this->setString(STRING_DISCLAIMER, 'no template', null, 'No template');


// Form

$this->setString(STRING_FORM, 'campaign name', array('label'), 'Campaign name:');
$this->setString(STRING_FORM, 'campaign name', array('placeholder'), 'Campaign name');
$this->setString(STRING_FORM, 'notes / description', array('label'), 'Notes / description:');
$this->setString(STRING_FORM, 'notes / description', array('placeholder'), 'Notes');


// List

$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date of dispatching');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, 'Individual action');

$this->setString(STRING_PROPERTY, 'operations', array('inline'), 'Operations');
$this->setString(STRING_PROPERTY, 'operations', null, 'Operations');
$this->setString(STRING_PROPERTY, 'context', null, 'Context');


$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date of start');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date of start');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date of closure');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date of closure');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'contextId', null, 'Context ID');
$this->setString(STRING_PROPERTY, 'contextClassName', null, 'Context class name');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, 'Context extension ID');

str('core.property.campaignId', 'ID');


// Sections

$this->setString(STRING_SECTION, 'a/b testing an email campaign', null, 'A/B testing in an email campaign');
$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_SECTION, 'basic infos', null, 'Basic infos');
$this->setString(STRING_SECTION, 'basic one message campaign', null, 'Basic one message campaign');
$this->setString(STRING_SECTION, 'context', null, 'Context');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'cycle message', null, 'Cycle message');
$this->setString(STRING_SECTION, 'email follow up', null, 'Email follow up');
$this->setString(STRING_SECTION, 'email a/b', null, 'Email A/B');
$this->setString(STRING_SECTION, 'email campaign with follow up', null, 'Email campaign with follow up');
$this->setString(STRING_SECTION, 'upload picture', null, 'Upload picture');
$this->setString(STRING_SECTION, 'settings', null, 'About');
$this->setString(STRING_SECTION, 'define simple settings', array('label'), 'Define default values for your campaign.');
$this->setString(STRING_SECTION, 'campaign code', null, 'Campaign code');
$this->setString(STRING_SECTION, 'campaign name', null, 'Campaign name');
$this->setString(STRING_SECTION, 'launch scenario editor', null, 'Launch scenario editor');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'operations', null, 'Operations');
$this->setString(STRING_SECTION, 'or select a scenario template', null, 'or select a scenario template');
$this->setString(STRING_SECTION, 'scenario templates', null, 'Scenario templates');
$this->setString(STRING_SECTION, 'start from scratch', null, 'Start from scratch');
$this->setString(STRING_SECTION, 'start from scratch or select a scenario', null, 'Start from scratch or select a scenario template.');
$this->setString(STRING_SECTION, 'scenarios', array('plural'), 'Scenarios');
$this->setString(STRING_SECTION, 'make changes on scenario later', array('label'), 'You will always be able to make changes to the template scenario later.');
$this->setString(STRING_SECTION, 'simple campaign', null, 'Simple campaign');
$this->setString(STRING_SECTION, 'simple automatic campaign', null, 'Simple automatic campaign');
$this->setString(STRING_SECTION, 'simple sms', null, 'Simple SMS');
$this->setString(STRING_SECTION, 'system', null, 'System');
$this->setString(STRING_SECTION, 'return to campaign form', null, 'Return to campaign form');

?>
