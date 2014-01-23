<?php

// Define the preferences

pref
(
    '[Engage-Data]/CReceipt/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '收入',
        STRING_NUMBER_SINGULAR => '收入',
        STRING_CONSONANT => true
    )
);


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要移除此项目收入。确定？');


//  List

$this->setString(STRING_LIST, 'action', null, '行为');
$this->setString(STRING_LIST, 'c1', null, '收入 #');
$this->setString(STRING_LIST, 'defaultDescription', null, '说明');
$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'individualName', null, '个人');
$this->setString(STRING_LIST, 'storeName', null, '店铺');


// Properties

$this->setString(STRING_PROPERTY, 'cashier', null, '出纳员');
$this->setString(STRING_PROPERTY, 'cashier', array('label'), '出纳员');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, '购买日期');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', array('label'), '购买日期');
$this->setString(STRING_PROPERTY, 'currencyCode', null, '货币代码');
$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'individualName', null, '个人姓名');
$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, '购买日期');
$this->setString(STRING_PROPERTY, 'nbItems', null, '行数');
$this->setString(STRING_PROPERTY, 'receiptItems', null, '收据项目');
$this->setString(STRING_PROPERTY, 'receiptItems', array('count'), '收据项目数量');
$this->setString(STRING_PROPERTY, 'receiptPayments', null, '收据款项');
$this->setString(STRING_PROPERTY, 'receiptPayments', array('count'), '收据款项数量');
$this->setString(STRING_PROPERTY, 'status', null, '状态');
$this->setString(STRING_PROPERTY, 'storeId', null, '店铺ID');
$this->setString(STRING_PROPERTY, 'storeName', null, '店铺名称');
$this->setString(STRING_PROPERTY, 'till', null, '收银台');
$this->setString(STRING_PROPERTY, 'totalDiscountExclVat', null, '总折扣（不含增值税）');
$this->setString(STRING_PROPERTY, 'totalDiscountIncVat', null, '总折扣（含增值税）');
$this->setString(STRING_PROPERTY, 'totalExclVat', null, '总计（不含增值税）');
$this->setString(STRING_PROPERTY, 'totalPriceExclVat', null, '总价（不含增值税）');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', null, '总价（含增值税）');
$this->setString(STRING_PROPERTY, 'totalPriceIncVat', array('label'), '总价（含增值税）');
$this->setString(STRING_PROPERTY, 'totalShippingExclVat', null, '总运费（不含增值税）');
$this->setString(STRING_PROPERTY, 'totalShippingIncVat', null, '总运费（含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountExclVat', null, '通用总折扣（不含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalDiscountIncVat', null, '通用总折扣（含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalPriceExclVat', null, '通用总价（不含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalPriceIncVat', null, '通用总价（含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalShippingExclVat', null, '通用总运费（不含增值税）');
$this->setString(STRING_PROPERTY, 'universalTotalShippingIncVat', null, '通用总运费（含增值税）');

$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');
$this->setString(STRING_SECTION, 'Individuals', null, '个人');
$this->setString(STRING_SECTION, 'ReceiptItems', null, '项目');
$this->setString(STRING_SECTION, 'ReceiptPayments', null, '付款');
?>
