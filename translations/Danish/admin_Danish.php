
<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_Danish.php,v 1.0 2007/04/28 20:02:42 Dahlsoft.dk Exp $

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

$lang['AdminLogin'] = 'Adminstrator Log ind';
$lang['AdminPasswordExplain'] = 'Af sikkerhedsgrunde, skal du indtaste din adgangskode for at logge ind p&aring; Administrator kontrolpanelet.';

$lang['RunningBadACPModule'] = 'UseBB kan ikke k&oslash;rer dette modul fordi et eller flere aspekter mangler (intet $usebb_module objekt fundet og/eller manglende run_module() objekt metode).';

$lang['Category-main'] = 'Generalt';
$lang['Category-forums'] = 'Forum';
$lang['Category-various'] = 'Diverse';
$lang['Category-members'] = 'Brugere';
$lang['Category-pruning'] = 'Oprydning';
$lang['Category-security'] = 'Sikkerhed';
$lang['Item-index'] = 'Administrator KontrolPanel Indeks';
$lang['Item-version'] = 'Version kontrol';
$lang['Item-config'] = 'General konfiguration';
$lang['Item-categories'] = 'Administrer Kategorier';
$lang['Item-forums'] = 'Administrer Fora';
$lang['Item-iplookup'] = 'IP Addresse opslag';
$lang['Item-sqltoolbox'] = 'SQL V&aelig;rkt&oslash;jskasse';
$lang['Item-modules'] = 'AKP Moduler';
$lang['Item-members'] = 'Rediger Brugere';
$lang['Item-delete_members'] = 'Slet Brugere';
$lang['Item-register_members'] = 'Registrer Brugere';
$lang['Item-activate_members'] = 'Aktiver Brugere';
$lang['Item-prune_forums'] = 'Ryd op i Fora';
$lang['Item-prune_members'] = 'Ryd op i Brugere';
$lang['Item-dnsbl'] = 'DNSBL Udelukkelse';
$lang['Item-badwords'] = 'Filtrering af Forbudte ord';
$lang['Item-mass_email'] = 'Masse Email';
$lang['Item-bans'] = 'Udelukkelses administration';

$lang['IndexWelcome'] = 'Velkommen til dit UseBB forum Administrator kontrolpanel. Herfra kan du styre alle aspekter af dit forum, ops&aelig;tte konfigutationen, styre fora, Brugere, osv.';
$lang['IndexSystemInfo'] = 'System Info';
$lang['IndexUseBBVersion'] = 'UseBB version';
$lang['IndexPHPVersion'] = 'PHP version';
$lang['IndexSQLServer'] = 'SQL server driver';
$lang['IndexHTTPServer'] = 'HTTP server';
$lang['IndexOS'] = 'Styresystem';
$lang['IndexServerLoad'] = 'Indl&aelig;ste Server v&aelig;rdier';
$lang['IndexLinks'] = 'Links';
$lang['IndexUnactiveMembers'] = 'Ikke aktiverede Brugere';
$lang['IndexNoUnactiveMembers'] = 'Der er ingen Brugere der venter p&aring; admin aktivering.';
$lang['IndexOneUnactiveMember'] = 'Der er en Bruger der venter p&aring; admin aktivering.';
$lang['IndexMoreUnactiveMembers'] = 'Der er %d Brugere der venter p&aring; admin aktivering.';
$lang['IndexWarning'] = 'Advarsel!';
$lang['IndexUnwritableConfig'] = 'I &oslash;jeblikket, er %s ikke skrivbar via PHP. Dette er ikke tilr&aring;deligt. For at g&oslash;re den skrivbar, skal filens tilladelser &aelig;ndres via en FTP klient eller udf&oslash;re en chmod operation (0777) p&aring; den. Kontakt din host i tilf&aelig;lde af problems.';
$lang['IndexMultibyteUsage'] = 'L&aelig;g m&aelig;rke til at du nu bruger en overs&aelig;ttelse skrevet i en multibyte karakters&aelig;t (%s). Disse overs&aelig;ttelser og karakters&aelig;t er ikke officielt underst&oslash;ttet af UseBB 1.';

$lang['VersionFailed'] = 'Forummet kunne ikke fasts&aelig;tte den seneste version. Kontroller venligst oftere %s for at sikre at du har den seneste version.';
$lang['VersionLatestVersionTitle'] = 'Dette er den seneste version';
$lang['VersionLatestVersion'] = 'Dette forum er basseret p&aring; UseBB %s som er den seneste stabile version.';
$lang['VersionNeedUpdateTitle'] = 'Ny version tilg&aelig;ngelig!';
$lang['VersionNeedUpdate'] = 'Dette forum k&oslash;rer UseBB %s opgradering til version %s er n&oslash;dvendig for at forblive sikker og problem fri! Bes&oslash;g %s for at hente den seneste version.';
$lang['VersionBewareDevVersionsTitle'] = 'Udviklingsversion fundet';
$lang['VersionBewareDevVersions'] = 'Dette forum k&oslash;rer %s selvom %s stadig er den seneste stabile version. Beware of the problems and uncompatibilities that might exist with development versions.';

$lang['ConfigInfo'] = 'P&aring; denne side kan du redigerer alle ops&aelig;tninger af dit UseBB forum. V&aelig;r forsigtig med at &aelig;ndre p&aring; database ops&aelig;tningen. Felter markeret med en stjerne (*) er kr&aelig;vet.';
$lang['ConfigSet'] = 'Den nye ops&aelig;tning er nu gemt. Den vil blive synlig n&aelig;ste gang der indl&aelig;ses en ny side.';
$lang['ConfigMissingFields'] = 'Nogle felter manglede eller forkerte (eks. tekst i et talfelt). Kontroller venligst f&oslash;lgende felter:';
$lang['ConfigBoard-type'] = 'Type';
$lang['ConfigBoard-server'] = 'Server';
$lang['ConfigBoard-username'] = 'Brugernavn';
$lang['ConfigBoard-passwd'] = 'Adgangskode';
$lang['ConfigBoard-dbname'] = 'Database navn';
$lang['ConfigBoard-prefix'] = 'Tabel pr&aelig;fiks';
$lang['ConfigBoardSection-general'] = 'General side';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = 'Lad det forblive blank for auto-detection.';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Side t&aelig;ller';
$lang['ConfigBoardSection-date_time'] = 'Datoer &amp; Tider';
$lang['ConfigBoardSection-date_time-info'] = 'Tilf&oslash;jes kun til g&aelig;ster og nye konti.';
$lang['ConfigBoardSection-database'] = 'Database ops&aelig;tning';
$lang['ConfigBoardSection-database-info'] = '&AElig;ndre kun disse ops&aelig;tninger n&aring;r du er sikker p&aring; at de vil virke omg&aring;ende.';
$lang['ConfigBoardSection-advanced'] = 'Advancerede ops&aelig;tninger';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Ekstra funktioner';
$lang['ConfigBoardSection-user_rights'] = 'Bruger rettigheder';
$lang['ConfigBoardSection-min_levels'] = 'Minimum adgangs niveau';
$lang['ConfigBoardSection-min_levels-info'] = 'Disse er minimums niveauet for at kunne f&aring; adgang til hvert element.';
$lang['ConfigBoardSection-layout'] = 'Layout ops&aelig;tning';
$lang['ConfigBoardSection-security'] = 'Sikkerhed';
$lang['ConfigBoard-admin_email'] = 'Admin e-mail addresse';
$lang['ConfigBoard-board_descr'] = 'Side beskrivelse';
$lang['ConfigBoard-board_keywords'] = 'Side n&oslash;gleord';
$lang['ConfigBoard-board_keywords-info'] = 'Adskilt med komma.';
$lang['ConfigBoard-board_name'] = 'Side navn';
$lang['ConfigBoard-date_format'] = 'Dato format';
$lang['ConfigBoard-date_format-info'] = 'Samme syntax som PHP\'s date().';
$lang['ConfigBoard-language'] = 'Standard sprog';
$lang['ConfigBoard-language-info'] = 'Kun tilf&oslash;jet g&aelig;ster og nye konti.';
$lang['ConfigBoard-session_name'] = 'Sessions navn';
$lang['ConfigBoard-session_name-info'] = 'Kun alfanummeriske karakterer, ingen mellemrum. Skal mindst indeholde et bogstav.';
$lang['ConfigBoard-template'] = 'Standard skabelon';
$lang['ConfigBoard-template-info'] = 'Tilf&oslash;jet kun til g&aelig;ster og nye konti.';
$lang['ConfigBoard-active_topics_count'] = 'Aktive emne t&aelig;ller';
$lang['ConfigBoard-avatars_force_height'] = 'Maximum avatar h&oslash;jde (px)';
$lang['ConfigBoard-avatars_force_height-info'] = 'Nul for uendeligt.';
$lang['ConfigBoard-avatars_force_width'] = 'Maximum avatar bredde (px)';
$lang['ConfigBoard-avatars_force_width-info'] = 'Nul for uendeligt.';
$lang['ConfigBoard-debug'] = 'Fejlfindings mode';
$lang['ConfigBoard-email_view_level'] = 'E-mail visnings niveau';
$lang['ConfigBoard-flood_interval'] = 'Overstr&oslash;mnings interval (sekunder)';
$lang['ConfigBoard-members_per_page'] = 'Brugere pr side';
$lang['ConfigBoard-online_min_updated'] = 'Online brugere de sidste par minutter';
$lang['ConfigBoard-output_compression'] = 'udl&aelig;s kompression';
$lang['ConfigBoard-passwd_min_length'] = 'Minimums l&aelig;ngde p&aring; adgangskode';
$lang['ConfigBoard-posts_per_page'] = 'Poster pr side';
$lang['ConfigBoard-rss_items_count'] = 'RSS elementt&aelig;ller';
$lang['ConfigBoard-search_limit_results'] = 'Begr&aelig;ns s&oslash;geresultater til x poster';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'S&oslash;ge n&oslash;gleord minimums l&aelig;ngde';
$lang['ConfigBoard-session_max_lifetime'] = 'Maximum sessions levetid (minutter)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Redigeret meddelelses timeout';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'N&aring;r svaret er blevet redigeret indenfor disse sekunder efter oprettelse, vil redigerede bem&aelig;rkning forblive skjult.';
$lang['ConfigBoard-topicreview_posts'] = 'Emne gennemgangs postt&aelig;ller';
$lang['ConfigBoard-topics_per_page'] = 'Emner pr side';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Aktive emner';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Detalieret online liste';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Statistik ramme';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Minimums niveau for at kunne se skjulte e-mail addresser';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Brugerliste';
$lang['ConfigBoard-view_search_min_level'] = 'S&oslash;ge maskine';
$lang['ConfigBoard-view_stafflist_min_level'] = 'liste over ansatte';
$lang['ConfigBoard-view_stats_min_level'] = 'Statistik side';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Kontakt admin link';
$lang['ConfigBoard-allow_multi_sess'] = 'Tillad flere sessioner pr IP';
$lang['ConfigBoard-board_closed'] = 'Luk siden';
$lang['ConfigBoard-board_closed-info'] = 'Administratorer vil stadig kunne logge sig ind.';
$lang['ConfigBoard-cookie_secure'] = 'Sikker cookies';
$lang['ConfigBoard-cookie_secure-info'] = 'Krypterede cookies (kun HTTPS)';
$lang['ConfigBoard-cookie_httponly'] = 'Sl&aring; "HTTP kun cookies" til';
$lang['ConfigBoard-cookie_httponly-info'] = 'Tilf&oslash;jer et httpOnly flag i cookie\'en, og g&oslash;r dem mere sikre mod XSS.';
$lang['ConfigBoard-dst'] = 'Sommertid';
$lang['ConfigBoard-enable_contactadmin'] = 'Sl&aring; kontakt admin link til';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Sl&aring; detaljeret online list til';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Sl&aring; forum statistik ramme til';
$lang['ConfigBoard-enable_memberlist'] = 'Sl&aring; Brugerlisten til';
$lang['ConfigBoard-enable_quickreply'] = 'Sl&aring; hurtig svar til';
$lang['ConfigBoard-enable_rss'] = 'Sl&aring; RSS feed til';
$lang['ConfigBoard-enable_rss_per_forum'] = 'Sl&aring; separat forum RSS feeds til';
$lang['ConfigBoard-enable_rss_per_topic'] = 'Sl&aring; separat emne RSS feeds til';
$lang['ConfigBoard-enable_stafflist'] = 'Sl&aring; liste over ansatte til';
$lang['ConfigBoard-enable_stats'] = 'Sl&aring; statistik siden til';
$lang['ConfigBoard-friendly_urls'] = 'Sl&aring; venligsindede URL\'er til';
$lang['ConfigBoard-friendly_urls-info'] = 'Kr&aelig;ver Apache og mod_rewrite. Vil sl&aring; URL sessions ID\'er fra.';
$lang['ConfigBoard-guests_can_access_board'] = 'Ja, g&aelig;ster skal have adgang til siden';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Ja, g&aelig;ster skal kunne se kontakt information i profilerne';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Ja, g&aelig;ster skal kunne se Brugeres profiler';
$lang['ConfigBoard-hide_avatars'] = 'Skjul alle avatar\'er';
$lang['ConfigBoard-hide_signatures'] = 'Skjul alle signaturere';
$lang['ConfigBoard-hide_userinfo'] = 'Skjul bruger informationer';
$lang['ConfigBoard-rel_nofollow'] = 'Sl&aring; Google\'s nofollow til';
$lang['ConfigBoard-rel_nofollow-info'] = 'Dette vil g&oslash;re at Google ignorerer alle BBCode link.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Returner til emnet efter oprettelse';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Sl&aring; BBCode i signaturer til';
$lang['ConfigBoard-sig_allow_smilies'] = 'Sl&aring; smilies i signaturer til';
$lang['ConfigBoard-sig_max_length'] = 'Signatur Maximum l&aelig;ngde';
$lang['ConfigBoard-single_forum_mode'] = 'Enkelt forum mode';
$lang['ConfigBoard-single_forum_mode-info'] = 'Vis kun synlige forum som forum indeks.';
$lang['ConfigBoard-target_blank'] = '&Aring;ben BBCode link i et nyt vindue';
$lang['ConfigBoard-activation_mode'] = 'Aktiverings mode';
$lang['ConfigBoard-activation_mode0'] = 'Ingen aktivering';
$lang['ConfigBoard-activation_mode1'] = 'Aktivering via E-mail';
$lang['ConfigBoard-activation_mode2'] = 'Aktivering via Adminstrator';
$lang['ConfigBoard-board_closed_reason'] = 'Begrundelse for side lukning';
$lang['ConfigBoard-board_url'] = 'Side URL';
$lang['ConfigBoard-board_url-info'] = 'Komplet URL inklusive afsluttende slash(/); blank for auto-s&oslash;gning.';
$lang['ConfigBoard-cookie_domain'] = 'Cookie domain';
$lang['ConfigBoard-cookie_path'] = 'Cookie sti';
$lang['ConfigBoard-session_save_path'] = 'Gem Sessioner i mappen';
$lang['ConfigBoard-session_save_path-info'] = 'V&aelig;lg en mappe hvor sessions dataene skal gemmes; Indtast den absolutte sti og mappe navne.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Vis ikke fora i aktive emner';
$lang['ConfigBoard-exclude_forums_rss'] = 'Frav&aelig;lg fora fra RSS feed';
$lang['ConfigBoard-exclude_forums_stats'] = 'Frav&aelig;lg fora fra statistiksiden';
$lang['ConfigBoard-timezone'] = 'Tidszone';
$lang['ConfigBoard-debug0'] = 'Sl&aring;et fra';
$lang['ConfigBoard-debug1'] = 'Simpel (sender tid og t&aelig;ller)';
$lang['ConfigBoard-debug2'] = 'Udvidet (simpel + SQL Foresp&oslash;rgelser)';
$lang['ConfigBoard-email_view_level0'] = 'Skjul alle e-mail addresser';
$lang['ConfigBoard-email_view_level1'] = 'Sl&aring; e-mail formular til';
$lang['ConfigBoard-email_view_level2'] = 'Vis som spam proof';
$lang['ConfigBoard-email_view_level3'] = 'Vis som r&aring;';
$lang['ConfigBoard-output_compression0'] = 'Sl&aring;et fra';
$lang['ConfigBoard-output_compression1'] = 'Komprimeret HTML';
$lang['ConfigBoard-output_compression2'] = 'Sl&aring; Gzip til';
$lang['ConfigBoard-output_compression3'] = 'Komprimeret HTML + Gzip';
$lang['ConfigBoard-level0'] = 'G&aelig;ster';
$lang['ConfigBoard-level1'] = 'Brugere';
$lang['ConfigBoard-level2'] = 'Modoratorer';
$lang['ConfigBoard-level3'] = 'Administratorer';
$lang['ConfigBoard-enable_acp_modules'] = 'Sl&aring; Administrator KontrolPanel moduler til';
$lang['ConfigBoard-disable_registrations'] = 'Sl&aring; bruger registrering fra';
$lang['ConfigBoard-disable_registrations-info'] = 'Brugere kan stadig blive oprette via Administrator KontrolPanelet.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Bruger oprettelse er fravalgt grundet';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Tillad dupliktion af e-mail addresser';
$lang['ConfigBoard-enable_badwords_filter'] = 'Sl&aring; filtret forbudte ord til';
$lang['ConfigBoard-enable_ip_bans'] = 'Sl&aring; udelukkelse af IP addresser til';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Vis r&aring; indtastinger i [kode] tags.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Vis den r&aring; indtastnings kode istedet for dets HTML pr&aelig;sentation.';
$lang['ConfigBoard-username_min_length'] = 'Minimum l&aelig;ngde p&aring; brugernavn';
$lang['ConfigBoard-username_max_length'] = 'Maximum l&aelig;ngde p&aring; brugernavn';
$lang['ConfigBoard-show_never_activated_members'] = 'Vis Brugere der aldrig er blevet aktiveret';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Vis dem i statistik rammen og Brugerlisten.';
$lang['ConfigBoard-enable_registration_log'] = 'Sl&aring; registrerings loggen til';
$lang['ConfigBoard-enable_registration_log-info'] = 'Skriver registrerings loggen i en tekst fil.';
$lang['ConfigBoard-registration_log_file'] = 'Registrerings log fil';
$lang['ConfigBoard-registration_log_file-info'] = 'Relativt tilforummets mappe, eller den absolute sti.';
$lang['ConfigBoard-enable_email_dns_check'] = 'Sl&aring; email addresse DNS kontrol til';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Valideringen kigger efter MX records. Dette virker m&aring;ske ikke p&aring; alle valide domain\'er.';
$lang['ConfigBoard-edit_post_timeout'] = 'Redigerings timeout';
$lang['ConfigBoard-edit_post_timeout-info'] = 'En bruger kan kun redigerer i sine indl&aelig;g/svar indenfor x sekunder efter oprettelse.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Frav&aelig;lg XHTML header i XHTML skabeloner.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'En XHTML Indholds-Type kan kun bruges n&aring;r indholdet er 100% vel-formuleret. Det er altid fravalgt for non-XHTML browsere.';
$lang['ConfigBoard-email_reply-to_header'] = 'Brug Svar-til header';
$lang['ConfigBoard-email_reply-to_header-info'] = 'Brug Svar-til istedet for Fra i Brugerens email addresser (Kr&aelig;vet ved nogle udbydere).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Masse email meddelelses modtager t&aelig;ller';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Mangfoldige meddelelser vil blive ved med at blive sent indtil de er blevet sendt til alle modtagere.';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'Aktiver sendmail -f parametret.';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'Dette vil m&aring;ske &oslash;del&aelig;gge email funktionaliteten vend nogle v&aerlig;ter.';
$lang['ConfigBoard-antispam_question_mode'] = 'Anti-spam Sp&oslash;rgsm&aring;l mode';
$lang['ConfigBoard-antispam_question_mode-info'] = 'Stil g&aelig;sterne et sp&oslash;rgsm&aring;l f&oslash;r de kan f&aring; adgang til registeringen, nye emner og svar formularer.';
$lang['ConfigBoard-antispam_question_mode0'] = 'Deaktiveret';
$lang['ConfigBoard-antispam_question_mode1'] = 'Tilf&aelig;ldige sp&oslash;rgsm&aring;l';
$lang['ConfigBoard-antispam_question_mode2'] = 'Tilf&aelig;ldigt valgte brugerdeifneret Sp&oslash;rgsm&aring;l';
$lang['ConfigBoard-antispam_question_questions'] = 'Brugerdefineret anti-spam Sp&oslash;rgsm&aring;l';
$lang['ConfigBoard-antispam_question_questions-info'] = 'Sp&oslash;rgsm&aring;lene i formularen af &quot;sp&oslash;rgsm&aring;l|svar&quot; (uden anf&oslah;rselstegn), adskilt med ny linie. Svaret er f&oslash;lsomt store/sm&aring; bogstaver.';

$lang['CategoriesInfo'] = 'Denne sektion giver dig kontrollen over diverse kategorier der findes p&aring; din side.';
$lang['CategoriesAddNewCat'] = 'Tilf&oslash;j en ny kategori';
$lang['CategoriesAdjustSortIDs'] = 'Juster sorterings ID\'ene';
$lang['CategoriesSortAutomatically'] = 'Sorter kategorier automatisk';
$lang['CategoriesNoCatsExist'] = 'Denne side indeholder endnu ingen kategorier.';
$lang['CategoriesCatName'] = 'Kategori navn';
$lang['CategoriesSortID'] = 'Sorterings ID';
$lang['CategoriesMissingFields'] = 'Nogle kr&aelig;vede felter manglede. Udfyld dem venligst korrekt.';
$lang['CategoriesSortChangesApplied'] = 'Dine &aelig;ndringer til sorterings ID\'ene er blevet tilf&oslash;jet.';
$lang['CategoriesConfirmCatDelete'] = 'Bekr&aelig;ft sletning af kategori';
$lang['CategoriesConfirmCatDeleteContent'] = 'Er du sikker p&aring; du vil slette kategorien %s? Denne handling kan ikke fortrydes!';
$lang['CategoriesMoveContents'] = 'Flyt indholdet af denne kategori til %s';
$lang['CategoriesDeleteContents'] = 'Slet indholdet';
$lang['CategoriesEditingCat'] = 'Rediger kategori %s';

$lang['ForumsInfo'] = 'Denne sektion giver dig kontrollen over diverse fora der findes p&aring; din side.';
$lang['ForumsAddNewForum'] = 'Tilf&oslash;j et nyt forum';
$lang['ForumsAdjustSortIDs'] = 'Juster sorterings ID\'ene';
$lang['ForumsSortAutomatically'] = 'Sorter fora automatisk';
$lang['ForumsNoForumsExist'] = 'Denne side indeholder endnu ingen fora.';
$lang['ForumsForumName'] = 'Forum navn';
$lang['ForumsCatName'] = 'Overordnet kategori';
$lang['ForumsDescription'] = 'Beskrivelse';
$lang['ForumsDescriptionExplain'] = 'Dette er et HTML brugbart felt. Hvis du vil bruge specielle karakterer, s&aring; brug deres respektive HTML termologi (f.eks. &amp;amp; istedet for &amp;).';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = '&Aring;ben';
$lang['ForumsAutoLock'] = 'Auto l&aring;s';
$lang['ForumsAutoLockXReplies'] = 'L&aring;s efter %s besvarelser.';
$lang['ForumsIncreasePostCount'] = 'For&oslash;g brugernes indl&aelig;gst&aelig;ller';
$lang['ForumsModerators'] = 'Modoratorer';
$lang['ForumsModeratorsExplain'] = 'Brugernavne(ikke d&aelig;knavne), adskilt med komma. Ser ikke p&aring; store og sm&aring; bogstaver.';
$lang['ForumsModeratorsUnknown'] = 'Ukendt Bruger(e): %s.';
$lang['ForumsHideModsList'] = 'Skjul modorator listen';
$lang['ForumsSortID'] = 'Sorterings ID';
$lang['ForumsMissingFields'] = 'Nogle kr&aelig;vede felter manglede. Udfyld dem venligst korrekt.';
$lang['ForumsSortChangesApplied'] = 'Dine &aelig;ndringer til sorterings ID\'ene er blevet tilf&oslash;jet.';
$lang['ForumsConfirmForumDelete'] = 'Bekr&aelig;ft sletning af forum';
$lang['ForumsConfirmForumDeleteContent'] = 'Er du sikker p&aring; du vil slette forummet %s? Denne handling kan ikke fortrydes!';
$lang['ForumsMoveContents'] = 'Flyt indholdet af forummet til %s';
$lang['ForumsMoveModerators'] = 'N&aring;r indholdet flyttes, flyt ogs&aring; modoratorerne.';
$lang['ForumsDeleteContents'] = 'Slet indholdet';
$lang['ForumsEditingForum'] = 'Rediger forumet - %s';
$lang['ForumsGeneral'] = 'Generelle ops&aelig;tninger';
$lang['ForumsAuth'] = 'Autorisations ops&aelig;tninger';
$lang['ForumsAuthNote'] = 'Ops&aelig;tningerne har ingen indflydelse p&aring; hinanden!';
$lang['Forums-level0'] = 'G&aelig;ster';
$lang['Forums-level1'] = 'Brugere';
$lang['Forums-level2'] = 'Modoratorer';
$lang['Forums-level3'] = 'Administratorer';
$lang['Forums-auth0'] = 'Se forum';
$lang['Forums-auth1'] = 'L&aelig;s topics';
$lang['Forums-auth2'] = 'Inds&aelig;t nye emner';
$lang['Forums-auth3'] = 'Besvar emner';
$lang['Forums-auth4'] = 'Ret i andres indl&aelig;g/svar';
$lang['Forums-auth5'] = 'Flyt emner';
$lang['Forums-auth6'] = 'Slet emner og indl&aelig;g/svar';
$lang['Forums-auth7'] = 'L&aring;s emner';
$lang['Forums-auth8'] = 'faste emner';
$lang['Forums-auth9'] = 'vis som HTML (Farligt)';

$lang['IPLookupSearchHostname'] = 'S&oslash;g p&aring; v&aelig;rtsnavn';
$lang['IPLookupSearchUsernames'] = 'S&oslash;g p&aring; brugernavn(e)';
$lang['IPLookupHostname'] = 'V&aelig;rtsnavn';
$lang['IPLookupHostnameNotFound'] = 'Ingen tilh&oslash;rende v&aelig;rtsnavn fundet.';
$lang['IPLookupUsernames'] = 'Brugernavn(e)';
$lang['IPLookupUsernamesNotFound'] = 'Ingen tilh&oslash;rende brugernavn(e) fundet.';

$lang['SQLToolboxWarningTitle'] = 'Advarsel Vigtigt!';
$lang['SQLToolboxWarningContent'] = 'V&aelig;r meget forsigtig med brugen af dette Foresp&oslash;rgelses v&aelig;rkt&oslash;j. Udf&oslash;relse af ALTER, DELETE, TRUNCATE eller andre typer foresp&oslash;rgelser kan udrette uoprettelig skade p&aring; dit forum! Brug kun dette hvis du er helt sikker p&aring; hvade det er du g&oslash;r.';
$lang['SQLToolboxExecuteQuery'] = 'Udf&oslash;r foresp&oslash;rgelse';
$lang['SQLToolboxExecuteQueryInfo'] = 'Indtast en SQL foresp&oslash;rgelse til udf&oslash;relse. Resultatet vil blive vist i en anden tekst boks.';
$lang['SQLToolboxExecute'] = 'Udf&oslash;r';
$lang['SQLToolboxExecutedSuccessfully'] = 'Foresp&oslash;rgselen er vellykket udf&oslash;rt.';
$lang['SQLToolboxMaintenance'] = 'Vedligeholdelse';
$lang['SQLToolboxMaintenanceInfo'] = 'Disse funktioner optimeringer (og reparationer) SQL tabellerne der bruges af UseBB. Optimering af  tabellerne tit og ofte er tilr&aring;deligt i store fora.';
$lang['SQLToolboxRepairTables'] = 'Reparer tabeller';
$lang['SQLToolboxOptimizeTables'] = 'Optimer tabeller';
$lang['SQLToolboxMaintenanceNote'] = 'Bem&aelig;rk: Dette genopretter ingen tabte data i databasen.';

$lang['ModulesInfo'] = 'Administrator KontrolPanel moduler s&aelig;tter dig istand til at udvide Administrator KontrolPanelet med dine egne tilf&oslash;jelser eller tredie parts tilf&oslash;jelsesprogrammer. Modulerne kan du finde p&aring; UseBB\'s hjemmeside: %s.';
$lang['ModulesLongName'] = 'Langt navn';
$lang['ModulesShortName'] = 'Kort navn';
$lang['ModulesCategory'] = 'Kategori';
$lang['ModulesFilename'] = 'Filnavn';
$lang['ModulesDeleteNotPermitted'] = 'Ingen tilladelse';
$lang['ModulesDisabled'] = 'Administrator KontrolPanel moduler er blevet sl&aring;et fra i sidekonfigurationen.';
$lang['ModulesNoneAvailable'] = 'Der er ingen moduler tilr&aring;dighed p&aring; dette tidspunkt.';
$lang['ModulesUpload'] = 'Upload modul';
$lang['ModulesUploadInfo'] = 'Indtast et lokalt filnavn p&aring; en UseBB Administrator KontrolPanel modul for at uploadte den.';
$lang['ModulesUploadDuplicateModule'] = 'Et modul med filnavnet %s eksisterer allerede. Fjern venligst denne f&oslash;rst.';
$lang['ModulesUploadNoValidModule'] = 'Filen %s er ikke et UseBB modul.';
$lang['ModulesUploadFailed'] = 'Modulet %s kunne ikke installeres. Kopieringen fejlede.';
$lang['ModulesUploadDisabled'] = 'Mappen til moduler er ikke skrivbar. Uploadtningen er blecet afbrudt. For at kunne uploade, skal mappen %s g&oslash;res skrivbar p&aring; webserveren (pr&oslash;v chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Bekr&aelig;ft modul sletningen';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Er du sikker p&aring; at du vil slette modulet %s (%s)?';

$lang['MembersSearchMember'] = 'S&oslash;g Bruger';
$lang['MembersSearchMemberInfo'] = 'Indtast et (en del af et) brugernavn eller d&aelig;knavn for redigering.';
$lang['MembersSearchMemberExplain'] = 'Brugernavn eller d&aelig;knavn';
$lang['MembersSearchMemberNotFound'] = 'Ingen Brugere med brugernavn eller d&aelig;knavn %s fundet.';
$lang['MembersSearchMemberList'] = 'F&oslash;lgende Brugere blev fundet';
$lang['MembersEditingMember'] = 'Rediger Bruger %s';
$lang['MembersEditingMemberInfo'] = 'Opdater brugerens info og send formularen. Felter markeret med stjerne(*) er kr&aelig;vede felter.';
$lang['MembersEditingMemberUsernameExists'] = 'Brugernavnet %s eksisterer allerede som et brugernavn eller d&aelig;knavn.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'D&aelig;knavnet %s eksisterer allerede som et brugernavn eller d&aelig;knavn.';
$lang['MembersEditingMemberBanned'] = 'Udelukket';
$lang['MembersEditingMemberBannedReason'] = 'Begrundelse for udelukkelse';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Du kan ikke &aelig;ndre dit eget niveau.';
$lang['MembersEditingMemberCantBanSelf'] = 'Du kan ikke udelukke dig selv.';
$lang['MembersEditingComplete'] = 'Profilen for Brugeren %s blev &aelig;ndret vellykket.';
$lang['MembersEditingLevelModInfo'] = 'For at g&oslash;re nogen til moderator, rediger et forum og tilf&oslash;j medlemmets brugernavn i moderator indtastningsfeltet.';

$lang['DeleteMembersSearchMember'] = 'S&oslash;g Bruger';
$lang['DeleteMembersSearchMemberInfo'] = 'Indtast et (en del af et) brugernavn eller d&aelig;knavn for sletning.';
$lang['DeleteMembersSearchMemberExplain'] = 'Brugernavn eller d&aelig;knavn';
$lang['DeleteMembersSearchMemberNotFound'] = 'Ingen Brugere med brugernavn eller d&aelig;knavn %s fundet.';
$lang['DeleteMembersSearchMemberList'] = 'F&oslash;lgende Brugere blev fundet';
$lang['DeleteMembersConfirmMemberDelete'] = 'Bekr&aelig;ft sletning af Bruger';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Er du sikker p&aring; du vil slette Brugeren %s? Dette kan ikke fortrydes!';
$lang['DeleteMembersComplete'] = 'Sletning af Bruger %s afluttet.';

$lang['RegisterMembersExplain'] = 'Her kan du forud registrere bruger konti. Bare udfyld f&oslash;lgende informationer for at oprette en konto.';
$lang['RegisterMembersComplete'] = 'Registreringen af bruger %s er afsluttet. Brugeren kan nu logge sig p&aring;.';

$lang['ActivateMembersExplain'] = 'Dette er en liste over ikke aktiverede Brugere i dit forum. Her kan du godkende kontiene manuelt. En stjerne (*) betyder at bruger kontoen har v&aelig;ret aktiv f&oslash;r.';
$lang['ActivateMembersNoMembers'] = 'Ingen Brugere p&aring; listen.';
$lang['ActivateMembersListAdmin'] = 'Admin godkendelse';
$lang['ActivateMembersListEmail'] = 'Email godkendelse';
$lang['ActivateMembersListAll'] = 'Alle';

$lang['PruneForumsStart'] = 'Start Oprydning';
$lang['PruneForumsExplain'] = 'Ved at ryde op i fora, kan du slette eller flytte gamle emner og holde dine fora rene.';
$lang['PruneForumsForums'] = 'Fora der skal rydes op i';
$lang['PruneForumsAction'] = 'Handling';
$lang['PruneForumsActionLock'] = 'L&aring;s';
$lang['PruneForumsActionMove'] = 'Flyt';
$lang['PruneForumsActionDelete'] = 'Slet';
$lang['PruneForumsMoveTo'] = 'Flyt emne til';
$lang['PruneForumsTopicAge'] = 'Emne alder';
$lang['PruneForumsTopicAgeField'] = 'Sidst svaret p&aring; for %s dage side.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '&quot;Flyt til&quot; forummet kan ikke v&aelig;lges til oprydning.';
$lang['PruneForumsConfirm'] = 'Bekr&aelig;ft';
$lang['PruneForumsConfirmText'] = 'Jeg er med p&aring; at denne handling ikke kan fortrydes.';
$lang['PruneForumsNotConfirmed'] = 'Du skal bekr&aelig;fte denne handling f&oslash;rst.';
$lang['PruneForumsDone'] = 'Oprydningen er f&aelig;rdig. %d emner er blevet renset.';
$lang['PruneForumsExcludeStickies'] = 'Udeluk faste emner';

$lang['PruneMembersExplain'] = 'Ved oprydning i Brugere kan du ryde op i forummets bruger base ved at fjerne ikke aktiverede eller inaktive brugerekonti.';
$lang['PruneMembersTypeNeverActivated'] = 'Brugere der aldrig er blevet aktiveret';
$lang['PruneMembersRegisteredDaysAgo'] = 'Registrede for mindst %s dage siden.';
$lang['PruneMembersTypeNeverPosted'] = 'Brugere der aldrig har lavet et indl&aelig;g eller svar';
$lang['PruneMembersTypeInactive'] = 'Inaktive Brugere';
$lang['PruneMembersLastLoggedIn'] = 'Sidste log ind for mindst %s dage siden.';
$lang['PruneMembersExclude'] = 'Udeluk';
$lang['PruneMembersConfirmText'] = 'Jeg er med p&aring; at denne handling ikke kan fortrydes.';
$lang['PruneMembersStart'] = 'Start Oprydning';
$lang['PruneMembersNotConfirmed'] = 'Du skal bekr&aelig;fte denne handling f&oslash;rst.';
$lang['PruneMembersDone'] = 'Oprydningen er f&aelig;rdig. %d Brugere er blevet renset.';

$lang['DNSBLIPBansDisabled'] = 'IP addresse udelukkelse er sl&aring;et fra';
$lang['DNSBLIPBansDisabledInfo'] = 'For  at DNSBL styret udelukkelse skal virke, skal IP addresse udelukkelse v&aelig;re sl&aring;et til.';
$lang['DNSBLGeneralInfo'] = 'Open proxies are often used to post spam or abusive messages. Using UseBB\'s protection system, most of these proxies can be detected and banned automatically. Herefore blacklists are queried for information about the visitor\'s IP address.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Sl&aring; DNSBL styret udelukkelse til';
$lang['DNSBLServers'] = 'DNS BlackList (DNSBL) servere';
$lang['DNSBLServersInfo'] = 'En DNSBL server pr linie. Bem&aelig;rk brugen af disse blacklister sammen kan sl&oslash;ve systemt ved oprettelse af en ny  session i dit forum.';
$lang['DNSBLMinPositiveHits'] = 'Mindst %s positive tr&aelig;ffere er kr&aelig;vet for at udelukke en IP addresse.';
$lang['DNSBLRecheckMinutes'] = 'Kontroller tilladte IP addresser hvert %s minut (0 for at sl&aring; fra).';
$lang['DNSBLSettingsSaved'] = 'DNSBL udelukkelses ops&aelig;tning er gemt.';
$lang['DNSBLWhitelist'] = 'Whitelist';
$lang['DNSBLWhitelistInfo'] = 'En IP addresse eller v&aelig;rtsnavn pr linie (* og ? kan bruges som wildcard).';

$lang['BadwordsInfo'] = 'Forbudte ord kan filtreres eller erstattes, til dette kan man bruge stjerne (*) i filtreringen.';
$lang['BadwordsDisabled'] = 'Filtret for Forbudte ord er fravalgt';
$lang['BadwordsDisabledInfo'] = 'Filtret for Forbudte ord er blevet fravalgt i sidekonfigurationen.';
$lang['BadwordsNoBadwordsExist'] = 'Der findes ingen filtre i dette forum.';
$lang['BadwordsAddBadwordWord'] = 'Ord';
$lang['BadwordsAddBadwordReplacement'] = 'Erstatning';

$lang['MassEmailInfo'] = 'Send en masse e-mail meddelelse til alle dine Brugere eller et gruppe niveau.';
$lang['MassEmailRecipients'] = 'modtagere';
$lang['MassEmailRecipients-admins'] = 'Administratorer';
$lang['MassEmailRecipients-mods'] = 'Modoratorer';
$lang['MassEmailRecipients-members'] = 'Alm. Brugere';
$lang['MassEmailSubject'] = 'Emne';
$lang['MassEmailBody'] = 'Indhold';
$lang['MassEmailTemplate'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Administratoren har sendt denne masse e-mail meddelelse via vores side. Meddelelsen indeholder f&oslash;lgende.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'Masse e-mail meddelelsen er blevet send til %d Brugere ved brug af %d meddelelse(r).';
$lang['MassEmailOptions'] = 'Optioner';
$lang['MassEmailPublicEmailsOnly'] = 'Send kun til offentlige e-mail addresser';
$lang['MassEmailExcludeBanned'] = 'Frav&aelig;lg udelukkede Brugere';

$lang['BansInfo'] = 'Her kan du kontrollerer n&aelig;sten alle forbudsaspekcter i dit forum. Delvis matching (brug *) er mulig. Individuel konti kan udelukkes via Bruger redigeringspanel.';
$lang['Bans-username'] = 'Brugernavne';
$lang['Bans-email'] = 'E-mail addresser';
$lang['Bans-ip_addr'] = 'IP addresser';
$lang['BansUsername'] = 'Brugernavn';
$lang['BansEmail'] = 'E-mail addresse';
$lang['BansIp_addr'] = 'IP addresse';
$lang['BansNoBansExist'] = 'Ingen forbud af denne type eksisterer i dette forum.';
$lang['BansIPBansDisabledInfo'] = 'Udelukkelsen af IP addresse er blevet sl&aring;et fra i side konfigurationen.';

?>
