<?php

// Define the preferences

pref
(
    '[Engage-Designer]/CTemplate/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '模板',
        STRING_NUMBER_SINGULAR => '模板',
        STRING_CONSONANT => true
    )
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此模板，确定？');


// Form

$this->setString(STRING_PROPERTY, 'context',  array('label'), '背景：');
$this->setString(STRING_PROPERTY, 'context',  array('placeholder'), '背景');
$this->setString(STRING_PROPERTY, 'content',  array('placeholder'), '内容：');
$this->setString(STRING_PROPERTY, 'content',  array('label'), '内容');
$this->setString(STRING_PROPERTY, 'designId',  array('label'), '设计ID：');
$this->setString(STRING_PROPERTY, 'name',  array('label'), '名称');
$this->setString(STRING_PROPERTY, 'name',  array('placeholder'), '名称');


// Sections

$this->setString(STRING_SECTION, 'about', null, '关于模板');

?>
