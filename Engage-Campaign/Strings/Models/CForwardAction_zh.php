<?php

// Define the preferences

pref
(
    '[Engage-Campaign]/CForwardAction/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '转发行为',
        STRING_NUMBER_SINGULAR => '转发',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, '类型');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, '调度日期');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, '个人行为');

$this->setString(STRING_PROPERTY, 'designId', null, '设计');
$this->setString(STRING_PROPERTY, 'designId', array('label'), '设计：');
$this->setString(STRING_PROPERTY, 'replyToEmail', null, '回复邮件');
$this->setString(STRING_PROPERTY, 'replyToEmail', array('label'), '回复邮件：');
$this->setString(STRING_PROPERTY, 'sendFrom', null, '发送者');
$this->setString(STRING_PROPERTY, 'sendFrom', array('label'), '发送自：');
$this->setString(STRING_PROPERTY, 'serviceAccountId', null, '服务账户ID');
$this->setString(STRING_PROPERTY, 'serviceAccountId', array('label'), '服务账户ID：');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');
?>
