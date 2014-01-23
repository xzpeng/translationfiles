<?php

//

$this->setString(null, null, null, 'Utilisateur');
$this->setString(null, null, array('plural'), 'Utilisateurs');


// Actions

$this->setString(STRING_ACTION, ACTION_CREATE, null, 'Créer un utilisateur');
$this->setString(STRING_ACTION, ACTION_DELETE, null, 'Supprimer l\'utilisateur');
$this->setString(STRING_ACTION, ACTION_EDIT, null, 'Modifier l\'utilisateur');
$this->setString(STRING_ACTION, ACTION_LIST, null, 'Chercher un utilisateur');
$this->setString(STRING_ACTION, ACTION_SAVE, null, 'Enregistrer l\'utilisateur');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, null, 'Réinitialiser le mot de passe');
$this->setString(STRING_ACTION, ACTION_START_USURPATION, null, 'Usurper son identité');
$this->setString(STRING_ACTION, ACTION_VIEW, null, 'Afficher l\'utilisateur');


// Disclaimers

$this->setString(STRING_DISCLAIMER, ACTION_DELETE, null, 'Vous allez définitivement supprimer cet utilisateur. Confirmez-vous ce choix ?');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, null, 'Aucun utilisateur n\'a été trouvé.');
$this->setString(STRING_DISCLAIMER, ACTION_LIST, array('filter'), 'Aucun utilisateur n\'a été trouvé avec vos critères de recherche.');
$this->setString(STRING_DISCLAIMER, ACTION_START_RESET_PASSWORD, null, 'Vous allez réinitaliser le mot de passe de cet utilisateur, qui va recevoir un e-mail contenant les instructions à suivre pour changer de mot de passe. Confirmez-vous ce choix ?');
$this->setString(STRING_DISCLAIMER, ACTION_START_USURPATION, null, 'Vous allez usurper l\'identité de cet utilisateur, ce qui signifie que vous pourrez agir en son nom tout en conservant les permissions accordées à votre compte. Confirmez-vous ce choix ?');


// Properties

$this->setString(STRING_PROPERTY, 'dateOfSignIn', null, 'Date de connexion');
$this->setString(STRING_PROPERTY, 'dateOfSignIn', array('label'), 'Date de connexion :');
$this->setString(STRING_PROPERTY, 'dateOfSignIn', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'dateOfSignUp', null, 'Date d\'inscription');
$this->setString(STRING_PROPERTY, 'dateOfSignUp', array('label'), 'Date d\'inscription :');
$this->setString(STRING_PROPERTY, 'dateOfSignUp', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'email', array('label'), 'E-mail :');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'firstName', null, 'Prénom');
$this->setString(STRING_PROPERTY, 'firstName', array('label'), 'Prénom :');
$this->setString(STRING_PROPERTY, 'firstName', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'lastName', null, 'Nom');
$this->setString(STRING_PROPERTY, 'lastName', array('label'), 'Nom :');
$this->setString(STRING_PROPERTY, 'lastName', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'password', null, 'Mot de passe');
$this->setString(STRING_PROPERTY, 'password', array('label'), 'Mot de passe :');
$this->setString(STRING_PROPERTY, 'password', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'universe', null, 'Univers');
$this->setString(STRING_PROPERTY, 'universe', array('label'), 'Univers :');
$this->setString(STRING_PROPERTY, 'universe', array('placeholder'), '');

$this->setString(STRING_PROPERTY, 'userGroupId', null, 'Groupe');
$this->setString(STRING_PROPERTY, 'userGroupId', array('label'), 'Groupe :');
$this->setString(STRING_PROPERTY, 'userGroupId', array('placeholder'), '');

?>
