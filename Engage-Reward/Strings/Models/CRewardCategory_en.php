<?php

// Actions

str(ACTION_CREATE . 'CRewardCategory', 'Create a category');

str(ACTION_DELETE . 'CRewardCategory?object', 'Delete the category');
str(ACTION_DELETE . 'CRewardCategory?prompt&message', 'You are about to remove this category from your program. Click Ok to confirm.');
str(ACTION_DELETE . 'CRewardCategory?prompt&title', 'Are you sure?');

str(ACTION_EDIT . 'CRewardCategory?object', 'Edit the category');

str(ACTION_GENERATE_REPORT . 'CRewardCategory?object', 'Create a report');


// Indicators

str('CRewardCategory.indicator.score', 'Score');
str('CRewardCategory.indicator.score?plural', 'Score');

str('CRewardCategory.indicator.category.meter', 'Score');


// Filters

str('CRewardCategory.filter.name', 'The name:');


// Object

str('CRewardCategory', 'Category');
str('CRewardCategory?current', 'Current category');
str('CRewardCategory?filter', 'Filter categories');
str('CRewardCategory?manage&plural', 'Manage categories');
str('CRewardCategory?plural', 'Categories');
str('CRewardCategory?plural&short', 'Categories');
str('CRewardCategory?short', 'Category');


// Properties

str('CRewardCategory.property.description?help&description', 'Give a few description of the category');
str('CRewardCategory.property.description?label', 'Description:');
str('CRewardCategory.property.description?placeholder', 'How would you describe the category?');

str('CRewardCategory.property.name?help&description', 'For instance \'Food\', \'Personalized\', \'Ecologic\'');
str('CRewardCategory.property.name?label', 'Name:');
str('CRewardCategory.property.name?placeholder', 'Give a name to your category');

str('CRewardCategory.property.parentRewardCategoryId?help&description', 'Select the parent category');
str('CRewardCategory.property.parentRewardCategoryId?label', 'Parent category:');
str('CRewardCategory.property.parentRewardCategoryId?placeholder', 'What will be the parent of this category?');


// Sections

str('CRewardCategory.section.rewardCategory', 'Category');
str('CRewardCategory.section.rewardCategory?description', 'Describe your reward category');


//

str('CRewardCategory.selected', 'Selected category:');

?>
