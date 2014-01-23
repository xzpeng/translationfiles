<?php

// Define the preferences

pref
(
	'[Engage-Report]/CReportInstance/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'instances de rapport',
		STRING_NUMBER_SINGULAR => 'instance de rapport',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Exporter en PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Exporter en CSV');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cette instance de rapport. Etes-vous certain?');


// Properties

$this->setString(STRING_PROPERTY, 'dateOfCreation', null, 'Date de création');
$this->setString(STRING_PROPERTY, 'dateOfCreation', array('inline'), 'Créé le');
$this->setString(STRING_PROPERTY, 'reportSectionInstances', null, 'Section');


//	String list

$this->setString(STRING_LIST, 'dateOfCreation', null, 'Date de création');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'id', null, 'ID');
$this->setString(STRING_LIST, 'reportId', null, 'ID du rapport');
$this->setString(STRING_LIST, 'status', null, 'Statut');

?>
