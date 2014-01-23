<?php

// Define the preferences

pref
(
	'[Engage-Reward]/CReward/strings/en',
	array
	(
		STRING_GENRE 	=> STRING_GENRE_NEUTRAL,
		STRING_NUMBER_PLURAL 	=> 'cadeaux',
		STRING_NUMBER_SINGULAR => 'cadeau',
		STRING_VOWELL => false
	)
);


// Actions

str(ACTION_CREATE . 'CReward', 'Créer un cadeau');

str(ACTION_DELETE . 'CReward', 'Supprimer le cadeau');
str(ACTION_DELETE . 'CReward?object', 'Supprimer le cadeau');
str(ACTION_DELETE . 'CReward?prompt&message', 'Vous êtes sur le point de supprimer ce cadeau du programme. Cliquez Ok pour confirmer.');
str(ACTION_DELETE . 'CReward?prompt&title', 'Confirmez-vous?');

str(ACTION_DISABLE . 'CReward?object', 'Désactiver le cadeau');
str(ACTION_EDIT . 'CReward', 'Modifier le cadeau');
str(ACTION_EDIT . 'CReward?object', 'Modifier le cadeau');
str(ACTION_ENABLE . 'CReward?object', 'Activer le cadeau');
str(ACTION_FIND . 'CReward', 'Rechercher les cadeaux');

str(ACTION_GENERATE_REPORT . 'CReward?object', 'Créer un rapport');

str(ACTION_HOLD . 'CReward?object', 'Suspendre le cadeau');
str(ACTION_HOLD . 'CReward?prompt&message', 'Vous êtes sur le point de suspendre ce cadeau du programme. Cliquez Ok pour confirmer.');
str(ACTION_HOLD . 'CReward?prompt&title', 'Suspendre le cadeau');

str(ACTION_INSERT . 'CReward', 'Créer un cadeau');
str(ACTION_LIST . 'CReward', 'Lister les cadeaux');
str(ACTION_MONITOR . 'CReward', 'Superviser les cadeaux');
str(ACTION_MONITOR . 'CReward?object', 'Superviser le cadeau');

str(ACTION_RESTORE . 'CReward?object', 'Réactiver le cadeau');

str(ACTION_RELEASE . 'CReward?object', 'Activer le cadeau');
str(ACTION_RELEASE . 'CReward?prompt&message', 'Vous êtes sur le point d\'activer ce cadeau du programme. Cliquez Ok pour confirmer.');
str(ACTION_RELEASE . 'CReward?prompt&title', 'Activer le cadeau');

str(ACTION_SAVE . 'CReward?object', 'Enregistrer le cadeau');
str(ACTION_VIEW . 'CReward?object', 'Afficher le cadeau');
// str(ACTION_ACQUIRE .'CReward?object', 'Acquire the reward');


// Release / Hold action

str('CReward.property.hold.action', 'Suspendre le cadeau');
str('CReward.property.release.action', 'Activer le cadeau');


// Indicators

str('CReward.indicator.nbAcquirers', 'Nb acquéreurs');
str('CReward.indicator.nbAcquirers?values', 'Nombre acquéreurs');
str('CReward.indicator.nbAcquirers?plural', 'Nb acquéreurs');

str('CReward.indicator.nbAcquisitions', 'Nb d\'acquisitions');
str('CReward.indicator.nbAcquisitions?values', 'Nombre d\'acquisitions');
str('CReward.indicator.nbAcquisitions?plural', 'Nb d\'acquisitions');

str('CReward.indicator.category.meter', 'Comptage');
str('CReward.indicator.category.users', 'Individus');


// Enums

str('CReward.enum.type.badge', 'Badge');
str('CReward.enum.type.product', 'Produit');
str('CReward.enum.type.service', 'Service');
str('CReward.enum.type.voucher', 'Bon');


// Filters

str('CReward.filter.name', 'Nom:');
str('CReward.filter.type','Type:');
str('CReward.filter.price', 'Prix:');
str('CReward.filter.isQuantityLimited','Est-ce en quantité limitée?');


// Geolocalized objects

str('CReward.geolocalized.purchases', 'Achats');
str('CReward.geolocalized.individuals','Individus');


// Object

str('CReward', 'Cadeau');
str('CReward?current', 'Cadeau en cours');
str('CReward?filter', 'Filtrer les cadeaux');
str('CReward?manage', 'Gérer le cadeau');
str('CReward?plural', 'Cadeaux');
str('CReward?plural&short', 'Cadeaux');
str('CReward?short', 'Cadeau');
str('CReward?isReleased', 'Le cadeau est actif !');
str('CReward?isReleased&description', 'Ce cadeau est désormais actif, il est disponible au public. En cas de nécessité de modification, veuillez attendre une période de faible activité, pour suspendre le cadeau d\'abord et de le modifier ensuite');
str('CReward?isNotReleased', 'Ce cadeau est suspendu');
str('CReward?isNotReleased&description', 'Ce cadeau n\'a pas été activé, son activation nécessite des droits d\'administration');


// Properties

str('CReward.property.acquisitions', 'Acquisitions');

str('CReward.property.color?label', 'Couleur:');

str('CReward.property.description?help&description', 'A propos de ce cadeau.');
str('CReward.property.description?label', 'Description:');
str('CReward.property.description?placeholder', 'Décrire le cadeau');

str('CReward.property.frequencyOfAcquisition?help&description', 'Par exemple, si le cadeau est limité à une attribution par semaine, un bénéficiaire du programme ne pourra en disposer qu\'une seule fois par semaine.');
str('CReward.property.frequencyOfAcquisition?help&title', 'L\'attribution de ce cadeau sera limitée en fréquence.');
str('CReward.property.frequencyOfAcquisition?label', '');
str('CReward.property.frequencyOfAcquisition?placeholder', '1');

str('CReward.property.isAcquisitionLimited?label', 'L\'attribution est limitée à une fois par:');
str('CReward.property.isAcquisitionLimited', ' ');

str('CReward.property.initialQuantity?help&description', 'Quelle quantité est en stock?');
str('CReward.property.initialQuantity?label', '');
str('CReward.property.initialQuantity?placeholder', 'Nombre de cadeaux en stock');

str('CReward.property.isQuantityLimited', 'Quantité limitée');
str('CReward.property.isQuantityLimited?label', 'Nombre en stocks');

str('CReward.property.photo?label', 'Photo:');
str('CReward.property.photo?help&description', 'De préférence avec un visuel. Vous devriez télécharger une photo pour rendre ce cadeau attractif!');
str('CReward.property.photo?help&title', 'Télécharger une photo');

str('CReward.property.price?help&description', 'Entrez le coût en niombre de points pour l\'acquisition de ce cadeau.');
str('CReward.property.price?help&title', 'Coût en nombre de points ?');
str('CReward.property.price?label', 'Coût:');
str('CReward.property.price?placeholder', '0');
str('CReward.property.price?suffix', '%1');
str('CReward.property.price.edit?suffix', 'Point(s)');

str('CReward.property.maxAcquisitionsPerIndividual?help&description', 'Par exemple, indiquez 10 si vous souhaitez limiter l\'attribution à 10 maximum par membre. Laissez le champ vide si aucune limitation n\'est à prévoir.');
str('CReward.property.maxAcquisitionsPerIndividual?help&title', 'A quelle quantité maximale un individu peut-il obtenir ce cadeau ?');
str('CReward.property.maxAcquisitionsPerIndividual?label', 'Quantité maximale pour un individu:');
str('CReward.property.maxAcquisitionsPerIndividual?placeholder', '10');

str('CReward.property.name?help&description', 'Par exemple \'A 2-semaines de séjour de rêve aux Maldives\' ou \'Billets pour un concert de votre artiste préféré\'.');
str('CReward.property.name?label', 'Nom:');
str('CReward.property.name?placeholder', 'Affectez un nom au cadeau');

str('CReward.property.rewardCategoryId?help&description', 'Tapez les premiers caractères d\'une catégorie. Elle s\'affichera si existante, autrement vous pouvez la créer');
str('CReward.property.rewardCategoryId?label', 'Catégorie:');
str('CReward.property.rewardCategoryId?placeholder', 'Attribuez une catégorie au cadeau');

str('CReward.property.rewardTags?help&description', 'Start typing the name of a tag. If it exists, it will appear in a list. Otherwise you will be able to create it.');
str('CReward.property.rewardTags?label', 'Etiquette:');
str('CReward.property.rewardTags?placeholder', 'Attribuez une étiquette au cadeau');

str('CReward.property.type?help&description', 'Quel type de cadeau est-ce ?');
str('CReward.property.type?label', 'Type de cadeau:');
str('CReward.property.type?placeholder', 'Un cadeau peut être un badge, un bon, un produit ou un service.');


// Sections

str('CReward.section.reward', 'Cadeau');
str('CReward.section.reward?description', 'Décrire le cadeau');

str('CReward.section.reward.activity.chart.title', 'Nombre d\'acquéreurs  vs. nombre d\'acquisitions');
str('CReward.section.reward.about.price', 'Coût');
str('CReward.section.reward.about.label.about', 'A propos du cadeau');
str('CReward.section.reward.about.label.conditions', 'Conditions');
str('CReward.section.reward.about.label.description', 'Description:');
str('CReward.section.reward.about.label.level', 'Peut être acquis par:');
str('CReward.section.reward.about.label.limitation', 'Limitation:');
str('CReward.section.reward.about.label.name', 'Nom:');
str('CReward.section.reward.about.label.type', 'Type:');
str('CReward.section.reward.activity.nbAcquisitions', 'Acquisitions');
str('CReward.section.reward.activity.nbAcquirers', 'Individus');
str('CReward.section.reward.activity.inStock', 'Quantité en stock');
str('CReward.section.reward.activity.nbPoints', 'Points NQ à acquérir');


str('CReward.section.tiers', 'Niveau');
str('CReward.section.tiers?description', 'Associez le cadeau à un niveau');

str('CReward.section.listRewards', 'Liste des cadeaux');
str('CReward.section.activity', 'Volumétrie');
str('CReward.section.lastRewards', 'Dernier cadeaux');
str('CReward.section.tags', 'Etiquettes & catégories');


// List

str('CReward.range', 'Rang');
str('CReward.list.results', 'Liste des cadeaux sélectionnés:');
str('CReward.RemainInStock', 'Stock disponible:');
str('CReward.price', 'Coût:');
str('CReward.InStock', 'Est disponible');
str('CReward.OutOfStock', 'Rupture de stock');
str('CReward.unlimited', 'Illimité');
str('CReward.noElementResult', 'Aucun cadeau dans cette sélection.');
str('CReward.noElementResult?text', 'Vous pouvez créer un cadeau dans la section Cadeaux.');


// Tags

str('CReward.tags?label', 'Etiquettes');


// Separators

str('CReward.separator.about', 'A propos du cadeau');
str('CReward.separator.restrictions', 'Restrictions');
str('CReward.separator.select', 'Sélectionnez un ou plusieurs cadeaux');
str('CReward.separator.stock', 'Stock');


//

str('CRewardCategory.selected', 'Catégorie sélectionnée:');

?>
