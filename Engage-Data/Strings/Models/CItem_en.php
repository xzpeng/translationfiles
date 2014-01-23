<?php

// Define the preferences

pref
(
	'[Engage-Data]/CItem/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'items',
		STRING_NUMBER_SINGULAR => 'item',
		STRING_VOWELL => true
	)
);


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Name');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'You are about to remove this item. Are you sure?');

// Properties

$this->setString(STRING_PROPERTY, 'brand', null, 'Brand');
$this->setString(STRING_PROPERTY, 'brand1', null, 'Brand 1');
$this->setString(STRING_PROPERTY, 'brand2', null, 'Brand 2');
$this->setString(STRING_PROPERTY, 'brand1', array('label'), 'Brand 1');
$this->setString(STRING_PROPERTY, 'brand2', array('label'), 'Brand 2');
$this->setString(STRING_PROPERTY, 'categoryId', null, 'Category');
$this->setString(STRING_PROPERTY, 'cogs', null, 'Cogs');
$this->setString(STRING_PROPERTY, 'creationDate', null, 'creation date');

$this->setString(STRING_PROPERTY, 'description', null, 'description');
$this->setString(STRING_PROPERTY, 'ean13', null, 'International Article Number (EAN 13)');
$this->setString(STRING_PROPERTY, 'longDescription', null, 'Long description');
$this->setString(STRING_PROPERTY, 'longDescription', array('label'), 'Long description');
$this->setString(STRING_PROPERTY, 'parentItemId', null, 'Parent item');
$this->setString(STRING_PROPERTY, 'name', null, 'Name');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Name');
$this->setString(STRING_PROPERTY, 'sku', null, 'SKU');
$this->setString(STRING_PROPERTY, 'shortDescription', null, 'Short description');
$this->setString(STRING_PROPERTY, 'shortDescription', array('label'), 'Short description');
$this->setString(STRING_PROPERTY, 'subBrand', null, 'Sub-brand');
$this->setString(STRING_PROPERTY, 'tagId', null, 'Tag');
$this->setString(STRING_PROPERTY, 'type', null, 'Type');


$this->setString(STRING_PROPERTY, 'categories', null, 'Categories');
$this->setString(STRING_PROPERTY, 'categories', array('count'), 'Number of categories');
$this->setString(STRING_PROPERTY, 'reviews', null, 'Reviews');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), 'Number of reviews');
$this->setString(STRING_PROPERTY, 'tags', null, 'Tags');
$this->setString(STRING_PROPERTY, 'tags', array('count'), 'Number of tags');
$this->setString(STRING_PROPERTY, 'wishlists', null, 'Wishlists');


// Section

$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'categories', null, 'Categories');
$this->setString(STRING_SECTION, 'reviews', null, 'Reviews');
$this->setString(STRING_SECTION, 'tags', null, 'Tags');
$this->setString(STRING_SECTION, 'wishlists', null, 'Wishlists');
$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');


?>
