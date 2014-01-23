<?php

// Define the preferences

pref
(
	'[Engage-Loyalty]/CProgramIndividual/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'Inscriptions à un programme',
		STRING_NUMBER_SINGULAR => 'Inscription à un programme',
		STRING_CONSONANT => true
	)
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cet individu du programme. Etes-vous certain?');


//	List

$this->setString(STRING_LIST, 'programName', null, 'Programme');
$this->setString(STRING_LIST, 'individual', null, 'Nom');
$this->setString(STRING_LIST, 'dateOfOptIn', null, 'Date d\'adhésion');
$this->setString(STRING_LIST, 'tierName', null, 'Niveau');
$this->setString(STRING_LIST, 'nqPoints', null, 'Nb de points NQ');
$this->setString(STRING_LIST, 'qPoints', null, 'Nb de points Q');


// Properties

$this->setString(STRING_PROPERTY, 'nqPoints', null, 'Nombre de points non qualifiant');
$this->setString(STRING_PROPERTY, 'programId', null, 'ID du programme');
$this->setString(STRING_PROPERTY, 'programName', null, 'Programme');
$this->setString(STRING_PROPERTY, 'programName', array('inline'), 'Programme');
$this->setString(STRING_PROPERTY, 'tierId', null, 'ID du niveau');
$this->setString(STRING_PROPERTY, 'tierName', null, 'Niveau');
$this->setString(STRING_PROPERTY, 'tierName', array('inline'), 'Niveau');
$this->setString(STRING_PROPERTY, 'individual', null, 'Individu');
$this->setString(STRING_PROPERTY, 'individualId', null, 'ID de l\'individu');
$this->setString(STRING_PROPERTY, 'dateOfOptIn', null, 'Date d\'optIn');
$this->setString(STRING_PROPERTY, 'qpoints', null, 'Nombre de points qualifiants');

?>
