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

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'UTF-8'; #'da-iso-8859-1';
$lang['language_code'] = 'da';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Forside';
$lang['YourPanel'] = 'Mit Panel';
$lang['Register'] = 'Registrer';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'S&oslash;g';
$lang['ActiveTopics'] = 'Aktive Emner';
$lang['LogIn'] = 'Log Ind';
$lang['LogOut'] = 'Log ud (%s)';
$lang['MemberList'] = 'Bruger Liste';
$lang['StaffList'] = 'Liste over ansatte';
$lang['Statistics'] = 'Statistiker';
$lang['ContactAdmin'] = 'Kontakt Admin';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Emner';
$lang['Posts'] = 'Indl&aelig;g/Svar';
$lang['LatestPost'] = 'Seneste Indl&aelig;g/Svar';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nye Svar';
$lang['NoNewPosts'] = 'Ingen nye Indl&aelig;g/Svar';
$lang['LockedNewPosts'] = 'L&aring;st (Nye Indl&aelig;g/Svar)';
$lang['LockedNoNewPosts'] = 'L&aring;st (ingen nye Indl&aelig;g/Svar)';
$lang['Locked'] = 'L&aring;st';
$lang['LastLogin'] = 'Sidste login';
$lang['VariousInfo'] = 'Diverse Information';
$lang['IndexStats'] = 'Denne side indeholder %d indl&aelig;g i %d emner og har %d registrerede brugere.';
$lang['NewestMemberExtended'] = 'Velkommen til vores nyeste bruger: %s.';
$lang['Username'] = 'Brugernavn';
$lang['CurrentPassword'] = 'Nuv&aelig;rende adgangskode';
$lang['UserID'] = 'Bruger ID';
$lang['NoSuchForum'] = 'Forummet %s forfindes ikke l&aelig;ngere p&aring; denne side!';
$lang['WrongPassword'] = 'Beklager, men adgagskoden er ikke korrekt! Bestil en ny adgangskode via login formularen hvis du har glemt den.';
$lang['Reset'] = 'Nulstil';
$lang['SendPassword'] = 'Send en ny adgangskode';
$lang['RegisterNewAccount'] = 'Registrer en ny konto';
$lang['RememberMe'] = 'Husk mig';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nej';
$lang['NotActivated'] = 'Din konto %s er ikke blevet aktiveret endnu. Kontroller venligst din mail boks du er registreret med p&aring; dette forum for instruktioner om hvordan du aktiverer din konto.';
$lang['Error'] = 'Fejl';
$lang['Profile'] = 'Profil for %s';
$lang['Level'] = 'Niveau';
$lang['Administrator'] = 'Administrator';
$lang['Moderator'] = 'Modorator';
$lang['Registered'] = 'Registreret';
$lang['Email'] = 'E-mail addresse';
$lang['ContactInfo'] = 'Kontakt Information';
$lang['Password'] = 'Adgangskode';
$lang['PasswordAgain'] = 'Adgangskode (gentag)';
$lang['EverythingRequired'] = 'Alle felter er kr&aelig;vede!';
$lang['RegisteredNotActivated'] = 'Din konto %s er nu blevet oprettet. En e-mail er blevet sendt til %s med instruktioner om hvordan du aktiverer din konto. For at kunne bruge din konto skal du aktiverer den.';
$lang['RegisteredActivated'] = 'Din konto %s er blevet oprettet. Du kan logge p&aring; med det samme.';
$lang['Never'] = 'Aldrig';
$lang['Member'] = 'Bruger';
$lang['RegistrationActivationEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige registreret din konto [account_name], men den er ikke blevet aktiveret endnu. Klik venligst p&aring; linket herunder for at aktiverer din konto:

[activate_link]

eller kopier det ind i din browser. S&aring; kan du logge p&aring; med brugernavn og adgangskode:

Brugernavn: [account_name]
Adgangskode: [password]

Hvis du glemmer din adgangskode, kan du f&aring; tilsendt et nyt via linket p&aring; log ind formularen. Tak for registreringen og p&aring; gensyn!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Dette er en tom side. Administratoren har endnu ikke oprettet et forum.';
$lang['AlreadyActivated'] = 'Konto med ID %d er allerede blevet aktiveret.';
$lang['Activate'] = 'Aktiver';
$lang['Activated'] = 'Din konto %s er nu blevet (gen)aktiveret. Du bliver automatisk logget p&aring;.';
$lang['WrongActivationKey'] = 'Vi var desv&aelig;rre ikke istand til at aktiverer din konto med ID %d. Aktiveringsn&oslash;glen er forkert. Er du sikker p&aring; at du ikke har bedt om en ny adgangskode i mellem tiden?';
$lang['RegisterIt'] = 'Du kan oprette det via linket \'Registrer\'.';
$lang['BoardClosed'] = 'Siden lukket';
$lang['SendpwdEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige bedt om en ny adgangskode til konto [account_name]. Du kan logge p&aring; med brugernavn og adgangskode:

Brugernavn: [account_name]
Adgangskode: [password]

Hvis du glemmer din adgangskode, kan du f&aring; tilsendt et nyt via linket p&aring; log ind formularen.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Ny Adgangskode';
$lang['SendpwdActivated'] = 'Den nye adgangskode til din konto %s er nu blevet sendt til %s. Du kan nu logge p&aring; med din nye adgangskode.';
$lang['ForumIndex'] = 'Forum Indeks';
$lang['MissingFields'] = 'De efterf&oslash;lgende kr&aelig;vede felter mangler eller er forkert udfyldt: %s.';
$lang['TermsOfUseContent'] = 'Du erkender at alle indl&aelig;g fundet i dette forum er meninger af dets forfattere og ikke af sidens webmaster, forum administratorer eller modoratorer, med undtagelse af de indl&aelig;g der er skrevet af en af disse.

Du skal v&aelig;re enig i ikke at skrive noget med forn&aelig;rmende, anst&oslash;deligt, sjofelt eller upassende indhold eller indhold der er forbudt ved lov i disse fora. Sker det alligevel bliver din konto til disse fora udelukket eller fjernet og din internet udbyder vil blive bekendtgjort med din opf&oslash;rsel. Derfor bliver din IP addresse gemt sammen med den enkelte post du oprettet. Du skal ogs&aring; v&aelig;re enig i at administratorerne og modoratorerne har adgang til at rette, slette, flytte eller l&aring;se dine emner hvis de mener det er n&oslash;dvendigt.

Al information du tilf&oslash;jer i disse fora bliver gemt i et database system til fremtidig reference. Sidens administratorere videreformidler ikke disse information uden din tilladelse eller lovm&aelig;ssige forpligtigelser. Imidlertid, kan hverken webmaster, administratorere eller modoratorer ej heller UseBB Teamet blive holdt ansvarlig for at informationer alligevel slipper ud som et resultat af hacking fors&oslash;g.

Denne side bruger cookies til at gemme midlertidige information som bruges af forum systemet p&aring; din lokale computer. Cookie\'en kan ogs&aring; gemme dit bruger ID og din adgangskode i en krypteret form for at kunne bruge automatisk log ind til din konto hvis du har valgt at sl&aring; denne funktion til. Hvis ikke du vil have s&aring;danne cookies gemt p&aring; din computer, bedes du kigge i din browser\'s manual for at frav&aelig;lge cookies.

Ved at klikke p&aring; "Jeg Accepterer" knappen, accepterer du disse vilk&aring;r og betingelser.';
$lang['TermsOfUse'] = 'Bruger vilk&aring;r og betingelser';
$lang['RegistrationActivationEmailSubject'] = 'Konto Aktivering';
$lang['NeedToBeLoggedIn'] = 'Du skal v&aelig;re logget p&aring; for at g&oslash;re dette. Klik p&aring; linket \'Log Ind\' for at logge p&aring; eller \'Registrer\' for at oprette en ny konto.';
$lang['WrongEmail'] = 'Desv&aelig;rre, men %s er ikke den korrekte e-mail addresse til din konto %s. Hvis du ikke kan huske din e-mail addresse, kontakt da venligst forumets administrator.';
$lang['Topic'] = 'Emne';
$lang['Author'] = 'Forfatter';
$lang['Replies'] = 'Besvarelser';
$lang['Views'] = 'Visninger';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Skjult';
$lang['ACP'] = 'Administrations KontrolPanel';
$lang['SendMessage'] = 'Send en meddelelse';
$lang['NoViewableForums'] = 'Du har ikke tilladelse til at se nogen fora med dette bruger niveau. Hvis du ikke er logget p&aring;, s&aring; g&oslash;r det. Hvis du er logget p&aring;, skulle du sandsynligvis ikke v&aelig;re her.';
$lang['Rank'] = 'Rang';
$lang['Location'] = 'Sted';
$lang['Website'] = 'Hjemmeside';
$lang['Occupation'] = 'Besk&aelig;ftigelse';
$lang['Interests'] = 'Interesser';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Din IP addresse %s er blevet udelukket fra dette forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Udelukket konto';
$lang['BannedUserExplain'] = 'Din konto %s er blevet udelukket fra denne side. Grundet:';
$lang['BannedUsername'] = 'Brugernavnet %s er blevet udelukket fra denne side. V&aelig;lg venligst et andet.';
$lang['BannedEmail'] = 'E-mail addressen %s er blevet udelukket fra denne side. V&aelig;lg venligst en anden.';
$lang['PostsPerDay'] = 'Indl&aelig;g/Svar pr dag';
$lang['BoardClosedOnlyAdmins'] = 'Kun administratorer kan logge p&aring; n&aring;r siden er lukket.';
$lang['NoPosts'] = 'Ingen Indl&aelig;g/Svar';
$lang['NoActivetopics'] = 'Denne side har fornuv&aelig;rende ingen aktive emner.';
$lang['AuthorDate'] = 'Af %s d. %s';
$lang['ByAuthor'] = 'Af: %s';
$lang['OnDate'] = 'den: %s';
$lang['Re'] = 'Sv:';
$lang['MailForm'] = 'Send en e-mail til %s';
$lang['SendEmail'] = 'Send en meddelelse til %s';
$lang['NoMails'] = 'Denne bruger har valgt ikke at modtage nogen e-mails.';
$lang['UserEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Brugeren [username] har sendt en meddelelse til dig via vores side. Meddelelsens indhold er som f&oslash;lger.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Din e-mail til %s er blevet sendt!';
$lang['To'] = 'Til';
$lang['From'] = 'Fra';
$lang['Subject'] = 'Emne';
$lang['Body'] = 'indhold';
$lang['Send'] = 'Send';
$lang['EditProfile'] = '&AElig;ndre Profil';
$lang['EditOptions'] = '&AElig;ndre Optioner';
$lang['EditPasswd'] = '&AElig;ndre adgangskode';
$lang['PanelHome'] = 'Panel Forside';
$lang['NewEmailNotActivated'] = 'Din profil er blevet &aelig;ndret vellykket. Fordi du har &aelig;ndret e-mail addressen for din konto %s, skal du genaktiverer den. En e-mail er blevet sendt til %s med instuktioner om hvordan du g&oslash;r det. Du vil blive l&aring;st ude i mellemtiden.';
$lang['Required'] = 'Kr&aelig;vet';
$lang['ViewProfile'] = 'Vis Profil';
$lang['NewEmailActivationEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige &aelig;ndret e-mail addressen p&aring; din konto [account_name], men den er endnu ikke blevet genaktiveret. Klik venligst p&aring; linket herunder for at genaktiverer din konto:

[activate_link]

eller kopier det til din browser.

Hvis du glemmer din adgangskode, kan du f&aring; tilsendt et nyt via linket p&aring; log ind formularen.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Konto Genaktiverion';
$lang['Signature'] = 'Signatur';
$lang['SessionInfo'] = 'Session Information';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'IP addresse';
$lang['Seconds'] = 'Sekunder';
$lang['Updated'] = 'Opdateret';
$lang['Pages'] = 'Sider';
$lang['AutoLogin'] = 'Auto logind';
$lang['Enabled'] = 'Sl&aring;et til';
$lang['Disabled'] = 'Sl&aring;et fra';
$lang['Enable'] = 'Sl&aring; til';
$lang['Disable'] = 'Sl&aring; fra';
$lang['AutoLoginSet'] = 'Auto log ind cookie\'en er nu blevet sat.';
$lang['AutoLoginUnset'] = 'Auto log ind cookie\'en er nu blevet fjernet.';
$lang['RegistrationEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige registreret en konto med navnet [account_name]. Du kan logge p&aring; med bruger navn og adgangskode:

Brugernavn: [account_name]
Adgangskode: [password]

Hvis du glemmer din adgangskode, kan du f&aring; tilsendt et nyt via linket p&aring; log ind formularen. Tak for registreringen og p&aring; gensyn!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Konto Registrering';
$lang['PublicEmail'] = 'Offentligg&oslash;r e-mail addresse';
$lang['PublicLastLogin'] = 'Offentligg&oslash;r Sidste logind tid';
$lang['DateFormat'] = 'Dato format';
$lang['DateFormatHelp'] = 'Dato formatets syntax er den samme som %s funktion i PHP.';
$lang['Again'] = 'Igen';
$lang['NewPassword'] = 'Ny adgangskode';
$lang['NewPasswordAgain'] = 'Ny adgangskode (gentag)';
$lang['PasswordEdited'] = 'Din adgangskode er blevet &aelig;ndtet vellykket.';
$lang['DetailedOnlineList'] = 'Detalieret online liste';
$lang['Detailed'] = 'Detalieret';
$lang['OptionsEdited'] = 'Dine side ops&aelig;tninger er blevet &aelig;ndret vellykket.';
$lang['ProfileEdited'] = 'Din profil er blevet &aelig;ndret vellykket.';
$lang['Started'] = 'Startet';
$lang['Minutes'] = 'Minutter';
$lang['Hours'] = 'Timer';
$lang['Days'] = 'Dage';
$lang['Weeks'] = 'Uger';
$lang['TotalTime'] = 'Total tid';
$lang['NoTopics'] = 'Dette forum indeholder ingen emner. Du kunne jo inds&aelig;tte det f&oslash;rste!';
$lang['NotPermitted'] = 'Du har ikke de korrekte tilladelser til at g&oslash;re dette. Hvis du er i tvivl, kontakt administratoren.';
$lang['Language'] = 'Sprog';
$lang['Template'] = 'Skabelon';
$lang['NoSuchMember'] = 'Brugeren %s eksisterer ikke (l&aelig;ngere) p&aring; denne side.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Denne funktion er sl&aring;et fra fordi denne side kan ikke oprette eller l&aelig;se cookies med din  browser.';
$lang['LogOutConfirm'] = 'Er du sikker p&aring; du vil logge af?';
$lang['Cancel'] = 'Annuller';
$lang['Timezone'] = 'Tidszone';
$lang['DST'] = 'Sommertid';
$lang['Sticky'] = 'fast';
$lang['PostNewTopic'] = 'Nyt Emne';
$lang['ForumIsLocked'] = 'Forum\'et er l&aring;st';
$lang['NoSuchTopic'] = 'Emnet %s eksisterer ikke (l&aelig;ngere) p&aring; denne side.';
$lang['PostReply'] = 'Besvar';
$lang['TopicIsLocked'] = 'Emne er l&aring;st';
$lang['Post'] = 'Indl&aelig;g/Svar';
$lang['Edit'] = 'Rediger';
$lang['Delete'] = 'Slet';
$lang['Quote'] = 'Citat';
$lang['Wrote'] = '%s skrev';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Emnet du pr&oslash;ver at besvarer er l&aring;st. Kun autoriserede personer kan stadig besvarer disse.';
$lang['Content'] = 'Indhold';
$lang['Options'] = 'Optioner';
$lang['EnableBBCode'] = 'Sl&aring; BBCode til.';
$lang['EnableSmilies'] = 'Sl&aring; smilies til.';
$lang['EnableSig'] = 'Sl&aring; signatur til.';
$lang['EnableHTML'] = 'Sl&aring; HTML til.';
$lang['LockTopicAfterPost'] = 'L&aring;s emne efter gem.';
$lang['Guest'] = 'G&aelig;st';
$lang['BackToPrevious'] = 'Tilbage til forrige side';
$lang['NoSuchPost'] = 'Posten %s eksisterer ikke (l&aelig;ngere) p&aring; denne side.';
$lang['UserPostedImage'] = 'Bruger har indsat billede';
$lang['ForumIsLockedExplain'] = 'Dette forum er l&aring;st. Kun autoriseret personer kan oprette nye emner.';
$lang['MakeTopicSticky'] = 'G&oslash;r emnet fast.';
$lang['QuickReply'] = 'Hurtigt svar';
$lang['ReturnToTopicAfterPosting'] = 'Retur til emnet efter gem';
$lang['ModeratorList'] = 'Modoratorer: %s.';
$lang['Nobody'] = 'Ingen';
$lang['DeleteTopic'] = 'Slet emne';
$lang['MoveTopic'] = 'Flyt emne';
$lang['LockTopic'] = 'L&aring;s emne';
$lang['UnlockTopic'] = '&Aring;ben emne';
$lang['MakeSticky'] = 'Omdan til fast emne';
$lang['ConfirmDeleteTopic'] = 'Er du sikket p&aring; du vil slette emnet %s i forummet %s? Kan ikke genoprettes!';
$lang['MakeNormalTopic'] = 'Omdan til almindeligt emne';
$lang['OldForum'] = 'Gammel forum';
$lang['NewForum'] = 'Nyt forum';
$lang['IAccept'] = 'Jeg accepterer';
$lang['IDontAccept'] = 'Jeg accepterer ikke';
$lang['OpenLinksNewWindow'] = '&Aring;ben ekstern links i et nyt vindue';
$lang['HideAllAvatars'] = 'Skjul alle avatars';
$lang['HideUserinfo'] = 'Skjul bruger information';
$lang['HideAllSignatures'] = 'Skjul alle signaturer';
$lang['HideFromOnlineList'] = 'Skjul fra online liste';
$lang['PageLinks'] = 'Side: %s';
$lang['Preview'] = 'Forevis';
$lang['DeletePost'] = 'Slet indl&aelig;g/svar';
$lang['ConfirmDeletePost'] = 'Er du sikker p&aring; at du vil slette dette indl&aelig;g/svar i emnet %s? Ka n ikke genoprettes!';
$lang['EditPost'] = 'Rediger indl&aelig;g/svar';
$lang['PostEditInfo'] = 'Sidst rettet af %s d. %s.';
$lang['PasswdInfo'] = 'Adgangskoden kan kun indeholde alfanumeriske karakterer og har en minimums l&aelig;ngde p&aring; %d karakterer.';
$lang['SubscribeTopic'] = 'abonner';
$lang['UnsubscribeTopic'] = 'Afmeld';
$lang['NewReplyEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. En eller anden ([poster_name]) har svaret p&aring; et emne du abonnerer p&aring; ("[topic_title]"). For at se svaret, klik venligst p&aring; f&oslash;lgende link: [topic_link].

Klik p&aring; f&oslash;lgende link hvis du &oslash;nsker at afmelde dig fra emnet(Kr&aelig;ver login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nyt indl&aelig;g/svar p&aring; "%s"';
$lang['SubscribedTopic'] = 'Du abonnerer nu p&aring; dette emne.';
$lang['UnsubscribedTopic'] = 'Du har ny afmeldt dig fra dette emne.';
$lang['SubscribeToThisTopic'] = 'Abonner p&aring; dette emne.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'abonnementer';
$lang['NoSubscribedTopics'] = 'Du abonnerer i &oslash;jeblikket ikke p&aring; nogen emner.';
$lang['LatestUpdate'] = 'Sidst opdateret';
$lang['Unknown'] = 'Ukendt';
$lang['PostingTopic'] = 'Posterer et emne i %s';
$lang['PostingReply'] = 'Posterer et svar i %s';
$lang['MovingTopic'] = 'Flytter emne %s';
$lang['DeletingTopic'] = 'Sletter emne %s';
$lang['EditingPost'] = 'Redigerer indl&aelig;g/svar til %s';
$lang['DeletingPost'] = 'Sletter indl&aelig;g/svar til %s';
$lang['DebugMode'] = 'Fejlfindings mode';
$lang['ParseTime'] = 'Analysere tid';
$lang['ServerLoad'] = 'Server Indl&aelig;s';
$lang['TemplateSections'] = 'Skabelon sektioner';
$lang['SQLQueries'] = 'SQL foresp&oslash;rgelser';
$lang['RealName'] = 'Rigtige navn';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administratorer';
$lang['Moderators'] = 'Modoratorer';
$lang['TopicReview'] = 'Gennemg&aring; emner';
$lang['ViewMorePosts'] = 'Vis flere indl&aelig;g/svar';
$lang['DisplayedName'] = 'D&aelig;knavn';
$lang['UsernameInfo'] = 'Et brugernavn kan kun indeholde alfanummeriske katakterer, mellemrum, _ og -.';
$lang['Code'] = 'Kode';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Farve';
$lang['Size'] = 'St&oslash;rrelse';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Emne: %s';
$lang['FloodIntervalWarning'] = 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Auto abonner';
$lang['OnPostingNewTopics'] = 'Ved oprettelse af emner';
$lang['OnPostingNewReplies'] = 'Ved oprettelse af besvarelser';
$lang['UnsubscribeSelected'] = 'Afmeld markerede';
$lang['SelectedTopicsUnsubscribed'] = 'Du har nu afmeldt valgte emner.';
$lang['Birthday'] = 'F&oslash;dselsdag';
$lang['Age'] = 'Alder';
$lang['Month'] = 'M&aring;ned';
$lang['Day'] = 'Dag';
$lang['Year'] = '&Aring;r';
$lang['PoweredBy'] = '%s er drevet af %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'General statistik';
$lang['Members'] = 'Brugere';
$lang['TopicsPerDay'] = 'Emner pr dag';
$lang['MembersPerDay'] = 'Brugere pr dag';
$lang['BoardStarted'] = 'Side startet';
$lang['BoardAge'] = 'Side alder';
$lang['NewestMember'] = 'Nyeste bruger';
$lang['MostActiveTopics'] = 'Mest aktive emne';
$lang['MostViewedTopics'] = 'Mest sete emne';
$lang['PostsPerMember'] = 'Indl&aelig;g/Svar pr bruger';
$lang['PostsPerForum'] = 'Indl&aelig;g/Svar pr forum';
$lang['Categories'] = 'Kategorier';
$lang['Forums'] = 'Fora';
$lang['TopicsPerMember'] = 'Emner pr bruger';
$lang['TopicsPerForum'] = 'Emner pr forum';
$lang['MostActiveMembers'] = 'Mest aktive brugere';
$lang['MostActiveForums'] = 'Mest aktive fora';
$lang['DisplayedNameTaken'] = 'Desv&aelig;rre, %s er allerede taget som brugernavn eller viste navn.';
$lang['SearchKeywords'] = 'S&oslash;g n&oslash;gleord';
$lang['SearchMode'] = 'S&oslash;ge mode';
$lang['SearchAuthor'] = 'S&oslash;g forfatter';
$lang['SearchForums'] = 'S&oslash;g fora';
$lang['AllForums'] = 'Alle fora';
$lang['NoSearchResults'] = 'Desv&aelig;rre, din s&oslash;gning gav ingen resultat.';
$lang['SearchMembersPosts'] = 'S&oslash;g  brugerenes indl&aelig;g/svar';
$lang['CurrentPage'] = 'Nuv&aelig;rende side';
$lang['MemberGuestOnline'] = 'Indenfor de sidste %d minutter har, %d bruger (%d skjulte) og %d g&aelig;st bes&oslash;gt foraene.';
$lang['MembersGuestOnline'] = 'Indenfor de sidste %d minutter har, %d brugere (%d skjulte) og %d g&aelig;ster bes&oslash;gt foraene.';
$lang['MemberGuestsOnline'] = 'Indenfor de sidste %d minutter har, %d bruger (%d skjulte) og %d g&aelig;st bes&oslash;gt foraene.';
$lang['MembersGuestsOnline'] = 'Indenfor de sidste %d minutter har, %d brugere (%d skjulte) og %d g&aelig;ster bes&oslash;gt foraene.';
$lang['WhosOnline'] = 'Hvem er Online';
$lang['Done'] = 'F&aelig;rdig';
$lang['KeywordsExplain'] = 'Et hvert n&oslash;gleord p&aring; mindst %d karakterer separaret med mellemrum.';
$lang['BCCMyself'] = 'Send en kopi til min egen e-mail addresse.';
$lang['Save'] = 'Gem';
$lang['Add'] = 'Tilf&oslash;j';
$lang['MarkAllAsRead'] = 'Marker alt som l&aelig;st';
$lang['MarkAllAsReadDone'] = 'Alle fora og emner er nu markeret som l&aelig;st.';
$lang['StringTooShort'] = '%s er for kort, mindst %d karakterer er kr&aelig;vet.';
$lang['StringTooLong'] = '%s er for langt, kun %d karakterer er tilladt.';
$lang['Upload'] = 'Upload';
$lang['RegistrationsDisabled'] = 'Registrering sl&aring;et fra';
$lang['PostFormShortcut'] = 'Tryk Alt+S (Control+S p&aring; Apple) for hurtig send denne formular.';
$lang['EditThisMember'] = 'Rediger denne bruger';
$lang['EmailTaken'] = 'E-mail addressen %s bliver allerede brugt p&aring; denne side. V&aelig;lg venligst en anden adresse.';
$lang['RegisteredNotActivatedByAdmin'] = 'Din konto %s er ny blevet oprettet. Men f&oslash;r du kan logge dig p&aring;, skal administratoren af dette forum aktiverer din konto. Vent venligst et stykke tid s&aring; skal det nok ske.';
$lang['AdminActivationEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige registreret en konto med navnet [account_name]. Administratoren af forummet skal aktiverer din konto. N&aring;r det er sket, kan du logge dig p&aring; med f&oslash;lgende:

Brugernavn: [account_name]
Adgangskode: [password]

Hvis du glemmer din adgangskode, kan du f&aring; tilsendt et nyt via linket p&aring; log ind formularen. Tak for registreringen og p&aring; gensyn!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Kontoen afventer aktivering';
$lang['NewEmailNotActivatedByAdmin'] = 'Din profil er blevet &aelig;ndret vellykket. Foedi du har &aelig;ndret e-mail addressen p&aring; din konto %s, skal administratoren af siden genaktiverer den. Du vil imellemtiden v&aelig;re logget ude.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Du har lige &aelig;ndret e-mail addressen p&aring; din konto [account_name], men den er ikke blevet genaktiveret endnu. Administratoren af siden skal f&oslash;rst genaktiverer din konto. Vent venligst et stykke tid s&aring; skal det nok ske.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Kontoen afventer genaktivering';
$lang['AdminActivatedAccountEmailBody'] = 'Hej,

Dette er en automatisk genereret mail fra [board_name]. Administratoren har aktiveret din konto [account_name]. Du kan nu logge p&aring;.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Konto aktiveret';
$lang['Sort'] = 'Sorter';
$lang['SortBy'] = 'Sorter efter';
$lang['SortBy-displayed_name'] = 'Brugernavn';
$lang['SortBy-real_name'] = 'Rigtige navn';
$lang['SortBy-level'] = 'Niveau';
$lang['SortBy-rank'] = 'Rang';
$lang['SortBy-regdate'] = 'Registreret';
$lang['SortBy-posts'] = 'Indl&aelig;g/Svar';
$lang['SortBy-latest_post'] = 'Sidst oprettet';
$lang['SortBy-topic_title'] = 'Emne titel';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Forfatter';
$lang['SortBy-replies'] = 'Replies';
$lang['SortBy-views'] = 'Visninger';
$lang['SortOrder-asc'] = 'Stigende';
$lang['SortOrder-desc'] = 'Faldende';
$lang['NoUsersFound'] = 'Ingen brugere fundet.';
$lang['SaveConfigManually'] = 'Fordi config.php ikke er skrivebar, kan UseBB ikke gemme konfigurations v&aelig;rdierne selv. Gem venligst f&oslash;lgende indhold i config.php og upload om n&oslash;dvendigt.';
$lang['ShowResultsAs'] = 'Vis resultat som';
$lang['ShowMode-topics'] = 'Emner';
$lang['ShowMode-posts'] = 'Indl&aelig;g/Svar';
$lang['Mode-and'] = 'Alle n&oslash;gleord (OG)';
$lang['Mode-or'] = 'Et hvert n&oslash;gleord (ELLER)';
$lang['ExactMatch'] = 'Fuldst&aelig;dig ens';
$lang['IncludeGuests'] = 'Inkluder g&aelig;ster';
$lang['Top'] = 'Top';
$lang['Bottom'] = 'Bund';
$lang['Action'] = 'Aktion';
$lang['AntiSpamQuestion'] = 'Anti-spam sp&oslash;rgsm&aring;l';
$lang['AntiSpamQuestionInfo'] = 'Som en anti-spam-foranstaltning, skal du besvare dette sp&oslash;rgsmål korrekt for at få adgang til denne del af forum. Der vil kun blive stillet et sp&oslash;rgsm&aring;l pr. session, ved registerede brugere vil det blive sl&aring;et helt fra. Tak for din forst&aring;else.';
$lang['Question'] = 'Sp&oslash;rgsm&aring;l';
$lang['Answer'] = 'Svar';
$lang['AntiSpamQuestionMathPlus'] = 'Hvor meget er %d plus %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Hvor meger er %d minus %d?';
$lang['AntiSpamWrongAnswer'] = 'Det sendte svar er forkert. Udfyld venligst med det korrekte svar for at f&aring; adgang til dette omr&aring;de.';

?>
