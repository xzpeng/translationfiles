<?php

// Define the preferences

pref
(
	'[Engage-Data]/CReview/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'reviews',
		STRING_NUMBER_SINGULAR => 'review',
		STRING_CONSONANT => true
	)
);


// List

$this->setString(STRING_LIST, 'itemName', null, 'Item');
$this->setString(STRING_LIST, 'score', null, 'Score');
$this->setString(STRING_LIST, 'description', null, 'Comment');
$this->setString(STRING_LIST, 'dateOfCreation', null, 'Publication Date');


//	Property

$this->setString(STRING_PROPERTY, 'itemName', null, 'Item name');
$this->setString(STRING_PROPERTY, 'score', null, 'Score');
$this->setString(STRING_PROPERTY, 'title', null, 'Title');
$this->setString(STRING_PROPERTY, 'title', array('label'), 'Title');
$this->setString(STRING_PROPERTY, 'description', null, 'Description');
$this->setString(STRING_PROPERTY, 'description', array('label'), 'Description');
$this->setString(STRING_PROPERTY, 'score', null, 'Score');
$this->setString(STRING_PROPERTY, 'score', array('label'), 'Score');

//

$this->setString(STRING_SECTION, 'About', null, 'About');
$this->setString(STRING_SECTION, 'Item', null, 'Item');

$this->setString(STRING_SECTION, 'custom', null, 'Custom');
$this->setString(STRING_SECTION, 'object', null, 'Object');
$this->setString(STRING_SECTION, 'system', null, 'System');

?>
