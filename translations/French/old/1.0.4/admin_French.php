<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_French.php,v 1.92 2007/01/01 11:58:43 pc_freak Exp $
	
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

/* FRENCH TRANSLATION BY M. Calogero GIGANTE  */
/* Personnal website : http://www.gigante.be/ */

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = 'Connection administrateur';
$lang['AdminPasswordExplain'] = 'Pour des raisons de s&eacute;curit&eacute;, vous devez taper le mot de passe de votre compte pour vous connecter au P.C.A. (panneau de contr&ocirc;le administrateur).';

$lang['RunningBadACPModule'] = 'UseBB ne peut pas faire fonctionner ce module, parce qu\'une ou plusieurs parties sont manquantes (l\'objet $usebb_module n\'a pas &eacute;t&eacute; trouv&eacute; et/ou la m&eacute;thode run_module() est manquante).';

$lang['Category-main'] = 'G&eacute;n&eacute;ral';
$lang['Category-forums'] = 'Forums';
$lang['Category-various'] = 'Divers';
$lang['Category-members'] = 'Membres';
$lang['Category-pruning'] = 'Nettoyage';
$lang['Category-security'] = 'S&eacute;curit&eacute;';
$lang['Item-index'] = 'Index du P.C.A.';
$lang['Item-version'] = 'Check de version';
$lang['Item-config'] = 'Configuration g&eacute;n&eacute;rale';
$lang['Item-categories'] = 'G&eacute;rer les cat&eacute;gories';
$lang['Item-forums'] = 'G&eacute;rer les forums';
$lang['Item-iplookup'] = 'Check d\'adresse IP';
$lang['Item-sqltoolbox'] = 'Outils SQL';
$lang['Item-modules'] = 'Modules P.C.A.';
$lang['Item-members'] = 'Editer les membres';
$lang['Item-delete_members'] = 'Supprimer les membres';
$lang['Item-register_members'] = 'Enregistrer des membres';
$lang['Item-activate_members'] = 'Activer les membres';
$lang['Item-prune_forums'] = 'Nettoyer le forum';
$lang['Item-prune_members'] = 'Nettoyer les membres';
$lang['Item-dnsbl'] = 'Bannissement DNSBL';
$lang['Item-badwords'] = 'Filtrages de mots';
$lang['Item-mass_email'] = 'E-mail de masse';
$lang['Item-bans'] = 'Gestion bannissement';

$lang['IndexWelcome'] = 'Bienvenue dans le Panneau de Contr&ocirc;le Administrateur de votre forum UseBB. D\'ici, vous pouvez ma&icirc;triser tous les aspects de votre forum, param&eacute;trer la configuration, contr&ocirc;ler les diff&eacute;rentes parties du forum, g&eacute;rer les membres, etc...';
$lang['IndexSystemInfo'] = 'Info Syst&egrave;me';
$lang['IndexUseBBVersion'] = 'Version d\'UseBB';
$lang['IndexPHPVersion'] = 'Version de PHP';
$lang['IndexSQLServer'] = 'Driver du serveur SQL';
$lang['IndexHTTPServer'] = 'Serveur HTTP';
$lang['IndexOS'] = 'Operating system';
$lang['IndexServerLoad'] = 'Valeurs de charge serveur';
$lang['IndexLinks'] = 'Liens';
$lang['IndexUnactiveMembers'] = 'Membres non activ&eacute;s';
$lang['IndexNoUnactiveMembers'] = 'Il n\'y a aucun membre en attente d\'activation.';
$lang['IndexOneUnactiveMember'] = 'Il y a un membre en attente d\'activation.';
$lang['IndexMoreUnactiveMembers'] = 'Il y a %d membres en attente d\'activation.';
$lang['IndexWarning'] = 'Attention !';
$lang['IndexUnwritableConfig'] = 'Pour l\'instant, %s n\'est pas modifiable en &eacute;criture par PHP. Ceci n\'est pas recommand&eacute;. Pour le rendre modifiable en &eacute;criture, changez les permissions du fichier avec un client FTP ou faites-lui un chmod (0777). Contactez votre h&eacute;bergeur en cas de probl&egrave;me.';

$lang['VersionFailed'] = 'Le forum n\'arrive pas &agrave; d&eacute;terminer la derni&egrave;re version. Veuillez faire un check r&eacute;gulier sur %s pour vous assurer d\'avoir toujours la derni&egrave;re version.';
$lang['VersionLatestVersionTitle'] = 'Ceci est la derni&egrave;re version en cours.';
$lang['VersionLatestVersion'] = 'Ce forum fonctionne sous UseBB %s qui est bien la derni&egrave;re version stable.';
$lang['VersionNeedUpdateTitle'] = 'Nouvelle version disponible !';
$lang['VersionNeedUpdate'] = 'Ce forum utilise la version UseBB %s qui devrait &ecirc;tre upgrad&eacute;e vers la version %s pour rester en s&eacute;curit&eacute; et sans probl&egrave;me de bug ! Visitez %s pour t&eacute;l&eacute;charger la derni&egrave;re version.';
$lang['VersionBewareDevVersionsTitle'] = 'Version de d&eacute;veloppement trouv&eacute;e';
$lang['VersionBewareDevVersions'] = 'Ce forum tourne avec %s, cependant %s est encore la derni&egrave;re version stable. Soyez conscient des probl&egrave;mes et incompatibilit&eacute;s qui peuvent exister avec les versions de d&eacute;veloppement.';

$lang['ConfigInfo'] = 'Sur cette page, vous pouvez &eacute;diter tous les param&egrave;tres de votre forum UseBB. Soyez attentif &agrave; ne pas endommager la configuration de votre base de donn&eacute;es. Les champs marqu&eacute;s avec un ast&eacute;risque (*) sont obligatoires.';
$lang['ConfigSet'] = 'La nouvelle configuration a &eacute;t&eacute; enregistr&eacute;e. Les modifications seront prises en compte lors du chargement d\'une nouvelle page.';
$lang['ConfigMissingFields'] = 'Certains champs sont manquants ou incorrects (par ex. du texte o&ugrave; un nombre &eacute;tait attendu). Veuillez v&eacute;rifier les champs suivants :';
$lang['ConfigBoard-type'] = 'Type';
$lang['ConfigBoard-server'] = 'Serveur';
$lang['ConfigBoard-username'] = 'Nom d\'utilisateur';
$lang['ConfigBoard-passwd'] = 'Mot de passe';
$lang['ConfigBoard-dbname'] = 'Nom de la base de donn&eacute;es';
$lang['ConfigBoard-prefix'] = 'Pr&eacute;fixe des tables';
$lang['ConfigBoardSection-general'] = 'Forum g&eacute;n&eacute;ral';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = 'Vous pouvez laisser ces champs vides pour qu\'il y ait auto-d&eacute;tection.';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Nombres par page';
$lang['ConfigBoardSection-date_time'] = 'Dates &amp; Heures';
$lang['ConfigBoardSection-date_time-info'] = 'S\'applique seulement aux invit&eacute;s et aux nouveaux comptes.';
$lang['ConfigBoardSection-database'] = 'Configuration base de donn&eacute;es';
$lang['ConfigBoardSection-database-info'] = 'Ne changez ceci que si vous &ecirc;tes s&ucirc;r que ces param&egrave;tres fonctionneront imm&eacute;diatement.';
$lang['ConfigBoardSection-advanced'] = 'Param&egrave;tres avanc&eacute;s';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Param&egrave;tres suppl&eacute;mentaires';
$lang['ConfigBoardSection-user_rights'] = 'Droits des utilisateurs';
$lang['ConfigBoardSection-min_levels'] = 'Niveau minimum d\'acc&egrave;s';
$lang['ConfigBoardSection-min_levels-info'] = 'Voici les niveaux d\'acc&egrave;s minimums n&eacute;cessaires pour pouvoir acc&eacute;der aux diff&eacute;rentes parties du forum.';
$lang['ConfigBoardSection-layout'] = 'Param&egrave;tres du layout';
$lang['ConfigBoardSection-security'] = 'Securit&eacute;';
$lang['ConfigBoard-admin_email'] = 'E-mail de l\'administrateur';
$lang['ConfigBoard-board_descr'] = 'Description du forum';
$lang['ConfigBoard-board_keywords'] = 'Mots-cl&eacute; du forum';
$lang['ConfigBoard-board_keywords-info'] = 'A s&eacute;parer par des virgules.';
$lang['ConfigBoard-board_name'] = 'Nom du forum';
$lang['ConfigBoard-date_format'] = 'Format de date';
$lang['ConfigBoard-date_format-info'] = 'M&ecirc;me syntaxe que la fonction date() de PHP.';
$lang['ConfigBoard-language'] = 'Langue par d&eacute;faut';
$lang['ConfigBoard-language-info'] = 'S\'applique seulement aux invit&eacute;s et aux nouveaux comptes.';
$lang['ConfigBoard-session_name'] = 'Nom de session';
$lang['ConfigBoard-session_name-info'] = 'Seulement des caract&egrave;res alpha-num&eacute;riques, pas d\'espace. Doit contenir au moins une lettre.';
$lang['ConfigBoard-template'] = 'Mod&egrave;le par d&eacute;faut';
$lang['ConfigBoard-template-info'] = 'S\'applique seulement aux invit&eacute;s et aux nouveaux comptes.';
$lang['ConfigBoard-active_topics_count'] = 'Nombre de sujets r&eacute;cents';
$lang['ConfigBoard-avatars_force_height'] = 'Forcer la hauteur des avatars (en px)';
$lang['ConfigBoard-avatars_force_width'] = 'Forcer la largeur des avatars (en px)';
$lang['ConfigBoard-avatars_force_width-info'] = 'Laisser vide ou avec z&eacute;ro pour d&eacute;sactiver.';
$lang['ConfigBoard-debug'] = 'Mode debug';
$lang['ConfigBoard-email_view_level'] = 'Affichage des e-mails';
$lang['ConfigBoard-flood_interval'] = 'Intervalle de flux (en secondes)';
$lang['ConfigBoard-members_per_page'] = 'Membres par page';
$lang['ConfigBoard-online_min_updated'] = 'Utilisateurs en ligne durant les derni&egrave;res minutes';
$lang['ConfigBoard-output_compression'] = 'Compression en sortie';
$lang['ConfigBoard-passwd_min_length'] = 'Longueur minimum des mots de passe';
$lang['ConfigBoard-posts_per_page'] = 'Billets par page';
$lang['ConfigBoard-rss_items_count'] = 'Nombre d\'articles RSS';
$lang['ConfigBoard-search_limit_results'] = 'Limiter les r&eacute;sultats de recherche &agrave; x &eacute;l&eacute;ments';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Longueur minimum des mots-cl&eacute;';
$lang['ConfigBoard-session_max_lifetime'] = 'Dur&eacute;e maximum de session (minutes)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Intervalle pour la note de modification';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Quand le billet, qui vient d\'&ecirc;tre plac&eacute; sur le forum, est modifi&eacute; dans l\'intervalle ci-dessus (en secondes), la note t&eacute;moignant d\'une modification du billet reste cach&eacute;e.';
$lang['ConfigBoard-topicreview_posts'] = 'Nombre de billets dans la liste du sujet'; /* ???????????????????????? */
$lang['ConfigBoard-topics_per_page'] = 'Sujets par page';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Sujets r&eacute;cents';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Liste d&eacute;taill&eacute;e des connect&eacute;s';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Bo&icirc;te &agrave; statistiques';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Niveau minimal pour voir les e-mails cach&eacute;s';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Liste des membres';
$lang['ConfigBoard-view_search_min_level'] = 'Moteur de recherche';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Liste de l\'&eacute;quipe';
$lang['ConfigBoard-view_stats_min_level'] = 'Page des statistiques';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Lien de contact de l\'administrateur';
$lang['ConfigBoard-allow_multi_sess'] = 'Autoriser plusieurs sessions par IP';
$lang['ConfigBoard-board_closed'] = 'Fermer le forum';
$lang['ConfigBoard-board_closed-info'] = 'Seuls les administrateurs pourront se connecter.';
$lang['ConfigBoard-cookie_secure'] = 'Cookies s&eacute;curis&eacute;s';
$lang['ConfigBoard-cookie_secure-info'] = 'Cookies crypt&eacute;s (seulement en HTTPS)';
$lang['ConfigBoard-cookie_httponly'] = 'Autoriser juste les cookies HTTP';
$lang['ConfigBoard-cookie_httponly-info'] = 'Ajoute un flag httpOnly aux cookies, les rendant plus s&ucirc;rs contre XSS.';
$lang['ConfigBoard-dst'] = 'Autoriser l\'heure d\'&eacute;t&eacute;';
$lang['ConfigBoard-enable_contactadmin'] = 'Activer le lien de contact admin.';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Activer la liste d&eacute;taill&eacute;e des connect&eacute;s';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Autoriser la bo&icirc;te &agrave; statistiques';
$lang['ConfigBoard-enable_memberlist'] = 'Autoriser la liste des membres';
$lang['ConfigBoard-enable_quickreply'] = 'Autoriser la r&eacute;ponse rapide';
$lang['ConfigBoard-enable_rss'] = 'Autoriser le flux RSS';
$lang['ConfigBoard-enable_stafflist'] = 'Enable staff list';
$lang['ConfigBoard-enable_stats'] = 'Autoriser la page des statistiques';
$lang['ConfigBoard-friendly_urls'] = 'Autoriser les URLs des amis';
$lang['ConfigBoard-friendly_urls-info'] = 'N&eacute;cessite Apache et mod_rewrite. Ceci supprimera l\'ID de session de l\'URL.';
$lang['ConfigBoard-guests_can_access_board'] = 'Les invit&eacute;s peuvent voir le forum';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Les invit&eacute;s peuvent voir les informations de contact dans les profils';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Les invit&eacute;s peuvent voir les profils des membres';
$lang['ConfigBoard-hide_avatars'] = 'Cacher tous les avatars';
$lang['ConfigBoard-hide_signatures'] = 'Cacher toutes les signatures';
$lang['ConfigBoard-hide_userinfo'] = 'Cacher les informations de l\'utilisateur';
$lang['ConfigBoard-rel_nofollow'] = 'Activer le nofollow pour Google';
$lang['ConfigBoard-rel_nofollow-info'] = 'Cela forcera Google &agrave; ignorer les liens du BBCode.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Retourner au sujet apr&egrave;s l\'envoi du billet';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Autoriser le BBCode dans les signatures';
$lang['ConfigBoard-sig_allow_smilies'] = 'Autoriser les smileys dans les signatures';
$lang['ConfigBoard-sig_max_length'] = 'Longueur maximum pour la signature';
$lang['ConfigBoard-single_forum_mode'] = 'Mode simple du forum';
$lang['ConfigBoard-single_forum_mode-info'] = 'N\'affiche que les forums visibles dans l\'index du forum.';
$lang['ConfigBoard-target_blank'] = 'Les liens BBCode s\'ouvrent dans une nouvelle fen&ecirc;tre';
$lang['ConfigBoard-activation_mode'] = 'Mode d\'activation';
$lang['ConfigBoard-activation_mode0'] = 'Pas d\'activation';
$lang['ConfigBoard-activation_mode1'] = 'Activation par e-mail';
$lang['ConfigBoard-activation_mode2'] = 'Activation administrateur';
$lang['ConfigBoard-board_closed_reason'] = 'Raison de fermeture du forum';
$lang['ConfigBoard-board_url'] = 'URL du forum';
$lang['ConfigBoard-board_url-info'] = 'URL compl&egrave;te, incluant les slashs. Laisser vide pour d&eacute;tection automatique.';
$lang['ConfigBoard-cookie_domain'] = 'Domaine du cookie';
$lang['ConfigBoard-cookie_path'] = 'Chemin du cookie';
$lang['ConfigBoard-session_save_path'] = 'Chemin de sauvegarde de session';
$lang['ConfigBoard-session_save_path-info'] = 'Chemin habituel de sauvegarde des donn&eacute;es de session : seulement des noms de dossier en chemin absolu.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Exclure les forums suivants des sujets r&eacute;cents';
$lang['ConfigBoard-exclude_forums_rss'] = 'Exclure les forums suivants des flux RSS';
$lang['ConfigBoard-exclude_forums_stats'] = 'Exclure les forums suivants de la page statistique';
$lang['ConfigBoard-timezone'] = 'Fuseau horaire';
$lang['ConfigBoard-debug0'] = 'D&eacute;sactiv&eacute;';
$lang['ConfigBoard-debug1'] = 'Simple (&eacute;conomie temps et comptage)';
$lang['ConfigBoard-debug2'] = 'Etendue (simple + querys SQL)';
$lang['ConfigBoard-email_view_level0'] = 'Cacher tous les e-mails';
$lang['ConfigBoard-email_view_level1'] = 'Autoriser le formulaire e-mail';
$lang['ConfigBoard-email_view_level2'] = 'Montrer mais protection spam';
$lang['ConfigBoard-email_view_level3'] = 'Montrer tout';
$lang['ConfigBoard-output_compression0'] = 'D&eacute;sactiv&eacute;';
$lang['ConfigBoard-output_compression1'] = 'HTML compress&eacute;';
$lang['ConfigBoard-output_compression2'] = 'Autoriser Gzip';
$lang['ConfigBoard-output_compression3'] = 'Compresser HTML + Gzip';
$lang['ConfigBoard-level0'] = 'Invit&eacute;s';
$lang['ConfigBoard-level1'] = 'Membres';
$lang['ConfigBoard-level2'] = 'Mod&eacute;rateurs';
$lang['ConfigBoard-level3'] = 'Administrateurs';
$lang['ConfigBoard-enable_acp_modules'] = 'Autoriser les modules PCA';
$lang['ConfigBoard-disable_registrations'] = 'D&eacute;sactiver l\'enregistrement d\'utilisateurs';
$lang['ConfigBoard-disable_registrations-info'] = 'Les utilisateurs peuvent encore &ecirc;tre enregistr&eacute;s via le PCA.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Raison de la d&eacute;sactivation de l\'enregistrement';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Autoriser les e-mails en double';
$lang['ConfigBoard-enable_badwords_filter'] = 'Autoriser le filtre &agrave; mots';
$lang['ConfigBoard-enable_ip_bans'] = 'Autoriser le bannissement sur adresse IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Montrer les entit&eacute;s &agrave; nu dans les balises [code].';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Ceci montre les entit&eacute;s &agrave; nu au lieu de leurs repr&eacute;sentations HTML.';
$lang['ConfigBoard-username_min_length'] = 'Longueur minimum du nom d\'utilisateur';
$lang['ConfigBoard-username_max_length'] = 'Longueur maximum du nom d\'utilisateur';
$lang['ConfigBoard-show_never_activated_members'] = 'Montrer les membres jamais activ&eacute;s';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Les montrer dans les stats et la liste des membres.';
$lang['ConfigBoard-enable_registration_log'] = 'Activer le log d\'enregistrement';
$lang['ConfigBoard-enable_registration_log-info'] = 'Ecrit les logs d\'enregistrement dans un fichier texte.';
$lang['ConfigBoard-registration_log_file'] = 'Fichier des logs d\'enregistrement';
$lang['ConfigBoard-registration_log_file-info'] = 'Relatif au r&eacute;pertoire du forum, ou chemin absolu.';
$lang['ConfigBoard-enable_email_dns_check'] = 'Activer le checking DNS des e-mails';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Valider par check des enregistrements MX. Cela peut ne pas fonctionner sur tous les domaines valides.';
$lang['ConfigBoard-edit_post_timeout'] = 'Intervalle de temps pour pouvoir &eacute;diter son billet';
$lang['ConfigBoard-edit_post_timeout-info'] = 'Un utilisateur est autoris&eacute; &agrave; modifier son billet seulement durant les x secondes apr&egrave;s l\'avoir envoy&eacute; sur le forum.';
$lang['ConfigBoard-disable_xhtml_header'] = 'D&eacute;sactiver l\'ent&ecirc;te XHTML pour les mod&egrave;les XHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'Un \'Content-Type\' XHTML ne peut &ecirc;tre utilis&eacute; que lorsque le contenu est 100% bien cod&eacute;. Ceci est toujours d&eacute;sactiv&eacute; pour les navigateurs non-XHTML.';
$lang['ConfigBoard-email_reply-to_header'] = 'Utiliser l\'ent&ecirc;te \'R&eacute;pondre &agrave;\'';
$lang['ConfigBoard-email_reply-to_header-info'] = 'Utiliser l\'ent&ecirc;te \'R&eacute;pondre &agrave;\' au lieu de l\'ent&ecirc;te \'De\' pour l\'adresse e-mail utilisateur (exig&eacute; chez certains h&eacute;bergeurs).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Nombre d\'emails en masse re&ccedil;us';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Plusieurs messages seront envoy&eacute;s jusqu\'&agrave; ce que tous les destinataires re&ccedil;oivent leurs e-mails.';

$lang['CategoriesInfo'] = 'Cette section vous permet de contr&ocirc;ler les diff&eacute;rentes cat&eacute;gories qui existent dans votre forum.';
$lang['CategoriesAddNewCat'] = 'Ajouter une nouvelle cat&eacute;gorie';
$lang['CategoriesAdjustSortIDs'] = 'Trier par ID';
$lang['CategoriesSortAutomatically'] = 'Tri automatique des cat&eacute;gories';
$lang['CategoriesNoCatsExist'] = 'Ce forum ne contient encore aucune cat&eacute;gorie.';
$lang['CategoriesCatName'] = 'Nom de la cat&eacute;gorie';
$lang['CategoriesSortID'] = 'ID de tri';
$lang['CategoriesMissingFields'] = 'Quelques champs requis sont manquants. Veuillez les remplir correctement.';
$lang['CategoriesSortChangesApplied'] = 'Vos changements par tri d\'ID ont &eacute;t&eacute; appliqu&eacute;.';
$lang['CategoriesConfirmCatDelete'] = 'Confirmer la suppression de la cat&eacute;gorie';
$lang['CategoriesConfirmCatDeleteContent'] = 'Etes-vous s&ucirc;r de vouloir supprimer la cat&eacute;gorie %s ? Cette action est irr&eacute;versible !';
$lang['CategoriesMoveContents'] = 'D&eacute;placer les contenus de la cat&eacute;gorie dans %s';
$lang['CategoriesDeleteContents'] = 'Supprimer les contenus';
$lang['CategoriesEditingCat'] = 'Modification de la cat&eacute;gorie %s';

$lang['ForumsInfo'] = 'Cette section vous donne le contr&ocirc;le des diverses parties qui existent sur votre forum.';
$lang['ForumsAddNewForum'] = 'Ajouter un nouveau forum';
$lang['ForumsAdjustSortIDs'] = 'Trier par ID';
$lang['ForumsSortAutomatically'] = 'Trier les forums automatiquement';
$lang['ForumsNoForumsExist'] = 'Il n\'y a encore aucun forum.';
$lang['ForumsForumName'] = 'Nom du forum';
$lang['ForumsCatName'] = 'Cat&eacute;gorie parente';
$lang['ForumsDescription'] = 'Description';
$lang['ForumsDescriptionExplain'] = 'Ceci est un champs texte pour du HTML. Si vous d&eacute;sirez y mettre des caract&egrave;res sp&eacute;ciaux, soyez s&ucirc;r d\'utiliser leurs entit&eacute;s HTML respectives (exemple : &amp;amp; au lieu de &amp;).';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = 'Ouvert';
$lang['ForumsAutoLock'] = 'Fermeture automatique';
$lang['ForumsAutoLockXReplies'] = 'Fermer apr&egrave;s %s r&eacute;ponses.';
$lang['ForumsIncreasePostCount'] = 'Augmenter le compteur de billets des utilisateurs';
$lang['ForumsModerators'] = 'Mod&eacute;rateurs';
$lang['ForumsModeratorsExplain'] = 'Mettre des noms d\'utilisateurs (pas des noms affich&eacute;s), s&eacute;par&eacute;s par des virgules. Insensible &agrave; la casse.';
$lang['ForumsModeratorsUnknown'] = 'Membre(s) inconnu(s): %s.';
$lang['ForumsHideModsList'] = 'Cacher la liste des mod&eacute;rateurs';
$lang['ForumsSortID'] = 'Tri par ID';
$lang['ForumsMissingFields'] = 'Quelques champs requis sont manquants. Veuillez les remplir correctement.';
$lang['ForumsSortChangesApplied'] = 'Vos changements par tri d\'ID ont &eacute;t&eacute; appliqu&eacute;.';
$lang['ForumsConfirmForumDelete'] = 'Confirmer la suppression du forum';
$lang['ForumsConfirmForumDeleteContent'] = 'Etes-vous sur de vouloir supprimer le forum %s ? Cette action est irr&eacute;versible !';
$lang['ForumsMoveContents'] = 'D&eacute;placer le contenu du forum dans %s';
$lang['ForumsMoveModerators'] = 'En d&eacute;pla&ccedil;ant le contenu, d&eacute;placer aussi les mod&eacute;rateurs.';
$lang['ForumsDeleteContents'] = 'Supprimer le contenu';
$lang['ForumsEditingForum'] = 'Modification du forum %s';
$lang['ForumsGeneral'] = 'Param&egrave;tres g&eacute;n&eacute;raux';
$lang['ForumsAuth'] = 'Param&egrave;tres d\'autorisation';
$lang['ForumsAuthNote'] = 'Les param&egrave;tres sont ind&eacute;pendants les uns des autres !';
$lang['Forums-level0'] = 'Invit&eacute;s';
$lang['Forums-level1'] = 'Membres';
$lang['Forums-level2'] = 'Mod&eacute;rateurs';
$lang['Forums-level3'] = 'Administrateurs';
$lang['Forums-auth0'] = 'Voir les forums';
$lang['Forums-auth1'] = 'Lire les sujets';
$lang['Forums-auth2'] = 'Placer de nouveaux sujets';
$lang['Forums-auth3'] = 'R&eacute;pondre aux sujets';
$lang['Forums-auth4'] = 'Editer les autres billets';
$lang['Forums-auth5'] = 'D&eacute;placer les sujets';
$lang['Forums-auth6'] = 'Supprimer les sujets et les billets';
$lang['Forums-auth7'] = 'Fermer les sujets';
$lang['Forums-auth8'] = 'Cr&eacute;er des sujets \'importants\'';
$lang['Forums-auth9'] = 'Ecrire en HTML (dangereux)';

$lang['IPLookupSearchHostname'] = 'Chercher le F.A.I.';
$lang['IPLookupSearchUsernames'] = 'Chercher le(s) nom(s) d\'utilisateur(s)';
$lang['IPLookupHostname'] = 'F.A.I.';
$lang['IPLookupHostnameNotFound'] = 'Pas trouv&eacute; de F.A.I. correspondant.';
$lang['IPLookupUsernames'] = 'Nom(s) d\'utilisateur(s)';
$lang['IPLookupUsernamesNotFound'] = 'Pas trouv&eacute; de nom d\'utilisateur correspondant';

$lang['SQLToolboxWarningTitle'] = 'Avertissement important !';
$lang['SQLToolboxWarningContent'] = 'Soyez prudent en utilisant l\'outil textuel de requ&ecirc;tes. Ex&eacute;cuter des ALTER, DELETE, TRUNCATE ou d\'autres types de requ&ecirc;tes peut endommager irr&eacute;versiblement votre forum ! Utilisez cet outil seulement si vous savez ce que vous faites.';
$lang['SQLToolboxExecuteQuery'] = 'Ex&eacute;cuter une requ&ecirc;te';
$lang['SQLToolboxExecuteQueryInfo'] = 'Tapez une requ&ecirc;te SQL &agrave; ex&eacute;cuter. Eventuellement, les r&eacute;sultats seront montr&eacute;s dans une deuxi&egrave;me cadre.';
$lang['SQLToolboxExecute'] = 'Ex&eacute;cuter';
$lang['SQLToolboxExecutedSuccessfully'] = 'Requ&ecirc;te ex&eacute;cut&eacute;e avec succ&egrave;s.';
$lang['SQLToolboxMaintenance'] = 'Maintenance';
$lang['SQLToolboxMaintenanceInfo'] = 'Ces fonctions optimisent (et r&eacute;parent) les tables SQL utilis&eacute;es par UseBB. Optimiser les tables fr&eacute;quemment est recommand&eacute; pour les forums bien charg&eacute;s.';
$lang['SQLToolboxRepairTables'] = 'R&eacute;parer les tables';
$lang['SQLToolboxOptimizeTables'] = 'Optimiser les tables';
$lang['SQLToolboxMaintenanceNote'] = 'Note : ceci ne restaure pas des donn&eacute;es perdues.';

$lang['ModulesInfo'] = 'Les modules PCA vous permettent d\'&eacute;tendre le PCA avec vos propres fonctionnalit&eacute;s ou des fonctionnalit&eacute;s faites par d\'autres programmeurs. Les modules peuvent &ecirc;tre trouv&eacute;s via le site web d\'UseBB : %s.';
$lang['ModulesLongName'] = 'Nom long';
$lang['ModulesShortName'] = 'Nom court';
$lang['ModulesCategory'] = 'Cat&eacute;gorie';
$lang['ModulesFilename'] = 'Nom de fichier';
$lang['ModulesDeleteNotPermitted'] = 'Non permis';
$lang['ModulesDisabled'] = 'Les modules PCA ont &eacute;t&eacute; d&eacute;sactiv&eacute;s dans la configuration de ce forum.';
$lang['ModulesNoneAvailable'] = 'Aucun module n\'est disponible en ce moment.';
$lang['ModulesUpload'] = 'Uploader des modules';
$lang['ModulesUploadInfo'] = 'Entrez le nom de fichier local d\'un module PCA pour l\'uploader.';
$lang['ModulesUploadDuplicateModule'] = 'Un module sous le nom de fichier %s existe d&eacute;j&agrave;. Enlevez-le d\'abord.';
$lang['ModulesUploadNoValidModule'] = 'Le fichier %s \'est pas un module PCA valide.';
$lang['ModulesUploadFailed'] = 'Impossible d\'installer le module %s. Copie &eacute;chou&eacute;e.';
$lang['ModulesUploadDisabled'] = 'Le r&eacute;pertoire du module n\'est pas modifiable en &eacute;criture. L\'uploading a &eacute;t&eacute; annul&eacute;. Pour essayer &agrave; nouveau, rendez d\'abord le r&eacute;pertoire %s modifiable en &eacute;criture sur le serveur web (essayez chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Confirmer la suppression du module';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Etes-vous s&ucirc;r de vouloir supprimer le module %s (%s) ?';

$lang['MembersSearchMember'] = 'Recherche d\'un membre';
$lang['MembersSearchMemberInfo'] = 'Entrez tout ou partie d\'un nom d\'utilisateur ou d\'un nom affich&eacute; pour le modifier.';
$lang['MembersSearchMemberExplain'] = 'Nom d\'utilisateur ou nom affich&eacute;';
$lang['MembersSearchMemberNotFound'] = 'Aucun membre avec le nom d\'utilisateur ou le nom affich&eacute; %s n\'a &eacute;t&eacute; trouv&eacute;.';
$lang['MembersSearchMemberList'] = 'Membre(s) trouv&eacute;(s)';
$lang['MembersEditingMember'] = 'Modification du membre %s';
$lang['MembersEditingMemberInfo'] = 'Modifiez les infos de l\'utilisateur et envoyez le formulaire. Les champs avec un ast&eacute;risque (*) sont obligatoires.';
$lang['MembersEditingMemberUsernameExists'] = 'Le nom d\'utilisateur %s existe d&eacute;j&agrave; comme nom d\'utilisateur ou comme nom affich&eacute;.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Le nom affich&eacute; %s existe d&eacute;j&agrave; comme nom d\'utilisateur ou comme nom affich&eacute;.';
$lang['MembersEditingMemberBanned'] = 'Banni';
$lang['MembersEditingMemberBannedReason'] = 'Raison du bannissement';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Vous ne pouvez pas changer votre niveau vous-m&ecirc;me.';
$lang['MembersEditingMemberCantBanSelf'] = 'Vous ne pouvez pas vous bannir vous-m&ecirc;me.';
$lang['MembersEditingComplete'] = 'Le profil du membre %s a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s.';

$lang['DeleteMembersSearchMember'] = 'Recherche d\'un membre';
$lang['DeleteMembersSearchMemberInfo'] = 'Entrez tout ou partie d\'un nom d\'utilisateur ou d\'un nom affich&eacute; pour le supprimer.';
$lang['DeleteMembersSearchMemberExplain'] = 'Nom d\'utilisateur ou nom affich&eacute;';
$lang['DeleteMembersSearchMemberNotFound'] = 'Aucun membre avec le nom d\'utilisateur ou le nom affich&eacute; %s n\'a &eacute;t&eacute; trouv&eacute;.';
$lang['DeleteMembersSearchMemberList'] = 'Membre(s) trouv&eacute;(s)';
$lang['DeleteMembersConfirmMemberDelete'] = 'Confirmer la suppression du membre';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Etes-vous s&ucirc;r de vouloir supprimer le membre %s ? Ceci est irr&eacute;versible !';
$lang['DeleteMembersComplete'] = 'Suppression du membre %s ex&eacute;cut&eacute;e.';

$lang['RegisterMembersExplain'] = 'Ici, vous pouvez pr&eacute;-enregistrer des comptes de membres. Remplissez simplement les informations suivantes pour cr&eacute;er un compte utilisateur.';
$lang['RegisterMembersComplete'] = 'L\'enregistrement de l\'utilisateur %s est compl&egrave;te. Il peut maintenant se connecter par voie normale.';

$lang['ActivateMembersExplain'] = 'Voici une liste des membres non activ&eacute;s sur votre forum. Ici, vous pouvez valider les comptes manuellement. Un ast&eacute;risque (*) signifie que ce compte a d&eacute;j&agrave; &eacute;t&eacute; actif autrefois.';
$lang['ActivateMembersNoMembers'] = 'Aucun membre &agrave; lister.';
$lang['ActivateMembersListAdmin'] = 'Approbation administrateur';
$lang['ActivateMembersListEmail'] = 'Approbation e-mail';
$lang['ActivateMembersListAll'] = 'Tous';

$lang['PruneForumsStart'] = 'Nettoyer';
$lang['PruneForumsExplain'] = 'Par le nettoyage des forums, vous pouvez supprimer ou d&eacute;placer de vieux sujets, et garder ainsi votre forum propre.';
$lang['PruneForumsForums'] = 'Forums &agrave; nettoyer';
$lang['PruneForumsAction'] = 'Action';
$lang['PruneForumsActionLock'] = 'Fermer';
$lang['PruneForumsActionMove'] = 'D&eacute;placer';
$lang['PruneForumsActionDelete'] = 'Supprimer';
$lang['PruneForumsMoveTo'] = 'D&eacute;placer les sujets dans';
$lang['PruneForumsTopicAge'] = 'Age du sujet';
$lang['PruneForumsTopicAgeField'] = 'Derni&egrave;re r&eacute;ponse il y a %s jour(s) pass&eacute;(s).';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'Le forum &quot;d&eacute;placer vers&quot; ne peut pas &ecirc;tre s&eacute;lectionn&eacute; pour nettoyage.';
$lang['PruneForumsConfirm'] = 'Confirmer';
$lang['PruneForumsConfirmText'] = 'Je sais que cette action est irr&eacute;versible.';
$lang['PruneForumsNotConfirmed'] = 'Vous devez d\'abord confirmer cette action.';
$lang['PruneForumsDone'] = 'Le nettoyage a &eacute;t&eacute; fait. %d sujet(s) nettoy&eacute;(s).';
$lang['PruneForumsExcludeStickies'] = 'Exclure les sujets importants';

$lang['PruneMembersExplain'] = 'Par le nettoyage des membres, vous pouvez retirer de la BDD du forum tous les comptes utilisateurs inactifs ou jamais activ&eacute;s.';
$lang['PruneMembersTypeNeverActivated'] = 'Membres jamais activ&eacute;s';
$lang['PruneMembersRegisteredDaysAgo'] = 'Enregistr&eacute;s depuis au moins %s jours.';
$lang['PruneMembersTypeNeverPosted'] = 'Membres qui n\'ont jamais &eacute;crit de billets';
$lang['PruneMembersTypeInactive'] = 'Membres inactifs';
$lang['PruneMembersLastLoggedIn'] = 'Connect&eacute;s la derni&egrave;re fois il y a au moins %s jours.';
$lang['PruneMembersExclude'] = 'Exclure';
$lang['PruneMembersConfirmText'] = 'Je comprends que cette action est irr&eacute;versible.';
$lang['PruneMembersStart'] = 'Lancer le nettoyage';
$lang['PruneMembersNotConfirmed'] = 'Vous devez d\'abord confirmer cette action.';
$lang['PruneMembersDone'] = 'Le nettoyage a &eacute;t&eacute; ex&eacute;cut&eacute;. %d membre(s) ont &eacute;t&eacute; nettoy&eacute;s.';

$lang['DNSBLIPBansDisabled'] = 'Le bannissement par adresses IP est d&eacute;sactiv&eacute;';
$lang['DNSBLIPBansDisabledInfo'] = 'Pour faire fonctionner le bannissement avec DNSBL, le bannissement par adresses IP doit &ecirc;tre activ&eacute;.';
$lang['DNSBLGeneralInfo'] = 'Les proxys ouverts sont souvent utilis&eacute;s pour envoyer du spam ou placer des messages abusifs. En utilisant le syst&egrave;me de protection de UseBB, la plupart de ces proxys peuvent &ecirc;tre d&eacute;tect&eacute;s et bannis automatiquement. Ci-apr&egrave;s, des listes noires (blacklists) sont interrog&eacute;es pour des informations sur l\'adresse IP des visiteurs.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Autoriser le bannissement avec DNSBL';
$lang['DNSBLServers'] = 'Serveurs DNS BlackList (DNSBL)';
$lang['DNSBLServersInfo'] = 'Un serveur DNSBL par ligne. Notez que l\'utilisation de la blacklist peut causer des ralentissements lors de la cr&eacute;ation de nouvelles sessions sur votre forum.';
$lang['DNSBLMinPositiveHits'] = 'Au moins %s tests positifs sont requis pour bannir une adresse IP.';
$lang['DNSBLRecheckMinutes'] = 'Rev&eacute;rifier les adresses IP autoris&eacute;es toutes les %s minutes (0 pour d&eacute;sactiver).';
$lang['DNSBLSettingsSaved'] = 'Param&egrave;tres de bannissement DNSBL sauv&eacute;s.';
$lang['DNSBLWhitelist'] = 'Whitelist (liste autoris&eacute;e)';
$lang['DNSBLWhitelistInfo'] = 'Une adresse IP ou un nom d\'h&eacute;bergeur (hostname) par ligne (* et ? peuvent &ecirc;tre utilis&eacute;s comme wildcards).';

$lang['BadwordsInfo'] = 'Les mots non d&eacute;sir&eacute;s peuvent &ecirc;tre filtr&eacute;s ou remplac&eacute;s, &eacute;ventuellement en utilisant des &eacute;galit&eacute;s partielles (utilisation de *).';
$lang['BadwordsDisabled'] = 'Filtre sur mots d&eacute;sactiv&eacute;';
$lang['BadwordsDisabledInfo'] = 'Le filtre sur mots a &eacute;t&eacute; d&eacute;sactiv&eacute; sur ce forum.';
$lang['BadwordsNoBadwordsExist'] = 'Aucun filtre sur mots n\'existe dans ce forum.';
$lang['BadwordsAddBadwordWord'] = 'Mot';
$lang['BadwordsAddBadwordReplacement'] = 'Remplac&eacute; par';

$lang['MassEmailInfo'] = 'Envoyer un e-mail en masse &agrave; tous les membres ou &agrave; ceux d\'un niveau donn&eacute;.';
$lang['MassEmailRecipients'] = 'Destinataires';
$lang['MassEmailRecipients-admins'] = 'Administrateurs';
$lang['MassEmailRecipients-mods'] = 'Mod&eacute;rateurs';
$lang['MassEmailRecipients-members'] = 'Membres normaux';
$lang['MassEmailSubject'] = 'Sujet';
$lang['MassEmailBody'] = 'Corps';
$lang['MassEmailTemplate'] = 'Bonjour,

Ce mail provient du forum nommé "[board_name]". L\'administrateur a envoyé cet e-mail en masse depuis notre forum. Le message suit ci-dessous.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'L\'e-mail de masse a &eacute;t&eacute; envoy&eacute; &agrave; %d membres en %d message(s).';
$lang['MassEmailOptions'] = 'Options';
$lang['MassEmailPublicEmailsOnly'] = 'Envoyer seulement aux e-mails publics';
$lang['MassEmailExcludeBanned'] = 'Exclure les membres bannis';

$lang['BansInfo'] = 'D\'ici, vous pouvez contr&ocirc;ler presque tous les aspects du bannissement sur votre forum. L\'&eacute;galit&eacute; partielle (en utilisant *) est possible. Les comptes peuvent &ecirc;tre supprim&eacute;s individuellement via le panneau \'Supprimer les membres\'.';
$lang['Bans-username'] = 'Noms d\'utilisateurs';
$lang['Bans-email'] = 'Adresses e-mail';
$lang['Bans-ip_addr'] = 'Adresses IP';
$lang['BansUsername'] = 'Nom d\'utilisateur';
$lang['BansEmail'] = 'Adresse e-mail';
$lang['BansIp_addr'] = 'Adresse IP';
$lang['BansNoBansExist'] = 'Aucun bannissement de ce type n\'existe dans ce forum.';
$lang['BansIPBansDisabledInfo'] = 'Le bannissement par adresses IP a &eacute;t&eacute; d&eacute;sactiv&eacute; sur ce forum.';

?>
