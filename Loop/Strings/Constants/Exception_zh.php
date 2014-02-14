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

str(EXCEPTION_FACTORY_NOT_FOUND, 'The factory could not be found');
str(EXCEPTION_FACTORY_NOT_FOUND . '?description', 'The factory you are trying to get does not seem to exist. Make sure the factory exists and retry.');


// Exceptions related to features

str(EXCEPTION_FEATURE_NOT_FOUND, 'The feature could not be found.');
str(EXCEPTION_FEATURE_NOT_FOUND . '?description', 'The feature you are trying to get does not seem to exist. Make sure the feature exists and retry.');
str(EXCEPTION_FEATURE_VARIABLE_NOT_FOUND, 'The variable needed could not be found for this feature.');
str(EXCEPTION_FEATURE_VARIABLE_NOT_FOUND . '?description', 'The variable for a feature you are trying to get does not seem to exist. Make sure the variable for this feature exists and retry.');


//Exceptions related to files

str(EXCEPTION_FILE_NOT_FOUND, 'The file could does not exist');
str(EXCEPTION_FILE_NOT_FOUND . '?description', 'The file could not be found at the given location. Make sure the file exists before trying to access it.');


// Exceptions related to functions

str(EXCEPTION_FUNCTION_NOT_FOUND, 'The function could not be found');
str(EXCEPTION_FUNCTION_NOT_FOUND . '?description', 'The function you are trying to call has not been defined. Make sure the name is correctly spelled and retry.');


// Exceptions related to languages

str(EXCEPTION_LANGUAGE_NOT_SUPPORTED, 'The language is not supported');
str(EXCEPTION_LANGUAGE_NOT_SUPPORTED . '?description', 'The language you are trying to activate is not supported. Try switching to another, available language.');


// Exceptions related to models

str(EXCEPTION_MODEL_NOT_FOUND, 'The model could not be found');
str(EXCEPTION_MODEL_NOT_FOUND . '?description', 'THe model you are trying to manipulate does not exist. Make sure its extension and path are valid and retry.');


// Exceptions related to rights

str(EXCEPTION_PERMISSION_ON_CLASS_NOT_GRANTED, 'You don\'t have the right to perform this action on the class');
str(EXCEPTION_PERMISSION_ON_CLASS_NOT_GRANTED . '?description', 'You don\'t have the right to perform this action on the class. It might be because the class access is restricted.');

str(EXCEPTION_PERMISSION_DENIED, 'You don\'t have the right to perform this action');
str(EXCEPTION_PERMISSION_DENIED . '?description', 'You don\'t have the right to perform this action. It might be because you don\'t belong to a restricted scope this action required.');

str(EXCEPTION_PERMISSION_ON_VIEW_NOT_GRANTED, 'You don\'t have the right to perform this action on the view');
str(EXCEPTION_PERMISSION_ON_VIEW_NOT_GRANTED . '?description', 'You don\'t have the right to perform this action on the view. It might be because the view access is restricted.');


// Exceptions related to date

str(EXCEPTION_TIME_PERIOD_NOT_VALID, 'You can\'t choose an end date more recent than the start date.');
str(EXCEPTION_TIME_PERIOD_NOT_VALID . '?description', 'Please modify the start or end date.'); 

str(EXCEPTION_TIME_NOT_IN_PERIOD, 'You can\'t choose an end date not in parent period.');
str(EXCEPTION_TIME_NOT_IN_PERIOD . '?description', 'Please modify the start or end date.');


// Exceptions related to users

str(EXCEPTION_USER_AUTHENTICATION_NEEDED, 'Sign-in required');
str(EXCEPTION_USER_AUTHENTICATION_NEEDED . '?description', 'You must be authenticated in order to access the application. Please sign into your user account.');

str(EXCEPTION_USER_NOT_FOUND, 'The user could not be found');
str(EXCEPTION_USER_NOT_FOUND . '?description', 'The user could not be found. It might be because your account does not have the right to access to the application.');


// Exceptions related to variables

str(EXCEPTION_VARIABLE_GROUP_NOT_FOUND, 'The variable group could not be found');
str(EXCEPTION_VARIABLE_GROUP_NOT_FOUND . '?description', 'The variable group could not be found.');

str(EXCEPTION_VARIABLE_INTERVAL_NOT_VALID, 'The first value given is greater than the second value');
str(EXCEPTION_VARIABLE_INTERVAL_NOT_VALID . '?description', 'You must enter a first value lower than second value.');

str(EXCEPTION_VARIABLE_NOT_FOUND, 'The variable could not be found');
str(EXCEPTION_VARIABLE_NOT_FOUND . '?description', 'The variable was not declared or had no value despite being required.');

str(EXCEPTION_VARIABLE_PATH_NOT_VALID, 'The variable path is not valid');
str(EXCEPTION_VARIABLE_PATH_NOT_VALID . '?description', 'The variable path is not valid. It might be because the path to access to this variable does not exist.');

str(EXCEPTION_VARIABLE_CHARACTER_NOT_ALLOWED, 'The variable contain a not allowed character');
str(EXCEPTION_VARIABLE_CHARACTER_NOT_ALLOWED . '?description', 'The variable contain a not allowed character. You must remove this character.');

// Exceptions related to version control

str(EXCEPTION_VERSION_CONTROL_COMMAND_FAILED, 'The version control command has failed');
str(EXCEPTION_VERSION_CONTROL_COMMAND_FAILED . '?description', 'The version control command has failed. It might be because an error has occured when triggered a subversion command.');


// Exceptions related to views

str(EXCEPTION_VIEW_SERVER_CACHE_NOT_AVAILABLE, 'Server-side cache not available');
str(EXCEPTION_VIEW_SERVER_CACHE_NOT_AVAILABLE . '?description', 'Server-side cache for this view is required but could either not be found, has expired or was not granted access.');

str(EXCEPTION_VIEW_NOT_FOUND, 'The view could not be found');
str(EXCEPTION_VIEW_NOT_FOUND . '?description', 'The view could not be found. It might be because the path to class, model or view does not exist.');

str(EXCEPTION_VIEW_PATH_NOT_VALID, 'The view path is not valid');
str(EXCEPTION_VIEW_PATH_NOT_VALID . '?description', 'The view path is not valid. It might be because the page you\'re trying to rendered does not exist.');

?>
