<?php

// Define the preferences

pref
(
    '[Engage-Data]/CItemTag/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '项目标前',
        STRING_NUMBER_SINGULAR => '项目标前',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_LIST, 'tagName', null, '标签名称');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
