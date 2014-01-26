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
$this->setString(STRING_LIST, 'optInEmail', null, '默认不发送电子邮件');
$this->setString(STRING_LIST, 'optInCellPhone', null, '默认不联系手机号');


?>
