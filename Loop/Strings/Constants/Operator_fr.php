<?php

str(LOOP_AND, 'Et', true);
str(LOOP_AND . '?filter', 'Toutes les conditions', true);

str(LOOP_OR, 'Ou', true);
str(LOOP_OR . '?filter', 'N\'importe quelles conditions', true);

str(LOOP_XOR, 'Ou (excl)', true);
str(LOOP_XOR . '?filter', 'N\'importe quelles conditions', true);

str(LOOP_EXCEPT, 'Moins', true);
str(LOOP_EXCEPT . '?filter', 'N\'importe quelles conditions', true);

str(BETWEEN, 'Compris entre');
str(EQUAL, 'Egal à');
str(GREATER, 'Plus grand que');
str(GREATER_EQUAL, str(GREATER) . ' / ' . str(EQUAL));
str(IN, 'Dans');
str(IS_NOT_NULL, 'N\'est pas vide');
str(IS_NULL, 'Est vide');
str(LIKE, 'Contient');
str(LOWER, 'Plus petit que');
str(LOWER_EQUAL, str(LOWER) . ' / ' . str(EQUAL));
str(NOT_BETWEEN, 'N\'est pas compris entre');
str(NOT_EQUAL, 'Différent de');
str(NOT_IN, 'N\'est pas dans');
str(NOT_LIKE, 'Ne contient pas');

?>
