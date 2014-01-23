<?php

// Exceptions related to the database

str(EXCEPTION_DATA_CONNECT_FAILED, 'Connection to data failed');
str(EXCEPTION_DATA_CONNECT_FAILED . '?description', 'Connection to data failed. It might be because connection has been reset.');


// Exceptions related to objects 

str(EXCEPTION_DATA_OBJECT_GET_FAILED, 'Could not get one or more objects');
str(EXCEPTION_DATA_OBJECT_GET_FAILED . '?description', 'Could not get one or more objects. It might be because one or several tables do not exist.');

str(EXCEPTION_DATA_OBJECT_DELETE_FAILED, 'Could not delete an object');
str(EXCEPTION_DATA_OBJECT_DELETE_FAILED . '?description', 'Could not delete an object. It might be because the ID and Reference of this object do not exist.');

str(EXCEPTION_DATA_OBJECT_SET_FAILED, 'Could not set an object');
str(EXCEPTION_DATA_OBJECT_SET_FAILED . '?description', 'Could not set an object. It might be because an error has occurred during the deletion on the server side.');

str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN, 'Loading this child object is forbidden');
str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN .'?description', 'Loading this child object is forbidden. It might be because the parent element need to be loaded before loading this child object.');

str(EXCEPTION_DATA_OBJECT_DELETED, 'This object has been deleted');
str(EXCEPTION_DATA_OBJECT_DELETED .'?description', 'This object has been deleted. It might be because this object you are trying to access does not exist anymore.');
?>
