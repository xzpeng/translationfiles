<?php

// Define the preferences

pref
(
	'[Engage-Report]/CReport/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'reports',
		STRING_NUMBER_SINGULAR => 'report',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Export to PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Export to CSV');
$this->setString(STRING_ACTION, ACTION_GENERATE_REPORT_INSTANCE, null, 'Generate a report');


// Buttons

$this->setString(STRING_ACTION, ACTION_DELETE, null, 'Delete');
$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Export to PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Export to CSV');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this report. Are you sure?');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'No reports founds.');


//

$this->setString(STRING_PROPERTY, 'reportInstances', null, 'Report Instances');
$this->setString(STRING_PROPERTY, 'reportSections', null, 'Sections');


// Core properties

str('core.property.reportid', 'Report ID');


// Properties

$this->setString(STRING_PROPERTY, 'classoficon', null, 'Class of icon');
$this->setString(STRING_PROPERTY, 'defaultmetric', null, 'Default metric');
$this->setString(STRING_PROPERTY, 'istemplate', null, 'Is template?');
$this->setString(STRING_PROPERTY, 'period', null, 'Period');
$this->setString(STRING_PROPERTY, 'targetclassname', null, 'Nom de la cible');
$this->setString(STRING_PROPERTY, 'targetextensionid', null, 'Target extension ID');
$this->setString(STRING_PROPERTY, 'title', null, 'Titre');

$this->setString(STRING_PROPERTY, 'title', array('label'), 'Title');
$this->setString(STRING_PROPERTY, 'code', array('label'), 'Code');
$this->setString(STRING_PROPERTY, 'code', null, 'Code');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'defaultMetric', array('label'), 'Metric');
$this->setString(STRING_PROPERTY, 'isTemplate', array('label'), 'Template');
$this->setString(STRING_PROPERTY, 'period', array('label'), 'Period');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_SECTION, 'reportinstances', null, 'Report instances');
$this->setString(STRING_SECTION, 'reportsections', null, 'Report sections');
$this->setString(STRING_SECTION, 'settings', null, 'Settings');
$this->setString(STRING_SECTION, 'target', null, 'Target object');
$this->setString(STRING_SECTION, 'editor', null, 'Editor');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
