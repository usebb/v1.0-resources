<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_Italian.php,v 1.96 2007/08/04 14:24:42 pc_freak Exp $
	Translation by Stevenking - SPS Racing Forum - email: scutone@hotmail.com
	
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

$lang['AdminLogin'] = 'Admin Login';
$lang['AdminPasswordExplain'] = 'Per ragioni di sicurezza, devi inserire la tua password per il login all\'ACP.';

$lang['RunningBadACPModule'] = 'UseBB can not run this module because one or more aspects are missing (no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = 'Generale';
$lang['Category-forums'] = 'Forums';
$lang['Category-various'] = 'Varie';
$lang['Category-members'] = 'Utenti';
$lang['Category-pruning'] = 'Sfoltimento';
$lang['Category-security'] = 'Sicurezza';
$lang['Item-index'] = 'ACP Index';
$lang['Item-version'] = 'Controllo Versione';
$lang['Item-config'] = 'Configurazione Generale';
$lang['Item-categories'] = 'Gestione Categorie';
$lang['Item-forums'] = 'Gestione Forums';
$lang['Item-iplookup'] = 'Lookup Indirizzo IP';
$lang['Item-sqltoolbox'] = 'SQL Toolbox';
$lang['Item-modules'] = 'Moduli ACP';
$lang['Item-members'] = 'Modifica Utenti';
$lang['Item-delete_members'] = 'Elimina Utenti';
$lang['Item-register_members'] = 'Registra Utenti';
$lang['Item-activate_members'] = 'Attiva Utenti';
$lang['Item-prune_forums'] = 'Sfoltire Forums';
$lang['Item-prune_members'] = 'Sfoltire Utenti';
$lang['Item-dnsbl'] = 'DNSBL Bans';
$lang['Item-badwords'] = 'Filtro Parolaccie';
$lang['Item-mass_email'] = 'Invio Email Multiple';
$lang['Item-bans'] = 'Gestione Bans';

$lang['IndexWelcome'] = 'Benvenuto nel Pannello di Controllo Amministratore del forum SPS Racing. Da qui puoi controllare tutti gli aspetti del forum, settare la configurazione, controllare forums, utenti, etc.';
$lang['IndexSystemInfo'] = 'Info sul Sistema';
$lang['IndexUseBBVersion'] = 'Versione UseBB';
$lang['IndexPHPVersion'] = 'Versione PHP';
$lang['IndexSQLServer'] = 'SQL server driver';
$lang['IndexHTTPServer'] = 'Server HTTP ';
$lang['IndexOS'] = 'Sistema Operativo';
$lang['IndexServerLoad'] = 'Valore Carico Server';
$lang['IndexLinks'] = 'Links';
$lang['IndexUnactiveMembers'] = 'Utenti Disattivati';
$lang['IndexNoUnactiveMembers'] = 'Nessun utente attende l\'attivazione dall\'admin.';
$lang['IndexOneUnactiveMember'] = 'Un utente attende l\'attivazione dall\'admin.';
$lang['IndexMoreUnactiveMembers'] = 'Ci sono %d utenti attendono l\'attivazione dall\'admin.';
$lang['IndexWarning'] = 'Attenzione!';
$lang['IndexUnwritableConfig'] = 'Al momento, %s non è scrivibile dal PHP. Questo non è raccomandato. Per renderlo scrivibile, cambia i permessi dei files con un client FTP oppure effettua un operazione di chmod (0777) su di essi. Contatta il tuo host in caso di problemi.';

$lang['VersionFailed'] = 'Il forum non può determinare l\'ultima versione. Cerca di controllare spesso %s per essere sicuro che tu abbia l\'ultima versione.';
$lang['VersionLatestVersionTitle'] = 'Questa è l\'ultima versione';
$lang['VersionLatestVersion'] = 'Questo forum è stato generato da UseBB %s con l\'ultima versione stabile.';
$lang['VersionNeedUpdateTitle'] = 'Nuova versione disponibile!';
$lang['VersionNeedUpdate'] = 'Questo forum sta eseguendo UseBB %s necessita di essere aggiornato alla versione %s per restare sicuri e liberi da bug! Visita %s per scaricare l\'ultima versione.';
$lang['VersionBewareDevVersionsTitle'] = 'Indivituata versione di sviluppo';
$lang['VersionBewareDevVersions'] = 'Questo forum sta eseguendo %s comunque %s è ancora alla versione stabile. Guardarsi da problemi di incompatibilità che potrebbero sussistere con la versione di sviluppo.';

$lang['ConfigInfo'] = 'Su questa pagina puoi editare tutti i parametri del tuo forum SPS Racing. Attenzione nel modificare la configurazione al database. I campi marcati con un asterisco (*) sono obbligatori.';
$lang['ConfigSet'] = 'La nuova configurazione è stata salvata. Essa sarà visibile non appena caricherai una nuova pagina.';
$lang['ConfigMissingFields'] = 'Alcuni campi sono mancanti o non corretti (i.e. testo dove ci si aspettava un numero). Controlla i seguenti campi:';
$lang['ConfigBoard-type'] = 'Tipo';
$lang['ConfigBoard-server'] = 'Server';
$lang['ConfigBoard-username'] = 'Username';
$lang['ConfigBoard-passwd'] = 'Password';
$lang['ConfigBoard-dbname'] = 'Nome Database';
$lang['ConfigBoard-prefix'] = 'Prefisso Tabella';
$lang['ConfigBoardSection-general'] = 'Scheda Generale';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = 'Puoi lasciarlo in bianco per auto-detection.';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Contatore Pagine';
$lang['ConfigBoardSection-date_time'] = 'Data &amp; Orario';
$lang['ConfigBoardSection-date_time-info'] = 'Applica solo agli ospiti e ai nuovi accounts.';
$lang['ConfigBoardSection-database'] = 'Configurazione Database ';
$lang['ConfigBoardSection-database-info'] = 'Modifica questo quando sei sicuro che i settaggi saranno attivi da subito.';
$lang['ConfigBoardSection-advanced'] = 'Settaggi avanzati';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Caratteristiche aggiuntive';
$lang['ConfigBoardSection-user_rights'] = 'Permessi utente';
$lang['ConfigBoardSection-min_levels'] = 'Livello minimo di accesso';
$lang['ConfigBoardSection-min_levels-info'] = 'Ci sono i minimi requisiti di livello per accedere ad ogni articolo.';
$lang['ConfigBoardSection-layout'] = 'Settaggi Layout';
$lang['ConfigBoardSection-security'] = 'Sicurezza';
$lang['ConfigBoard-admin_email'] = 'Indirizzo e-mail dell\'Admin';
$lang['ConfigBoard-board_descr'] = 'Descrizione forum';
$lang['ConfigBoard-board_keywords'] = 'Parole chiave ';
$lang['ConfigBoard-board_keywords-info'] = 'Separato da punti.';
$lang['ConfigBoard-board_name'] = 'Nome forum';
$lang['ConfigBoard-date_format'] = 'Formato data';
$lang['ConfigBoard-date_format-info'] = 'Stessa sintassi come date() di PHP.';
$lang['ConfigBoard-language'] = 'Linguaggio di default';
$lang['ConfigBoard-language-info'] = 'Applica solo agli ospiti e nuovi account.';
$lang['ConfigBoard-session_name'] = 'Nome della sessione';
$lang['ConfigBoard-session_name-info'] = 'Solamente caratteri alfanumerici, nessuno spazio bianco. Deve contenere almeno una lettera.';
$lang['ConfigBoard-template'] = 'Default template';
$lang['ConfigBoard-template-info'] = 'Applica solo agli ospiti e nuovi account.';
$lang['ConfigBoard-active_topics_count'] = 'Contatore dei topic attivo';
$lang['ConfigBoard-avatars_force_height'] = 'Altezza Max dell\'avatar (px)';
$lang['ConfigBoard-avatars_force_height-info'] = 'Zero per illimitato.';
$lang['ConfigBoard-avatars_force_width'] = 'Larghezza Max dell\'avatar (px)';
$lang['ConfigBoard-avatars_force_width-info'] = 'Zero per illimitato.';
$lang['ConfigBoard-debug'] = 'Modo di debug';
$lang['ConfigBoard-email_view_level'] = 'Livello visibilità e-mail';
$lang['ConfigBoard-flood_interval'] = 'Intervallo Flood (secondi)';
$lang['ConfigBoard-members_per_page'] = 'Utenti per pagina';
$lang['ConfigBoard-online_min_updated'] = 'Utenti attivi nell\'ultimo minuto';
$lang['ConfigBoard-output_compression'] = 'Compressione output';
$lang['ConfigBoard-passwd_min_length'] = 'Lunghezza minima della password';
$lang['ConfigBoard-posts_per_page'] = 'Post per pagina';
$lang['ConfigBoard-rss_items_count'] = 'Contatore items RSS';
$lang['ConfigBoard-search_limit_results'] = 'Limite risultati di ricerca su x articoli';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Lunghezza minima della chiave di ricerca';
$lang['ConfigBoard-session_max_lifetime'] = 'Tempo di vita massimo di una sessione (minuti)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Tempo scaduto per la modifica del messaggio';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Quando il post viene editato in questi secondi dopo aver postato, le note modificate restano nascoste.';
$lang['ConfigBoard-topicreview_posts'] = 'Contatore visite al post della discussione';
$lang['ConfigBoard-topics_per_page'] = 'Discussioni per pagina';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Discussioni attive';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Lista utenti dettagliata';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Box Statistiche';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Livello minimo per visualizzare indirizzi e-mail nascosti';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Lista utenti';
$lang['ConfigBoard-view_search_min_level'] = 'Motore di ricerca';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Lista Staff';
$lang['ConfigBoard-view_stats_min_level'] = 'Pagina delle statistiche';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Link del contatto admin';
$lang['ConfigBoard-allow_multi_sess'] = 'Permetti sessioni multiple per IP';
$lang['ConfigBoard-board_closed'] = 'Chiudi il forum';
$lang['ConfigBoard-board_closed-info'] = 'Gli admin saranno comunque abilitati al login.';
$lang['ConfigBoard-cookie_secure'] = 'Secure cookies';
$lang['ConfigBoard-cookie_secure-info'] = 'Encrypted cookies (HTTPS only)';
$lang['ConfigBoard-cookie_httponly'] = 'Abilita solo i cookie HTTP';
$lang['ConfigBoard-cookie_httponly-info'] = 'Aggiungi un flag HttpOnly ai cookies, facendoli più sicuri contro XSS.';
$lang['ConfigBoard-dst'] = 'Daylight saving times';
$lang['ConfigBoard-enable_contactadmin'] = 'Abilita link del contatto dell\'admin';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Abilita lista dettagliata degli utenti online';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Abilita box statistiche per discussione';
$lang['ConfigBoard-enable_memberlist'] = 'Abilita lista utenti';
$lang['ConfigBoard-enable_quickreply'] = 'Abilita risposte rapide';
$lang['ConfigBoard-enable_rss'] = 'Abilita RSS feed';
$lang['ConfigBoard-enable_stafflist'] = 'Abilita lista dello staff';
$lang['ConfigBoard-enable_stats'] = 'Abilita pagina delle statistiche';
$lang['ConfigBoard-friendly_urls'] = 'Abilita gli URL amici';
$lang['ConfigBoard-friendly_urls-info'] = 'Richiede Apache e mod_rewrite. Disabiliterà gli id sessione degli url.';
$lang['ConfigBoard-guests_can_access_board'] = 'Ospiti possoono accedere al ';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Ospiti possono visualizzare le informazioni dei contatti nei profili';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Ospiti possono visualizzare il profilo utenti';
$lang['ConfigBoard-hide_avatars'] = 'Nascondi tutti gli avatar';
$lang['ConfigBoard-hide_signatures'] = 'Nascondi tutte le firme';
$lang['ConfigBoard-hide_userinfo'] = 'Nascondi le informazioni dell\'utente';
$lang['ConfigBoard-rel_nofollow'] = 'Abilita il nofollow di Google';
$lang['ConfigBoard-rel_nofollow-info'] = 'Questo farà ignorare a Google tutti i link BBCode.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Torna al topic dopo aver postato';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Abilita BBCode nelle firme';
$lang['ConfigBoard-sig_allow_smilies'] = 'Abilita smilie nelle firme';
$lang['ConfigBoard-sig_max_length'] = 'Lunghezza massima delle firme';
$lang['ConfigBoard-single_forum_mode'] = 'Single forum mode';
$lang['ConfigBoard-single_forum_mode-info'] = 'Visualizza solo discussioni visibili come discussione indice.';
$lang['ConfigBoard-target_blank'] = 'Link BBCode si aprono in una nuova finestra';
$lang['ConfigBoard-activation_mode'] = 'Modo di attivazione mode';
$lang['ConfigBoard-activation_mode0'] = 'Nessuna attivazione';
$lang['ConfigBoard-activation_mode1'] = 'Attivazione e-mail';
$lang['ConfigBoard-activation_mode2'] = 'Attivazione Admin';
$lang['ConfigBoard-board_closed_reason'] = 'Motivo chiusura forum';
$lang['ConfigBoard-board_url'] = 'URL del forum';
$lang['ConfigBoard-board_url-info'] = 'Completa l\'URL includendo slash di coda; lascia in bianco per auto-detect.';
$lang['ConfigBoard-cookie_domain'] = 'Dominio cookie';
$lang['ConfigBoard-cookie_path'] = 'Percorso cookie';
$lang['ConfigBoard-session_save_path'] = 'Percorso salvataggio sessione';
$lang['ConfigBoard-session_save_path-info'] = 'Percorso di salvataggio dati per sessione predefinita; solo nomi di directory assolute.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Escludi forum da topic attivi';
$lang['ConfigBoard-exclude_forums_rss'] = 'Escludi forum da RSS feed';
$lang['ConfigBoard-exclude_forums_stats'] = 'Escludi forum dalla pagina statistiche';
$lang['ConfigBoard-timezone'] = 'Timezone';
$lang['ConfigBoard-debug0'] = 'Disabilitato';
$lang['ConfigBoard-debug1'] = 'Semplice (parse time and counts)';
$lang['ConfigBoard-debug2'] = 'Esteso (simple + SQL queries)';
$lang['ConfigBoard-email_view_level0'] = 'Nascondi tutti gli indirizzi email';
$lang['ConfigBoard-email_view_level1'] = 'Abilita form di e-mail';
$lang['ConfigBoard-email_view_level2'] = 'Mostra verifica di spam';
$lang['ConfigBoard-email_view_level3'] = 'Mostra grezzo';
$lang['ConfigBoard-output_compression0'] = 'Disabilitato';
$lang['ConfigBoard-output_compression1'] = 'Compressione HTML';
$lang['ConfigBoard-output_compression2'] = 'Abilita Gzip';
$lang['ConfigBoard-output_compression3'] = 'Compressione HTML + Gzip';
$lang['ConfigBoard-level0'] = 'Ospiti';
$lang['ConfigBoard-level1'] = 'Utenti';
$lang['ConfigBoard-level2'] = 'Moderatori';
$lang['ConfigBoard-level3'] = 'Amministratori';
$lang['ConfigBoard-enable_acp_modules'] = 'Abilita moduli ACP';
$lang['ConfigBoard-disable_registrations'] = 'Disabilita registrazioni utenti';
$lang['ConfigBoard-disable_registrations-info'] = 'Utenti possono ancora essere registrati per mezzo dell\'ACP.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Disabilita motivo di registrazione utente';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Permetti indirizzi e-mail duplicati';
$lang['ConfigBoard-enable_badwords_filter'] = 'Abilita filtro parolaccie';
$lang['ConfigBoard-enable_ip_bans'] = 'Abilita ban indirizzo IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Mostra entità grezze nelle tag [code].';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Mostra l\'entità grezza del codice al posto della sua rappresentazione html.';
$lang['ConfigBoard-username_min_length'] = 'Lunghezza minima Username';
$lang['ConfigBoard-username_max_length'] = 'Lunghezza massima Username';
$lang['ConfigBoard-show_never_activated_members'] = 'Non mostrare mai gli utenti attivati';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Mostra qusto nella sezione statistiche e nella lista utenti.';
$lang['ConfigBoard-enable_registration_log'] = 'Abilita registrazione log';
$lang['ConfigBoard-enable_registration_log-info'] = 'Scrivi un log di registrazione in un file di testo.';
$lang['ConfigBoard-registration_log_file'] = 'Registrazione file di log';
$lang['ConfigBoard-registration_log_file-info'] = 'Relativo alla directory dei forum, o percorso assoluto.';
$lang['ConfigBoard-enable_email_dns_check'] = 'Abilita controllo DNS sull\'indirizzo email';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Valida guardando i campi MX. Non funziona su tutti i domini validi.';
$lang['ConfigBoard-edit_post_timeout'] = 'Tempo di scadenza di modifica del post';
$lang['ConfigBoard-edit_post_timeout-info'] = 'Un utente è abilitato solo a modificare il proprio post entro x secondi dopo aver postato.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Disabilita intestazione XHTML per i template XHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'Un Content-Type XHTML può essere utilizzato solo quando il contenuto è corretto al 100%. E\' sempre disabilitato per i browser non-XHTML.';
$lang['ConfigBoard-email_reply-to_header'] = 'Utilizza intestazione Reply-To';
$lang['ConfigBoard-email_reply-to_header-info'] = 'Utilizza Reply-To al posto di Da per indirizzo email degli utenti (richiesto su alcuni host).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Contatore dell\'affluenza di messaggi sul recipiente email';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Messaggi multipli saranno inviati finche tutti le mail nei recipienti saranno stati spediti.';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'Abilita parametri -f per l\'invio mail.';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'Questo può danneggiare la funzionalità delle email su alcuni host.';
$lang['ConfigBoard-antispam_question_mode'] = 'Modalità domanda Anti-spam';
$lang['ConfigBoard-antispam_question_mode-info'] = 'Pone agli ospiti una domanda prima che essi abbiano accesso a registrazione, new topic e post di risposta.';
$lang['ConfigBoard-antispam_question_mode0'] = 'Disabilitato';
$lang['ConfigBoard-antispam_question_mode1'] = 'Domanda in modo Random';
$lang['ConfigBoard-antispam_question_mode2'] = 'Domande predefinite vengono scelte random';
$lang['ConfigBoard-antispam_question_questions'] = 'Domande predefinite di anti-spam';
$lang['ConfigBoard-antispam_question_questions-info'] = 'Domande nel form di &quot;domanda|risposta&quot; (senza apici), separato da a capo. La risposta è case-insensitive.';

$lang['CategoriesInfo'] = 'Questa sezione da il controllo su varie categorie che esistono nel forum.';
$lang['CategoriesAddNewCat'] = 'Aggiungi nuova categoria';
$lang['CategoriesAdjustSortIDs'] = 'Mette in ordine gli ID';
$lang['CategoriesSortAutomatically'] = 'Ordina categorie automaticamente';
$lang['CategoriesNoCatsExist'] = 'Questa board non contiene ancora nessuna categoria.';
$lang['CategoriesCatName'] = 'Nome categoria';
$lang['CategoriesSortID'] = 'Ordina ID';
$lang['CategoriesMissingFields'] = 'Alcuni campi richiesti erano mancanti. Riempili correttamente.';
$lang['CategoriesSortChangesApplied'] = 'I tuoi cambiamenti secondo l\'ordine dell\'ID sono stati applicati.';
$lang['CategoriesConfirmCatDelete'] = 'Conferma eliminazione categoria';
$lang['CategoriesConfirmCatDeleteContent'] = 'Sei sicuro di voler cancellare la categoria %s? Quest\'azione è irreversibile!';
$lang['CategoriesMoveContents'] = 'Muovi i contenuti della categoria in %s';
$lang['CategoriesDeleteContents'] = 'Elimina categoria';
$lang['CategoriesEditingCat'] = 'Modifica categoria %s';

$lang['ForumsInfo'] = 'Questa sezione da il controllo su vari forum che esistono sul tuo forum.';
$lang['ForumsAddNewForum'] = 'Aggiungi un nuovo forum';
$lang['ForumsAdjustSortIDs'] = 'Correggi l\'ordine degli ID';
$lang['ForumsSortAutomatically'] = 'Ordina i forum automaticamente';
$lang['ForumsNoForumsExist'] = 'Questo forum non contiene ancora alcun forum.';
$lang['ForumsForumName'] = 'Nome del forum';
$lang['ForumsCatName'] = 'Categoria padre';
$lang['ForumsDescription'] = 'Descrizione';
$lang['ForumsDescriptionExplain'] = 'Questo è un campo HTML abilitato. Se vuoi utilizzare caratteri speciali, sii sicuro di utilizzare le proprie rispettive entità HTML (per esempio &amp;amp; al posto di &amp;).';
$lang['ForumsStatus'] = 'Stato';
$lang['ForumsStatusOpen'] = 'Apri';
$lang['ForumsAutoLock'] = 'Bloccaggio automatico';
$lang['ForumsAutoLockXReplies'] = 'Blocca dopo %s risposte.';
$lang['ForumsIncreasePostCount'] = 'Aggiungi contatore dei post degli utenti';
$lang['ForumsModerators'] = 'Moderatori';
$lang['ForumsModeratorsExplain'] = 'Usernames (non nome mostrato), separato da virgole. Case-insensitive.';
$lang['ForumsModeratorsUnknown'] = 'Utente(i) sconosciuto: %s.';
$lang['ForumsHideModsList'] = 'Nascondi lista moderatori';
$lang['ForumsSortID'] = 'Ordina ID';
$lang['ForumsMissingFields'] = 'Alcuni campi richiesti erano mancanti. Riempili correttamente.';
$lang['ForumsSortChangesApplied'] = 'I tuoi cambiamenti sull\'ordinamento degli ID sono stati applicati.';
$lang['ForumsConfirmForumDelete'] = 'Conferma eliminazione forum';
$lang['ForumsConfirmForumDeleteContent'] = 'Sei sicuro di voler eliminare il forum %s? Questa azione è irreversibile!';
$lang['ForumsMoveContents'] = 'Sposta il post della discussione del forum in %s';
$lang['ForumsMoveModerators'] = 'Quando sposti post, muovi anche moderatori.';
$lang['ForumsDeleteContents'] = 'Elimina contents';
$lang['ForumsEditingForum'] = 'Modifica forum %s';
$lang['ForumsGeneral'] = 'Settaggi generali';
$lang['ForumsAuth'] = 'Settaggi di autorizzazione';
$lang['ForumsAuthNote'] = 'Settaggi non sono ereditati dagli altri!';
$lang['Forums-level0'] = 'Ospiti';
$lang['Forums-level1'] = 'Membri';
$lang['Forums-level2'] = 'Moderatori';
$lang['Forums-level3'] = 'Amministratori';
$lang['Forums-auth0'] = 'Visualizza forum';
$lang['Forums-auth1'] = 'Leggi topic';
$lang['Forums-auth2'] = 'Posta nuovi topic';
$lang['Forums-auth3'] = 'Rispondi ai topic';
$lang['Forums-auth4'] = 'Modifica post di altri';
$lang['Forums-auth5'] = 'Sposta topic';
$lang['Forums-auth6'] = 'Modifica topic e post';
$lang['Forums-auth7'] = 'Blocca topic';
$lang['Forums-auth8'] = 'Incolla topic';
$lang['Forums-auth9'] = 'Posta come HTML (pericoloso)';

$lang['IPLookupSearchHostname'] = 'Ricercahostname';
$lang['IPLookupSearchUsernames'] = 'Ricerca username';
$lang['IPLookupHostname'] = 'Hostname';
$lang['IPLookupHostnameNotFound'] = 'Nessuna corrispondenza di hostname trovata.';
$lang['IPLookupUsernames'] = 'Username';
$lang['IPLookupUsernamesNotFound'] = 'Nessuna corrispondenza di username trovata.';

$lang['SQLToolboxWarningTitle'] = 'Avviso Importante!';
$lang['SQLToolboxWarningContent'] = 'Sii cauto nell\'utilizzo del tool di modifica. Eseguendo ALTER, DELETE, TRUNCATE o altri tipi di query potrebbe danneggiare irresversibilmente il tuo forum! Utilizzalo solamente quando sai ciò che stai facendo.';
$lang['SQLToolboxExecuteQuery'] = 'Esegui Query';
$lang['SQLToolboxExecuteQueryInfo'] = 'Inserisci una query SQL da eseguire. Eventualmente, i risultati saranno mostrati in una seconda area di testo.';
$lang['SQLToolboxExecute'] = 'Esegui';
$lang['SQLToolboxExecutedSuccessfully'] = 'Query eseguita con successo.';
$lang['SQLToolboxMaintenance'] = 'Manutenzione';
$lang['SQLToolboxMaintenanceInfo'] = 'Queste funzioni ottimizzano (e riparano) le tabelle SQL utilizzate da UseBB. Ottimizzare spesso le tabelle è abbastanza raccomandato per più ampi riquadri.';
$lang['SQLToolboxRepairTables'] = 'Tabelle riparate';
$lang['SQLToolboxOptimizeTables'] = 'Ottimizza tabelle';
$lang['SQLToolboxMaintenanceNote'] = 'Nota: questo non recupera alcun dato perso nel database.';

$lang['ModulesInfo'] = 'Moduli ACP ti permettono di estendere l\'ACP in base alle tue proprie caratteristiche o caratteristiche fatte da altri gruppi di programmatori. I moduli possono essere trovati per mezzo del sito web di UseBB : %s.';
$lang['ModulesLongName'] = 'Nome lungo';
$lang['ModulesShortName'] = 'Nome corto';
$lang['ModulesCategory'] = 'Categoria';
$lang['ModulesFilename'] = 'Nome del file';
$lang['ModulesDeleteNotPermitted'] = 'Non permesso';
$lang['ModulesDisabled'] = 'I moduli ACP sono stati disabilitati nella configurazione del forum.';
$lang['ModulesNoneAvailable'] = 'Al momento non è disponibile alcun modulo.';
$lang['ModulesUpload'] = 'Carica modulo';
$lang['ModulesUploadInfo'] = 'Inserici un file locale of un modulo ACP di UseBB da caricare.';
$lang['ModulesUploadDuplicateModule'] = 'Un modulo sotto il nome %s esiste già. Per piacere prima rimuovilo.';
$lang['ModulesUploadNoValidModule'] = 'Il file %s non è un modulo valido di UseBB.';
$lang['ModulesUploadFailed'] = 'Non posso installare il modulo %s. Copia fallita.';
$lang['ModulesUploadDisabled'] = 'La directory del modulo non è scrivibile. L\'upload è disabilitato. Per abilitarlo, rendi la directory %s scrivibile dal webserver (prova con chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Conferma eliminazione modulo';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Sei sicuro di voler eliminare il modulo %s (%s)?';

$lang['MembersSearchMember'] = 'Cerca utente';
$lang['MembersSearchMemberInfo'] = 'Inserisci (parte di) uno username o nome visualizzato da modificare.';
$lang['MembersSearchMemberExplain'] = 'Username o nome visualizzato';
$lang['MembersSearchMemberNotFound'] = 'Nessun utente con username o nome visualizzato %s è stato trovato.';
$lang['MembersSearchMemberList'] = 'Il seguente utente è stato trovato';
$lang['MembersEditingMember'] = 'Modifica utente %s';
$lang['MembersEditingMemberInfo'] = 'Aggiorna le informazioni dell\'utente e sottometti il form. I campi marcati con un asterisco (*) sono richiesti.';
$lang['MembersEditingMemberUsernameExists'] = 'Lo username %s esiste già come username nome visualizzato.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Il nome visualizzato %s already esiste come username o nome visualizzato.';
$lang['MembersEditingMemberBanned'] = 'Bannato';
$lang['MembersEditingMemberBannedReason'] = 'Motivo di ban';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Non puoi cambiare il tuo proprio livello.';
$lang['MembersEditingMemberCantBanSelf'] = 'Non puoi bannare te stesso.';
$lang['MembersEditingComplete'] = 'Il profile dell\'utente è stato modificato con successo.';
$lang['MembersEditingLevelModInfo'] = 'Per creare un moderatore, modifica un forum e aggiungi lo username dell\'utente nel campo moderatori.';

$lang['DeleteMembersSearchMember'] = 'Ricerca membro';
$lang['DeleteMembersSearchMemberInfo'] = 'Inserisci (parte di) uno username o nome di visualizzazione da eliminare.';
$lang['DeleteMembersSearchMemberExplain'] = 'Username o nome di visualizzazione';
$lang['DeleteMembersSearchMemberNotFound'] = 'Nessun utente con username o nome di visualizzazione %s è stato trovato.';
$lang['DeleteMembersSearchMemberList'] = 'Il seguente utente è stato trovato';
$lang['DeleteMembersConfirmMemberDelete'] = 'Conferma eliminazione utente';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Sei sicuro di voler eliminare l\'utente %s? Questa operazione è irreversibile!';
$lang['DeleteMembersComplete'] = 'Eliminazione dell\'utente %s completata.';

$lang['RegisterMembersExplain'] = 'Qui puoi preregustrare un account di un utente. Riempi le seguenti informazioni per creare un account.';
$lang['RegisterMembersComplete'] = 'La registrazione dell\'utente %s è stata completata. L\'utente puo effettuare il login nel modo giusto.';

$lang['ActivateMembersExplain'] = 'Questa è una lista di utenti non attivati sul tuo forum. Qui puoi accettare account manualmente. Un asterisco (*) significa che l\'account utente è stato già attivato in passato.';
$lang['ActivateMembersNoMembers'] = 'Nessun utente da visualizzare.';
$lang['ActivateMembersListAdmin'] = 'Accettazione Admin';
$lang['ActivateMembersListEmail'] = 'Accettazione Email';
$lang['ActivateMembersListAll'] = 'Tutto';

$lang['PruneForumsStart'] = 'Comincia sfoltimento';
$lang['PruneForumsExplain'] = 'Effettuando lo sfoltimento nei forum, puoi cancellare o spostare vecchi topic e mantenere il tuo forum pulito.';
$lang['PruneForumsForums'] = 'Forum da sfoltire';
$lang['PruneForumsAction'] = 'Azione';
$lang['PruneForumsActionLock'] = 'Blocca';
$lang['PruneForumsActionMove'] = 'Sposta';
$lang['PruneForumsActionDelete'] = 'Cancella';
$lang['PruneForumsMoveTo'] = 'Sposta topic in';
$lang['PruneForumsTopicAge'] = 'Età topic';
$lang['PruneForumsTopicAgeField'] = 'Ultima risposta %s giorni fa.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'L\'operazione di &quot;sposta in&quot; forum può essere selezionata per sfoltimento.';
$lang['PruneForumsConfirm'] = 'Conferma';
$lang['PruneForumsConfirmText'] = 'Comprendo che questa azione è irreversibile.';
$lang['PruneForumsNotConfirmed'] = 'Questa azione necessita prima di una conferma.';
$lang['PruneForumsDone'] = 'Sfoltimento completato. Il topic %d è stato sfoltito.';
$lang['PruneForumsExcludeStickies'] = 'Escludi topic incollati';

$lang['PruneMembersExplain'] = 'Sfoltendo membri puoi mantenere gli utenti base del forum rimuovendo gli utenti non attivati o inattivi.';
$lang['PruneMembersTypeNeverActivated'] = 'Utente mai attivato';
$lang['PruneMembersRegisteredDaysAgo'] = 'Registrato almeno %s giorni fa.';
$lang['PruneMembersTypeNeverPosted'] = 'Utente che non ha mai postato';
$lang['PruneMembersTypeInactive'] = 'Utenti inattivi';
$lang['PruneMembersLastLoggedIn'] = 'Loggato l\'ultima volta almeno %s giorni fa.';
$lang['PruneMembersExclude'] = 'Escludi';
$lang['PruneMembersConfirmText'] = 'Comprendo che questa azione è irreversibile.';
$lang['PruneMembersStart'] = 'Comincia sfoltimento';
$lang['PruneMembersNotConfirmed'] = 'Questa azione necessita prima di una conferma.';
$lang['PruneMembersDone'] = 'Sfoltimento completato. %d utenti sono stati sfoltiti.';

$lang['DNSBLIPBansDisabled'] = 'Ban di indirizzo IP address ';
$lang['DNSBLIPBansDisabledInfo'] = 'Per effettuare banning DNSBL, il ban degli indirizzi IP deve essere abilitato.';
$lang['DNSBLGeneralInfo'] = 'I proxies sono spesso utilizzati per postare spam o messaggi abusivi. Utilizzanto la protezione di sistema di UseBB, la maggior parte di questi proxies può essere rilevata e bannata automaticamente. Le liste nere sono visionate per informazioni sugli indirizzi ip dei visitatori.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Abilita DNSBL banning';
$lang['DNSBLServers'] = 'Server DNS delle liste nere (DNSBL)';
$lang['DNSBLServersInfo'] = 'Un server DNSBL per riga. Nota che utilizzando più liste nere insieme potrebbe causare rallentamenti nel creare nuove sessioni sul forum.';
$lang['DNSBLMinPositiveHits'] = 'Almeno %s hits positivi sono richiesti per il ban di un indirizzo IP.';
$lang['DNSBLRecheckMinutes'] = 'Ricontrolla indirizzi IP ogni %s minuti (0 per disabilitarlo).';
$lang['DNSBLSettingsSaved'] = 'Settaggi di banning DNSBL salvati.';
$lang['DNSBLWhitelist'] = 'Lista bianca';
$lang['DNSBLWhitelistInfo'] = 'Un indirizzo IP o hostname per riga (* e ? possono essere utilizzate come wildcards).';

$lang['BadwordsInfo'] = 'Parolaccie possono essere filtrate e rimpiazzate, eventualmente utilizzanto matching parziali (utilizzando *).';
$lang['BadwordsDisabled'] = 'Filtro parolaccie disabilitato';
$lang['BadwordsDisabledInfo'] = 'Il filtro parolaccie è stato disabilitato nella configurazione del forum.';
$lang['BadwordsNoBadwordsExist'] = 'Nessun filtro esiste su questo forum.';
$lang['BadwordsAddBadwordWord'] = 'Parola';
$lang['BadwordsAddBadwordReplacement'] = 'Rimpiazza';

$lang['MassEmailInfo'] = 'Invia messaggio email di massa a tutti i tuoi membri o a un gruppo.';
$lang['MassEmailRecipients'] = 'Cartelle';
$lang['MassEmailRecipients-admins'] = 'Amministratori';
$lang['MassEmailRecipients-mods'] = 'Moderatori';
$lang['MassEmailRecipients-members'] = 'Semplici utenti';
$lang['MassEmailSubject'] = 'Soggetto';
$lang['MassEmailBody'] = 'Body';
$lang['MassEmailTemplate'] = 'Salve,

Questo è il software del forum del [board_name] che parla. L\'amministratore ha inviato questo messaggio di massa per mezzo del forum. Segue il corpo del messaggio.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'Il messaggio di massa è stato inviato ai membri %d utilizzando %d messaggio(i).';
$lang['MassEmailOptions'] = 'Opzioni';
$lang['MassEmailPublicEmailsOnly'] = 'Invia solo ad indirizzi email pubblici';
$lang['MassEmailExcludeBanned'] = 'Escludi utenti bannati';

$lang['BansInfo'] = 'Qui puoi controllare quasi tutti gli aspetti di banning del tuo forum. Match parziale (utlizzando *) è possibile. Accounts individuali possono essere bannati modificando il pannello utenti.';
$lang['Bans-username'] = 'Usernames';
$lang['Bans-email'] = 'Indirizzo e-mail';
$lang['Bans-ip_addr'] = 'Indirizzo IP';
$lang['BansUsername'] = 'Username';
$lang['BansEmail'] = 'Indirizzo e-mail';
$lang['BansIp_addr'] = 'Indirizzo IP';
$lang['BansNoBansExist'] = 'Nessun ban di questo tipo esiste su questo forum.';
$lang['BansIPBansDisabledInfo'] = 'Il ban di indirizzi IP è stato disabilitato nella configurazione del forum.';

?>
