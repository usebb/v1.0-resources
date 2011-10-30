<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.53 2006/02/08 16:59:34 pc_freak Exp $
	
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
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = 'Pøihlá¹ení do administrativy';
$lang['AdminPasswordExplain'] = 'Z bezpeènostních dùvodù musíte pro pøihlá¹ení do administrativy zadat va¹e heslo.';

$lang['RunningBadACPModule'] = 'UseBB nemù¾e tento modul vyu¾ívat, proto¾e jedna nebo více jeho èástí není dostupných (nebyl nalezen ¾ádný objekt $usebb_module a/nebo chybí metoda run_module()).';

$lang['Category-main'] = 'Obecné';
$lang['Item-index'] = 'Admin - úvod';
$lang['Item-version'] = 'Ovìøení verze';
$lang['Item-config'] = 'Obecná nastavení';
$lang['Category-forums'] = 'Fóra';
$lang['Item-categories'] = 'Správa kategorií';
$lang['Item-forums'] = 'Správa fór';
$lang['Category-various'] = 'Rùzné';
$lang['Item-iplookup'] = 'Vyhledání IP adresy';
$lang['Item-sqltoolbox'] = 'Nástroje pro SQL';
$lang['Item-modules'] = 'Moduly do administrativy';
$lang['Category-members'] = 'Registrovaní u¾ivatelé';
$lang['Item-members'] = 'Úprava u¾ivatele';
$lang['Item-delete_members'] = 'Smazání u¾ivatele';
$lang['Item-register_members'] = 'Registrace u¾ivatele';
$lang['Item-activate_members'] = 'Aktivace u¾ivatelù';
$lang['Item-prune_forums'] = 'Proèi¹tìní fóra';

$lang['IndexWelcome'] = 'Vítejte v administrativì UseBB fóra. Mù¾ete zde upravovat nastavení celého fóra, spravovat jednotlivá fóra, kategorie, u¾ivatele, atd.';
$lang['IndexSystemInfo'] = 'Informace o systému';
$lang['IndexUseBBVersion'] = 'Verze UseBB';
$lang['IndexPHPVersion'] = 'Verze PHP';
$lang['IndexSQLServer'] = 'SQL serverový ovladaè';
$lang['IndexHTTPServer'] = 'HTTP server';
$lang['IndexOS'] = 'Operaèní systém';
$lang['IndexLinks'] = 'Odkazy';
$lang['IndexUnactiveMembers'] = 'Neaktivovaní u¾ivatelé';
$lang['IndexNoUnactiveMembers'] = '®ádný u¾ivatel neèeká na aktivaci úètu.';
$lang['IndexOneUnactiveMember'] = 'Jeden u¾ivatel èeká na aktivaci úètu';
$lang['IndexMoreUnactiveMembers'] = 'Nìkolik (%d) u¾ivatelù èeká na aktivaci úètu.';

$lang['VersionFailed'] = 'Nelze zjistit, zda existuje novìj¹í verze systému (%s zakázáno). Sledujte proto pravidelnì adresu %s, kde nové verze naleznete.';
$lang['VersionLatestVersionTitle'] = 'Toto je poslední verze systému UseBB';
$lang['VersionLatestVersion'] = 'Toto fórum je pohánìno systémem UseBB %s, co¾ je nejnovìj¹í stabilní verze.';
$lang['VersionNeedUpdateTitle'] = 'K dispozici je nová verze!';
$lang['VersionNeedUpdate'] = 'Toto fórum pohání systém verze %s a mìl by být aktualizován na verzi %s. Aktualizace opravují bezpeènostní problémy a chyby stávající verze. Novou verzi UseBB fóra naleznete na adrese %s.';
$lang['VersionBewareDevVersionsTitle'] = 'Byla nalezena vývojová verze';
$lang['VersionBewareDevVersions'] = 'Toto fórum pohání systém %s, nicménì poslední stabilní verzí je %s. Dejte si proto pozor na problémy a nekompatibility, které se mohou ve vývojové verzi vyskytnout.';

$lang['ConfigInfo'] = 'Na této stránce mù¾ete upravovat v¹echna nastavení fóra. Buïte opatrní zejména pøi úpravì konfigurace databáze. Políèka oznaèená hvìzdièkou (*) jsou povinná.';
$lang['ConfigSet'] = 'Nastavení fóra bylo zmìnìno. Zmìny se projeví a¾ pøi dal¹ím naètení stránky.';
$lang['ConfigMissingFields'] = 'Nìkterá políèka chybí nebo jsou chybnì vyplnìna (napø. text místo èísla). Opravte, prosíme, následující políèka:';
$lang['ConfigBoard-type'] = 'Typ';
$lang['ConfigBoard-server'] = 'Server';
$lang['ConfigBoard-username'] = 'U¾ivatelské jméno';
$lang['ConfigBoard-passwd'] = 'Heslo';
$lang['ConfigBoard-dbname'] = 'Jméno databáze';
$lang['ConfigBoard-prefix'] = 'Prefix tabulek';
$lang['ConfigBoardSection-general'] = 'Fórum obecnì';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Poèty';
$lang['ConfigBoardSection-date_time'] = 'Datum a èas';
$lang['ConfigBoardSection-database'] = 'Nastavení databáze';
$lang['ConfigBoardSection-advanced'] = 'Pokroèilé nastavení';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Dal¹í vlastnosti';
$lang['ConfigBoardSection-user_rights'] = 'U¾ivatelská práva';
$lang['ConfigBoardSection-layout'] = 'Nastavení vzhledu';
$lang['ConfigBoard-admin_email'] = 'E-mailová adresa administrátora';
$lang['ConfigBoard-board_descr'] = 'Popis fóra';
$lang['ConfigBoard-board_keywords'] = 'Klíèová slova fóra (oddìlená èárkou)';
$lang['ConfigBoard-board_name'] = 'Název fóra';
$lang['ConfigBoard-date_format'] = 'Formát data';
$lang['ConfigBoard-language'] = 'Výchozí jazyk';
$lang['ConfigBoard-session_name'] = 'Název session';
$lang['ConfigBoard-template'] = 'Výchozí ¹ablona';
$lang['ConfigBoard-active_topics_count'] = 'Poèet témat v sekci "Kde to ¾ije"';
$lang['ConfigBoard-avatars_force_width'] = 'Vynutit ¹íøku ikonky (pixely)';
$lang['ConfigBoard-avatars_force_height'] = 'Vynutit vý¹ku ikonky (pixely)';
$lang['ConfigBoard-debug'] = 'Debug mód';
$lang['ConfigBoard-email_view_level'] = 'Zobrazení e-mailových adres';
$lang['ConfigBoard-flood_interval'] = 'Minimální rozestup mezi dvìma pøíspìvky jednoho u¾ivatele v sekundách';
$lang['ConfigBoard-members_per_page'] = 'U¾ivatelù na stránce';
$lang['ConfigBoard-online_min_updated'] = 'Pøítomných u¾ivatelù bìhem posledních x minut';
$lang['ConfigBoard-output_compression'] = 'Komprimace výstupu';
$lang['ConfigBoard-passwd_min_length'] = 'Minimální délka hesla';
$lang['ConfigBoard-posts_per_page'] = 'Pøíspìvkù na stránce';
$lang['ConfigBoard-rss_items_count'] = 'Poèet polo¾ek v RSS kanálu';
$lang['ConfigBoard-search_limit_results'] = 'Omezit poèet výsledkù vyhledávání na x polo¾ek';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Minimální délka klíèového slova pøi vyhledávání';
$lang['ConfigBoard-session_max_lifetime'] = 'Maximální doba platnosti session (v sekundách)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Zobrazit zprávu o úpravì pøíspìvku pouze pokud je upraven minimálnì x sekund od vlo¾ení pøíspìvku';
$lang['ConfigBoard-topicreview_posts'] = 'Poèet pøíspìvkù v pøehledu tématu';
$lang['ConfigBoard-topics_per_page'] = 'Témat na stránce';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Minimální postavení pro zobrazení podrobného seznamu pøítomných u¾ivatelù';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Minimální postavení pro zobrazení struèné statistiky';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Minimální postavení pro zobrazení skrytých e-mailových adres';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Minimální postavení pro zobrazení seznamu u¾ivatelù';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Minimální postavení pro zobrazení seznamu správcù';
$lang['ConfigBoard-view_stats_min_level'] = 'Minimální postavení pro zobrazení statistik';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Minimální postavení pro zobrazení odkazu "kontakt na administrátora"';
$lang['ConfigBoard-allow_multi_sess'] = 'Povolit více sessions na IP';
$lang['ConfigBoard-board_closed'] = 'Uzavøít fórum';
$lang['ConfigBoard-cookie_secure'] = 'Bezpeèné cookies (for HTTPS)';
$lang['ConfigBoard-dst'] = 'Letní èas';
$lang['ConfigBoard-enable_contactadmin'] = 'Povolit zobrazení odkazu "kontakt na administrátora';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Povolit podrobný seznam pøítomných u¾ivatelù';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Povolit pole se struènou statistikou fóra';
$lang['ConfigBoard-enable_memberlist'] = 'Povolit seznam u¾ivatelù';
$lang['ConfigBoard-enable_quickreply'] = 'Povolit pole pro rychlou odpovìï';
$lang['ConfigBoard-enable_rss'] = 'Povolit RSS kanál';
$lang['ConfigBoard-enable_stafflist'] = 'Povolit seznam správcù';
$lang['ConfigBoard-enable_stats'] = 'Povolit statistiky';
$lang['ConfigBoard-friendly_urls'] = 'Povolit pìkné adresy';
$lang['ConfigBoard-friendly_urls-info'] = 'Vy¾aduje Apache s modulem mod_rewrite. Zaká¾e zobrazení ID relace (session_id) v adrese stránky.';
$lang['ConfigBoard-guests_can_access_board'] = 'Neregistrovaní mají na fórum pøístup';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Neregistrovaní si mohou prohlí¾et u¾ivatelské profily';
$lang['ConfigBoard-hide_avatars'] = 'Skrýt v¹echny ikonky';
$lang['ConfigBoard-hide_signatures'] = 'Skrýt v¹echny podpisy';
$lang['ConfigBoard-hide_userinfo'] = 'Skrýt informace o u¾ivateli';
$lang['ConfigBoard-rel_nofollow'] = 'Povolit nofollow Googlu pro odkazy v BBCode';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Zpìt na téma po odeslání pøíspìvku';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Povolit BBCode v podpisech';
$lang['ConfigBoard-sig_allow_smilies'] = 'Povolit smajlíky v podpisech';
$lang['ConfigBoard-sig_max_length'] = 'Maximální délka podpisu';
$lang['ConfigBoard-single_forum_mode'] = 'Zapnout mód samostatné fórum (je-li to mo¾né)';
$lang['ConfigBoard-target_blank'] = 'Odkazy z BBCode se otevøou do nového okna';
$lang['ConfigBoard-activation_mode'] = 'Zpùsob aktivace';
$lang['ConfigBoard-activation_mode0'] = 'Bez aktivace';
$lang['ConfigBoard-activation_mode1'] = 'Aktivace e-mailem';
$lang['ConfigBoard-activation_mode2'] = 'Aktivace administrátorem';
$lang['ConfigBoard-board_closed_reason'] = 'Dùvod uzavøení fóra';
$lang['ConfigBoard-board_url'] = 'Adresa fóra (pro automatické zji¹tìní ponechte prázdné)';
$lang['ConfigBoard-cookie_domain'] = 'Doména cookie';
$lang['ConfigBoard-cookie_path'] = 'Cookie path';
$lang['ConfigBoard-session_save_path'] = 'Session save path';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Nezobrazovat pøíspìvky z fór v sekci "Kde to ¾ije"';
$lang['ConfigBoard-exclude_forums_rss'] = 'Nezobrazovat pøíspìvky z fór v RSS kanálu';
$lang['ConfigBoard-exclude_forums_stats'] = 'Nepoèítat statistiky z fór';
$lang['ConfigBoard-timezone'] = 'Èasové pásmo';
$lang['ConfigBoard-debug0'] = 'Zakázáno';
$lang['ConfigBoard-debug1'] = 'Jednoduché ladící informace';
$lang['ConfigBoard-debug2'] = 'Roz¹íøené ladící informace';
$lang['ConfigBoard-email_view_level0'] = 'Skrýt v¹echny e-mailové adresy';
$lang['ConfigBoard-email_view_level1'] = 'Formuláø pro odeslání zprávy';
$lang['ConfigBoard-email_view_level2'] = 'Zobrazit e-mail jako obtí¾nì èitelný pro spamové roboty';
$lang['ConfigBoard-email_view_level3'] = 'Zobrazit e-mail bez omezení';
$lang['ConfigBoard-output_compression0'] = 'Zakázáno';
$lang['ConfigBoard-output_compression1'] = 'Komprimovat HTML';
$lang['ConfigBoard-output_compression2'] = 'Povolit Gzip';
$lang['ConfigBoard-output_compression3'] = 'Komprimovat HTML + Gzip';
$lang['ConfigBoard-level0'] = 'Neregistrovaní u¾ivatelé';
$lang['ConfigBoard-level1'] = 'Registrovaní u¾ivatelé';
$lang['ConfigBoard-level2'] = 'Moderátoøi';
$lang['ConfigBoard-level3'] = 'Administrátoøi';
$lang['ConfigBoard-enable_acp_modules'] = 'Povolit moduly administrativy';
$lang['ConfigBoard-disable_registrations'] = 'Zakázat registrace';
$lang['ConfigBoard-disable_registrations_reason'] = 'Dùvod zákazu registrací';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Povolit duplicitní e-mailové adresy';

$lang['CategoriesInfo'] = 'V této sekci mù¾ete spravovat kategorie, do kterých lze zaøazovat jednotlivá fóra.';
$lang['CategoriesAddNewCat'] = 'Pøidat novou kategorii';
$lang['CategoriesAdjustSortIDs'] = 'Srovnat priority øazení';
$lang['CategoriesSortAutomatically'] = 'Øadit kategorie automaticky';
$lang['CategoriesNoCatsExist'] = 'Fórum je¹tì neobsahuje ¾ádné kategorie.';
$lang['CategoriesCatName'] = 'Název kategorie';
$lang['CategoriesSortID'] = 'Priorita';
$lang['CategoriesMissingFields'] = 'Nìkterá povinná políèka nebyla vyplnìna.';
$lang['CategoriesSortChangesApplied'] = 'Zmìny v prioritì øazení byly provedeny.';
$lang['CategoriesConfirmCatDelete'] = 'Potvrzení smazání kategorie';
$lang['CategoriesConfirmCatDeleteContent'] = 'Opravdu chcete nenávratnì smazat kategorii %s?';
$lang['CategoriesMoveContents'] = 'Pøesunout obsah kategorie do %s';
$lang['CategoriesDeleteContents'] = 'Smazat obsah';
$lang['CategoriesEditingCat'] = 'Úprava kategorie %s';

$lang['ForumsInfo'] = 'V této sekci mù¾ete spravovat jednotlivá fóra.';
$lang['ForumsAddNewForum'] = 'Pøidat nové fórum';
$lang['ForumsAdjustSortIDs'] = 'Srovnat priority øazení';
$lang['ForumsSortAutomatically'] = 'Øadit fóra automaticky';
$lang['ForumsNoForumsExist'] = 'Zatím neexistuje ¾ádné fórum.';
$lang['ForumsForumName'] = 'Název fóra';
$lang['ForumsCatName'] = 'Kategorie';
$lang['ForumsDescription'] = 'Popis';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = 'Otevøeno';
$lang['ForumsAutoLock'] = 'Automaticky uzamknout téma po x pøíspìvcích';
$lang['ForumsIncreasePostCount'] = 'Poèítat u¾ivatelùm poèet pøíspìvkù';
$lang['ForumsModerators'] = 'Moderátoøi';
$lang['ForumsModeratorsExplain'] = 'U¾ivatelská jména (ne zobrazovaná), oddìlená èárkami. Na velikosti písmen nezále¾í.';
$lang['ForumsModeratorsUnknown'] = 'Neznámí u¾ivatel(é): %s.';
$lang['ForumsHideModsList'] = 'Skrýt seznam moderátorù';
$lang['ForumsSortID'] = 'Priorita';
$lang['ForumsMissingFields'] = 'Nìkterá povinná políèka nebyla vyplnìna.';
$lang['ForumsSortChangesApplied'] = 'Zmìny v prioritì øazení byly provedeny.';
$lang['ForumsConfirmForumDelete'] = 'Potvrzení smazání fóra';
$lang['ForumsConfirmForumDeleteContent'] = 'Opravdu chcete nenávratnì smazat fórum %s?';
$lang['ForumsMoveContents'] = 'Pøesunout obsah fóra do %s';
$lang['ForumsMoveModerators'] = 'Pøi pøesunu obsahu pøesunout také moderátory.';
$lang['ForumsDeleteContents'] = 'Smazat obsah';
$lang['ForumsEditingForum'] = 'Úprava fóra %s';
$lang['ForumsGeneral'] = 'Obecné nastavení';
$lang['ForumsAuth'] = 'Nastavení autorizace';
$lang['ForumsAuthNote'] = 'Nastavení autorizace jednotlivých fór se navzájem nedìdí!';
$lang['Forums-level0'] = 'Neregistrovaní u¾ivatelé';
$lang['Forums-level1'] = 'Registrovaní u¾ivatelé';
$lang['Forums-level2'] = 'Moderátoøi';
$lang['Forums-level3'] = 'Administrátoøi';
$lang['Forums-auth0'] = 'Zobrazit fórum';
$lang['Forums-auth1'] = 'Èíst témata';
$lang['Forums-auth2'] = 'Zakládat nová témata';
$lang['Forums-auth3'] = 'Pøispívat do témat';
$lang['Forums-auth4'] = 'Upravovat pøíspìvky ostatních u¾ivatelù';
$lang['Forums-auth5'] = 'Pøesouvat témata';
$lang['Forums-auth6'] = 'Mazat témata a pøíspìvky';
$lang['Forums-auth7'] = 'Zamykat témata';
$lang['Forums-auth8'] = 'Oznaèovat témata za dùle¾itá';
$lang['Forums-auth9'] = 'Psát pøíspìvky v HTML (nebezpeèné)';

$lang['IPLookupSearchHostname'] = 'Vyhledat název poèítaèe';
$lang['IPLookupSearchUsernames'] = 'Vyhledat u¾ivatele';
$lang['IPLookupResult'] = 'Název poèítaèe odpovídající IP adrese %s je %s.';
$lang['IPLookupNotFound'] = 'K IP adrese %s nebyl nalezen ¾ádný odpovídající název poèítaèe.';
$lang['IPLookupUsernamesSingular'] = 'U¾ivatel %s posílal zprávy z adresy %s.';
$lang['IPLookupUsernamesPlural'] = '%d u¾ivatelù (%s) psalo zprávy z adresy %s.';
$lang['IPLookupUsernamesNotFound'] = 'Nebyli nalezeni ¾ádní u¾ivatelé s adresou %s.';

$lang['SQLToolboxWarningTitle'] = 'Dùle¾ité upozornìní!';
$lang['SQLToolboxWarningContent'] = 'Buïte velmi opatrní pøi pou¾ívání dotazovacího nástroje. Vykonáváním dotazù jako ALTER, DELETE, TRUNCATE nebo dal¹ími mù¾ete fórum nenávratnì po¹kodit! Pou¾ívejte tento nástroj pouze pokud opravdu víte, co dìláte.';
$lang['SQLToolboxExecuteQuery'] = 'Provést dotaz';
$lang['SQLToolboxExecuteQueryInfo'] = 'Zapi¹te SQL dotaz. Pøípadné výsledky se uká¾í v novém textovém poli.';
$lang['SQLToolboxExecute'] = 'Provést';
$lang['SQLToolboxExecutedSuccessfully'] = 'Dotaz byl úspì¹nì proveden.';
$lang['SQLToolboxMaintenance'] = 'Údr¾ba';
$lang['SQLToolboxMaintenanceInfo'] = 'Tyto funkce optimalizují (a opravují) databázové tabulky. Pro velká fóra je doporuèeno provádìt optimalizaci èastìji.';
$lang['SQLToolboxRepairTables'] = 'Opravit tabulky';
$lang['SQLToolboxOptimizeTables'] = 'Optimalizovat tabulky';
$lang['SQLToolboxMaintenanceNote'] = 'Poznámka: tyto funkce neobnoví ¾ádná ztracená data.';

$lang['ModulesInfo'] = 'Moduly umo¾òují roz¹íøit administrativu o rùzné dal¹í vlastnosti. Tyto moduly si mù¾ete sami napsat nebo si ji¾ existující vyhledat pomocí webové stránky UseBB: %s.';
$lang['ModulesLongName'] = 'Dlouhý název';
$lang['ModulesShortName'] = 'Krátký název';
$lang['ModulesCategory'] = 'kategorie';
$lang['ModulesFilename'] = 'jméno souboru';
$lang['ModulesDeleteNotPermitted'] = 'Nepovoleno';
$lang['ModulesDisabled'] = 'Moduly administrativy jsou zakázány.';
$lang['ModulesNoneAvailable'] = '®ádné moduly nejsou k dispozici.';
$lang['ModulesUpload'] = 'Nahrát modul';
$lang['ModulesUploadInfo'] = 'Zadejte cestu k modulu, který chcete nahrát.';
$lang['ModulesUploadDuplicateModule'] = 'Modul se jménem souboru %s ji¾ existuje. Chcete-li jej pøesto nahrát, pùvodní modul odstraòte.';
$lang['ModulesUploadNoValidModule'] = 'Soubor %s není øádným UseBB modulem.';
$lang['ModulesUploadFailed'] = 'Modul %s není mo¾né nainstalovat, proto¾e nastala chyba pøi kopírování.';
$lang['ModulesUploadDisabled'] = 'Do adresáøe s moduly není mo¾né zapisovat. Není tak mo¾né nahrát ¾ádný modul. Chcete-li nahrávání povolit, nastavte adresáøi %s na serveru pøíslu¹ná pøístupová práva (musí být mo¾né zapisovat).';
$lang['ModulesConfirmModuleDelete'] = 'Potvrzení smazání modulu';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Opravdu chcete smazat modul %s (%s)?';

$lang['MembersSearchMember'] = 'Vyhledat u¾ivatele';
$lang['MembersSearchMemberInfo'] = 'Zadejte èást nebo celé u¾ivatelské jméno (resp. zobrazované jméno).';
$lang['MembersSearchMemberExplain'] = 'U¾ivatelské nebo zobrazované jméno';
$lang['MembersSearchMemberNotFound'] = '®ádný u¾ivatel s u¾ivatelským nebo zobrazovaným jménem %s nebyl nalezen.';
$lang['MembersSearchMemberList'] = 'Byli nalezeni následující u¾ivatelé';
$lang['MembersEditingMember'] = 'Úprava u¾ivatele %s';
$lang['MembersEditingMemberInfo'] = 'Upravte informace o u¾ivateli a následnì formuláø ode¹lete. Políèka oznaèená hvìzdièkou (*) jsou povinná.';
$lang['MembersEditingMemberUsernameExists'] = 'Jméno %s ji¾ pou¾ívá nìkdo jiný.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Jméno %s ji¾ pou¾ívá nìkdo jiný.';
$lang['MembersEditingMemberBanned'] = 'Zablokován';
$lang['MembersEditingMemberBannedReason'] = 'Dùvod zablokování';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Nemù¾ete zmìnit své vlastní postavení.';
$lang['MembersEditingMemberCantBanSelf'] = 'Nemù¾ete zablokovat svùj vlastní úèet.';
$lang['MembersEditingComplete'] = 'Profil u¾ivatele %s byl úspì¹nì upraven.';

$lang['DeleteMembersSearchMember'] = 'Vyhledat u¾ivatele';
$lang['DeleteMembersSearchMemberInfo'] = 'Zadejte èást nebo celé u¾ivatelské jméno (resp. zobrazované jméno).';
$lang['DeleteMembersSearchMemberExplain'] = 'U¾ivatelské nebo zobrazované jméno';
$lang['DeleteMembersSearchMemberNotFound'] = '®ádný u¾ivatel s u¾ivatelským nebo zobrazovaným jménem %s nebyl nalezen.';
$lang['DeleteMembersSearchMemberList'] = 'Byli nalezeni následující u¾ivatelé';
$lang['DeleteMembersConfirmMemberDelete'] = 'Potvrzení smazání u¾ivatele';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Opravdu chcete nenávratnì smazat u¾ivatele %s?';
$lang['DeleteMembersComplete'] = 'U¾ivatel %s byl smazán.';

$lang['RegisterMembersExplain'] = 'Zde mù¾ete pøedregistrovat u¾ivatelské úèty. Staèí jen vyplnit informace pro vytvoøení úètu.';
$lang['RegisterMembersComplete'] = 'U¾ivatelský úèet %s byl zaregistrován. U¾ivatel se mù¾e ihned pøihlásit.';

$lang['ActivateMembersExplain'] = 'Toto je seznam u¾ivatelù, kteøí èekají na aktivaci úètu. Zde je mù¾ete schválit. Hvìzdièka (*) znamená, ¾e byl ji¾ døíve úèet aktivován.';
$lang['ActivateMembersNoMembers'] = 'Seznam je prázdný.';
$lang['ActivateMembersListAdmin'] = 'Aktivace administrátorem';
$lang['ActivateMembersListEmail'] = 'Aktivace e-mailem';
$lang['ActivateMembersListAll'] = 'V¹echny';

$lang['PruneForumsStart'] = 'Proèistit';
$lang['PruneForumsExplain'] = 'Proèi¹tìním fóra mù¾ete smazat nebo pøesunout stará témata.';
$lang['PruneForumsForums'] = 'Fórum na proèi¹tìní';
$lang['PruneForumsAction'] = 'Akce';
$lang['PruneForumsActionMove'] = 'Pøesunout témata';
$lang['PruneForumsActionDelete'] = 'Smazat témata';
$lang['PruneForumsMoveTo'] = 'Pøesunout témata do';
$lang['PruneForumsTopicAge'] = 'Stáøí tématu';
$lang['PruneForumsTopicAgeField'] = 'Poslední odpovìï je %s dní stará.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'Nelze pøesunout témata do stejného fóra, ve kterém se ji¾ nachází.';
$lang['PruneForumsConfirm'] = 'Potvrzení';
$lang['PruneForumsConfirmText'] = 'Jsem si vìdom, ¾e tato akce je nenávratná.';
$lang['PruneForumsNotConfirmed'] = 'Nejprve musíte tuto akci potvrdit.';
$lang['PruneForumsDone'] = 'Hotovo. %d témat bylo proèi¹tìno.';
$lang['PruneForumsExcludeStickies'] = 'Vyjma dùle¾itých témat';

?>
