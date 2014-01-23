<?php

// Define the preferences

pref
(
	'[Engage-Report]/CReport/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'rapports',
		STRING_NUMBER_SINGULAR => 'rapport',
		STRING_CONSONANT => true
	)
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Exporter en PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Exporter en CSV');
$this->setString(STRING_ACTION, ACTION_GENERATE_REPORT_INSTANCE, null, 'Générer une instance');


$this->setString(STRING_ACTION, ACTION_LIST, array('plural'), 'Lister');


// Buttons

$this->setString(STRING_ACTION, ACTION_DELETE, null, 'Supprimer');
$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, 'Exporter en PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, 'Exporter en CSV');

$this->setString(STRING_ACTION, ACTION_LIST, null, 'Liste');
$this->setString(STRING_ACTION, ACTION_SAVE, null, 'Sauvegarder le rapport');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Veuillez confirmer la suppression?');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'Pas de rapport.');


//

$this->setString(STRING_PROPERTY, 'reportInstances', null, 'Rapports d\'instance');
$this->setString(STRING_PROPERTY, 'reportSections', null, 'Sections');


// Core properties

str('core.property.reportid', 'ID du rapport');


// Properties

$this->setString(STRING_PROPERTY, 'classoficon', null, 'Icône');
$this->setString(STRING_PROPERTY, 'defaultmetric', null, 'Métrique par défaut');
$this->setString(STRING_PROPERTY, 'istemplate', null, 'Est un template ?');
$this->setString(STRING_PROPERTY, 'period', null, 'Période');
$this->setString(STRING_PROPERTY, 'targetclassname', null, 'Target name');
$this->setString(STRING_PROPERTY, 'targetextensionid', null, 'Extension ID de la cible');
$this->setString(STRING_PROPERTY, 'title', null, 'Title');

$this->setString(STRING_PROPERTY, 'title', array('label'), 'Title');
$this->setString(STRING_PROPERTY, 'code', null, 'Code');
$this->setString(STRING_PROPERTY, 'code', array('label'), 'Code');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'defaultMetric', array('label'), 'Metric');
$this->setString(STRING_PROPERTY, 'period', array('label'), 'Period');
$this->setString(STRING_PROPERTY, 'isTemplate', array('label'), 'Template');


// Sections

$this->setString(STRING_SECTION, 'about', null, 'A propos');
$this->setString(STRING_SECTION, 'reportinstances', null, 'Instances du rapport');
$this->setString(STRING_SECTION, 'reportsections', null, 'Sections du rapport');
$this->setString(STRING_SECTION, 'settings', null, 'Paramètres');
$this->setString(STRING_SECTION, 'target', null, 'Objet');
$this->setString(STRING_SECTION, 'editor', null, 'Editeur');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');

str('done', 'Sauvegarder')

?>
