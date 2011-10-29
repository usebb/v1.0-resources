<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: lang_Polish.php - 10.05.2011 00:33 pc_freak $
	
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
	
	Wykonano przez: bryan
        Wykonano dla: UseBB.pl - Polskie oficjalne wsparcie Usable Bulletin Board.
        Usuniêcie tego wpisu jest równoznacze ze z³amaniem warunków u¿ytkowania skryptu.
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

//
// Define translations
//

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$lang['date_translations'] = array(
	'Mon' => 'Pon',
	'Tue' => 'Wto',
	'Wed' => '¦r',
	'Thu' => 'Czw',
	'Fri' => 'Pi±',
	'Sat' => 'Sob',
	'Sun' => 'Nie',
	'Monday' => 'maandag',
	'Tuesday' => 'dinsdag',
	'Wednesday' => 'woensdag',
	'Thursday' => 'donderdag',
	'Friday' => 'vrijdag',
	'Saturday' => 'zaterdag',
	'Sunday' => 'zondag',
	'Jan' => 'Styczeñ',
	'Feb' => 'Luty',
	'Mar' => 'Marzec',
	'Apr' => 'Kwiecieñ',
	'May' => 'Maj',
	'Jun' => 'Czerwiec',
	'Jul' => 'Lipiec',
	'Aug' => 'Sierpieñ',
	'Sep' => 'Wrzesieñ',
	'Oct' => 'Pa¼dziernik',
	'Nov' => 'Listopad',
	'Dec' => 'Grudzieñ',
	'January' => 'Styczeñ',
	'February' => 'Luty',
	'March' => 'Marzec',
	'April' => 'Kwiecieñ',
	'May' => 'Maj',
	'June' => 'Czerwiec',
	'July' => 'Lipiec',
	'August' => 'Sierpieñ',
	'September' => 'Wrzesieñ',
	'October' => 'Pa¼dziernik',
	'November' => 'Listopad',
	'December' => 'Grudzieñ',
	'st' => 'ste',
	'nd' => 'de',
	'th' => 'de'
);

$lang['Home'] = 'Strona g³ówna';
$lang['Rules'] = 'Regulamin';
$lang['YourPanel'] = 'Twój panel';
$lang['Register'] = 'Rejestracja';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Szukaj';
$lang['ActiveTopics'] = 'Aktywne tematy';
$lang['LogIn'] = 'Zaloguj';
$lang['LogOut'] = 'Wyloguj (%s)';
$lang['MemberList'] = 'Lista u¿ytkowników';
$lang['StaffList'] = 'Ekipa';
$lang['Statistics'] = 'Statystyki';
$lang['ContactAdmin'] = 'Kontakt z Adminem';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Tematy';
$lang['Posts'] = 'Posty';
$lang['LatestPost'] = 'Ostatni post';
$lang['RSSFeed'] = 'RSS';
$lang['NewPosts'] = 'Nowe posty';
$lang['NoNewPosts'] = 'Brak nowych postów';
$lang['LockedNewPosts'] = 'Zamkniêty (nowe posty)';
$lang['LockedNoNewPosts'] = 'Zamkniêty (brak nowych postów)';
$lang['Locked'] = 'Zamkniêty';
$lang['LastLogin'] = 'Ostatnie logowanie';
$lang['VariousInfo'] = 'Rozmaite informacje';
$lang['IndexStats'] = 'To forum liczy %d postów w %d tematach oraz posiada %d zarejestrowanych u¿ytkowników.';
$lang['NewestMemberExtended'] = 'Powitajmy najnowszego u¿ytkownika: %s.';
$lang['Username'] = 'Login';
$lang['CurrentPassword'] = 'Aktualne has³o';
$lang['UserID'] = 'ID u¿ytkownika';
$lang['NoSuchForum'] = 'Dzia³ %s ju¿ nie istnieje na tym forum!';
$lang['WrongPassword'] = 'Przepraszamy, Twoje has³o nie jest prawid³owe! U¿yj opcji wys³ania nowego has³a, je¶li je zapomnia³e¶.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Wy¶lij nowe has³o';
$lang['RegisterNewAccount'] = 'Zarejestruj nowe konto';
$lang['RememberMe'] = 'Zapamiêtaj mnie';
$lang['Yes'] = 'Tak';
$lang['No'] = 'Nie';
$lang['NotActivated'] = 'Twoje konto %s nie jest jeszcze aktywne. Proszê sprawd¼ swoj± skrzynkê e-mail, a w nim otrzymasz instrukcje jak aktywowaæ konto.';
$lang['Error'] = 'B³±d';
$lang['Profile'] = 'Profil %s';
$lang['Level'] = 'Poziom';
$lang['Administrator'] = 'Administrator';
$lang['Moderator'] = 'Moderator';
$lang['Registered'] = 'Zarejestrowany';
$lang['Email'] = 'Adres e-mail';
$lang['ContactInfo'] = 'Informacje kontaktowe';
$lang['Password'] = 'Has³o';
$lang['PasswordAgain'] = 'Has³o (ponownie)';
$lang['EverythingRequired'] = 'Wszystkie pozycje s± wymagane!';
$lang['RegisteredNotActivated'] = 'Twoje konto %s zosta³o utworzone. Poczta by³a wysy³ana na e-mail %s z instrukcjami jak aktywowaæ konto. Lecz jeszcze nie zosta³o aktywowane.';
$lang['RegisteredActivated'] = 'Twoje konto %s zosta³o utworzone. Mo¿esz siê zalogowaæ.';
$lang['Never'] = 'Nigdy';
$lang['Member'] = 'U¿ytkownik';
$lang['RegistrationActivationEmailBody'] = 'Witaj,

Na forum [board_name], posiadasz zarejestrowane konto o nazwie [account_name], lecz nie jest jeszcze aktywne. Proszê kliknij w poni¿szy link je¶li chcesz aktywowaæ konto:

[activate_link]

lub skopiuj go do swojej przegl±darki. Wtedy bêdziesz móg³ zalogowaæ siê podaj±c poni¿sze dane:

Login: [account_name]
Has³o: [password]

Je¿eli zgubisz swoje has³o, mo¿esz prosiæ o nowe po przez opcjê "Nowe has³o". Dziêkujê za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Forum jest puste. Administrator nie utworzy³ jeszcze ¿adnego dzia³u.';
$lang['AlreadyActivated'] = 'Konto o ID %d zosta³o aktywowane.';
$lang['Activate'] = 'Aktywacja';
$lang['Activated'] = 'Twoje konto %s zosta³o zreaktywowane. Zostaniesz zalogowany automatycznie.';
$lang['WrongActivationKey'] = 'Nie jeste¶my zdolni do aktywowania Twojego konta o ID %d. Kod aktywacyjny jest nie prawid³owy. Czy jeste¶ pewien ¿e nie prosi³e¶ o nowe has³o?';
$lang['RegisterIt'] = 'Mo¿esz siê zarejestrowaæ klikaj±c na link \'Rejestracja\'.';
$lang['BoardClosed'] = 'Forum zamkniête';
$lang['SendpwdEmailBody'] = 'Witaj,

N forum [board_name], prosi³e¶ o nowe has³o do swojego konta o nazwie [account_name]. Mo¿esz siê zalogowaæ podaj±c poni¿sze dane:

Login: [account_name]
Has³o: [password]

Je¶li zgubisz swoje has³o, mo¿esz prosiæ o nowe po przez opcjê "Nowe Has³o".

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nowe has³o';
$lang['SendpwdActivated'] = 'Nowe has³o dla konta %s zosta³o wys³ane do %s. Mo¿esz siê zalogowaæ u¿ywaj±c nowego has³a.';
$lang['ForumIndex'] = 'Strona g³ówna';
$lang['MissingFields'] = 'Pozycje s± opuszczone lub nieprawid³owo wype³nione: %s.';
$lang['TermsOfUseContent'] = 'Zgadzasz siê nie pisaæ obra¼liwej, nieprzyzwoitej lub niew³a¶ciwej tre¶ci i przestrzegaæ regulaminu forum. Nie przestrzeganie tych zasad mo¿e byæ spowodowane wystawieniem ostrze¿enia przez administratorów b±d¼ moderatorów,
co w konsekwencji mo¿e doprowadziæ do zablokowania konta. Wraz z ka¿d± Twoj± korespondencj± zapisywany jest Twój numer IP. Zgadzasz siê równie¿,
aby administratorzy i moderatorzy mogli redagowaæ, usuwaæ, przesuwaæ lub zamykaæ Twoje tematy. Wszystkie korespondencje jakie zostawiasz na forum s± zapisywane w bazie danych. Aby gromadziæ wszystkie tymczasowe informacje tzn. "ciasteczka" s± zapisywane na twoim komputerze. Ponadto w "ciasteczkach" zaszyfrowane s± takie informacje jak ID u¿ytkownika i has³o w razie gdyby¶ zapomnia³
has³a do Swojego konta.

Klikaj±c na "Akceptuj" zgadzasz siê na powy¿sze warunki.';
$lang['TermsOfUse'] = 'Czas u¿ywania';
$lang['RegistrationActivationEmailSubject'] = 'Aktywacja konta';
$lang['NeedToBeLoggedIn'] = 'Musisz byæ zalogowany. Kliknij na link \'Zaloguj\' aby siê zalogowaæ lub na link \'Rejestracja\' aby utworzyæ nowe konto.';
$lang['WrongEmail'] = 'Przepraszamy, lecz %s nie jest prawid³owym adresem e-mail dla konta %s. Je¶li nie pamiêtasz swojego adresu, proszê skontaktuj siê z Administratorem forum.';
$lang['Topic'] = 'Temat';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Odpowiedzi';
$lang['Views'] = 'Odwiedzin';
$lang['Note'] = 'Notatka';
$lang['Hidden'] = 'Ukryty';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Wy¶lij wiadomo¶æ';
$lang['NoViewableForums'] = 'Nie masz uprawnieñ do ogl±dania forów. Zaloguj siê, lub je¶li nie masz konta, zarejestruj.';
$lang['Rank'] = 'Ranga';
$lang['Location'] = 'Sk±d';
$lang['Website'] = 'Strona WWW';
$lang['Occupation'] = 'Zawód';
$lang['Interests'] = 'Zainteresowania';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'Gadu-Gadu';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Twój adres IP %s zosta³ zbanowany na tym forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Adres avatara';
$lang['BannedUser'] = 'Konto zbanowane';
$lang['BannedUserExplain'] = 'Twoje konto %s jest zbanowane na tym forum. The reason is:';
$lang['BannedUsername'] = 'Login %s jest zbanowany na tym forum. Proszê wybraæ inne.';
$lang['BannedEmail'] = 'Adres e-mail %s jest zbanowany na tym forum. Proszê wybierz inny.';
$lang['PostsPerDay'] = 'Postów dziennie';
$lang['BoardClosedOnlyAdmins'] = 'Tylko Administratorzy mog± siê zalogowaæ na forum poniewa¿ jest zamkniête.';
$lang['NoPosts'] = 'Brak postów';
$lang['NoActivetopics'] = 'To forum nie posiada ¿adnych aktywnych tematów.';
$lang['AuthorDate'] = 'Przez %s w %s';
$lang['ByAuthor'] = 'Przez: %s';
$lang['OnDate'] = 'W: %s';
$lang['Re'] = 'Od:';
$lang['MailForm'] = 'Wy¶lij e-mail do %s';
$lang['SendEmail'] = 'Wy¶lij wiadomo¶æ do %s';
$lang['NoMails'] = 'Ten u¿ytkownik nie chce by przychodzi³y do niego e-maile.';
$lang['UserEmailBody'] = 'Witaj,

Na forum [board_name], u¿ytkownik [username] wys³a³ do Ciebie prywatn± wiadomo¶æ.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Twój e-mail do %s zosta³ wys³any prawid³owo!';
$lang['To'] = 'Do';
$lang['From'] = 'Od';
$lang['Subject'] = 'Temat';
$lang['Body'] = 'Budowa';
$lang['Send'] = 'Wy¶lij';
$lang['EditProfile'] = 'Edytuj profil';
$lang['EditOptions'] = 'Edytuj opcje';
$lang['EditPasswd'] = 'Edytuj has³o';
$lang['PanelHome'] = 'Strona g³ówna panelu';
$lang['NewEmailNotActivated'] = 'Twój profil zosta³ zaktualizowany poprawnie. I¿ zmienia³e¶ adres e-mail w swoim koncie %s, potrzebujesz reaktywacja konta. Na Twój e-mail zosta³y wys³ane instrukcje jak aktywowaæ je.';
$lang['Required'] = 'Wymagane';
$lang['ViewProfile'] = 'Zobacz profil';
$lang['NewEmailActivationEmailBody'] = 'Witaj,

Na forum [board_name], zosta³ zmieniony przez Ciebie adres e-mail do konta o nazwie [account_name], lecz jeszcze nie zosta³ zreaktywowany. Kliknij na poni¿szy link aby reaktywowaæ swoje konto:

[activate_link]

lub skopiuj go do swojej przegl±darki.

Je¿eli zgubisz swoje has³o, mo¿esz prosiæ o nowe po przez opcjê "Nowe has³o".

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reaktywacja konta';
$lang['Signature'] = 'Sygnatura';
$lang['SessionInfo'] = 'Informacja o sesji';
$lang['SessionID'] = 'ID Sesji';
$lang['IPAddress'] = 'Adres IP';
$lang['Seconds'] = 'Sekund';
$lang['Updated'] = 'Zaktualizowany';
$lang['Pages'] = 'Stron';
$lang['AutoLogin'] = 'Automatyczne logowanie';
$lang['Enabled'] = 'W³±czone';
$lang['Disabled'] = 'Wy³±czone';
$lang['Enable'] = 'W³±cz';
$lang['Disable'] = 'Wy³±cz';
$lang['AutoLoginSet'] = 'Ciasteczka auto logowania s± umieszczone.';
$lang['AutoLoginUnset'] = 'Ciasteczka auto logowania nie zosta³y umieszczone.';
$lang['RegistrationEmailBody'] = 'Witaj,

Na forum [board_name], zarejestrowa³e¶ konto o nazwie [account_name]. Mo¿esz siê zalogowaæ u¿ywaj±c poni¿szych danych:

Login: [account_name]
Has³o: [password]

Je¿eli zgubisz swoje has³o, mo¿esz prosiæ o nowe po przez opcjê "Nowe has³o". Dziêkujê za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Rejestracja konta';
$lang['PublicEmail'] = 'Publiczny adres e-mail';
$lang['PublicLastLogin'] = 'Publiczne ostatnie logowanie';
$lang['DateFormat'] = 'Format daty';
$lang['DateFormatHelp'] = 'Format daty %s jest taki sam jak funkcja sk³adni w PHP.';
$lang['Again'] = 'Jeszcze raz';
$lang['NewPassword'] = 'Nowe has³o';
$lang['NewPasswordAgain'] = 'Nowe has³o (ponownie)';
$lang['PasswordEdited'] = 'Twoje has³o zosta³o zedytowane poprawnie.';
$lang['DetailedOnlineList'] = 'Detale listy aktywnych u¿ytkowników';
$lang['Detailed'] = 'Detale';
$lang['OptionsEdited'] = 'Twoje forum zosta³o zedytowane poprawnie.';
$lang['ProfileEdited'] = 'Twój profil zosta³ zedytowany poprawnie.';
$lang['Started'] = 'Start';
$lang['Minutes'] = 'Minut/y';
$lang['Hours'] = 'Godzin/y';
$lang['Days'] = 'Dni';
$lang['Weeks'] = 'Tygodnie';
$lang['TotalTime'] = 'Ogólny czas';
$lang['NoTopics'] = 'To forum nie posiada ¿adnych tematów. Stwórz nowy!';
$lang['NotPermitted'] = 'Je¶li nie masz pozwolenia na zrobienie tego, lub je¿eli masz w±tpliwo¶ci, skontaktuj siê z administratorem..';
$lang['Language'] = 'Jêzyk';
$lang['Template'] = 'Styl';
$lang['NoSuchMember'] = 'U¿ytkownik %s ju¿ nie istnieje na forum.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Uruchom ciasteczka w swojej przegl±darce aby zobaczyæ zawarto¶æ.';
$lang['LogOutConfirm'] = 'Czy jeste¶ pewny/a ¿e chcesz siê wylogowaæ?';
$lang['Cancel'] = 'Wyj¶cie';
$lang['Timezone'] = 'Strefa czasowa';
$lang['DST'] = 'Czas zmiany dnia na noc';
$lang['Sticky'] = 'Przyklejony';
$lang['PostNewTopic'] = 'Nowy temat';
$lang['ForumIsLocked'] = 'Forum jest zablokowane';
$lang['NoSuchTopic'] = 'Temat %s ju¿ nie istnieje na forum.';
$lang['PostReply'] = 'Odpowiedz';
$lang['TopicIsLocked'] = 'Temat jest zablokowany';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Edytuj';
$lang['Delete'] = 'Usuñ';
$lang['Quote'] = 'Cytuj';
$lang['Wrote'] = '%s napisa³';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Temat na którym próbujesz napisaæ posta jest zamkniêty. Tylko osoby z uprawnieniami mog± pisaæ nowe posty.';
$lang['Content'] = 'Zawarto¶æ';
$lang['Options'] = 'Opcje';
$lang['EnableBBCode'] = 'W³±cz BBCode.';
$lang['EnableSmilies'] = 'W³±cz emotikony.';
$lang['EnableSig'] = 'W³±cz sygnatury.';
$lang['EnableHTML'] = 'W³±cz HTML.';
$lang['LockTopicAfterPost'] = 'Zablokuj temat po napisaniu posta.';
$lang['Guest'] = 'Go¶æ';
$lang['BackToPrevious'] = 'Powrót do poprzedniej strony';
$lang['NoSuchPost'] = 'Post %s ju¿ nie istnieje na tym forum.';
$lang['UserPostedImage'] = 'U¿ytkownik wys³a³ obrazek';
$lang['ForumIsLockedExplain'] = 'To forum jest zablokowane. Tylko osoby z uprawnieniami mog± tworzyæ nowe tematy.';
$lang['MakeTopicSticky'] = 'Przyklej temat.';
$lang['QuickReply'] = 'Szybka odpowied¼';
$lang['ReturnToTopicAfterPosting'] = 'Powróæ do tematu po napisaniu posta';
$lang['ModeratorList'] = 'Moderatorzy: %s.';
$lang['Nobody'] = 'Nikt';
$lang['DeleteTopic'] = 'Usuñ temat';
$lang['MoveTopic'] = 'Przenie¶ temat';
$lang['LockTopic'] = 'Zablokuj temat';
$lang['UnlockTopic'] = 'Odblokuj temat';
$lang['MakeSticky'] = 'Przyklej';
$lang['ConfirmDeleteTopic'] = 'Czy jeste¶ pewien/na ¿e chcesz usun±æ temat %s w forum %s? To nieodwracalne!';
$lang['MakeNormalTopic'] = 'Normalny temat';
$lang['OldForum'] = 'Stare forum';
$lang['NewForum'] = 'Nowe forum';
$lang['IAccept'] = 'Akceptuje';
$lang['IDontAccept'] = 'Nie akceptuje';
$lang['OpenLinksNewWindow'] = 'Otwórz linki w nowym oknie';
$lang['HideAllAvatars'] = 'Ukryj wszystkie avatary';
$lang['HideUserinfo'] = 'Ukryj informacje o u¿ytkowniku';
$lang['HideAllSignatures'] = 'Ukryj wszystkie sygnatury';
$lang['HideFromOnlineList'] = 'Ukryj listê aktywnych u¿ytkowników';
$lang['PageLinks'] = 'Strona: %s';
$lang['Preview'] = 'Podgl±d';
$lang['DeletePost'] = 'Usuñ post';
$lang['ConfirmDeletePost'] = 'Czy jeste¶ pewien/na ¿e chcesz usunaæ ten post w temacie %s? To nieodwracalne!';
$lang['EditPost'] = 'Edytuj post';
$lang['PostEditInfo'] = 'Ostatnia edycja %s w %s.';
$lang['PasswdInfo'] = 'Has³o musi posiadaæ minimum %d znaków.';
$lang['SubscribeTopic'] = 'Subskrybuj';
$lang['UnsubscribeTopic'] = 'Nie subskrybuj';
$lang['NewReplyEmailBody'] = 'Witaj,

Na forum [board_name], kto¶ ([poster_name]) wys³a³ odpowied¼ do subskrybowanego przez Ciebie tematu ("[topic_title]"). Aby zobaczyæ odpowied¼
kliknij na link do tematu: [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nowa odpowied¼ w "%s"';
$lang['SubscribedTopic'] = 'Bêdziesz teraz subskrybowa³ ten temat.';
$lang['UnsubscribedTopic'] = 'Od teraz nie subskrybujesz tego tematu.';
$lang['SubscribeToThisTopic'] = 'Subskrybuj ten temat.';
$lang['OK'] = 'Ok';
$lang['Subscriptions'] = 'Opcje subskrypcji';
$lang['NoSubscribedTopics'] = 'Nie subskrybujesz ¿adnego tematu.';
$lang['LatestUpdate'] = 'Ostatnia aktualizacja';
$lang['Unknown'] = 'Nieznane';
$lang['PostingTopic'] = 'Postów w temacie %s';
$lang['PostingReply'] = 'Odpowiedzi %s';
$lang['MovingTopic'] = 'Przenie¶ temat %s';
$lang['DeletingTopic'] = 'Usuñ temat %s';
$lang['EditingPost'] = 'Edytuj post w %s';
$lang['DeletingPost'] = 'Usuñ post w %s';
$lang['DebugMode'] = 'W³a¶ciwo¶ci';
$lang['ParseTime'] = 'Parsuj czas';
$lang['ServerLoad'] = '£adowanie serwera';
$lang['TemplateSections'] = 'Sekcje stylu';
$lang['SQLQueries'] = 'Zapytania SQL';
$lang['RealName'] = 'Prawdziwe imiê';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administratorzy';
$lang['Moderators'] = 'Moderatorzy';
$lang['TopicReview'] = 'Podgl±d tematu';
$lang['ViewMorePosts'] = 'Zobacz wiêcej postów';
$lang['DisplayedName'] = 'Pokazywana nazwa';
$lang['UsernameInfo'] = 'Login mo¿e zawieraæ cyfry, liczby oraz spacje, _ i -.';
$lang['Code'] = 'Code';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Kolor';
$lang['Size'] = 'Wielko¶æ';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Temat: %s';
$lang['FloodIntervalWarning'] = 'Administrator wyszczególni³, ¿e mo¿esz pisaæ nowe posty z odstêpem o %d sekund, przed ponownym wys³aniem nastêpnego.';
$lang['AutoSubscribe'] = 'Auto subskrypcja';
$lang['OnPostingNewTopics'] = 'Pisaæ posty w tematach';
$lang['OnPostingNewReplies'] = 'Odpowiadaæ na posty';
$lang['UnsubscribeSelected'] = 'Nie subskrybuj wybranych';
$lang['SelectedTopicsUnsubscribed'] = 'Przesta³e¶ subskrybowaæ wybrane tematy.';
$lang['Birthday'] = 'Urodziny';
$lang['Age'] = 'Wiek';
$lang['Month'] = 'Miesi±c';
$lang['Day'] = 'Dzieñ';
$lang['Year'] = 'Rok';
$lang['PoweredBy'] = '%s jest zasilane przez %s';
$lang['GeneralStats'] = 'Generalne statystyki';
$lang['Members'] = 'U¿ytkowników';
$lang['TopicsPerDay'] = 'Tematów dziennie';
$lang['MembersPerDay'] = 'U¿ytkowników dziennie';
$lang['BoardStarted'] = 'Start forum';
$lang['BoardAge'] = 'Wiek forum';
$lang['NewestMember'] = 'Nowy u¿ytkownik';
$lang['MostActiveTopics'] = 'Najaktywniejsze tematy';
$lang['MostViewedTopics'] = 'Najczê¶ciej odzwiedzane tematy';
$lang['PostsPerMember'] = 'Postów u¿ytkowników';
$lang['PostsPerForum'] = 'Postów na forum';
$lang['Categories'] = 'Kategorie';
$lang['Forums'] = 'Fora';
$lang['TopicsPerMember'] = 'Tematów u¿ytkownika';
$lang['TopicsPerForum'] = 'Tematów w forum';
$lang['MostActiveMembers'] = 'Najaktywniejsi u¿ytkownicy';
$lang['MostActiveForums'] = 'Najaktywniejsze tematy';
$lang['DisplayedNameTaken'] = 'Przepraszamy, %s by³o do tej pory przyjmowane jako login lub nazwa wy¶wietlana.';
$lang['SearchKeywords'] = 'Szukaj wyra¿eñ';
$lang['SearchMode'] = 'Tryb wyszukiwania';
$lang['SearchAuthor'] = 'Szukaj autorów';
$lang['SearchForums'] = 'Szukaj for';
$lang['AllForums'] = 'Wszystkie fora';
$lang['NoSearchResults'] = 'Przepraszamy, brak rezultatów wyszukiwania.';
$lang['SearchMembersPosts'] = 'Szukaj posty u¿ytkownika';
$lang['CurrentPage'] = 'Aktualna strona';
$lang['MemberGuestOnline'] = 'Przez ostatnie %d minut, %d u¿ytkowników (%d ukrytych) oraz %d go¶ci, odzwiedzi³o nasze forum.';
$lang['MembersGuestOnline'] = 'Przez ostatnie %d minut, %d u¿ytkowników (%d ukrytych) oraz %d go¶ci, odzwiedzi³o nasze forum.';
$lang['MemberGuestsOnline'] = 'Przez ostatnie %d minut, %d u¿ytkownik (%d ukrytych) oraz %d go¶ci, odzwiedzi³o nasze forum.';
$lang['MembersGuestsOnline'] = 'Przez ostatnie %d minut, %d u¿ytkowników (%d ukrytych) oraz %d go¶ci, odzwiedzi³o nasze forum.';
$lang['WhosOnline'] = 'Kto jest na forum?';
$lang['Done'] = 'Zrobione';
$lang['KeywordsExplain'] = 'Jakiekolwiek s³owa kluczowe, przynajmniej %d znaki, oddzielone spacjami.';
$lang['BCCMyself'] = 'Mo¿esz wys³aæ kopie wiadomo¶ci PW na swoj adres e-mail.';
$lang['Save'] = 'Zapisz';
$lang['Add'] = 'Dodaj';
$lang['MarkAllAsRead'] = 'Oznacz wszystkie posty jako przeczytane';
$lang['MarkAllAsReadDone'] = 'Wszystkie fora s± oznaczone jako przeczytane.';
$lang['StringTooShort'] = '%s jest za krótkie, co najmniej %d znaki s± wymagane.';
$lang['StringTooLong'] = '%s jest za d³ugie, tylko %d znaków jest dozwolonych.';
$lang['Upload'] = 'Upload';
$lang['RegistrationsDisabled'] = 'Rejestracja wy³±czona';
$lang['PostFormShortcut'] = 'Naci¶nij Alt+S, aby wys³aæ dotychczasow± formê posta.';
$lang['EditThisMember'] = 'Edytuj tego u¿ytkownika';
$lang['EmailTaken'] = 'Ten adres e-mail %s jest ju¿ u¿ywany. Proszê wybierz inny.';
$lang['RegisteredNotActivatedByAdmin'] = 'Twoje konto %s zosta³o utworzone. Zanim siê zalogujesz, Administrator forum musi aktywowaæ Twoje konto. Proszê cierpliwie czekaæ.';
$lang['AdminActivationEmailBody'] = 'Witaj,

Na forum [board_name], masz zarejestrowane konto o nazwie [account_name]. Administrator forum musi aktywowaæ konto. Gdy to siê ju¿ stanie, bêdziesz móg³ siê zalogowaæ u¿ywaj±c poni¿szych danych:

Login: [account_name]
Has³o: [password]

Je¿eli zgubisz swoje has³o, mo¿esz prosiæ o nowe po przez opcjê "Nowe has³o". Dziêkujê za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Konto oczekuje na aktywacje';
$lang['NewEmailNotActivatedByAdmin'] = 'Twój profil zosta³ zaktualizowany pozytywnie. Poniewa¿ zmienia³e¶ adres e-mail w swoim koncie %s, Administrator forum musi zreaktywowaæ je. Proszê czekaæ cierpliwie.';
$lang['NewEmailAdminActivationEmailBody'] = 'Witaj,

Na forum [board_name], zmienia³e¶ adres e-mail do konta o nazwie [account_name], lecz jeszcze nie zosta³ zreaktywowany. Administrator forum jako pierwszy musi reaktywowaæ Twoje konto. Proszê czekaæ cierpliwie.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Konto oczekuje na reaktywacje';
$lang['AdminActivatedAccountEmailBody'] = 'Witaj,

Na forum [board_name], Administrator forum aktywowa³ Twoje konto o nazwie [account_name]. Mo¿esz siê teraz zalogowaæ.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Konto aktywne';
$lang['Sort'] = 'Sortuj';
$lang['SortBy'] = 'Sortuj przez';
$lang['SortBy-displayed_name'] = 'Login';
$lang['SortBy-real_name'] = 'Prawdziwe imiê';
$lang['SortBy-level'] = 'Poziom';
$lang['SortBy-rank'] = 'Ranga';
$lang['SortBy-regdate'] = 'Zarejestrowany';
$lang['SortBy-posts'] = 'Posty';
$lang['SortBy-latest_post'] = 'Ostatni post';
$lang['SortBy-topic_title'] = 'Tytu³ tematu';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Odpowiedzi';
$lang['SortBy-views'] = 'Odwiedzin';
$lang['SortOrder-asc'] = 'Rosn±co';
$lang['SortOrder-desc'] = 'Malej±co';
$lang['NoUsersFound'] = 'Brak u¿ytkowników.';
$lang['SaveConfigManually'] = 'Plik config.php nie jest zapisywalny, tak wiêc UseBB nie mo¿e zapisaæ zmian konfiguracyjnych. Proszê ustaw CHMODY na 777 po przez FTP.';
$lang['ShowResultsAs'] = 'Poka¿ rezultat';
$lang['ShowMode-topics'] = 'Tematy';
$lang['ShowMode-posts'] = 'Posty';
$lang['Mode-and'] = 'Wszystkie s³owa (AND)';
$lang['Mode-or'] = 'Którekolwiek s³owo/wyra¿enie (OR)';
$lang['ExactMatch'] = 'Dok³adne odpowiedzi';
$lang['IncludeGuests'] = 'Uwzglêdniaæ go¶ci';
$lang['Top'] = 'Góra';
$lang['Bottom'] = 'Dó³';
$lang['Action'] = 'Akcja';
$lang['AntiSpamQuestion'] = 'Anty-Spamowe pytania';
$lang['AntiSpamQuestionInfo'] = 'Podczas zak³adania konta napotkasz kontrole anty-spamow±, aby zakoñczyæ rejestracje bêdziesz musia³ odpowiedzieæ poprawnie na pytanie.';
$lang['Question'] = 'Pytanie';
$lang['Answer'] = 'Odpowied¼';
$lang['AntiSpamQuestionMathPlus'] = 'Ile jest %d dodaæ %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Ile jest %d odj±æ %d?';
$lang['AntiSpamWrongAnswer'] = 'Je¶li pojawi siê b³ad, proszê wróciæ i poprawiæ b³êdne dane.';
$lang['WrongUsernamePassword'] = 'Login (%s) oraz has³o jest niepoprawne. Spróbuj proszê jeszcze raz.';
$lang['WrongUsernameEmail'] = 'Login (%s) oraz adres e-mail nie istnieje. Spróbuj jeszcze raz.';
$lang['All'] = 'Wszystko';
$lang['Staff'] = 'Za³oga';
$lang['Guests'] = 'Go¶cie';
$lang['ShowOnly'] = 'Poka¿ tylko';
$lang['InvalidFormTokenNotice'] = 'Zabiezpieczaj±cy token jest niepoprawny lub jego wa¿no¶æ wygas³a.

If you were led here through a third-party link or website, please ignore this page!

If you were making changes and submitting the form yourself, please resubmit.';
$lang['InvalidURLTokenNotice']  = 'Zabiezpieczaj±cy token jest niepoprawny lub jego wa¿no¶æ wygas³a.

If you were led here through a third-party link or website, please ignore this page!

Otherwise, please reload the original page and revisit the link.';

?>
