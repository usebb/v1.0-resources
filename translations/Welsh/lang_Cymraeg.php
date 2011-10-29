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
$lang['character_encoding'] = 'utf-8';
$lang['language_code'] = 'cy';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Hafan'; // 'Home';
$lang['YourPanel'] = 'Eich Panel'; // 'Your Panel';
$lang['Register'] = 'Cofrestru'; // 'Register';
$lang['FAQ'] = 'Cwestiynau Cyffredin'; // 'FAQ';
$lang['Search'] = 'Chwilio'; // 'Search';
$lang['ActiveTopics'] = 'Pynciau Actif'; // 'Active Topics';
$lang['LogIn'] = 'Logio i Mewn'; // 'Log In';
$lang['LogOut'] = 'Logio Allan (%s)'; // 'Log Out (%s)';
$lang['MemberList'] = 'Rhestr Aelodau'; // 'Member List';
$lang['StaffList'] = 'Rhestr Staff'; // 'Staff List';
$lang['Statistics'] = 'Ystadegau'; // 'Statistics';
$lang['ContactAdmin'] = 'Cysylltu â\'r Gweinyddwyr'; // 'Contact Admin';
$lang['Forum'] = 'Fforwm'; // 'Forum';
$lang['Topics'] = 'Pynciau'; // 'Topics';
$lang['Posts'] = 'Postiadau'; // 'Posts';
$lang['LatestPost'] = 'Postiad Diweddaraf'; // 'Latest Post';
$lang['RSSFeed'] = 'RSS Feed'; // 'RSS Feed';
$lang['NewPosts'] = 'Postiadau newydd'; // 'New posts';
$lang['NoNewPosts'] = 'Dim postiadau newydd'; // 'No new posts';
$lang['LockedNewPosts'] = 'Dan glo (postiadau newydd)'; // 'Locked (new posts)';
$lang['LockedNoNewPosts'] = 'Dan glo (dim postiadau newydd)'; // 'Locked (no new posts)';
$lang['Locked'] = 'Dan glo'; // 'Locked';
$lang['LastLogin'] = 'Logio i mewn diwethaf'; // 'Last login';
$lang['VariousInfo'] = 'Gwybodaeth Amrywiol'; // 'Various Information';
$lang['IndexStats'] = 'Mae\'r bwrdd hwn yn cynnwys %d o bostiadau mewn %d o bynciau ac mae %d o aelodau wedi cofrestru arno.'; // 'This board contains %d posts in %d topics and has %d registered members.';
$lang['NewestMemberExtended'] = 'Croeso i\'n haelod diweddaraf: %s'; // 'Welcome to our newest member: %s.';
$lang['Username'] = 'Enw defnyddiwr'; // 'Username';
$lang['CurrentPassword'] = 'Cyfrinair cyfredol'; // 'Current password';
$lang['UserID'] = 'ID Defnyddiwr'; // 'User ID';
$lang['NoSuchForum'] = 'Nid yw fforwm %s yn bodoli (bellach) ar y bwrdd hwn!'; // 'The forum %s does not exist (anymore) at this board!';
$lang['WrongPassword'] = 'Rwy\'n ofni nad dyna\'r cyfrinair cywir! Gofynnwch am gyfrinair newydd trwy\'r ffurflen logio i mewn os ydych wedi\'i anghofio.'; // 'Sorry, but that password isn\'t correct! Request a new password via the login form if you\'ve forgotten it.';
$lang['Reset'] = 'Ailosod'; // 'Reset';
$lang['SendPassword'] = 'Anfon cyfrinair newydd'; // 'Send a new password';
$lang['RegisterNewAccount'] = 'Cofrestru cyfrif newydd'; // 'Register a new account';
$lang['RememberMe'] = 'Cofia fi'; // 'Remember me';
$lang['Yes'] = 'Ydw'; // 'Yes';
$lang['No'] = 'Nac ydw'; // 'No';
$lang['NotActivated'] = 'Nid yw eich cyfrif %s wedi cael ei actifadu eto. Gwiriwch y blwch e-bost rydych wedi\'i gofrestru gyda\'r fforwm hwn i gael cyfarwyddiadau ar sut i actifadu eich cyfrif, os gwelwch yn dda.'; // 'Your account %s has not been activated yet. Please check your mail box you\'ve registered with on this forum for instructions on how to activate your account.';
$lang['Error'] = 'Gwall'; // 'Error';
$lang['Profile'] = 'Proffil %s'; // 'Profile of %s';
$lang['Level'] = 'Lefel'; // 'Level';
$lang['Administrator'] = 'Gweinyddydd'; // 'Administrator';
$lang['Moderator'] = 'Cymedrolwr'; // 'Moderator';
$lang['Registered'] = 'Wedi Cofrestru'; // 'Registered';
$lang['Email'] = 'Cyfeiriad e-bost'; // 'E-mail address';
$lang['ContactInfo'] = 'Gwybodaeth Gyswllt'; // 'Contact Information';
$lang['Password'] = 'Cyfrinair'; // 'Password';
$lang['PasswordAgain'] = 'Cyfrinair (eto)'; // 'Password (again)';
$lang['EverythingRequired'] = 'Mae pob maes yn orfodol!'; // 'All fields are required!';
$lang['RegisteredNotActivated'] = 'Mae eich cyfrif %s bellach wedi cael ei greu. Anfonwyd e-bost at %s gyda chyfarwyddiadau ar sut i actifadu eich cyfrif. Mae angen i chi ei actifadu er mwyn logio i mewn i\'ch cyfrif.'; // 'Your account %s has now been created. An e-mail has been dispatched to %s with instructions on how to activate your account. You need to activate in order to log in with your account.';
$lang['RegisteredActivated'] = 'Mae eich cyfrif %s bellach wedi cael ei greu. Gallwch logio i mewn ar unwaith.'; // 'Your account %s has now been created. You can log in right away.';
$lang['Never'] = 'Byth'; // 'Never';
$lang['Member'] = 'Aelod'; // 'Member';
$lang['RegistrationActivationEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych newydd gofrestru cyfrif o\'r enw [account_name], ond nid yw wedi cael ei actifadu eto. Cliciwch ar y ddolen isod i actifadu eich cyfrif:

[activate_link]

neu copïwch hi a\'i phastio i mewn i\'ch porwr. Wedyn gallwch logio i mewn gyda\'r enw defnyddiwr a\'r cyfrinair hwn:

Enw defnyddiwr: [account_name]
Cyfrinair: [password]

Os anghofiwch eich cyfrinair, gallwch ofyn am un newydd trwy\'r ddolen ar y ffurflen logio i mewn. Diolch am gofrestru!

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just registered an account named [account_name], but it has not been activated yet. Please click the link below to activate your account:

[activate_link]

or copy-n-paste it to your browser. Then you can log in using this username and password:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. Thank you for registering!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Mae hwn yn fwrdd gwag. Nid yw\'r gweinyddydd wedi creu unrhyw fforymau eto.'; // 'This is an empty board. The administrator has not yet created any forums.';
$lang['AlreadyActivated'] = 'Mae cyfrif gyda\'r ID %d eisoes wedi cael ei actifadu.'; // 'Account with ID %d has already been activated.';
$lang['Activate'] = 'Actifadu'; // 'Activate';
$lang['Activated'] = 'Mae eich cyfrif %s bellach wedi cael ei (ail)actifadu. Cewch eich logio i mewn yn awtomatig.'; // 'Your account %s has now been (re)activated. You will be logged in automatically.';
$lang['WrongActivationKey'] = 'Ni allem actifadu eich cyfrif gydag ID %d. Mae\'r allwedd actifadu yn anghywir. Ydych chi\'n sicr nad ydych wedi gofyn am gyfrinair newydd yn y cyfamser?'; // 'We were unable to activate your account with ID %d. The activation key is incorrect. Are you sure you didn\'t request a new password in the mean time?';
$lang['RegisterIt'] = 'Gallwch ei greu trwy\'r ddolen \'Cofrestru\'.'; // 'You can create it via the \'Register\' link.';
$lang['BoardClosed'] = 'Bwrdd ar Gau'; // 'Board Closed';
$lang['SendpwdEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych chi newydd gofyn am gyfrinair newydd am gyfrif [account_name]. Gallwch logio i mewn gyda\'r enw defnyddiwr a\'r cyfrinair hwn:

Enw defnyddiwr: [account_name]
Cyfrinair: [password]

Os anghofiwch eich cyfrinair, gallwch ofyn am un newydd trwy\'r ddolen ar y ffurflen logio i mewn.

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just requested a new password for account [account_name]. You can log in using this username and password:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Cyfrinair newydd'; // 'New Password';
$lang['SendpwdActivated'] = 'Anfonwyd y cyfrinair newydd ar gyfer eich cyfrif %s at %s. Yn awr gallwch logio i mewn gyda\'ch cyfrinair newydd.'; // 'The new password for your account %s has been sent to %s. You are now able to login with your new password.';
$lang['ForumIndex'] = 'Mynegai\'r Fforwm'; // 'Forum Index';
$lang['MissingFields'] = 'Roedd y meysydd dilynol gorfodol ar goll neu\'n anghywir: %s'; // 'The following required fields were missing or incorrect: %s.';
$lang['TermsOfUseContent'] = 'Rydych yn cydnabod mai barn yr awduron yw\'r holl bostiadau a geir ar y bwrdd hwn, yn hytrach nag eiddo gwefeistr y wefan, gweinyddwyr y fforwm neu\'r cymedrolwyr, ac eithrio postiadau a ysgrifennwyd gan un ohonynt hwy

Rydych yn cytuno i beidio â phostio unrhyw gynnwys sarhaus, tramgwyddus, anweddus neu amhriodol neu gynnwys a waherddir yn ôl y gyfraith ar y fforymau hyn. Gall gwneud hynny beri bod eich cyfrif ar y fforymau hyn yn cael ei wahardd neu ei ddileu a bod eich darparwr gwasanaeth ar y rhyngrwyd yn cael ei hysbysu am eich ymddygiad yn y pen draw. O\'r herwydd, caiff eich cyfeiriad IP ei storio gyda phob un o\'ch postiadau. Rydych hefyd yn cytuno bod hawl gan y gweinyddwyr a\'r cymedrolwyr i olygu, dileu, symud neu gloi eich pynciau pan dybiant fod angen gwneud hynny.

Mae\'r holl wybodaeth a bostiwch ar y fforymau hyn yn cael ei storio mewn system cronfa ddata er hwylustod cyfeirio yn y dyfodol. Ni fydd gweinyddwyr y bwrdd yn ailddosbarthu\'r wybodaeth hon heb eich caniatâd, oni bai eu bod o dan rwymedigaeth gyfreithiol. Fodd bynnag, ni ellir barnu mai\'r gwefeistr, y gweinyddwyr na\'r cymedrolwyr, na Thîm UseBB sy\'n gyfrifol pan gaiff unrhyw wybodaeth ei rhyddhau\'n anfwriadol o ganlyniad i ymgais i dorri i mewn i\'r safle.

Mae\'r bwrdd hwn yn defnyddio cwcis i storio gwybodaeth dros dro y mae ei hangen ar system y fforwm ar eich cyfrifiadur lleol. Hefyd, gall cwci storio eich ID defnyddiwr a\'ch cyfrinair mewn ffurf wedi\'i amgryptio i alluogi logio i mewn i\'ch cyfrif yn awtomatig os dewiswyd yr opsiwn hwnnw gennych. Os nad ydych am i unrhyw gwcis gael eu storio ar eich cyfrifiadur, cyfeiriwch at lawlyfr eich porwr i weld sut mae analluogi cwcis.

Drwy glicio ar y botwm "Rwy\'n derbyn", rydych yn cytuno i\'r telerau a\'r amodau hyn.';


$orig = 'You acknowledge that all posts found at this board are the opinions of its authors and not of the web site\'s webmaster, forum administrators or moderators, except for posts written by one of them.

You agree not to post any abusive, offensive, obscene or inappropriate content or content that is forbidden by law on these forums. Doing so can cause your account on these forums to get banned or removed and your internet service provider eventually notified about your behaviour. Therefore, your IP address is stored with every post you place. You also agree that administrators and moderators are permitted to edit, delete, move or lock your topics when they think this is needed.

All information you post to these forums is being stored in a database system for future reference. The board administrators will not redistribute this information without your permission or obligation by legal issues. However, neither the webmaster, administrators or moderators nor the UseBB Team can be held responsible when any information is being leaked as a result of a hacking attempt.

This board uses cookies to store temporary information needed by the forum system on your local computer. Also, a cookie can store your user ID and your password in an encrypted form to enable automatic login of your account if you chose to enable this. If you don\'t want any cookies to be stored on your computer, refer to your browser\'s manual about disabling cookies.

By clicking the "I accept" button, you agree to these terms and conditions.';
$lang['TermsOfUse'] = 'Telerau Defnydd'; // 'Terms Of Use';
$lang['RegistrationActivationEmailSubject'] = 'Actifadu Cyfrif'; // 'Account Activation';
$lang['NeedToBeLoggedIn'] = 'Mae rhaid i chi fod wedi logio i mewn i wneud hyn. Cliciwch ar y ddolen \'Logio i Mewn\' i logio i mewn neu \'Cofrestru\' i greu cyfrif newydd.'; // 'You need to be logged in to do this. Click the \'Log In\' link to log in or \'Register\' to create a new account.';
$lang['WrongEmail'] = 'Mae\'n flin gen i, ond nid %s yw\'r cyfeiriad e-bost cywir ar gyfer eich cyfrif %s. Os na allwch gofio eich cyfeiriad e-bost, cysylltwch â gweinyddwyr y bwrdd, os gwelwch yn dda.'; // 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'Pwnc'; // 'Topic';
$lang['Author'] = 'Awdur'; // 'Author';
$lang['Replies'] = 'Ymatebion'; // 'Replies';
$lang['Views'] = 'Golygiadau'; // 'Views';
$lang['Note'] = 'Nodyn'; // 'Note';
$lang['Hidden'] = 'Cuddiedig'; // 'Hidden';
$lang['ACP'] = 'ACP'; // 'ACP';
$lang['SendMessage'] = 'Anfon neges'; // 'Send a message';
$lang['NoViewableForums'] = 'Nid oes gennych ganiatâd i edrych ar unrhyw fforymau gyda\'r lefel defnyddiwr hwn. Os nad ydych wedi logio i mewn, gwnewch hynny. Os ydych eisoes wedi logio i mewn, mae\'n debygol na ddylech fod yma.'; // 'You don\'t have permission to view any forums with this user level. If you are not logged in, do so. If you are logged in, you probably shouldn\'t be here.';
$lang['Rank'] = 'Safle'; // 'Rank';
$lang['Location'] = 'Lleoliad'; // 'Location';
$lang['Website'] = 'Gwefan'; // 'Website';
$lang['Occupation'] = 'Galwedigaeth'; // 'Occupation';
$lang['Interests'] = 'Diddordebau'; // 'Interests';
$lang['MSNM'] = 'Windows Live Messenger'; // 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger'; // 'Yahoo! Messenger';
$lang['AIM'] = 'AIM'; // 'AIM';

$lang['ICQ'] = 'ICQ'; // 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP'; // 'Jabber/XMPP';
$lang['BannedIP'] = 'Mae eich cyfeiriad IP %s wedi cael ei wahardd o\'r bwrdd hwn.'; // 'Your IP address %s has been banned from this board.';
$lang['Avatar'] = 'Afatar'; // 'Avatar';
$lang['AvatarURL'] = 'URL yr Afatar'; // 'Avatar URL';
$lang['BannedUser'] = 'Cyfrif wedi\'i Wahardd'; // 'Banned Account';
$lang['BannedUserExplain'] = 'Mae eich cyfrif %s yn cael ei wahardd o\'r bwrdd hwn. Y rheswm am hynny yw:'; // 'Your account %s is being banned from this board. The reason is:';
$lang['BannedUsername'] = 'Mae\'r enw defnyddiwr %s yn cael ei wahardd o\'r bwrdd hwn. Dewiswch un arall, os gwelwch yn dda.'; // 'The username %s is being banned from this board. Please choose another one.';
$lang['BannedEmail'] = 'Mae\'r cyfeiriad e-bost %s yn cael ei wahardd o\'r bwrdd hwn. Dewiswch un arall, os gwelwch yn dda.'; // 'The e-mail address %s is being banned from this board. Please choose another one.';
$lang['PostsPerDay'] = 'Postiadau y diwrnod'; // 'Posts per day';
$lang['BoardClosedOnlyAdmins'] = 'Dim ond gweinyddwyr gaiff logio i mewn pan fo\'r bwrdd ar gau.'; // 'Only administrators can log in when the board is closed.';
$lang['NoPosts'] = 'Dim Postiadau'; // 'No Posts';
$lang['NoActivetopics'] = 'Ar hyn o bryd nid oes pynciau actif ar y bwrdd hwn.'; // 'This board currently does not have any active topics.';
$lang['AuthorDate'] = 'Gan %s ar %s'; // 'By %s on %s';
$lang['ByAuthor'] = 'Gan: %s'; // 'By: %s';
$lang['OnDate'] = 'Ar: %s'; // 'On: %s';
$lang['Re'] = 'Ynghylch:'; // 'Re:';
$lang['MailForm'] = 'Anfon e-bost at %s'; // 'Send an e-mail to %s';
$lang['SendEmail'] = 'Anfon neges at %s'; // 'Send a message to %s';
$lang['NoMails'] = 'Mae\'r defnyddiwr hwn wedi dewis peidio â derbyn unrhyw e-byst'; // 'This user has chosen not to receive any e-mails.';
$lang['UserEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Mae\'r defnyddiwr [username] wedi anfon y neges hon atoch chi drwy ein bwrdd. Mae corff y neges yn dilyn.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. The user [username] has sent this message to you via our board. The message body follows.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Anfonwyd eich e-bost at %s yn llwyddiannus!'; // 'Your e-mail to %s has been sent successfully!';
$lang['To'] = 'At'; // 'To';
$lang['From'] = 'Oddi wrth'; // 'From';
$lang['Subject'] = 'Pwnc'; // 'Subject';
$lang['Body'] = 'Corff'; // 'Body';
$lang['Send'] = 'Anfon'; // 'Send';
$lang['EditProfile'] = 'Golygu Proffil'; // 'Edit Profile';
$lang['EditOptions'] = 'Golygu Opsiynau'; // 'Edit Options';
$lang['EditPasswd'] = 'Golygu Cyfrinair'; // 'Edit Password';
$lang['PanelHome'] = 'Hafan Panel'; // 'Panel Home';
$lang['NewEmailNotActivated'] = 'Mae eich proffil wedi cael ei olygu yn llwyddiannus. Oherwydd eich bod wedi newid cyfeiriad e-bost eich cyfrif %s, mae rhaid i chi ei ailactifadu. Anfonwyd e-bost at %s gyda chyfarwyddiadau ar sut i wneud hyn. Yn y cyfamser byddwch wedi logio allan.'; // 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, you need to reactivate it. An e-mail has been sent to %s with instructions on how to do this. You will be logged out in the mean time.';
$lang['Required'] = 'Gorfodol'; // 'Required';
$lang['ViewProfile'] = 'Gweld Proffil'; // 'View Profile';
$lang['NewEmailActivationEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych chi newydd newid cyfeiriad e-bost eich cyfrif [account_name], ond nid yw wedi cael ei ailactifadu eto. Cliciwch ar y ddolen isod i ailactifadu eich cyfrif:

[activate_link]

neu copïwch hi a\'i phastio i mewn i\'ch porwr.

Os anghofiwch eich cyfrinair, gallwch ofyn am un newydd trwy\'r ddolen ar y ffurflen logio i mewn.

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. Please click the link below to reactivate your account:

[activate_link]

or copy-n-paste it to your browser.

If you forget your password, you can request a new one via the link on the login form.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Ailactifadu Cyfrif'; // 'Account Reactivation';
$lang['Signature'] = 'Llofnod'; // 'Signature';
$lang['SessionInfo'] = 'Gwybodaeth am Sesiwn'; // 'Session Information';
$lang['SessionID'] = 'ID Sesiwn'; // 'Session ID';
$lang['IPAddress'] = 'Cyfeiriad IP'; // 'IP address';
$lang['Seconds'] = 'Eiliadau'; // 'Seconds';
$lang['Updated'] = 'Diweddarwyd'; // 'Updated';
$lang['Pages'] = 'Tudalennau'; // 'Pages';
$lang['AutoLogin'] = 'Logio i mewn yn awtomatig'; // 'Auto login';
$lang['Enabled'] = 'Galluogwyd'; // 'Enabled';
$lang['Disabled'] = 'Analluogwyd'; // 'Disabled';
$lang['Enable'] = 'Galluogi'; // 'Enable';
$lang['Disable'] = 'Analluogi'; // 'Disable';
$lang['AutoLoginSet'] = 'Mae\'r cwci logio i mewn yn awtomatig bellach wedi\'i osod.'; // 'The auto login cookie has now been set.';
$lang['AutoLoginUnset'] = 'Mae\'r cwci logio i mewn yn awtomatig bellach wedi\'i ddadosod.'; // 'The auto login cookie has now been unset.';
$lang['RegistrationEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych chi newydd gofrestru cyfrif o\'r enw [account_name]. Gallwch logio i mewn gyda\'r enw defnyddiwr a\'r cyfrinair hwn:

Enw defnyddiwr: [account_name]
Cyfrinair: [password]

Os anghofiwch eich cyfrinair, gallwch ofyn am un newydd trwy\'r ddolen ar y ffurflen logio i mewn. Diolch am gofrestru!

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just registered an account named [account_name]. You can log in using this username and password:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. Thank you for registering!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Cofrestru Cyfrif'; // 'Account Registration';
$lang['PublicEmail'] = 'Cyfeiriad e-bost cyhoeddus'; // 'Public e-mail address';
$lang['PublicLastLogin'] = 'Amser logio i mewn cyhoeddus diwethaf'; // 'Public last login time'; 

$lang['DateFormat'] = 'Fformat y dyddiad'; // 'Date format';
$lang['DateFormatHelp'] = 'Mae cystrawen fformat y dyddiad yn cyfateb i swyddogaeth %s yn PHP.'; // 'The date format syntax equals to the %s function in PHP.';
$lang['Again'] = 'Eto'; // 'Again';
$lang['NewPassword'] = 'Cyfrinair newydd'; // 'New password';
$lang['NewPasswordAgain'] = 'Cyfrinair newydd (eto)'; // 'New password (again)';
$lang['PasswordEdited'] = 'Golygwyd eich cyfrinair yn llwyddiannus'; // 'Your password has been edited successfully.';
$lang['DetailedOnlineList'] = 'Rhestr ar-lein fanwl'; // 'Detailed online list';
$lang['Detailed'] = 'Manwl'; // 'Detailed';
$lang['OptionsEdited'] = 'Golygwyd eich opsiynau bwrdd yn llwyddiannus.'; // 'Your board options have been edited succesfully.';
$lang['ProfileEdited'] = 'Golygwyd eich proffil yn llwyddiannus.'; // 'Your profile has been edited succesfully.';
$lang['Started'] = 'Dechreuodd'; // 'Started';
$lang['Minutes'] = 'Munudau'; // 'Minutes';
$lang['Hours'] = 'Oriau'; // 'Hours';
$lang['Days'] = 'Diwrnodau'; // 'Days';
$lang['Weeks'] = 'Wythnosau'; // 'Weeks';
$lang['TotalTime'] = 'Cyfanswm amser'; // 'Total time';
$lang['NoTopics'] = 'Nid yw\'r fforwm hwn yn cynnwys unrhyw bynciau. Gallech chi bostio\'r un cyntaf!'; // 'This forum does not contain any topics. You could post the first one!';
$lang['NotPermitted'] = 'Nid oes gennych ganiatâd priodol i wneud hyn. Os nad ydych yn sicr, cysylltwch â\'r gweinyddydd.'; // 'You don\'t have the appropriate permissions to do this. If in doubt, contact the administrator.';
$lang['Language'] = 'Iaith'; // 'Language';
$lang['Template'] = 'Templed'; // 'Template';
$lang['NoSuchMember'] = 'Nid yw\'r aelod %s yn bodoli (bellach) ar y bwrdd hwn.'; // 'The member %s does not exist (anymore) at this board.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Mae\'r nodwedd hon wedi ei hanalluogi oherwydd nad yw\'r bwrdd hwn yn gallu gosod na darllen cwcis â\'ch porwr.'; // 'This feature is disabled because this board can not set or read cookies with your browser.';
$lang['LogOutConfirm'] = 'Ydych chi\'n sicr eich bod chi am logio allan?'; // 'Are you sure you wish to log out?';
$lang['Cancel'] = 'Canslo'; // 'Cancel';
$lang['Timezone'] = 'Parth amser'; // 'Timezone';
$lang['DST'] = 'Amserau arbed golau ddydd'; // 'Daylight saving times';
$lang['Sticky'] = 'Stici'; // 'Sticky';
$lang['PostNewTopic'] = 'Pwnc Newydd'; // 'New Topic';
$lang['ForumIsLocked'] = 'Mae\'r fforwm dan glo'; // 'Forum is locked';
$lang['NoSuchTopic'] = 'Nid yw\'r pwnc %s yn bodoli (bellach) ar y bwrdd hwn.'; // 'The topic %s does not exist (anymore) at this board.';
$lang['PostReply'] = 'Postio Ateb'; // 'Post Reply';
$lang['TopicIsLocked'] = 'Mae\'r pwnc dan glo'; // 'Topic is locked';
$lang['Post'] = 'Postiad'; // 'Post';
$lang['Edit'] = 'Golygu'; // 'Edit';
$lang['Delete'] = 'Dileu'; // 'Delete';
$lang['Quote'] = 'Dyfynnu'; // 'Quote';
$lang['Wrote'] = 'Ysgrifennodd %s'; // '%s wrote';
$lang['ViewingIP'] = 'IP: %s'; // 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Mae\'r pwnc yr ydych yn ceisio postio ynddo dan glo. Dim ond y rheiny sydd wedi\'u hawdurdodi sy\'n medru postio ymateb o hyd.'; // 'The topic you are trying to post in is locked. Only authorized people can still post replies.';
$lang['Content'] = 'Cynnwys'; // 'Content';
$lang['Options'] = 'Opsiynau'; // 'Options';
$lang['EnableBBCode'] = 'Galluogi BBCode.'; // 'Enable BBCode.';
$lang['EnableSmilies'] = 'Galluogi smilies'; // 'Enable smilies.';
$lang['EnableSig'] = 'Galluogi llofnod'; // 'Enable signature.';
$lang['EnableHTML'] = 'Galluogi HTML'; // 'Enable HTML.';
$lang['LockTopicAfterPost'] = 'Cloi\'r pwnc ar ôl postio.'; // 'Lock topic after posting.';
$lang['Guest'] = 'Gwestai'; // 'Guest';
$lang['BackToPrevious'] = 'Yn ôl i\'r dudalen flaenorol.'; // 'Back to the previous page';
$lang['NoSuchPost'] = 'Nid yw\'r postiad %s yn bodoli (bellach) ar y bwrdd hwn.'; // 'The post %s does not exist (anymore) at this board.';
$lang['UserPostedImage'] = 'Delwedd a bostiwyd gan ddefnyddiwr.'; // 'User posted image';
$lang['ForumIsLockedExplain'] = 'Mae\'r fforwm hwn dan glo. Dim ond y rheiny sydd wedi\'u hawdurdodi sy\'n medru postio pynciau newydd.'; // 'This forum is locked. Only authorized people can post new topics.';
$lang['MakeTopicSticky'] = 'Gwneud y pwnc yn un stici'; // 'Make the topic sticky.';
$lang['QuickReply'] = 'Ateb yn gyflym'; // 'Quick reply';
$lang['ReturnToTopicAfterPosting'] = 'Dychwelyd at y pwnc ar ôl postio'; // 'Return to the topic after posting';
$lang['ModeratorList'] = 'Cymedrolwyr: %s.'; // 'Moderators: %s.';
$lang['Nobody'] = 'Neb'; // 'Nobody';
$lang['DeleteTopic'] = 'Dileu Pwnc'; // 'Delete topic';
$lang['MoveTopic'] = 'Symud Pwnc'; // 'Move topic';
$lang['LockTopic'] = 'Cloi Pwnc'; // 'Lock topic';
$lang['UnlockTopic'] = 'Datgloi Pwnc'; // 'Unlock topic';
$lang['MakeSticky'] = 'Gwneud yn stici'; // 'Make sticky';
$lang['ConfirmDeleteTopic'] = 'Ydych chi\'n sicr eich bod chi am ddileu\'r pwnc %s yn y fforwm %s? Ni ellir ei newid yn ôl!'; // 'Are you sure you want to delete the topic %s in the forum %s? This is irreversible!';
$lang['MakeNormalTopic'] = 'Gwneud pwnc arferol'; // 'Make normal topic';
$lang['OldForum'] = 'Hen fforwm'; // 'Old forum';
$lang['NewForum'] = 'Fforwm newydd'; // 'New forum';
$lang['IAccept'] = 'Cytuno'; // 'I accept';
$lang['IDontAccept'] = 'Anghytuno'; // 'I don\'t accept';
$lang['OpenLinksNewWindow'] = 'Agor dolenni allanol mewn ffenestri newydd'; // 'Open external links in new windows';
$lang['HideAllAvatars'] = 'Cuddio pob afatar'; // 'Hide all avatars';
$lang['HideUserinfo'] = 'Cuddio gwybodaeth am y defnyddiwr'; // 'Hide user information';
$lang['HideAllSignatures'] = 'Cuddio pob llofnod'; // 'Hide all signatures';
$lang['HideFromOnlineList'] = 'Cuddio o\'r rhestr ar-lein'; // 'Hide from online list';
$lang['PageLinks'] = 'Tudalen: %s'; // 'Page: %s';
$lang['Preview'] = 'Rhagolwg'; // 'Preview';
$lang['DeletePost'] = 'Dileu postiad'; // 'Delete post';
$lang['ConfirmDeletePost'] = 'Ydych chi\'n sicr eich bod am ddileu\'r postiad hwn yn y pwnc %s? Ni ellir ei newid yn ôl!'; // 'Are you sure you want to delete this post in the topic %s? This is irreversible!';
$lang['EditPost'] = 'Golygu postiad'; // 'Edit post';
$lang['PostEditInfo'] = 'Golygwyd ddiwethaf gan %s ar %s.'; // 'Last edit by %s on %s.';
$lang['PasswdInfo'] = 'Rhaid i\'r cyfrinair gynnwys nodau alffaniwmerig yn unig, a rhaid iddo gynnwys o leiaf %d o nodau.'; // 'The password can only contain alphanumeric characters and has a minimum length of %d characters.';
$lang['SubscribeTopic'] = 'Cofrestru'; // 'Subscribe';
$lang['UnsubscribeTopic'] = 'Dadgofrestru'; // 'Unsubscribe';
$lang['NewReplyEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Postiodd rhywun ([poster_name]) ateb i bwnc rydych chi wedi cofrestru ar ei gyfer ("[topic_title]"). I weld yr ateb, cliciwch ar y ddolen ganlynol: [topic_link]

Cliciwch ar y ddolen ganlynol os ydych am ddadgofrestru o\'r pwnc (bydd angen i chi logio i mewn): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. Someone ([poster_name]) posted a reply to a topic you are subscribed to ("[topic_title]"). To view the reply, please click the following link: [topic_link].

Click the following link if you wish to unsubscribe from the topic (requires login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Ateb newydd yn "%s"'; // 'New reply in "%s"';
$lang['SubscribedTopic'] = 'Rydych bellach wedi cofrestru ar gyfer y pwnc hwn.'; // 'You are now subscribed to this topic.';
$lang['UnsubscribedTopic'] = 'Rydych bellach wedi dadgofrestru o\'r pwnc hwn.'; // 'You are now unsubscribed from this topic.';
$lang['SubscribeToThisTopic'] = 'Cofrestru ar gyfer y pwnc hwn.'; // 'Subscribe to this topic.';
$lang['OK'] = 'Iawn'; // 'OK';
$lang['Subscriptions'] = 'Cofrestriadau'; // 'Subscriptions';
$lang['NoSubscribedTopics'] = 'Ar hyn o bryd nid ydych wedi cofrestru ar gyfer unrhyw bynciau.'; // 'You currently aren\'t subscribed to any topic.';
$lang['LatestUpdate'] = 'Manylion diweddaraf'; // 'Latest update';
$lang['Unknown'] = 'Anhysbys'; // 'Unknown';
$lang['PostingTopic'] = 'Postio pwnc yn %s'; // 'Posting a topic in %s';
$lang['PostingReply'] = 'Postio ateb yn %s'; // 'Posting a reply in %s';
$lang['MovingTopic'] = 'Symud pwnc %s'; // 'Moving topic %s';
$lang['DeletingTopic'] = 'Dileu pwnc %s'; // 'Deleting topic %s';
$lang['EditingPost'] = 'Golygu post in %s'; // 'Editing post in %s';
$lang['DeletingPost'] = 'Dileu post yn %s'; // 'Deleting post in %s';
$lang['DebugMode'] = 'Dull debug'; // 'Debug mode';
$lang['ParseTime'] = 'Amser gramadegu'; // 'Parse time';
$lang['ServerLoad'] = 'Llwyth y gweinydd'; // 'Server load';
$lang['TemplateSections'] = 'Adrannau templed'; // 'Template sections';
$lang['SQLQueries'] = 'Ymholiadau SQL'; // 'SQL queries';
$lang['RealName'] = 'Enw go iawn'; // 'Real name';
$lang['Skype'] = 'Skype'; // 'Skype';
$lang['Administrators'] = 'Gweinyddwyr'; // 'Administrators';
$lang['Moderators'] = 'Cymedrolwyr'; // 'Moderators';
$lang['TopicReview'] = 'Adolygiad Pwnc'; // 'Topic review';
$lang['ViewMorePosts'] = 'Edrych ar fwy o bostiadau'; // 'View more posts';
$lang['DisplayedName'] = 'Enw arddangos'; // 'Displayed name';
$lang['UsernameInfo'] = 'Rhaid i enw defnyddiwr gynnwys nodau alffaniwmerig, bylchau, _ a - yn unig'; // 'A username can only contain alphanumeric characters, spaces, _ and -.';
$lang['Code'] = 'Côd'; // 'Code';
$lang['Img'] = 'Llun'; // 'Img';
$lang['URL'] = 'URL'; // 'URL';
$lang['Color'] = 'Lliw'; // 'Color';
$lang['Size'] = 'Maint'; // 'Size';
$lang['ViewingForum'] = 'Fforwm: %s'; // 'Forum: %s';
$lang['ViewingTopic'] = 'Pwnc: %s'; // 'Topic: %s';
$lang['FloodIntervalWarning'] = 'Mae\'r gweinyddydd wedi nodi na chewch bostio ond wedi ysbaid o %d eiliad. Arhoswch o leiaf %d eiliad cyn ailgyflwyno\'r ffurflen, os gwelwch yn dda'; // 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Cofrestru yn awtomatig'; // 'Auto subscribe';
$lang['OnPostingNewTopics'] = 'Adeg postio pynciau'; // 'On posting topics';
$lang['OnPostingNewReplies'] = 'Adeg postio atebion'; // 'On posting replies';
$lang['UnsubscribeSelected'] = 'Dadgofrestru wedi ei ddewis'; // 'Unsubscribe selected';
$lang['SelectedTopicsUnsubscribed'] = 'Rydych bellach wedi dadgofrestru o\'r pynciau a ddewiswyd.'; // 'You are now unsubscribed from the selected topics.';
$lang['Birthday'] = 'Pen-blwydd'; // 'Birthday';
$lang['Age'] = 'Oedran'; // 'Age';
$lang['Month'] = 'Mis'; // 'Month';
$lang['Day'] = 'Diwrnod'; // 'Day';
$lang['Year'] = 'Blwyddyn'; // 'Year';
$lang['PoweredBy'] = 'Mae %s yn cael ei bweru gan %s'; // '%s is powered by %s';
$lang['ForumSoftware'] = 'Meddalwedd Fforwm'; // 'Forum Software';
$lang['GeneralStats'] = 'Ystadegau cyffredinol'; // 'General statistics';
$lang['Members'] = 'Aelodau'; // 'Members';
$lang['TopicsPerDay'] = 'Pynciau y diwrnod'; // 'Topics per day';
$lang['MembersPerDay'] = 'Aelodau y diwrnod'; // 'Members per day';
$lang['BoardStarted'] = 'Bwrdd wedi cychwyn'; // 'Board started';
$lang['BoardAge'] = 'Hyd oes y bwrdd'; // 'Board age';
$lang['NewestMember'] = 'Aelod diweddaraf'; // 'Newest member';
$lang['MostActiveTopics'] = 'Pynciau mwyaf actif'; // 'Most active topics';
$lang['MostViewedTopics'] = 'Pynciau yr edrychwyd arnynt amlaf'; // 'Most viewed topics';
$lang['PostsPerMember'] = 'Postiadau yr aelod'; // 'Posts per member';
$lang['PostsPerForum'] = 'Postiadau fesul fforwm'; // 'Posts per forum';
$lang['Categories'] = 'Categorïau'; // 'Categories';
$lang['Forums'] = 'Fforymau'; // 'Forums';
$lang['TopicsPerMember'] = 'Pynciau yr aelod'; // 'Topics per member';
$lang['TopicsPerForum'] = 'Pynciau fesul fforwm'; // 'Topics per forum';
$lang['MostActiveMembers'] = 'Aelodau mwyaf actif'; // 'Most active members';
$lang['MostActiveForums'] = 'Fforymau mwyaf actif'; // 'Most active forums';
$lang['DisplayedNameTaken'] = 'Mae\'n flin gen i, ond mae %s eisoes wedi cael ei ddewis fel enw defnyddiwr neu enw arddangos.'; // 'Sorry, %s has already been taken as a login name or a displayed name.';
$lang['SearchKeywords'] = 'Allweddeiriau chwilio'; // 'Search keywords';
$lang['SearchMode'] = 'Dull chwilio'; // 'Search mode';
$lang['SearchAuthor'] = 'Chwilio awdur'; // 'Search author';
$lang['SearchForums'] = 'Chwilio Fforymau'; // 'Search forums';
$lang['AllForums'] = 'Pob Fforwm'; // 'All forums';
$lang['NoSearchResults'] = 'Mae\'n flin gen i, ond ni chafwyd hyd i ganlyniadau oedd yn cyfateb i\'r meini prawf a nodwyd gennych.';
$lang['SearchMembersPosts'] = 'Chwilio postiadau aelod'; // 'Search member\'s posts';
$lang['CurrentPage'] = 'Tudalen Gyfredol'; // 'Current page';
// THE PROBLEM WITH THE FOLLOWING IS NOT THE NUMBER 1, BUT THE NUMBER 2! I.E. 2 WESTAI
$lang['MemberGuestOnline'] = 'Yn ystod y %d munud diwethaf, mae %d o aelodau (%d cudd) a %d o westeion wedi ymweld â\'r fforymau.'; // 'In the last %d minutes, %d member (%d hidden) and %d guest have visited the forums.';
$lang['MembersGuestOnline'] = 'Yn ystod y %d munud diwethaf, mae %d o aelodau (%d cudd) a %d o westeion wedi ymweld â\'r fforymau.'; // 'In the last %d minutes, %d members (%d hidden) and %d guest have visited the forums.';
$lang['MemberGuestsOnline'] = 'Yn ystod y %d munud diwethaf, mae %d o aelodau (%d cudd) a %d o westeion wedi ymweld â\'r fforymau.'; // 'In the last %d minutes, %d member (%d hidden) and %d guests have visited the forums.';
$lang['MembersGuestsOnline'] = 'Yn ystod y %d munud diwethaf, mae %d o aelodau (%d cudd) a %d o westeion wedi ymweld â\'r fforymau.'; // 'In the last %d minutes, %d members (%d hidden) and %d guests have visited the forums.';
$lang['WhosOnline'] = 'Pwy sydd ar-lein'; // 'Who\'s Online';
$lang['Done'] = 'Wedi gwneud'; // 'Done';
$lang['KeywordsExplain'] = 'Unrhwy allweddair sy\'n cynnwys %d nod o leiaf, wedi\'u gwahanu gan fylchau'; // 'Any keywords of at least %d characters separated by spaces.';
$lang['BCCMyself'] = 'Anfon copi i\'m cyfeiriad e-bost fy hun'; // 'Send a copy to my own e-mail address.';
$lang['Save'] = 'Arbed'; // 'Save';
$lang['Add'] = 'Ychwanegu'; // 'Add';
$lang['MarkAllAsRead'] = 'Nodi popeth fel wedi eu darllen'; // 'Mark all as read';
$lang['MarkAllAsReadDone'] = 'Nodwyd pob fforwm a phwnc fel rhai wedi eu darllen.'; // 'All forums and topics are now marked as read.';
$lang['StringTooShort'] = 'Mae %s yn rhy fyr, mae angen o leia %d nod.'; // '%s is too short, at least %d characters are required.';
$lang['StringTooLong'] = 'Mae %s yn rhy fawr, dim ond %d nod a ganiateir'; // '%s is too long, only %d characters are allowed.';
$lang['Upload'] = 'Uwchlwytho'; // 'Upload';
$lang['RegistrationsDisabled'] = 'Analluogwyd cofrestru'; // 'Registrations disabled';
$lang['PostFormShortcut'] = 'Gwasgwch Alt+S (Control+S ar Apple) i anfon y ffurflen hon ar unwaith.'; // 'Press Alt+S (Control+S on Apple) to quickly send this form.';
$lang['EditThisMember'] = 'Golygu\'r aelod hwn'; // 'Edit this member';
$lang['EmailTaken'] = 'Mae cyfeiriad e-bost %s eisoes yn cael ei ddefnyddio ar y bwrdd hwn. Dewiswch gyfeiriad gwahanol, os gwelwch yn dda.'; // 'The e-mail address %s is already being used on this board. Please choose an other address.';
$lang['RegisteredNotActivatedByAdmin'] = 'Mae eich cyfrif %s bellach wedi cael ei greu. Cyn i chi allu logio i mewn, bydd rhaid i weinyddydd y fforwm hwn actifadu eich cyfrif. Caniatewch beth amser i hynny ddigwydd, os gwelwch yn dda.'; // 'Your account %s has now been created. Before you will be able to login, the administrator of this forum must activate your account. Please allow some time for this to happen.';
$lang['AdminActivationEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych chi newydd gofrestru cyfrif o\'r enw [account_name]. Mae rhaid i weinyddydd y fforwm actifadu eich cyfrif. Unwaith mae hynny wedi digwydd, gallwch logio i mewn gyda\'r enw defnyddiwr a\'r cyfrinair hwn:

Enw defnyddiwr: [account_name]
Cyfrinair: [password]

Os anghofiwch eich cyfrinair, gallwch ofyn am un newydd trwy\'r ddolen ar y ffurflen logio i mewn. Diolch am gofrestru!

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just registered an account named [account_name]. The administrator of the forum still needs to activate your account. Once this has happened, you can login using the following:

Username: [account_name]
Password: [password]

If you forget your password, you can request a new one via the link on the login form. Thank you for registering!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Cyfrif yn aros i gael ei actifadu'; // 'Account awaiting activation';


$lang['NewEmailNotActivatedByAdmin'] = 'Mae eich proffil wedi cael ei olygu yn llwyddiannus. Oherwydd eich bod wedi newid cyfeiriad e-bost eich cyfrif %s, mae rhaid i weinyddydd y fforwm ei ailactifadu. Yn y cyfamser byddwch wedi logio allan.'; // 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, the admin of this board needs to reactivate it. You will be logged out in the mean time.';
$lang['NewEmailAdminActivationEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Rydych chi newydd newid cyfeiriad e-bost eich cyfrif [account_name], ond nid yw wedi cael ei ailactifadu eto. Mae rhaid i weinyddydd y fforwm ailactifadu eich cyfrif yn gyntaf. Caniatewch beth amser i hyn ddigwydd, os gwelwch yn dda.

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. The administrator of the board first needs to reactivate your account. Please allow some time for this to happen.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Cyfrif yn aros i gael ei ailactifadu'; // 'Account awaiting reactivation';
$lang['AdminActivatedAccountEmailBody'] = 'Helo,

Meddalwedd fforwm [board_name] sy\'n siarad. Mae\'r gweinyddydd wedi actifadu eich cyfrif [account_name]. Gallwch logio i mewn yn awr.

[board_name]
[board_link]
[admin_email]';
$orig = 'Hello,

This is the forum software of [board_name] speaking. The administrator has activated your account [account_name]. You can now log in.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Cyfrif wedi\'i actifadu'; // 'Account activated';
$lang['Sort'] = 'Dosbarthu'; // 'Sort';
$lang['SortBy'] = 'Dosbarthu yn ôl'; // 'Sort by';
$lang['SortBy-displayed_name'] = 'Enw defnyddiwr'; // 'Username';
$lang['SortBy-real_name'] = 'Enw go iawn'; // 'Real name';
$lang['SortBy-level'] = 'Lefel'; // 'Level';
$lang['SortBy-rank'] = 'Safle'; // 'Rank';
$lang['SortBy-regdate'] = 'Wedi cofrestru'; // 'Registered';
$lang['SortBy-posts'] = 'Postiadau'; // 'Posts';
$lang['SortBy-latest_post'] = 'Post diweddaraf'; // 'Latest post';
$lang['SortBy-topic_title'] = 'Teitl y pwnc'; // 'Topic title';
$lang['SortBy-forum'] = 'Fforwm'; // 'Forum';
$lang['SortBy-author'] = 'Awdur'; // 'Author';
$lang['SortBy-replies'] = 'Atebion'; // 'Replies';
$lang['SortBy-views'] = 'Golygiadau'; // 'Views';
$lang['SortOrder-asc'] = 'Esgynnol'; // 'Ascending';
$lang['SortOrder-desc'] = 'Disgynnol'; // 'Descending';
$lang['NoUsersFound'] = 'Ni chafwyd hyd i aelodau.'; // 'No members found.';
$lang['SaveConfigManually'] = 'Oherwydd nad yw config.php yn ysgrifenadwy, nid yw UseBB yn gallu cadw\'r gwerthoedd ffurfweddu ei hunan. Arbedwch y cynhwysion dilynol yn config.php, os gwelwch yn dda, a\'u huwchlwytho os bydd angen.'; // 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Dangos canlyniadau fel'; // 'Show results as';
$lang['ShowMode-topics'] = 'Pynciau'; // 'Topics';
$lang['ShowMode-posts'] = 'Postiadau'; // 'Posts';
$lang['Mode-and'] = 'Pob allweddair (A)'; // 'All keywords (AND)';
$lang['Mode-or'] = 'Unrhyw allweddair (NEU)'; // 'Any keywords (OR)';
$lang['ExactMatch'] = 'Cyfatebiaeth union'; // 'Exact match';
$lang['IncludeGuests'] = 'Cynnwys gwesteion'; // 'Include guests';
$lang['Top'] = 'Brig'; // 'Top';
$lang['Bottom'] = 'Gwaelod'; // 'Bottom';
$lang['Action'] = 'Gweithredu'; // 'Action';
$lang['AntiSpamQuestion'] = 'Cwestiwn gwrth-spam'; // 'Anti-spam question';
$lang['AntiSpamQuestionInfo'] = 'Fel mesur gwrth-spam, mae rhaid i chi ateb y cwestiwn hwn yn gywir er mwyn cyrchu\'r gydran hon o\'r fforwm. Dim ond un cwestiwn a ofynnir ym mhob sesiwn, a bydd cofrestru\'n golygu na ofynnir cwestiynau o gwbl. Diolch am ddeall.'; // 'As an anti-spam measure, you need to answer this question correctly in order to access this component of the forum. Only one question per session will be asked, while registering will disable it completely. Thank you for your understanding.';
$lang['Question'] = 'Cwestiwn'; // 'Question';
$lang['Answer'] = 'Ateb'; // 'Answer';
$lang['AntiSpamQuestionMathPlus'] = 'Faint yw %d plws %d?'; // 'How much is %d plus %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Faint yw %d minws %d?'; // 'How much is %d minus %d?';
$lang['AntiSpamWrongAnswer'] = 'Mae\'r ateb a roddwyd yn anghywir. Llenwch yr ateb cywir i gyrchu\'r gydran hon.'; // 'The submitted answer is wrong. Please fill in the correct answer to access this component.';

?>

