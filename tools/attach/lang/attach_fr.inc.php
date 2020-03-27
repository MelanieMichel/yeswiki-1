<?php

$GLOBALS['translations'] = array_merge(
    $GLOBALS['translations'],
    array(

        // actions/attach.class.php
        'ATTACH_ACTION_ATTACH' => 'Action {{attach ...}}',
        'ATTACH_PARAM_DESC_REQUIRED' => 'param&egrave;tre "desc" obligatoire pour une image',
        'ATTACH_PARAM_HEIGHT_NOT_NUMERIC' => 'le param&egrave;tre "height", en pixels, doit &ecirc;tre uniquement compos&eacute; de chiffres entiers',
        'ATTACH_PARAM_WIDTH_NOT_NUMERIC' => 'le param&egrave;tre "width", en pixels, doit &ecirc;tre uniquement compos&eacute; de chiffres entiers',
        'ATTACH_UPLOAD_FORM_FOR_FILE' => 'Formulaire d\'envoi du fichier',
        'ATTACH_BACK_TO_PAGE' => 'Retour &agrave; la page',
        'NO_RIGHT_TO_WRITE_IN_THIS_PAGE' => 'Vous n\'avez pas l\'acc&ecirc;s en &eacute;criture &agrave; cette page',
        'INVALID_REQUEST_METHOD' => 'M&eacute;thode de requ&egrave;te invalide',
        'ERROR_MOVING_TEMPORARY_FILE' => 'Erreur lors du d&eacute;placement du fichier temporaire',
        'ERROR_UPLOAD_MAX_FILESIZE' => 'Le fichier t&eacute;l&eacute;charg&eacute; exc&ecirc;de la taille de upload_max_filesize, configur&eacute; dans le php.ini.',
        'ERROR_MAX_FILE_SIZE' => 'Le fichier t&eacute;l&eacute;charg&eacute; exc&ecirc;de la taille de MAX_FILE_SIZE, qui a &eacute;t&eacute; sp&eacute;cifi&eacute;e dans le formulaire HTML.',
        'ERROR_PARTIAL_UPLOAD' => 'Le fichier n\'a &eacute;t&eacute; que partiellement t&eacute;l&eacute;charg&eacute;.',
        'ERROR_NO_FILE_UPLOADED' => 'Aucun fichier n\'a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute;.',
        'ERROR_NOT_AUTHORIZED_EXTENSION' => 'Le fichier n\'a pas une extension autorisée, voici celles que la configuration autorise : ',


        // actions/filemanager.php
        'ATTACH_NO_RIGHTS_TO_ACCESS_FILEMANAGER' => 'Il faut avoir acc&egrave; en &eacute;criture &agrave; la page pour acc&eacute;der au gestionnaire des fichiers attach&eacute;s',

        // actions/backgroundimage.php
        'ATTACH_ACTION_BACKGROUNDIMAGE' => 'Action {{backgroundimage ...}}',
        'ATTACH_PARAM_FILE_OR_BGCOLOR_NOT_FOUND' => 'il faut indiquer soit une image avec le paramètre "file" ou une couleur de fond avec le paramètre "bgcolor"',

        // actions/player.php
        'ATTACH_ACTION_PLAYER' => 'Action {{player ...}}',
        'ATTACH_DOWNLOAD_THE_FILE' => 'T&eacute;l&eacute;charger le fichier',
        'ATTACH_URL_NOT_VALID' => 'l\'URL n\'est pas valide ou ne peut pas &ecirc;tre ouverte',
        'ATTACH_PARAM_URL_REQUIRED' => 'param&egrave;tre "url" obligatoire',
        'ATTACH_PLAYER_CAN_ONLY_OPEN_FILES_LIKE' => 'le player ne peut que lire les fichiers mp3, flv et mm, et votre URL',
        'ATTACH_NOT_LINKED_TO_GOOD_FILE_EXTENSION' => 'ne pointe pas sur ces types de fichiers',

        // actions/pointimage.php
        'ATTACH_ACTION_POINTIMAGE' => 'Action {{pointimage ...}}',
        'ATTACH_PARAM_FILE_NOT_FOUND' => 'param&egrave;tre "file" obligatoire',
        'ATTACH_PARAM_FILE_MUST_BE_IMAGE' => 'le param&egrave;tre "file" doit &ecirc;tre une image (svg,gif,jpg,jpeg,png)',
        'ATTACH_DEFAULT_MARKER' => 'Point par d&eacute;faut',
        'ATTACH_ADD_MARKER' => 'Ajouter un point',
        'ATTACH_TITLE' => 'Titre',
        'ATTACH_DESCRIPTION' => 'Description',
        'ATTACH_CANCEL' => 'Annuler',
        'ATTACH_SAVE' => 'Sauver',

        // handler edit
        'ACTIVATE_JS_TO_UPLOAD_FILES' => 'Activer JavaScript pour joindre des fichiers',
        'UPLOAD_A_FILE' => 'Joindre / Ins&eacute;rer un fichier',
        'UPLOAD_FILE' => 'T&eacute;l&eacute;charger le fichier',
        'CANCEL_THIS_UPLOAD' => 'Annuler cet envoi',
        'INSERT' => 'Ins&eacute;rer',
        'DOWNLOAD_LINK_TEXT' => 'Texte du lien de t&eacute;l&eacute;chargement',
        'IMAGE_ALIGN' => 'Alignement de l\'image',
        'IMAGE_SIZE' => 'Taille de l\'image',
        'THUMBNAIL' => 'Miniature',
        'MEDIUM' => 'Moyenne',
        'BIG' => 'Large',
        'ORIGINAL_SIZE' => 'Taille originale',
        'CAPTION' => 'Texte de la vignette',
        'SEE_THE_ADVANCED_PARAMETERS' => 'Voir les param&egrave;tres avanc&eacute;s',
        'ADVANCED_PARAMETERS' => 'Param&egrave;tres avanc&eacute;s',
        'ASSOCIATED_LINK' => 'Lien associ&eacute;',
        'GRAPHICAL_EFFECTS' => 'Effets graphiques',
        'WHITE_BORDER' => 'Bord blanc',
        'DROP_SHADOW' => 'Ombre port&eacute;e',
        'ZOOM_HOVER' => 'Agrandissement au survol',
        'ALT_INFOS' => 'Ce texte sera affich&eacute; &agrave; la place de l\'image si elle est introuvable sur le serveur',
        'ALTERNATIVE_TEXT' => 'Texte de remplacement',
        'LEFT' => 'Gauche',
        'CENTER' => 'Centre',
        'RIGHT' => 'Droite',
		  'FAILED' => '&Eacute;chou&eacute;',

		  'ADMINS_ONLY_ACTION' => 'Action réservée aux membres du groupe admins',

		  'MEDIA_FILES_DIR_LISTING' => 'Liste des fichiers du dossier files',
		  'MEDIA_FILE' => 'Fichier',
		  'MEDIA_NAME' => 'Media',
		  'MEDIA_UPLOAD_TIME' => 'Chargement',
		  'MEDIA_PAGE' => 'Page',
		  'MEDIA_PAGE_VERSION' => 'Version de la page',
		  'MEDIA_VERSION' => 'Version du media',
		  'MEDIA_LATEST_VERSION' => 'Dernière',
		  'MEDIA_FILE_EXPLANATION' => 'Nom du fichier dans le dossier "files". Peut contenir plusieurs possibilités, chacune correspondant à un nom de media et aucune des combinaisons n\'ayant permis de trouver une page active.',
		  'MEDIA_NAME_EXPLANATION' => 'Nom saisi dans le paramètre "file" de l\'action {{attach}}. Peut contenir plusieurs possibilités, chacune correspondant à un nom de fichier et aucune des combinaisons n\'ayant permis de trouver une page active. Cellule fusionnée avec "Fichier" dans le cas d\'une fiche bazar.',
		  'MEDIA_UPLOAD_TIME_EXPLANATION' => 'Date et heure du chargement du fichier sur le serveur. Cellule fusionnée avec "Fichier" dans le cas d\'une fiche bazar.',
		  'MEDIA_PAGE_EXPLANATION' => 'Page du wiki dans laquelle on appelle ce fichier (action {attach} ou champ bazar). Dans le cas d\'une fiche bazar, contient également le nom du champ.',
		  'MEDIA_PAGE_VERSION_EXPLANATION' => 'Version la plus récente de cette page dans laquelle on retrouve ce media. Cellule fusionnée avec "Page" dans le cas d\'une fiche bazar.',
		  'MEDIA_VERSION_EXPLANATION' => 'Version la plus récente de ce media appelée par la même page. Cellule fusionnée avec "Page" dans le cas d\'une fiche bazar.',
		  'MEDIA_INACTIVE_PAGE' => 'Pas trouvé de page active',
		  'MEDIA_USED_ON_PAGE_LATEST_VERSION' => 'Dernière',
		  'MEDIA_UNUSED_ON_PAGE_LATEST_VERSION' => 'Ancienne',
		  'MEDIA_DELETE' => 'Supprimer le fichier',
		  'MEDIA_UNABLE_TO_UNDERSTAND_FILE_NAME' => 'Le nom de fichier a une forme imprévue',
		  'MEDIA_FIELD' => 'champ',
		  'MEDIA_EXPLANATIONS' => 'Explications',
		  'MEDIA_NOTICES' => 'Remarques',
		  'MEDIA_FOLLOWING_PAGE_CONTAINS_EMPTY_ATTACH' => 'La page wiki suivante contient une action {{attach}} vide',
    )
);
