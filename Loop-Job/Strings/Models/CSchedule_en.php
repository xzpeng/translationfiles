<?php

// Define the preferences

pref
(
	'[Loop-Job]/CSchedule/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'scheduled tasks',
		STRING_NUMBER_SINGULAR => 'scheduled task',
		STRING_CONSONANT => true
	)
);


//	String list

$this->setString(STRING_LIST, 'customName', null, 'Custom name');
$this->setString(STRING_LIST, 'jobKey', null, 'Job key');
$this->setString(STRING_LIST, 'iteration', null, 'Iteration');
$this->setString(STRING_LIST, 'scheduledAt', null, 'Scheduled at');
$this->setString(STRING_LIST, 'invalidAt', null, 'Invalid at');
$this->setString(STRING_LIST, 'isSingleton', null, 'Is singleton');


?>
