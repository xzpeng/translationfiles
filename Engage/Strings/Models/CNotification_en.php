<?php

// Define the preferences

pref
(
	'[Engage]/CNotification/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'notifications',
		STRING_NUMBER_SINGULAR => 'notification',
		STRING_CONSONANT => true
	)
);


//	String list

$this->setString(STRING_LIST, 'defaultName', null, 'Name');
$this->setString(STRING_LIST, 'optInEmail', null, 'Opt-in email');
$this->setString(STRING_LIST, 'optInCellPhone', null, 'Opt-in cellphone');


?>
