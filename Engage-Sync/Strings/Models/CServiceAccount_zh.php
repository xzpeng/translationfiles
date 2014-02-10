<?php

// Define the preferences

pref
(
    '[Engage-Sync]/CServiceAccount/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '服务帐户',
        STRING_NUMBER_SINGULAR => '服务帐户',
        STRING_CONSONANT => true
    )
);


// Actions

$this->setString(STRING_ACTION, ACTION_CHECK_CONNECTION, null, '检查连接');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此服务账户，确定？');


// Label

$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'login', array('label'), '登录');
$this->setString(STRING_PROPERTY, 'name', array('label'), '用户名');
$this->setString(STRING_PROPERTY, 'parameters', array('label'), '参数');
$this->setString(STRING_PROPERTY, 'password', array('label'), '密码');
$this->setString(STRING_PROPERTY, 'scope', array('label'), '范畴');
$this->setString(STRING_PROPERTY, 'serviceName', array('label'), '服务用户名');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), '服务');
$this->setString(STRING_PROPERTY, 'url', array('label'), '网址');

$this->setString(STRING_PROPERTY, 'description', array('placeholder'), '描述');
$this->setString(STRING_PROPERTY, 'login', array('placeholder'), '登录');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), '用户名');
$this->setString(STRING_PROPERTY, 'parameters', array('placeholder'), '参数');
$this->setString(STRING_PROPERTY, 'password', array('placeholder'), '密码');
$this->setString(STRING_PROPERTY, 'scope', array('placeholder'), '范畴');
$this->setString(STRING_PROPERTY, 'serviceName', array('placeholder'), '服务用户名');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), '服务');
$this->setString(STRING_PROPERTY, 'url', array('placeholder'), '网址');

$this->setString(STRING_PROPERTY, 'description', array('inline'), '描述');
$this->setString(STRING_PROPERTY, 'login', array('inline'), '登录');
$this->setString(STRING_PROPERTY, 'name', array('inline'), '用户名');
$this->setString(STRING_PROPERTY, 'parameters', array('inline'), '参数');
$this->setString(STRING_PROPERTY, 'password', array('inline'), '密码');
$this->setString(STRING_PROPERTY, 'scope', array('inline'), '范畴');
$this->setString(STRING_PROPERTY, 'serviceName', array('inline'), '服务用户名');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), '服务');
$this->setString(STRING_PROPERTY, 'url', array('inline'), '网址');

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'login', null, '登录');
$this->setString(STRING_PROPERTY, 'name', null, '用户名');
$this->setString(STRING_PROPERTY, 'parameters', null, '参数');
$this->setString(STRING_PROPERTY, 'password', null, '密码');
$this->setString(STRING_PROPERTY, 'scope', null, '范畴');
$this->setString(STRING_PROPERTY, 'serviceName', null, '服务用户名');
$this->setString(STRING_PROPERTY, 'serviceId', array('label'), '服务');
$this->setString(STRING_PROPERTY, 'url', null, '网址');


//  String list

$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'name', null, '用户名');
$this->setString(STRING_LIST, 'login', null, '登录');
$this->setString(STRING_LIST, 'serviceName', null, '服务用户名');



// Properties

$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'services', null, '服务');
$this->setString(STRING_PROPERTY, 'services', array('count'), '服务数量');
$this->setString(STRING_PROPERTY, 'serviceId', null, '服务');


// Sections

$this->setString(STRING_SECTION, 'Service', null, '服务');
$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'Preferences', null, '优先权');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
