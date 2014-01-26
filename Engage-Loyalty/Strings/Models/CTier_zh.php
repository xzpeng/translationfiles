<?php

// Define the preferences

pref
(
    '[Engage-Loyalty]/CTier/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '层级',
        STRING_NUMBER_SINGULAR => '层级',
        STRING_CONSONANT => true
    )
);


//  Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除次层级，确定？');


// List 

$this->setString(STRING_LIST, 'name', null, '名称');
$this->setString(STRING_LIST, 'multiplier', null, '乘数');
$this->setString(STRING_LIST, 'rank', null, '秩');


// Properties


$this->setString(STRING_PROPERTY, 'color', null, '颜色');

$this->setString(STRING_PROPERTY, 'description', null, '描述');

$this->setString(STRING_PROPERTY, 'dateOfPurchase', null, '购买日期');

$this->setString(STRING_PROPERTY, 'durationOfAvailability', array('label'), '有效期');
$this->setString(STRING_PROPERTY, 'durationOfGrace', array('label'), '宽限期');
$this->setString(STRING_PROPERTY, 'durationOfHolding', array('label'), '交货期');
$this->setString(STRING_PROPERTY, 'durationOfAvailability', null, '有效期');
$this->setString(STRING_PROPERTY, 'durationOfGrace', null, '宽限期');
$this->setString(STRING_PROPERTY, 'durationOfHolding', null, '交货期');

$this->setString(STRING_PROPERTY, 'filterId', null, '过滤器ID');

$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', array('label'), '有效期公制单位');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', array('label'), '宽限期公制单位');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', array('label'), '交货期公制单位');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfAvailability', null, '有效期公制单位');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfGrace', null, '宽限期公制单位');
$this->setString(STRING_PROPERTY, 'metricOfDurationOfHolding', null, '交货期公制单位');
$this->setString(STRING_PROPERTY, 'multiplier', array('label'), '乘数');
$this->setString(STRING_PROPERTY, 'multiplier', array('inline'), '乘数');
$this->setString(STRING_PROPERTY, 'multiplier', null, '乘数');

$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'name', array('inline'), '名称');
$this->setString(STRING_PROPERTY, 'name', null, '名称');

$this->setString(STRING_PROPERTY, 'programId', null, '方案ID');

$this->setString(STRING_PROPERTY, 'rank', array('label'), '秩');
$this->setString(STRING_PROPERTY, 'rank', array('inline'), '秩');
$this->setString(STRING_PROPERTY, 'rank', null, '秩');

str('core.property.tierId', '层级ID');
str('core.property.languageIsoCode', '语言');


// Section

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
