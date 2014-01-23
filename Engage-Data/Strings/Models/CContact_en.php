<?php

// Define the preferences

pref
(
	'[Engage-Data]/CContact/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'contacts',
		STRING_NUMBER_SINGULAR => 'contact',
		STRING_CONSONANT => true
	)
);


//	String list

$this->setString(STRING_LIST, 'value', null, 'Value');
$this->setString(STRING_LIST, 'type', null, 'Type');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Opt-in');
$this->setString(STRING_LIST, 'isValid', null, 'Is valid?');
$this->setString(STRING_LIST, 'isChecked', null, 'Is checked?');
$this->setString(STRING_LIST, 'OptInEmail', null, 'Email');
$this->setString(STRING_LIST, 'optInCellPhone', null, 'Cellphone');


//

$this->setString(null, 'name', null, 'contact name');


// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individual ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), 'Individual ID:');

$this->setString(STRING_PROPERTY, 'isChecked', null, 'Is checked');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), 'Is checked:');

$this->setString(STRING_PROPERTY, 'isValid', null, 'Is valid');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), 'Is valid:');

$this->setString(STRING_PROPERTY, 'rank', null, 'Rank');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rank:');

$this->setString(STRING_PROPERTY, 'type', null, 'Type of contact');
$this->setString(STRING_PROPERTY, 'type', array('label'), 'Type of contact:');
$this->setString(STRING_PROPERTY, 'type', array('placeholder'), 'For instance \'Email\' or \'Social networks\'.');

$this->setString(STRING_PROPERTY, 'value', null, 'Value of contact');
$this->setString(STRING_PROPERTY, 'value', array('label'), 'Value:');
$this->setString(STRING_PROPERTY, 'value', array('placeholder'), 'Enter the value of contact.');

$this->setString(STRING_PROPERTY, 'items', null, 'items');
$this->setString(STRING_PROPERTY, 'items', array('label'), 'items :');
$this->setString(STRING_PROPERTY, 'items', array('placeholder'), 'items');

$this->setString(STRING_PROPERTY, 'name', null, 'Title');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Title :');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Catalogue title');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, 'Use this contact for notifications');

$this->setString(STRING_PROPERTY, 'cellphone', null, 'Cell');
$this->setString(STRING_PROPERTY, 'email', null, 'Email');
$this->setString(STRING_PROPERTY, 'fax', null, 'Fax');
$this->setString(STRING_PROPERTY, 'telephone', null, 'Phone');

$this->setString(STRING_PROPERTY, 'facebook', null, 'Facebook');
$this->setString(STRING_PROPERTY, 'foursquare', null, 'Foursquare');
$this->setString(STRING_PROPERTY, 'googlePlus', null, 'Google');
$this->setString(STRING_PROPERTY, 'instagram', null, 'Instagram');
$this->setString(STRING_PROPERTY, 'jiepang', null, 'Jiepang');
$this->setString(STRING_PROPERTY, 'kaixin', null, 'Kaixin');
$this->setString(STRING_PROPERTY, 'linkedIn', null, 'LinkedIn');
$this->setString(STRING_PROPERTY, 'orkut', null, 'Orkut');
$this->setString(STRING_PROPERTY, 'renren', null, 'Renren');
$this->setString(STRING_PROPERTY, 'tencentWeibo', null, 'Tencent Weibo');
$this->setString(STRING_PROPERTY, 'tumblr', null, 'Tumblr');
$this->setString(STRING_PROPERTY, 'twitter', null, 'Twitter');
$this->setString(STRING_PROPERTY, 'vkontakte', null, 'VKontakte');
$this->setString(STRING_PROPERTY, 'weibo', null, 'Weibo');


$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');


// Tags

$this->setString(null, 'optIn', array('tag'), 'Opt-in');
$this->setString(null, 'notValid', array('tag'), 'Not Valid');
$this->setString(null, 'notChecked', array('tag'), 'Not checked');
$this->setString(null, 'valid', array('tag'), 'Valid');

?>
