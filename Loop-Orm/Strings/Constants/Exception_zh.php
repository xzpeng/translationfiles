<?php

str(EXCEPTION_OBJECT_ALREADY_LOCKED, '该对象正在被其他用户编辑');
str(EXCEPTION_OBJECT_ALREADY_LOCKED . '?description', '该对象正在被其他用户编辑');

str(EXCEPTION_OBJECT_CONVERT_PROPERTY_TO_OBJECT_FAILED, '该属性不能转为对象');
str(EXCEPTION_OBJECT_CONVERT_PROPERTY_TO_OBJECT_FAILED . '?description', '属性转为对象失败，预期的对象看似不存在。确保属性引用对象的合法性然后重试。');

str(EXCEPTION_OBJECT_FILE_UPLOAD_NO_FILE, '没有发送上传文件');
str(EXCEPTION_OBJECT_FILE_UPLOAD_NO_FILE . '?description', '没有发送上传文件。可能因为为选择上传文件。');

str(EXCEPTION_OBJECT_FILE_EXTENSION_NOT_ALLOWED, '文件扩展名不允许');
str(EXCEPTION_OBJECT_FILE_EXTENSION_NOT_ALLOWED . '?description', null);

str(EXCEPTION_OBJECT_FIX_LOCALIZATIONS_FAILED, '此对象的本地化不能被修复');
str(EXCEPTION_OBJECT_FIX_LOCALIZATIONS_FAILED . '?description', '一些该对象的本地化被视为丢失且无法修复。');

str(EXCEPTION_OBJECT_FUNCTION_NOT_FOUND, '方法未找到');
str(EXCEPTION_OBJECT_FUNCTION_NOT_FOUND . '?description', '未找到对象调用的方法。');

str(EXCEPTION_OBJECT_IN_COMPOSITION_COULD_NOT_BE_LOADED, '组合中的一个对象未加载。');
str(EXCEPTION_OBJECT_IN_COMPOSITION_COULD_NOT_BE_LOADED . '?description', '组合中的全部对象加载失败，可能无法正确加载某一个对象。');

str(EXCEPTION_OBJECT_NOT_COMPATIBLE, '该对象不兼容');
str(EXCEPTION_OBJECT_NOT_COMPATIBLE . '?description', '虽然对象是合法的，但是它并未按照你的预期去执行。');

str(EXCEPTION_OBJECT_NOT_FIXABLE, '对象是不确定的');
str(EXCEPTION_OBJECT_NOT_FIXABLE . '?description', '对象是不确定的。');

str(EXCEPTION_OBJECT_NOT_FOUND, '未找到对象');
str(EXCEPTION_OBJECT_NOT_FOUND . '?description', '未在数据库中找到一个或多个对象。可能是他们的ID和reference不合法或该对象尚未存储。');

str(EXCEPTION_OBJECT_NOT_LOADED, '对象未加载');
str(EXCEPTION_OBJECT_NOT_LOADED . '?description', '对象未加载。可能因为对象未知。');

str(EXCEPTION_OBJECT_PARENT_NOT_FOUND, '未找到父类');
str(EXCEPTION_OBJECT_PARENT_NOT_FOUND . '?description', '未找到父类。');

str(EXCEPTION_OBJECT_PROPERTY_MODEL_NOT_FOUND, '未找到模型');
str(EXCEPTION_OBJECT_PROPERTY_MODEL_NOT_FOUND . '?description', '未找到模型。可能因为数据表中不存在该属性。');

str(EXCEPTION_OBJECT_PROPERTY_NOT_FOUND, '未知的对象属性');
str(EXCEPTION_OBJECT_PROPERTY_NOT_FOUND . '?description', '未找到该对象属性。请检查该属性的拼写并重试。');

str(EXCEPTION_OBJECT_PROPERTY_VALUE_REQUIRED, '该对象属性的值是必需的');
str(EXCEPTION_OBJECT_PROPERTY_VALUE_REQUIRED . '?description', '一个或多个对象属性有必需值，但是没有被填写。');

str(EXCEPTION_OBJECT_PROPERTY_VALUE_NOT_VALID, '不合法的值');
str(EXCEPTION_OBJECT_PROPERTY_VALUE_NOT_VALID . '?description', '你设置的对象属性值不合法。请检查语法并重试。');

str(EXCEPTION_OBJECT_RECURSIVE_ASSOCIATION_FORBIDDEN, '递归关联未授权');
str(EXCEPTION_OBJECT_RECURSIVE_ASSOCIATION_FORBIDDEN . '?description', '你尝试将一个对象与自身关联，这是被严格禁止的。请选择其他对象！');

str(EXCEPTION_OBJECT_RULE_NOT_FOUND .'?description', '一条对象规则不存在或类别不存在');

str(EXCEPTION_OBJECT_TOO_MANY_FOUND, '找到过多对象');
str(EXCEPTION_OBJECT_TOO_MANY_FOUND . '?description', '找到过多对象。可能因为找到很多该请求结果。');

str(EXCEPTION_OBJECT_NOT_SAME_CLASS, '这些对象属于两个不同的类');
str(EXCEPTION_OBJECT_NOT_SAME_CLASS . '?description', '这些对象属于两个不同的类，所以不能作对比。');

?>
