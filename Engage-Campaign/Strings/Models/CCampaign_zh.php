<?php

// Define the preferences

pref
(
    '[Engage-Campaign]/CCampaign/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '活动',
        STRING_NUMBER_SINGULAR => '活动',
        STRING_CONSONANT => true
    )
);

// Actions

$this->setString(STRING_ACTION, 'createOperation', null, '创建操作');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你要删除这项活动，确定？');
$this->setString(STRING_DISCLAIMER, 'no template', null, '没有模板');


// Form

$this->setString(STRING_FORM, 'campaign name', array('label'), '活动名称:');
$this->setString(STRING_FORM, 'campaign name', array('placeholder'), '活动名称');
$this->setString(STRING_FORM, 'notes / description', array('label'), '备注 / 描述：');
$this->setString(STRING_FORM, 'notes / description', array('placeholder'), '备注');


// List

$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'defaultDescription', null, '描述');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, '类型');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, '调度日期');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, '个人行为');

$this->setString(STRING_PROPERTY, 'operations', array('inline'), '操作');
$this->setString(STRING_PROPERTY, 'operations', null, '操作');
$this->setString(STRING_PROPERTY, 'context', null, '背景');


$this->setString(STRING_PROPERTY, 'dateOfStart', null, '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, '关闭日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), '关闭日期');
$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'contextId', null, '环境ID');
$this->setString(STRING_PROPERTY, 'contextClassName', null, '环境类名');
$this->setString(STRING_PROPERTY, 'contextExtensionId', null, '环境扩展ID');

str('core.property.campaignId', 'ID');


// Sections

$this->setString(STRING_SECTION, 'a/b testing an email campaign', null, 'A/B testing in an email campaign');
$this->setString(STRING_SECTION, 'about', null, 'About');
$this->setString(STRING_SECTION, 'basic infos', null, 'Basic infos');
$this->setString(STRING_SECTION, 'basic one message campaign', null, 'Basic one message campaign');
$this->setString(STRING_SECTION, 'context', null, 'Context');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'cycle message', null, 'Cycle message');
$this->setString(STRING_SECTION, 'email follow up', null, 'Email follow up');
$this->setString(STRING_SECTION, 'email a/b', null, 'Email A/B');
$this->setString(STRING_SECTION, 'email campaign with follow up', null, 'Email campaign with follow up');
$this->setString(STRING_SECTION, 'upload picture', null, 'Upload picture');
$this->setString(STRING_SECTION, 'settings', null, 'About');
$this->setString(STRING_SECTION, 'define simple settings', array('label'), 'Define default values for your campaign.');
$this->setString(STRING_SECTION, 'campaign code', null, 'Campaign code');
$this->setString(STRING_SECTION, 'campaign name', null, 'Campaign name');
$this->setString(STRING_SECTION, 'launch scenario editor', null, 'Launch scenario editor');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'operations', null, 'Operations');
$this->setString(STRING_SECTION, 'or select a scenario template', null, 'or select a scenario template');
$this->setString(STRING_SECTION, 'scenario templates', null, 'Scenario templates');
$this->setString(STRING_SECTION, 'start from scratch', null, 'Start from scratch');
$this->setString(STRING_SECTION, 'start from scratch or select a scenario', null, 'Start from scratch or select a scenario template.');
$this->setString(STRING_SECTION, 'scenarios', array('plural'), 'Scenarios');
$this->setString(STRING_SECTION, 'make changes on scenario later', array('label'), 'You will always be able to make changes to the template scenario later.');
$this->setString(STRING_SECTION, 'simple campaign', null, 'Simple campaign');
$this->setString(STRING_SECTION, 'simple automatic campaign', null, 'Simple automatic campaign');
$this->setString(STRING_SECTION, 'simple sms', null, 'Simple SMS');
$this->setString(STRING_SECTION, 'system', null, 'System');
$this->setString(STRING_SECTION, 'return to campaign form', null, 'Return to campaign form');

?>
