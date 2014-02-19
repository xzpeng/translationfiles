<?php

// Exceptions related to the application

str(EXCEPTION_APPLICATION_BREAK, '此应用已停止');
str(EXCEPTION_APPLICATION_BREAK . '?description', '一个已设置的断点导致此应用被停止。');

str(EXCEPTION_APPLICATION_ENVIRONMENT_NOT_DEFINED, '此应用的环境未定义');
str(EXCEPTION_APPLICATION_ENVIRONMENT_NOT_DEFINED . '?description', '');

str(EXCEPTION_APPLICATION_ERROR_INTERNAL, '发生内部错误');
str(EXCEPTION_APPLICATION_ERROR_INTERNAL . '?description', '此应用发生一个内部错误。我们的团队正在努力解决。感谢您的耐心等待，请稍后重试！');

str(EXCEPTION_APPLICATION_ERROR_UNKNOWN, '发生未知错误');
str(EXCEPTION_APPLICATION_ERROR_UNKNOWN . '?description', '');


// Exceptions related to array

str(EXCEPTION_ARRAY_EXPECTED, '需要一个数组');
str(EXCEPTION_ARRAY_EXPECTED . '?description', '需要一个数组，但是提供了一个其他参数');

str(EXCEPTION_ARRAY_KEY_EXPECTED, '数组中一个键值缺失');
str(EXCEPTION_ARRAY_KEY_EXPECTED . '?description', '数组中一个键值缺失');


// Exceptions related to APIs

str(EXCEPTION_API_ARGUMENT_NOT_FOUND, '一个参数缺失');
str(EXCEPTION_API_ARGUMENT_NOT_FOUND . '?description', '一个强制性参数缺失。请参阅这个API的文档，并确保传递所有必需的参数。');

str(EXCEPTION_API_ARGUMENT_NOT_VALID, '此参数的值不合法');
str(EXCEPTION_API_ARGUMENT_NOT_VALID . '?description', '此参数的值已检查并被视为无效。请检查语法，并确保它符合预期的模式。');

str(EXCEPTION_API_NOT_FOUND, '此API不存在');
str(EXCEPTION_API_NOT_FOUND . '?description', '未找到你试图调用的API。请确保API的名字是存在的而且拼写正确。');

str(EXCEPTION_API_RESULT_NOT_VALID, '此API的结果是无效的');
str(EXCEPTION_API_RESULT_NOT_VALID . '?description', '该应用不能解析此API的结果。可能是因为在调用此API时发生意外错误。');


// Exceptions related to database

str(EXCEPTION_DATABASE_CONNECT_FAILED, '数据库连接失败');
str(EXCEPTION_DATABASE_CONNECT_FAILED . '?description', '数据库连接无法成功完成。请检查你的证书然后重试（数据库名，用户名，密码等）。');

str(EXCEPTION_DATABASE_DISCONNECT_FAILED, '断开数据库连接失败');
str(EXCEPTION_DATABASE_DISCONNECT_FAILED . '?description', '断开数据库连接无法成功完成。可能是因为连接已丢失。');

str(EXCEPTION_DATABASE_DRIVER_NOT_FOUND, '未找到数据库驱动程序');
str(EXCEPTION_DATABASE_DRIVER_NOT_FOUND . '?description', '用于连接，解析和编辑数据库的驱动程序不存在。请检查是否已经定义了一个有效的数据库驱动程序，然后重试。');

str(EXCEPTION_DATABASE_QUERY_FAILED, '查询失败');
str(EXCEPTION_DATABASE_QUERY_FAILED . '?description', '数据库查询已执行，但没有成功。请检查您的查询语法然后重试。');

str(EXCEPTION_DATABASE_QUERY_IS_EMPTY, '该查询为空');
str(EXCEPTION_DATABASE_QUERY_IS_EMPTY . '?description', '该数据库查询没有内容，因此不能被执行。你只能执行非空的数据库查询。');

str(EXCEPTION_DATABASE_SELECT_FAILED, '数据库无法找到或未授权');
str(EXCEPTION_DATABASE_SELECT_FAILED . '?description', '所选的数据库不存在或未授权。请检查是否已经定义了一个有效的数据库名称并且用户具有连接到它的授权。');


// Exceptions related to factories

str(EXCEPTION_FACTORY_NOT_FOUND, '未找到该factory');
str(EXCEPTION_FACTORY_NOT_FOUND . '?description', '你要找的factory看上去不存在。请确认该factory已存在，然后重试。');


// Exceptions related to features

str(EXCEPTION_FEATURE_NOT_FOUND, '未找到该功能。');
str(EXCEPTION_FEATURE_NOT_FOUND . '?description', '你要找的功能看上去不存在。请确认该功能已存在，然后重试。');
str(EXCEPTION_FEATURE_VARIABLE_NOT_FOUND, '未找到此功能所需的变量。');
str(EXCEPTION_FEATURE_VARIABLE_NOT_FOUND . '?description', '你要找的该功能的变量看上去不存在。请确认此功能的该变量存在，然后重试。');


//Exceptions related to files

str(EXCEPTION_FILE_NOT_FOUND, '高文件可能不存在');
str(EXCEPTION_FILE_NOT_FOUND . '?description', '未在提供的位置找到该文件。请确保在访问之前文件已存在。');


// Exceptions related to functions

str(EXCEPTION_FUNCTION_NOT_FOUND, '未找到该函数');
str(EXCEPTION_FUNCTION_NOT_FOUND . '?description', '你调用的函数未定义。请确保函数名字拼写正确，然后重试。');


// Exceptions related to languages

str(EXCEPTION_LANGUAGE_NOT_SUPPORTED, '不支持该语言。');
str(EXCEPTION_LANGUAGE_NOT_SUPPORTED . '?description', '不支持你视图激活的语言。请选择其他可用语言。');


// Exceptions related to models

str(EXCEPTION_MODEL_NOT_FOUND, '未找到该模型');
str(EXCEPTION_MODEL_NOT_FOUND . '?description', '你要操作的模型不存在。请确定其扩展名和路径是有效的，然后重试。');


// Exceptions related to rights

str(EXCEPTION_PERMISSION_ON_CLASS_NOT_GRANTED, '你没有在此类执行此操作的权限');
str(EXCEPTION_PERMISSION_ON_CLASS_NOT_GRANTED . '?description', '你没有在此类执行此操作的权限。可能此类访问是受限的。');

str(EXCEPTION_PERMISSION_DENIED, '你没有执行此操作的权限');
str(EXCEPTION_PERMISSION_DENIED . '?description', '您没有执行此操作的权限。可能因为你不属于此操作要求的一个受限制的范围。');

str(EXCEPTION_PERMISSION_ON_VIEW_NOT_GRANTED, '你没有在此视图执行此操作的权限');
str(EXCEPTION_PERMISSION_ON_VIEW_NOT_GRANTED . '?description', '你没有在此视图执行此操作的权限。可能此视图访问是受限的。');


// Exceptions related to date

str(EXCEPTION_TIME_PERIOD_NOT_VALID, '你不能选择一个比开始日期早的结束日期。');
str(EXCEPTION_TIME_PERIOD_NOT_VALID . '?description', '请修改开始或结束日期。'); 

str(EXCEPTION_TIME_NOT_IN_PERIOD, '你不能选择不在父日期段的结束日期。');
str(EXCEPTION_TIME_NOT_IN_PERIOD . '?description', '请修改开始或结束日期。');


// Exceptions related to users

str(EXCEPTION_USER_AUTHENTICATION_NEEDED, '需要登录');
str(EXCEPTION_USER_AUTHENTICATION_NEEDED . '?description', '你必须先通过认证再访问该应用。请登录你的账户。');

str(EXCEPTION_USER_NOT_FOUND, '未找到用户');
str(EXCEPTION_USER_NOT_FOUND . '?description', '未找到用户。可能因为你的账户没有访问该应用的权限。');


// Exceptions related to variables

str(EXCEPTION_VARIABLE_GROUP_NOT_FOUND, '未找到变量组');
str(EXCEPTION_VARIABLE_GROUP_NOT_FOUND . '?description', '未找到该变量组。');

str(EXCEPTION_VARIABLE_INTERVAL_NOT_VALID, '给出的第一个值大于第二个值。');
str(EXCEPTION_VARIABLE_INTERVAL_NOT_VALID . '?description', '你必须输入第一个值小于第二个值。');

str(EXCEPTION_VARIABLE_NOT_FOUND, '未找到变量');
str(EXCEPTION_VARIABLE_NOT_FOUND . '?description', '虽然是必需值，但是变量未声明或没有值。');

str(EXCEPTION_VARIABLE_PATH_NOT_VALID, '变量路径无效');
str(EXCEPTION_VARIABLE_PATH_NOT_VALID . '?description', '变量路径无效。可能因为访问该变量的路径不存在。');

str(EXCEPTION_VARIABLE_CHARACTER_NOT_ALLOWED, '该变量包含不允许的字符');
str(EXCEPTION_VARIABLE_CHARACTER_NOT_ALLOWED . '?description', '该变量包含不允许的字符.你必须删除这些字符。');

// Exceptions related to version control

str(EXCEPTION_VERSION_CONTROL_COMMAND_FAILED, '版本控制命令失败');
str(EXCEPTION_VERSION_CONTROL_COMMAND_FAILED . '?description', '版本控制命令失败。可能因为处罚一个subversion命令式发生错误。');


// Exceptions related to views

str(EXCEPTION_VIEW_SERVER_CACHE_NOT_AVAILABLE, '服务器端缓存不可用');
str(EXCEPTION_VIEW_SERVER_CACHE_NOT_AVAILABLE . '?description', '该视图的必需的服务器端缓存未找到、已经过期或未授权访问。');

str(EXCEPTION_VIEW_NOT_FOUND, '未找到视图');
str(EXCEPTION_VIEW_NOT_FOUND . '?description', '未找到视图。可能因为类、模型或视图的路径不存在。');

str(EXCEPTION_VIEW_PATH_NOT_VALID, '视图路径无效');
str(EXCEPTION_VIEW_PATH_NOT_VALID . '?description', '视图路径无效。可能因为你想渲染的页面不存在。');

?>
