<?php

// Define the preferences

pref
(
    '[Engage-Data]/CTag/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '标签',
        STRING_NUMBER_SINGULAR => '标签',
        STRING_CONSONANT => true
    )
);

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
