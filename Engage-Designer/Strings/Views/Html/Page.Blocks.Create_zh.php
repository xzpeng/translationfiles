<?php

$this->setString(null, null, null, '新建模块');
$this->setString(null, null, array('short'), '新建');


$this->setString('form', 'preview.name', null, '模块名称');
$this->setString('form', 'preview.code', null, '模块代码');

$this->setString('form', 'settings', null, '关于');
$this->setString('form', 'settings.title', null, '关于');
$this->setString('form', 'settings.catchphrase', null, '定义简单参数');
$this->setString('form', 'settings.basic-infos.title', null, '基本信息');
$this->setString('form', 'settings.title.label', null, '标题/主题');
$this->setString('form', 'settings.title.placeholder', null, '标题');
$this->setString('form', 'settings.code.label', null, '模块代码');
$this->setString('form', 'settings.code.placeholder', null, '代码');

$this->setString('form', 'content', null, '内容');
$this->setString('form', 'content.title', null, '内容');
$this->setString('form', 'content.catchphrase', null, '你的模块的内容');
$this->setString('form', 'content.static.title', null, '静态');
$this->setString('form', 'content.static.catchphrase', null, '内容是唯一的');
$this->setString('form', 'content.conditional.title', null, '条件');
$this->setString('form', 'content.conditional.catchphrase', null, '内容根据接收者改变');

$this->setString('form', 'content.static.editor.title', null, '静态内容编辑器');
$this->setString('form', 'content.static.editor.content.placeholder', null, 'HTML代码(Twig)');

$this->setString('form', 'content.conditional.editor.title', null, '条件内容编辑器');
$this->setString('form', 'content.conditional.editor.add-condition', null, '添加一个条件');

$this->setString('form', 'content.conditional.editor.else', null, '其他…');
$this->setString('form', 'content.conditional.editor.get-filter', null, '选择一个过滤器');
$this->setString('form', 'content.conditional.editor.get-widget', null, '选择一个模块');
$this->setString('form', 'content.conditional.editor.widget-plain-html.placeholder', null, 'HTML代码');

$this->setString('form', 'save', null, '保存');

?>