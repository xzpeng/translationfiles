<?php

// Define the preferences

pref
(
	'[Engage-Report]/CReportInstance/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'report instances',
		STRING_NUMBER_SINGULAR => 'report instance',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Export to PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Export to CSV');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this report instance. Are you sure?');


// Properties

$this->setString(STRING_PROPERTY, 'reportSectionInstances', null, 'Section');


//	String list

$this->setString(STRING_LIST, 'dateOfCreation', null, 'Date of creation');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'id', null, 'ID');
$this->setString(STRING_LIST, 'reportId', null, 'Report ID');
$this->setString(STRING_LIST, 'status', null, 'Status');

?>
