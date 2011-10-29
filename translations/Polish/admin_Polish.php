<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: admin_Polish.php - 10.05.2011 01:16 pc_freak $
	
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
	
	Wykonano przez: dewholer/bryan
        Wykonano dla: UseBB.pl - Polskie oficjalne wsparcie Usable Bulletin Board.
        Usuniêcie tego wpisu jest równoznacze ze z³amaniem warunków u¿ytkowania skryptu.
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$lang['AdminLogin'] = 'Logowanie Administratora';
$lang['AdminPasswordExplain'] = 'By zachowaæ zasady bezpieczeñstwa musisz ponownie podaæ swoje has³o by wej¶æ do ACP.';

$lang['RunningBadACPModule'] = 'Nie mo¿na uruchomiæ tego modu³u, poniewa¿ jeden lub wiêcej aspektów jest brakuj±cy (no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = 'G³ówna kategoria';
$lang['Category-forums'] = 'Fora';
$lang['Category-various'] = 'Ró¿ne';
$lang['Category-members'] = 'U¿ytkownicy';
$lang['Category-pruning'] = 'Pruning';
$lang['Category-security'] = 'Bezpieczeñstwo';
$lang['Item-index'] = 'Strona g³ówna ACP';
$lang['Item-version'] = 'Sprawdzanie wersji';
$lang['Item-config'] = 'Generalna konfiguracja';
$lang['Item-categories'] = 'Zarz±dzaj kategoriami';
$lang['Item-forums'] = 'Zarz±dzaj forami';
$lang['Item-iplookup'] = 'Narzêdzia IP';
$lang['Item-sqltoolbox'] = 'Narzêdzia SQL';
$lang['Item-modules'] = 'Modu³y ACP';
$lang['Item-members'] = 'Edytuj u¿ytkowników';
$lang['Item-delete_members'] = 'Usuñ u¿ytkowników';
$lang['Item-register_members'] = 'Zarejestruj u¿ytkowników';
$lang['Item-activate_members'] = 'Aktywuj u¿ytkowników';
$lang['Item-prune_forums'] = 'Usuñ fora';
$lang['Item-prune_members'] = 'Usuñ u¿ytkowników';
$lang['Item-dnsbl'] = 'Bany DNSBL';
$lang['Item-badwords'] = 'Cenzura';
$lang['Item-mass_email'] = 'Masowe wiadomo¶ci';
$lang['Item-logout'] = 'Wyloguj siê z ACP';

$lang['IndexWelcome'] = 'Witamy w twoim panelu amdinistratora. Tutaj mo¿esz dodawaæ, usuwaæ i edytowaæ fora i u¿ytkowników.';
$lang['IndexSystemInfo'] = 'Informacje o systemie';
$lang['IndexUseBBVersion'] = 'Wersja UseBB';
$lang['IndexPHPVersion'] = 'Wersja PHP';
$lang['IndexSQLServer'] = 'Wersja sterownika SQL';
$lang['IndexHTTPServer'] = 'Serwer HTTP';
$lang['IndexOS'] = 'System operacyjny';
$lang['IndexServerLoad'] = 'Obci±zenie serwera';
$lang['IndexLinks'] = 'Linki';
$lang['IndexUnactiveMembers'] = 'Nieaktywowani u¿ytkownicy';
$lang['IndexNoUnactiveMembers'] = '¯aden u¿ytkownik nie oczekuje na aktywacjê.';
$lang['IndexOneUnactiveMember'] = 'Jeden u¿ytkownik oczekuje na aktywacjê.';
$lang['IndexMoreUnactiveMembers'] = '%d u¿ytkowników oczekuje na aktywacjê.';
$lang['IndexWarning'] = 'Ostrze¿enie!';
$lang['IndexUnwritableConfig'] = 'W tym momencie, %s nie ma odpowiednich praw zapisu. Proszê zmieniæ CHMODy na 777 u¿ywaj±c klijenta FTP.';
$lang['IndexMultibyteUsage'] = 'Zwróæ uwagê, ¿e u¿ywasz t³umaczenia pisemne w wielobajtowego zestawu znaków (% s). Te t³umaczenia i zestawy znaków nie s± oficjalnie wspierane na UseBB 1.';
$lang['IndexDevelopmentEnvironment'] = 'UseBB jest aktualnie ustawiony do pracy w ¶rodowisku deweloperskim. Spowoduje to wy¶wietlenie mo¿liwie wielu zawiadomieñ PHP u¿ytkownikom a nie obejmuje pewnych ¶rodków bezpieczeñstwa. W ¶rodowisku produkcyjnym nie jest to zalecane.';

$lang['VersionFailed'] = 'Skrypt nie mo¿e sprawdziæ wersji UseBB. Odwied¼ %s by wiedzieæ o najnowszych wersjach useBB.';
$lang['VersionLatestVersionTitle'] = 'U¿ywasz aktualnej wersji UseBB';
$lang['VersionLatestVersion'] = 'Forum jest oparte na UseBB %s czyli na ostaniej aktualnej wersji UseBB.';
$lang['VersionNeedUpdateTitle'] = 'Dostêpna jest nowa wersja Usable Bulletin Board!';
$lang['VersionNeedUpdate'] = 'U¿ywasz UseBB %s i musisz zaktualizowaæ skrypt do wersji %s by forum by³o bezpieczne i wolne od b³êdów. Odwied¼ %s by pobraæ oficjaln± paczkê UseBB..';
$lang['VersionBewareDevVersionsTitle'] = 'Wersja deweloperska zosta³a odnaleziona.';
$lang['VersionBewareDevVersions'] = 'Na forum forum jest uruchomiony % s% s jednak nadal forum jest w najnowszej stabilnej wersji, uwa¿aj na komplikacje oraz problemy zawarte w wersjach rozwojowych.';

$lang['ConfigInfo'] = 'Na tej stronie mo¿esz edytowaæ wszysktie ustawienia twojej kopii UseBB. B±d¼ ostro¿ny przy konfigurowaniu bazy danych. Pola zaznaczone (*) s± wymagane.';
$lang['ConfigSet'] = 'Konfiguracja zosta³a zapisana. Zmiany bêd± widoczne przy za³adowaniu nowej strony.';
$lang['ConfigMissingFields'] = 'Niektóre pola nie s± wype³nione:';
$lang['ConfigBoard-type'] = 'Typ';
$lang['ConfigBoard-server'] = 'Serwer';
$lang['ConfigBoard-username'] = 'Nick';
$lang['ConfigBoard-passwd'] = 'Has³o';
$lang['ConfigBoard-dbname'] = 'Nazwa bazy danych';
$lang['ConfigBoard-prefix'] = 'Prefix tabel';
$lang['ConfigBoardSection-general'] = 'G³ówne forum';
$lang['ConfigBoardSection-cookies'] = 'Ciasteczka';
$lang['ConfigBoardSection-cookies-info'] = 'Mo¿esz pozostawiæ puste aby skrypt sam uzupe³ni³ te pola.';
$lang['ConfigBoardSection-sessions'] = 'Sesje';
$lang['ConfigBoardSection-page_counts'] = 'Numeracja strony';
$lang['ConfigBoardSection-date_time'] = 'Daty &amp; Czasów';
$lang['ConfigBoardSection-date_time-info'] = 'Dzia³a tylko dla go¶ci i nowych kont.';
$lang['ConfigBoardSection-database'] = 'Konfiguracja bazy danych';
$lang['ConfigBoardSection-database-info'] = 'Te pola zmieniaj tylko je¿eli jeste¶ pewien, ¿e podawane dane s± poprawne.';
$lang['ConfigBoardSection-advanced'] = 'Zaawansowane ustawienia';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Dodatkowe funkcje';
$lang['ConfigBoardSection-user_rights'] = 'Prawa u¿ytkownika';
$lang['ConfigBoardSection-min_levels'] = 'Minimalne ustawienia dostêpu';
$lang['ConfigBoardSection-min_levels-info'] = 'Tutaj masz mo¿liwo¶æ ustawienia minimalnych praw dostêpu.';
$lang['ConfigBoardSection-layout'] = 'Ustawienia layoutu';
$lang['ConfigBoardSection-security'] = 'Bezpieczeñstwo';
$lang['ConfigBoard-admin_email'] = 'Adres e-mail administratora';
$lang['ConfigBoard-board_descr'] = 'Opis forum';
$lang['ConfigBoard-board_keywords'] = 'S³owa kluczowe';
$lang['ConfigBoard-board_keywords-info'] = 'Oddzielaj przecinkami.';
$lang['ConfigBoard-board_name'] = 'Nazwa forum';
$lang['ConfigBoard-date_format'] = 'Format daty';
$lang['ConfigBoard-date_format-info'] = 'Same syntax as PHP\'s date().';
$lang['ConfigBoard-language'] = 'Domy¶lny jêzyk';
$lang['ConfigBoard-language-info'] = 'Dzia³a tylko dla go¶ci i nowych kont.';
$lang['ConfigBoard-session_name'] = 'Nazwa sesji';
$lang['ConfigBoard-session_name-info'] = 'Tylko znaki alfanumeryczne, bez spacji. Musi zawieraæ conajmniej jedn± literê..';
$lang['ConfigBoard-template'] = 'Domy¶lna skórka';
$lang['ConfigBoard-template-info'] = 'Dzia³a tylko dla go¶ci i nowych kont.';
$lang['ConfigBoard-active_topics_count'] = 'Liczba aktywnych tematów';
$lang['ConfigBoard-avatars_force_height'] = 'Maksymalna wysoko¶æ avatara (w pixelach)';
$lang['ConfigBoard-avatars_force_height-info'] = '0 dla nielimitowanej wysoko¶ci.';
$lang['ConfigBoard-avatars_force_width'] = 'Maksymalna wysoko¶æ avatara (w pixelach)';
$lang['ConfigBoard-avatars_force_width-info'] = '0 dla nielimitowanej wysokosci.';
$lang['ConfigBoard-debug'] = 'Tryb debugowania';
$lang['ConfigBoard-email_view_level'] = 'Poziom ogl±dania e-maila';
$lang['ConfigBoard-flood_interval'] = 'Zabezpieczenie przeciw floodowe (w sekundach)';
$lang['ConfigBoard-members_per_page'] = 'U¿ytkowników na stronê';
$lang['ConfigBoard-online_min_updated'] = 'Aktywnych u¿ytkowników w ostatnim czasie';
$lang['ConfigBoard-output_compression'] = 'Kompresja wychodz±ca';
$lang['ConfigBoard-passwd_min_length'] = 'Minimalna d³ugo¶æ has³a';
$lang['ConfigBoard-posts_per_page'] = 'Postów na stronê';
$lang['ConfigBoard-rss_items_count'] = 'Ilo¶æ przedmiotów w RSS';
$lang['ConfigBoard-search_limit_results'] = 'Ogranicz ilo¶æ wyszukanych do X';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Minimalna d³ugo¶c wyszukiwanego s³owa';
$lang['ConfigBoard-session_max_lifetime'] = 'Maksymalna d³ugo¶æ sesji (w minutach)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Edited message note timeout';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Je¿eli post zosta³ edytowany w czasie X sekund po jego napisaniu informacja o tym zostanie ukryta.';
$lang['ConfigBoard-topicreview_posts'] = 'Topic review post count';
$lang['ConfigBoard-topics_per_page'] = 'Tematów na stronê';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Aktywnych tematów';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Szczegó³owa lista online';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Statystyki';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Minimalny poziom wymagany do ogl±dania ukrytych adresów e-mail';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Lista u¿ytkowników';
$lang['ConfigBoard-view_search_min_level'] = 'Wyszukiwarka';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Ekipa forum';
$lang['ConfigBoard-view_stats_min_level'] = 'Strona statystyk';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Link do kontaktu z administratorem';
$lang['ConfigBoard-allow_multi_sess'] = 'Dopu¶æ mulitesyjno¶c z jednego  numeru IP';
$lang['ConfigBoard-board_closed'] = 'Zamknij forum';
$lang['ConfigBoard-board_closed-info'] = 'Administratorzy wci±¿ bêd± mogli widzieæ forum.';
$lang['ConfigBoard-cookie_secure'] = 'Zabezpieczaj ciasteczka';
$lang['ConfigBoard-cookie_secure-info'] = 'Zabiezpiecz ciasteczka (HTTPS Only)';
$lang['ConfigBoard-cookie_httponly'] = 'W³±cz tylko ciasteczka HTTPS';
$lang['ConfigBoard-cookie_httponly-info'] = 'Dodaj do ciasteczek wpis "HTTPOnly" by zabezpieczyæ je bardziej przed XSS.';
$lang['ConfigBoard-dst'] = 'Daylight saving times';
$lang['ConfigBoard-enable_contactadmin'] = 'W³±cz link kontaktowy administratora';
$lang['ConfigBoard-enable_detailed_online_list'] = 'W³±cz szczegó³ow± listê on-line.';
$lang['ConfigBoard-enable_forum_stats_box'] = 'W³±cz skrzynkê ze statystykami forum';
$lang['ConfigBoard-enable_memberlist'] = 'W³±cz listê u¿ytkowników.';
$lang['ConfigBoard-enable_quickreply'] = 'W³±cz szybk± odpowied¼';
$lang['ConfigBoard-enable_rss'] = 'W³±cz pola RSS';
$lang['ConfigBoard-enable_stafflist'] = 'W³±cz stronê "Ekipa forum"';
$lang['ConfigBoard-enable_stats'] = 'W³±cz stronê ze statystykami';
$lang['ConfigBoard-friendly_urls'] = 'W³±cz przyjazne URL';
$lang['ConfigBoard-friendly_urls-info'] = 'Wymaga Apache i mod_rewrite.';
$lang['ConfigBoard-guests_can_access_board'] = 'Go¶cie mog± widzieæ forum.';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Go¶cie mog± widzieæ informacje kontaktowe zamieszcozne w profilach.';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Go¶cie moga widzieæ profile uzytkowników.';
$lang['ConfigBoard-hide_avatars'] = 'Ukryj wsyzstkie avatary.';
$lang['ConfigBoard-hide_signatures'] = 'Ukryj wszystkie sygnaturki.';
$lang['ConfigBoard-hide_userinfo'] = 'Ukryj informacje o u¿ytkownikach';
$lang['ConfigBoard-rel_nofollow'] = 'W³±cz "nofollow" googla.';
$lang['ConfigBoard-rel_nofollow-info'] = 'Ta opcja sprawi, ¿e google bêdzie omijaæ wszystkie linki BBcode.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Powracaj do tematu po zamieszczeniu posta.';
$lang['ConfigBoard-sig_allow_bbcode'] = 'W³±cz obs³ugê BBcode w sygnaturkach.';
$lang['ConfigBoard-sig_allow_smilies'] = 'W³±cz u¶mieszki w sygnaturkach.';
$lang['ConfigBoard-sig_max_length'] = 'Maksymalna d³ugo¶æ sygnaturki.';
$lang['ConfigBoard-single_forum_mode'] = 'Tryb pojedyñczego forum.';
$lang['ConfigBoard-single_forum_mode-info'] = 'Ustawia jedyne widoczne forum indexem forum.';
$lang['ConfigBoard-target_blank'] = 'Linki BBcode otwieraj± nowe okno przegl±darki.';
$lang['ConfigBoard-activation_mode'] = 'Metoda aktywacji';
$lang['ConfigBoard-activation_mode0'] = 'Brak aktywacji';
$lang['ConfigBoard-activation_mode1'] = 'Aktywacja poprzez e-mail';
$lang['ConfigBoard-activation_mode2'] = 'Aktywacja poprzez administratora';
$lang['ConfigBoard-board_closed_reason'] = 'Powód zamkniêcia forum.';
$lang['ConfigBoard-board_url'] = 'Adres forum';
$lang['ConfigBoard-board_url-info'] = 'Kompletny adres forum. Pozostaw puste aby skrypt wype³ni³ sam.';
$lang['ConfigBoard-cookie_domain'] = 'Domena ciasteczek';
$lang['ConfigBoard-cookie_path'] = 'Katalog ciasteczek';
$lang['ConfigBoard-session_save_path'] = 'Katalog zapisu sesji';
$lang['ConfigBoard-session_save_path-info'] = 'Custom session data save path; only absolute directory names.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Wyklucz forum ze strony aktywnych tematów';
$lang['ConfigBoard-exclude_forums_rss'] = 'Wyklucz fora z RSS';
$lang['ConfigBoard-exclude_forums_stats'] = 'Wyklucz fora ze strony statystyk';
$lang['ConfigBoard-timezone'] = 'Strefa czasowa';
$lang['ConfigBoard-debug0'] = 'Wy³±czone';
$lang['ConfigBoard-debug1'] = 'Proste (parse time and counts)';
$lang['ConfigBoard-debug2'] = 'Extended (simple + SQL queries)';
$lang['ConfigBoard-email_view_level0'] = 'Ukryj wszytkie adresy e-mail';
$lang['ConfigBoard-email_view_level1'] = 'W³±cz formularz e-mailowy';
$lang['ConfigBoard-email_view_level2'] = 'Show spam proof';
$lang['ConfigBoard-email_view_level3'] = 'Show raw';
$lang['ConfigBoard-output_compression0'] = 'Wy³±czone';
$lang['ConfigBoard-output_compression1'] = 'Zmniejszaj HTML';
$lang['ConfigBoard-output_compression2'] = 'W³±cz gzip';
$lang['ConfigBoard-output_compression3'] = 'Zmniejszaj HTMl + gzip';
$lang['ConfigBoard-level0'] = 'Go¶cie';
$lang['ConfigBoard-level1'] = 'U¿ytkownicy';
$lang['ConfigBoard-level2'] = 'Moderatorzy';
$lang['ConfigBoard-level3'] = 'Administratorzy';
$lang['ConfigBoard-enable_acp_modules'] = 'W³±cz modu³y ACP';
$lang['ConfigBoard-disable_registrations'] = 'Wy³±cz rejestracjê';
$lang['ConfigBoard-disable_registrations-info'] = 'U¿ytkownicy wci±¿ bêd± mogli byæ rejestrowani poprzez ACP.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Powód wy³±czenia rejestracji';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Dopu¶æ duplikowanie adresów e-mail';
$lang['ConfigBoard-enable_badwords_filter'] = 'W³±cz cenzurê brzydkich s³ów';
$lang['ConfigBoard-enable_ip_bans'] = 'W³±cz banowanie adresów IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Show raw entities in [code] tags.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Show the raw entity code instead of its HTML representation.';
$lang['ConfigBoard-username_min_length'] = 'Minimalna d³ugo¶æ loginu';
$lang['ConfigBoard-username_max_length'] = 'Maksymalna d³ugo¶æ loginu';
$lang['ConfigBoard-show_never_activated_members'] = 'Pokazuj nigdy nie aktywowanych u¿ytkowników';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Pokazuj tych u¿ytkowników na stronie statystyk oraz li¶cie on-line.';
$lang['ConfigBoard-enable_registration_log'] = 'W³±cz logi rejestracji';
$lang['ConfigBoard-enable_registration_log-info'] = 'Zapisuje logi rejestracji w pliku tekstowym na serwerze.';
$lang['ConfigBoard-registration_log_file'] = 'Plik logów rejestracji';
$lang['ConfigBoard-registration_log_file-info'] = 'Podaj adres, do którego bêd± zapisywane logi rejestracji.';
$lang['ConfigBoard-enable_email_dns_check'] = 'W³±cz sprawdaznie DNSów adresów e-mail';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Validates by looking for MX records. This may not work on all valid domains.';
$lang['ConfigBoard-rules'] = 'Regulamin Forum';
$lang['ConfigBoard-rules-info'] = 'Mo¿esz zawsze zaktualizowaæ Regulamin Strony';
$lang['ConfigBoard-edit_post_timeout'] = 'Czas zamkniêcia mo¿liwo¶ci edycji postu';
$lang['ConfigBoard-edit_post_timeout-info'] = 'U¿ytkownik moze edytowaæ tylko do up³ywu X sekund od czasu napisania postu.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Wy³±cz nag³ówki HTML dla szablonów xHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'An XHTML Content-Type can only be used when the content is 100% well-formed. This is always disabled for non-XHTML browsers.';
$lang['ConfigBoard-email_reply-to_header'] = 'U¿yj nag³ówka odpowiedz-do';
$lang['ConfigBoard-email_reply-to_header-info'] = 'U¿yj "odpowiedz-do" zamiast e-mailu u¿ytkownika (wymagane na niektórych hostach).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Liczba odbiorców masowej wiadomo¶ci';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Masowa wiadomo¶æ bêdzie wysy³ana dopóki wszyscy u¿ytkownicy jej nie otrzymaj±.';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'W³±cz parametr "sendmail -f".';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'to mo¿e popsuæ funkcjonalno¶c meili na niektórych maszynach.';
$lang['ConfigBoard-antispam_question_mode'] = 'Pytania anty-spamowe';
$lang['ConfigBoard-antispam_question_mode-info'] = 'Wyswietla przypadkowe pytanie przed tym jak go¶c uzyska dostêp do rejestracji lub pisania postów.';
$lang['ConfigBoard-antispam_question_mode0'] = 'Wy³±czone';
$lang['ConfigBoard-antispam_question_mode1'] = 'Przypadkowe pytania';
$lang['ConfigBoard-antispam_question_mode2'] = 'Pytania wybrane przez Ciebie';
$lang['ConfigBoard-antispam_question_questions'] = 'Utwórz/Edytuj swoje pytania anty-spamowe';
$lang['ConfigBoard-antispam_question_questions-info'] = 'Questions in the form of &quot;question|answer&quot; (without quotes), separated by newlines. The answer is case-insensitive.';
$lang['ConfigBoard-enable_error_log'] = 'W³±cz dziennik b³êdów';
$lang['ConfigBoard-enable_error_log-info'] = 'Logs errors using PHP\'s logging mechanism. See PHP error_log configuration option.';
$lang['ConfigBoard-error_log_log_hidden'] = 'Logowanie b³êdów ukryte';
$lang['ConfigBoard-error_log_log_hidden-info'] = 'On production environments, some error types are hidden for users. Enabling this will still log them if possible.';
$lang['ConfigBoard-show_posting_links_to_guests'] = 'Poka¿ nowe tematy i nowe posty dla go¶ci.';
$lang['ConfigBoard-show_posting_links_to_guests-info'] = 'Shown if members can post. &ndash; Will redirect to login.';
$lang['ConfigBoard-acp_auto_logout'] = 'Auto logout from ACP after x minutes inactivity';
$lang['ConfigBoard-acp_auto_logout-info'] = 'This is disabled for pages with large forms, such as General Configuration.';
$lang['ConfigBoard-enable_dnsbl_powered_banning'] = 'Enable DNSBL powered banning';
$lang['ConfigBoard-enable_dnsbl_powered_banning-info'] = 'Requires IP address banning to be enabled.';

$lang['CategoriesInfo'] = 'W tej sekcji mo¿esz zarz±dzaæ kategoriami na swoim forum.';
$lang['CategoriesAddNewCat'] = 'Dodaj now± kategoriê';
$lang['CategoriesAdjustSortIDs'] = 'Zmieñ sortowanie ID.';
$lang['CategoriesSortAutomatically'] = 'Automatycznie sortuj kategorie';
$lang['CategoriesNoCatsExist'] = 'To forum nie zawiera jeszcze ¿adnych kategorii.';
$lang['CategoriesCatName'] = 'Nazwa kategorii';
$lang['CategoriesSortID'] = 'ID sortowania';
$lang['CategoriesMissingFields'] = 'Niektóre wymagane pola nie ozsta³y wype³nione. Wróæ i wype³nij je poprawnie.';
$lang['CategoriesSortChangesApplied'] = 'Zmiany wprowadzone w sortowaniu ID zosta³y zapisane.';
$lang['CategoriesConfirmCatDelete'] = 'Potwierd¼ usuniêcie kategori';
$lang['CategoriesConfirmCatDeleteContent'] = 'Czy jeste¶ pewnien, ze chcesz usun±æ kategoriê %s? Ta akcja jest nieodwracalna!';
$lang['CategoriesMoveContents'] = 'Przenie¶ zawarto¶æ kategori do %s';
$lang['CategoriesDeleteContents'] = 'Usuñ zawarto¶æ kategori';
$lang['CategoriesEditingCat'] = 'Edytowanie kategori %s';

$lang['ForumsInfo'] = 'W tej sekcji mo¿esz zarz±dzaæ forami.';
$lang['ForumsAddNewForum'] = 'Dodaj nowe forum';
$lang['ForumsAdjustSortIDs'] = 'Zmieñ sortowanie ID';
$lang['ForumsSortAutomatically'] = 'Sortuj fora automatycznie';
$lang['ForumsNoForumsExist'] = 'To forum dyskusyjne nie zawiera jeszcze ¿adnego forum.';
$lang['ForumsForumName'] = 'Nazwa forum';
$lang['ForumsCatName'] = 'Nadrzêdna kategoria';
$lang['ForumsDescription'] = 'Opis';
$lang['ForumsDescriptionExplain'] = 'W tym polu mozesz u¿ywaæ HTML.';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = 'Otwarte';
$lang['ForumsAutoLock'] = 'Automatycznie zablokuj';
$lang['ForumsAutoLockXReplies'] = 'Zablokluj po %s odpowiedziach.';
$lang['ForumsIncreasePostCount'] = 'Zaliczaj do licznika postów u¿ytkownika';
$lang['ForumsModerators'] = 'Moderatorzy';
$lang['ForumsModeratorsExplain'] = 'Nazwy u¿ytkowników (nie nazwy wyswietlane) oddzielane spacj±';
$lang['ForumsModeratorsUnknown'] = 'Nieznany u¿ytkownik (u¿ytkownicy): %s.';
$lang['ForumsHideModsList'] = 'Ukryj listê moderatorów';
$lang['ForumsSortID'] = 'Sortowanie ID';
$lang['ForumsMissingFields'] = 'Niektóre wymagane pola nie zosta³y poprawnie wype³nione.';
$lang['ForumsSortChangesApplied'] = 'Zmiany wprowadzone w sortowaniu ID zosta³y zapisane.';
$lang['ForumsConfirmForumDelete'] = 'Potwierd¼ usuniêcie forum';
$lang['ForumsConfirmForumDeleteContent'] = 'Czy jeste¶ pewnien, ¿e chcesz usun±æ forum %s? Tej akcji nie da siê cofn±æ!';
$lang['ForumsMoveContents'] = 'Przenie¶ zawarto¶æ forum do %s';
$lang['ForumsMoveModerators'] = 'Przeniesienie zawarto¶ci forum spowoduje równie¿ przeniesienie moderatorów.';
$lang['ForumsDeleteContents'] = 'usuñ zawarto¶æ';
$lang['ForumsEditingForum'] = 'Edytowanie forum %s';
$lang['ForumsGeneral'] = 'G³ówne ustawienia';
$lang['ForumsAuth'] = 'Ustawienia autoryzacji';
$lang['ForumsAuthNote'] = 'Ustawienia nie s± dziedziczne!';
$lang['Forums-level0'] = 'Go¶cie';
$lang['Forums-level1'] = 'U¿ytkownicy';
$lang['Forums-level2'] = 'Moderatorzy';
$lang['Forums-level3'] = 'Administratorzy';
$lang['Forums-auth0'] = 'Ogl±danie forum';
$lang['Forums-auth1'] = 'Czytanie tematów';
$lang['Forums-auth2'] = 'Pisanie tematów';
$lang['Forums-auth3'] = 'Odpowiadanie na tematy';
$lang['Forums-auth4'] = 'Edytowanie postów innych u¿ytkowników';
$lang['Forums-auth5'] = 'Przenoszenie tematów';
$lang['Forums-auth6'] = 'Usuwanie postów i tematów';
$lang['Forums-auth7'] = 'Zamykanie tematów';
$lang['Forums-auth8'] = 'Przypinanie tematów';
$lang['Forums-auth9'] = 'U¿ywanie HTML (niebezpieczne)';

$lang['IPLookupSearchHostname'] = 'Szukaj po nazwie hosta';
$lang['IPLookupSearchUsernames'] = 'Szukaj u¿ytkownika (u¿ytkowników)';
$lang['IPLookupHostname'] = 'Nazwa hosta';
$lang['IPLookupHostnameNotFound'] = 'Nie znaleziono odpowiedniej nazwy hosta.';
$lang['IPLookupUsernames'] = 'Loginy';
$lang['IPLookupUsernamesNotFound'] = 'Nie znaleziono odpowiadaj±cych loginów.';

$lang['SQLToolboxWarningTitle'] = 'Wa¿ne ostrze¿enie!';
$lang['SQLToolboxWarningContent'] = 'Be very careful using the raw query tool. Executing ALTER, DELETE, TRUNCATE or other types of queries may irreversibly damage your forum! Only use this when you know what you are doing.';
$lang['SQLToolboxExecuteQuery'] = 'Execute Query';
$lang['SQLToolboxExecuteQueryInfo'] = 'Enter an SQL query to execute. Eventually, results will be shown in a second text box.';
$lang['SQLToolboxExecute'] = 'Execute';
$lang['SQLToolboxExecutedSuccessfully'] = 'Query executed successfully.';
$lang['SQLToolboxMaintenance'] = 'Maintenance';
$lang['SQLToolboxMaintenanceInfo'] = 'These functions optimize (and repair) the SQL tables used by UseBB. Optimizing the tables often enough is recommended for larger boards.';
$lang['SQLToolboxRepairTables'] = 'Napraw tabele';
$lang['SQLToolboxOptimizeTables'] = 'Optymalizuj tabele';
$lang['SQLToolboxMaintenanceNote'] = 'Note: this does not restore any lost data in the database.';

$lang['ModulesInfo'] = 'Modu³ ACP pozwalaj± ci na dodanie do ACP nowych mo¿liwo¶ci. Modu³y mo¿na znale¶æ na stronie UseBB: %s.';
$lang['ModulesLongName'] = 'D³uga nazwa';
$lang['ModulesShortName'] = 'Krótka nazwa';
$lang['ModulesCategory'] = 'Kategoria';
$lang['ModulesFilename'] = 'Nazwa pliku';
$lang['ModulesDeleteNotPermitted'] = 'Brak uprawnieñ';
$lang['ModulesDisabled'] = 'Modu³y ACP zosta³y wy³±czone w konfiguracji forum.';
$lang['ModulesNoneAvailable'] = 'Nie ma modu³ów do wy¶wietlenia.';
$lang['ModulesUpload'] = 'Wrzuæ modu³';
$lang['ModulesUploadInfo'] = 'Podaj nazwê lokalnego pliku lub nazwê modu³u ACP skryptu UseBB by wrzuciæ go na serwer.';
$lang['ModulesUploadDuplicateModule'] = 'Modu³ nazwany %s istnieje ju¿ na serwerze. Proszê go wpierw usun±æ.';
$lang['ModulesUploadNoValidModule'] = 'Plik %s nie jest poprawnym modu³em UseBB.';
$lang['ModulesUploadFailed'] = 'Nie mo¿na zainstalowaæ modu³u %s. Nie uda³o siê skopiowaæ.';
$lang['ModulesUploadDisabled'] = 'Katalog uploadu modu³ów nie jest zapisywalny. Wrzucanie modu³ów wy³±czone. By je w³±czyæ nadaj kategorii %s CHMOD 777.';
$lang['ModulesConfirmModuleDelete'] = 'Potwierd¼ usuniêcie modu³u';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Czy jeste¶ pewien, ze chcesz usun±æ modu³ %s (%s modu³y)?';

$lang['MembersSearchMember'] = 'Szukaj u¿ytkownika';
$lang['MembersSearchMemberInfo'] = 'Podaj nick (lub jego czê¶æ).';
$lang['MembersSearchMemberExplain'] = 'Nick lub nazwa wy¶wietlana';
$lang['MembersSearchMemberNotFound'] = 'Nie znaleziono nazwy u¿ytkownika %s .';
$lang['MembersSearchMemberList'] = 'Nastêpuj±cy u¿ytkownicy zostali znalezieni';
$lang['MembersEditingMember'] = 'Edytowanie u¿ytkownika %s';
$lang['MembersEditingMemberInfo'] = 'Zakoñcz edycjê profilu i zatwierd¼ formularz. Pola zaznaczone (*) s± wymagane.';
$lang['MembersEditingMemberUsernameExists'] = 'U¿ytkownik %s ju¿ istnieje.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Wy¶wietlana nazwa %s ju¿ istnieje.';
$lang['MembersEditingMemberBanned'] = 'Zbanowany';
$lang['MembersEditingMemberBannedReason'] = 'Przyczyna bana';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Nie mo¿esz zmieniaæ swojego w³asnego poziomu.';
$lang['MembersEditingMemberCantBanSelf'] = 'Nie mo¿esz sam siebie zbanowaæ.';
$lang['MembersEditingComplete'] = 'Profil u¿ytkownika %s zosta³ poprawnie wyedytowany.';
$lang['MembersEditingLevelModInfo'] = 'Aby zrobiæ z kogo¶ moderatora, edytuj wybrane forum oraz dodaj login u¿ytkownika w miejsce "Moderator".';

$lang['DeleteMembersSearchMember'] = 'Szukaj u¿ytkownika';
$lang['DeleteMembersSearchMemberInfo'] = 'Podaj nick lub jego czê¶æ by usun±æ wybranego u¿ytkownika.';
$lang['DeleteMembersSearchMemberExplain'] = 'Nick lub wy¶wietlana nazwa';
$lang['DeleteMembersSearchMemberNotFound'] = 'Nie znaleziono u¿ytkownika o nicku %s .';
$lang['DeleteMembersSearchMemberList'] = 'Znaleziono nastêpuj±ce konta';
$lang['DeleteMembersConfirmMemberDelete'] = 'Potwierd¼ usuniêcie u¿ytkownika';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Czy jeste¶ pewien, ¿e chcesz usun±æ u¿ytkownika %s? Ta akcja jest nie odwracalna!';
$lang['DeleteMembersComplete'] = 'Usuniêcie u¿ytkownika %s powiod³o siê.';
$lang['DeleteMembersDeletePosts'] = 'Usuñ posty wybranego u¿ytkownika.';
$lang['DeleteMembersBanEmail'] = 'Adres e-mail do zbanowania';

$lang['RegisterMembersExplain'] = 'Tutaj mo¿esz stworzyæ nowego u¿ytkownika. Wype³nij wymagane pola.';
$lang['RegisterMembersComplete'] = 'Zarejstrowano u¿ytkownika %s . Mo¿esz siê zalogowaæ.';
$lang['RegisterMembersEditMember'] = 'Mo¿esz edytowaæ utworzone konto u¿ytkownika: %s.';

$lang['ActivateMembersExplain'] = 'Tutaj znajduje siê lista u¿ytkowników oczekuj±cych na aktywacjê. Nazwy oznaczone (*) oznaczaj± konta, które by³y wcze¶niej aktywne.';
$lang['ActivateMembersNoMembers'] = 'Nie ma u¿ytkowników do wy¶wietlenia.';
$lang['ActivateMembersListAdmin'] = 'Aktywacja administratora';
$lang['ActivateMembersListEmail'] = 'Aktywacja e-mailem';
$lang['ActivateMembersListAll'] = 'Wszystkie';

$lang['PruneForumsStart'] = 'Zacznij usuwanie';
$lang['PruneForumsExplain'] = 'Usuwaj±c fora mozesz oczy¶ciæ bazê ze starych postów i tematów.';
$lang['PruneForumsForums'] = 'Fora do usuniêcia';
$lang['PruneForumsAction'] = 'Akcja';
$lang['PruneForumsActionLock'] = 'Zablokuj';
$lang['PruneForumsActionMove'] = 'Przenie¶';
$lang['PruneForumsActionDelete'] = 'Usuñ';
$lang['PruneForumsMoveTo'] = 'Przenie¶ tematy do';
$lang['PruneForumsTopicAge'] = 'Wiek tematów';
$lang['PruneForumsTopicAgeField'] = 'Ostatnia odpowied¼ napisana zosta³a %s dni wcze¶niej.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'The &quot;move to&quot; forum cannot be selected for pruning.';
$lang['PruneForumsConfirm'] = 'Potwierd¼';
$lang['PruneForumsConfirmText'] = 'Rozumiem, ¿e ta akcja jest nieodwracalna.';
$lang['PruneForumsNotConfirmed'] = 'Musisz potwierdziæ tê akcjê przed usuniêciem for.';
$lang['PruneForumsDone'] = 'Usuwanie zakoñczone. %d tematów zosta³o usuniêtych.';
$lang['PruneForumsExcludeStickies'] = 'Nie usuwaj przyklejonych tematów';

$lang['PruneMembersExplain'] = 'Usuwaj±c nieaktywnych u¿ytkowników oczy¶cisz swoj± bazê.';
$lang['PruneMembersTypeNeverActivated'] = 'Nigdy nieaktywowani u¿ytkownicy';
$lang['PruneMembersRegisteredDaysAgo'] = 'Zarejestrowany przynajmniej %s dni temu.';
$lang['PruneMembersTypeNeverPosted'] = 'U¿ytkownicy, którzy nigdy nie napisali ¿adnego posta';
$lang['PruneMembersTypeInactive'] = 'Nieaktywni u¿ytkownicy';
$lang['PruneMembersLastLoggedIn'] = 'Ostanio zalogowani %s dni temu.';
$lang['PruneMembersExclude'] = 'Wyeliminuj';
$lang['PruneMembersPreview'] = 'Przegl±daj u¿ytkowników';
$lang['PruneMembersPreviewList'] = 'With the submitted settings, %d members will be pruned.';
$lang['PruneMembersUsesCurrentSettings'] = 'Uwaga! % s u¿ywa aktualnie wybranych ustawieñ, nie ostatni podgl±d listy cz³onków.';
$lang['PruneMembersExclude'] = 'Wyklucz';
$lang['PruneMembersConfirmText'] = 'Rozumiem, ¿e ta akcja jest nie odwracalna.';
$lang['PruneMembersStart'] = 'Zacznij usuwanie';
$lang['PruneMembersNotConfirmed'] = 'Musisz wpierw potwierdziæ akcjê.';
$lang['PruneMembersDone'] = 'Usuwanie zakoñczono. %d uzytkownikó zosta³o usuniêtych.';

$lang['DNSBLIPBansDisabled'] = 'Banowanie adresów IP jest wy³±czone';
$lang['DNSBLIPBansDisabledInfo'] = 'For DNSBL powered banning to work, IP address banning must be enabled.';
$lang['DNSBLGeneralInfo'] = 'Open proxies are often used to post spam or abusive messages. Using UseBB\'s protection system, most of these proxies can be detected and banned automatically. Herefore blacklists are queried for information about the visitor\'s IP address.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Enable DNSBL powered banning';
$lang['DNSBLServers'] = 'DNS BlackList (DNSBL) servers';
$lang['DNSBLServersInfo'] = 'One DNSBL server per line. Note using many of these blacklists together may cause slowness upon creating a new session on your forum.';
$lang['DNSBLMinPositiveHits'] = 'At least %s positive hits are required to ban an IP address.';
$lang['DNSBLRecheckMinutes'] = 'Recheck allowed IP addresses every %s minutes (0 to disable).';
$lang['DNSBLSettingsSaved'] = 'DNSBL banning settings saved.';
$lang['DNSBLWhitelist'] = 'Bia³a lista';
$lang['DNSBLWhitelistInfo'] = 'One IP address or hostname per line (* and ? can be used as wildcards).';
$lang['DNSBLGlobally'] = 'Perform checking globally instead of only for registering/posting (not recommended).';

$lang['BadwordsInfo'] = 'Brzydkie s³owa mog± zostaæ usuniête lub ewentualnie "zagwiazdkowane".';
$lang['BadwordsDisabled'] = 'Cenzor jest wy³±czony';
$lang['BadwordsDisabledInfo'] = 'Cenzura zosta³a wy³aczona w konfiguracji forum.';
$lang['BadwordsNoBadwordsExist'] = '¯adne filtry nie istniej± na tym forum.';
$lang['BadwordsAddBadwordWord'] = 'S³owo';
$lang['BadwordsAddBadwordReplacement'] = 'Zamiennik';

$lang['MassEmailInfo'] = 'Wysy³a masow± wiadomo¶æ e-mail do wszystkich u¿ytkowników lub do wybranej grupy.';
$lang['MassEmailRecipients'] = 'Odbiorcy';
$lang['MassEmailRecipients-admins'] = 'Administratorzy';
$lang['MassEmailRecipients-mods'] = 'Moderatorzy';
$lang['MassEmailRecipients-members'] = 'U¿ytkownicy';
$lang['MassEmailSubject'] = 'Temat';
$lang['MassEmailBody'] = 'Tekst';
$lang['MassEmailTemplate'] = 'Witaj,

To jest mail od administracji [board_name].

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'Masowy e-mail zosta³ wys³any do %d u¿ytkowników. Wys³ano %d wiadomo¶ci.';
$lang['MassEmailOptions'] = 'Opcje';
$lang['MassEmailPublicEmailsOnly'] = 'Wysy³ane tylko do publicznie widocznych adresow e-mail';
$lang['MassEmailExcludeBanned'] = 'Wyklucz zbanowanych uzytkowników';

$lang['BansInfo'] = 'Tutaj mozesz kontrolowaæ wszystkie aspekty banowania na twoim forum.';
$lang['Bans-username'] = 'Loginy';
$lang['Bans-email'] = 'Adresy e-mail';
$lang['Bans-ip_addr'] = 'Adresy IP';
$lang['BansUsername'] = 'Nick';
$lang['BansEmail'] = 'Adres e-mail';
$lang['BansIp_addr'] = 'Adres IP';
$lang['BansNoBansExist'] = 'Nie ma banów tego typu na tym forum.';
$lang['BansIPBansDisabledInfo'] = 'Banowanie adresów IP zosta³o wy³aczone w konfiguracji forum.';

?>
