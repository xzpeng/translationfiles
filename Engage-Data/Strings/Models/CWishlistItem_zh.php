<?php

// Define the preferences

pref
(
    '[Engage-Data]/CWishlistItem/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '心愿单商品',
        STRING_NUMBER_SINGULAR => '心愿单商品',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'name', null, '名称');


$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

$this->setString(STRING_LIST, 'wishlistname', null, '名称');
$this->setString(STRING_LIST, 'wishlistname', array('label'), '名称');
$this->setString(STRING_LIST, 'wishlistDescription', null, '描述');
$this->setString(STRING_LIST, 'wishlistDescription', array('label'), '描述');

?>
