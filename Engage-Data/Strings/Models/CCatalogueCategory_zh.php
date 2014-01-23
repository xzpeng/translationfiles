<?php

// Define the preferences

pref
(
    '[Engage-Data]/CCatalogueCategory/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '目录',
        STRING_NUMBER_SINGULAR => '目录类别',
        STRING_CONSONANT => true
    )
);

$this->setString(STRING_LIST, 'categoryname', null, '类别名称');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');
?>
