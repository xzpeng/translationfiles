<?php

// Define the preferences

pref
(
    '[Engage-Loyalty]/CProgram/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '忠诚度方案',
        STRING_NUMBER_SINGULAR => '忠诚度方案',
        STRING_CONSONANT => true
    )
);


//  Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此方案，确定？');


// List

$this->setString(STRING_LIST, 'defaultName', null, '名称');
$this->setString(STRING_LIST, 'defaultDescription', null, '描述');


// Properties

$this->setString(STRING_PROPERTY, 'color', null, '颜色');

$this->setString(STRING_PROPERTY, 'dateOfClosure', null, '关闭日期');
$this->setString(STRING_PROPERTY, 'dateOfClosure', array('label'), '关闭日期');

$this->setString(STRING_PROPERTY, 'dateOfStart', null, '开始日期');
$this->setString(STRING_PROPERTY, 'dateOfStart', array('label'), '开始日期');

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');

$this->setString(STRING_PROPERTY, 'hasDateOfClosure', null, '设置结束');
$this->setString(STRING_PROPERTY, 'hasDateOfClosure', array('label'), '设置结束');

$this->setString(STRING_PROPERTY, 'includeDiscounts', null, '包含折扣');
$this->setString(STRING_PROPERTY, 'includeDiscounts', array('label'), '包含折扣');
$this->setString(STRING_PROPERTY, 'includeVat', null, '包含增值税');
$this->setString(STRING_PROPERTY, 'includeVat', array('label'), '包含增值税'); 
$this->setString(STRING_PROPERTY, 'individuals', null, '个人');
$this->setString(STRING_PROPERTY, 'individuals', array('label'), '个人');
$this->setString(STRING_PROPERTY, 'name', null, '名称');
$this->setString(STRING_PROPERTY, 'name', array('label'), '名称');
$this->setString(STRING_PROPERTY, 'optOutNoTier', null, 'Opt out individuals without tier');
$this->setString(STRING_PROPERTY, 'optOutNoTier', array('label'), 'Opt out the individual without tier');
$this->setString(STRING_PROPERTY, 'programNQPointId', null, '不符合条件积分');
$this->setString(STRING_PROPERTY, 'programNQPointId', array('label'), '不符合条件积分');
$this->setString(STRING_PROPERTY, 'programQPointId', null, '符合条件积分');
$this->setString(STRING_PROPERTY, 'programQPointId', array('label'), '符合条件积分');

$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', null, '四舍五入不符合条件积分');
$this->setString(STRING_PROPERTY, 'roundingmodefornqpoints', array('label'), '四舍五入不符合条件积分');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', null, '四舍五入符合条件积分');
$this->setString(STRING_PROPERTY, 'roundingmodeforqpoints', array('label'), '四舍五入不符合条件积分');

$this->setString(STRING_PROPERTY, 'tiers', null, '层级');
$this->setString(STRING_PROPERTY, 'tiers', array('label'), '层级');

str('core.property.programid', '方案ID');


// Sections

$this->setString(STRING_SECTION, 'about', null, '关于');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'individuals', null, '个人');
$this->setString(STRING_SECTION, 'population', null, '群体');
$this->setString(STRING_SECTION, 'demographics', null, '人口');
$this->setString(STRING_SECTION, 'earn-burn', null, '盈利&投资');
$this->setString(STRING_SECTION, 'nQPoints', null, '不符合条件积分');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'qPoints', null, '符合条件积分');
$this->setString(STRING_SECTION, 'tiers', null, '层级');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
