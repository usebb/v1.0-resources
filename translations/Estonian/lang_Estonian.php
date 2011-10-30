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
$lang['character_encoding'] = 'iso-8859-1';
$lang['language_code'] = 'et';
//$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Kodu';
$lang['YourPanel'] = 'Sinu paneel';
$lang['Register'] = 'Registreeri';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Otsing';
$lang['ActiveTopics'] = 'Aktiivsed teemad';
$lang['LogIn'] = 'Logi sisse';
$lang['LogOut'] = 'Logi välja (%s)';
$lang['MemberList'] = 'Liikmed';
$lang['StaffList'] = 'Toimetajad';
$lang['Statistics'] = 'Statistika';
$lang['ContactAdmin'] = 'Admini kontakt';
$lang['Forum'] = 'Foorum';
$lang['Topics'] = 'Teemad';
$lang['Posts'] = 'Postitused';
$lang['LatestPost'] = 'Viimane postitus';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Uued postitused';
$lang['NoNewPosts'] = 'Pole uusi postitusi';
$lang['LockedNewPosts'] = 'Lukus (uued postitused)';
$lang['LockedNoNewPosts'] = 'Lukus (pole uusi postitusi)';
$lang['Locked'] = 'Lukus';
$lang['LastLogin'] = 'Viimane login';
$lang['VariousInfo'] = 'Mitmesugust infot';
$lang['IndexStats'] = 'See foorum sisaldab %d postitust %d teemal ja siin on %d registreeritud liiget.';
$lang['NewestMemberExtended'] = 'Teretulemast uusim liige: %s.';
$lang['Username'] = 'Kasutajanimi';
$lang['CurrentPassword'] = 'Praegune parool';
$lang['UserID'] = 'Kasutaja ID';
$lang['NoSuchForum'] = 'See foorum %s on kustutatud';
$lang['WrongPassword'] = 'Parool ei ole õige. Päri uus parool login aknas, kui see sul on olemas.';
$lang['Reset'] = 'Puhasta';
$lang['SendPassword'] = 'Saada uus parool';
$lang['RegisterNewAccount'] = 'Registreeri uus kasutaja';
$lang['RememberMe'] = 'Pea mind meeles';
$lang['Yes'] = 'Jah';
$lang['No'] = 'Ei';
$lang['NotActivated'] = 'Su kasutaja %s pole veel aktiveeritud. Kontrolli oma e-maili postkastist vastavat teavitust, või oota kuni haldajad kinnitavad su kasutaja.';
$lang['Error'] = 'Viga';
$lang['Profile'] = '%s profiil';
$lang['Level'] = 'Level';
$lang['Administrator'] = 'Administraator';
$lang['Moderator'] = 'Toimetaja';
$lang['Registered'] = 'Registreeritud';
$lang['Email'] = 'E-maili aadress';
$lang['ContactInfo'] = 'Kontaktinfo';
$lang['Password'] = 'Parool';
$lang['PasswordAgain'] = 'Parool (veel kord)';
$lang['EverythingRequired'] = 'Kõik väljad on kohustuslikud!';
$lang['RegisteredNotActivated'] = 'Su kasutaja %s loodi. Saadeti email %s juhendiga kuidas see aktiveerida.';
$lang['RegisteredActivated'] = 'Sinu kasutajatunnus %s on loodud. Võid kohe sisse logida.';
$lang['Never'] = 'Ei ealeski';
$lang['Member'] = 'Liige';
$lang['RegistrationActivationEmailBody'] = 'Tere,

Siin on foorumi [board_name] tarkvara. Olete registreerinud kasutajanime [account_name], Aga see ei ole veel aktiveeritud. Kliki järgnevat linki et see aktiveerida:

[activate_link]

Või lõika-kleebi see oma brauserisse. Siis saad järgnevate tunnustega sisse logida:

Kasutaja: [account_name]
Parool: [password]

Kui oled unustanud parooli, saad login aknas selle meelde tuletada. Teretulemast kasutama!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'This is an empty board. The administrator has not yet created any forums.';
$lang['AlreadyActivated'] = 'Kasutajatunnus %d on juba aktiveeritud.';
$lang['Activate'] = 'Aktiveeri';
$lang['Activated'] = 'Your account %s has now been (re)activated. You will be logged in automatically.';
$lang['WrongActivationKey'] = 'We were unable to activate your account with ID %d. The activation key is incorrect. Are you sure you didn\'t request a new password in the mean time?';
$lang['RegisterIt'] = 'You can create it via the \'Register\' link.';
$lang['BoardClosed'] = 'Board Closed';
$lang['SendpwdEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just requested a new password for account [account_name]. You can log in using this username and password:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Uus parool';
$lang['SendpwdActivated'] = 'Uus parool saadeti %s kasutaja kohta %s -le. Logi sisse uue parooliga.';
$lang['ForumIndex'] = 'Foorumi indeks';
$lang['MissingFields'] = 'On täitmata järgnevad kohustuslikud väljad: %s.';
$lang['TermsOfUseContent'] = 'You acknowledge that all posts found at this board are the opinions of its authors and not of the web site\'s webmaster, forum administrators or moderators, except for posts written by one of them.

You agree not to post any abusive, offensive, obscene or inappropriate content or content that is forbidden by law on these forums. Doing so can cause your account on these forums to get banned or removed and your internet service provider eventually noticed about your behaviour. Therefore, your IP address is stored with every post you place. You also agree that administrators and moderators are permitted to edit, delete, move or lock your topics when they think this is needed.

All information you post to these forums is being stored in a database system for future reference. The board administrators will not redistribute this information without your permission or obligation by legal issues. However, nor the webmaster, administrators or moderators nor the UseBB Team can be held responsible when any information is being leaked as a result of a hacking attempt.

This board uses cookies to store temporary information needed by the forum system on your local computer. Also, a cookie can store your user ID and your password in an encrypted form to enable automatic login of your account if you chose to enable this. If you don\'t want any cookies to be stored on your computer, refer to your browser\'s manual about disabling cookies.

By clicking the "I accept" button, you agree to these terms and conditions.';
$lang['TermsOfUse'] = 'Kasutuse tingimused';
$lang['RegistrationActivationEmailSubject'] = 'Kasutaja aktiveerimine';
$lang['NeedToBeLoggedIn'] = 'Sa pead olema selleks sisse logitud. Vajuta \'Log Sisse\' linki või \'Registreeri\' et registreerida uus kasutaja.';
$lang['WrongEmail'] = 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'Teema';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Vastuseid';
$lang['Views'] = 'Vaatamisi';
$lang['Note'] = 'Märkus';
$lang['Hidden'] = 'Varjatud';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Saada sõnum';
$lang['NoViewableForums'] = 'You don\'t have permission to view any forums with this user level. If you are not logged in, do so. If you are logged in, you probably shouldn\'t be here.';
$lang['Rank'] = 'Rank';
$lang['Location'] = 'Asukoht';
$lang['Website'] = 'Website';
$lang['Occupation'] = 'Amet';
$lang['Interests'] = 'Huvid';
$lang['MSNM'] = 'Windows Live Messenger (MSN)';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Your IP address %s has been banned from this board.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Banned Account';
$lang['BannedUserExplain'] = 'Your account %s is being banned from this board. The reason is:';
$lang['BannedUsername'] = 'The username %s is being banned from this board. Please choose another one.';
$lang['BannedEmail'] = 'The e-mail address %s is being banned from this board. Please choose another one.';
$lang['PostsPerDay'] = 'Positusi päevas';
$lang['BoardClosedOnlyAdmins'] = 'Only administrators can log in when the board is closed.';
$lang['NoPosts'] = 'Pole postitusi';
$lang['NoActivetopics'] = 'This board currently does not have any active topics.';
$lang['AuthorDate'] = 'Kasutaja: %s ajal: %s';
$lang['ByAuthor'] = 'Kasutaja: %s';
$lang['OnDate'] = 'Aeg: %s';
$lang['Re'] = 'Vs:';
$lang['MailForm'] = 'Saada e-mail %s -ile';
$lang['SendEmail'] = 'Saada teade %s -ile';
$lang['NoMails'] = 'See kasutaja ei taha emaile saada.';
$lang['UserEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. The user [username] has sent this message to you via our board. The message body follows.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Your e-mail to %s has been sent succesfully!';
$lang['To'] = 'To';
$lang['From'] = 'From';
$lang['Subject'] = 'Subject';
$lang['Body'] = 'Body';
$lang['Send'] = 'Send';
$lang['EditProfile'] = 'Redigeeri Profiili';
$lang['EditOptions'] = 'Muuda eelistusi';
$lang['EditPasswd'] = 'Muuda parooli';
$lang['PanelHome'] = 'Paneeli kodu';
$lang['NewEmailNotActivated'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, you need to reactivate it. An e-mail has been sent to %s with instructions on how to do this. You will be logged out in the mean time.';
$lang['Required'] = 'Nõutud';
$lang['ViewProfile'] = 'Vaata profiili';
$lang['NewEmailActivationEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. Please click the link below to reactivate your account:

[activate_link]

or copy-n-paste it to your browser.

If you forget your password, you can request a new one via the link on the login form.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Account Reactivation';
$lang['Signature'] = 'Allkiri';
$lang['SessionInfo'] = 'Sessiooni info';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'IP address';
$lang['Seconds'] = 'Seconds';
$lang['Updated'] = 'Updated';
$lang['Pages'] = 'Pages';
$lang['AutoLogin'] = 'Automaatne login';
$lang['Enabled'] = 'sisse lülitatud';
$lang['Disabled'] = 'välja lülitatud';
$lang['Enable'] = 'sees';
$lang['Disable'] = 'väljas';
$lang['AutoLoginSet'] = 'Automaatne sisselülitus sees (cookie).';
$lang['AutoLoginUnset'] = 'Automaatne sisselülitus sees (cookie).';
$lang['RegistrationEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just registered an account named [account_name]. You can log in using this username and password:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. Thank you for registering!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Account Registration';
$lang['PublicEmail'] = 'Avalik e-maili aadress';
$lang['PublicLastLogin'] = 'Avalikusta viimane login aeg';
$lang['DateFormat'] = 'Kuupäeva formaat';
$lang['DateFormatHelp'] = 'Kuupäeva formaat on sama mis %s funktsioonil PHP-s.';
$lang['Again'] = 'Jälle';
$lang['NewPassword'] = 'Uus parool ';
$lang['NewPasswordAgain'] = 'Uus parool (veel kord)';
$lang['PasswordEdited'] = 'Your password has been edited succesfully.';
$lang['DetailedOnlineList'] = 'Detailed online list';
$lang['Detailed'] = 'Detailne';
$lang['OptionsEdited'] = 'Your board options have been edited succesfully.';
$lang['ProfileEdited'] = 'Your profile has been edited succesfully.';
$lang['Started'] = 'Started';
$lang['Minutes'] = 'Minutes';
$lang['Hours'] = 'Hours';
$lang['Days'] = 'Days';
$lang['Weeks'] = 'Weeks';
$lang['TotalTime'] = 'Total time';
$lang['NoTopics'] = 'Siin foorumis pole veel teemasid, ole esimene kes mõne lisab!';
$lang['NotPermitted'] = 'You don\'t have the appropriate permissions to do this. If in doubt, contact the administrator.';
$lang['Language'] = 'Keel/Language';
$lang['Template'] = 'Template';
$lang['NoSuchMember'] = 'The member %s does not exist (anymore) at this board.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'This feature is disabled because this board can not set or read cookies with your browser.';
$lang['LogOutConfirm'] = 'Are you sure you wish to log out?';
$lang['Cancel'] = 'Katkesta';
$lang['Timezone'] = 'Timezone';
$lang['DST'] = 'Daylight saving times';
$lang['Sticky'] = 'Kleepuv';
$lang['PostNewTopic'] = 'Uus teema';
$lang['ForumIsLocked'] = 'Foorum on lukus';
$lang['NoSuchTopic'] = 'The topic %s does not exist (anymore) at this board.';
$lang['PostReply'] = 'Postita vastus';
$lang['TopicIsLocked'] = 'Teema on lukus';
$lang['Post'] = 'Postita';
$lang['Edit'] = 'Redigeeri';
$lang['Delete'] = 'Kustuta';
$lang['Quote'] = 'Tsiteeri';
$lang['Wrote'] = '%s kirjutas';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'The topic you are trying to post in is locked. Only authorized people can still post replies.';
$lang['Content'] = 'Sisu';
$lang['Options'] = 'Parameetrid';
$lang['EnableBBCode'] = 'BBCode lubatud.';
$lang['EnableSmilies'] = 'Smile lubatud.';
$lang['EnableSig'] = 'Allkiri lubatud .';
$lang['EnableHTML'] = 'HTML lubatud.';
$lang['LockTopicAfterPost'] = 'Lock topic after posting.';
$lang['Guest'] = 'Külaline';
$lang['BackToPrevious'] = 'Tagasi eelmisele lehele';
$lang['NoSuchPost'] = 'The post %s does not exist (anymore) at this board.';
$lang['UserPostedImage'] = 'User posted image';
$lang['ForumIsLockedExplain'] = 'This forum is locked. Only authorized people can post new topics.';
$lang['MakeTopicSticky'] = 'Make the topic sticky.';
$lang['QuickReply'] = 'Kiirvastus';
$lang['ReturnToTopicAfterPosting'] = 'Tagasi teema juurde pärast vastamist';
$lang['ModeratorList'] = 'Toimetajad: %s.';
$lang['Nobody'] = 'Eikeegi';
$lang['DeleteTopic'] = 'Delete topic';
$lang['MoveTopic'] = 'Move topic';
$lang['LockTopic'] = 'Lock topic';
$lang['UnlockTopic'] = 'Unlock topic';
$lang['MakeSticky'] = 'Make sticky';
$lang['ConfirmDeleteTopic'] = 'Are you sure you want to delete the topic %s in the forum %s? This is irreversible!';
$lang['MakeNormalTopic'] = 'Make normal topic';
$lang['OldForum'] = 'Old forum';
$lang['NewForum'] = 'New forum';
$lang['IAccept'] = 'I accept';
$lang['IDontAccept'] = 'I don\'t accept';
$lang['OpenLinksNewWindow'] = 'Open external links in new windows';
$lang['HideAllAvatars'] = 'Hide all avatars';
$lang['HideUserinfo'] = 'Hide user information';
$lang['HideAllSignatures'] = 'Hide all signatures';
$lang['HideFromOnlineList'] = 'Hide from online list';
$lang['PageLinks'] = 'Page: %s';
$lang['Preview'] = 'Eelvaade';
$lang['DeletePost'] = 'Kustat postitus';
$lang['ConfirmDeletePost'] = 'Kas kindel et tahad kustutada postituse %s? See on pöördumatu!';
$lang['EditPost'] = 'Redigeeri postitust';
$lang['PostEditInfo'] = 'Viimane redigeering kasutajalt %s %s.';
$lang['PasswdInfo'] = 'The password can only contain alphanumeric characters and has a minimum length of %d characters.';
$lang['SubscribeTopic'] = 'Telli';
$lang['UnsubscribeTopic'] = 'Ära telli';
$lang['NewReplyEmailBody'] = 'Tere,

Olen foorum [board_name] . Kasutaja [poster_name] postitas vastuse teemale ("[topic_title]"). Et vastust näha, valige see link: [topic_link].

Kui Te ei soovi neid teateid, valige järgnev link lõpetamaks teavituste tellimine (login on vajalik): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Uus vastus teemal"%s"';
$lang['SubscribedTopic'] = 'Oled tellinud teavitused selle teema kohta.';
$lang['UnsubscribedTopic'] = 'Oled lõpetanud teavituste tellimise.';
$lang['SubscribeToThisTopic'] = 'Telli teavitused selle teema kohta.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Tellimused';
$lang['NoSubscribedTopics'] = 'Hetkel pole sul tellitud ühtegi teemat.';
$lang['LatestUpdate'] = 'Viimane uuendus';
$lang['Unknown'] = 'Teadmata';
$lang['PostingTopic'] = 'Posting a topic in %s';
$lang['PostingReply'] = 'Posting a reply in %s';
$lang['MovingTopic'] = 'Moving topic %s';
$lang['DeletingTopic'] = 'Deleting topic %s';
$lang['EditingPost'] = 'Editing post in %s';
$lang['DeletingPost'] = 'Deleting post in %s';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Server load';
$lang['TemplateSections'] = 'Template sections';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Real name';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administrators';
$lang['Moderators'] = 'Moderators';
$lang['TopicReview'] = 'Topic review';
$lang['ViewMorePosts'] = 'View more posts';
$lang['DisplayedName'] = 'Displayed name';
$lang['UsernameInfo'] = 'A username can only contain alphanumeric characters, spaces, _ and -.';
$lang['Code'] = 'Code';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Size';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Topic: %s';
$lang['FloodIntervalWarning'] = 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Automaatne teavituste tellimine';
$lang['OnPostingNewTopics'] = 'On posting topics';
$lang['OnPostingNewReplies'] = 'On posting replies';
$lang['UnsubscribeSelected'] = 'Unsubscribe selected';
$lang['SelectedTopicsUnsubscribed'] = 'You are now unsubscribed from the selected topics.';
$lang['Birthday'] = 'Birthday';
$lang['Age'] = 'Age';
$lang['Month'] = 'Month';
$lang['Day'] = 'Day';
$lang['Year'] = 'Year';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'General statistics';
$lang['Members'] = 'Members';
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
$lang['DisplayedNameTaken'] = 'Vabanda, %s on juba võetud kasutajanimena.';
$lang['SearchKeywords'] = 'Search keywords';
$lang['SearchMode'] = 'Search mode';
$lang['SearchAuthor'] = 'Search author';
$lang['SearchForums'] = 'Search forums';
$lang['AllForums'] = 'Kõik foorumid';
$lang['NoSearchResults'] = 'Sorry, but no results were found matching the criteria you supplied.';
$lang['SearchMembersPosts'] = 'Search member\'s posts';
$lang['CurrentPage'] = 'Current page';
$lang['MemberGuestOnline'] = 'Viimase %d minuti jooksul kasutas foorumit %d kasutaja (%d peidetud) ja %d külaline.';
$lang['MembersGuestOnline'] = 'Viimase %d minuti jooksul kasutasid foorumit %d kasutajat (%d peidetud) ja %d külaline.';
$lang['MemberGuestsOnline'] = 'Viimase %d minuti jooksul kasutas foorumit %d kasutaja (%d peidetud) ja %d külalist.';
$lang['MembersGuestsOnline'] = 'Viimase %d minuti jooksul kasutasid foorumit %d kasutajat (%d peidetud) ja %d külalist.';
$lang['WhosOnline'] = 'Kes on on-line';
$lang['Done'] = 'Tehtud!';
$lang['KeywordsExplain'] = 'Võtmesõnad, vähemalt %d märki, eraldatuna komadega.';
$lang['BCCMyself'] = 'Saada koopia ka minu emailile.';
$lang['Save'] = 'Salvesta';
$lang['Add'] = 'Lisa';
$lang['MarkAllAsRead'] = 'Märgi kõik loetuks';
$lang['MarkAllAsReadDone'] = 'All forums and topics are now marked as read.';
$lang['StringTooShort'] = '%s is too short, at least %d characters are required.';
$lang['StringTooLong'] = '%s is too long, only %d characters are allowed.';
$lang['Upload'] = 'Lae üles';
$lang['RegistrationsDisabled'] = 'Registrations disabled';
$lang['PostFormShortcut'] = 'Press Alt+S (Control+S on Apple) to quickly send this form.';
$lang['EditThisMember'] = 'Edit this member';
$lang['EmailTaken'] = 'The e-mail address %s is already being used on this board. Please choose an other address.';
$lang['RegisteredNotActivatedByAdmin'] = 'Su kasutajanimi %s on nüüd loodud. Enne kui saad sisse logida, peab administraator selle aktiveerima. See võib võtta paar päeva aega. Kui kasutaja on aktiveeritud, saad selle kohta teate emailile.';
$lang['AdminActivationEmailBody'] = 'Tere,

Siin foorum [board_name]. Oled registreerinud kasutajanime [account_name]. Administraator peab selle kinnitama. Kui see on tehtud ja oled selle kohta saanud teavituse, siis saad järgneval lingil sisse logida:
[board_link]

Kasutajanimi: [account_name]
Parool: [password]

Kui unustad parooli, saad selle foorumi lehel uuesti tellida. Palun panna tähele, et kõiki kasutajatunnuseid, eriti anonüümsetelt e-maili aadressidelt (hot, hotmail jms sisuga), ei pruugita aktiveerida, et vältida automaatseid spam-i roboteid. Kui kasutajatunnust aktiveeritud ei ole nädala jooksul, siis palun saata email meeldetuletusega alltoodud admin-i aadressil.

Tänan registreerimast!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Kasutajanimi ootab registreerimist';
$lang['NewEmailNotActivatedByAdmin'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, the admin of this board needs to reactivate it. You will be logged out in the mean time.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. The administrator of the board first needs to reactivate your account. Please allow some time for this to happen.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Account awaiting reactivation';
$lang['AdminActivatedAccountEmailBody'] = 'Tere,

Siin foorum [board_name]. Administraator on aktiveerinud kasutajanime [account_name]. Saad nüüd logida sisse.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Kasutajanimi aktiveeritud';
$lang['Sort'] = 'Sorteeri';
$lang['SortBy'] = 'Sorteeri kui ';
$lang['SortBy-displayed_name'] = 'Kasutajanimi';
$lang['SortBy-real_name'] = 'Pärisnimi';
$lang['SortBy-level'] = 'Level';
$lang['SortBy-rank'] = 'Rank';
$lang['SortBy-regdate'] = 'Registreerimise aeg';
$lang['SortBy-posts'] = 'Postitused';
$lang['SortBy-latest_post'] = 'Viimased postitused';
$lang['SortBy-topic_title'] = 'Teema pealkiri';
$lang['SortBy-forum'] = 'Foorum';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Vastuseid';
$lang['SortBy-views'] = 'Vaateid';
$lang['SortOrder-asc'] = 'Suurenev';
$lang['SortOrder-desc'] = 'Vähenev';
$lang['NoUsersFound'] = 'Ei leitud liimeid.';
$lang['SaveConfigManually'] = 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Näita tulemusi kui';
$lang['ShowMode-topics'] = 'Teemad';
$lang['ShowMode-posts'] = 'Postitused';
$lang['Mode-and'] = 'Kõik võtmesõnad (AND)';
$lang['Mode-or'] = 'Mõni võtmesõnadest (OR)';
$lang['ExactMatch'] = 'Täpne vaste';
$lang['IncludeGuests'] = 'Kaasa külalised';
$lang['Top'] = 'Üles';
$lang['Bottom'] = 'Alla';
$lang['Action'] = 'tegevus';
$lang['AntiSpamQuestion'] = 'Spamivastane küsimus';
$lang['AntiSpamQuestionInfo'] = 'Palun vasta alltoodud küsimusele. See aitab võidelda spam-i postitajate vastu.';
$lang['Question'] = 'Küsimus';
$lang['Answer'] = 'Vastus';
$lang['AntiSpamQuestionMathPlus'] = 'Kui palju on %d pluss %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Kui palju on %d miinus %d?';
$lang['AntiSpamWrongAnswer'] = 'Vastus on vale, proovi uuesti.';

?>
