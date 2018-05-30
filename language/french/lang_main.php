<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // if your language is  right to left then uncomment this line
// $language["charset"]="ISO-8859-1"; // uncomment this line with specific language charset if different than tracker's one
$language["ACCOUNT_CONFIRM"]="Confirmation de compte chez $SITENAME.";
$language["ACCOUNT_CONGRATULATIONS"]="Félicitation votre compte a bien été créé !<br />Maintenant vous pouvez vous <a href=index.php?page=login>connecter</a> avec vos identifiants.";
$language["ACCOUNT_CREATE"]="Créer un compte";
$language["ACCOUNT_DELETE"]="Supprimer mon compte";
$language["ACCOUNT_DETAILS"]="Détails du compte";
$language["ACCOUNT_EDIT"]="Editer le compte";
$language["ACCOUNT_MGMT"]="Gestion du compte";
$language["ACCOUNT_MSG"]="Bonjour,\n\nCe courriel a été envoyé parce que quelqu'un a demandé la création d'un compte sur notre site avec cette adresse mail.\nSi vous n'êtes pas l'auteur de la demande, ignorez ce courriel, sinon merci de confirmer l'inscription. \n\nSalutations chaleureuses de la part du Staff.";
$language["ACTION"]="Action";
$language["ACTIVATED"]="Actif";
$language["ACTIVE"]="Statut";
$language["ACTIVE_ONLY"]="Actifs seuls";
$language["ADD"]="Ajouter";
$language["ADDED"]="Ajouté le";
$language["ADMIN_CPANEL"]="Panneau d'Administration.";
$language["ADMINCP_NOTES"]="Ici, vous pouvez contrôler tous les paramètres de votre Tracker...";
$language["ALL"]="Tout";
$language["ALL_SHOUT"]="Tous les Shouts";
$language["ANNOUNCE_URL"]="L'URL d'annonce du Tracker :";
$language["ANONYMOUS"]="Anonyme";
$language["ANSWER"]="Réponse";
$language["AUTHOR"]="Auteur";
$language["AVATAR_URL"]="Avatar (URL) : ";
$language["AVERAGE"]="Moyenne";
$language["BACK"]="Retour";
$language["BAD_ID"]="Mauvaise ID !";
$language["BCK_USERCP"]="Retour au panneau d'Utilisateur";
$language["BLOCK"]="Bloc";
$language["BODY"]="Corps";
$language["BOTTOM"]="Bas";
$language["BY"]="Par";
$language["CANT_DELETE_ADMIN"]="Il est impossible de supprimer un autre administrateur !";
$language["CANT_DELETE_NEWS"]="Vous n'êtes pas autorisé à supprimer des nouvelles !";
$language["CANT_DELETE_TORRENT"]="Vous n'êtes pas autorisé à supprimer ce Torrent !";
$language["CANT_DELETE_USER"]="Vous n'êtes pas autorisé à supprimer des Utilisateurs !";
$language["CANT_DO_QUERY"]="Ne peut effectuer la requête SQL - ";
$language["CANT_EDIT_TORR"]="Vous n'êtes pas autorisé à modifier ce Torrent !";
$language["CANT_FIND_TORRENT"]="Impossible de trouver le fichier Torrent !";
$language["CANT_READ_LANGUAGE"]="Impossible de lire le fichier de langues !";
$language["CANT_SAVE_CONFIG"]="Impossible d'écrire dans le fichier 'config.php'";
$language["CANT_SAVE_LANGUAGE"]="Impossible d'enregistrer le fichier de langue";
$language["CANT_WRITE_CONFIG"]="Attention : impossible d'écrire dans 'config.php'!";
$language["CATCHUP"]="Tout marquer comme lu";
$language["CATEGORY"]="Cat.";
$language["CATEGORY_FULL"]="Catégorie";
$language["CENTER"]="centrer";
$language["CHANGE_PID"]="Changer le PID";
$language["CHARACTERS"]="caratères";
$language["CHOOSE"]="Choisir";
$language["CHOOSE_ONE"]="Choisir un";
$language["CLICK_HERE"]="Cliquer ici";
$language["CLOSE"]="Fermer";
$language["COMMENT"]="Com.";
$language["COMMENT_1"]="Commentaire";
$language["COMMENT_PREVIEW"]="Prévisualiser le commentaire.";
$language["COMMENTS"]="Commentaires";
$language["CONFIG_SAVED"]="Félicitation, la nouvelle configuration a bien été prise en compte !";
$language["COUNTRY"]="Pays";
$language["CURRENT_DETAILS"]="Détails actuels";
$language["DATABASE_ERROR"]="Erreur de la BDD.";
$language["DATE"]="Date";
$language["DB_ERROR_REQUEST"]="Erreur de la BDD. Impossible de poursuivre.";
$language["DB_SETTINGS"]="Configuration de la BDD";
$language["DEAD_ONLY"]="Morts seuls";
$language["DELETE"]="Supprimer";
$language["DELETE_ALL_READED"]="Supprimer tout les lus";
$language["DELETE_CONFIRM"]="Êtes-vous sûr de vouloir supprimer ceci ?";
$language["DELETE_TORRENT"]="Supprimer le Torrent";
$language["DELFAILED"]="La suppression a échouée";
$language["DESCRIPTION"]="Description";
$language["DONT_NEED_CHANGE"]="Vous ne devez pas changer ces paramètres !";
$language["DOWN"]="DL";
$language["DOWNLOAD"]="Télécharger";
$language["DOWNLOAD_TORRENT"]="Télécharger le Torrent";
$language["DOWNLOADED"]="Téléchargé";
$language["EDIT"]="Editer";
$language["EDIT_LANGUAGE"]="Editer la langue";
$language["EDIT_POST"]="Editer le post";
$language["EDIT_TORRENT"]="Editer le Torrent";
$language["EMAIL"]="Courriel";
$language["EMAIL_SENT"]="Un courriel a été envoyé à l'adresse indiquée<br />Cliquez sur le lien inclus pour confirmer votre compte.";
$language["EMAIL_VERIFY"]="mise à jour du courriel chez $SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="Courriel de vérification envoyé";
$language["EMAIL_VERIFY_MSG"]="Bonjour,\n\nCe message électronique a été envoyé parce que vous avez demandé un changement de courriel, merci de cliquer sur le lien ci-dessous pour valider la modification.\n\nSalutations chaleureuses de la part du Staff.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>Un message de vérification a été envoyé à :<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />Vous devrez cliquer sur le lien contenu dans le courriel afin<br />de mettre à jour votre adresse mail. Le courriel doit arriver dans les 10 prochaines minutes<br /> si ce n'est pas le cas, vérifiez vos SPAM.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 Accès refusé !";
$language["ERR_AVATAR_EXT"]="Désolé, seuls les fichiers gif, jpg, et png sont permis";
$language["ERR_BAD_LAST_POST"]="Erreur du dernier post !";
$language["ERR_BAD_NEWS_ID"]="Mauvaise ID de nouvelle !";
$language["ERR_BODY_EMPTY"]="Le coprs ne peut être vide !";
$language["ERR_CANT_CONNECT"]="Impossible de se connecter au serveur local MySQL";
$language["ERR_CANT_OPEN_DB"]="Impossible d'ouvrir la BDD";
$language['ERR_COMMENT_EMPTY']='Le commentaire ne peut être vide!';
$language["ERR_DB_ERR"]="Erreur dans la BDD. Merci de contacter un administrateur à ce sujet.";
$language["ERR_DELETE_POST"]="Suppression du post. Contrôle sanitaire : Vous supprimez un post. Cliquez";
$language["ERR_DELETE_TOPIC"]="Suppression d'un topic. Contrôle sanitaire : Vous supprimez un sujet. Cliquez";
$language["ERR_EMAIL_ALREADY_EXISTS"]="Cette adresse mail est déjà utilisée !";
$language["ERR_EMAIL_NOT_FOUND_1"]="L'adresse mail";
$language["ERR_EMAIL_NOT_FOUND_2"]="n'a pas été trouvée.";
$language["ERR_ENTER_NEW_TITLE"]="Vous devez entrer un nouveau titre !";
$language["ERR_FORUM_NOT_FOUND"]="Forum introuvable";
$language["ERR_FORUM_UNKW_ACT"]="Erreur du forum : Action non reconnue";
$language["ERR_GUEST_EXISTS"]="'Impossible d'utiliser le nom d'utilisateur 'Invité' !";
$language["ERR_IMAGE_CODE"]="Le code de securité ne correspond pas.";
$language["ERR_INS_TITLE_NEWS"]="Vous devez mettre un titre ET une nouvelle";
$language["ERR_INV_NUM_FIELD"]="Champ numérique invalide provenant du client";
$language["ERR_INVALID_CLIENT_EVENT"]="Evènement inattendu venant du client.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="Informations invalides venant du client BitTorrent";
$language["ERR_INVALID_IP_NUMB"]="Adresse IP invalide. Doit être au format standard (Noms d'hôte non autorisés)";
$language["ERR_LEVEL"]="Désolé, votre niveau ";
$language["ERR_LEVEL_CANT_POST"]="Vous n'êtes pas autorisé à poster dans ce forum.";
$language["ERR_LEVEL_CANT_VIEW"]="Vous n'êtes pas autorisé à afficher ce sujet.";
$language["ERR_MISSING_DATA"]="Données manquantes !";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="Vous devez être connecté pour écrire...";
$language["ERR_NO_BODY"]="Aucun texte dans le corps";
$language["ERR_NO_NEWS_ID"]="L'ID de la nouvelle n'a pas été trouvé !";
$language["ERR_NO_POST_WITH_ID"]="Aucun post avec cet ID";
$language["ERR_NO_SPACE"]="Votre nom d'Utilisateur ne doit pas contenir d'espace, merci de le remplacer par un trait de soulignement (underscore), ex :<br /><br />";
$language["ERR_NO_TOPIC_ID"]="Aucun ID de Topic renvoyé";
$language["ERR_NO_TOPIC_POST_ID"]="Aucun Topic avec cet ID";
$language["ERR_NOT_AUTH"]="Vous n'êtes pas autorisé !";
$language["ERR_NOT_FOUND"]="Non Trouvé...";
$language["ERR_NOT_PERMITED"]="Non permis";
$language['ERR_PASS_LENGTH_1']="Votre mot de passe doit être d'au moins";
$language['ERR_PASS_LENGTH_2']='caractères de long.';
$language["ERR_PASS_TOO_WEAK_1"]="Votre mot de passe est trop simple.<br />Par mesure de sécurité, il doit contenir au moins";
$language["ERR_PASS_TOO_WEAK_1A"]="Votre mot de passe est trop simple.<br />Par mesures de sécurité, il doit contenir au moins";
$language["ERR_PASS_TOO_WEAK_2"]="lettre minuscule";
$language["ERR_PASS_TOO_WEAK_2A"]="lettres minuscules";
$language["ERR_PASS_TOO_WEAK_3"]="lettre majuscule";
$language["ERR_PASS_TOO_WEAK_3A"]="lettres majuscules";
$language["ERR_PASS_TOO_WEAK_4"]="chiffre";
$language["ERR_PASS_TOO_WEAK_4A"]="chiffres";
$language["ERR_PASS_TOO_WEAK_5"]="caractère spécial";
$language["ERR_PASS_TOO_WEAK_5A"]="caractères spéciaux";
$language["ERR_PASS_TOO_WEAK_6"]="Voici un bon mot de passe que vous pouvez utiliser";
$language['ERR_PASSWORD_INCORRECT']='Mot de passe incorrect';
$language['ERR_PERM_DENIED']='Accès réfusé';
$language['ERR_PID_NOT_FOUND']='Veillez re-télécharger le Torrent. Le système de PID est actif et aucun PID n\'a été trouvé sur le Torrent';
$language['ERR_RETR_DATA']='Erreur dans la réception des données';
$language['ERR_SEND_EMAIL']='Ne peut pas envoyer de mail. Merci de contacter un Administration à propos de cete erreur.';
$language['ERR_SERVER_LOAD']="La charge du Serveur est très élevée en ce moment. Nouvel essai, veillez patienter...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">Votre nom d'utilisateur ne doit pas contenir de caratères spéciaux :<br /><br /><font color=\"red\"><strong>* &#63; &#60; &#62; &#64; &#36; &#38; &#37; etc.</strong></font></font><br />";
$language["ERR_SQL_ERR"]="Erreur SQL";
$language["ERR_SUBJECT"]="Vous devez entrer un sujet.";
$language["ERR_TOPIC_ID_NA"]="L'ID du topic est invalide";
$language["ERR_TOPIC_LOCKED"]="Le Topic est Vérrouillé";
$language["ERR_TORRENT_IN_BROWSER"]="Ce fichier est pour les clients BitTorrent.";
$language["ERR_UPDATE_USER"]="Impossible de mettre à jour les données de l'Utilisateur. Merci de contacter un administrateur pour rapporter cette erreur.";
$language["ERR_USER_ALREADY_EXISTS"]="Il y'a déja un utilisateur avec ce pseudonyme !";
$language["ERR_USER_NOT_FOUND"]="Désolé, l'Utilisateur n'a pas été trouvé";
$language["ERR_USER_NOT_USER"]="Vous n'êtes pas autorisé à accéder au panneau des Utilisateurs !";
$language["ERR_USERNAME_INCORRECT"]="Nom d'Utilisateur incorrect";
$language["ERROR"]="Erreur";
$language["ERROR_ID"]="Erreur d'ID";
$language["FACOLTATIVE"]="optionnel";
$language["FILE"]="Fichier";
$language["FILE_CONTENTS"]="Contenu du fichier";
$language["FILE_NAME"]="Nom de fichier";
$language["FIND_USER"]="Trouver un Utilisateur";
$language["FINISHED"]="Fini";
$language["FORUM"]="Forum";
$language["FORUM_ERROR"]="Erreur de forum";
$language["FORUM_INFO"]="Info du forum";
$language["FORUM_MIN_CREATE"]="Droit minimum de création";
$language["FORUM_MIN_READ"]="Droit minimum de lecture";
$language["FORUM_SEARCH"]="Rechercher dans les forums";
$language['FORUM_N_SORT_H']='Ordre de tri - haut';
$language['FORUM_N_SORT_S']='Ordre de tri - bas';
$language['FORUM_SORT']='Ordre de tri';
$language["FORUM_N_TOPICS"]="N. Topics";
$language["FORUM_N_POSTS"]="N. Posts";
$language["FRM_DELETE"]="Supprimer";
$language["FRM_LOGIN"]="Connexion";
$language["FRM_PREVIEW"]="Prévisualiser";
$language["FRM_REFRESH"]="Rafraîchir";
$language["FRM_RESET"]="Réinitialiser";
$language["FRM_SEND"]="Envoyer";
$language["FRM_CONFIRM"]="Confirmer";
$language["FRM_CANCEL"]="Annuler";
$language["FRM_CLEAN"]="Nettoyer";
$language["GLOBAL_SERVER_LOAD"]="Charge Global Serveur (de tous les sites sur ce serveur) ";
$language["GO"]="Aller";
$language["GROUP"]="Groupe";
$language["GUEST"]="Invité";
$language["GUESTS"]="Invités";
$language["HERE"]="ici";
$language["HISTORY"]="Historique";
$language["HOME"]="Acceuil";
$language["IF_YOU_ARE_SURE"]="si vous êtes sûr.";
$language["IM_SURE"]="Je suis sûr";
$language["IN"]="dans";
$language["INF_CHANGED"]="Informations changées !";
$language["INFINITE"]="Inf.";
$language["INFO_HASH"]="Info Hash";
$language["INS_NEW_PWD"]="Entrez un NOUVEAU mot de passe !";
$language["INS_OLD_PWD"]="Entrez l'ANCIEN mot de passe !";
$language["INSERT_DATA"]="Entrez les données requises pour upload !";
$language["INSERT_NEW_FORUM"]="Insérer un nouveau forum";
$language["INVALID_ID"]="Cet ID n'est pas valide, désolé.";
$language["INVALID_INFO_HASH"]="Valeur  de Hash invalide.";
$language["INVALID_PID"]="PID invalide";
$language["INVALID_TORRENT"]="Erreur du Tracker : Torrent invalide";
$language["KEYWORDS"]="Mots clés";
$language["LAST_EXTERNAL"]="Les derniers Torrents externes ont été mis à jour ";
$language["LAST_NEWS"]="Dernières nouvelles";
$language["LAST_POST_BY"]="Dernier post par";
$language["LAST_SANITY"]="La dernière veille sanitaire date du ";
$language["LAST_TORRENTS"]="Derniers Torrents";
$language["LAST_UPDATE"]="Dernière mise à jour";
$language["LASTPOST"]="Dernier post";
$language["LEECHERS"]="Leechers";
$language["LEFT"]="gauche";
$language["LOGIN"]="Connexion";
$language["LOGOUT"]="Déconnexion";
$language["MAILBOX"]="Messagerie";
$language["MANAGE_NEWS"]="Gérer les nouvelles";
$language["MEMBER"]="Utilisateur";
$language["MEMBERS"]="Utilisateurs";
$language["MEMBERS_LIST"]="Liste des Utilisateurs";
$language["MINIMUM_100_DOWN"]="(avec 100Mo min. téléchargés)";
$language["MINIMUM_5_LEECH"]="avec 5 Leechers minimum, Torrents morts non inclus";
$language["MINIMUM_5_SEED"]="avec 5 Seeders minimum";
$language["MKTOR_INVALID_HASH"]="makeTorrent : Hash invalide reçu";
$language["MNU_ADMINCP"]="Panneau d'Administration";
$language["MNU_FORUM"]="Forum";
$language["MNU_INDEX"]="Index";
$language["MNU_MEMBERS"]="Membres";
$language["MNU_NEWS"]="Nouvelles";
$language["MNU_STATS"]="Statistiques Extras";
$language["MNU_TORRENT"]="Torrents";
$language["MNU_UCP_CHANGEPWD"]="Changer le mot de passe";
$language["MNU_UCP_HOME"]="Acceuil du panneau d'Utilisateur";
$language["MNU_UCP_IN"]="Votre boîte réception";
$language["MNU_UCP_INFO"]="Editer le profil";
$language["MNU_UCP_NEWPM"]="Nouveau message";
$language["MNU_UCP_OUT"]="Votre boîte d'envoi";
$language["MNU_UCP_PM"]="Votre messagerie";
$language["MNU_UPLOAD"]="Upload";
$language["MORE_SMILES"]="Plus d'émoticônes";
$language["MORE_THAN"]="Plus de ";
$language["MORE_THAN_2"]="éléments trouvés, affichage d'abord";
$language["NA"]="Indisponible";
$language["NAME"]="Nom";
$language["NEED_COOKIES"]="Note : Votre navigateur doit accepter les Cookies.";
$language["NEW_COMMENT"]="Commenter";
$language["NEW_COMMENT_T"]="Nouveau commentaire";
$language["NEWS"]="les nouvelless";
$language["NEWS_DESCRIPTION"]="Nouvelles :";
$language["NEWS_INSERT"]="Insérer vos nouvelles";
$language["NEWS_PANEL"]="Panneau des nouvelles";
$language["NEWS_TITLE"]="Titre :";
$language["NEXT"]="Suivant";
$language["NO"]="Non";
$language["NO_BANNED_IPS"]="Il n'y a pas d'IP bannie";
$language["NO_COMMENTS"]="Aucun commentaire...";
$language["NO_FORUMS"]="Pas de forum trouvé !";
$language["NO_MAIL"]="vous n'avez pas de nouveau message.";
$language["NO_MESSAGES"]="Pas de message privé trouvé...";
$language["NO_NEWS"]="Pas de nouvelle";
$language["NO_PEERS"]="Pas de Pair";
$language["NO_RECORDS"]="Désolé, la liste est vide...";
$language["NO_TOPIC"]="Pas de Topic trouvé";
$language["NO_TORR_UP_USER"]="Aucun Torrent uploadé";
$language["NO_TORRENTS"]="Aucun Torrent ici...";
$language["NO_USERS_FOUND"]="Pas d'Utilisateur trouvé !";
$language["NOBODY_ONLINE"]="Personne n'est en ligne";
$language["NONE"]="Aucun";
$language["NOT_ADMIN_CP_ACCESS"]="Vous n'êtes pas autorisé à accéder au panneau d'administration !";
$language["NOT_ALLOW_DOWN"]="il n'est pas permis de télécharger à partir de";
$language["NOT_AUTH_DOWNLOAD"]="Vous n'êtes pas autorisé à télécharger, désolé...";
$language["NOT_AUTH_VIEW_NEWS"]="Vous n'êtes pas autorisé à voir les nouvelles !";
$language["NOT_AUTHORIZED"]="Vous n'êtes pas autorisé à voir le";
$language["NOT_AUTHORIZED_UPLOAD"]="Vous n'êtes pas autorisé à uploader!";
$language["NOT_AVAILABLE"]="Non disponible";
$language["NOT_MAIL_IN_URL"]="Ce n'est pas l'adresse mail qui était dans le lien !";
$language["NOT_POSS_RESET_PID"]="Impossible de renouveller votre PID. Merci de contacter un Admin.";
$language["NOW_LOGIN"]="Maintenant, vous êtes invité à vous reconnecter";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="Ancien mot de passe";
$language["ONLY_REG_COMMENT"]="Seuls les Utilisateurs enregistré peuvent commenter !";
$language["OPT_DB_RES"]="Résultat de l'optimisation de la BDD";
$language["OPTION"]="Option";
$language["PASS_RESET_CONF"]="confirmation de réinitialisation du mot de passe";
$language["PEER_CLIENT"]="Client";
$language["PEER_COUNTRY"]="Pays";
$language["PEER_ID"]="ID de Pair";
$language["PEER_LIST"]="Liste des Pairs";
$language["PEER_PORT"]="Port";
$language["PEER_PROGRESS"]="Progression";
$language["PEER_STATUS"]="Statut";
$language["PEERS"]="Pairs";
$language["PEERS_DETAILS"]="Cliquer ici pour voir les détails des Pairs";
$language["PICTURE"]="Image";
$language["PID"]="PID";
$language["PLEASE_WAIT"]="Veillez Patientez...";
$language["PM"]="MP";
$language["POSITION"]="Position";
$language["POST_REPLY"]="Répondre";
$language["POSTED_BY"]="Posté par";
$language["POSTED_DATE"]="Posté le";
$language["POSTS"]="Posts";
$language["POSTS_PER_DAY"]="%s posts par jour";
$language["POSTS_PER_PAGE"]="Posts par page";
$language["PREVIOUS"]="Préc.";
$language["PRIVATE_MSG"]="Message privé";
$language["PWD_CHANGED"]="Mot de passe changé !";
$language["QUESTION"]="Question";
$language["QUICK_JUMP"]="Saut rapide";
$language["QUOTE"]="Citer";
$language["RANK"]="Rang";
$language["RATIO"]="Ratio";
$language["REACHED_MAX_USERS"]="Nombre max. d'Utilisateurs atteint";
$language["READED"]="Lu";
$language["RECEIVER"]="Destinataire";
$language["RECOVER_DESC"]="Utilisez le formulaire ci-dessous pour réinitialiser votre mot de passe. <br /> (Vous recevrez un courriel de confirmation.)";
$language["RECOVER_PWD"]="Mot de passe oublié";
$language["RECOVER_TITLE"]="Nom d'Utilisateur ou mot de passe oublié";
$language["REDIRECT"]="si votre navigateur n'accepte pas JavaScript, cliquez";
$language['REDIRECT2']="Si votre navigateur n'accepte pas JavaScript, cliquez <a href=\"%s\">ici</a>";
$language["REDOWNLOAD_TORR_FROM"]="Re-télécharger le Torrent depuis";
$language["REGISTERED"]="Enregistré";
$language["REGISTERED_EMAIL"]="Courriel enregistré";
$language["REMOVE"]="Supprimer";
$language["REPLIES"]="Réponses";
$language["REPLY"]="Répondre";
$language["RESULT"]="Resultat";
$language["RETRY"]="Réessayer";
$language["RETURN_TORRENTS"]="Retour à la liste des Torrents";
$language["REVERIFY_CONGRATS1"]="<center><br />Félicitation, votre courriel a bien été verifié et correctement changé<br /><br /><strong>De : <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>Pour : <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>Désolé, mais ce  lien n'est pas valide.</ u></ strong></ font><br /><br />Un nouveau nombre est généré à chaque fois que vous essayez de changer votre adresse mail donc<br />Si vous voyez ce message, c'est que vous avez très probablement essayé de changer votre adresse mail<br />plus d'une fois et que vous utilisez un ancien lien.<br /><br /><strong>Merci d'attendre jusqu'à ce que vous soyez absolument sûr que vous n'avez pas reçu le<br />courriel de confirmation avant d'essayer de changer à nouveau votre adresse mail.</strong><br /><br />";
$language["REVERIFY_MSG"]="Si vous essayez de changer votre adresse mail, vous devrez valider le changement grâce au courriel de confirmation envoyé à l'adresse que vous souhaitez utiliser (la nouvelle).<br /><br /><font Color=\"red\"><strong>L'adresse mail (ancienne) ne sera pas mise à jour tant que vous n'aurez pas verifié la nouvelle adresse en cliquant sur le lien.</strong></font>";
$language["RIGHT"]="rroite";
$language["SEARCH"]="Chercher";
$language["SEEDERS"]="Seeds";
$language["SEEN"]="Vu/s";
$language["SELECT"]="Sélectionner...";
$language["SENDER"]="Expéditeur";
$language["SENT_ERROR"]="Erreur lors de l'envoi";
$language["SHORT_C"]="C"; //Shortname for Completed
$language["SHORT_L"]="L"; //Shortname for Leechers
$language["SHORT_S"]="S"; //Shortname for Seeders
$language["SHOUTBOX"]="ShoutBox";
$language["SIZE"]="Taille";
$language["SORRY"]="Désolé";
$language["SORTID"]="Classer par ID";
$language["SPEED"]="Vitesse";
$language["STICKY"]="Collant";
$language["SUB_CATEGORY"]="Sous-catégorie";
$language["SUBJECT"]="Sujet";
$language["SUBJECT_MAX_CHAR"]="Le sujet est limité à ";
$language["SUC_POST_SUC_EDIT"]="Post édité avec succès.";
$language["SUC_SEND_EMAIL"]="Un courriel de confirmation a été envoyé à";
$language["SUC_SEND_EMAIL_2"]="Merci de patienter le temps que le courrier arrive.";
$language["SUCCESS"]="Succès";
$language["SUMADD_BUG"]="Bug de Tracker appelé summaryAdd";
$language["TABLE_NAME"]="Nom de la Table";
$language["TIMEZONE"]="Fuseau horraire";
$language["TITLE"]="Titre";
$language["TOP"]="haut";
$language["TOP_10_ACTIVE"]="10 Torrents les plus actifs";
$language["TOP_10_BEST_SEED"]="10 Torrents les plus seedés";
$language["TOP_10_BSPEED"]="10 Torrents les plus rapides";
$language["TOP_10_DOWNLOAD"]="Top 10 Téléchargeurs";
$language["TOP_10_SHARE"]="Top 10 meilleurs Participants";
$language["TOP_10_UPLOAD"]="Top 10 Uploaders";
$language["TOP_10_WORST"]="Top 10 pires Participants";
$language["TOP_10_WORST_SEED"]="10 Torrents les moins seedés";
$language["TOP_10_WSPEED"]="10 Torrents les moins rapides";
$language["TOP_TORRENTS"]="Torrents les plus populaires";
$language["TOPIC"]="Topic";
$language["TOPICS"]="Topics";
$language["TOPICS_PER_PAGE"]="Topics par page";
$language["TORR_PEER_DETAILS"]="Détails des Pairs";
$language["TORRENT"]="Torrent";
$language["TORRENT_ANONYMOUS"]="Upload Anonyme";
$language["TORRENT_CHECK"]="Permettre au Tracker de récupérer et utiliser les informations du fichier Torrent.";
$language["TORRENT_DETAIL"]="Détails du Torrent";
$language["TORRENT_FILE"]="Fichier Torrent";
$language["TORRENT_SEARCH"]="Chercher des Torrents";
$language["TORRENT_STATUS"]="Statut";
$language["TORRENT_UPDATE"]="Mise à jour en cours, veillez patientez...";
$language["TORRENTS"]="Torrents";
$language["TORRENTS_PER_PAGE"]="Torrents par page";
$language["TRACK_DB_ERR"]="Erreur du site ou de la BDD. Les détails sont dans le journal d'erreurs.";
$language["TRACKER_INFO"]="$users Utilisateurs, $torrents Torrents suivis ($seeds seeds, $leechers leechers, $percent%)";
$language["TRACKER_LOAD"]="Charge du Tracker";
$language["TRACKER_SETTINGS"]="Configuration du Tracker";
$language["TRACKER_STATS"]="Stats du Tracker";
$language["TRACKING"]="suivi";
$language["TRAFFIC"]="Trafic";
$language["UCP_NOTE_1"]="Ici, vous pouvez contrôler votre boîte de réception et écrire à d'autres Utilisateurs,";
$language["UCP_NOTE_2"]="Contrôler et modifier vos paramêtres, etc.";
$language["UNAUTH_IP"]="Adresse IP bannie";
$language["UNKNOWN"]="inconnu";
$language["UPDATE"]="Mise à jour";
$language["UPFAILED"]="L'upload a echoué";
$language["UPLOAD_IMAGE"]="Envoi d'image";
$language["UPLOAD_LANGUAGE_FILE"]="Envoi du fichier de langue";
$language["UPLOADED"]="Uploadé";
$language["UPLOADER"]="Uploader";
$language["UPLOADS"]="Uploads";
$language["URL"]="URL";
$language["USER_CP"]="Mon compte";
$language["USER_CP_1"]="Panneau Utilisateur";
$language["USER_DETAILS"]="Détails de l'Utilisateur";
$language["USER_EMAIL"]="Adresse mail valide";
$language["USER_ID"]="ID de l'Utilisateur";
$language["USER_JOINED"]="Incrit depuis";
$language["USER_LASTACCESS"]="Dernier accès";
$language["USER_LEVEL"]="Rang";
$language["USER_LOCAL_TIME"]="Fuseau horaire";
$language["USER_NAME"]="Utilisateur";
$language["USER_PASS_RECOVER"]="Récupération de nom d'Utilisateur/mot de passe";
$language["USER_PWD"]="Mot de passe";
$language["USERS_SEARCH"]="Recherche d'Utilisateurs";
$language["VIEW_DETAILS"]="Voir les détails";
$language["VIEW_TOPIC"]="Voir le Topic";
$language["VIEW_UNREAD"]="Voir les non-lus";
$language["VIEWS"]="Vus";
$language["VISITOR"]="Visiteur";
$language["VISITORS"]="Visiteurs";
$language["WAIT_ADMIN_VALID"]="Vous devez attendre que l'Administrateur valide votre compte...";
$language["WARNING"]="Attention !";
$language["WELCOME"]="Bienvenue";
$language["WELCOME_ADMINCP"]="Bienvenue dans le panneau d'Admin.";
$language["WELCOME_BACK"]="Bienvenue";
$language["WELCOME_UCP"]="Bienvenue dans votre panneau Utilisateur.";
$language["WORD_AND"]="et";
$language["WORD_NEW"]="Nouveau";
$language["WROTE"]="écrit :";
$language["WT"]="TA (Temps d'Attente)";
$language["X_TIMES"]="fois";
$language["YES"]="Oui";
$language["LAST_IP"]="Derniére IP";
$language["FIRST_UNREAD"]="Aller au premier post non-lu";
$language["MODULE_UNACTIVE"]="Le module nécessaire n'est pas activé !";
$language["MODULE_NOT_PRESENT"]="Le module nécessaire n'existe pas !";
$language["MODULE_LOAD_ERROR"]="Le module nécessaire semble être incorrecte !";
$language['BACK_TO_TOP']='Retour en haut';

$language['RESET_PID'] = 'Renouveller le PID';
# Language definitions added by TreetopClimber.
$language['EXTRA']='extra';
$language['DROPDOWN']='déroulant';
$language['TORRENT_MENU']='Menu Torrent';
$language['USER_MENU']='Menu Utilisateur';
$language['ADMIN_ACCESS']='Accès Admin';
$language['STAFF_ACCESS']='Staff';
$language['UPLOAD_LINK']='Upload de Torrent';
# End

$language["USERNAME"]="Pseudo";
$language["SUBMIT"]="Soumettre";

$language["QUAR_PM_SUBJ"]="Tentative de piratage suspecté";
$language["QUAR_PM_MSG_1"]="a essayé d'uploader un fichier contenant du code PHP. Ce fichier a été mis en Quarantaine";
$language["QUAR_PM_MSG_2"]="Il pourrait s'agir d'un Faux Positif donc veillez vérifier le fichier avec un éditeur Hex ou similaire avant de bannir cet Utilisateur"."\n\n"."Cette tentative a été faite via";
$language["QUAR_OUTPUT"]="Votre tentative d'upload de fichier malveillant a été repérée et vous avez été signalé au propriétaire du Tracker!";
$language["QUAR_ERR"]="Erreur de mise en Quarantaine";
$language["QUAR_DIR_PROBLEM_1"]="Dossier de Quarantaine";
$language["QUAR_DIR_PROBLEM_2"]="n'existe pas. Veillez définir un Dossier de Quarantaine valide dnns [b]Panneau d'Admin --> Configuration de la Suite de Sécurité[/b]";
$language["QUAR_DIR_PROBLEM_3"]="n'est pas inscriptible, veillez changer le CHMOD à 0777";
$language["QUAR_UNABLE"]="Impossible de mettre le fichier en Quarantaine à cause d'une erreur inattendue. Veillez vérifier vos autres MP pour les détails de résolution de ce problème";
$language["QUAR_NOT_SET"]="Dossier non défini";
$language["QUAR_TMP_FILE_MISS"]="Fichier temporaire introuvable!";

$language["SECSUI_ACC_PWD_1"]="Votre mot de passe doit:";
$language["SECSUI_ACC_PWD_1A"]="Le mot de passe doit:";
$language["SECSUI_ACC_PWD_2"]="être au moins de";
$language["SECSUI_ACC_PWD_3"]="caractère de long";
$language["SECSUI_ACC_PWD_3A"]="caractères de long";
$language["SECSUI_ACC_PWD_4"]="contenir au moins";
$language["SECSUI_ACC_PWD_5"]="lettre minuscule";
$language["SECSUI_ACC_PWD_5A"]="lettres minuscules";
$language["SECSUI_ACC_PWD_6"]="lettre majuscule";
$language["SECSUI_ACC_PWD_6A"]="lettres majuscules";
$language["SECSUI_ACC_PWD_7"]="chiffre";
$language["SECSUI_ACC_PWD_7A"]="chiffres";
$language["SECSUI_ACC_PWD_8"]="caractère spécial";
$language["SECSUI_ACC_PWD_8A"]="caractères spéciaux";

$language["LOGS_PHP"]="Journal d'erreurs PHP";
$language["LOGS_LINE_AMT"]="<b>Nombre de lignes:</b>";
$language["LOGS_LINE_AMT_1"]="<b>Combien de lignes montrer du journal</b>";
$language["LOGS_COOLY_NAME"]="<b>Nom du Journal:</b>&nbsp;Comment vous voulez appeler vos journaux. Soyez original.";
$language["LOGS_COOLY_NAMES"]="Ceci sera commun à chaque journal à part la date.";
$language["LOGS_COOLY_PATH"]="<b>Chemin du Journal:</b>&nbsp;Au dessus de la racine serait un bon choix \"si possible\" sans le dernier slash<br /> et le dossier doit être inscriptible. Si vous avez des restrictions sur les dossiers, c'est mieux de garder le chemin actuel.";
$language["LOGS_COOLY_PATHS"]="Recommandé:";
$language["LOGS_COOLY_NOTE"]="<b>Si vous changez de chemin, soyez sûr d'avoir aussi copié le .htaccess dans le nouveau dossier.</b>";
$language["LOGS_COOLY_LIST"]="La liste des anciens journaux dans votre dossier.";
$language["LOGS_COOLY_FLUSH"]="Vider</a> les anciens journaux";
?>