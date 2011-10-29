<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.130 2007/09/26 15:33:20 pc_freak Exp $
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
#$lang['character_encoding'] = 'iso-8859-1';
#$lang['language_code'] = 'en';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Accueil';
$lang['YourPanel'] = 'Votre Panneau';
$lang['Register'] = 'S\'enregistrer';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Rechercher';
$lang['ActiveTopics'] = 'R&eacute;cents';
$lang['LogIn'] = 'Se connecter';
$lang['LogOut'] = 'Se d&eacute;connecter (%s)';
$lang['MemberList'] = 'Liste des membres';
$lang['StaffList'] = 'Equipe';
$lang['Statistics'] = 'Statistiques';
$lang['ContactAdmin'] = 'Contacter l\'admin.';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Sujets';
$lang['Posts'] = 'Messages';
$lang['LatestPost'] = 'Dernier message';
$lang['RSSFeed'] = 'Flux RSS';
$lang['NewPosts'] = 'Nouveaux messages';
$lang['NoNewPosts'] = 'Pas de nouveaux messages';
$lang['LockedNewPosts'] = 'Bloqu&eacute; (nouveaux messages)';
$lang['LockedNoNewPosts'] = 'Bloqu&eacute; (pas de nouveaux messages)';
$lang['Locked'] = 'Bloqu&eacute;';
$lang['LastLogin'] = 'Derni&egrave;re connection';
$lang['VariousInfo'] = 'Informations diverses';
$lang['IndexStats'] = 'Ce forum contient %d message(s) dans %d sujet(s) et a %d membre(s) enregistr&eacute;(s).';
$lang['NewestMemberExtended'] = 'Bienvenue &agrave; notre nouveau membre : %s.';
$lang['Username'] = 'Nom d\'utilisateur';
$lang['CurrentPassword'] = 'Mot de passe actuel';
$lang['UserID'] = 'ID Utilisateur';
$lang['NoSuchForum'] = 'Cette partie %s n\'existe pas/plus dans ce forum !';
$lang['WrongPassword'] = 'D&eacute;sol&eacute;, mais ce mot de passe est incorrect ! Demandez un nouveau mot de passe via le formulaire de connection si vous l\'avez oubli&eacute;.';
$lang['Reset'] = 'R&eacute;-initialiser';
$lang['SendPassword'] = 'Envoyer un nouveau mot de passe';
$lang['RegisterNewAccount'] = 'Enregistrer un nouveau compte';
$lang['RememberMe'] = 'Se souvenir de moi';
$lang['Yes'] = 'Oui';
$lang['No'] = 'Non';
$lang['NotActivated'] = 'Votre compte %s n\'a pas encore &eacute;t&eacute; activ&eacute;. Veuillez consulter votre e-mail, avec lequel vous vous &ecirc;tes enregistr&eacute; pour savoir comment activer votre compte.';
$lang['Error'] = 'Erreur';
$lang['Profile'] = 'Profil de %s';
$lang['Level'] = 'Niveau';
$lang['Administrator'] = 'Administrateur';
$lang['Moderator'] = 'Mod&eacute;rateur';
$lang['Registered'] = 'Enregistr&eacute;';
$lang['Email'] = 'Adresse e-mail';
$lang['ContactInfo'] = 'Informations de contact';
$lang['Password'] = 'Mot de passe';
$lang['PasswordAgain'] = 'Mot de passe (r&eacute;p&eacute;ter)';
$lang['EverythingRequired'] = 'Tous les champs sont requis !';
$lang['RegisteredNotActivated'] = 'Votre compte %s a maintenant &eacute;t&eacute; cr&eacute;&eacute;. Un e-mail a &eacute;t&eacute; envoy&eacute; &agrave; %s avec les instructions pour activer votre compte. Vous devrez proc&eacute;der &agrave; l\'activation pour pouvoir vous connecter.';
$lang['RegisteredActivated'] = 'Votre compte %s a maintenant &eacute;t&eacute; cr&eacute;&eacute; Vous pouvez vous connecter.';
$lang['Never'] = 'Jamais';
$lang['Member'] = 'Membre';
$lang['RegistrationActivationEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé [board_name]. Vous vous êtes enregistré avec un compte nommé [account_name], mais celui-ci n\'a pas encore été activé. Veuillez cliquer sur le lien ci-dessous pour l\'activer:

[activate_link]

ou faites un copier-coller dans votre navigateur. Ensuite, vous pourrez vous connecter au forum en utilisant ce nom d\'utilisateur et ce mot de passe:

Utilisateur : [account_name]
Mot de passe: [password]

Si un jour, vous oubliez votre mot de passe, vous pourrez en redemander un nouveau via le lien situé dans le formulaire de connection.
Merci de vous être enregistré !

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Ce forum est vide. L\'administrateur n\'a encore cr&eacute;&eacute; aucun forum.';
$lang['AlreadyActivated'] = 'Le compte avec l\'ID %d a d&eacute;j&agrave; &eacute;t&eacute; activ&eacute;.';
$lang['Activate'] = 'Activer';
$lang['Activated'] = 'Votre compte %s a maintenant &eacute;t&eacute; (r&eacute;)-activ&eacute;. Vous serez connect&eacute; automatiquement.';
$lang['WrongActivationKey'] = 'Il n\'a pas &eacute;t&eacute; possible d\'activer votre compte avec l\'ID %d. La cl&eacute; d\'activation est incorrecte. N\'auriez-vous pas demand&eacute; un nouveau mot de passe entretemps ?';
$lang['RegisterIt'] = 'Vous pouvez le cr&eacute;er via le lien \'S\'enregistrer\'.';
$lang['BoardClosed'] = 'Forum ferm&eacute;';
$lang['SendpwdEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". Vous venez de demander un nouveau mot de passe pour le compte [account_name]. Vous pouvez vous connecter en utilisant ce nom d\'utilisateur et ce mot de passe :

Utilisateur : [account_name]
Mot de passe: [password]

Si un jour, vous oubliez votre mot de passe, vous pourrez en redemander un nouveau via le lien situé dans le formulaire de connection.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nouveau mot de passe';
$lang['SendpwdActivated'] = 'Le nouveau mot de passe pour votre compte %s a &eacute;t&eacute; envoy&eacute; &agrave; %s. Vous pouvez maintenant vous connecter avec votre nouveau mot de passe.';
$lang['ForumIndex'] = 'Index du Forum';
$lang['MissingFields'] = 'Les champs obligatoires suivants sont incomplets ou incorrects : %s.';
$lang['TermsOfUseContent'] =
'Vous acceptez le fait que tous les messages présents dans ce forum reflètent les opinions de leurs auteurs respectifs et non pas du webmaster, des modérateurs ou des administrateurs du forum, sauf quand ces derniers écrivent eux-mêmes des messages.

Vous vous engagez à ne placer sur ce forum que des messages dont le contenu n\'est pas blessant, offensant, obscène ou inaproprié, et qui n\'est pas interdit par la loi. Si vous agissez de la sorte, vous serez pénalisé car votre compte recevra immédiatement le statut \'banni\' ou \'supprimé\' et votre fournisseur d\'accès internet pourra éventuellement être averti de votre comportement. De plus, votre adresse IP est enregistrée avec chaque message que vous placez. Vous acceptez aussi le fait que les administrateurs et modérateurs sont autorisés à éditer, supprimer, déplacer ou fermer vos sujets quand ils pensent que c\'est nécessaire.

Toute information placée dans ce forum est stockée dans une base de données, consultable ultérieurement. Les administrateurs s\'engagent à ne pas redistribuer ces informations sans votre consentement ou alors seulement par obligation légale, sur ordre judiciaire. Cependant, ni le webmaster, ni les administrateurs ou les moderateurs, ni même l\'équipe de UseBB ne peuvent être tenus pour responsables en cas de fuite d\'informations dûe à un acte de piratage du forum.

Ce forum utilise des cookies pour enregistrer des informations temporaires, nécessaires à son bon fonctionnement sur votre ordinateur. De plus, un cookie peut garder en mémoire votre ID d\'utilisateur et votre mot de passe (crypté), pour rendre possible une connection automatique de votre compte, si vous avez choisi d\'activer cette option. Si vous ne voulez aucun enregistrement dans des cookies, veuillez vous référer au manuel de votre navigateur internet pour les désactiver.

En cliquant sur \'J\'accepte\', vous adhérez donc à toutes ces règles et à ces conditions.';

$lang['TermsOfUse'] = 'Conditions d\'utilisation de ce forum';
$lang['RegistrationActivationEmailSubject'] = 'Activation de votre compte';
$lang['NeedToBeLoggedIn'] = 'Vous devez &ecirc;tre connect&eacute; pour faire cela. Cliquez sur le lien \'Se connecter\' ou \'S\'enregistrer\' pour cr&eacute;er un nouveau compte.';
$lang['WrongEmail'] = 'D&eacute;sol&eacute;, mais %s n\'est pas l\'e-mail correct pour votre compte %s. Si vous ne vous souvenez pas de votre adresse e-mail, contactez l\'administrateur du forum, s.v.p.';
$lang['Topic'] = 'Sujet';
$lang['Author'] = 'Auteur';
$lang['Replies'] = 'R&eacute;ponses';
$lang['Views'] = 'Vues';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Cach&eacute;';
$lang['ACP'] = 'P.C.A.';
$lang['SendMessage'] = 'Envoyer un message';
$lang['NoViewableForums'] = 'Vous n\'avez pas la permission de voir ces forums avec le niveau de votre compte. Si vous n\'&ecirc;tes pas connect&eacte;, connectez-vous. Si vous &ecirc;tes connect&eacute;, vous ne devriez probablement pas &ecirc;tre ici.';
$lang['Rank'] = 'Rang';
$lang['Location'] = 'Lieu';
$lang['Website'] = 'Site web';
$lang['Occupation'] = 'M&eacute;tier';
$lang['Interests'] = 'Int&eacute;r&ecirc;ts';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Votre adresse IP %s a &eacute;t&eacute; bannie de ce forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'URL de votre avatar';
$lang['BannedUser'] = 'Compte banni';
$lang['BannedUserExplain'] = 'Votre compte %s a &eacute;t&eacute; banni de ce forum. La raison est :';
$lang['BannedUsername'] = 'Le nom d\'utilisateur %s a &eacute;t&eacute; banni de ce forum. Veuillez en choisir un autre.';
$lang['BannedEmail'] = 'L\'e-mail %s a &eacute;t&eacute; banni de ce forum. Veuillez en choisir un autre.';
$lang['PostsPerDay'] = 'Messages par jour';
$lang['BoardClosedOnlyAdmins'] = 'Seuls les administrateurs peuvent se connecter quand le forum est ferm&eacute;.';
$lang['NoPosts'] = 'Pas de messages';
$lang['NoActivetopics'] = 'Ce forum n\'a pas de sujet r&eacute;cemment cr&eacute;&eacute;.';
$lang['AuthorDate'] = 'Par %s le %s';
$lang['ByAuthor'] = 'De: %s';
$lang['OnDate'] = 'Le: %s';
$lang['Re'] = 'R&eacute;p:';
$lang['MailForm'] = 'Envoyer un mail &agrave; %s';
$lang['SendEmail'] = 'Envoyer un message &agrave; %s';
$lang['NoMails'] = 'Cet utilisateur ne veut pas recevoir d\'e-mail.';
$lang['UserEmailBody'] = 'Bonjour,

Ce mail provient du forum nommé [board_name]. L\'utilisateur [username] vous a envoyé le message ci-dessous, via notre forum.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Votre e-mail &agrave; %s a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s !';
$lang['To'] = 'A';
$lang['From'] = 'Venant de';
$lang['Subject'] = 'Sujet';
$lang['Body'] = 'Corps';
$lang['Send'] = 'Envoi';
$lang['EditProfile'] = 'Editer le profil';
$lang['EditOptions'] = 'Editer les options';
$lang['EditPasswd'] = 'Editer le mot de passe';
$lang['PanelHome'] = 'Accueil panneau';
$lang['NewEmailNotActivated'] = 'Votre profil a &eacute;t&eacute; chang&eacute; avec succ&egrave;s. Comme vous avez chang&eacute; d\'e-mail pour votre compte %s, vous devez le r&eacute;-activer. Un e-mail a &eacute;t&eacute; envoy&eacute; &agrave; %s avec des instructions qui vous expliquent comment faire. Vous allez &ecirc;tre d&eacute;connect&eacute; maintenant.';
$lang['Required'] = 'requis';
$lang['ViewProfile'] = 'Voir le profil';
$lang['NewEmailActivationEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". Vous avez changé l\'e-mail de votre compte [account_name], mais il n\'a pas encore été ré-activé. Veuillez cliquer sur le lien ci-dessous pour le ré-activer :

[activate_link]

ou faites un copier-coller dans votre navigateur.

Si un jour, vous oubliez votre mot de passe, vous pourrez en redemander un nouveau via le lien situé dans le formulaire de connection.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Ré-activation de compte';
$lang['Signature'] = 'Signature';
$lang['SessionInfo'] = 'Information de session';
$lang['SessionID'] = 'ID de session';
$lang['IPAddress'] = 'Adresse IP';
$lang['Seconds'] = 'Secondes';
$lang['Updated'] = 'Modifi&eacute;';
$lang['Pages'] = 'Pages';
$lang['AutoLogin'] = 'Connection automatique';
$lang['Enabled'] = 'Activ&eacute;';
$lang['Disabled'] = 'D&eacute;sactiv&eacute;';
$lang['Enable'] = 'Activer';
$lang['Disable'] = 'D&eacute;sactiver';
$lang['AutoLoginSet'] = 'Le cookie de connection automatique est activ&eacute; maintenant.';
$lang['AutoLoginUnset'] = 'Le cookie de connection automatique est d&eacute;sactiv&eacute; maintenant.';
$lang['RegistrationEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". Vous venez de vous enregistrer avec un compte nommé [account_name]. Vous pouvez vous connecter en utilisant ce nom d\'utilisateur et ce mot de passe :

Utilisateur : [account_name]
Mot de passe: [password]

Si un jour, vous oubliez votre mot de passe, vous pourrez en redemander un nouveau via le lien situé dans le formulaire de connection.
Merci de vous être enregistré !

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Enregistrement de compte';
$lang['PublicEmail'] = 'Adresse e-mail visible';
$lang['PublicLastLogin'] = 'Heure de derni&egrave;re connection visible';
$lang['DateFormat'] = 'Format de date';
$lang['DateFormatHelp'] = 'Le format de date est celui de la fonction %s en PHP.';
$lang['Again'] = 'Encore';
$lang['NewPassword'] = 'Nouveau mot de passe';
$lang['NewPasswordAgain'] = 'Nouveau mot de passe (r&eacute;p&eacute;ter)';
$lang['PasswordEdited'] = 'Votre mot de passe a &eacute;t&eacute; &eacute;dit&eacute; avec succ&egrave;s.';
$lang['DetailedOnlineList'] = 'Liste d&eacute;taill&eacute;e des connect&eacute;s';
$lang['Detailed'] = 'D&eacute;tails';
$lang['OptionsEdited'] = 'Vos options du forum ont &eacute;t&eacute; &eacute;dit&eacute;es avec succ&egrave;s.';
$lang['ProfileEdited'] = 'Votre profil a &eacute;t&eacute; &eacute;dit&eacute; avec succ&egrave;s.';
$lang['Started'] = 'D&eacute;marr&eacute;';
$lang['Minutes'] = 'Minutes';
$lang['Hours'] = 'Heures';
$lang['Days'] = 'Jours';
$lang['Weeks'] = 'Semaines';
$lang['TotalTime'] = 'Dur&eacute;e totale';
$lang['NoTopics'] = 'Ce forum ne contient encore aucun sujet. Vous pouvez y placer le tout premier !';
$lang['NotPermitted'] = 'Vous n\'avez pas les permissions suffisantes pour faire cela. Si vous en doutez, contactez l\'administrateur.';
$lang['Language'] = 'Langage';
$lang['Template'] = 'Mod&egrave;le';
$lang['NoSuchMember'] = 'Le membre %s n\'existe pas/plus dans ce forum.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Cette caract&eacute;ristique est d&eacute;sactiv&eacute;e parce que ce forum ne peut lire ou &eacute;crire dans les cookies de votre navigateur.';
$lang['LogOutConfirm'] = 'Etes-vous s&ucirc;r de vouloir vous d&eacute;connecter ?';
$lang['Cancel'] = 'Annuler';
$lang['Timezone'] = 'Fuseau horaire';
$lang['DST'] = 'Ajustement &agrave; l\'heure d\'&eacute;t&eacute;';
$lang['Sticky'] = 'Important';
$lang['PostNewTopic'] = 'Nouveau sujet';
$lang['ForumIsLocked'] = 'Le forum est ferm&eacute;';
$lang['NoSuchTopic'] = 'Le sujet %s n\'existe pas/plus dans ce forum.';
$lang['PostReply'] = 'R&eacute;pondre';
$lang['TopicIsLocked'] = 'Le sujet est ferm&eacute;';
$lang['Post'] = 'Message';
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['Quote'] = 'Citer';
$lang['Wrote'] = '%s &eacute;crit';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Le sujet pour lequel vous essayez d\'&eacute;crire est bloqu&eacute;. Seuls les gens autoris&eacute;s peuvent encore placer des r&eacute;ponses.';
$lang['Content'] = 'Contenu';
$lang['Options'] = 'Options';
$lang['EnableBBCode'] = 'Autoriser le BBCode.';
$lang['EnableSmilies'] = 'Autoriser les smileys.';
$lang['EnableSig'] = 'Autoriser la signature.';
$lang['EnableHTML'] = 'Autoriser le HTML.';
$lang['LockTopicAfterPost'] = 'Fermer le sujet apr&egrave;s &eacute;criture.';
$lang['Guest'] = 'Invit&eacute;';
$lang['BackToPrevious'] = 'Retour page pr&eacute;c&eacute;dente';
$lang['NoSuchPost'] = 'Le message %s n\'existe pas/plus dans ce forum.';
$lang['UserPostedImage'] = 'Image plac&eacute;e par l\'utilisateur';
$lang['ForumIsLockedExplain'] = 'Ce forum est ferm&eacute;. Seuls les gens autoris&eacute;s peuvent encore placer des sujets.';
$lang['MakeTopicSticky'] = 'Rendre ce sujet \'Important\'.';
$lang['QuickReply'] = 'R&eacute;ponse rapide';
$lang['ReturnToTopicAfterPosting'] = 'Retourner au sujet apr&egrave;s envoi';
$lang['ModeratorList'] = 'Mod&eacute;rateurs : %s.';
$lang['Nobody'] = 'Personne';
$lang['DeleteTopic'] = 'Supprimer le sujet';
$lang['MoveTopic'] = 'D&eacute;placer le sujet';
$lang['LockTopic'] = 'Bloquer le sujet';
$lang['UnlockTopic'] = 'D&eacute;bloquer le sujet';
$lang['MakeSticky'] = 'Rendre important';
$lang['ConfirmDeleteTopic'] = 'Etes-vous s&ucirc;r de vouloir supprimer le sujet %s dans le forum %s ? Ceci est irr&eacute;versible !';
$lang['MakeNormalTopic'] = 'Faire un sujet normal';
$lang['OldForum'] = 'Vieux forum';
$lang['NewForum'] = 'Nouveau forum';
$lang['IAccept'] = 'J\'accepte';
$lang['IDontAccept'] = 'Je n\'accepte pas';
$lang['OpenLinksNewWindow'] = 'Ouvrir les liens externes dans une nouvelle fen&ecirc;tre';
$lang['HideAllAvatars'] = 'Cacher tous les avatars';
$lang['HideUserinfo'] = 'Cacher toutes les informations des utilisateurs';
$lang['HideAllSignatures'] = 'Cacher toutes les signatures';
$lang['HideFromOnlineList'] = 'Me retirer de la liste des connect&eacute;s';
$lang['PageLinks'] = 'Page: %s';
$lang['Preview'] = 'Aper&ccedil;u';
$lang['DeletePost'] = 'Supprimer le message';
$lang['ConfirmDeletePost'] = 'Etes-vous s&ucirc;r de vouloir supprimer ce message dans le forum %s ? Ceci est irr&eacute;versible !';
$lang['EditPost'] = 'Editer le message';
$lang['PostEditInfo'] = 'Derni&egrave;re &eacute;dition par %s le %s.';
$lang['PasswdInfo'] = 'Le mot de passe ne peut contenir que des caract&egrave;res alpha-num&eacute;riques et doit avoir une taille minimum de %d caract&egrave;res.';
$lang['SubscribeTopic'] = 'S\'abonner';
$lang['UnsubscribeTopic'] = 'Se d&eacute;sabonner';
$lang['NewReplyEmailBody'] ='Bonjour,

Ce mail provient du forum nommé "[board_name]". Quelqu\'un ([poster_name]) a répondu à un sujet auquel vous vous êtes abonné ("[topic_title]"). Pour voir la réponse, veuillez cliquer sur le lien suivant : [topic_link].

Cliquez sur le lien suivant si vous désirez vous désinscrire du sujet (vous devrez vous connecter) : [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nouvelle réponse dans "%s"';
$lang['SubscribedTopic'] = 'Vous &ecirc;tes maintenant abonn&eacute; &agrave; ce sujet.';
$lang['UnsubscribedTopic'] = 'Vous vous &ecirc;tes maintenant d&eacute;sabonn&eacute; de ce sujet.';
$lang['SubscribeToThisTopic'] = 'S\'abonner &agrave; ce sujet.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Abonnements';
$lang['NoSubscribedTopics'] = 'Vous n\'&ecirc;tes actuellement abonn&eacute; &agrave; aucun sujet.';
$lang['LatestUpdate'] = 'Derni&egrave;re modif.';
$lang['Unknown'] = 'inconnu';
$lang['PostingTopic'] = 'Placement d\'un sujet dans %s';
$lang['PostingReply'] = 'Placement d\'une r&eacute;ponse dans %s';
$lang['MovingTopic'] = 'D&eacute;placement du sujet %s';
$lang['DeletingTopic'] = 'Suppression du sujet %s';
$lang['EditingPost'] = 'Modification de message dans %s';
$lang['DeletingPost'] = 'Suppression de message dans %s';
$lang['DebugMode'] = 'Mode debug';
$lang['ParseTime'] = 'Parse time';              /* ??????? */
$lang['ServerLoad'] = 'Server load';               /* ??????? */
$lang['TemplateSections'] = 'Template sections';       /* ??????? */
$lang['SQLQueries'] = 'Requ&ecirc;tes SQL';
$lang['RealName'] = 'Nom r&eacute;el';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administrateurs';
$lang['Moderators'] = 'Mod&eacute;rateurs';
$lang['TopicReview'] = 'Revue du sujet';      /* ??????? */
$lang['ViewMorePosts'] = 'Voir plus de messages';
$lang['DisplayedName'] = 'Nom affich&eacute;';
$lang['UsernameInfo'] = 'Un nom d\'utilisateur ne peut contenir que des caract&egrave;res alpha-num&eacute;riques, des espaces, _ et - .';
$lang['Code'] = 'Code';
$lang['Img'] = 'Image';
$lang['URL'] = 'URL';
$lang['Color'] = 'Couleur';
$lang['Size'] = 'Taille';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Sujet: %s';
$lang['FloodIntervalWarning'] = 'L\'administrateur a param&eacute;tr&eacute; ce forum pour qu\'il ne soit possible d\'&eacute;crire qu\'entre des intervalles de %d secondes. Veuillez donc attendre au moins %d secondes avant de r&eacute;-utiliser le formulaire.';
$lang['AutoSubscribe'] = 'Abonnement automatique';
$lang['OnPostingNewTopics'] = 'En postants des sujets';
$lang['OnPostingNewReplies'] = 'En postant des r&eacute;ponses';
$lang['UnsubscribeSelected'] = 'D&eacute;sabonner la s&eacute;l&eacute;ction';
$lang['SelectedTopicsUnsubscribed'] = 'Vous &ecirc;tes maintenant d&eacute;sabonn&eacute; des sujets s&eacute;lectionn&eacute;s.';
$lang['Birthday'] = 'Date de naissance';
$lang['Age'] = 'Age';
$lang['Month'] = 'Mois';
$lang['Day'] = 'Jour';
$lang['Year'] = 'Ann&eacute;e';
$lang['PoweredBy'] = '%s utilise : %s';
$lang['ForumSoftware'] = 'Forum Software';                          /* ??????? */
$lang['GeneralStats'] = 'Statistiques g&eacute;n&eacute;rales';
$lang['Members'] = 'Membres';
$lang['TopicsPerDay'] = 'Sujets par jour';
$lang['MembersPerDay'] = 'Membres par jour';
$lang['BoardStarted'] = 'D&eacute;but du forum';
$lang['BoardAge'] = 'Age du forum';
$lang['NewestMember'] = 'Membre le plus r&eacute;cent';
$lang['MostActiveTopics'] = 'Sujets les plus actifs';
$lang['MostViewedTopics'] = 'Sujets les plus vus';
$lang['PostsPerMember'] = 'Messages par membre';
$lang['PostsPerForum'] = 'Messages par forum';
$lang['Categories'] = 'Cat&eacute;gories';
$lang['Forums'] = 'Forums';
$lang['TopicsPerMember'] = 'Sujets par membre';
$lang['TopicsPerForum'] = 'Sujets par forum';
$lang['MostActiveMembers'] = 'Membres les plus actifs';
$lang['MostActiveForums'] = 'Forums les plus actifs';
$lang['DisplayedNameTaken'] = 'D&eacute;sol&eacute;, %s est d&eacute;j&agrave; pris comme nom de connection ou comme nom affich&eacute;.';
$lang['SearchKeywords'] = 'Chercher les mots-cl&eacute;';
$lang['SearchMode'] = 'Type de recherche';
$lang['SearchAuthor'] = 'Chercher l\'auteur';
$lang['SearchForums'] = 'Dans le forum';
$lang['AllForums'] = 'Tous les forums';
$lang['NoSearchResults'] = 'D&eacute;sol&eacute;, mais aucun r&eacute;sultat ne correspond aux crit&egrave;res que vous avez encod&eacute;s.';
$lang['SearchMembersPosts'] = 'Rechercher les messages de ce membre';
$lang['CurrentPage'] = 'Page visit&eacute;e';
$lang['MemberGuestOnline'] =   'Dans les derni&egrave;res %d minutes, %d membre(s) (%d cach&eacute;(s)) et %d invit&eacute;(s) ont visit&eacute; le forum.';
$lang['MembersGuestOnline'] =  'Dans les derni&egrave;res %d minutes, %d membre(s) (%d cach&eacute;(s)) et %d invit&eacute;(s) ont visit&eacute; le forum.';
$lang['MemberGuestsOnline'] =  'Dans les derni&egrave;res %d minutes, %d membre(s) (%d cach&eacute;(s)) et %d invit&eacute;(s) ont visit&eacute; le forum.';
$lang['MembersGuestsOnline'] = 'Dans les derni&egrave;res %d minutes, %d membre(s) (%d cach&eacute;(s)) et %d invit&eacute;(s) ont visit&eacute; le forum.';
$lang['WhosOnline'] = 'Qui est en ligne ?';
$lang['Done'] = 'Fini';
$lang['KeywordsExplain'] = 'Avec des mots-cl&eacute; d\'au moins %d caract&egrave;res s&eacute;par&eacute;s par des espaces.';
$lang['BCCMyself'] = 'Envoyer une copie &agrave; ma propre adresse e-mail.';
$lang['Save'] = 'Sauver';
$lang['Add'] = 'Ajouter';
$lang['MarkAllAsRead'] = 'Marquer comme lu';
$lang['MarkAllAsReadDone'] = 'Tous les forums et sujets sont maintenant marqu&eacute;s comme lus.';
$lang['StringTooShort'] = '%s est trop court, au moins %d caract&egrave;res sont requis.';
$lang['StringTooLong'] = '%s est trop long, seulement %d caract&egrave;res sont autoris&eacute;s.';
$lang['Upload'] = 'Upload';
$lang['RegistrationsDisabled'] = 'Enregistrements d&eacute;sactiv&eacute;s';
$lang['PostFormShortcut'] = 'Appuyez sur Alt+S (Control+S sur Apple) pour envoyer rapidement ce formulaire.';
$lang['EditThisMember'] = 'Editer ce membre';
$lang['EmailTaken'] = 'L\'adresse e-mail %s est d&eacute;j&agrave; utilis&eacute; sur ce forum. Veuiller en choisir une autre.';
$lang['RegisteredNotActivatedByAdmin'] = 'Votre compte %s a maintenant &eacute;t&eacute; cr&eacute;&eacute;. Avant de pouvoir vous connecter, l\'administrateur de ce forum doit activer votre compte. Veuillez attendre un certain temps avant que cela ne se fasse.';
$lang['AdminActivationEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". Vous venez d\'enregistrer un compte nommé [account_name]. L\'administrateur du forum doit encore activer votre compte. Lorsque ce sera fait, vous pourrez vous connecter en utilisant les paramètres suivants :

Utilisateur : [account_name]
Mot de passe: [password]

Si un jour, vous oubliez votre mot de passe, vous pourrez en redemander un nouveau via le lien situé dans le formulaire de connection.
Merci de vous être enregistré !

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Compte en attente d\'activation';
$lang['NewEmailNotActivatedByAdmin'] = 'Votre profil a &eacute;t&eacute; &eacute;dit&eacute; correctement. Parce que vous avez chang&eacute; l\'adresse e-mail de votre compte %s, l\'administrateur de ce forum doit le r&eacute;-activer. Vous serez d&eacute;connect&eacute; entretemps.';
$lang['NewEmailAdminActivationEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". Vous avez changé l\'adresse e-mail de votre compte [account_name], mais il n\'a pas encore été ré-activé. L\'administrateur de ce forum doit d\'abord ré-activer votre compte.  Veuillez attendre un certain temps avant que cela ne se fasse.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Compte en attente d\'activation';
$lang['AdminActivatedAccountEmailBody'] =
'Bonjour,

Ce mail provient du forum nommé "[board_name]". L\'administrateur a activ&eacute; votre compte [account_name]. Vous pouvez maintenant vous connecter.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Compte activ&eacute;';
$lang['Sort'] = 'Trier';
$lang['SortBy'] = 'Trier par';
$lang['SortBy-displayed_name'] = 'Nom d\'utilisateur';
$lang['SortBy-real_name'] = 'Nom r&eacute;el';
$lang['SortBy-level'] = 'Niveau';
$lang['SortBy-rank'] = 'Rang';
$lang['SortBy-regdate'] = 'Enregistr&eacute;';
$lang['SortBy-posts'] = 'Messages';
$lang['SortBy-latest_post'] = 'Dernier message';
$lang['SortBy-topic_title'] = 'Titre de sujet';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Auteur';
$lang['SortBy-replies'] = 'R&eacute;ponses';
$lang['SortBy-views'] = 'Vues';
$lang['SortOrder-asc'] = 'Croissant';
$lang['SortOrder-desc'] = 'D&eacute;croissant';
$lang['NoUsersFound'] = 'Aucun membre trouv&eacute;.';
$lang['SaveConfigManually'] = 'Parce que config.php n\'est pas modifiable en &eacute;criture, UseBB ne peut sauver les valeurs de configuration. Veuillez sauver le contenu suivant dans config.php et uploadez si n&eacute;cessaire.';
$lang['ShowResultsAs'] = 'Montrer les r&eacute;sultats par';
$lang['ShowMode-topics'] = 'Sujets';
$lang['ShowMode-posts'] = 'Messages';
$lang['Mode-and'] = 'Tous les mots-cl&eacute; (AND)';
$lang['Mode-or'] = 'Certains des mots-cl&eacute; (OR)';
$lang['ExactMatch'] = 'Egalit&eacute; parfaite';
$lang['IncludeGuests'] = 'Inclure les invit&eacute;s';
$lang['Top'] = 'Sommet';
$lang['Bottom'] = 'Bas';
$lang['Action'] = 'Action';
$lang['AntiSpamQuestion'] = 'Question anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Comme mesure anti-spam, vous devez r&eacute;pondre correctement &agrave; cette question pour pouvoir acc&eacute;der &agrave; cette partie du forum. Seulement une question par session sera demand&eacute;e. Si vous vous enregistrez, cette mesure sera d&eacute;sactiv&eacute;e. Merci de votre compr&eacute;hension.';
$lang['Question'] = 'Question';
$lang['Answer'] = 'R&eacute;ponse';
$lang['AntiSpamQuestionMathPlus'] = 'Combien font %d plus %d ?';
$lang['AntiSpamQuestionMathMinus'] = 'Combien font %d moins %d ?';
$lang['AntiSpamWrongAnswer'] = 'Votre r&eacute;ponse n\'est pas juste. Veuillez donner la r&eacute;ponse correcte pour pouvoir acc&eacute;der &agrave; cette partie.';

?>
