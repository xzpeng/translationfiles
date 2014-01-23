<?php

// Define the preferences

pref
(
	'[Engage-Data]/CContact/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'contacts',
		STRING_NUMBER_SINGULAR => 'contact',
		STRING_CONSONANT => true
	)
); 


//	String list

$this->setString(STRING_LIST, 'value', null, 'Valeur');
$this->setString(STRING_LIST, 'type', null, 'Type');
$this->setString(STRING_LIST, 'isNotificationChannel', null, 'Est opt-in ?');
$this->setString(STRING_LIST, 'isValid', null, 'Est valid ?');
$this->setString(STRING_LIST, 'isChecked', null, 'A été vérifié ?');
$this->setString(STRING_LIST, 'OptInEmail', null, 'Email');
$this->setString(STRING_LIST, 'optInCellPhone', null, 'Mobile');


//

$this->setString(null, 'name', null, 'Nom du contact');

// Properties

$this->setString(STRING_PROPERTY, 'individualId', null, 'Individu ID');
$this->setString(STRING_PROPERTY, 'individualId', array('label'), 'Individu ID');

$this->setString(STRING_PROPERTY, 'isChecked', null, 'A été vérifié');
$this->setString(STRING_PROPERTY, 'isChecked', array('label'), 'A été vérifié : ');

$this->setString(STRING_PROPERTY, 'isValid', null, 'Est valide');
$this->setString(STRING_PROPERTY, 'isValid', array('label'), 'Est valide : ');

$this->setString(STRING_PROPERTY, 'rank', null, 'Rang');
$this->setString(STRING_PROPERTY, 'rank', array('label'), 'Rang : ');

$this->setString(STRING_PROPERTY, 'type', null, 'Type de contact');
$this->setString(STRING_PROPERTY, 'type', array('label'), 'Type de contact : ');
$this->setString(STRING_PROPERTY, 'type', array('placeholder'), 'Par exemple \'Email\' ou \'Réseau social\'.');

$this->setString(STRING_PROPERTY, 'value', null, 'Valeur de contact');
$this->setString(STRING_PROPERTY, 'value', array('label'), 'Valeur : ');
$this->setString(STRING_PROPERTY, 'value', array('placeholder'), 'Saisissez la valeur du contact.');

$this->setString(STRING_PROPERTY, 'items', null, 'Articles');
$this->setString(STRING_PROPERTY, 'items', array('label'), 'articles : ');
$this->setString(STRING_PROPERTY, 'items', array('placeholder'), 'articles');

$this->setString(STRING_PROPERTY, 'name', null, 'Titre');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Titre : ');
$this->setString(STRING_PROPERTY, 'name', array('placeholder'), 'Titre du catalogue');

$this->setString(STRING_PROPERTY, 'isNotificationChannel', null, 'Optin');

$this->setString(STRING_PROPERTY, 'cellphone', null, 'Tél. mobile');
$this->setString(STRING_PROPERTY, 'email', null, 'Email');
$this->setString(STRING_PROPERTY, 'fax', null, 'Fax');
$this->setString(STRING_PROPERTY, 'telephone', null, 'Tél. fixe');

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


$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


// Tags

$this->setString(null, 'optIn', array('tag'), 'Opt-in');
$this->setString(null, 'notValid', array('tag'), 'Non Valide');
$this->setString(null, 'notChecked', array('tag'), 'Non vérifié');
$this->setString(null, 'valid', array('tag'), 'Valide');

?>
