<?php

// Define the preferences

pref
(
    '[Engage-Data]/CIndividualStore/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '附属店铺',
        STRING_NUMBER_SINGULAR => '附属店铺',
        STRING_CONSONANT => true
    )
);


//  List 

$this->setString(STRING_LIST, 'rank', null, '级别');
$this->setString(STRING_LIST, 'storeName', null, '店铺');
$this->setString(STRING_LIST, 'storeAdresse', null, '位置');


//  Property

$this->setString(STRING_PROPERTY, 'rank', null, '级别');
$this->setString(STRING_PROPERTY, 'rank', array('label'), '级别');
$this->setString(STRING_PROPERTY, 'storeName', null, '店铺名称');
$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'storeId', null, '店铺ID');


// Section

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


?>
