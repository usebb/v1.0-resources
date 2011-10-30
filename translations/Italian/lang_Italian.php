<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.130 2007/09/26 15:33:20 pc_freak Exp $
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
$lang['YourPanel'] = 'Il tuo pannello';
$lang['Register'] = 'Registrati';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Cerca';
$lang['ActiveTopics'] = 'Discussioni Attive';
$lang['LogIn'] = 'Login';
$lang['LogOut'] = 'Logout (%s)';
$lang['MemberList'] = 'Lista Iscritti';
$lang['StaffList'] = 'Lista Staff';
$lang['Statistics'] = 'Statistiche';
$lang['ContactAdmin'] = 'Contatta Admin';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Discussioni';
$lang['Posts'] = 'Posts';
$lang['LatestPost'] = 'Ultimo Post';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuovo post';
$lang['NoNewPosts'] = 'Nessun nuovo post';
$lang['LockedNewPosts'] = 'Bloccato (nuovi post)';
$lang['LockedNoNewPosts'] = 'Bloccato (nessun nuovo post)';
$lang['Locked'] = 'Bloccato';
$lang['LastLogin'] = 'Ultimo login';
$lang['VariousInfo'] = 'Informazioni Varie';
$lang['IndexStats'] = 'Questo forum contiene %d posts in %d topics ed ha %d utenti registrati.';
$lang['NewestMemberExtended'] = 'Benvenuto al nostro nuovo utente: %s.';
$lang['Username'] = 'Username';
$lang['CurrentPassword'] = 'Password corrente';
$lang['UserID'] = 'ID Utente';
$lang['NoSuchForum'] = 'Il forum %s non esiste (piu\') in questa board!';
$lang['WrongPassword'] = 'Spiacente, ma la password non e\' corretta! Richiedi una nuova password mediante il form di login se la hai dimenticata.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Invia nuova password';
$lang['RegisterNewAccount'] = 'Registra un nuovo account';
$lang['RememberMe'] = 'Ricordami';
$lang['Yes'] = 'Ok';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Il tuo account %s non e\' stato ancora attivato. Per piacere controlla la tua mail con cui ti sei registrato su questo forum per conoscere le istruzioni su come attivare il tuo account.';
$lang['Error'] = 'Errore';
$lang['Profile'] = 'Profilo di %s';
$lang['Level'] = 'Livello';
$lang['Administrator'] = 'Amministratore';
$lang['Moderator'] = 'Moderatore';
$lang['Registered'] = 'Registrato';
$lang['Email'] = 'Indirizzo e-mail';
$lang['ContactInfo'] = 'Informazioni contatto';
$lang['Password'] = 'Password';
$lang['PasswordAgain'] = 'Password (ripeti)';
$lang['EverythingRequired'] = 'Tutti i campi sono richiesti!';
$lang['RegisteredNotActivated'] = 'Il tuo account %s e\' stato creato. Un e-mail e\' stata spedita a %s con le istruzioni su come attivare il tuo account. Hai bisogno dell\'attivazione per effettuare il login con il tuo account.';
$lang['RegisteredActivated'] = 'Il tuo account %s e\' stato creato. Ora puoi loggarti nel modo giusto.';
$lang['Never'] = 'Mai';
$lang['Member'] = 'Utente';
$lang['RegistrationActivationEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Hai appena registrato l\'account [account_name], ma esso non e\' stato ancora attivato. Per piacere clicca sul link sotto per attivare il tuo account:

[activate_link]

oppure copia e incollalo sul tuo browser. Poi potrai loggarti utilizzando lo username e la password:

Username: [account_name]
Password: [password]

Se hai dimenticato la password, puoi richiederla di nuovo mediante il link nel form di login. Grazie per esserti registrato!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Questo e\' un forum vuoto. L\'amministratore non ha ancora creato nessuna sezione.';
$lang['AlreadyActivated'] = 'L\'account con ID %d e\' stato gia\' attivato.';
$lang['Activate'] = 'Attiva';
$lang['Activated'] = 'Il tuo account %s ora e\' stato (ri)attivato. Il login sara\' effettutato in automatico.';
$lang['WrongActivationKey'] = 'Non siamo riusciti ad attivare il tuo account con ID %d. La chiave di attivazione non e\' corretta. Sei sicuro di non aver richiesto una nuova password allo stesso tempo?';
$lang['RegisterIt'] = 'Puoi crearela mediante il link di \'Registrazione\'.';
$lang['BoardClosed'] = 'Board Chiusa';
$lang['SendpwdEmailBody'] = 'Ciao,

Questo e\' un messaggio software del forum [board_name]. Hai appena richiesto una nuova password per l\'account [account_name]. Potrai loggarti utilizzando lo username e la password:

Username: [account_name]
Password: [password]

Se la hai dimenticata, puoi richiederne una nuova mediante il link al form di login. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nuova password';
$lang['SendpwdActivated'] = 'La nuova password per il tuo account %s e\' stata inviata a %s. Sei ora abilitato a loggarti con la tua nuova password.';
$lang['ForumIndex'] = 'Indice del forum';
$lang['MissingFields'] = 'I seguenti campi richiesti sono mancanti o non corretti: %s.';
$lang['TermsOfUseContent'] = 'Sei consapevole che tutti i post che trovi su questo forum sono le opinioni dei suoi autori e non del webmaster del sito, amministratori o moderatori del forum, ad eccezione dei post scritti da ciascuno di loro.

Accetti di non postare alcun contenuto abusivo, offensivo, osceno o inappropriato o contenuti che sono proibiti dalle regole di questo forum. Cosi\' facendo il tuo account potrebbe essere bannato o rimosso ed il tuo servizio di providere internet eventualmente avvisato dei tuoi comportamenti. Percio\', il tuo indirizzo IP e\' memorizzato su ogni post che scriverai. Sei altresi\' d\'accordo che gli amministratori e moderatori hanno il permesso di modificare, cancellare, spostare o chiudere i tuoi topic qualora essi pensino che sia necessario.

Tutte le informazioni che posti su questo forum sono memorizzate in un database per futuri riferimenti. L\'amministratore non redistribuira\' questa informazione senza il tuo permesso oppure obbligazioni di pubblici legali. In ogni modo, ne il webmaster, ne gli amministratori o moderatori, ne il Team UseBB possono ritenersi responsabili quando alcune informazioni siano state perse a causa di tentativi di hacking.

Questo forum utilizza cookies per memorizzare temporaneamente informazioni necessarie al sistema del forum sul tuo computer locale. In piu\', un cookie puo\' memorizzare il tuo ID utente e la tua password in forma criptata per abilitare login automatici del tuo account se tu scegli di accettare cio\'. Se vuoi che alcun cookie venga memorizzato sul tuo computer, rivolgiti al manuale del tuo browser per disabilitare i cookie.

Cliccando sul pulsante "Io accetto", sei d\'accordo con questi termini e condizioni.';
$lang['TermsOfUse'] = 'Termini di utilizzo';
$lang['RegistrationActivationEmailSubject'] = 'Attivazione Account';
$lang['NeedToBeLoggedIn'] = 'Hai bisogno di loggarti per far cio\'. Clicca sul link di \'Login\' per loggarti oppure \'Registrati\' per creare un nuovo account.';
$lang['WrongEmail'] = 'Siamo spiacenti, ma %s non e\' un indirizzo e-mail corretto per il tuo account %s. Se non ricordi il tuo indirizzo e-mail, per piacere contatta un amministratore.';
$lang['Topic'] = 'Topic';
$lang['Author'] = 'Autore';
$lang['Replies'] = 'Risposte';
$lang['Views'] = 'Visite';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Nascosto';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Invia messaggio';
$lang['NoViewableForums'] = 'Non hai i permessi Non hai i permessi di visualizzare alcun forum con questo livello utente. Se non sei loggato, allora fallo. Se non sei loggato , probabilmente non dovresti essere qui.';
$lang['Rank'] = 'Classificazione';
$lang['Location'] = 'Provenienza';
$lang['Website'] = 'Website';
$lang['Occupation'] = 'Occupazione';
$lang['Interests'] = 'Interessi';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Il tuo indirizzo IP %s e\' stato bannato da questo forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'URL dell\'Avatar';
$lang['BannedUser'] = 'Account Bannato';
$lang['BannedUserExplain'] = 'Il tuo account %s e\' stato bannato da questo forum. Il motivo e\':';
$lang['BannedUsername'] = 'Lo username %s e\' stato bannato da questo forum. Per piacere scegline un\'altro.';
$lang['BannedEmail'] = 'L\'indirizzo e-mail %s e\' stato bannato da questo forum. Per piacere scegline un\'altro.';
$lang['PostsPerDay'] = 'Posts per giorno';
$lang['BoardClosedOnlyAdmins'] = 'Solo l\'amministratore puo\' loggarsi quando il forum e\' chiuso.';
$lang['NoPosts'] = 'Nessun Post';
$lang['NoActivetopics'] = 'Questo forum non ha al momento alcun topic attivo.';
$lang['AuthorDate'] = 'di %s il %s';
$lang['ByAuthor'] = 'di: %s';
$lang['OnDate'] = 'il: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Invia un e-mail a %s';
$lang['SendEmail'] = 'Invia un messaggio a %s';
$lang['NoMails'] = 'Questo utente ha scelto di non ricevere alcuna e-mail.';
$lang['UserEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. L\'utente [username] ti ha inviato questo messaggio mediante il forum. Il messaggio e\' il seguente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'La tua e-mail a %s e\' stata inviata con successo!';
$lang['To'] = 'To';
$lang['From'] = 'From';
$lang['Subject'] = 'Subject';
$lang['Body'] = 'Body';
$lang['Send'] = 'Invia';
$lang['EditProfile'] = 'Modifica Profilo';
$lang['EditOptions'] = 'Modifica Opzioni';
$lang['EditPasswd'] = 'Modifica Password';
$lang['PanelHome'] = 'Panello';
$lang['NewEmailNotActivated'] = 'Il tuo profilo stato modificato con successo. Poiche\' hai cambiato il tuo indirizzo e-mail per il tuo account %s, hai bisogno di riattivarlo. Una e-mail ti e\' stata inviata a %s con le istruzioni su come far cio\'. Allo stesso tempo sara\' effettutato il logout.';
$lang['Required'] = 'Richiesto';
$lang['ViewProfile'] = 'Visualizza Profilo';
$lang['NewEmailActivationEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Hai appena modificato il tuo indirizzo e-mail del tuo account [account_name], ma esso non e\' stato ancora riattivato. Per piacere clicca sul link sotto per riattivare l\'account:

[activate_link]

oppure copia e incollalo sul tuo browser.

Se hai dimenticato la tua password, puoi richiederne una nuova mediante il link al form di login.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Riattivazione Account';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Informazione Sessione';
$lang['SessionID'] = 'ID Sessione';
$lang['IPAddress'] = 'Indirizzo IP';
$lang['Seconds'] = 'Secondi';
$lang['Updated'] = 'Aggiornato';
$lang['Pages'] = 'Pagine';
$lang['AutoLogin'] = 'Auto login';
$lang['Enabled'] = 'Abilitato';
$lang['Disabled'] = 'Disabilitato';
$lang['Enable'] = 'Abilita';
$lang['Disable'] = 'Disabilita';
$lang['AutoLoginSet'] = 'Il cookie di auto login e\' stato ora settato.';
$lang['AutoLoginUnset'] = 'Il cookie di auto login e\' stato ora non settato.';
$lang['RegistrationEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Ti sei appena registrato con l\'account [account_name]. Puoi effettuare il login inserendo username and password:

Username: [account_name]
Password: [password]

Se hai dimenticato la tua password, puoi richiederne una nuova mediante il link al form di login. Grazie di esserti registrato!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registrazione Account';
$lang['PublicEmail'] = 'Indirizzo e-mail pubblico';
$lang['PublicLastLogin'] = 'Pubblica l\'ultima volta che hai effettuato il login';
$lang['DateFormat'] = 'Formato data';
$lang['DateFormatHelp'] = 'La sintassi del formato della data equivale alla funzione %s in PHP.';
$lang['Again'] = 'ripeti';
$lang['NewPassword'] = 'Nuova password';
$lang['NewPasswordAgain'] = 'Nuova password (ripeti)';
$lang['PasswordEdited'] = 'La tua password e\' stata modificata con successo.';
$lang['DetailedOnlineList'] = 'Lista dettagliata utenti online';
$lang['Detailed'] = 'Dettagli';
$lang['OptionsEdited'] = 'Le tue opzioni del forum sono state modificate con successo.';
$lang['ProfileEdited'] = 'Il tuo profilo e\' stato modificato con successo.';
$lang['Started'] = 'Iniziato';
$lang['Minutes'] = 'Minuti';
$lang['Hours'] = 'Ore';
$lang['Days'] = 'Giorni';
$lang['Weeks'] = 'Settimane';
$lang['TotalTime'] = 'Tempo totale';
$lang['NoTopics'] = 'Questo forum non contiene alcun topic. Puoi essere il primo a postare!';
$lang['NotPermitted'] = 'Non hai permessi appropriati per far cio\'. Se sei dubbioso, contatta l\'amministratore.';
$lang['Language'] = 'Linguaggio';
$lang['Template'] = 'Template';
$lang['NoSuchMember'] = 'L\'utente %s non esiste (ancora) su questo forum.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Questa caratteristica e\' disabilitata perche\' questo forum non puo\' settare o leggere cookie con piu\' browser.';
$lang['LogOutConfirm'] = 'Sei sicuro di voler effettuare il logout?';
$lang['Cancel'] = 'Annulla';
$lang['Timezone'] = 'Timezone';
$lang['DST'] = 'Daylight saving times';
$lang['Sticky'] = 'Incolla';
$lang['PostNewTopic'] = 'Nuovo Topic';
$lang['ForumIsLocked'] = 'Il forum e\' bloccato';
$lang['NoSuchTopic'] = 'Il topic %s non esiste (ancora) su questo forum.';
$lang['PostReply'] = 'Post Reply';
$lang['TopicIsLocked'] = 'Il topic e\' bloccato';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Modifica';
$lang['Delete'] = 'Cancella';
$lang['Quote'] = 'Citazione';
$lang['Wrote'] = '%s sbagliato';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Il topic su cui stai provando a postare e\' bloccato. Solo gli autorizzati possono postare risposte.';
$lang['Content'] = 'Contenuto';
$lang['Options'] = 'Opzioni';
$lang['EnableBBCode'] = 'Abilita BBCode.';
$lang['EnableSmilies'] = 'Abilita smilies.';
$lang['EnableSig'] = 'Abilita firma.';
$lang['EnableHTML'] = 'Abilita HTML.';
$lang['LockTopicAfterPost'] = 'Blocca il topic dopo aver postato';
$lang['Guest'] = 'Ospite';
$lang['BackToPrevious'] = 'Indietro alla pagine precedente';
$lang['NoSuchPost'] = 'Il post %s non esiste (ancora) su questo forum.';
$lang['UserPostedImage'] = 'Immagine postata dall\'utente';
$lang['ForumIsLockedExplain'] = 'Questo forum e\' bloccato. Solo gli utenti autorizzati possono postare nuovi topic.';
$lang['MakeTopicSticky'] = 'Incolla topic';
$lang['QuickReply'] = 'Risposta rapida';
$lang['ReturnToTopicAfterPosting'] = 'Ritorna al topic dopo aver postato';
$lang['ModeratorList'] = 'Moderatori: %s.';
$lang['Nobody'] = 'Nessuno';
$lang['DeleteTopic'] = 'Cancella topic';
$lang['MoveTopic'] = 'Sposta topic';
$lang['LockTopic'] = 'Blocca topic';
$lang['UnlockTopic'] = 'Sblocca topic';
$lang['MakeSticky'] = 'Crea Incolla';
$lang['ConfirmDeleteTopic'] = 'Sei sicuro di voler cancellare il topic %s nel forum %s? Questo e\' irreversibile!';
$lang['MakeNormalTopic'] = 'Crea topic normale';
$lang['OldForum'] = 'Vecchio forum';
$lang['NewForum'] = 'Nuovo forum';
$lang['IAccept'] = 'Io accetto';
$lang['IDontAccept'] = 'Io non accetto';
$lang['OpenLinksNewWindow'] = 'Apri link esterni in una nuova finestra';
$lang['HideAllAvatars'] = 'Nasconti tutti gli avatar';
$lang['HideUserinfo'] = 'Nascondi le informazioni utente';
$lang['HideAllSignatures'] = 'Nascondi tutte le firme';
$lang['HideFromOnlineList'] = 'Nascondi dalla lista utenti online';
$lang['PageLinks'] = 'Pagine: %s';
$lang['Preview'] = 'Anteprima';
$lang['DeletePost'] = 'Cancella post';
$lang['ConfirmDeletePost'] = 'Sei sicuro di voler cancellare il post nel topic %s? Questo e\' irreversibile!';
$lang['EditPost'] = 'Modifica post';
$lang['PostEditInfo'] = 'Ultima modifica di %s il %s.';
$lang['PasswdInfo'] = 'La password puo\' contenere solo caratteri alfanumerici e deve avere la lunghezza minima di %d caratteri.';
$lang['SubscribeTopic'] = 'Subscribe';
$lang['UnsubscribeTopic'] = 'Unsubscribe';
$lang['NewReplyEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Qualcuno([poster_name]) ha postato una risposta al topic che hai sottoscritto ("[topic_title]"). Per visualizzare la risposta, clicca per piacere sul seguente link: [topic_link].

Clicca sul seguente link se vuoi cancellarti dal topic (requires login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nuova risposta in "%s"';
$lang['SubscribedTopic'] = 'Se non sei sottoscritto a questo topic.';
$lang['UnsubscribedTopic'] = 'Se non sei unsubscribed da questo topic.';
$lang['SubscribeToThisTopic'] = 'Sottoscrivi a questo topic';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Sottoscrizione';
$lang['NoSubscribedTopics'] = 'Per il momento non sei sottoscritto a nessun topic.';
$lang['LatestUpdate'] = 'Ultimo aggiornamento';
$lang['Unknown'] = 'Sconosciuto';
$lang['PostingTopic'] = 'Postando topic in %s';
$lang['PostingReply'] = 'Postando risposta in %s';
$lang['MovingTopic'] = 'Spostando topic %s';
$lang['DeletingTopic'] = 'Cancellando topic %s';
$lang['EditingPost'] = 'Modificando post in %s';
$lang['DeletingPost'] = 'Cancellando post in %s';
$lang['DebugMode'] = 'Modo di Debug';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Server load';
$lang['TemplateSections'] = 'Sezioni Template';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Nome vero';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Amministratori';
$lang['Moderators'] = 'Moderatori';
$lang['TopicReview'] = 'Visite Topic';
$lang['ViewMorePosts'] = 'Visite con piu\' posts';
$lang['DisplayedName'] = 'Nome visualizzato';
$lang['UsernameInfo'] = 'Uno username puo\' solo contenere caratteri alfanumerici, spazi, _ e -.';
$lang['Code'] = 'Codice';
$lang['Img'] = 'Immagine';
$lang['URL'] = 'URL';
$lang['Color'] = 'Colore';
$lang['Size'] = 'Dimensione';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Topic: %s';
$lang['FloodIntervalWarning'] = 'L\'amministratore ha specificato che puoi postare con un intervallo di %d secondi. Per piacere attendi almeno %d secondi prima di risottomettere la form.';
$lang['AutoSubscribe'] = 'Auto sottoscrizione';
$lang['OnPostingNewTopics'] = 'On posting topics';
$lang['OnPostingNewReplies'] = 'On posting replies';
$lang['UnsubscribeSelected'] = 'Unsubscribe selected';
$lang['SelectedTopicsUnsubscribed'] = 'Sei ora unsuscribed dal topic selezionato.';
$lang['Birthday'] = 'Compleanno';
$lang['Age'] = 'Eta\'';
$lang['Month'] = 'Mese';
$lang['Day'] = 'Giorno';
$lang['Year'] = 'Anno';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Statistiche generali';
$lang['Members'] = 'Utenti';
$lang['TopicsPerDay'] = 'Topics per giorno';
$lang['MembersPerDay'] = 'Utenti per giorno';
$lang['BoardStarted'] = 'Forum creato';
$lang['BoardAge'] = 'Età del forum';
$lang['NewestMember'] = 'Ultimo utente registrato';
$lang['MostActiveTopics'] = 'Topic piu\' attivi';
$lang['MostViewedTopics'] = 'Topic piu\' visitati';
$lang['PostsPerMember'] = 'Posts per utente';
$lang['PostsPerForum'] = 'Posts per forum';
$lang['Categories'] = 'Categorie';
$lang['Forums'] = 'Discussioni';
$lang['TopicsPerMember'] = 'Topics per utente';
$lang['TopicsPerForum'] = 'Topics per forum';
$lang['MostActiveMembers'] = 'Utenti piu\' attivi';
$lang['MostActiveForums'] = 'Sezioni piu\' attive';
$lang['DisplayedNameTaken'] = 'Siamo spiacenti, %s il login name o nome visualizzato e\' stato gia\' preso.';
$lang['SearchKeywords'] = 'Chiave ricerca';
$lang['SearchMode'] = 'Modo ricerca';
$lang['SearchAuthor'] = 'Ricerca autore';
$lang['SearchForums'] = 'Ricerca forums';
$lang['AllForums'] = 'Tutti i forums';
$lang['NoSearchResults'] = 'Siamo spiacenti, na nessun risultato e\' stato trovato con il criterio da te fornito.';
$lang['SearchMembersPosts'] = 'Ricerca post di utenti';
$lang['CurrentPage'] = 'Pagina corrente';
$lang['MemberGuestOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospiti hanno visitato il forum.';
$lang['MembersGuestOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospiti hanno visitato il forum';
$lang['MemberGuestsOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospiti hanno visitato il forum.';
$lang['MembersGuestsOnline'] = 'Negli ultimi %d minuti, %d utenti (%d nascosti) e %d ospiti hanno visitato il forum.';
$lang['WhosOnline'] = 'Chi e\' Online';
$lang['Done'] = 'Fatto';
$lang['KeywordsExplain'] = 'Qualche chiave di almeno %d caratteri separati da spazi.';
$lang['BCCMyself'] = 'Invia una copia al mio indirizzo e-mail.';
$lang['Save'] = 'Salva';
$lang['Add'] = 'Aggiungi';
$lang['MarkAllAsRead'] = 'Marca tutti come letti';
$lang['MarkAllAsReadDone'] = 'Tutti i forums e topics sono ora marcati come letti.';
$lang['StringTooShort'] = '%s e\' troppo corta, almeno %d caratteri sono richiesti.';
$lang['StringTooLong'] = '%s e\' troppo corta, solo %d caratteri sono permessi.';
$lang['Upload'] = 'Carica';
$lang['RegistrationsDisabled'] = 'Registrazione disabilitata';
$lang['PostFormShortcut'] = 'Premi Alt+S (Control+S su Apple) per invio veloce di questo form.';
$lang['EditThisMember'] = 'Modifica questo utente';
$lang['EmailTaken'] = 'L\'indirizzo e-mail %s e\' gia\' utilizzato su questo forum. Per piacere scegline un\'altro.';
$lang['RegisteredNotActivatedByAdmin'] = 'Il tuo account %s e\' stato ora creato. Prima di essere abilitato al login, l\'amministratore di questo forum deve attivare il tuo account. Per piacere permetti che accada cio\' qualche volta.';
$lang['AdminActivationEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Ti sei appena registrato con l\'account [account_name]. L\'amministratore del forum ha ancora bisogno di attivare il tuo account. Quando avverra\' cio\', potrai effettuare il login con:

Username: [account_name]
Password: [password]

Se hai dimenticato la password, ne puoi richiedere una nuova mediante il link al form di login. Grazie per esserti registrato!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Account in attesa di attivazione';
$lang['NewEmailNotActivatedByAdmin'] = 'Il tuo profilo e\' stato modificato con successo. Poiche\' hai cambiato indirizzo e-mail per il tuo account %s, l\'amministratore di questo forum necessita di riattivarti. Allo stesso tempo effettuerai il logout.';
$lang['NewEmailAdminActivationEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. Hai appena modificato il tuo indirizzo e-mail del tuo account [account_name], ma esso non e\' stato ancora riattivato. L\'amministratore del forum necessita prima di riattivare il tuo account. Consenti che accada cio\' a volte, per piacere.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Account in attesa di riattivazione';
$lang['AdminActivatedAccountEmailBody'] = 'Salve,

Questo e\' un messaggio software del forum [board_name]. L\'amministratore ha attivato il tuo account [account_name]. Ora puoi effettuare il login.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Account attivato';
$lang['Sort'] = 'Ordina';
$lang['SortBy'] = 'Ordina per';
$lang['SortBy-displayed_name'] = 'Username';
$lang['SortBy-real_name'] = 'Nome vero';
$lang['SortBy-level'] = 'Livello';
$lang['SortBy-rank'] = 'Classificazione';
$lang['SortBy-regdate'] = 'Registrato';
$lang['SortBy-posts'] = 'Posts';
$lang['SortBy-latest_post'] = 'Ultimo post';
$lang['SortBy-topic_title'] = 'Titolo del topic';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Autore';
$lang['SortBy-replies'] = 'Risposte';
$lang['SortBy-views'] = 'Visite';
$lang['SortOrder-asc'] = 'Crescente';
$lang['SortOrder-desc'] = 'Decrescente';
$lang['NoUsersFound'] = 'Nessun utente e\' stato trovato.';
$lang['SaveConfigManually'] = 'Poiche\' config.php non e\' scrivibile, UseBB non puo\' salvare la configurazione da solo. Per piacere salva il contenuto seguente nel file config.php e caricalo se necessario.';
$lang['ShowResultsAs'] = 'Mostra risultati come';
$lang['ShowMode-topics'] = 'Topics';
$lang['ShowMode-posts'] = 'Posts';
$lang['Mode-and'] = 'Tutte le chiavi (AND)';
$lang['Mode-or'] = 'Alcune chiavi (OR)';
$lang['ExactMatch'] = 'Esattamente';
$lang['IncludeGuests'] = 'Include ospiti';
$lang['Top'] = 'Top';
$lang['Bottom'] = 'Bottom';
$lang['Action'] = 'Azione';
$lang['AntiSpamQuestion'] = 'Domanda Anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Come misura anti-spam, devi rispondere alla domanda correttamente per poter accedere a questa componente del forum. Solo una domanda per sessione sara\' richiesta, mentre la registrazione sara\' disabilitata completamente. Grazie di aver compreso.';
$lang['Question'] = 'Domanda';
$lang['Answer'] = 'Risposta';
$lang['AntiSpamQuestionMathPlus'] = 'Quanto fa %d piu\' %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Quanto fa %d meno %d?';
$lang['AntiSpamWrongAnswer'] = 'La risposta sottomessa e\' errata. Per piacere riempi con la corretta risposta per accedere alla componente.';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mer',
	'Thu' => 'Gio',
	'Fri' => 'Ven',
	'Sat' => 'Sab',
	'Sun' => 'Dom',
	'Monday' => 'Lunedi\'',
	'Tuesday' => 'Martedi\'',
	'Wednesday' => 'Mercoledi\'',
	'Thursday' => 'Giovedi\'',
	'Friday' => 'Venerdi\'',
	'Saturday' => 'Sabato',
	'Sunday' => 'Domenica',
	'Jan' => 'Gen',
	'Feb' => 'Feb',
	'Mar' => 'Mar',
	'Apr' => 'Apr',
	'May' => 'Mag',
	'Jun' => 'Giu',
	'Jul' => 'Lug',
	'Aug' => 'Ago',
	'Sep' => 'Set',
	'Oct' => 'Ott',
	'Nov' => 'Nov',
	'Dec' => 'Dic',
	'January' => 'Gennaio',
	'February' => 'Febbraio',
	'March' => 'Marzo',
	'April' => 'Aprile',
	'May' => 'Maggio',
	'June' => 'Giugno',
	'July' => 'Luglio',
	'August' => 'Agosto',
	'September' => 'Settembre',
	'October' => 'Ottobre',
	'November' => 'Novembre',
	'December' => 'Dicembre',
);

?>
