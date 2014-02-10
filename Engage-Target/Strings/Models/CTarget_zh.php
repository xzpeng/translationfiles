<?php

// Define the preferences

pref
(
    '[Engage-Target]/CTarget/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '目标',
        STRING_NUMBER_SINGULAR => '目标',
        STRING_CONSONANT => true
    )
);


// List

$this->setString(STRING_LIST, 'action', null, '操作');
$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'icon', null, '');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此目标。你确定要继续？');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, '没有目标');
$this->setString(STRING_DISCLAIMER, ACTION_VIEW, null, '此目标没有条件');


// Properties

$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称：');
$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述：');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), '目标名称');


// Sections

$this->setString(STRING_SECTION, 'about', null, '关于');

?>
