<?php

// Define the preferences

pref
(
    '[Engage-Data]/CIndividualLanguage/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '个人语言',
        STRING_NUMBER_SINGULAR => '个人语言',
        STRING_CONSONANT => true
    )
);


// List

$this->setString(STRING_LIST, 'languageIsoCode', null, '国际标准组织代码');
$this->setString(STRING_LIST, 'language', null, '语言');
$this->setString(STRING_LIST, 'rank', null, '级别');


// Properties

$this->setString(STRING_PROPERTY, 'language', array('label'), '语言');
$this->setString(STRING_PROPERTY, 'rank', array('label'), '级别');


// Section

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
