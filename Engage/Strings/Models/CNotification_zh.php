<?php

// Define the preferences

pref
(
    '[Engage]/CNotification/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '通知',
        STRING_NUMBER_SINGULAR => '通知',
        STRING_CONSONANT => true
    )
);


//  String list

$this->setString(STRING_LIST, 'defaultName', null, '姓名');
$this->setString(STRING_LIST, 'optInEmail', null, '选择性加入邮箱地址');
$this->setString(STRING_LIST, 'optInCellPhone', null, '选择性加入手机号码');


?>
