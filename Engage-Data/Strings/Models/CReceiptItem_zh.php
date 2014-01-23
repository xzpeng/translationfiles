<?php

// Define the preferences

pref
(
    '[Engage-Data]/CReceiptItem/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '收入项目',
        STRING_NUMBER_SINGULAR => '收入项目',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'priceIncVat', null, '价格（含附加税）');
$this->setString(STRING_PROPERTY, 'quantity', null, '数量');
$this->setString(STRING_PROPERTY, 'quantity', array('label'), '数量');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

$this->setString(STRING_LIST, 'itemName', null, '名称');
$this->setString(STRING_LIST, 'quantity', null, '数量');
$this->setString(STRING_LIST, 'priceIncVat', null, '价格（含附加税）');

?>
