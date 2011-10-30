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
$lang['Home'] = 'Startseite';
$lang['YourPanel'] = 'Mein Profil';
$lang['Register'] = 'Registrieren';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Suchen';
$lang['ActiveTopics'] = 'Aktuelle Themen';
$lang['LogIn'] = 'Anmelden';
$lang['LogOut'] = '%s abmelden';
$lang['MemberList'] = 'Mitgliederliste';
$lang['StaffList'] = 'Mitarbeiterliste';
$lang['Statistics'] = 'Statistiken';
$lang['ContactAdmin'] = 'Admin kontaktieren';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Themen';
$lang['Posts'] = 'Beitr&auml;ge';
$lang['LatestPost'] = 'Letzter Beitrag';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Neue Beitr&auml;ge';
$lang['NoNewPosts'] = 'Keine neuen Beitr&auml;ge';
$lang['LockedNewPosts'] = 'Gesperrt (neue Beitr&auml;ge)';
$lang['LockedNoNewPosts'] = 'Gesperrt (keine neuen Beitr&auml;ge)';
$lang['Locked'] = 'Gesperrt';
$lang['LastLogin'] = 'Letzte Anmeldung';
$lang['VariousInfo'] = 'Andere Informationen';
$lang['IndexStats'] = 'Dieses Board enth&auml;lt %d Beitr&auml;ge in %d Themen und hat %d registrierte Mitglieder.';
$lang['NewestMemberExtended'] = 'Ein herzliches Willkommen an unser neuestes Mitglied: %s.';
$lang['Username'] = 'Benutzername';
$lang['CurrentPassword'] = 'Aktuelles Kennwort';
$lang['UserID'] = 'Benutzer-ID';
$lang['NoSuchForum'] = 'Das Forum %s existiert nicht (mehr) in diesem Board !';
$lang['WrongPassword'] = 'Das Kennwort ist nicht korrekt ! Du kannst ein neues Kennwort in der Anmeldemaske anfordern, wenn Du es vergessen hast.';
$lang['Reset'] = 'Zur&uuml;cksetzen';
$lang['SendPassword'] = 'Neues Kennwort anfordern';
$lang['RegisterNewAccount'] = 'Neuen Benutzer registrieren';
$lang['RememberMe'] = 'Angemeldet bleiben';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nein';
$lang['NotActivated'] = 'Der Benutzer %s wurde noch nicht aktiviert. Bitte schaue in Deine Mail, um zu erfahren, wie Du Deinen Benutzer aktivieren kannst.';
$lang['Error'] = 'Fehler';
$lang['Profile'] = 'Profil von %s';
$lang['Level'] = 'Level';
$lang['Administrator'] = 'Administrator';
$lang['Moderator'] = 'Moderator';
$lang['Registered'] = 'Registriert';
$lang['Email'] = 'E-mail Adresse';
$lang['ContactInfo'] = 'Kontakt Informationen';
$lang['Password'] = 'Kennwort';
$lang['PasswordAgain'] = 'Kennwort (Wiederholung)';
$lang['EverythingRequired'] = 'Alle Felder m&uuml;ssen ausgef&uuml;llt sein !';
$lang['RegisteredNotActivated'] = 'Der Benutzer %s wurde angelegt. Eine E-mail mit Hinweisen zur Aktivierung wurde an %s verschickt. Du musst die Aktivierung durchf&uuml;hren, um Dich anmelden zu k&ouml;nnen.';
$lang['RegisteredActivated'] = 'Der Benutzer %s wurde angelegt. Du kannst Dich jetzt anmelden.';
$lang['Never'] = 'Nie';
$lang['Member'] = 'Mitglied';
$lang['RegistrationActivationEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Du hast gerade den Benutzer [account_name] registriert, aber er wurde noch nicht aktiviert. Bitte klicke auf diesen Link, um den Benutzer zu aktivieren:

[activate_link]

oder kopiere ihn in Deinen Browser. Danach kannst Du Dich mit folgenden Nutzerdaten anmelden:

Benutzername: [account_name]
Kennwort: [password]

Falls Du Dein Kennwort vergisst, kannst Du &uuml;ber den Link in der Anmeldemaske ein Neues anfordern. Vielen Dank f&uuml;r Deine Registrierung !

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Dieses Board ist leer. Der Administrator hat noch keine Foren angelegt.';
$lang['AlreadyActivated'] = 'Der Benutzer %d wurde bereits aktiviert.';
$lang['Activate'] = 'Aktivieren';
$lang['Activated'] = 'Dein Benutzer %s wurde aktiviert. Du wirst automatisch angemeldet.';
$lang['WrongActivationKey'] = 'Der Benutzer %d konnte nicht aktiviert werden. Der Aktivierungsschl&uuml;ssel ist falsch. Hast Du evtl. in der Zwischenzeit ein neues Kennwort angefordert ?';
$lang['RegisterIt'] = 'Du kannst es &uuml;ber den \'Registrieren\' Link anlegen.';
$lang['BoardClosed'] = 'Dieses Board is geschlossen.';
$lang['SendpwdEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware des [board_name]. Du hast ein neues Kennwort f&uuml;r den Benutzer [account_name] angefordert. Du kannst Dich mit folgenden Nutzerdaten anmelden:

Benutzername: [account_name]
Kennwort: [password]

Falls Du Dein Kennwort vergisst, kannst Du &uuml;ber den Link in der Anmeldemaske ein Neues anfordern. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Neues Kennwort';
$lang['SendpwdActivated'] = 'Das neue Kennwort f&uuml;r den Benutzer %s wurde an %s versendet. Du kannst Dich jetzt mit dem neuen Kennwort anmelden.';
$lang['ForumIndex'] = 'Forum Index';
$lang['MissingFields'] = 'Die folgenden erforderlichen Felder fehlen oder sind fehlerhaft: %s.';
$lang['TermsOfUseContent'] = 'Du erkennst an, dass alle Beitr&auml;ge die Meinung ihres Autors und nicht die des Webmasters, Forumadministrators oder Moderators sind. Ausgenommen nat&uuml;rlich die Beitr&auml;ge, die sie selber geschrieben haben.

Du stimmst zu, keine Beitr&auml;ge zu schreiben, die beleidigend, angreifend, obsz&ouml;n, unangemessen oder gesetzlich verboten sind. Solltest Du trotzdem solche Beitr&auml;ge verfassen, kann Dein Benutzer gesperrt oder gel&ouml;scht und Dein Internetprovider &uuml;ber Dein Verhalten informiert werden. Aus diesem Grund wird Deine IP-Adresse mit jedem verfassten Beitrag gespeichert. Du stimmst auch zu, das Administratoren und Moderatoren Deine Beitr&auml;ge bearbeiten, l&ouml;schen, verschieben oder sperren d&uuml;rfen, wenn sie der Meinung sind, dass dies notwendig ist.

Alles, was Du in diesen Foren schreibst, wird f&uuml;r die sp&auml;tere Verwendung in einer Datenbank gespeichert. Der Administrator wird den Inhalt nicht ohne Deine Erlaubnis weitergeben, es sei denn, dies ist aus rechtlichen Gr&uuml;nden erforderlich. Der Webmaster, die Administratoren, die Moderatoren und das UseBB-Team k&ouml;nnen nicht daf&uuml;r zur Verantwortung gezogen werden, wenn durch einen Hackerangriff Informationen entwendet werden.

Dieses Board verwendet Cookies um tempor&auml;re Informationen auf Deinem Computer zu speichern. Ein Cookie kann auch Deine Benutzerdaten in verschl&uuml;sselter Form enthalten, um die automatische Anmeldung zu erm&ouml;glichen. Wenn keine Cookies auf Deinem Computer gespeichert werden sollen, schaue bitte in das Handbuch Deines Browser, wie Du sie deaktivieren kannst.

Durch den Klick auf den "Akzeptieren"-Knopf, stimmst Du diesen Nutzungsbedingungen zu.';
$lang['TermsOfUse'] = 'Nutzungsbedingungen';
$lang['RegistrationActivationEmailSubject'] = 'Benutzeraktivierung';
$lang['NeedToBeLoggedIn'] = 'Du musst angemeldet sein, um das zu tun. Klick auf den \'Anmelden\'-Link, um Dich anzumelden, oder \'Registrieren\', um einen neuen Benutzer anzulegen.';
$lang['WrongEmail'] = '%s ist nicht die korrekte E-Mail-Adresse f&uuml;r den Benutzer %s. Falls Du Dich nicht mehr an die E-Mail-Adresse erinnern kannst, kontaktiere bitte den Administrator des Boards.';
$lang['Topic'] = 'Thema';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Antworten';
$lang['Views'] = 'Betrachtet';
$lang['Note'] = 'Hinweis';
$lang['Hidden'] = 'Versteckt';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Nachricht senden';
$lang['NoViewableForums'] = 'Mit Deinem Userlevel darfst Du keine Foren lesen. Wenn Du noch nicht angemeldet bist, tu das jetzt. Wenn Du schon angemeldet bist, solltest Du evtl. nicht hier sein.';
$lang['Rank'] = 'Rang';
$lang['Location'] = 'Ort';
$lang['Website'] = 'Website';
$lang['Occupation'] = 'Beruf';
$lang['Interests'] = 'Interessen';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Deine IP-Adresse %s wurde gesperrt.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Gesperrter Benutzer';
$lang['BannedUserExplain'] = 'Dein Benutzer %s wurde gesperrt. Grund:';
$lang['BannedUsername'] = 'Dein Benutzer %s wurde gesperrt. Bitte benutze einen anderen Benutzer.';
$lang['BannedEmail'] = 'Die E-Mail-Adresse %s wurde gesperrt. Bitte benutze eine andere Adresse.';
$lang['PostsPerDay'] = 'Beitr&auml;ge pro Tag';
$lang['BoardClosedOnlyAdmins'] = 'Nur Administratoren k&ouml;nnen sich anmelden, solange das Board geschlossen ist.';
$lang['NoPosts'] = 'Keine Beitr&auml;ge';
$lang['NoActivetopics'] = 'In diesem Board gibt es zur Zeit keine aktuellen Themen.';
$lang['AuthorDate'] = 'Von %s am %s';
$lang['ByAuthor'] = 'Von: %s';
$lang['OnDate'] = 'Am: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Sende eine E-Mail an %s';
$lang['SendEmail'] = 'Sende eine Nachricht an %s';
$lang['NoMails'] = 'Diese Benutzer m&ouml;chte keine Mails erhalten.';
$lang['UserEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Der Benutzer [username] hat Dir die Nachricht &uuml;ber unser Board zugeschickt. Der Nachrichteninhalt folgt hier:

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Die E-Mail an %s wurde erfolgreich verschickt !';
$lang['To'] = 'An';
$lang['From'] = 'Von';
$lang['Subject'] = 'Betreff';
$lang['Body'] = 'Text';
$lang['Send'] = 'Senden';
$lang['EditProfile'] = 'Profil bearb.';
$lang['EditOptions'] = 'Optionen bearb.';
$lang['EditPasswd'] = 'Kennwort bearb.';
$lang['PanelHome'] = 'Hauptpanel';
$lang['NewEmailNotActivated'] = 'Dein Profil wurde erfolgreich bearbeitet. Da Du die Mailadresse f&uuml;r Deinen Benutzer %s ge&auml;ndert hast, musst Du ihn erneut aktivieren. Eine entsprechende Anleitung wurde an %s verschickt. Inzwischen wirst Du automatisch abgemeldet.';
$lang['Required'] = 'Erforderlich';
$lang['ViewProfile'] = 'Profil anzeigen';
$lang['NewEmailActivationEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Du hast die E-Mail-Adresse Deines Benutzers [account_name] ge&auml;ndert, aber er wurde noch nicht neu aktiviert.Bitte klicke auf den Link, um den Benutzer wieder zu aktivieren:

[activate_link]

oder kopiere ihn in Deinen Browser.

Falls Du Dein Kennwort vergisst, kannst Du &uuml;ber den Link in der Anmeldemaske ein Neues anfordern.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Benutzer neu aktivieren';
$lang['Signature'] = 'Signatur';
$lang['SessionInfo'] = 'Session Information';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'IP-Adresse';
$lang['Seconds'] = 'Sekunden';
$lang['Updated'] = 'Aktualisiert';
$lang['Pages'] = 'Seiten';
$lang['AutoLogin'] = 'Automatisches Anmelden';
$lang['Enabled'] = 'Aktiviert';
$lang['Disabled'] = 'Deaktiviert';
$lang['Enable'] = 'Aktivieren';
$lang['Disable'] = 'Deaktivieren';
$lang['AutoLoginSet'] = 'Der Cookie f&uuml;r die automatische Anmeldung wurde gesetzt.';
$lang['AutoLoginUnset'] = 'Der Cookie f&uuml;r die automatische Anmeldung wurde gel&ouml;scht.';
$lang['RegistrationEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Du hast gerade den Benutzer [account_name] registriert. Du kannst Dich mit diesen Benutzerdaten anmelden:

Username: [account_name]
Password: [password]

Falls Du Dein Kennwort vergisst, kannst Du &uuml;ber den Link in der Anmeldemaske ein Neues anfordern. Vielen Dank f&uuml;r die Registrierung !

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Benutzerregistrierung';
$lang['PublicEmail'] = '&Ouml;ffentliche E-Mail-Adresse';
$lang['PublicLastLogin'] = '&Ouml;ffentliche letzte Anmeldezeit';
$lang['DateFormat'] = 'Datumsformat';
$lang['DateFormatHelp'] = 'Die Datumssyntax entspricht der PHP-Funktion %s .';
$lang['Again'] = 'Noch einmal';
$lang['NewPassword'] = 'Neues Kennwort';
$lang['NewPasswordAgain'] = 'Neues Kennwort (Wiederholung)';
$lang['PasswordEdited'] = 'Dein Kennwort wurde erfolgreich ge&auml;ndert.';
$lang['DetailedOnlineList'] = 'detailierte Onlineliste';
$lang['Detailed'] = 'Detailiert';
$lang['OptionsEdited'] = 'Deine Einstellungen wurden erfolgreich ge&auml;ndert.';
$lang['ProfileEdited'] = 'Dein Profil wurde erfolgreich ge&auml;ndert.';
$lang['Started'] = 'Gestartet';
$lang['Minutes'] = 'Minuten';
$lang['Hours'] = 'Stunden';
$lang['Days'] = 'Tage';
$lang['Weeks'] = 'Wochen';
$lang['TotalTime'] = 'Gesamtzeit';
$lang['NoTopics'] = 'Dieses Forum enth&auml;lt keine Themen. Du kannst das Erste anlegen !';
$lang['NotPermitted'] = 'Dir fehlen die notwendigen Rechte. Informiere im Zweifelsfall den Administrator.';
$lang['Language'] = 'Sprache';
$lang['Template'] = 'Vorlage';
$lang['NoSuchMember'] = 'Den Benutzer %s gibt es nicht (mehr).';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Diese Funktion steht nicht zur Verf&uuml;gung, da keine Cookies geschrieben oder gelesen werden k&ouml;nnen.';
$lang['LogOutConfirm'] = 'M&ouml;chtest Du Dich wirklich abmelden ?';
$lang['Cancel'] = 'Abbrechen';
$lang['Timezone'] = 'Zeitzone';
$lang['DST'] = 'Sommer/Winterzeit';
$lang['Sticky'] = 'Top';
$lang['PostNewTopic'] = 'Neues Thema';
$lang['ForumIsLocked'] = 'Das Forum ist gesperrt.';
$lang['NoSuchTopic'] = 'Das Thema %s gibt es nicht (mehr).';
$lang['PostReply'] = 'Antwort erstellen';
$lang['TopicIsLocked'] = 'Das Thema ist gesperrt';
$lang['Post'] = 'Beitrag';
$lang['Edit'] = 'Bearbeiten';
$lang['Delete'] = 'L&ouml;schen';
$lang['Quote'] = 'Zitat';
$lang['Wrote'] = '%s schrieb';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Das Thema ist gesperrt. Nur berechtigte Personen k&ouml;nnen noch Antworten schreiben.';
$lang['Content'] = 'Inhalt';
$lang['Options'] = 'Optionen';
$lang['EnableBBCode'] = 'BBCode aktivieren.';
$lang['EnableSmilies'] = 'Smilies aktivieren.';
$lang['EnableSig'] = 'Signatur aktivieren.';
$lang['EnableHTML'] = 'HTML aktivieren.';
$lang['LockTopicAfterPost'] = 'Thema nach dem Schreiben sperren.';
$lang['Guest'] = 'Gast';
$lang['BackToPrevious'] = 'Zur&uuml;ck zur vorhergehenden Seite';
$lang['NoSuchPost'] = 'Den Beitrag %s gibt es nicht (mehr).';
$lang['UserPostedImage'] = 'Benutzer&uuml;bermitteltes Bild';
$lang['ForumIsLockedExplain'] = 'Dieses Forum ist gesperrt. Nur berechtigte Personen k&ouml;nnen noch Antworten schreiben.';
$lang['MakeTopicSticky'] = 'Top-Thema.';
$lang['QuickReply'] = 'Direkt antworten';
$lang['ReturnToTopicAfterPosting'] = 'Nach dem Schreiben zur&uuml;ck zum Thema';
$lang['ModeratorList'] = 'Moderatoren: %s.';
$lang['Nobody'] = 'Niemand';
$lang['DeleteTopic'] = 'Thema l&ouml;schen';
$lang['MoveTopic'] = 'Thema verschieben';
$lang['LockTopic'] = 'Thema sperren';
$lang['UnlockTopic'] = 'Thema entsperren';
$lang['MakeSticky'] = 'Top-Thema';
$lang['ConfirmDeleteTopic'] = 'M&ouml;chtest Du das Thema %s im Forum %s wirklich l&ouml;schen ? Das kann nicht r&uuml;ckg&auml;ngig gemacht werden !';
$lang['MakeNormalTopic'] = 'Normales Thema';
$lang['OldForum'] = 'Altes Forum';
$lang['NewForum'] = 'Neues Forum';
$lang['IAccept'] = 'Akzeptieren';
$lang['IDontAccept'] = 'Nicht akzeptieren';
$lang['OpenLinksNewWindow'] = 'Externe Links in neuem Fenster &ouml;ffnen';
$lang['HideAllAvatars'] = 'Keine Avatare anzeigen';
$lang['HideUserinfo'] = 'Keine Benutzerinformationen anzeigen';
$lang['HideAllSignatures'] = 'Keine Signaturen anzeigen';
$lang['HideFromOnlineList'] = 'Nicht in der Onlineliste anzeigen';
$lang['PageLinks'] = 'Seite: %s';
$lang['Preview'] = 'Vorschau';
$lang['DeletePost'] = 'Beitrag l&ouml;schen';
$lang['ConfirmDeletePost'] = 'M&ouml;chtest Du wirklich diesen Eintrag im Thema %s l&ouml;schen ? Das kann nicht r&uuml;ckg&auml;ngig gemacht werden !';
$lang['EditPost'] = 'Eintrag bearbeiten';
$lang['PostEditInfo'] = 'Zuletzt durch %s am %s bearbeitet.';
$lang['PasswdInfoNew'] = 'Das Kennwort darf nur alphanumerische Zeichen und Symbole enthalten. Aus Sicherheitsgruenden muss es mindestens einen Buchstaben und eine Zahl enthalten und mindestens %d Zeichen lang sein.';
$lang['PasswdInfo'] = $lang['PasswdInfoNew']; // Keep old key for mods etc.
$lang['SubscribeTopic'] = 'Abonnieren';
$lang['UnsubscribeTopic'] = 'nicht mehr Abonnieren';
$lang['NewReplyEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Jemand ([poster_name]) hat eine Antwort zu einem Thema geschrieben, das Du abonniert hast ("[topic_title]"). Klicke auf diesen Link, um die Antwort zu lesen: [topic_link].

Klicke auf diesen Link, um das Thema nicht mehr zu abonnieren (daf&uuml;r musst Du angemeldet sein): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Neue Antwort zu "%s"';
$lang['SubscribedTopic'] = 'Du hast dieses Thema abonniert.';
$lang['UnsubscribedTopic'] = 'Du hast dieses Thema nicht mehr abonniert.';
$lang['SubscribeToThisTopic'] = 'Thema abonnieren.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Abos';
$lang['NoSubscribedTopics'] = 'Du hast momentan keine Themen abonniert.';
$lang['LatestUpdate'] = 'Letzte Aktualisierung';
$lang['Unknown'] = 'Unbekannt';
$lang['PostingTopic'] = 'Thema %s geschrieben';
$lang['PostingReply'] = 'Antwort zu %s geschrieben';
$lang['MovingTopic'] = 'Thema %s verschoben';
$lang['DeletingTopic'] = 'Thema %s gel&ouml;scht';
$lang['EditingPost'] = 'Beitrag %s editiert';
$lang['DeletingPost'] = 'Beitrag %s gel&ouml;scht';
$lang['DebugMode'] = 'Debug-Modus';
$lang['ParseTime'] = 'Parse-Zeit';
$lang['ServerLoad'] = 'Serverauslastung';
$lang['TemplateSections'] = 'Vorlagenbereich';
$lang['SQLQueries'] = 'SQL-Abfragen';
$lang['MemoryUsage'] = 'Speichernutzung';
$lang['MegaByteShort'] = 'MB';
$lang['RealName'] = 'Name';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administratoren';
$lang['Moderators'] = 'Moderatoren';
$lang['TopicReview'] = 'Thema&uuml;bersicht';
$lang['ViewMorePosts'] = 'Mehr Beitr&auml;ge anzeigen';
$lang['DisplayedName'] = 'Anzeigename';
$lang['UsernameInfo'] = 'Ein Benutzername kann nur alphanumerische Zeichen, Leerzeichen, _ und - enthalten.';
$lang['Code'] = 'Code';
$lang['Img'] = 'Bild';
$lang['URL'] = 'URL';
$lang['Color'] = 'Farbe';
$lang['Size'] = 'Gr&ouml;&szlig;e';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Thema: %s';
$lang['FloodIntervalWarning'] = 'Du kannst nur alle %d Sekunden Beitr&auml;ge schreiben. Bitte warte mindestens %d Sekunden, bevor Du die Eingabe nochmal &uuml;bertr&auml;gst.';
$lang['AutoSubscribe'] = 'Automatische abonnieren';
$lang['OnPostingNewTopics'] = 'Beim Schreiben von Themen';
$lang['OnPostingNewReplies'] = 'Beim Schreiben von Antworten';
$lang['UnsubscribeSelected'] = 'Auswahl nicht mehr abonnieren';
$lang['SelectedTopicsUnsubscribed'] = 'Du hast die ausgew&auml;hlten Themen nicht mehr abonniert.';
$lang['Birthday'] = 'Geburtstag';
$lang['Age'] = 'Alter';
$lang['Month'] = 'Monat';
$lang['Day'] = 'Tag';
$lang['Year'] = 'Jahr';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Allgemeine Statistiken';
$lang['Members'] = 'Mitglieder';
$lang['TopicsPerDay'] = 'Themen pro Tag';
$lang['MembersPerDay'] = 'Mitglieder pro Tag';
$lang['BoardStarted'] = 'Board angelegt';
$lang['BoardAge'] = 'Board-Alter';
$lang['NewestMember'] = 'Neuestes Mitglied';
$lang['MostActiveTopics'] = 'Aktuellste Themen';
$lang['MostViewedTopics'] = 'Meistgelesene Themen';
$lang['PostsPerMember'] = 'Beitr&auml;ge pro Mitglied';
$lang['PostsPerForum'] = 'Beitr&auml;ge pro Forum';
$lang['Categories'] = 'Kategorien';
$lang['Forums'] = 'Foren';
$lang['TopicsPerMember'] = 'Themen pro Mitglied';
$lang['TopicsPerForum'] = 'Themen pro Forum';
$lang['MostActiveMembers'] = 'Aktivste Mitglieder';
$lang['MostActiveForums'] = 'Aktivste Foren';
$lang['DisplayedNameTaken'] = '%s wurde bereits als Benutzer- oder Anzeigename vergeben.';
$lang['SearchKeywords'] = 'Suchw&ouml;rter';
$lang['SearchMode'] = 'Suchmodus';
$lang['SearchAuthor'] = 'Autor suchen';
$lang['SearchForums'] = 'Foren durchsuchen';
$lang['AllForums'] = 'Alle Foren';
$lang['NoSearchResults'] = 'Es wurden leider keine Eintr&auml;ge gefunden, die den Kriterien entsprechen.';
$lang['SearchMembersPosts'] = 'Nach Beitr&auml;gen des Benutzers suchen';
$lang['CurrentPage'] = 'Aktuelle Seite';
$lang['MemberGuestOnline'] = 'In den letzten %d Minuten, haben %d Mitglied (%d versteckt) und %d Gast das Forum besucht.';
$lang['MembersGuestOnline'] = 'In den letzten %d Minuten, haben %d Mitglieder (%d versteckt) und %d Gast das Forum besucht.';
$lang['MemberGuestsOnline'] = 'In den letzten %d Minuten, haben %d Mitglied (%d versteckt) und %d G&auml;ste das Forum besucht.';
$lang['MembersGuestsOnline'] = 'In den letzten %d Minuten, haben %d Mitglieder (%d versteckt) und %d G&auml;ste das Forum besucht.';
$lang['WhosOnline'] = 'Onlineliste';
$lang['Done'] = 'Erledigt';
$lang['KeywordsExplain'] = 'Alle W&ouml;rter mit mindestens %d Zeichen und durch Leerzeichen getrennt.';
$lang['BCCMyself'] = 'Kopie an die eigene Mailadresse senden.';
$lang['Save'] = 'Speichern';
$lang['Add'] = 'Hinzuf&uuml;gen';
$lang['MarkAllAsRead'] = 'Alles als gelesen markieren';
$lang['MarkAllAsReadDone'] = 'Alle Foren und Themen wurden als gelesen markiert.';
$lang['StringTooShort'] = '%s ist zu kurz, mindestens %d Zeichen sind erforderlich.';
$lang['StringTooLong'] = '%s ist zu lang, es sind nur %d Zeichen erlaubt.';
$lang['Upload'] = 'Hochladen';
$lang['RegistrationsDisabled'] = 'keine Registrierung mehr m&ouml;glich';
$lang['PostFormShortcut'] = 'Dr&uuml;cke Alt+S (Control+S unter Mac OS), um die Daten zu &uuml;bertragen.';
$lang['EditThisMember'] = 'Dieses Mitglied bearbeiten';
$lang['EmailTaken'] = 'Die E-Mail-Adresse %s wird bereits benutzt. Bitte w&auml;hle eine andere Adresse.';
$lang['RegisteredNotActivatedByAdmin'] = 'Dein Benutzer %s wurde angelegt. Du kannst Dich erst anmelden, wenn der Administrator Deinen Benutzer freigeschaltet hat.';
$lang['AdminActivationEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Du hast gerade den Benutzer [account_name] registriert. Der Administrator des Forums muss Dich aber noch freischalten. Danach kannst Du Dich mit folgende Benutzerdaten anmelden:

Benutzername: [account_name]
Kennwort: [password]

Falls Du Dein Kennwort vergisst, kannst Du &uuml;ber den Link in der Anmeldemaske ein Neues anfordern. Vielen Dank f&uuml;r die Registrierung !

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Benutzer muss noch freigeschaltet werden';
$lang['NewEmailNotActivatedByAdmin'] = 'Dein Profil wurde erfolgreich ge&auml;ndert. Da Du die Mailadresse Deines Benutzers %s ge&auml;ndert hast, muss der Administrator Dich erneut freischalten. Bis dahin wirst Du abgemeldet.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Du hast die E-Mail-Adresse Deines Benutzers [account_name] ge&auml;ndert, aber Du wurdest noch nicht wieder freigeschaltet. Der Administrator wird Deinen Benutzer in K&uuml;rze wieder aktivieren.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Benutzer muss erneut freigeschaltet werden';
$lang['AdminActivatedAccountEmailBody'] = 'Hallo,

diese Mail kommt von der Forensoftware von [board_name]. Der Administrator hat Deinen Benutzer [account_name] freigeschaltet. Du kannst Dich jetzt anmelden.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Benutzer freigeschaltet';
$lang['Sort'] = 'Sortierung';
$lang['SortBy'] = 'Sortieren nach';
$lang['SortBy-displayed_name'] = 'Benutzername';
$lang['SortBy-real_name'] = 'Name';
$lang['SortBy-level'] = 'Level';
$lang['SortBy-rank'] = 'Rang';
$lang['SortBy-regdate'] = 'Registrierungsdatum';
$lang['SortBy-posts'] = 'Beitr&auml;gen';
$lang['SortBy-latest_post'] = 'letzter Beitrag';
$lang['SortBy-topic_title'] = 'Thementitel';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Antworten';
$lang['SortBy-views'] = 'Lesezugriffen';
$lang['SortOrder-asc'] = 'Aufsteigend';
$lang['SortOrder-desc'] = 'Absteigend';
$lang['NoUsersFound'] = 'Keine Mitglieder gefunden.';
$lang['SaveConfigManually'] = 'UseBB kann die Konfiguartion nicht speichern, da die config.php nicht geschrieben werden kann. Bitte speichere den folgenden Inhalt in der config.php und lade sie auf den Server hoch.';
$lang['ShowResultsAs'] = 'Anzeigen als';
$lang['ShowMode-topics'] = 'Themen';
$lang['ShowMode-posts'] = 'Beitr&auml;ge';
$lang['Mode-and'] = 'Alle W&ouml;rter (AND)';
$lang['Mode-or'] = 'Beliebiges Wort (OR)';
$lang['ExactMatch'] = 'genauer Treffer';
$lang['IncludeGuests'] = 'inkl. G&auml;ste';
$lang['Top'] = 'Oben';
$lang['Bottom'] = 'Unten';
$lang['Action'] = 'Aktion';
$lang['AntiSpamQuestion'] = 'Anti-Spam Frage';
$lang['AntiSpamQuestionInfo'] = 'Zur Spam-Abwehr musst Du die Frage korrekt beantworten, um Zugriff zu diesem Bereich zu bekommen. Pro Sitzung wird nur eine Frage gestellt und die kannst Du durch Deine Registierung umgehen. Vielen Dank f&uuml;r Dein Verst&auml;ndnis.';
$lang['Question'] = 'Frage';
$lang['Answer'] = 'Antwort';
$lang['AntiSpamQuestionMathPlus'] = 'Wieviel ergibt %d plus %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Wieviel ergibt %d minus %d?';
$lang['AntiSpamWrongAnswer'] = 'Die Antwort ist falsch. Bitte beantworte die Frage korrekt, um Zugriff auf diesen Bereich zu bekommen.';
$lang['WrongUsernamePassword'] = 'Die Benutzer(%s)-Kennwort-Kombination ist nicht korrekt. Bitte versuch es nochmal.';
$lang['WrongUsernameEmail'] = 'Die Benutzer(%s)-Adressen-Kombination existiert nicht. Bitte versuch es nochmal.';
$lang['All'] = 'Alle';
$lang['Staff'] = 'Mitarbeiter';
$lang['Guests'] = 'Gaeste';
$lang['ShowOnly'] = 'Zeige nur';
$lang['InvalidFormTokenNotice'] = 'Der Sicherheitstoken ist ungueltig oder abgelaufen.

Erfolgte der Aufruf von einer anderen Webseite, kannst du diese Meldung ignorieren.

Falls du allerdings eine Eingabe im Forum vorgenommen hast, fuehre diese bitte erneut aus.';
$lang['InvalidURLTokenNotice']  = 'Der Sicherheitstoken ist ungueltig oder abgelaufen.

Erfolgte der Aufruf von einer anderen Webseite, kannst du diese Meldung ignorieren.

Ansonsten lade die Seite bitte neu und klicke nochmals auf den Link.';


//************pizzamampf************
$lang['PizzaPollError'] = 'Fehler bei der Abstimmung...';
$lang['PizzaPollNotSaved'] = "Deine Stimme wurde nicht gespeichert !";
$lang['PizzaPollVoteAgain'] = "Bitte w&auml;hle nocheinmal !";
$lang['PizzaPollBackToTopic'] = "Zur&uuml;ck zum Thema";
$lang['PizzaPollNotAnonymous'] = "&ouml;ffentlich";
$lang['PizzaPollAnonymous'] = "anonym";
$lang['PizzaPollChoose'] = "Bitte ausw&auml;hlen...";
$lang['PizzaPollVote'] = "Abstimmen";
$lang['PizzaPollPoll'] = "Umfrage";

$lang['date_translations'] = array(
        'Mon' => 'Mon',
        'Tue' => 'Die',
        'Wed' => 'Mit',
        'Thu' => 'Don',
        'Fri' => 'Fre',
        'Sat' => 'Sam',
        'Sun' => 'Son',
        'Monday' => 'Montag',
        'Tuesday' => 'Dienstag',
        'Wednesday' => 'Mittwoch',
        'Thursday' => 'Donnerstag',
        'Friday' => 'Freitag',
        'Saturday' => 'Samstag',
        'Sunday' => 'Sonntag',
        'Jan' => 'Jan',
        'Feb' => 'Feb',
        'Mar' => 'M&auml;rz',
        'Apr' => 'Apr',
        'May' => 'Mai',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Aug',
        'Sep' => 'Sep',
        'Oct' => 'Okt',
        'Nov' => 'Nov',
        'Dec' => 'Dez',
        'January' => 'Januar',
        'February' => 'Februar',
        'March' => 'M&auml;rz',
        'April' => 'April',
        'May' => 'Mai',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'August',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Dezember',
        'st' => 'ste',
        'nd' => 'te',
        'th' => 'te'
);
//************pizzamampf************

//
// Private Message Center
//
$lang['PmErrorMsg-default'] = 'Es ist ein Fehler aufgetreten. Bitte kontaktiere den Administrator.';
$lang['PmErrorMsg-blank'] = 'Du hast ein Feld nicht ausgefuellt!';
$lang['PmErrorMsg-nomsg'] = 'Du hast keine Nachricht ausgewaehlt';
$lang['PmErrorMsg-nofolder'] = 'Dieser Ordner existiert nicht';
$lang['PmErrorMsg-denied'] = 'Diese Funktion darf nur von Mitarbeitern genutzt werden.';
$lang['PmErrorMsg-pmfull'] = 'Diese Mitglieder koennen keine weiteren Nachrichten empfangen, bis sie mehr Speicherplatz erhalten haben.';
$lang['PmMsgContent'] = 'Nachrichteninhalt';
$lang['PmSuccess'] = 'Erfolg';
$lang['PmFolderCreated'] = 'Dein Ordner wurde angelegt.';
$lang['PmNewFolder'] = 'Neuer Ordner';
$lang['PmNoCustomFolders'] = 'Du hast keine eigenen Ordner.';
$lang['PmCustomFolders'] = 'Eigene Ordner';
$lang['PmCreateNewMsg'] = 'Neue Nachricht';
$lang['PmInbox'] = 'Eingang';
$lang['PmOutbox'] = 'Ausgang';
$lang['PmOutboxEx'] = 'Dein Ausgang besteht aus Nachrichten, die vom Empfaenger noch nicht gelesen wurden.';
$lang['PmMsgMoved'] = 'Die Nachricht wurde verschoben.';
$lang['PmMsgMoveTo'] = 'Verschieben nach...';
$lang['PmFolder'] = 'Ordner';
$lang['PmFolderNoExist'] = 'Der Ordner existiert nicht.';
$lang['PmMoreFolders'] = 'Mehr...';
$lang['PmMsgDate'] = 'Datum';
$lang['PmMsgReply'] = 'Antworten';
$lang['PmNewMsg'] = 'Neue Nachricht';
$lang['PmMessageSent'] = 'Die Nachricht wurde erfolgreich gesendet an ';
$lang['PmMessageSentTitle'] = 'Nachricht gesendet';
$lang['PmDescription'] = 'Beschreibung';
$lang['PmName'] = 'Name';
$lang['PmOutboxDescr'] = 'Das ist der Ausgangsordner. Er kann nicht geloescht werden.';
$lang['PmInboxDescr'] = 'Das ist der Hauptordner. Er kann nicht geloescht werden.';
$lang['PmFolders'] = 'Ordner';
$lang['PmMsgDeleted'] = 'Die Nachricht wurde geloescht';
$lang['PmMsgMovedYes'] = 'Die Nachricht wurde verschoben.';
$lang['PmMoveMsgTo'] = 'Verschiebe Nachricht nach...';
$lang['PmCustomFolders'] = 'Eigene Ordner';
$lang['PmPrivateMsg'] = 'Private Nachrichten';
$lang['PmPrivateMsgCenter'] = 'Privates Nachrichtencenter';
$lang['PmFolderDeleted'] = 'Der Ordner wurde mit allen enthaltenen Nachrichten geloescht.';
$lang['PmWarning'] = 'Warnung!';
$lang['PmFolderDeleteNotice'] = 'Wenn du diesen Ordner loescht, werden auch alle enthaltenen Nachrichten entfernt. Klicke den Link, um fortzufahren.';
$lang['PmContinue'] = 'Fortfahren...';
$lang['PmFolderEdited'] = 'Dein Ordner wurde geaendert.';
$lang['PmEditFolder'] = 'Ordner bearbeiten';
$lang['PmOnline-reading'] = 'Lies eine <a href="panel.php?act=pm">private Nachricht</a>.';
$lang['PmOnline-sending'] = 'Sende eine <a href="panel.php?act=pm">private Nachricht</a>.';
$lang['PmOnline-default'] = '<a href="panel.php?act=pm">Privates Nachrichtencenter</a>';
$lang['PmHeaderLink'] = 'Private Nachricht';
$lang['RemoveFromOutbox'] = 'Aus dem Ausgangsordner loeschen';
$lang['PmErrorMsg-noreplyid'] = 'Die Nachricht, auf die du antworten moechtest, existiert nicht';
$lang['PmNoMsgsFound'] = 'Dieser Ordner enthaelt keine Nachrichten.';
$lang['PmMsgRemovedOutbox'] = 'Nachricht wurde aus dem Ausgangsordner geloescht';
$lang['PmInboxFullMsg'] = 'Dein Nachrichtenspeicher ist VOLL';
$lang['PmInboxAlmostFullMsg'] = 'Dein Nachrichtenspeicher ist FAST VOLL';
$lang['PmEmailNotify'] = 'E-Mail-Benachrichtigung fuer private Nachrichten?';
$lang['PmEmailNotifySubject'] = 'Neue private Nachricht';
$lang['PmEmailNotifyBody'] = 'Hallo,

Hier ist die Forumssoftware [board_name].  Du hast eine neue private Nachricht von [sender_name] erhalten.

Dies ist eine automatisch generierte Nachricht.  Bitte melde dich im [board_name] an, um deine neue private Nachricht anzusehen.
  
  [board_name]
  [board_link]
  [admin_email]';
?>
