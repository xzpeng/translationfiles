<?php

pref
(
    '[Engage-Campaign]/COperation/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '操作',
        STRING_NUMBER_SINGULAR => '操作',
        STRING_VOWELL => true
    )
);


// Actions

$this->setString(STRING_ACTION, ACTION_START, null, '启动方案');
$this->setString(STRING_ACTION, ACTION_STOP, null, '停止方案');


// List

$this->setString(STRING_LIST, 'operationName', null, '操作名称');
$this->setString(STRING_LIST, 'dateOfStart', null, '开始日期');
$this->setString(STRING_LIST, 'dateOfClosure', null, '关闭日期');
$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'defaultDescription', null, '描述');


// Properties

$this->setString(STRING_PROPERTY, 'type', null, '类型');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'dateOfDispatching', null, '调度日期');
$this->setString(STRING_PROPERTY, 'typeOfReceiption', null, '个人行为');

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'campaignId', null, '活动ID');
$this->setString(STRING_PROPERTY, 'dateOfStart', null, '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, '关闭日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), '关闭日期');
$this->setString(STRING_PROPERTY, 'isRepeatable', null, '可重复');
$this->setString(STRING_PROPERTY, 'repeatInterval', null, '重复间隔');
$this->setString(STRING_PROPERTY, 'sequenceId', null, '序列号');
$this->setString(STRING_PROPERTY, 'trapPopulationClassName', null, '目标人群类名');
$this->setString(STRING_PROPERTY, 'trapPopulationExtensionId', null, '目标人群扩展ID');
$this->setString(STRING_PROPERTY, 'trapPopulationId', null, '目标人群ID');
$this->setString(STRING_PROPERTY, 'trapPopulation', array('label'), '目标人群');

$this->setString(STRING_SECTION, 'trapPopulation', null, '目标人群');
$this->setString(STRING_SECTION, 'about', null, '关于');
$this->setString(STRING_SECTION, 'editor', null, '场景编辑器');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
