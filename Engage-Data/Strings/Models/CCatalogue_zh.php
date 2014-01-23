<?php

// Define the preferences

pref
(
    '[Engage-Data]/CCatalogue/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '目录',
        STRING_NUMBER_SINGULAR => '目录',
        STRING_CONSONANT => true
    )
);


//  List

$this->setString(STRING_LIST, 'action', null, '行为');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, '描述');
$this->setString(STRING_LIST, 'defaultName', null, '名称');

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');



// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除这个目录。确定？');


// Properties

$this->setString(STRING_PROPERTY, 'categories', null, '类别');
$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_SECTION, 'about', null, '关于');
$this->setString(STRING_PROPERTY, 'name', null, '标题');
$this->setString(STRING_PROPERTY, 'items', null, '项目');


// Section

$this->setString(STRING_SECTION, 'categories', null, '类别');
$this->setString(STRING_SECTION, 'items', null, '项目');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
