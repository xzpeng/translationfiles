<?php

$this->setString(null, null, null, 'Create a block');
$this->setString(null, null, array('short'), 'Create');


$this->setString('form', 'preview.name', null, 'Block\'s name');
$this->setString('form', 'preview.code', null, 'Block\'s code');

$this->setString('form', 'settings', null, 'About');
$this->setString('form', 'settings.title', null, 'About');
$this->setString('form', 'settings.catchphrase', null, 'Define simple parameters');
$this->setString('form', 'settings.basic-infos.title', null, 'Basic informations');
$this->setString('form', 'settings.title.label', null, 'Title / Subjects');
$this->setString('form', 'settings.title.placeholder', null, 'title');
$this->setString('form', 'settings.code.label', null, 'Block\'s code');
$this->setString('form', 'settings.code.placeholder', null, 'code');

$this->setString('form', 'content', null, 'Content');
$this->setString('form', 'content.title', null, 'Content');
$this->setString('form', 'content.catchphrase', null, 'Content of your block');
$this->setString('form', 'content.static.title', null, 'Static');
$this->setString('form', 'content.static.catchphrase', null, 'Content is unique');
$this->setString('form', 'content.conditional.title', null, 'Conditional');
$this->setString('form', 'content.conditional.catchphrase', null, 'Content change depending on the recipient');

$this->setString('form', 'content.static.editor.title', null, 'Static content editor');
$this->setString('form', 'content.static.editor.content.placeholder', null, 'HTML Code (Twig)');

$this->setString('form', 'content.conditional.editor.title', null, 'Conditional editor');
$this->setString('form', 'content.conditional.editor.add-condition', null, 'Add a condition');

$this->setString('form', 'content.conditional.editor.else', null, 'Else …');
$this->setString('form', 'content.conditional.editor.get-filter', null, 'Choose a filter');
$this->setString('form', 'content.conditional.editor.get-widget', null, 'Choose a block');
$this->setString('form', 'content.conditional.editor.widget-plain-html.placeholder', null, 'HTML Code');

$this->setString('form', 'save', null, 'Save');

?>