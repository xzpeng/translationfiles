<?php

// Define the preferences

pref
(
    '[Engage-Campaign]/CCreditPointAction/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '信用积分行为',
        STRING_NUMBER_SINGULAR => '信用积分行为',
        STRING_CONSONANT => true
    )
);


// Properties

$this->setString(STRING_PROPERTY, 'type', null, '类型');
$this->setString(STRING_PROPERTY, 'name', null, '名称');

$this->setString(STRING_PROPERTY, 'nbNQPoints', null, '不符合条件的积分数量');
$this->setString(STRING_PROPERTY, 'nbNQPoints', array('label'), '不符合条件的积分数量：');
$this->setString(STRING_PROPERTY, 'nbQPoints', null, '符合条件的积分数量');
$this->setString(STRING_PROPERTY, 'nbQPoints', array('label'), '符合条件的积分数量：');

$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
