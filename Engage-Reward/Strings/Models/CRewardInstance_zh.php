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

$this->setString(STRING_PROPERTY, 'contextClassName', null, '背景类名');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, '背景扩展ID');
$this->setString(STRING_PROPERTY, 'contextId', null, '背景ID');
$this->setString(STRING_PROPERTY, 'context', null, '背景');
$this->setString(STRING_PROPERTY, 'dateOfAvailability', null, '有效日期');
$this->setString(STRING_PROPERTY, 'dateOfExpiration', null, '过期日期');
$this->setString(STRING_PROPERTY, 'dateOfGrace', null, '宽限日期');
$this->setString(STRING_PROPERTY, 'dateOfHolding', null, '保留日期');
$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'quantity', null, '数量');
$this->setString(STRING_PROPERTY, 'rewardId', null, '奖励ID');
$this->setString(STRING_PROPERTY, 'rewardInventoryId', null, '奖励库存ID');


// List

$this->setString(STRING_LIST, 'individualName', null, '个体名称');
$this->setString(STRING_LIST, 'rewardName', null, '奖励名称');
$this->setString(STRING_LIST, 'dateOfAvailability', null, '有效日期');
$this->setString(STRING_LIST, 'quantity', null, '数量');

?>
