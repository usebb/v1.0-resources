<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.126 2007/01/01 11:58:43 pc_freak Exp $
	
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
$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'hu';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Otthon';
$lang['YourPanel'] = 'Saját Adatok';
$lang['Register'] = 'Regisztrálj';
$lang['FAQ'] = 'GYIK';
$lang['Search'] = 'Keresés';
$lang['ActiveTopics'] = 'Aktív Témák';
$lang['LogIn'] = 'Bejelentkezés';
$lang['LogOut'] = 'Kijelentkezés (%s)';
$lang['MemberList'] = 'Tag Lista';
$lang['StaffList'] = 'Karbantartó List';
$lang['Statistics'] = 'Statisztikák';
$lang['ContactAdmin'] = 'Admin Kapcsolat';
$lang['Forum'] = 'Fórum';
$lang['Topics'] = 'Témák';
$lang['Posts'] = 'Hozzászólás';
$lang['LatestPost'] = 'Utolsó Hozzászólás';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Új hozzászólások';
$lang['NoNewPosts'] = 'Nincsenek új hozzászólások';
$lang['LockedNewPosts'] = 'Zárolva (új hozzászólások)';
$lang['LockedNoNewPosts'] = 'Zárolva (nincsenek új hozzászólások)';
$lang['Locked'] = 'Zárolva';
$lang['LastLogin'] = 'Utolsó bejelentkezés';
$lang['VariousInfo'] = 'Különbözõ információk';
$lang['IndexStats'] = 'This board contains %d posts in %d topics and has %d registered members.';
$lang['NewestMemberExtended'] = 'Üdvözöljük a legújabb tagunkat: %s.';
$lang['Username'] = 'Felhasználónév';
$lang['CurrentPassword'] = 'Jelenlegi jelszó';
$lang['UserID'] = 'Felhasználó ID';
$lang['NoSuchForum'] = 'A %s fórum nem létezik (többé) ezen az oldalon!';
$lang['WrongPassword'] = 'Sajnálom, de a jelszó nem megfelelõ! Kérjél egy új jelszót a bejelentkezõ oldalon, ha elfelejtetted.';
$lang['Reset'] = 'Törlés';
$lang['SendPassword'] = 'Új jelszó küldése';
$lang['RegisterNewAccount'] = 'Új tagság regisztrálása';
$lang['RememberMe'] = 'Emlékezz rám';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['NotActivated'] = 'A tagságod %s még nincs aktiválva. Kérlek ellenõrizd az email fiókodat, amivel regisztráltál ide. Ott talalász leírást mit kell tenned az aktiváláshoz';
$lang['Error'] = 'Hiba';
$lang['Profile'] = '%s profilja';
$lang['Level'] = 'Szint';
$lang['Administrator'] = 'Adminisztrátor';
$lang['Moderator'] = 'Moderátor';
$lang['Registered'] = 'Regisztrált';
$lang['Email'] = 'E-mail cím';
$lang['ContactInfo'] = 'Kapcsolat';
$lang['Password'] = 'Jelszó';
$lang['PasswordAgain'] = 'Jelszó (újra)';
$lang['EverythingRequired'] = 'Az összes mezõt ki kell tölteni!';
$lang['RegisteredNotActivated'] = 'A %s nevü tagságod létrehozva. Küldtünk egy e-mailt %s címre, melyben megtalálod hogyan aktiváld a tagságodat. Aktiválás nélkül, nem tudsz bejelentkezni.';
$lang['RegisteredActivated'] = 'A %s nevü regisztrációd létrhozva. Jelentkezz be.';
$lang['Never'] = 'Soha';
$lang['Member'] = 'Tag';
$lang['RegistrationActivationEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Regisztráltál [account_name] néven, de még nincs aktiválva. Kérlek kattints az alábbi linkre, hogy aktiváld a tagságodat:

[activate_link]

vagy másold be a böngészõdbe. Azután már be tudsz jelentkezni az alábbi adatokkal:

Felhasználónév: [account_name]
Jelszó: [password]

Ha elfelejtetted a jelszavad a bejelentkezési oldalon tudsz újat kérni. Köszönjük a regisztrációdat!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'This is an empty board. The administrator has not yet created any forums.';
$lang['AlreadyActivated'] = 'Account with ID %d has already been activated.';
$lang['Activate'] = 'Aktiválás';
$lang['Activated'] = 'A %s tagságod (újra)aktiválva. Automatikusan beléptetünk.';
$lang['WrongActivationKey'] = 'We were unable to activate your account with ID %d. The activation key is incorrect. Are you sure you didn\'t request a new password in the mean time?';
$lang['RegisterIt'] = 'You can create it via the \'Register\' link.';
$lang['BoardClosed'] = 'Oldal Zárva';
$lang['SendpwdEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Új jelszót igényeltél [account_name]. Az alábbi adatokkal tudsz bejelntkezni:

Felhasználónév: [account_name]
Jelszó: [password]

Ha elfelejtetted a jelszavad a bejelentkezési oldalon tudsz újat kérni.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Új Jelszó';
$lang['SendpwdActivated'] = 'Az új jelszavad %s ell lett küldve %s. Jelentkezz be az új jelszavaddal.';
$lang['ForumIndex'] = 'Fórum Index';
$lang['MissingFields'] = 'A következõ mezõk hibásak vagy hiányoznak: %s.';
$lang['TermsOfUseContent'] = 'Az oldal üzemeltetõje nem vállal felelõséget a beküldött hozzászólásokért.
Ne használj csúnya szavakat. Viselkedj normálisan. Ellenkezõ esetben kitiltunk a fórumról.

A sütiket engedélyezd a böngészõdben.

Kattints az  "Elfogadom" gombra, ha egyetértesz a feltételekkel.';
$lang['TermsOfUse'] = 'Használati feltételek';
$lang['RegistrationActivationEmailSubject'] = 'Tagság Aktiválás';
$lang['NeedToBeLoggedIn'] = 'You need to be logged in to do this. Click the \'Log In\' link to log in or \'Register\' to create a new account.';
$lang['WrongEmail'] = 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'Téma';
$lang['Author'] = 'Szerzõ';
$lang['Replies'] = 'Válaszok';
$lang['Views'] = 'Olvasták';
$lang['Note'] = 'Megjegyzés';
$lang['Hidden'] = 'Rejtett';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Üzenet küldése';
$lang['NoViewableForums'] = 'You don\'t have permission to view any forums with this user level. If you are not logged in, do so. If you are logged in, you probably shouldn\'t be here.';
$lang['Rank'] = 'Rang';
$lang['Location'] = 'Lakhely';
$lang['Website'] = 'Weboldal';
$lang['Occupation'] = 'Occupation';
$lang['Interests'] = 'Érdeklõdési kör';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'A te %s IP címed ki van tiltva az oldalról.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Tiltott Tagság';
$lang['BannedUserExplain'] = 'Your account %s is being banned from this board. The reason is:';
$lang['BannedUsername'] = 'The username %s is being banned from this board. Please choose another one.';
$lang['BannedEmail'] = 'The e-mail address %s is being banned from this board. Please choose another one.';
$lang['PostsPerDay'] = 'Válaszok / nap';
$lang['BoardClosedOnlyAdmins'] = 'Only administrators can log in when the board is closed.';
$lang['NoPosts'] = 'Nincsnek válaszok';
$lang['NoActivetopics'] = 'This board currently does not have any active topics.';
$lang['AuthorDate'] = 'By %s on %s';
$lang['ByAuthor'] = 'Ki: %s';
$lang['OnDate'] = 'Mikor: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'E-mail küldése %s részére';
$lang['SendEmail'] = 'Üzenet küldése %s részére';
$lang['NoMails'] = 'Ez a felhasználó nem kíván e-mail-t fogadni.';
$lang['UserEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Ez a felhasználó [username] üzenetet küldött neked. Alább az üzenet.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Az e-mail %s részére elpostázva!';
$lang['To'] = 'Cimzett';
$lang['From'] = 'Kitõl';
$lang['Subject'] = 'Tárgy';
$lang['Body'] = 'Törzs';
$lang['Send'] = 'Küld';
$lang['EditProfile'] = 'Profil Szerkesztése';
$lang['EditOptions'] = 'Beállítások';
$lang['EditPasswd'] = 'Jelszó szerkesztése';
$lang['PanelHome'] = 'Panel Kezdés';
$lang['NewEmailNotActivated'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, you need to reactivate it. An e-mail has been sent to %s with instructions on how to do this. You will be logged out in the mean time.';
$lang['Required'] = 'Kötelezõ';
$lang['ViewProfile'] = 'Profil Megtekintése';
$lang['NewEmailActivationEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. Please click the link below to reactivate your account:

[activate_link]

or copy-n-paste it to your browser.

Ha elfelejtetted a jelszavad a bejelentkezési oldalon tudsz újat kérni.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Tagság újraaktiválása';
$lang['Signature'] = 'Aláírás';
$lang['SessionInfo'] = 'Folyamat Információ';
$lang['SessionID'] = 'Folyamat ID';
$lang['IPAddress'] = 'IP cím';
$lang['Seconds'] = 'Másodpercek';
$lang['Updated'] = 'Frissítve';
$lang['Pages'] = 'Oldalak';
$lang['AutoLogin'] = 'Automatikus bejelentkezés';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Enable'] = 'Bekapcsol';
$lang['Disable'] = 'Kikapcsol';
$lang['AutoLoginSet'] = 'Az automatikus bejelentkezés süti beállítva.';
$lang['AutoLoginUnset'] = 'Az automatikus bejelentkezés süti törölve.';
$lang['RegistrationEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Regisztráltál egy tagot [account_name] néven. Az alábbi felhasználónév és jelszó párossal tudsz bejelentkezni:

Felhasználónév: [account_name]
Jelszó: [password]

Ha elfelejtetted a jelszavad a bejelentkezési oldalon tudsz újat kérni. Köszönjük a regisztrációdat!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Tagság Regisztrálása';
$lang['PublicEmail'] = 'E-mail cím látható';
$lang['PublicLastLogin'] = 'Utolsó bejelentkezés ideje látható';
$lang['DateFormat'] = 'Dátum formátuma';
$lang['DateFormatHelp'] = 'A dátum formátuma megegyezik a PHP %s funkciójéval.';
$lang['Again'] = 'Újra';
$lang['NewPassword'] = 'Új jelszó';
$lang['NewPasswordAgain'] = 'Új jelszó (újra)';
$lang['PasswordEdited'] = 'Jelszavad sikeresen megváltoztatva.';
$lang['DetailedOnlineList'] = 'Részletes online lista';
$lang['Detailed'] = 'Részletes';
$lang['OptionsEdited'] = 'Az oldal beállitásaid sikeresen megváltoztatva.';
$lang['ProfileEdited'] = 'A profilod sikeresen megváltoztatva.';
$lang['Started'] = 'Indítva';
$lang['Minutes'] = 'Percek';
$lang['Hours'] = 'Órák';
$lang['Days'] = 'Napok';
$lang['Weeks'] = 'Hetek';
$lang['TotalTime'] = 'Össz. idõ';
$lang['NoTopics'] = 'Ez a fórum nem tartalmaz témát. Neked kell megtenni az elsõt!';
$lang['NotPermitted'] = 'You don\'t have the appropriate permissions to do this. If in doubt, contact the administrator.';
$lang['Language'] = 'Nyelv';
$lang['Template'] = 'Kinézet';
$lang['NoSuchMember'] = 'The member %s does not exist (anymore) at this board.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'This feature is disabled because this board can not set or read cookies with your browser.';
$lang['LogOutConfirm'] = 'Biztos ki akarsz lépni?';
$lang['Cancel'] = 'Mégse';
$lang['Timezone'] = 'Idõzóna';
$lang['DST'] = 'Daylight saving times';
$lang['Sticky'] = 'Sticky';
$lang['PostNewTopic'] = 'Új Téma';
$lang['ForumIsLocked'] = 'Forum is locked';
$lang['NoSuchTopic'] = 'The topic %s does not exist (anymore) at this board.';
$lang['PostReply'] = 'Válasz küldése';
$lang['TopicIsLocked'] = 'A téma zárolva';
$lang['Post'] = 'Hozzászól';
$lang['Edit'] = 'Szerkeszt';
$lang['Delete'] = 'Töröl';
$lang['Quote'] = 'Idéz';
$lang['Wrote'] = '%s írta';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'The topic you are trying to post in is locked. Only authorized people can still post replies.';
$lang['Content'] = 'Tartalom';
$lang['Options'] = 'Beállítások';
$lang['EnableBBCode'] = 'BBCode bekapcsolása.';
$lang['EnableSmilies'] = 'Mosolygások bekapcsolása.';
$lang['EnableSig'] = 'Aláírás bekapcsolása.';
$lang['EnableHTML'] = 'HTML bekapcsolása.';
$lang['LockTopicAfterPost'] = 'Lock topic after posting.';
$lang['Guest'] = 'Vendég';
$lang['BackToPrevious'] = 'Back to the previous page';
$lang['NoSuchPost'] = 'The post %s does not exist (anymore) at this board.';
$lang['UserPostedImage'] = 'User posted image';
$lang['ForumIsLockedExplain'] = 'This forum is locked. Only authorized people can post new topics.';
$lang['MakeTopicSticky'] = 'Make the topic sticky.';
$lang['QuickReply'] = 'Gyors válasz';
$lang['ReturnToTopicAfterPosting'] = 'Return to the topic after posting';
$lang['ModeratorList'] = 'Moderators: %s.';
$lang['Nobody'] = 'Senki';
$lang['DeleteTopic'] = 'Delete topic';
$lang['MoveTopic'] = 'Move topic';
$lang['LockTopic'] = 'Lock topic';
$lang['UnlockTopic'] = 'Unlock topic';
$lang['MakeSticky'] = 'Make sticky';
$lang['ConfirmDeleteTopic'] = 'Are you sure you want to delete the topic %s in the forum %s? This is irreversible!';
$lang['MakeNormalTopic'] = 'Make normal topic';
$lang['OldForum'] = 'Régi fórum';
$lang['NewForum'] = 'Új fórum';
$lang['IAccept'] = 'Elfogadom';
$lang['IDontAccept'] = 'Nem fogadom el';
$lang['OpenLinksNewWindow'] = 'Open external links in new windows';
$lang['HideAllAvatars'] = 'Hide all avatars';
$lang['HideUserinfo'] = 'Hide user information';
$lang['HideAllSignatures'] = 'Hide all signatures';
$lang['HideFromOnlineList'] = 'Hide from online list';
$lang['PageLinks'] = 'Oldal: %s';
$lang['Preview'] = 'Elõnézet';
$lang['DeletePost'] = 'Delete post';
$lang['ConfirmDeletePost'] = 'Are you sure you want to delete this post in the topic %s? This is irreversible!';
$lang['EditPost'] = 'Edit post';
$lang['PostEditInfo'] = 'Last edit by %s on %s.';
$lang['PasswdInfo'] = 'A jelszó csak betûket és számokat tartalmazhat és minimum %d karakter hosszúnak kell lennie.';
$lang['SubscribeTopic'] = 'Feliratkozás';
$lang['UnsubscribeTopic'] = 'Leiratkozás';
$lang['NewReplyEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. Someone ([poster_name]) posted a reply to a topic you are subscribed to ("[topic_title]"). To view the reply, please click the following link: [topic_link].

Click the following link if you wish to unsubscribe from the topic (requires login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Új válasz "%s"';
$lang['SubscribedTopic'] = 'Feliratkoztál erre a témára.';
$lang['UnsubscribedTopic'] = 'Leiratkoztál errõl a témáról.';
$lang['SubscribeToThisTopic'] = 'Feliratkozás a témára.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Feliratkozások';
$lang['NoSubscribedTopics'] = 'Jelenleg egyetlen témára se iratkoztál fel.';
$lang['LatestUpdate'] = 'Utoljára frissítve';
$lang['Unknown'] = 'Ismeretlen';
$lang['PostingTopic'] = 'Hozzászólás küldése a %s témában';
$lang['PostingReply'] = 'Válasz küldése a %s témában';
$lang['MovingTopic'] = '%s téma mozgatása';
$lang['DeletingTopic'] = '%s téma törlése';
$lang['EditingPost'] = 'Hozzászólások szerkesztése %s témában';
$lang['DeletingPost'] = 'Hozzászólások törlése %s témában';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Server load';
$lang['TemplateSections'] = 'Template sections';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Valódi név';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administrators';
$lang['Moderators'] = 'Moderators';
$lang['TopicReview'] = 'Topic review';
$lang['ViewMorePosts'] = 'View more posts';
$lang['DisplayedName'] = 'Megjelenítendõ név';
$lang['UsernameInfo'] = 'A felhasználónév csak betüket és számokat tartalmazhat, meg szóközt, _ és -.';
$lang['Code'] = 'Kód';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Szín';
$lang['Size'] = 'Méret';
$lang['ViewingForum'] = 'Fórum: %s';
$lang['ViewingTopic'] = 'Téma: %s';
$lang['FloodIntervalWarning'] = 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Auto subscribe';
$lang['OnPostingNewTopics'] = 'On posting topics';
$lang['OnPostingNewReplies'] = 'On posting replies';
$lang['UnsubscribeSelected'] = 'Unsubscribe selected';
$lang['SelectedTopicsUnsubscribed'] = 'You are now unsubscribed from the selected topics.';
$lang['Birthday'] = 'Születésnap';
$lang['Age'] = 'Kor';
$lang['Month'] = 'Hónap';
$lang['Day'] = 'Nap';
$lang['Year'] = 'Év';
$lang['PoweredBy'] = '%s szolgáltatva %s által';
$lang['ForumSoftware'] = 'Fórum Softwre';
$lang['GeneralStats'] = 'Altalános statisztikák';
$lang['Members'] = 'Tagok';
$lang['TopicsPerDay'] = 'Topics per day';
$lang['MembersPerDay'] = 'Members per day';
$lang['BoardStarted'] = 'Board started';
$lang['BoardAge'] = 'Board age';
$lang['NewestMember'] = 'Newest member';
$lang['MostActiveTopics'] = 'Most active topics';
$lang['MostViewedTopics'] = 'Most viewed topics';
$lang['PostsPerMember'] = 'Posts per member';
$lang['PostsPerForum'] = 'Posts per forum';
$lang['Categories'] = 'Categories';
$lang['Forums'] = 'Forums';
$lang['TopicsPerMember'] = 'Topics per member';
$lang['TopicsPerForum'] = 'Topics per forum';
$lang['MostActiveMembers'] = 'Most active members';
$lang['MostActiveForums'] = 'Most active forums';
$lang['DisplayedNameTaken'] = 'Sorry, %s has already been taken as a login name or a displayed name.';
$lang['SearchKeywords'] = 'Keresési szavak';
$lang['SearchMode'] = 'Keresési mód';
$lang['SearchAuthor'] = 'Szerzõ keresése';
$lang['SearchForums'] = 'Fórumokban keres';
$lang['AllForums'] = 'Összes fórum';
$lang['NoSearchResults'] = 'Nincs találat.';
$lang['SearchMembersPosts'] = 'Search member\'s posts';
$lang['CurrentPage'] = 'Aktuális oldal';
$lang['MemberGuestOnline'] = 'In the last %d minutes, %d member (%d hidden) and %d guest have visited the forums.';
$lang['MembersGuestOnline'] = 'In the last %d minutes, %d members (%d hidden) and %d guest have visited the forums.';
$lang['MemberGuestsOnline'] = 'In the last %d minutes, %d member (%d hidden) and %d guests have visited the forums.';
$lang['MembersGuestsOnline'] = 'In the last %d minutes, %d members (%d hidden) and %d guests have visited the forums.';
$lang['WhosOnline'] = 'Who\'s Online';
$lang['Done'] = 'Kész';
$lang['KeywordsExplain'] = 'Any keywords of at least %d characters separated by spaces.';
$lang['BCCMyself'] = 'Send a copy to my own e-mail address.';
$lang['Save'] = 'Ment';
$lang['Add'] = 'Hozzáad';
$lang['MarkAllAsRead'] = 'Összes olvasotnak jelölése';
$lang['MarkAllAsReadDone'] = 'All forums and topics are now marked as read.';
$lang['StringTooShort'] = '%s is too short, at least %d characters are required.';
$lang['StringTooLong'] = '%s is too long, only %d characters are allowed.';
$lang['Upload'] = 'Feltöltve';
$lang['RegistrationsDisabled'] = 'Regisztráció kikapcsolva';
$lang['PostFormShortcut'] = 'Press Alt+S (Control+S on Apple) to quickly send this form.';
$lang['EditThisMember'] = 'Edit this member';
$lang['EmailTaken'] = 'The e-mail address %s is already being used on this board. Please choose an other address.';
$lang['RegisteredNotActivatedByAdmin'] = 'Your account %s has now been created. Before you will be able to login, the administrator of this forum must activate your account. Please allow some time for this to happen.';
$lang['AdminActivationEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Regisztráltál egy tagságot [account_name] néven. A fórum adminisztrátornak aktiválnia kell a tagságodat. Ha ez megtörtént beléphetsz az alábbi adatokkal:

Felhasználónév: [account_name]
Jelszó: [password]

Ha elfelejtetted a jelszavad a bejelentkezési oldalon tudsz újat kérni. Köszönjük a regisztrációdat!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'A tagság aktiválásra vár';
$lang['NewEmailNotActivatedByAdmin'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, the admin of this board needs to reactivate it. You will be logged out in the mean time.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. The administrator of the board first needs to reactivate your account. Please allow some time for this to happen.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'A tagság újraaktiválásra vár';
$lang['AdminActivatedAccountEmailBody'] = 'Hello,

[board_name] fórum szól hozzád. Az adminisztrátor aktiválta a tagságodat [account_name]. Most már bejelentkezhetsz.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Tagság aktiválva';
$lang['Sort'] = 'Rendezés';
$lang['SortBy'] = 'Rendezve';
$lang['SortBy-displayed_name'] = 'Felhasználónév';
$lang['SortBy-real_name'] = 'Valódi név';
$lang['SortBy-level'] = 'Szint';
$lang['SortBy-rank'] = 'Rang';
$lang['SortBy-regdate'] = 'Regisztrált';
$lang['SortBy-posts'] = 'Hozászólások';
$lang['SortBy-latest_post'] = 'Utolsó hozzászólás';
$lang['SortBy-topic_title'] = 'Téma címe';
$lang['SortBy-forum'] = 'Fórum';
$lang['SortBy-author'] = 'Szerzõ';
$lang['SortBy-replies'] = 'Válaszok';
$lang['SortBy-views'] = 'Megnézve';
$lang['SortOrder-asc'] = 'Növekvõ';
$lang['SortOrder-desc'] = 'Csökkenõ';
$lang['NoUsersFound'] = 'Nincs tag.';
$lang['SaveConfigManually'] = 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Eredmények mutatása mint';
$lang['ShowMode-topics'] = 'Témák';
$lang['ShowMode-posts'] = 'Hozzászólások';
$lang['Mode-and'] = 'Összes kulcsszó (AND)';
$lang['Mode-or'] = 'Bármelyik kulcsszó (OR)';
$lang['ExactMatch'] = 'Teljes egyezés';
$lang['IncludeGuests'] = 'Vendégek is';
$lang['Top'] = 'Teteje';
$lang['Bottom'] = 'Alja';
$lang['Action'] = 'Mûvelet';

?>
