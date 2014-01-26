<?php

// Define the preferences

pref
(
    '[Engage-Report]/CReportInstance/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '报告实例',
        STRING_NUMBER_SINGULAR => '报告实例',
        STRING_CONSONANT => true
    )
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, '导出为PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, '导出为CSV');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此报告，确定？');


// Properties

$this->setString(STRING_PROPERTY, 'reportSectionInstances', null, '章节');


//  String list

$this->setString(STRING_LIST, 'dateOfCreation', null, '创建日期');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'id', null, 'ID');
$this->setString(STRING_LIST, 'reportId', null, '报告ID');
$this->setString(STRING_LIST, 'status', null, '状态');

?>
