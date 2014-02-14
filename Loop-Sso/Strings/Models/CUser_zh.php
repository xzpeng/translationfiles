<?php

// Actions

$this->setString(STRING_ACTION, ACTION_COMPLETE_RESET_PASSWORD, array('confirm'), '你的密码修改成功。');
$this->setString(STRING_ACTION, ACTION_SIGN_OUT, null, '登出');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, null, '重置密码');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, array('link'), '点击下面链接重置密码：');


// Disclaimer

$this->setString(STRING_DISCLAIMER, ACTION_SIGN_OUT, array(), '你将要登出你的账户。请确认你的选择。');


// Properties

$this->setString(STRING_PROPERTY, 'email', null, '电子邮箱');
$this->setString(STRING_PROPERTY, 'email', array('label'), '电子邮箱');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), '输入你的电子邮箱');

?>
