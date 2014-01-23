<?php

// Define the preferences

pref
(
    '[Engage-Data]/CStore/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '店铺',
        STRING_NUMBER_SINGULAR => '店铺',
        STRING_CONSONANT => true
    )
);


//  List

$this->setString(STRING_LIST, 'action', null, '行为');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, '地址');
$this->setString(STRING_LIST, 'defaultName', null, '名称');


// Indicators

$this->setString(STRING_INDICATOR, 'totalRevenue', null, '总收入');
$this->setString(STRING_INDICATOR, 'averageCart', null, '平均购物车');
$this->setString(STRING_INDICATOR, 'nbPurchasingIndividuals', null, '买家');
$this->setString(STRING_INDICATOR, 'nbNewPurchasingIndividuals', null, '新买家');
$this->setString(STRING_INDICATOR, 'nbExclusivePurchasingIndividuals', null, '独立买家');
$this->setString(STRING_INDICATOR, 'newPurchasingIndividualsRatio', null, '新买家比例');
$this->setString(STRING_INDICATOR, 'nbPurchaseProducts', null, '采购产品数量');
$this->setString(STRING_INDICATOR, 'nbPurchasedProducts', null, '采购产品数量');
$this->setString(STRING_INDICATOR, 'localPurchasingIndividualsProportion', null, '本地买家比例');
$this->setString(STRING_INDICATOR, 'retentionRate', null, '保留率');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除这个店铺，确定？');


// Properties

$this->setString(STRING_PROPERTY, 'creationDate', null, '店铺创建日期');
$this->setString(STRING_PROPERTY, 'address1', null, '地址1');
$this->setString(STRING_PROPERTY, 'address2', null, '地址2');
$this->setString(STRING_PROPERTY, 'address3', null, '地址3');
$this->setString(STRING_PROPERTY, 'address1', array('label'), '地址1');
$this->setString(STRING_PROPERTY, 'address2', array('label'), '地址2');
$this->setString(STRING_PROPERTY, 'address3', array('label'), '地址3');

$this->setString(STRING_PROPERTY, 'city', null, '城市');
$this->setString(STRING_PROPERTY, 'city', array('label'), '城市');
$this->setString(STRING_PROPERTY, 'countryCode', null, '国家');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), '国家');
$this->setString(STRING_PROPERTY, 'individuals', array('count'), '个人数量');
$this->setString(STRING_PROPERTY, 'individuals', null, 'Individuals');
$this->setString(STRING_PROPERTY, 'receipts', null, '收据');
$this->setString(STRING_PROPERTY, 'latitude', null, '纬度');
$this->setString(STRING_PROPERTY, 'longitude', null, '经度');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'postalCode', null, '邮编');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), '邮编');
$this->setString(STRING_PROPERTY, 'receipts', array('count'), '收据数量');
$this->setString(STRING_PROPERTY, 'state1', null, '省份1');
$this->setString(STRING_PROPERTY, 'state2', null, '省份2');
$this->setString(STRING_PROPERTY, 'state3', null, '省份3');
$this->setString(STRING_PROPERTY, 'streetNumber', null, '街道号码');
$this->setString(STRING_PROPERTY, 'streetType', null, '街道类型');


// Section

$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'individuals', null, '个人');
$this->setString(STRING_SECTION, 'receipts', null, '收据');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
