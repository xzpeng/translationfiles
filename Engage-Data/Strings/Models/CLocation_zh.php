<?php

// Define the preferences

pref
(
    '[Engage-Data]/CLocation/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '位置',
        STRING_NUMBER_SINGULAR => '位置',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), '个人ID:');

$this->setString(STRING_PROPERTY, 'isChecked', null, '勾选');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), '已勾选：');

$this->setString(STRING_PROPERTY, 'isValid', null, '有效');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), '有效：');

$this->setString(STRING_PROPERTY, 'rank', null, '级别');
$this->setString(STRING_PROPERTY, 'rank', array('label'), '级别:');

$this->setString(STRING_PROPERTY, 'type', null, '位置类型');
$this->setString(STRING_PROPERTY, 'type', array('label'), '位置类型：');

$this->setString(STRING_PROPERTY, 'address1', null, '地址1');
$this->setString(STRING_PROPERTY, 'address1', array('label'), '地址1：');

$this->setString(STRING_PROPERTY, 'address2', null, '地址2');
$this->setString(STRING_PROPERTY, 'address2', array('label'), '地址2：');

$this->setString(STRING_PROPERTY, 'address3', null, '地址3');
$this->setString(STRING_PROPERTY, 'address3', array('label'), '地址3：');

$this->setString(STRING_PROPERTY, 'city', null, '城市');
$this->setString(STRING_PROPERTY, 'city', array('label'), '城市：');

$this->setString(STRING_PROPERTY, 'countryCode', null, '国家代码');
$this->setString(STRING_PROPERTY, 'countryCode', array('label'), '国家代码：');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, '有效通知');
$this->setString(STRING_PROPERTY, 'isNotificationChannel', array('label'), '有效通知：');

$this->setString(STRING_PROPERTY, 'latitude', null, '纬度');
$this->setString(STRING_PROPERTY, 'latitude', array('label'), '纬度：');

$this->setString(STRING_PROPERTY, 'longitude', null, '经度');
$this->setString(STRING_PROPERTY, 'longitude', array('label'), '经度：');

$this->setString(STRING_PROPERTY, 'postalCode', null, '邮政编码');
$this->setString(STRING_PROPERTY, 'postalCode', array('label'), '邮政编码：');

$this->setString(STRING_PROPERTY, 'state1', null, '省份1');
$this->setString(STRING_PROPERTY, 'state1', array('label'), '省份1：');

$this->setString(STRING_PROPERTY, 'state2', null, '省份2');
$this->setString(STRING_PROPERTY, 'state2', array('label'), '省份2：');

$this->setString(STRING_PROPERTY, 'state3', null, '省份3');
$this->setString(STRING_PROPERTY, 'state3', array('label'), '省份3：');

$this->setString(STRING_PROPERTY, 'streetNumber', null, '街道号码');
$this->setString(STRING_PROPERTY, 'streetNumber', array('label'), '街道号码');

$this->setString(STRING_PROPERTY, 'streetType', null, '街道类型');
$this->setString(STRING_PROPERTY, 'streetType', array('label'), '街道类型：');


// List

$this->setString(STRING_LIST, 'defaultDescription', null, 'Address');
$this->setString(STRING_LIST, 'isChecked', null, 'Is checked?');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Opt-in?');
$this->setString(STRING_LIST, 'isValid', null, 'isValid?');
$this->setString(STRING_LIST, 'concatAddress', null, 'Address');
$this->setString(STRING_LIST, 'postalCode', null, 'Postal Code');
$this->setString(STRING_LIST, 'city', null, 'City');
$this->setString(STRING_LIST, 'concatState', null, 'State');
$this->setString(STRING_LIST, 'countryCode', null, 'Country');


//

$this->setString(STRING_SECTION, 'About', null, 'About');

// Tags

$this->setString(null, 'optIn', array('tag'), 'Opt-in');        
$this->setString(null, 'notValid', array('tag'), 'Not Valid');
$this->setString(null, 'notChecked', array('tag'), 'Not checked');
$this->setString(null, 'valid', array('tag'), 'Valid');


$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
