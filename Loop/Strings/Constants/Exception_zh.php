<?php

// Exceptions related to the application

str(EXCEPTION_APPLICATION_BREAK, '此应用已停止');
str(EXCEPTION_APPLICATION_BREAK . '?description', '一个已设置的断点导致此应用被停止。');

str(EXCEPTION_APPLICATION_ENVIRONMENT_NOT_DEFINED, '此应用的环境未定义');
str(EXCEPTION_APPLICATION_ENVIRONMENT_NOT_DEFINED . '?description', '');

str(EXCEPTION_APPLICATION_ERROR_INTERNAL, '发生内部错误');
str(EXCEPTION_APPLICATION_ERROR_INTERNAL . '?description', 'The application has encountered an internal error. Our team is working on solving this problem. Thanks for being patient and try again later!');

str(EXCEPTION_APPLICATION_ERROR_UNKNOWN, 'An unknown error has occurred');
str(EXCEPTION_APPLICATION_ERROR_UNKNOWN . '?description', '');


// Exceptions related to array

str(EXCEPTION_ARRAY_EXPECTED, 'An array was expected');
str(EXCEPTION_ARRAY_EXPECTED . '?description', 'An array was expected, another of variables given');

str(EXCEPTION_ARRAY_KEY_EXPECTED, 'A key in array is missing');
str(EXCEPTION_ARRAY_KEY_EXPECTED . '?description', 'A key in array is missing');


// Exceptions related to APIs

str(EXCEPTION_API_ARGUMENT_NOT_FOUND, 'An argument is missing');
str(EXCEPTION_API_ARGUMENT_NOT_FOUND . '?description', 'A mandatory argument is missing. Please refer to the documentation for this API and make sure that all required arguments are transferred.');

str(EXCEPTION_API_ARGUMENT_NOT_VALID, 'The value of the argument is not valid');
str(EXCEPTION_API_ARGUMENT_NOT_VALID . '?description', 'The value of the argument has been checked and deemed invalid. Check the syntax and make sure that it matches the expected pattern.');

str(EXCEPTION_API_NOT_FOUND, 'The API does not exist');
str(EXCEPTION_API_NOT_FOUND . '?description', 'The API you are trying to call could not be found. Make sure the name of the API is referenced and correctly spelled.');

str(EXCEPTION_API_RESULT_NOT_VALID, 'The result of the API is not valid');
str(EXCEPTION_API_RESULT_NOT_VALID . '?description', 'The application is not able to interpret the result of the API. It might be because an unexpected error has occurred during the API call.');


// Exceptions related to database

str(EXCEPTION_DATABASE_CONNECT_FAILED, 'Connection to the database failed');
str(EXCEPTION_DATABASE_CONNECT_FAILED . '?description', 'Connecting to the database could not be completed successfully. Check your credentials and retry (database name, login, password, etc).');

str(EXCEPTION_DATABASE_DISCONNECT_FAILED, 'Disconnection from the database failed');
str(EXCEPTION_DATABASE_DISCONNECT_FAILED . '?description', 'Disconnecting from the database could not be completed successfully. It might be because the connection has been lost.');

str(EXCEPTION_DATABASE_DRIVER_NOT_FOUND, 'The database driver could not be found');
str(EXCEPTION_DATABASE_DRIVER_NOT_FOUND . '?description', 'The driver used to connect, parse and edit the database does not exist. Check that you have defined a valid database driver and retry.');

str(EXCEPTION_DATABASE_QUERY_FAILED, 'The query has failed');
str(EXCEPTION_DATABASE_QUERY_FAILED . '?description', 'A database query has been executed but did not succeed. Check the syntax of your query and retry.');

str(EXCEPTION_DATABASE_QUERY_IS_EMPTY, 'The query is empty');
str(EXCEPTION_DATABASE_QUERY_IS_EMPTY . '?description', 'The database query has no content and can therefore not be executed. You can only execute non-empty database queries.');

str(EXCEPTION_DATABASE_SELECT_FAILED, 'The database could not be found or is not granted');
str(EXCEPTION_DATABASE_SELECT_FAILED . '?description', 'The selected database does not exist or access could not be granted. Check that you have defined a valid database name and that your user has the authorization to connect to it.');


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
