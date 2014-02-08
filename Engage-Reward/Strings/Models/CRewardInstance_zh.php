<?php

// Define the preferences

pref
(
    '[Engage-Reward]/CRewardInstance/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '奖励',
        STRING_NUMBER_SINGULAR => '奖励',
        STRING_CONSONANT => true
    )
);


// Property

$this->setString(STRING_PROPERTY, 'contextClassName', null, 'Context class name');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, 'Context extension ID');
$this->setString(STRING_PROPERTY, 'contextId', null, 'Context ID');
$this->setString(STRING_PROPERTY, 'context', null, 'Context');
$this->setString(STRING_PROPERTY, 'dateOfAvailability', null, 'Date of availability');
$this->setString(STRING_PROPERTY, 'dateOfExpiration', null, 'Date of expiration');
$this->setString(STRING_PROPERTY, 'dateOfGrace', null, 'Date of grace');
$this->setString(STRING_PROPERTY, 'dateOfHolding', null, 'Date of holding');
$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual ID');
$this->setString(STRING_PROPERTY, 'quantity', null, 'Quantity');
$this->setString(STRING_PROPERTY, 'rewardId', null, 'Reward ID');
$this->setString(STRING_PROPERTY, 'rewardInventoryId', null, 'Reward inventory ID');


// List

$this->setString(STRING_LIST, 'individualName', null, 'Individual name');
$this->setString(STRING_LIST, 'rewardName', null, 'Reward name');
$this->setString(STRING_LIST, 'dateOfAvailability', null, 'Date of availability');
$this->setString(STRING_LIST, 'quantity', null, 'Quantity');

?>
