<?php

// Define the preferences

pref
(
    '[Loop-Job]/CSchedule/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '计划任务',
        STRING_NUMBER_SINGULAR => '计划任务',
        STRING_CONSONANT => true
    )
);


//  String list

$this->setString(STRING_LIST, 'customName', null, '自定义名称');
$this->setString(STRING_LIST, 'jobKey', null, '工作重点');
$this->setString(STRING_LIST, 'iteration', null, '重述');
$this->setString(STRING_LIST, 'scheduledAt', null, '定于');
$this->setString(STRING_LIST, 'invalidAt', null, '无效');
$this->setString(STRING_LIST, 'isSingleton', null, '单身');


?>
