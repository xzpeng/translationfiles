<?php

// Define the preferences

pref
(
    '[Engage-Data]/CItem/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '项目',
        STRING_NUMBER_SINGULAR => '项目',
        STRING_VOWELL => true
    )
);


//  List

$this->setString(STRING_LIST, 'action', null, '行为');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, '说明');
$this->setString(STRING_LIST, 'defaultName', null, '名称');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要移除此项目。确定？');

// Properties

$this->setString(STRING_PROPERTY, 'brand', null, '品牌');
$this->setString(STRING_PROPERTY, 'brand1', null, '品牌 1');
$this->setString(STRING_PROPERTY, 'brand2', null, '品牌 2');
$this->setString(STRING_PROPERTY, 'brand1', array('label'), '品牌 1');
$this->setString(STRING_PROPERTY, 'brand2', array('label'), '品牌 2');
$this->setString(STRING_PROPERTY, 'categoryId', null, '类别');
$this->setString(STRING_PROPERTY, 'cogs', null, '成本');
$this->setString(STRING_PROPERTY, 'creationDate', null, '创建日期');

$this->setString(STRING_PROPERTY, 'description', null, '说明');
$this->setString(STRING_PROPERTY, 'ean13', null, '国际商品编码(EAN 13)');
$this->setString(STRING_PROPERTY, 'longDescription', null, '详细说明');
$this->setString(STRING_PROPERTY, 'longDescription', array('label'), '详细说明');
$this->setString(STRING_PROPERTY, 'parentItemId', null, '父项目');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'sku', null, 'SKU');
$this->setString(STRING_PROPERTY, 'shortDescription', null, '简短说明');
$this->setString(STRING_PROPERTY, 'shortDescription', array('label'), '简短说明');
$this->setString(STRING_PROPERTY, 'subBrand', null, '子品牌');
$this->setString(STRING_PROPERTY, 'tagId', null, '标签');
$this->setString(STRING_PROPERTY, 'type', null, '类型');


$this->setString(STRING_PROPERTY, 'categories', null, '类别');
$this->setString(STRING_PROPERTY, 'categories', array('count'), '类别数量');
$this->setString(STRING_PROPERTY, 'reviews', null, '评论');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), '评论数量');
$this->setString(STRING_PROPERTY, 'tags', null, '标签');
$this->setString(STRING_PROPERTY, 'tags', array('count'), '标签数量');
$this->setString(STRING_PROPERTY, 'wishlists', null, '心愿单');


// Section

$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'categories', null, '类别');
$this->setString(STRING_SECTION, 'reviews', null, '评论');
$this->setString(STRING_SECTION, 'tags', null, '标签');
$this->setString(STRING_SECTION, 'wishlists', null, '心愿单');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


?>
