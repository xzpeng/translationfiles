<?php

// Define the preferences

pref
(
	'[Engage-Data]/CItem/strings/fr',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_MASCULINE,
		STRING_NUMBER_PLURAL 	=> 'articles',
		STRING_NUMBER_SINGULAR => 'article',
		STRING_VOWELL => true
	)
);


//	List

$this->setString(STRING_LIST, 'action', null, 'Action');
$this->setString(STRING_LIST, 'icon', null, '');
$this->setString(STRING_LIST, 'defaultDescription', null, 'Description');
$this->setString(STRING_LIST, 'defaultName', null, 'Nom');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous êtes sur le point de supprimer cet item. Etes-vous certain?');


// Properties

$this->setString(STRING_PROPERTY, 'brand', null, 'Marque');
$this->setString(STRING_PROPERTY, 'brand1', null, 'Marque 1');
$this->setString(STRING_PROPERTY, 'brand2', null, 'Marque 2');
$this->setString(STRING_PROPERTY, 'brand1', array('label'), 'Marque 1');
$this->setString(STRING_PROPERTY, 'brand2', array('label'), 'Marque 2');
$this->setString(STRING_PROPERTY, 'categoryId', null, 'Catégorie');
$this->setString(STRING_PROPERTY, 'cogs', null, 'Coûts');
$this->setString(STRING_PROPERTY, 'creationDate', null, 'Date de création');

$this->setString(STRING_PROPERTY, 'description', null, 'description');
$this->setString(STRING_PROPERTY, 'ean13', null, 'Code article (EAN 13)');
$this->setString(STRING_PROPERTY, 'longDescription', null, 'Description longue');
$this->setString(STRING_PROPERTY, 'longDescription', array('label'), 'Description longue');
$this->setString(STRING_PROPERTY, 'parentItemId', null, 'Article parent');
$this->setString(STRING_PROPERTY, 'name', null, 'Nom');
$this->setString(STRING_PROPERTY, 'name', array('label'), 'Nom');
$this->setString(STRING_PROPERTY, 'sku', null, 'UGS');
$this->setString(STRING_PROPERTY, 'shortDescription', null, 'Description');
$this->setString(STRING_PROPERTY, 'shortDescription', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'subBrand', null, 'Marque niv2');
$this->setString(STRING_PROPERTY, 'tagId', null, 'Etiquette');
$this->setString(STRING_PROPERTY, 'type', null, 'Type');

$this->setString(STRING_PROPERTY, 'categories', null, 'Catégories');
$this->setString(STRING_PROPERTY, 'categories', array('count'), 'Nombre de catégories');
$this->setString(STRING_PROPERTY, 'reviews', null, 'Commentaires');
$this->setString(STRING_PROPERTY, 'reviews', array('count'), 'Nombre de commentaires');
$this->setString(STRING_PROPERTY, 'tags', null, 'Tags');
$this->setString(STRING_PROPERTY, 'tags', array('count'), 'Nombre de tags');
$this->setString(STRING_PROPERTY, 'wishlists', null, 'Listes de souhaits');


// Section

$this->setString(STRING_SECTION, 'About', null, 'A propos');
$this->setString(STRING_SECTION, 'categories', null, 'Catégories');
$this->setString(STRING_SECTION, 'reviews', null, 'Commentaires');
$this->setString(STRING_SECTION, 'tags', null, 'Tags');
$this->setString(STRING_SECTION, 'wishlists', null, 'Listes de souhaits');
$this->setString(STRING_SECTION, 'custom', null, 'Personnalisé');
$this->setString(STRING_SECTION, 'object', null, 'Objet');
$this->setString(STRING_SECTION, 'system', null, 'Système');


?>
