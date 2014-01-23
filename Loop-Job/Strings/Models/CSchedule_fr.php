<?php

// Define the preferences

pref
(
	'[Loop-Job]/CSchedule/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'tâches planifiées',
		STRING_NUMBER_SINGULAR => 'tâche planifiée',
		STRING_CONSONANT => true
	)
);


//	String list

$this->setString(STRING_LIST, 'customName', null, 'Nom personnalisé');
$this->setString(STRING_LIST, 'jobKey', null, 'Identifiant de la tâche');
$this->setString(STRING_LIST, 'iteration', null, 'Occurence');
$this->setString(STRING_LIST, 'scheduledAt', null, 'Plannifié le');
$this->setString(STRING_LIST, 'invalidAt', null, 'Invalide le');
$this->setString(STRING_LIST, 'isSingleton', null, 'Singleton ?');

?>
