<?php

// Define the preferences

pref
(
    '[Engage-Data]/CReview/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '评论',
        STRING_NUMBER_SINGULAR => '评论',
        STRING_CONSONANT => true
    )
);


// List

$this->setString(STRING_LIST, 'itemName', null, '项目');
$this->setString(STRING_LIST, 'score', null, '得分');
$this->setString(STRING_LIST, 'description', null, '评论');
$this->setString(STRING_LIST, 'dateOfCreation', null, '发布日期');


//  Property

$this->setString(STRING_PROPERTY, 'itemName', null, '项目名称');
$this->setString(STRING_PROPERTY, 'score', null, '分数');
$this->setString(STRING_PROPERTY, 'title', null, '标题');
$this->setString(STRING_PROPERTY, 'title', array('label'), '标题');
$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'score', null, '分数');
$this->setString(STRING_PROPERTY, 'score', array('label'), '分数');

//

$this->setString(STRING_SECTION, 'About', null, '关于');
$this->setString(STRING_SECTION, 'Item', null, '项目');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
