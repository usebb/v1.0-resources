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
$lang['Home'] = 'Home';
$lang['YourPanel'] = 'Profilo';
$lang['Register'] = 'Registrazione';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Cerca';
$lang['ActiveTopics'] = 'Topic Attivi';
$lang['LogIn'] = 'Accedi';
$lang['LogOut'] = 'Esci (%s)';
$lang['MemberList'] = 'Elenco degli Utenti';
$lang['StaffList'] = 'Elenco dello Staff';
$lang['Statistics'] = 'Statistiche';
$lang['ContactAdmin'] = 'Contatta l\'Admin';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Topic';
$lang['Posts'] = 'Post';
$lang['LatestPost'] = 'Ultimo messaggio';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuovi messaggi';
$lang['NoNewPosts'] = 'Nessun nuovo messaggio';
$lang['LockedNewPosts'] = 'Chiuso (nuovi messaggi)';
$lang['LockedNoNewPosts'] = 'Chiuso (nessun nuovo messaggio)';
$lang['Locked'] = 'Chiuso';
$lang['LastLogin'] = 'Ultimo accesso';
$lang['VariousInfo'] = 'Informazioni varie';
$lang['IndexStats'] = 'Questo forum contiene %d messaggi in %d topic e ha %d utenti registrati.';
$lang['NewestMemberExtended'] = 'Benvenuto al nostro ultimo utente: %s.';
$lang['Username'] = 'Nome utente';
$lang['CurrentPassword'] = 'Password attuale';
$lang['UserID'] = 'User ID';
$lang['NoSuchForum'] = 'Il forum %s non esiste (piu\')!';
$lang['WrongPassword'] = 'Spiacente, ma la password non e\' corretta! Richiedi una nuova password tramite il modulo di accesso se l\'hai dimenticata.';
$lang['Reset'] = 'Azzera';
$lang['SendPassword'] = 'Invia una nuova password';
$lang['RegisterNewAccount'] = 'Registra un nuovo account';
$lang['RememberMe'] = 'Ricordami';
$lang['Yes'] = 'Si\'';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Il tuo account %s non e\' ancora stato attivato. Per favore controlla l\'e-mail con cui ti sei registrato in questo forum per le istruzioni su come attivare il tuo account.';
$lang['Error'] = 'Errore';
$lang['Profile'] = 'Profilo di %s';
$lang['Level'] = 'Livello';
$lang['Administrator'] = 'Amministratore';
$lang['Moderator'] = 'Moderatore';
$lang['Registered'] = 'Registrato';
$lang['Email'] = 'Indirizzo e-mail';
$lang['ContactInfo'] = 'Informazioni sul contatto';
$lang['Password'] = 'Password';
$lang['PasswordAgain'] = 'Password (ripeti)';
$lang['EverythingRequired'] = 'Tutti i campi sono obbligatori!';
$lang['RegisteredNotActivated'] = 'Il tuo account %s e\' stato creato. E\' stato inviato un e-mail a %s con le istruzioni su come attivare il tuo account. E\' necessario attivarlo per poter accedere con il tuo account.';
$lang['RegisteredActivated'] = 'Il tuo account %s e\' stato creato. Da adesso puoi accedere.';
$lang['Never'] = 'Mai';
$lang['Member'] = 'Utente';
$lang['RegistrationActivationEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Ti sei registrato con l\'account chiamato [account_name], ma non e\' stato ancora attivato. Per favore clicca sul collegamento che segue per attivare il tuo account:

[activate_link]

o taglia e incolla il collegamento sul tuo browser. Potrai successivamente accedere usando i seguenti nome utente e password:

Nome utente: [account_name]
Password: [password]

Se ti dimentichi la password, puoi richiederne una nuova tramite il collegamento nel modulo di accesso. Grazie per la registrazione!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Questo e\' un forum vuoto. L\'amministratore non ha creato alcun forum.';
$lang['AlreadyActivated'] = 'L\'account con ID %d e\' gia\' stato attivato.';
$lang['Activate'] = 'Attiva';
$lang['Activated'] = 'Il tuo account %s e\' stato (ri)attivato. L\'accesso avverra\' automaticamente.';
$lang['WrongActivationKey'] = 'Non e\' possibile attivare il tuo account con ID %d. La chiave di attivazione e\' sbagliata. Sei sicuro di non aver richiesto una nuova password nel frattempo?';
$lang['RegisterIt'] = 'Puoi crearlo tramite il collegamento \'Registrazione\'.';
$lang['BoardClosed'] = 'Forum chiuso';
$lang['SendpwdEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Hai appena richiesto una nuova password per l\'account [account_name]. Puoi accedere usando questi nome utente e password:

Nome utente: [account_name]
Password: [password]

Se ti dimentichi la password, puoi richiederne una nuova tramite il collegamento nel modulo di accesso.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nuova password';
$lang['SendpwdActivated'] = 'La nuova password dell\'account %s e\' stata mandata a %s. Ora puoi accedere con la nuova password.';
$lang['ForumIndex'] = 'Indice del forum';
$lang['MissingFields'] = 'I seguenti campi sono mancanti o sbagliati: %s.';
$lang['TermsOfUseContent'] = 'Acconsenti che tutti i messaggi che si trovano in questo forum rappresentano le opinioni dei rispettivi autori e non del webmaster di questo sito, degli amministratori o dei moderatori del forum, ad eccezione dei messaggi scritti da loro stessi.

Accetti di non inviare in questo forum contenuti offensivi, osceni o inappropriati o contenuti vietati dalla legge. Facendo questo il tuo account in questo forum verra\' bloccato o cancellato e il tuo provider di servizi internet sara\' avvisato del tuo comportamento. Pertanto, il tuo indirizzo IP viene registrato con ogni singolo messaggio che invii. Sei anche d\'accordo che gli amministratori e i moderatori possono modificare, cancellare, muovere o chiudere i topic quando essi pensano che ce ne sia bisogno.

Tutte le informazioni che invii in questo forum vengono salvate in un sistema di database per accessi futuri. Gli amministratori del forum non divulgheranno queste informazioni senza il tuo permesso o problemi di natura legale. Comunque ne\' il webmaster, ne\' gli amministratori o i moderatori e nemmeno il Team di UseBB possono essere ritenuti responsabili di eventuali informazioni rubate come risultato di un attacco pirata.

Questo forum utilizza cookie per salvare informazioni temporanee nel tuo computer di cui il forum ha bisogno. Inoltre, un cookie puo\' contenere il tuo user ID e la tua password in forma criptata per abilitare l\'accesso automatico nel caso tu voglia che questo avvenga. Se non vuoi che i cookie vengano salvati nel tuo computer, fai riferimento alla guida del tuo browser su come disabilitarli.

Cliccando il pulsante "Accetto", accetti questi termini e condizioni.';
$lang['TermsOfUse'] = 'Condizioni d\'uso';
$lang['RegistrationActivationEmailSubject'] = 'Attivazione dell\'Account';
$lang['NeedToBeLoggedIn'] = 'Hai bisogno di accedere per fare questo. Clicca sul collegamento \'Accedi\' per accedere o \'Registrazione\' per creare un nuovo account.';
$lang['WrongEmail'] = 'Spiacente, ma %s non e\' l\'e-mail corretto relativo all\'account %s. Se non ricordo il tuo indirizzo e-mail, contatta l\'amministratore del forum.';
$lang['Topic'] = 'Topic';
$lang['Author'] = 'Autore';
$lang['Replies'] = 'Risposte';
$lang['Views'] = 'Visite';
$lang['Note'] = 'Nota';
$lang['Hidden'] = 'Nascosto';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Invia un messaggio';
$lang['NoViewableForums'] = 'Non hai i permessi per visualizzare alcun forum con il tuo livello utente. Se non hai effettuato l\'accesso, fallo. Se hai effettuato l\'accesso, probabilmente non dovresti essere qui.';
$lang['Rank'] = 'Rank';
$lang['Location'] = 'Ubicazione';
$lang['Website'] = 'Sito Web';
$lang['Occupation'] = 'Occupazione';
$lang['Interests'] = 'Interessi';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Il tuo indirizzo IP %s e\' stato bloccato in questo forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'URL dell\'Avatar';
$lang['BannedUser'] = 'Account bloccato';
$lang['BannedUserExplain'] = 'Il tuo account %s e\' stato bloccato in questo forum. Il motivo e\':';
$lang['BannedUsername'] = 'Il nome utente %s e\' stato bloccato in questo forum. Per favore scegline un altro.';
$lang['BannedEmail'] = 'L\'indirizzo e-mail %s e\' stato bloccato in questo forum. Per favore scegline un altro.';
$lang['PostsPerDay'] = 'Messaggi al giorno';
$lang['BoardClosedOnlyAdmins'] = 'Solo gli amministratori possono accedere quando il forum e\' chiuso.';
$lang['NoPosts'] = 'Nessun messaggio';
$lang['NoActivetopics'] = 'Questo forum attualmente non ha messaggi attivi.';
$lang['AuthorDate'] = 'Di %s il %s';
$lang['ByAuthor'] = 'Di: %s';
$lang['OnDate'] = 'Il: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Manda un e-mail a %s';
$lang['SendEmail'] = 'Manda un messaggio a %s';
$lang['NoMails'] = 'Questo utente ha scelto di non ricevere e-mail.';
$lang['UserEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. L\'utente [username] ti ha mandato questo messaggio tramite il nostro forum. Segue il testo del messaggio.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Il tuo e-mail a %s e\' stato inviato con successo!';
$lang['To'] = 'A';
$lang['From'] = 'Da';
$lang['Subject'] = 'Titolo';
$lang['Body'] = 'Oggetto';
$lang['Send'] = 'Invia';
$lang['EditProfile'] = 'Modifica il profilo';
$lang['EditOptions'] = 'Modifica le opzioni';
$lang['EditPasswd'] = 'Cambia la password';
$lang['PanelHome'] = 'Home del pannello';
$lang['NewEmailNotActivated'] = 'Il tuo profilo e\' stato modificato con successo. Dato che hai cambiato l\'indirizzo e-mail per il tuo account %s, hai bisogno di riattivarlo. E\' stato inviato un e-mail a %s con le istruzioni su come farlo. Nel frattempo verra\' effettuato il tuo accesso.';
$lang['Required'] = 'Obbligatorio';
$lang['ViewProfile'] = 'Vedi il profilo';
$lang['NewEmailActivationEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Hai da poco modificato l\'indirizzo e-mail del tuo account [account_name], ma non e\' stato ancora riattivato. Per favore clicca sul collegamento che segue per riattivare il tuo account:

[activate_link]

o copia e incolla il collegamento nel tuo browser.

Se hai dimenticato la password, puoi richiederne una nuova tramite il collegamento nel modulo di accesso.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Riattivazione dell\'account';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Informazione sulla sessioe';
$lang['SessionID'] = 'ID della sessione';
$lang['IPAddress'] = 'Indirizzo IP';
$lang['Seconds'] = 'Secondi';
$lang['Updated'] = 'Aggiornato';
$lang['Pages'] = 'Pagine';
$lang['AutoLogin'] = 'Accesso automatico';
$lang['Enabled'] = 'Abilitato';
$lang['Disabled'] = 'Disabilitato';
$lang['Enable'] = 'Abilita';
$lang['Disable'] = 'Disabilita';
$lang['AutoLoginSet'] = 'Il cookie per l\'accesso automatico e\' stato impostato.';
$lang['AutoLoginUnset'] = 'Il cookie per l\'accesso automatico e\' stato disattivato.';
$lang['RegistrationEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Hai da poco registrato un account chiamato [account_name]. Puoi accedere usando questi nome utente e password:

Nome utente: [account_name]
Password: [password]

Se dimentichi la password, puoi richiederne una nuova tramite il collegamento nel modulo di accesso. Grazie per la registrazione!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registrazione dell\'account';
$lang['PublicEmail'] = 'Indirizzo e-mail pubblico';
$lang['PublicLastLogin'] = 'Ultimo orario di accesso pubblico';
$lang['DateFormat'] = 'Formato della data';
$lang['DateFormatHelp'] = 'La sintassi del formato data equivale alla funzione %s in PHP.';
$lang['Again'] = 'Ancora';
$lang['NewPassword'] = 'Nuova password';
$lang['NewPasswordAgain'] = 'Nuova password (ripeti)';
$lang['PasswordEdited'] = 'La tua password e\' stata modificata con successo.';
$lang['DetailedOnlineList'] = 'Elenco online dettagliato';
$lang['Detailed'] = 'Dettaglito';
$lang['OptionsEdited'] = 'Le tue opzioni sono state modificate con successo.';
$lang['ProfileEdited'] = 'Il tuo profilo e\' stato modificato con successo.';
$lang['Started'] = 'Partito';
$lang['Minutes'] = 'Minuti';
$lang['Hours'] = 'Ore';
$lang['Days'] = 'Giorni';
$lang['Weeks'] = 'Settimane';
$lang['TotalTime'] = 'Tempo totale';
$lang['NoTopics'] = 'Questo forum non contiene alcun topic. Puoi crearne uno tu per primo!';
$lang['NotPermitted'] = 'Non hai i permessi sufficienti per farlo. In caso di dubbi, contatta l\'amministratore.';
$lang['Language'] = 'Lingua';
$lang['Template'] = 'Template';
$lang['NoSuchMember'] = 'Il membro %s non esiste piu\' in questo forum.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Questa caratteristica e\' disabilitata dato che questo forum non puo\' impostare o leggere cookie tramite il tuo browser.';
$lang['LogOutConfirm'] = 'Sei sicuro di voler disconnettere l\'account?';
$lang['Cancel'] = 'Cancella';
$lang['Timezone'] = 'Fuso orario';
$lang['DST'] = 'Ora legale';
$lang['Sticky'] = 'Importante';
$lang['PostNewTopic'] = 'Nuovo Topic';
$lang['ForumIsLocked'] = 'Il forum e\' chiuso';
$lang['NoSuchTopic'] = 'Il topic %s non esiste piu\' in questo forum.';
$lang['PostReply'] = 'Rispondi';
$lang['TopicIsLocked'] = 'Il topic e\' chiuso';
$lang['Post'] = 'Invia';
$lang['Edit'] = 'Modifica';
$lang['Delete'] = 'Elimina';
$lang['Quote'] = 'Quota';
$lang['Wrote'] = '%s ha scritto';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Il topic che stai cercando di inviare e\' bloccato. Solo gli utenti autorizzati possono inviare risposte.';
$lang['Content'] = 'Contenuto';
$lang['Options'] = 'Opzioni';
$lang['EnableBBCode'] = 'Abilita il BBCode.';
$lang['EnableSmilies'] = 'Abilita le faccine.';
$lang['EnableSig'] = 'Abilita la firma.';
$lang['EnableHTML'] = 'Abilita l\'HTML.';
$lang['LockTopicAfterPost'] = 'Chiudi il topic dopo l\'invio.';
$lang['Guest'] = 'Ospite';
$lang['BackToPrevious'] = 'Torna alla pagina precedente';
$lang['NoSuchPost'] = 'Il messaggio %s non esiste piu\' in questo forum.';
$lang['UserPostedImage'] = 'Immagine inviata dall\'utente';
$lang['ForumIsLockedExplain'] = 'Questo forum e\' bloccato. Solo gli utenti autorizzati possono inserire nuovi topic.';
$lang['MakeTopicSticky'] = 'Rendi il topic importante.';
$lang['QuickReply'] = 'Risposta veloce';
$lang['ReturnToTopicAfterPosting'] = 'Ritorna al topic dopo l\'invio';
$lang['ModeratorList'] = 'Moderatori: %s.';
$lang['Nobody'] = 'Nessuno';
$lang['DeleteTopic'] = 'Cancella il topic';
$lang['MoveTopic'] = 'Sposta il topic';
$lang['LockTopic'] = 'Chiudi il topic';
$lang['UnlockTopic'] = 'Sblocca il topic';
$lang['MakeSticky'] = 'Rendilo importante';
$lang['ConfirmDeleteTopic'] = 'Sei sicuro di voler cancellare il topic %s nel forum %s? E\' un\'operazione irreversibile!';
$lang['MakeNormalTopic'] = 'Rendi il topic normale';
$lang['OldForum'] = 'Vecchio forum';
$lang['NewForum'] = 'Nuovo forum';
$lang['IAccept'] = 'Accetto';
$lang['IDontAccept'] = 'Non accetto';
$lang['OpenLinksNewWindow'] = 'Apri i collegamenti esterni in una nuova finestra (o scheda)';
$lang['HideAllAvatars'] = 'Nascondi tutti gli avatar';
$lang['HideUserinfo'] = 'Nascondi le informazioni sull\'utente';
$lang['HideAllSignatures'] = 'Nascondi tutte le firme';
$lang['HideFromOnlineList'] = 'Nasconditi dall\'elenco online';
$lang['PageLinks'] = 'Pagina: %s';
$lang['Preview'] = 'Anteprima';
$lang['DeletePost'] = 'Elimina il messaggio';
$lang['ConfirmDeletePost'] = 'Sei sicuro di voler cancellare il messaggio nel topic %s? E\' un\'operazione irreversibile!';
$lang['EditPost'] = 'Modifica il messaggio';
$lang['PostEditInfo'] = 'Ultima modifica di %s il %s.';
$lang['PasswdInfo'] = 'La password puo\' contenere soltanto caratteri alfanumerici e deve avere una lunghezza minima di %d caratteri.';
$lang['SubscribeTopic'] = 'Iscriviti';
$lang['UnsubscribeTopic'] = 'Disiscriviti';
$lang['NewReplyEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Qualcuno ([poster_name]) ha inviato una risposta al topic ("[topic_title]") a cui sei iscritto. Per vedere la risposta, clicca sul collegamento che segue: [topic_link].

Clicca il seguente collegamento se desideri disiscriverti dal topic (richiede l\'accesso): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nuova risposta in "%s"';
$lang['SubscribedTopic'] = 'Ora sei iscritto a questo topic.';
$lang['UnsubscribedTopic'] = 'Non sei piu\' iscritto a questo topic.';
$lang['SubscribeToThisTopic'] = 'Iscritto a questo topic.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Iscrizioni';
$lang['NoSubscribedTopics'] = 'Non sei attualmente iscritto a questo topic.';
$lang['LatestUpdate'] = 'Ultimo aggiornamento';
$lang['Unknown'] = 'Sconosciuto';
$lang['PostingTopic'] = 'Inviando topic in %s';
$lang['PostingReply'] = 'Rispondendo in %s';
$lang['MovingTopic'] = 'Spostando topic %s';
$lang['DeletingTopic'] = 'Eliminando topic %s';
$lang['EditingPost'] = 'Modificando messaggio in %s';
$lang['DeletingPost'] = 'Eliminando messaggio in %s';
$lang['DebugMode'] = 'Modalita\' debug';
$lang['ParseTime'] = 'Durata elaborazione';
$lang['ServerLoad'] = 'Caricamento server';
$lang['TemplateSections'] = 'Sezioni template';
$lang['SQLQueries'] = 'Richieste SQL';
$lang['RealName'] = 'Nome reale';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Amministratori';
$lang['Moderators'] = 'Moderatori';
$lang['TopicReview'] = 'Giudizio topic';
$lang['ViewMorePosts'] = 'Visualizza piu\' messaggi';
$lang['DisplayedName'] = 'Nome visualizzato';
$lang['UsernameInfo'] = 'Un nome utente puo\' contenere solo caratteri alfanumerici, spazi, _ e -.';
$lang['Code'] = 'Codice';
$lang['Img'] = 'Immagine';
$lang['URL'] = 'URL';
$lang['Color'] = 'Colore';
$lang['Size'] = 'Dimensione';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Topic: %s';
$lang['FloodIntervalWarning'] = 'L\'amministratore ha impostato l\'intervallo di invio dei messaggi in %d secondi. Per favore attendi altri %d secondi prima di inviare un altro messaggio.';
$lang['AutoSubscribe'] = 'Iscrizione automatica';
$lang['OnPostingNewTopics'] = 'Alla creazione di un topic';
$lang['OnPostingNewReplies'] = 'All\'invio di una risposta';
$lang['UnsubscribeSelected'] = 'Disiscriviti dai selezionati';
$lang['SelectedTopicsUnsubscribed'] = 'Ti sei disiscritto dai topic selezionati.';
$lang['Birthday'] = 'Data di nascita';
$lang['Age'] = 'Eta\'';
$lang['Month'] = 'Mese';
$lang['Day'] = 'Giorno';
$lang['Year'] = 'Anno';
$lang['PoweredBy'] = '%s funziona grazie a %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Statistiche generali';
$lang['Members'] = 'Utenti';
$lang['TopicsPerDay'] = 'Topic al giorno';
$lang['MembersPerDay'] = 'Utenti al giorno';
$lang['BoardStarted'] = 'Partenza del forum';
$lang['BoardAge'] = 'Eta\' del forum';
$lang['NewestMember'] = 'Ultimo utente';
$lang['MostActiveTopics'] = 'Topic piu\' attivi';
$lang['MostViewedTopics'] = 'Topic piu\' visti';
$lang['PostsPerMember'] = 'Messaggi per utente';
$lang['PostsPerForum'] = 'Messaggi per forum';
$lang['Categories'] = 'Categorie';
$lang['Forums'] = 'Forum';
$lang['TopicsPerMember'] = 'Topic per utente';
$lang['TopicsPerForum'] = 'Topic per forum';
$lang['MostActiveMembers'] = 'Utenti piu\' attivi';
$lang['MostActiveForums'] = 'Forum piu\' attivi';
$lang['DisplayedNameTaken'] = 'Spiacente, %s e\' gia\' stato preso come nome utente o nome visualizzato.';
$lang['SearchKeywords'] = 'Chiavi di ricerca';
$lang['SearchMode'] = 'Tipo di ricerca';
$lang['SearchAuthor'] = 'Cerca per autore';
$lang['SearchForums'] = 'Cerca per forum';
$lang['AllForums'] = 'Tutti i forum';
$lang['NoSearchResults'] = 'Spiacente, nessun risultato trovato con i criteri di ricerca forniti.';
$lang['SearchMembersPosts'] = 'Cerca i messaggi dell\'utente';
$lang['CurrentPage'] = 'Pagina attuale';
$lang['MemberGuestOnline'] = 'Negli ultimi %d minuti, %d utente (%d nascosti) e %d ospite hanno visitato il forum.';
$lang['MembersGuestOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospite hanno visitato il forum.';
$lang['MemberGuestsOnline'] = 'Negli ultimi %d minuti, %d utente (%d nascosti) e %d ospiti hanno visitato il forum.';
$lang['MembersGuestsOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospiti hanno visitato il forum.';
$lang['WhosOnline'] = 'Chi e\' online';
$lang['Done'] = 'Fatto';
$lang['KeywordsExplain'] = 'Qualunque chiave di almeno %d caratteri separate da uno spazio.';
$lang['BCCMyself'] = 'Manda una copia al proprio indirizzo e-mail.';
$lang['Save'] = 'Salva';
$lang['Add'] = 'Aggiungi';
$lang['MarkAllAsRead'] = 'Seleziona tutti come gia\' letti';
$lang['MarkAllAsReadDone'] = 'Tutti i forum e i topic sono ora selezionati come letti.';
$lang['StringTooShort'] = '%s e\' una parola troppo corta, sono obbligatori almeno %d caratteri.';
$lang['StringTooLong'] = '%s e\' una parola troppo lunga, sono permessi al massimo %d caratteri.';
$lang['Upload'] = 'Trasmetti';
$lang['RegistrationsDisabled'] = 'Registrazioni disabilitate';
$lang['PostFormShortcut'] = 'Premi Alt+S (Control+S sui Mac) per inviare velocemente questo modulo.';
$lang['EditThisMember'] = 'Modifica questo utente';
$lang['EmailTaken'] = 'L\'indirizzo e-mail %s e\' gia\' in uso su questo forum. Per favore scegli un altro indirizzo.';
$lang['RegisteredNotActivatedByAdmin'] = 'Il tuo account %s e\' stato creato. Prima che tu possa accedere, l\'amministratore di questo forum deve attivare il tuo account. Per favore attendi un po\' di tempo prima che questo accada.';
$lang['AdminActivationEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Ti sei da poco registrato con un account chiamato [account_name]. L\'amministratore del forum ha bisogno deve ancora attivare il tuo account. Una volta avvenuto, puoi accedere usando i seguenti dati:

Nome utente: [account_name]
Password: [password]

Se dimentichi la password, puoi richiederne una nuova tramite il collegamento nel modulo di accesso. Grazie per la registrazione!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Account in attesa di attivazione';
$lang['NewEmailNotActivatedByAdmin'] = 'Il tuo profilo e\' stato modificato con successo. Dato che hai cambiato l\'indirizzo e-mail del tuo account %s, l\'amministratore di questo forum deve riattivarlo. Nel frattempo verrai disconnesso.';
$lang['NewEmailAdminActivationEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. Hai da poco modificato l\'indirizzo e-mail del tuo account [account_name], ma non e\' ancora stato riattivato. L\'amministratore del forum prima deve riattivarlo. Per favore aspetta un po\' di tempo prima che questo avvenga.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Account in attesa di riattivazione';
$lang['AdminActivatedAccountEmailBody'] = 'Ciao,

Chi ti scrive e\' il software del forum [board_name]. L\'amministratore ha attivato il tuo account [account_name]. Ora sei in grado di accedere al forum.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Account attivato';
$lang['Sort'] = 'Ordina';
$lang['SortBy'] = 'Ordina per';
$lang['SortBy-displayed_name'] = 'Nome utente';
$lang['SortBy-real_name'] = 'Nome reale';
$lang['SortBy-level'] = 'Livello';
$lang['SortBy-rank'] = 'Rank';
$lang['SortBy-regdate'] = 'Registrato';
$lang['SortBy-posts'] = 'Messaggi';
$lang['SortBy-latest_post'] = 'Ultimo messaggio';
$lang['SortBy-topic_title'] = 'Titolo del topic';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Autore';
$lang['SortBy-replies'] = 'Risposte';
$lang['SortBy-views'] = 'Visite';
$lang['SortOrder-asc'] = 'Ascendente';
$lang['SortOrder-desc'] = 'Descendente';
$lang['NoUsersFound'] = 'Nessun utente trovato.';
$lang['SaveConfigManually'] = 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Show results as';
$lang['ShowMode-topics'] = 'Topics';
$lang['ShowMode-posts'] = 'Posts';
$lang['Mode-and'] = 'All keywords (AND)';
$lang['Mode-or'] = 'Any keywords (OR)';
$lang['ExactMatch'] = 'Exact match';
$lang['IncludeGuests'] = 'Include guests';
$lang['Top'] = 'Top';
$lang['Bottom'] = 'Bottom';
$lang['Action'] = 'Action';
$lang['AntiSpamQuestion'] = 'Domanda anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Come misura anti-spam, serve che tu risponda correttamente alla domanda che segue. Verra\' fatta solo una domanda per sessione, mentre registrarsi disabilitera\' questa misura anti-spam. Grazie per la comprensione.';
$lang['Question'] = 'Domanda';
$lang['Answer'] = 'Risposta';
$lang['AntiSpamQuestionMathPlus'] = 'Quanto fa %d piu\' %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Quanto fa %d meno %d?';
$lang['AntiSpamWrongAnswer'] = 'La risposta fornita e\' sbagliata. Per favore scrivi la risposta corretta.';

?>
