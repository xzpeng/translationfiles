<?php

// Define the preferences

pref
(
    '[Engage-Campaign]/CEmailForgeReport/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => 'EF活动',
        STRING_NUMBER_SINGULAR => 'EF活动',
        STRING_CONSONANT => true
    )
);


// List

$this->setString(STRING_LIST, 'campaignName', null, '活动');
$this->setString(STRING_LIST, 'operationCode', null, '操作');
$this->setString(STRING_LIST, 'dateOfStart', null, '开始日期');
$this->setString(STRING_LIST, 'subject', null, '主题');
$this->setString(STRING_LIST, 'email', null, 'Email');


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, '个人');
$this->setString(STRING_PROPERTY, 'universe', null, '空间');
$this->setString(STRING_PROPERTY, 'campaignId', null, 'EF活动ID');
$this->setString(STRING_PROPERTY, 'contactId', null, '联系人ID');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, '开始日期');
$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'campaignName', null, 'EF活动名称');
$this->setString(STRING_PROPERTY, 'operationCode', null, 'EF操作码');
$this->setString(STRING_PROPERTY, 'subject', null, '主题');
$this->setString(STRING_PROPERTY, 'status', null, '状态');
$this->setString(STRING_PROPERTY, 'hasClicked', null, '点击');
$this->setString(STRING_PROPERTY, 'hasOpened', null, '打开');
$this->setString(STRING_PROPERTY, 'hasUnsubscribed', null, '取消订阅');
$this->setString(STRING_PROPERTY, 'isSpam', null, '垃圾邮件');
$this->setString(STRING_PROPERTY, 'blackListDate', null, '黑名单日期');
$this->setString(STRING_PROPERTY, 'messageId', null, '信息ID');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


?>
