<?php

// Exceptions related to the database

str(EXCEPTION_DATA_CONNECT_FAILED, 'Echec de connexion à Data');
str(EXCEPTION_DATA_CONNECT_FAILED . '?description', 'Echec de connexion à Data. Il est possible que votre connexion ait été réinitialisée.');


// Exceptions related to objects 

str(EXCEPTION_DATA_OBJECT_GET_FAILED, 'Echec d\'accès aux objets.');
str(EXCEPTION_DATA_OBJECT_GET_FAILED . '?description', 'Echec d\'accès aux objets. Il est possible qu\'une ou plusieurs tables ne soit(ent) pas accessible(s).');

str(EXCEPTION_DATA_OBJECT_DELETE_FAILED, 'Suppression impossible');
str(EXCEPTION_DATA_OBJECT_DELETE_FAILED . '?description', 'Suppression impossible. L\'enregistrement est peut-être supprimé ou inexistant.');

str(EXCEPTION_DATA_OBJECT_SET_FAILED, 'Enregistrement impossible');
str(EXCEPTION_DATA_OBJECT_SET_FAILED . '?description', 'Enregistrement impossible. L\'enregistrement est peut-être inexistant ou inaccessible.');

str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN, 'Accès à la donnée détaillée interdite');
str(EXCEPTION_DATA_OBJECT_CHILD_LOAD_FORBIDDEN .'?description', 'Accès à la donnée détaillée interdite. L\'accès à la donnée parente est requise.');

str(EXCEPTION_DATA_OBJECT_DELETED, 'Enregistrement supprimé');
str(EXCEPTION_DATA_OBJECT_DELETED .'?description', 'Enregistrement supprimé. L\'enregistrement est peut-être inexistant ou inaccessible.');

?>
