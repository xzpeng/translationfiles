<?php

// Define the preferences

pref
(
    '[Engage-Data]/CWishlist/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '心愿单',
        STRING_NUMBER_SINGULAR => '心愿单',
        STRING_CONSONANT => true
    )
);


//  List

$this->setString(STRING_LIST, 'defaultDescription', null, '描述');
$this->setString(STRING_LIST, 'defaultName', null, '名称');


//  Properties

$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'items', null, '项目');

$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
