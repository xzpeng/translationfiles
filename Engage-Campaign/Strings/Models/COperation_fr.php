<?php

pref
(
	'[Engage-Campaign]/COperation/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'operations',
		STRING_NUMBER_SINGULAR => 'operation',
		STRING_VOWELL => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_START, null, 'Commencer le scénario');
$this->setString(STRING_ACTION, ACTION_STOP, null, 'Arrêter le scénario');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, 'Type');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, 'Date of dispatching');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, 'Action de l\'individu');

$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'campaignId', null, 'ID de la campagne');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, 'Date de début');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), 'Date de début');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, 'Date de fin');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), 'Date de fin');
$this->setString(STRING_PROPERTY, 'isRepeatable', null, 'Est répétable');
$this->setString(STRING_PROPERTY, 'repeatInterval', null, 'Répéter l\'interval');
$this->setString(STRING_PROPERTY, 'sequenceId', null, 'ID de la séquence');
$this->setString(STRING_PROPERTY, 'trapPopulationClassName', null, 'Nom de classe de la population cible');
$this->setString(STRING_PROPERTY, 'trapPopulationExtensionId', null, 'Extension ID de la population cible');
$this->setString(STRING_PROPERTY, 'trapPopulationId', null, 'Population cible ID.');
$this->setString(STRING_PROPERTY, 'trapPopulation', null, 'Trap Population');
$this->setString(STRING_PROPERTY, 'trapPopulation', array('label'), 'Trap Population');


// String list

$this->setString(STRING_LIST, 'operationName', null, 'Nom de l\'operation');
$this->setString(STRING_LIST, 'dateOfStart', null, 'Date de début');
$this->setString(STRING_LIST, 'dateOfClosure', null, 'Date de fin');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');

$this->setString(STRING_SECTION, 'about', null, 'A propos');
$this->setString(STRING_SECTION, 'editor', null, 'Éditeur de scénario');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


?>
