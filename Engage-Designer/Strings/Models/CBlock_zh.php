<?php

// Define the preferences

pref
(
    '[Engage-Designer]/CBlock/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '模块',
        STRING_NUMBER_SINGULAR => '模块',
        STRING_CONSONANT => true
    )
);


$this->setString(null, null, null, '模块');
$this->setString(null, null, array('plural'), '模块');

// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此模块，确定？');


// Form

$this->setString(STRING_PROPERTY, 'title',  array('label'), '标题：');
$this->setString(STRING_PROPERTY, 'name',  array('label'), '名称：');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), '名称');
$this->setString(STRING_PROPERTY, 'type',  array('label'), '类型：');
$this->setString(STRING_PROPERTY, 'content',  array('label'), '内容：');
$this->setString(STRING_PROPERTY, 'dateofcreation',  array('inline'), '创建于：');

// Sections

$this->setString(STRING_SECTION, 'about', null, '关于模块');
$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


// Action 

$this->setString(STRING_ACTION, 'edit', null, '编辑');
$this->setString(STRING_ACTION, 'delete', null, '删除');
$this->setString(STRING_ACTION, 'save', null, '保存');

$this->setString(STRING_ACTION, 'search', array('placeholder'), '按名称搜索模块');

?>
