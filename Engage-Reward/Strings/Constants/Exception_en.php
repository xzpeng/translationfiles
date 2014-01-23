<?php

// Exceptions related to programs

str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED, 'The individual could not be enrolled once again into the program');
str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED . '?description', 'The individual could not be enrolled into the program. It might be because the individual has already been enrolled into the program.');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED, 'The individual could not be enrolled into the program');
str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED . '?description', 'The individual could not be enrolled into the program. It might be because the program enrollment does not support this individual ID.');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ENOUGH_POINTS, 'Not enough points');


// Exceptions related to rewards

str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST, 'The reward cannot be acquired');
str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST . '?description', 'Don\'t be so hasty! Apparently you\'re trying to acquire the same reward too quickly. Take a break, and retry later.');

str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER, 'The reward cannot be acquired');
str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER . '?description', 'The reward you are trying to acquire is not associated to the tier you belong to.');

str(EXCEPTION_REWARD_OUT_OF_STOCK, 'The reward cannot be acquired');
str(EXCEPTION_REWARD_OUT_OF_STOCK . '?description', 'We\'re sorry, the reward you are trying has been so popular that it is no longer available. Come back later, we may have renewed our stock.');

str(EXCEPTION_REWARD_PRICE_TOO_HIGH, 'The reward cannot be acquired');
str(EXCEPTION_REWARD_PRICE_TOO_HIGH . '?description', 'We\'re sorry, you don\'t have enough points to acquire this reward. Come back when you\'ve earned more!'); 

str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS, 'The reward cannot be acquired');
str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS . '?description', 'It looks like you like this reward so much that you have reached the maximum amount authorized. Sorry, but leave some for the rest of the world!');


// Exceptions related to social networks

str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL, 'The message can not be posted');
str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL . '?description', 'It looks like, the attempt to post a message on the social network has failed.');


// Exceptions related to tags

str(EXCEPTION_TAG_NAME_NOT_AVAILABLE, 'The tag is no longer available');
str(EXCEPTION_TAG_NAME_NOT_AVAILABLE . '?description', 'You have chosen a name for this tag that has already been assigned to another tag. Pick another name!');

str(EXCEPTION_TAG_NAME_VALUE_REQUIRED, 'The tag name requires a value');
str(EXCEPTION_TAG_NAME_VALUE_REQUIRED . '?description', 'One or more tag names have required values, but they have to be filled.');


// Exceptions related to categories

str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED, 'The category name requires a value');
str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED . '?description', 'One or more categories names have required values, but they have to be filled.');

?>
