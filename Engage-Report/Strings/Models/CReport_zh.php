<?php

// Define the preferences

pref
(
    '[Engage-Report]/CReport/strings/en',
    array
    (
        STRING_GENRE    => STRING_GENRE_NEUTRAL,
        STRING_NUMBER_PLURAL    => '报告',
        STRING_NUMBER_SINGULAR => '报告',
        STRING_CONSONANT => true
    )
);


// Actions

$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, '导出为PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, '导出为CSV');
$this->setString(STRING_ACTION, ACTION_GENERATE_REPORT_INSTANCE, null, '新建报告');


// Buttons

$this->setString(STRING_ACTION, ACTION_DELETE, null, '删除');
$this->setString(STRING_ACTION, ACTION_EXPORT_PDF, null, '导出为PDF');
$this->setString(STRING_ACTION, ACTION_EXPORT_CSV, null, '导出为CSV');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, '你将要删除此报告，确定？');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, '未找到报告');


//

$this->setString(STRING_PROPERTY, 'reportInstances', null, '报告实例');
$this->setString(STRING_PROPERTY, 'reportSections', null, '章节');


// Core properties

str('core.property.reportid', '报告ID');


// Properties

$this->setString(STRING_PROPERTY, 'classoficon', null, '图标类');
$this->setString(STRING_PROPERTY, 'defaultmetric', null, '默认单位');
$this->setString(STRING_PROPERTY, 'istemplate', null, '是模板？');
$this->setString(STRING_PROPERTY, 'period', null, '时期');
$this->setString(STRING_PROPERTY, 'targetclassname', null, '目标名称');
$this->setString(STRING_PROPERTY, 'targetextensionid', null, '目标扩展ID');
$this->setString(STRING_PROPERTY, 'title', null, '标题');

$this->setString(STRING_PROPERTY, 'title', array('label'), '标题');
$this->setString(STRING_PROPERTY, 'code', array('label'), '代码');
$this->setString(STRING_PROPERTY, 'code', null, '代码');
$this->setString(STRING_PROPERTY, 'description', null, '描述');
$this->setString(STRING_PROPERTY, 'description', array('label'), '描述');
$this->setString(STRING_PROPERTY, 'defaultMetric', array('label'), '单位');
$this->setString(STRING_PROPERTY, 'isTemplate', array('label'), '模板');
$this->setString(STRING_PROPERTY, 'period', array('label'), '时期');


// Sections

$this->setString(STRING_SECTION, 'about', null, '关于');
$this->setString(STRING_SECTION, 'reportinstances', null, '报告实例');
$this->setString(STRING_SECTION, 'reportsections', null, '报告章节');
$this->setString(STRING_SECTION, 'settings', null, '设置');
$this->setString(STRING_SECTION, 'target', null, '目标对象');
$this->setString(STRING_SECTION, 'editor', null, '编辑器');
$this->setString(STRING_SECTION, 'object', null, '对象');
$this->setString(STRING_SECTION, 'custom', null, '自定义');
$this->setString(STRING_SECTION, 'system', null, '系统');

?>
