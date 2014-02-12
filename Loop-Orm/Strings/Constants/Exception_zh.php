<?php

str(EXCEPTION_OBJECT_ALREADY_LOCKED, '该对象正在被其他用户编辑');
str(EXCEPTION_OBJECT_ALREADY_LOCKED . '?description', '该对象正在被其他用户编辑');

str(EXCEPTION_OBJECT_CONVERT_PROPERTY_TO_OBJECT_FAILED, '该属性不能转为对象');
str(EXCEPTION_OBJECT_CONVERT_PROPERTY_TO_OBJECT_FAILED . '?description', '属性转为对象失败，预期的对象看似不存在。确保属性Converting the property into an object has failed because the kind of object expected does not seem to exist. Make sure that the object referenced by the property is valid and retry.');

str(EXCEPTION_OBJECT_FILE_UPLOAD_NO_FILE, 'No file was sent for upload');
str(EXCEPTION_OBJECT_FILE_UPLOAD_NO_FILE . '?description', 'No file was sent for upload. It might be because no file has been chosen for the upload.');

str(EXCEPTION_OBJECT_FILE_EXTENSION_NOT_ALLOWED, 'The file extension is not allowed');
str(EXCEPTION_OBJECT_FILE_EXTENSION_NOT_ALLOWED . '?description', null);

str(EXCEPTION_OBJECT_FIX_LOCALIZATIONS_FAILED, 'Localizations for this object cannot be fixed');
str(EXCEPTION_OBJECT_FIX_LOCALIZATIONS_FAILED . '?description', 'Some localizations for this object were deemed as missing and could not be fixed.');

str(EXCEPTION_OBJECT_FUNCTION_NOT_FOUND, 'The method could not be found');
str(EXCEPTION_OBJECT_FUNCTION_NOT_FOUND . '?description', 'A method was called on an object and could not be found.');

str(EXCEPTION_OBJECT_IN_COMPOSITION_COULD_NOT_BE_LOADED, 'One object in composition could not be loaded.');
str(EXCEPTION_OBJECT_IN_COMPOSITION_COULD_NOT_BE_LOADED . '?description', 'Load of all objects in composition failed with one object which could not be loaded properly.');

str(EXCEPTION_OBJECT_NOT_COMPATIBLE, 'The object is not compatible');
str(EXCEPTION_OBJECT_NOT_COMPATIBLE . '?description', 'Despite the object being valid, it was not made to perform what you are trying to achieve.');

str(EXCEPTION_OBJECT_NOT_FIXABLE, 'Object is not fixable');
str(EXCEPTION_OBJECT_NOT_FIXABLE . '?description', 'Object is not fixable.');

str(EXCEPTION_OBJECT_NOT_FOUND, 'The object could not be found');
str(EXCEPTION_OBJECT_NOT_FOUND . '?description', 'One or more objects could not be found in the database. It might be because their ID and reference are invalid or the object has not been stored yet.');

str(EXCEPTION_OBJECT_NOT_LOADED, 'The object is not loaded');
str(EXCEPTION_OBJECT_NOT_LOADED . '?description', 'The object is not loaded. It might be because the object is unknown.');

str(EXCEPTION_OBJECT_PARENT_NOT_FOUND, 'The parent could not be found');
str(EXCEPTION_OBJECT_PARENT_NOT_FOUND . '?description', 'The parent might not be defined.');

str(EXCEPTION_OBJECT_PROPERTY_MODEL_NOT_FOUND, 'The model cannot be found');
str(EXCEPTION_OBJECT_PROPERTY_MODEL_NOT_FOUND . '?description', 'The model cannot be found. It might be because the property does not exist into the database table.');

str(EXCEPTION_OBJECT_PROPERTY_NOT_FOUND, 'Unknown object property');
str(EXCEPTION_OBJECT_PROPERTY_NOT_FOUND . '?description', 'The object property could not be found. Check the spelling of the property and try again.');

str(EXCEPTION_OBJECT_PROPERTY_VALUE_REQUIRED, 'The object property requires a value');
str(EXCEPTION_OBJECT_PROPERTY_VALUE_REQUIRED . '?description', 'One or more object properties have required values, but they have to be filled.');

str(EXCEPTION_OBJECT_PROPERTY_VALUE_NOT_VALID, 'The value is not valid');
str(EXCEPTION_OBJECT_PROPERTY_VALUE_NOT_VALID . '?description', 'The value you have set for the object property is not valid. Check the syntax and try again.');

str(EXCEPTION_OBJECT_RECURSIVE_ASSOCIATION_FORBIDDEN, 'Recursive associations are not authorized');
str(EXCEPTION_OBJECT_RECURSIVE_ASSOCIATION_FORBIDDEN . '?description', 'You have tried to associate an object with itself, which is strictly prohibited. Pick another object!');

str(EXCEPTION_OBJECT_RULE_NOT_FOUND .'?description', 'A rule doesn\'t exist in object rules or category doesn\'t exist.');

str(EXCEPTION_OBJECT_TOO_MANY_FOUND, 'Too many objects were found');
str(EXCEPTION_OBJECT_TOO_MANY_FOUND . '?description', 'Too many objects were found. It might be because many results have been found for this request.');

str(EXCEPTION_OBJECT_NOT_SAME_CLASS, 'The objects are belonging to two different classes');
str(EXCEPTION_OBJECT_NOT_SAME_CLASS . '?description', 'The objects are belonging to two different classes. It\'s impossible to compare these objects');

?>
