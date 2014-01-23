<?php

$this->setString(null, null, null, 'Créer un bloc');
$this->setString(null, null, array('short'), 'Créer');


$this->setString('form', 'preview.name', null, 'Nom du bloc');
$this->setString('form', 'preview.code', null, 'Code du bloc');

$this->setString('form', 'settings', null, 'À propos');
$this->setString('form', 'settings.title', null, 'À propos');
$this->setString('form', 'settings.catchphrase', null, 'Définissez quelques paramètres simples pour votre bloc');
$this->setString('form', 'settings.basic-infos.title', null, 'Informations de base');
$this->setString('form', 'settings.title.label', null, 'Titre / Sujet');
$this->setString('form', 'settings.title.placeholder', null, 'titre du bloc');
$this->setString('form', 'settings.code.label', null, 'Code du bloc');
$this->setString('form', 'settings.code.placeholder', null, 'code du bloc');

$this->setString('form', 'content', null, 'Contenu');
$this->setString('form', 'content.title', null, 'Contenu');
$this->setString('form', 'content.catchphrase', null, 'Contenu de votre bloc');
$this->setString('form', 'content.static.title', null, 'Statique');
$this->setString('form', 'content.static.catchphrase', null, 'Le contenu de votre bloc est unique');
$this->setString('form', 'content.conditional.title', null, 'Conditionnel');
$this->setString('form', 'content.conditional.catchphrase', null, 'Le contenu change en fonction du destinataire');

$this->setString('form', 'content.static.editor.title', null, 'Editeur de contenu statique');
$this->setString('form', 'content.static.editor.content.placeholder', null, 'Code HTML (Twig)');

$this->setString('form', 'content.conditional.editor.title', null, 'Editeur de conditions');
$this->setString('form', 'content.conditional.editor.add-condition', null, 'Ajouter une condition');

$this->setString('form', 'content.conditional.editor.else', null, 'Sinon ...');
$this->setString('form', 'content.conditional.editor.get-filter', null, 'Choisir un filtre');
$this->setString('form', 'content.conditional.editor.get-widget', null, 'Choisir un bloc');
$this->setString('form', 'content.conditional.editor.widget-plain-html.placeholder', null, 'Code HTML');

$this->setString('form', 'save', null, 'Enregistrer');

?>