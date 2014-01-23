<?php

// Actions

$this->setString(STRING_ACTION, ACTION_COMPLETE_RESET_PASSWORD, array('confirm'), 'Votre mot de passe a été modifié.');
$this->setString(STRING_ACTION, ACTION_SIGN_OUT, null, 'Quitter');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, null, 'Réinitialiser');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, array('link'), 'Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe : ');


// Disclaimer

$this->setString(STRING_DISCLAIMER, ACTION_SIGN_OUT, null, 'Vous êtes sur le point de quitter l\'application. Veuillez confirmer.');


// Properties

$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'email', array('label'), 'E-mail:');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), 'Saisissez l\'adresse mail');

?>
