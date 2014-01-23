<?php

// Exceptions related to the database

str(EXCEPTION_DATA_CONNECT_FAILED, '数据连接失败');
str(EXCEPTION_DATA_CONNECT_FAILED . '?description', '数据连接失败，可能因为连接已被重置。');


// Exceptions related to objects 

str(EXCEPTION_DATA_OBJECT_GET_FAILED, '无法获取不能设置对象一个或多个对象');
str(EXCEPTION_DATA_OBJECT_GET_FAILED . '?description', '无法获取一个或多个对象.可能因为一个或多个表不存在。');

str(EXCEPTION_DATA_OBJECT_DELETE_FAILED, '无法删除对象');
str(EXCEPTION_DATA_OBJECT_DELETE_FAILED . '?description', '无法删除对象。这可能是因为该对象的ID和参考不存在。');

str(EXCEPTION_DATA_OBJECT_SET_FAILED, '不能设置对象');
str(EXCEPTION_DATA_OBJECT_SET_FAILED . '?description', '不能设置对象。可能因为服务器端的删除过程中发生了错误。');

str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN, '禁止加载此子对象');
str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN .'?description', '禁止加载此子对象。可能因为在加载子对象之前需要先加载父对象。');

str(EXCEPTION_DATA_OBJECT_DELETED, '此对象已被删除');
str(EXCEPTION_DATA_OBJECT_DELETED .'?description', '此对象已被删除。可能因为你试图访问的对象已不存在。');
?>
