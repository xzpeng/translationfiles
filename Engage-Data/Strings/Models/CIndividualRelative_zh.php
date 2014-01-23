<?php

// Define the preferences

pref
(
    '[Engage-Data]/CIndividualRelative/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '个人相关',
        STRING_NUMBER_SINGULAR => '个人相关',
        STRING_CONSONANT => true
    )
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, '未找到相关的人');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
