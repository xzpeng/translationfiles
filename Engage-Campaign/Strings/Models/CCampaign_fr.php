<?php

// Define the preferences

pref
(
	'[Engage-Campaign]/CCampaign/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'campagnes',
		STRING_NUMBER_SINGULAR => 'campagne',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, 'createOperation', null, 'Créer une opération');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cette campagne. Etes-vous certain?');
$this->setString(STRING_DISCLAIMER, 'no template', null, 'Aucun template');


// Form

$this->setString(STRING_FORM, 'campaign name', array('label'), 'Nom de la campagne : ');
$this->setString(STRING_FORM, 'campaign name', array('placeholder'), 'Nom de la campagne');
$this->setString(STRING_FORM, 'notes / description', array('label'), 'Notes / description : ');
$this->setString(STRING_FORM, 'notes / description', array('placeholder'), 'Notes');


// List

$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date d\'envoi');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, 'Action attachée à l\'individu');

$this->setString(STRING_PROPERTY, 'operations', array('inline'), 'Opérations');
$this->setString(STRING_PROPERTY, 'operations', null, 'Opérations');
$this->setString(STRING_PROPERTY, 'context', null, 'Contexte');

$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date de début');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date de début');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date de fin');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date de fin');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'contextId', null, 'Contexte ID');
$this->setString(STRING_PROPERTY, 'contextClassName', null, 'Nom de classe du contexte');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, 'ID. de l\'extension du contexte');

str('core.property.campaignId', 'ID');


// Sections

$this->setString(STRING_SECTION, 'a/b testing an email campaign', null, 'testé A/B pour une campagne e-mail');
$this->setString(STRING_SECTION, 'about', null, 'A propos');
$this->setString(STRING_SECTION, 'basic infos', null, 'Informations de base');
$this->setString(STRING_SECTION, 'basic one message campaign', null, 'Message de base d\'une campagne');
$this->setString(STRING_SECTION, 'basic sms campaign', null, 'Campagne de SMS de base');
$this->setString(STRING_SECTION, 'context', null, 'Contexte');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'cycle message', null, 'Cycle du message');
$this->setString(STRING_SECTION, 'email follow up', null, 'Suivi d\'e-mail');
$this->setString(STRING_SECTION, 'email a/b', null, 'E-mail A/B');
$this->setString(STRING_SECTION, 'email campaign with follow up', null, 'E-mail de campagne avec suivi');
$this->setString(STRING_SECTION, 'define simple settings', array('label'), 'Définir les éléments par défaut pour votre campagne.');
$this->setString(STRING_SECTION, 'upload picture', null, 'Télécharger une image');
$this->setString(STRING_SECTION, 'settings', null, 'A propos');
$this->setString(STRING_SECTION, 'campaign code', null, 'Code de la campagne');
$this->setString(STRING_SECTION, 'campaign name', null, 'Nom de la campagne');
$this->setString(STRING_SECTION, 'launch scenario editor', null, 'Démarrer l\'éditeur de scénario');
$this->setString(STRING_SECTION, 'scenario templates', null, 'Templates de scénario');
$this->setString(STRING_SECTION, 'start from scratch', null, 'Partir de zéro');
$this->setString(STRING_SECTION, 'start from scratch or select a scenario', null, 'Partir de zéro ou sélectionner d\'un template de scénario');
$this->setString(STRING_SECTION, 'scenarios', array('plural'), 'Scénarios');
$this->setString(STRING_SECTION, 'simple campaign', null, 'Campagne');
$this->setString(STRING_SECTION, 'make changes on scenario later', array('label'), 'Vous pourrez effectuer des modifications sur le template de scénatior plus tard.');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'operations', null, 'Opérations');
$this->setString(STRING_SECTION, 'simple automatic campaign', null, 'Simple campagne automatique');
$this->setString(STRING_SECTION, 'simple sms', null, 'Simple SMS');
$this->setString(STRING_SECTION, 'system', null, 'Système');
$this->setString(STRING_SECTION, 'return to campaign form', null, 'Revenir au formulaire de campagne');

?>
