<?php

// Define the preferences

pref
(
    '[Engage-Target]/CFilter/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => 'filters',
        STRING_NUMBER_SINGULAR => 'filter',
        STRING_CONSONANT => true
    )
);


// Actions

$this->setString(STRING_ACTION, 'exportToCsv', null, '导出为csv');
$this->setString(STRING_ACTION, 'exportEmailToEmailForge', null, '导出到EmailForge (电子邮件)');
$this->setString(STRING_ACTION, 'exportSmsToEmailForge', null, '导出到EmailForge (短信)');
$this->setString(STRING_ACTION, 'convertToTarget', null, '转换为目标');

// List

$this->setString(STRING_LIST, 'action', null, '操作');
$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此过滤。也将删除与此过滤有关的目标和段落。你确定要继续？');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, '次过滤没有条件');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称：');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), '过滤名称');

$this->setString(STRING_PROPERTY, 'equation', null, '公式');
$this->setString(STRING_PROPERTY, 'equation', array('label'), '公式：');
$this->setString(STRING_PROPERTY, 'equation', array('placeholder'), '');

?>
