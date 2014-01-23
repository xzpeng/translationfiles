<?php

// Define the preferences

pref
(
    '[Engage-Data]/CReceiptPayment/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '收入款项',
        STRING_NUMBER_SINGULAR => '收入款项',
        STRING_CONSONANT => true
    )
);

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

$this->setString(STRING_LIST, 'methodType', null, '付款方式');
$this->setString(STRING_LIST, 'currencyCode', null, '货币代码');
$this->setString(STRING_LIST, 'dateOfPayment', null, '付款日期');
$this->setString(STRING_LIST, 'universalValue', null, '合计');

?>
