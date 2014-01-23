<?php

// Actions

$this->setString(STRING_ACTION, ACTION_COMPLETE_RESET_PASSWORD, array('confirm'), 'Your password has been changed successfully.');
$this->setString(STRING_ACTION, ACTION_SIGN_OUT, null, 'Sign-out');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, null, 'Reset password');
$this->setString(STRING_ACTION, ACTION_START_RESET_PASSWORD, array('link'), 'Click on the link below to reset your password:');


// Disclaimer

$this->setString(STRING_DISCLAIMER, ACTION_SIGN_OUT, array(), 'You are about to sign-out from your user account. Please confirm your choice.');


// Properties

$this->setString(STRING_PROPERTY, 'email', null, 'E-mail');
$this->setString(STRING_PROPERTY, 'email', array('label'), 'E-mail:');
$this->setString(STRING_PROPERTY, 'email', array('placeholder'), 'Enter your e-mail address');

?>
