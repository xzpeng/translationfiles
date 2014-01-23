<?php

// Define the preferences

pref
(
	'[Engage-Reward]/CReward/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'rewards',
		STRING_NUMBER_SINGULAR => 'reward',
		STRING_VOWELL => false
	)
);


// Actions

str(ACTION_CREATE . 'CReward', 'Create a reward');

str(ACTION_DELETE . 'CReward', 'Delete rewards');
str(ACTION_DELETE . 'CReward?object', 'Delete the reward');
str(ACTION_DELETE . 'CReward?prompt&message', 'You are about to remove this reward from the program. Click Ok to confirm.');
str(ACTION_DELETE . 'CReward?prompt&title', 'Are you sure?');

str(ACTION_DISABLE . 'CReward?object', 'Disable the reward');
str(ACTION_EDIT . 'CReward', 'Edit rewards');
str(ACTION_EDIT . 'CReward?object', 'Edit the reward');
str(ACTION_ENABLE . 'CReward?object', 'Enable the reward');
str(ACTION_FIND . 'CReward', 'Find rewards');

str(ACTION_GENERATE_REPORT . 'CReward?object', 'Create a report');

str(ACTION_HOLD . 'CReward?object', 'Hold the reward');
str(ACTION_HOLD . 'CReward?prompt&message', 'Are you sure you want to hold the reward? Click Ok to confirm.');
str(ACTION_HOLD . 'CReward?prompt&title', 'Hold the reward');

str(ACTION_INSERT . 'CReward', 'Create a reward');
str(ACTION_LIST . 'CReward', 'List rewards');
str(ACTION_MONITOR . 'CReward', 'Monitor rewards');
str(ACTION_MONITOR . 'CReward?object', 'Monitor the reward');

str(ACTION_RESTORE . 'CReward?object', 'Restore the reward');

str(ACTION_RELEASE . 'CReward?object', 'Release the reward');
str(ACTION_RELEASE . 'CReward?prompt&message', 'Are you sure you want to release the reward? Click Ok to confirm.');
str(ACTION_RELEASE . 'CReward?prompt&title', 'Release the reward');

str(ACTION_SAVE . 'CReward?object', 'Save the reward');
str(ACTION_VIEW . 'CReward?object', 'Display the reward');
// str(ACTION_ACQUIRE .'CReward?object', 'Acquire the reward');


// Release / Hold action

str('CReward.property.hold.action', 'Hold the reward');
str('CReward.property.release.action', 'Release the reward');


// Indicators

str('CReward.indicator.nbAcquirers', 'Number of acquirers');
str('CReward.indicator.nbAcquirers?values', 'Number of acquirers');
str('CReward.indicator.nbAcquirers?plural', 'Number of acquirers');

str('CReward.indicator.nbAcquisitions', 'Number of acquisitions');
str('CReward.indicator.nbAcquisitions?values', 'Number of acquisitions');
str('CReward.indicator.nbAcquisitions?plural', 'Number of acquisitions');

str('CReward.indicator.category.meter', 'Count');
str('CReward.indicator.category.users', 'Individuals');


// Enums

str('CReward.enum.type.badge', 'Badge');
str('CReward.enum.type.product', 'Product');
str('CReward.enum.type.service', 'Service');
str('CReward.enum.type.voucher', 'Voucher');


// Filters

str('CReward.filter.name', 'The name:');
str('CReward.filter.type','The type is:');
str('CReward.filter.price', 'The price equals:');
str('CReward.filter.isQuantityLimited','Is is limited?');


// Geolocalized objects

str('CReward.geolocalized.purchases', 'Purchases');
str('CReward.geolocalized.individuals','Individuals');


// Object

str('CReward', 'Reward');
str('CReward?current', 'Current reward');
str('CReward?filter', 'Filter rewards');
str('CReward?manage', 'Manage the reward');
str('CReward?plural', 'Rewards');
str('CReward?plural&short', 'Rewards');
str('CReward?short', 'Reward');
str('CReward?isReleased', 'The reward is live!');
str('CReward?isReleased&description', 'This reward has been released, which means that it has gone public. In case you need to modify it, we recommend to wait until peak times are behind, put the reward on hold and then only start editing it.');
str('CReward?isNotReleased', 'The reward is on hold');
str('CReward?isNotReleased&description', 'This reward has not been released yet, which means that it can only be seen by administrators.');


// Properties

str('CReward.property.acquisitions', 'Acquisitions');

str('CReward.property.color?label', 'Color:');

str('CReward.property.description?help&description', 'Tell us what the reward is about.');
str('CReward.property.description?label', 'Description:');
str('CReward.property.description?placeholder', 'Describe the reward');

str('CReward.property.frequencyOfAcquisition?help&description', 'For instance, if you set the rate of acquisition to once every week, members of your program will only be allowed to acquire this reward once every month.');
str('CReward.property.frequencyOfAcquisition?help&title', 'It won\'t be possible to acquire this reward too often');
str('CReward.property.frequencyOfAcquisition?label', '');
str('CReward.property.frequencyOfAcquisition?placeholder', '1');

str('CReward.property.isAcquisitionLimited?label', 'The reward can be acquired once every:');
str('CReward.property.isAcquisitionLimited', ' ');

str('CReward.property.initialQuantity?help&description', 'How many units of this reward do you have in stock?');
str('CReward.property.initialQuantity?label', '');
str('CReward.property.initialQuantity?placeholder', 'Number of rewards in stock');

str('CReward.property.isQuantityLimited', 'A limited number');
str('CReward.property.isQuantityLimited?label', 'How many items in stock?');

str('CReward.property.photo?label', 'Photo:');
str('CReward.property.photo?help&description', 'People prefer when things have a memorable face. You should upload a photo to make your reward more unique!');
str('CReward.property.photo?help&title', 'Upload a photo');

str('CReward.property.price?help&description', 'Enter the price (in points) at which members will be allowed to acquire the reward.');
str('CReward.property.price?help&title', 'How many points does it cost?');
str('CReward.property.price?label', 'Price:');
str('CReward.property.price?placeholder', '0');
str('CReward.property.price?suffix', '%1');
str('CReward.property.price.edit?suffix', 'Point(s)');

str('CReward.property.maxAcquisitionsPerIndividual?help&description', 'For instance, set it to 10 if you want individuals to be able to acquire this reward no more than 10 times. Leave it empty if you don\'t want to set any particular limitation.');
str('CReward.property.maxAcquisitionsPerIndividual?help&title', 'How many times can the reward be acquired by and individual?');
str('CReward.property.maxAcquisitionsPerIndividual?label', 'Maximum number of acquisitions per individual:');
str('CReward.property.maxAcquisitionsPerIndividual?placeholder', '10');

str('CReward.property.name?help&description', 'For instance \'A 2-weeks stay in the Maldives\' or \'Tickets to see Lady Gaga live\'.');
str('CReward.property.name?label', 'Name:');
str('CReward.property.name?placeholder', 'Give a name to the reward');

str('CReward.property.rewardCategoryId?help&description', 'Start typing the name of a category. If it exists, it will appear in a list. Otherwise you will be able to create it. ');
str('CReward.property.rewardCategoryId?label', 'Category:');
str('CReward.property.rewardCategoryId?placeholder', 'Associate category with the reward');

str('CReward.property.rewardTags?help&description', 'Start typing the name of a tag. If it exists, it will appear in a list. Otherwise you will be able to create it.');
str('CReward.property.rewardTags?label', 'Tags:');
str('CReward.property.rewardTags?placeholder', 'Associate tags with the reward');

str('CReward.property.type?help&description', 'What kind of reward is it?');
str('CReward.property.type?label', 'Type of reward:');
str('CReward.property.type?placeholder', 'A reward can either be a badge, a voucher, a product or a service.');


// Sections

str('CReward.section.reward', 'Reward');
str('CReward.section.reward?description', 'Describe the reward');

str('CReward.section.reward.activity.chart.title', 'Number of acquirers vs. number of acquisitions');
str('CReward.section.reward.about.price', 'Price');
str('CReward.section.reward.about.label.about', 'About the reward');
str('CReward.section.reward.about.label.conditions', 'Conditions');
str('CReward.section.reward.about.label.description', 'Description:');
str('CReward.section.reward.about.label.level', 'Can be acquired by:');
str('CReward.section.reward.about.label.limitation', 'Limitation:');
str('CReward.section.reward.about.label.name', 'Name:');
str('CReward.section.reward.about.label.type', 'Type:');
str('CReward.section.reward.activity.nbAcquisitions', 'Acquisitions');
str('CReward.section.reward.activity.nbAcquirers', 'Individuals');
str('CReward.section.reward.activity.inStock', 'Items in stock');
str('CReward.section.reward.activity.nbPoints', 'NQ points to acquire');


str('CReward.section.tiers', 'Tiers');
str('CReward.section.tiers?description', 'Associate the reward with tiers');

str('CReward.section.listRewards', 'List of rewards');
str('CReward.section.activity', 'Activity');
str('CReward.section.lastRewards', 'Last rewards');
str('CReward.section.tags', 'Tags & categories');


// List

str('CReward.range', 'Range');
str('CReward.list.results', 'Rewards list results:');
str('CReward.RemainInStock', 'Remain In Stock:');
str('CReward.price', 'Price:');
str('CReward.InStock', 'Is Available');
str('CReward.OutOfStock', 'Out of stock');
str('CReward.unlimited', 'Unlimited');
str('CReward.noElementResult', 'No reward has been found.');
str('CReward.noElementResult?text', 'You can create reward on Rewards section.');


// Tags

str('CReward.tags?label', 'Tags');


// Separators

str('CReward.separator.about', 'About the reward');
str('CReward.separator.restrictions', 'Restrictions');
str('CReward.separator.select', 'Pick one or more rewards');
str('CReward.separator.stock', 'Stock');


//

str('CRewardCategory.selected', 'Selected category:');

?>
