<?php

// Define the preferences

pref
(
    '[Engage-Loyalty]/CProgramIndividual/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '方案订阅者',
        STRING_NUMBER_SINGULAR => '方案订阅者',
        STRING_CONSONANT => true
    )
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此方案，确定？');


//  List

$this->setString(STRING_LIST, 'programName', null, '方案');
$this->setString(STRING_LIST, 'individual', null, '名称');
$this->setString(STRING_LIST, 'dateOfOptIn', null, '自愿加入日期');
$this->setString(STRING_LIST, 'tierName', null, '层级');
$this->setString(STRING_LIST, 'nqPoints', null, '不符合条件积分数量');
$this->setString(STRING_LIST, 'qPoints', null, '符合条件积分数量');


// Properties

$this->setString(STRING_PROPERTY, 'nqPoints', null, '不符合条件积分数量');
$this->setString(STRING_PROPERTY, 'programId', null, '忠诚度方案ID');
$this->setString(STRING_PROPERTY, 'programName', null, '忠诚度方案');
$this->setString(STRING_PROPERTY, 'programName', array('inline'), '忠诚度方案');
$this->setString(STRING_PROPERTY, 'tierId', null, '层级ID');
$this->setString(STRING_PROPERTY, 'tierName', null, '层级');
$this->setString(STRING_PROPERTY, 'tierName', array('inline'), '层级');
$this->setString(STRING_PROPERTY, 'individual', null, '个人');
$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'dateOfOptIn', null, '自愿加入日期');
$this->setString(STRING_PROPERTY, 'qPoints', null, '符合条件积分数量');
$this->setString(STRING_PROPERTY, 'qpoints', null, '符合条件积分数量');

?>
