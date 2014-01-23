<?php

// Define the preferences

pref
(
    '[Engage-Data]/CCategory/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '分类',
        STRING_NUMBER_SINGULAR => '分类',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'name', null, '标题');
$this->setString(STRING_PROPERTY, 'name', array('label'), '标题');
$this->setString(STRING_PROPERTY, 'parentCategoryId', null, '父类');
$this->setString(STRING_PROPERTY, 'parentCategoryId', array('label'), '父类');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
