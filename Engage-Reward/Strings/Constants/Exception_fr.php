<?php

// Exceptions related to programs

str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED, 'L\'individu n\'a pas pu être inscrit à nouveau au programme.');
str(EXCEPTION_PROGRAM_INDIVIDUAL_ALREADY_ENROLLED . '?description', 'L\'individu n\'a pas pu être inscrit à nouveau au programme. Il est peut être déjà inscrit à ce programme.');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED, 'L\'individu n\'a pas pu être inscrit au programme.');
str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ACCEPTED . '?description', 'L\'individu n\'a pas pu être inscrit au programme. Il est peut être incompatible avec ce programme.');

str(EXCEPTION_PROGRAM_INDIVIDUAL_NOT_ENOUGH_POINTS, 'Nombre de points insuffisant.');


// Exceptions related to rewards

str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST, 'Ce cadeau ne peut être acquis si tôt.');
str(EXCEPTION_REWARD_ACQUISITION_TOO_FAST . '?description', 'Vous cherchez à obtenir un cadeau dans un délai trop court. Veuillez essayer plus tard.');

str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER, 'Ce cadeau ne peut être acquis dans le niveau actuel.');
str(EXCEPTION_REWARD_NOT_ASSOCIATED_WITH_TIER . '?description', 'Ce cadeau ne peut être acquis dans le niveau actuel auquel vous êtes associé.');

str(EXCEPTION_REWARD_OUT_OF_STOCK, 'Ce cadeau ne peut être acquis par manque de disponibilité en stock.');
str(EXCEPTION_REWARD_OUT_OF_STOCK . '?description', 'Ce cadeau ne peut être acquis par manque de disponibilité en stock, actuellement. Veuillez essayer plus tard.');

str(EXCEPTION_REWARD_PRICE_TOO_HIGH, 'Ce cadeau ne peut être acquis avec votre cumul de points.');
str(EXCEPTION_REWARD_PRICE_TOO_HIGH . '?description', 'Ce cadeau ne peut être acquis avec votre cumul actuel de points. Veuillez essayer plus tard en vous assurant de disposer de la quantité de points suffisante.'); 

str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS, 'Ce cadeau ne peut être acquis désormais.');
str(EXCEPTION_REWARD_TOO_MANY_ACQUISITIONS . '?description', 'Ce cadeau ne peut être acquis désormais, en raison des acquisitions précédentes.');


// Exceptions related to social networks

str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL, 'Le message a échoué.');
str(EXCEPTION_SOCIAL_POST_MESSAGE_FAIL . '?description', 'La tentative de poster le message a échoué.');


// Exceptions related to tags

str(EXCEPTION_TAG_NAME_NOT_AVAILABLE, 'Le nom pour cette étiquette n\'est plus disponible.');
str(EXCEPTION_TAG_NAME_NOT_AVAILABLE . '?description', 'Le nom pour cette étiquette n\'est plus disponible car déjà utilisé.');

str(EXCEPTION_TAG_NAME_VALUE_REQUIRED, 'Le nom est requis pour cette étiquette.');
str(EXCEPTION_TAG_NAME_VALUE_REQUIRED . '?description', 'Le nom est requis pour cette étiquette.');


// Exceptions related to categories

str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED, 'Le nom est requis pour cette catégorie.');
str(EXCEPTION_CATEGORY_NAME_VALUE_REQUIRED . '?description', 'Le nom est requis pour cette catégorie.');

?>
