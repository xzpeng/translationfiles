<?php

// Define the preferences

pref
(
    '[Engage-Campaign]/CSequence/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '序列',
        STRING_NUMBER_SINGULAR => '序列',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, '类型');
$this->setString(STRING_PROPERTY, 'name', null, '名称');

$this->setString(STRING_PROPERTY, 'dateOfStart', null, '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), '开始日期：');
$this->setString(STRING_PROPERTY, 'dateOfClosure', null, '关闭日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), '关闭日期：');
$this->setString(STRING_PROPERTY, 'isExclusive', null, '专属序列');
$this->setString(STRING_PROPERTY, 'isExclusive', array('label'), '专属序列：');
$this->setString(STRING_PROPERTY, 'negativeActionId', null, 'Negative action ID');
$this->setString(STRING_PROPERTY, 'negativeActionId', array('label'), 'Negative action ID:');
$this->setString(STRING_PROPERTY, 'operationId', null, '操作ID');
$this->setString(STRING_PROPERTY, 'operationId', array('label'), '操作ID：');
$this->setString(STRING_PROPERTY, 'parentActionId', null, '父操作ID');
$this->setString(STRING_PROPERTY, 'parentActionId', array('label'), '父操作ID：');
$this->setString(STRING_PROPERTY, 'population', null, '人群');
$this->setString(STRING_PROPERTY, 'population', array('label'), '人群：');
$this->setString(STRING_PROPERTY, 'positiveActionId', null, 'Positive action ID');
$this->setString(STRING_PROPERTY, 'positiveActionId', array('label'), 'Positive action ID:');
$this->setString(STRING_PROPERTY, 'reactionEventName', null, '反应事件名称');
$this->setString(STRING_PROPERTY, 'reactionEventName', array('label'), '反应事件名称：');
$this->setString(STRING_PROPERTY, 'relativeDateOfStart', null, 'Relative date of start');
$this->setString(STRING_PROPERTY, 'relativeDateOfStart', array('label'), 'Relative date of start:');
$this->setString(STRING_PROPERTY, 'sequenceInstances', null, '序列实例');
$this->setString(STRING_PROPERTY, 'sequenceInstances', array('label'), '序列实例：');

$this->setString(STRING_PROPERTY, 'negativeAction', null, 'Negative action');
$this->setString(STRING_PROPERTY, 'negativeAction', array('label'), 'Negative action:');
$this->setString(STRING_PROPERTY, 'operation', null, '操作');
$this->setString(STRING_PROPERTY, 'operation', array('label'), '操作：');
$this->setString(STRING_PROPERTY, 'parentAction', null, 'Parent action');
$this->setString(STRING_PROPERTY, 'parentAction', array('label'), 'Parent action:');
$this->setString(STRING_PROPERTY, 'positiveAction', null, 'Positive action');
$this->setString(STRING_PROPERTY, 'positiveAction', array('label'), 'Positive action:');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


?>
