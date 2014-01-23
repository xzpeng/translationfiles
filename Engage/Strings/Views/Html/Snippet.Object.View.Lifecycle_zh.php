<?php

//

$this->setString(null, 'history', null, '事件历史记录');


//

$this->setString(null, 'author', null, '作者');
$this->setString(null, 'date', null, '日期');
$this->setString(null, 'event', null, '事件');
$this->setString(null, 'properties', null, '属性');


// Disclaimer

$this->setString(STRING_DISCLAIMER, 'no history event', null, '未找到事件历史记录。');


// Actions

$this->setString(STRING_LIST, ACTION_ADD, array('label'), '创建');
$this->setString(STRING_LIST, ACTION_DELETE, array('label'), '删除');
$this->setString(STRING_LIST, ACTION_DISABLE, array('label'), '禁用');
$this->setString(STRING_LIST, ACTION_ENABLE, array('label'), '开启');
$this->setString(STRING_LIST, ACTION_SAVE, array('label'), '更新');

$this->setString(STRING_LIST, 'n/a', null, 'N/A');

?>
