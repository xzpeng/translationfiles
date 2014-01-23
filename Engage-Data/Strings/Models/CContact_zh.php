<?php

// Define the preferences

pref
(
    '[Engage-Data]/CContact/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '联系人',
        STRING_NUMBER_SINGULAR => '联系人',
        STRING_CONSONANT => true
    )
);


//  String list

$this->setString(STRING_LIST, 'value', null, '内容');
$this->setString(STRING_LIST, 'type', null, '类型');
$this->setString(STRING_LIST, 'isNotificationChannel', null, '选择性加入');
$this->setString(STRING_LIST, 'isValid', null, '合法？');
$this->setString(STRING_LIST, 'isChecked', null, '选中？');
$this->setString(STRING_LIST, 'OptInEmail', null, '电子邮件');
$this->setString(STRING_LIST, 'optInCellPhone', null, '手机');


//

$this->setString(null, 'name', null, '联系人姓名');


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, '个人ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), '个人ID:');

$this->setString(STRING_PROPERTY, 'isChecked', null, '选中');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), '选中：');

$this->setString(STRING_PROPERTY, 'isValid', null, '合法');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), '合法：');

$this->setString(STRING_PROPERTY, 'rank', null, '等级');
$this->setString(STRING_PROPERTY, 'rank', array('label'), '等级：');

$this->setString(STRING_PROPERTY, 'type', null, '联系方式类型');
$this->setString(STRING_PROPERTY, 'type', array('label'), '联系类型：');
$this->setString(STRING_PROPERTY, 'type', array('placeholder'), '例如 \'电子邮件\' 或者 \'社交网络\'.');

$this->setString(STRING_PROPERTY, 'value', null, '联系方式内容');
$this->setString(STRING_PROPERTY, 'value', array('label'), '内容：');
$this->setString(STRING_PROPERTY, 'value', array('placeholder'), '输入联系方式内容。');

$this->setString(STRING_PROPERTY, 'items', null, '项目');
$this->setString(STRING_PROPERTY, 'items', array('label'), '项目：');
$this->setString(STRING_PROPERTY, 'items', array('placeholder'), '项目');

$this->setString(STRING_PROPERTY, 'name', null, '标题');
$this->setString(STRING_PROPERTY, 'name', array('label'), '标题：');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), '目录标题');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, '用此联系方式接收通知。');

$this->setString(STRING_PROPERTY, 'cellphone', null, '手机');
$this->setString(STRING_PROPERTY, 'email', null, '电子邮件');
$this->setString(STRING_PROPERTY, 'fax', null, '传真');
$this->setString(STRING_PROPERTY, 'telephone', null, '电话');

$this->setString(STRING_PROPERTY, 'facebook', null, 'Facebook');
$this->setString(STRING_PROPERTY, 'foursquare', null, 'Foursquare');
$this->setString(STRING_PROPERTY, 'googlePlus', null, 'Google');
$this->setString(STRING_PROPERTY, 'instagram', null, 'Instagram');
$this->setString(STRING_PROPERTY, 'jiepang', null, '街旁');
$this->setString(STRING_PROPERTY, 'kaixin', null, '开心');
$this->setString(STRING_PROPERTY, 'linkedIn', null, 'LinkedIn');
$this->setString(STRING_PROPERTY, 'orkut', null, 'Orkut');
$this->setString(STRING_PROPERTY, 'renren', null, '人人');
$this->setString(STRING_PROPERTY, 'tencentWeibo', null, '腾讯微博');
$this->setString(STRING_PROPERTY, 'tumblr', null, 'Tumblr');
$this->setString(STRING_PROPERTY, 'twitter', null, 'Twitter');
$this->setString(STRING_PROPERTY, 'vkontakte', null, 'VKontakte');
$this->setString(STRING_PROPERTY, 'weibo', null, '微博');


$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');


// Tags

$this->setString(null, 'optIn', array('tag'), '选择性加入');
$this->setString(null, 'notValid', array('tag'), '不合法');
$this->setString(null, 'notChecked', array('tag'), '未选中');
$this->setString(null, 'valid', array('tag'), '合法');

?>
