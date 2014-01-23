<?php

// Define the preferences

pref
(
	'[Engage-Reward]/CRewardInstance/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_FEMININE,
		STRING_NUMBER_PLURAL 	=> 'cadeaux',
		STRING_NUMBER_SINGULAR => 'cadeau',
		STRING_CONSONANT => true
	)
);


// Property

$this->setString(STRING_PROPERTY, 'contextClassName', null, 'Nom de classe du context');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, 'Extension ID du context');
$this->setString(STRING_PROPERTY, 'contextId', null, 'Context ID');
$this->setString(STRING_PROPERTY, 'context', null, 'Context');
$this->setString(STRING_PROPERTY, 'dateOfAvailability', null, 'Date de disponibilité');
$this->setString(STRING_PROPERTY, 'dateOfExpiration', null, 'Date d\'expiration');
$this->setString(STRING_PROPERTY, 'dateOfGrace', null, 'Date de grâce');
$this->setString(STRING_PROPERTY, 'dateOfHolding', null, 'Date de rétention');
$this->setString(STRING_PROPERTY, 'individualId', null, 'ID de l\'individu');
$this->setString(STRING_PROPERTY, 'quantity', null, 'Quantité');
$this->setString(STRING_PROPERTY, 'rewardId', null, 'ID du cadeau');
$this->setString(STRING_PROPERTY, 'rewardInventoryId', null, 'ID de l\'inventaire du reward');


// List

$this->setString(STRING_LIST, 'individualName', null, 'Nom de l\'individu');
$this->setString(STRING_LIST, 'rewardName', null, 'Nom du cadeau');
$this->setString(STRING_LIST, 'dateOfAvailability', null, 'Date de disponibilité');
$this->setString(STRING_LIST, 'quantity', null, 'Quantité');

?>
