<?php

//

str(LOOP_AND, 'And', true);
str(LOOP_AND . '?filter', 'All conditions', true);

str(LOOP_OR, 'Or', true);
str(LOOP_OR . '?filter', 'Any condition', true);

str(LOOP_XOR, 'Xor', true);
str(LOOP_XOR . '?filter', 'Any condition', true);

str(LOOP_EXCEPT, 'Minus', true);
str(LOOP_EXCEPT . '?filter', 'Any condition', true);


//

str(BETWEEN, 'Is between');
str(EQUAL, 'Is equal to');
str(GREATER, 'Is greater than');
str(GREATER_EQUAL, 'Is greater than / equal to');
str(IN, 'Is in');
str(IS_NOT_NULL, 'Is not empty');
str(IS_NULL, 'Is empty');
str(LIKE, 'Contains');
str(LOWER, 'Is lower than');
str(LOWER_EQUAL, 'Is lower than / equal to');
str(NOT_BETWEEN, 'Not between');
str(NOT_EQUAL, 'Is different from');
str(NOT_IN, 'Is not in');
str(NOT_LIKE, 'Does not contain');

?>
