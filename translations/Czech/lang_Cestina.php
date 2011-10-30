<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.109 2006/01/07 14:02:27 pc_freak Exp $
	
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
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
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
$lang['language_code'] = 'cs';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Úvod';
$lang['YourPanel'] = 'Nastavení';
$lang['Register'] = 'Registrace';
$lang['FAQ'] = 'Nápovìda';
$lang['Search'] = 'Vyhledávání';
$lang['ActiveTopics'] = 'Kde to ¾ije';
$lang['LogIn'] = 'Pøihlá¹ení';
$lang['LogOut'] = 'Odhlá¹ení (%s)';
$lang['MemberList'] = 'Seznam u¾ivatelù';
$lang['StaffList'] = 'Seznam správcù';
$lang['Statistics'] = 'Statistiky';
$lang['ContactAdmin'] = 'Kontakt na administrátora';
$lang['Forum'] = 'Fórum';
$lang['Topics'] = 'Témata';
$lang['Posts'] = 'Pøíspìvky';
$lang['LatestPost'] = 'Poslední pøíspìvek';
$lang['RSSFeed'] = 'RSS kanál';
$lang['NewPosts'] = 'Nové pøíspìvky';
$lang['NoNewPosts'] = '®ádné nové pøíspìvky';
$lang['LockedNewPosts'] = 'Uzamèeno (nové pøíspìvky)';
$lang['LockedNoNewPosts'] = 'Uzamèeno (¾ádné nové pøíspìvky)';
$lang['Locked'] = 'Uzamèeno';
$lang['LastLogin'] = 'Poslední pøihlá¹ení';
$lang['VariousInfo'] = 'Dal¹í informace';
$lang['IndexStats'] = 'Fórum obsahuje %d pøíspìvkù v %d tématech. Registrováno je %d u¾ivatelù.';
$lang['NewestMemberExtended'] = 'Poslední registrovaný u¾ivatel: %s.';
$lang['Username'] = 'U¾ivatelské jméno';
$lang['CurrentPassword'] = 'Souèasné heslo';
$lang['UserID'] = 'U¾ivatelské ID';
$lang['NoSuchForum'] = 'Fórum %s neexistuje!';
$lang['WrongPassword'] = 'Omlouváme se, ale heslo nebylo zadáno správnì! Pokud jste heslo zapomnìli, vy¾ádejte si pomocí pøihla¹ovacího formuláøe nové.';
$lang['Reset'] = 'Vynulovat';
$lang['SendPassword'] = 'Poslat nové heslo';
$lang['RegisterNewAccount'] = 'Registrace nového úètu';
$lang['RememberMe'] = 'Pamatovat si pøihlá¹ení';
$lang['Yes'] = 'Ano';
$lang['No'] = 'Ne';
$lang['NotActivated'] = 'Vá¹ úèet %s je¹tì nebyl aktivován. Zkontrolujte, zda vám ji¾ na va¹i e-mailovou adresu do¹ly informace, jak úèet aktivovat.';
$lang['Error'] = 'Chyba';
$lang['Profile'] = 'Profil u¾ivatele %s';
$lang['Level'] = 'Postavení';
$lang['Administrator'] = 'Administrátor';
$lang['Moderator'] = 'Moderátor';
$lang['Registered'] = 'Registrován';
$lang['Email'] = 'E-mailová adresa';
$lang['ContactInfo'] = 'Kontakt';
$lang['Password'] = 'Heslo';
$lang['PasswordAgain'] = 'Heslo (znovu)';
$lang['EverythingRequired'] = 'V¹echna políèka jsou povinná!';
$lang['RegisteredNotActivated'] = 'Vá¹ úèet %s byl vytvoøen. Pøed pøihlá¹ením je v¹ak nutné jej aktivovat. Proto jsme vám na adresu %s zaslali informace, jak aktivaci provést.';
$lang['RegisteredActivated'] = 'Vá¹ úèet %s byl vytvoøen. Nyní se mù¾ete pøihlásit.';
$lang['Never'] = 'Nikdy';
$lang['Member'] = 'Registrovaný u¾ivatel';
$lang['RegistrationActivationEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Zaregistrovali jste si úèet [account_name], ale je¹tì je nutné jej aktivovat. Úèet aktivujete kliknutím na následující odkaz:

[activate_link]

nebo si jej zkopírujte a následnì otevøete v prohlí¾eèi. Pak se budete moci pøihlásit následujícími údaji:

U¾ivatelské jméno: [account_name]
Heslo: [password]

Pokud zapomenete heslo, mù¾ete si nové vy¾ádat pøes odkaz, který naleznete u formuláøe pro pøihlá¹ení. Dìkujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Je¹tì nebyla vytvoøena ¾ádná fóra.';
$lang['AlreadyActivated'] = 'Úèet ID %d byl ji¾ aktivován.';
$lang['Activate'] = 'Aktivovat';
$lang['Activated'] = 'Vá¹ úèet %s byl aktivován. Nyní se mù¾ete pøihlásit.';
$lang['WrongActivationKey'] = 'Úèet s ID %d nelze aktivovat. Aktivaèní klíè není správný. Ujistìte se, ¾e jste si døíve nevy¾ádali nové heslo.';
$lang['RegisterIt'] = 'Mù¾ete jej vytvoøit pomocí odkazu "registrace".';
$lang['BoardClosed'] = 'Fórum je uzavøeno';
$lang['SendpwdEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Vy¾ádali jste si nové heslo k úètu [account_name]. Pøihlásit se mù¾ete pomocí následujících údajù:

U¾ivatelské jméno: [account_name]
Heslo: [password]

Pokud zapomenete heslo, mù¾ete si nové vy¾ádat pøes odkaz, který naleznete u formuláøe pro pøihlá¹ení.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nové heslo';
$lang['SendpwdActivated'] = 'Heslo k va¹emu úètu %s bylo odesláno na adresu %s. Pomocí nového hesla se nyní mù¾ete pøihlásit.';
$lang['ForumIndex'] = 'Úvod';
$lang['MissingFields'] = 'Následující políèka chybí nebo nejsou vyplnìna správnì: %s.';
$lang['TermsOfUseContent'] = 'Berete na vìdomí, ¾e v¹echny pøíspìvky ve fórech vyjadøují názory jejich autorù, nikoliv správcù tìchto fór (s výjimkou pøíspìvkù, které psali sami správci).

Souhlasíte, ¾e nebudete posílat ¾ádné nevhodné, hanlivé, urá¾livé nebo neslu¹né pøíspìvky a ani ¾ádné jiné materiály, které jsou v rozporu se zákonem. Posílání takovýchto pøíspìvkù mù¾e být potrestáno smazáním va¹eho úètu a pøípadnì kontaktováním va¹eho poskytovatele pøipojení k internetu (ISP). Pro pøípad vynucení tìchto podmínek jsou zaznamenávány IP adresy autorù jednotlivých pøíspìvkù. Berete na vìdomí, ¾e administrátoøi a moderátoøi jsou oprávnìni upravovat, mazat, pøesouvat nebo uzamykat témata v pøípadì, ¾e nevyhovují tìmto podmínkám.

V¹echny informace, které ode¹lete do fóra, budou ulo¾eny do databáze systému a budou jím vyu¾ívány. Administrátoøi nebudou poskytovat tyto informace bez va¹eho svolení tøetí stranì. Webmasteøi, administrátoøi, moderátoøi a ani autoøi UseBB nejsou zodpovìdni za ¹kody zpùsobené mo¾nými hackerskými pokusy, které by mohly vést ke kompromitaci dat.

K ukládání potøebných doèasných informací vyu¾ívá fórum cookies na va¹em poèítaèi. Do cookie mù¾e být také ulo¾eno va¹e u¾ivatelské èíslo (ID) a za¹ifrované heslo, a to v pøípadì, ¾e povolíte automatické pøihla¹ování do fóra. Pokud nechcete, aby byly cookies vyu¾ívány, provedete pøíslu¹ná nastavení ve va¹em prohlí¾eèi.

Kliknutím na tlaèítko "Souhlasím" souhlasíte s tìmito ustanoveními a podmínkami.';
$lang['TermsOfUse'] = 'Podmínky registrace';
$lang['RegistrationActivationEmailSubject'] = 'Aktivace úètu';
$lang['NeedToBeLoggedIn'] = 'Nejste pøihlá¹eni. Pokud nemáte svùj úèet, mù¾ete si jej zalo¾it pomocí odkazu "registrace".';
$lang['WrongEmail'] = 'Omlouváme se, ale %s není e-mailová adresa úètu %s. Pokud jste e-mailovou adresu zapomnìli, kontaktujte administrátora.';
$lang['Topic'] = 'Téma';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Odpovìdi';
$lang['Views'] = 'Zobrazení';
$lang['Note'] = 'Poznámka';
$lang['Hidden'] = 'Skrytý';
$lang['ACP'] = 'Admin';
$lang['SendMessage'] = 'Poslat zprávu';
$lang['NoViewableForums'] = 'Nemáte oprávnìní prohlí¾et si diskusní fóra. Nejste-li pøihlá¹eni, uèiòte tak. Pokud pøihlá¹ení jste, tak zde pravdìpodobnì nemáte vùbec být.';
$lang['Rank'] = 'Postavení';
$lang['Location'] = 'Bydli¹tì';
$lang['Website'] = 'Webové stránky';
$lang['Occupation'] = 'Zamìstnání';
$lang['Interests'] = 'Zájmy';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Vstup do fóra s va¹í IP adresou %s je blokován.';
$lang['Avatar'] = 'Ikonka';
$lang['AvatarURL'] = 'Adresa ikonky';
$lang['BannedUser'] = 'Zablokovaný úèet';
$lang['BannedUserExplain'] = 'Vá¹ úèet %s je zablokován. Dùvod:';
$lang['BannedUsername'] = 'U¾ivatelské jméno %s je blokováno. Vyberte si, prosíme, jiné.';
$lang['BannedEmail'] = 'E-mailová adresa %s není povolena. Vyberte si, prosíme, jinou.';
$lang['PostsPerDay'] = 'Pøíspìvkù za den';
$lang['BoardClosedOnlyAdmins'] = 'Kdy¾ je fórum uzavøeno, smí se pøihlásit pouze administrátoøi.';
$lang['NoPosts'] = '®ádné pøíspìvky';
$lang['NoActivetopics'] = 'Nyní nejsou k dispozici ¾ádná témata.';
$lang['AuthorDate'] = 'Od %s v %s';
$lang['ByAuthor'] = 'Od: %s';
$lang['OnDate'] = 'V: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Poslat e-mail pro %s';
$lang['SendEmail'] = 'Poslat zprávu pro %s';
$lang['NoMails'] = 'Tento u¾ivatel si nepøeje pøijímat ¾ádné e-mailové zprávy.';
$lang['UserEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. U¾ivatel [username] vám poslal z fóra zprávu.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'E-mail pro %s byl úspì¹nì odeslán!';
$lang['To'] = 'Komu';
$lang['From'] = 'Od';
$lang['Subject'] = 'Pøedmìt';
$lang['Body'] = 'Tìlo';
$lang['Send'] = 'Odeslat';
$lang['EditProfile'] = 'Upravit profil';
$lang['EditOptions'] = 'Upravit nastavení';
$lang['EditPasswd'] = 'Zmìnit heslo';
$lang['PanelHome'] = 'Nastavení - úvod';
$lang['NewEmailNotActivated'] = 'Vá¹ profil byl úspì¹nì upraven. Zmìnili jste e-mailovou adresu k va¹emu úètu %s, proto je nezbytné úèet znovu aktivovat. Na e-mailovou adresu %s vám byl zaslán dopis s instrukcemi, jak úèet aktivovat. Ne¾ tak uèiníte, nebudete se moci pøihlásit.';
$lang['Required'] = 'Vy¾adováno';
$lang['ViewProfile'] = 'Zobrazit profil';
$lang['NewEmailActivationEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Zmìnili jste e-mailovou adresu u úètu [account_name], tak¾e je nutné jej znovu aktivovat. Úèet aktivujete kliknutím na následující odkaz:

[activate_link]

nebo si jej zkopírujte a následnì otevøete v prohlí¾eèi. 

Pokud zapomenete heslo, mù¾ete si nové vy¾ádat pøes odkaz, který naleznete u formuláøe pro pøihlá¹ení.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Aktivace úètu';
$lang['Signature'] = 'Podpis';
$lang['SessionInfo'] = 'Informace o relaci';
$lang['SessionID'] = 'ID relace';
$lang['IPAddress'] = 'IP adresa';
$lang['Seconds'] = 'Sekundy';
$lang['Updated'] = 'Zmìnìno';
$lang['Pages'] = 'Stránky';
$lang['AutoLogin'] = 'Automatické pøihlá¹ení';
$lang['Enabled'] = 'Povoleno';
$lang['Disabled'] = 'Zakázáno';
$lang['Enable'] = 'Povolit';
$lang['Disable'] = 'Zakázat';
$lang['AutoLoginSet'] = 'Cookie pro automatické pøihla¹ování byla nastavena.';
$lang['AutoLoginUnset'] = 'Cookie pro automatické pøihla¹ování byla zru¹ena.';
$lang['RegistrationEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Registrovali jste si úèet [account_name]. Mù¾ete se pøihlásit následujícími údaji:

U¾ivatelské jméno: [account_name]
Heslo: [password]

Pokud zapomenete heslo, mù¾ete si nové vy¾ádat pøes odkaz, který naleznete u formuláøe pro pøihlá¹ení. Dìkujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registrace úètu';
$lang['PublicEmail'] = 'Veøejná e-mailová adresa';
$lang['PublicLastLogin'] = 'Veøejný èas posledního pøihlá¹ení';
$lang['DateFormat'] = 'Formát data';
$lang['DateFormatHelp'] = 'Syntaxe data je shodná s PHP funkcí %s.';
$lang['Again'] = 'Znovu';
$lang['NewPassword'] = 'Nové heslo';
$lang['NewPasswordAgain'] = 'Nové heslo (znovu)';
$lang['PasswordEdited'] = 'Va¹e heslo bylo úspì¹nì zmìnìno.';
$lang['DetailedOnlineList'] = 'Podrobný seznam pøítomných u¾ivatelù';
$lang['Detailed'] = 'Podrobnì';
$lang['OptionsEdited'] = 'Nastavení fóra bylo úspì¹nì upraveno.';
$lang['ProfileEdited'] = 'Profil byl úspì¹nì upraven.';
$lang['Started'] = 'Zaèátek';
$lang['Minutes'] = 'Minuty';
$lang['Hours'] = 'Hodiny';
$lang['Days'] = 'Dny';
$lang['Weeks'] = 'Týdny';
$lang['TotalTime'] = 'Celkový èas';
$lang['NoTopics'] = 'Fórum neobsahuje ¾ádná témata. Mù¾ete zalo¾it první!';
$lang['NotPermitted'] = 'K této akci nemáte potøebná oprávnìní. Pochybujete-li o tom, kontaktujte administrátora.';
$lang['Language'] = 'Jazyk';
$lang['Template'] = '©ablona';
$lang['NoSuchMember'] = 'U¾ivatel %s neexistuje.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Tato vlastnost je zakázána, proto¾e nastavení va¹eho prohlí¾eèe neumo¾òuje fóru nastavovat nebo èíst cookies.';
$lang['LogOutConfirm'] = 'Opravdu se chcete odhlásit? Cookie pro automatické pøihla¹ování bude vymazána!';
$lang['Cancel'] = 'Storno';
$lang['Timezone'] = 'Èasové pásmo';
$lang['DST'] = 'Letní èas';
$lang['Sticky'] = 'Dùle¾ité';
$lang['PostNewTopic'] = 'Nové téma';
$lang['ForumIsLocked'] = 'Fórum je uzamèeno';
$lang['NoSuchTopic'] = 'Téma %s neexistuje.';
$lang['PostReply'] = 'Odpovìdìt';
$lang['TopicIsLocked'] = 'Téma je uzamèeno';
$lang['Post'] = 'Pøíspìvek';
$lang['Edit'] = 'Upravit';
$lang['Delete'] = 'Smazat';
$lang['Quote'] = 'Citovat';
$lang['Wrote'] = '%s napsal';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Téma, do kterého chcete pøispìt, je uzamèeno. Pøispívat do nìj smí pouze autorizovaní u¾ivatelé.';
$lang['Content'] = 'Obsah';
$lang['Options'] = 'Volby';
$lang['EnableBBCode'] = 'Povolit BBCode.';
$lang['EnableSmilies'] = 'Povolit smajlíky.';
$lang['EnableSig'] = 'Povolit podpis.';
$lang['EnableHTML'] = 'Povolit HTML.';
$lang['LockTopicAfterPost'] = 'Po odeslání uzamknout.';
$lang['Guest'] = 'Host';
$lang['BackToPrevious'] = 'Zpìt na pøedchozí stránku';
$lang['NoSuchPost'] = 'Pøíspìvek %s neexistuje.';
$lang['UserPostedImage'] = 'Obrázek vlo¾ený u¾ivatelem';
$lang['ForumIsLockedExplain'] = 'Toto fórum je uzamèeno. Jen autorizovaní u¾ivatelé smí pøispívat.';
$lang['MakeTopicSticky'] = 'Oznaèit téma jako dùle¾ité.';
$lang['QuickReply'] = 'Rychlá odpovìï';
$lang['ReturnToTopicAfterPosting'] = 'Po odeslání pøíspìvku se vrátit na téma';
$lang['ModeratorList'] = 'Moderátoøi: %s.';
$lang['Nobody'] = 'Nikdo';
$lang['DeleteTopic'] = 'Smazat téma';
$lang['MoveTopic'] = 'Pøesunout téma';
$lang['LockTopic'] = 'Uzamknout téma';
$lang['UnlockTopic'] = 'Odemknout téma';
$lang['MakeSticky'] = 'Oznaèit jako dùle¾ité';
$lang['ConfirmDeleteTopic'] = 'Opravdu chcete téma %s z fóra %s nenávratnì smazat?';
$lang['MakeNormalTopic'] = 'Oznaèit téma jako bì¾né';
$lang['OldForum'] = 'Staré fórum';
$lang['NewForum'] = 'Nové fórum';
$lang['IAccept'] = 'Souhlasím';
$lang['IDontAccept'] = 'Nesouhlasím';
$lang['OpenLinksNewWindow'] = 'Otevírat odkazy na jiné stránky do nového okna';
$lang['HideAllAvatars'] = 'Skrýt v¹echny ikonky';
$lang['HideUserinfo'] = 'Skrýt informace o u¾ivateli';
$lang['HideAllSignatures'] = 'Skrýt v¹echny podpisy';
$lang['HideFromOnlineList'] = 'Nezobrazovat v seznamu pøítomných u¾ivatelù';
$lang['PageLinks'] = 'Stránka: %s';
$lang['Preview'] = 'Náhled';
$lang['DeletePost'] = 'Smazat pøíspìvek';
$lang['ConfirmDeletePost'] = 'Opravdu chcete tento pøíspìvek k tématu %s nenávratnì smazat?';
$lang['EditPost'] = 'Upravit pøíspìvek';
$lang['PostEditInfo'] = 'Poslední úpravu provedl(a) %s v %s.';
$lang['PasswdInfo'] = 'Heslo mù¾e obsahovat pouze alfanumerické znaky. Minimální délka hesla je %d znakù.';
$lang['SubscribeTopic'] = 'Odebírat';
$lang['UnsubscribeTopic'] = 'Odhlásit odbìr';
$lang['NewReplyEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Nìkdo ([poster_name]) pøidal pøíspìvek k tématu ("[topic_title]"), k jeho¾ odebírání jste pøihlá¹eni. Pøíspìvek si mù¾ete pøeèíst na následující adrese: [topic_link].

Pokud si pøejete odhlásit odbìr tématu, kliknìte na následující odkaz (vy¾aduje pøihlá¹ení): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nový pøíspìvek v "%s"';
$lang['SubscribedTopic'] = 'Nyní jste pøihlá¹en k odbìru tématu.';
$lang['UnsubscribedTopic'] = 'Odebírání tématu bylo zru¹eno.';
$lang['SubscribeToThisTopic'] = 'Odebírat toto téma.';
$lang['OK'] = 'Odeslat';
$lang['Subscriptions'] = 'Odbìr témat';
$lang['NoSubscribedTopics'] = 'Nejste pøihlá¹en k odbìru ¾ádných témat.';
$lang['LatestUpdate'] = 'Poslední aktivita';
$lang['Unknown'] = 'Neznámá';
$lang['PostingTopic'] = 'Pí¹e pøíspìvek v %s';
$lang['PostingReply'] = 'Pí¹e odpovìï v %s';
$lang['MovingTopic'] = 'Pøesouvá téma %s';
$lang['DeletingTopic'] = 'Ma¾e téma %s';
$lang['EditingPost'] = 'Upravuje pøíspìvek v %s';
$lang['DeletingPost'] = 'Ma¾e pøíspìvek v %s';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parsování';
$lang['ServerLoad'] = 'Zatí¾ení serveru';
$lang['TemplateSections'] = '©ablony';
$lang['SQLQueries'] = 'SQL dotazy';
$lang['RealName'] = 'Skuteèné jméno';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administrátoøi';
$lang['Moderators'] = 'Moderátoøi';
$lang['SortBy'] = 'Øadit podle: %s';
$lang['TopicReview'] = 'Pøehled tématu';
$lang['ViewMorePosts'] = 'Zobrazit více pøíspìvkù';
$lang['DisplayedName'] = 'Zobrazované jméno';
$lang['UsernameInfo'] = 'U¾ivatelské jméno mù¾e obsahovat pouze alfanumerické znaky, mezery, podtr¾ítko a pomlèku.';
$lang['Code'] = 'Kód';
$lang['Img'] = 'Obrázek';
$lang['URL'] = 'Odkaz';
$lang['Color'] = 'Barva';
$lang['Size'] = 'Velikost';
$lang['ViewingForum'] = 'Fórum: %s';
$lang['ViewingTopic'] = 'Téma: %s';
$lang['FloodIntervalWarning'] = 'Administrátoøi urèili, ¾e pøíspìvky je mo¾né posílat nejménì v intervalu %d sekund. Prosíme, poèkejte a po¹lete pøíspìvek a¾ za chvilku.';
$lang['AutoSubscribe'] = 'Automatické odebírání';
$lang['OnPostingNewTopics'] = 'Pøi vytvoøení tématu';
$lang['OnPostingNewReplies'] = 'Pøi zaslání odpovìdi';
$lang['UnsubscribeSelected'] = 'Neodebírat vybrané';
$lang['SelectedTopicsUnsubscribed'] = 'Nyní ji¾ vybraná témata nebudete odebírat.';
$lang['Birthday'] = 'Narozeniny';
$lang['Age'] = 'Vìk';
$lang['Month'] = 'Mìsíc';
$lang['Day'] = 'Den';
$lang['Year'] = 'Rok';
$lang['PoweredBy'] = '%s je pohánìno systémem %s';
$lang['GeneralStats'] = 'Obecná statistika';
$lang['Members'] = 'Registrovaní u¾ivatelé';
$lang['TopicsPerDay'] = 'Témat za den';
$lang['MembersPerDay'] = 'Registrací za den';
$lang['BoardStarted'] = 'Datum spu¹tìní';
$lang['BoardAge'] = 'Stáøí fóra';
$lang['NewestMember'] = 'Poslední registrovaný';
$lang['MostActiveTopics'] = 'Témata s nejvíce pøíspìvky';
$lang['MostViewedTopics'] = 'Nejnav¹tìvovanìj¹í témata';
$lang['PostsPerMember'] = 'Pøíspìvkù na u¾ivatele';
$lang['PostsPerForum'] = 'Pøíspìvkù na fórum';
$lang['Categories'] = 'Kategorie';
$lang['Forums'] = 'Fóra';
$lang['TopicsPerMember'] = 'Témat na u¾ivatele';
$lang['TopicsPerForum'] = 'Témat na fórum';
$lang['MostActiveMembers'] = 'Nejaktivnìj¹í u¾ivatelé';
$lang['MostActiveForums'] = 'Fóra s nejvíce pøíspìvky';
$lang['DisplayedNameTaken'] = 'Omlouváme se, jméno %s ji¾ vyu¾ívá nìkdo jiný.';
$lang['SearchKeywords'] = 'Klíèová slova';
$lang['SearchMode'] = 'Zpùsob hledání';
$lang['SearchAuthor'] = 'Hledat podle u¾ivatele';
$lang['SearchForums'] = 'Prohledat fóra';
$lang['AllForums'] = 'V¹echna fóra';
$lang['AllKeywords'] = 'V¹echna klíèová slova';
$lang['OneOrMoreKeywords'] = 'Jedno nebo více klíèových slov';
$lang['NoSearchResults'] = 'Pro zadaná klíèová slova nebyla nalezena ¾ádná témata.';
$lang['SearchMembersPosts'] = 'Hledat pøíspìvky u¾ivatele';
$lang['CurrentPage'] = 'Souèasná stránka';
$lang['MemberGuestOnline'] = 'Bìhem posledních %d minut zde diskutoval %d registrovaný (%d skrytých) a %d neregistrovaný u¾ivatel.';
$lang['MembersGuestOnline'] = 'Bìhem posledních %d minut zde diskutovalo %d registrovaných (%d skrytých) a %d neregistrovaný u¾ivatel.';
$lang['MemberGuestsOnline'] = 'Bìhem posledních %d minut zde diskutoval %d registrovaný (%d skrytých) a %d neregistrovaných u¾ivatelù.';
$lang['MembersGuestsOnline'] = 'Bìhem posledních %d minut zde diskutovalo %d registrovaných (%d skrytých) a %d neregistrovaných u¾ivatelù.';
$lang['WhosOnline'] = 'Kdo je online';
$lang['Done'] = 'Hotovo';
$lang['KeywordsExplain'] = 'Libovolná slova o alespoò %d znacích oddìlená mezerami.';
$lang['BCCMyself'] = 'Poslat kopii na moji e-mailovou adresu.';
$lang['Save'] = 'Ulo¾it';
$lang['Add'] = 'Pøidat';
$lang['MarkAllAsRead'] = 'Oznaèit v¹e jako pøeètené';
$lang['MarkAllAsReadDone'] = 'V¹echna fóra a témata jsou oznaèena jako pøeètená.';
$lang['StringTooShort'] = '%s je pøíli¹ krátké, musí obsahovat alespoò %d znakù.';
$lang['StringTooLong'] = '%s je pøíli¹ dlouhé, smí obsahovat maximálnì %d znakù.';
$lang['Upload'] = 'Nahrát';
$lang['RegistrationsDisabled'] = 'Registrace jsou zakázány';
$lang['PostFormShortcut'] = 'Stisknìte Alt+S (Cmd+S na Applu) pro odeslání formuláøe.';
$lang['EditThisMember'] = 'Upravit profil u¾ivatele';
$lang['EmailTaken'] = 'E-mailovou adresu %s ji¾ pou¾ívá nìkdo jiný. Vyberte si, prosíme, jinou.';
$lang['RegisteredNotActivatedByAdmin'] = 'Vá¹ úèet %s byl vytvoøen. Administrátor fóra vám nyní musí úèet aktivovat, co¾ mù¾e nìjakou dobu trvat. Pak se budete moci pøihlásit.';
$lang['AdminActivationEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Registrovali jste si úèet [account_name]. Administrátor fóra vám je¹tì musí úèet aktivovat. Pak se budete moci pøihlásit pomocí následujících údajù:

U¾ivatelské jméno: [account_name]
Heslo: [password]

Pokud zapomenete heslo, mù¾ete si nové vy¾ádat pøes odkaz, který naleznete u formuláøe pro pøihlá¹ení. Dìkujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Úèet èeká na aktivaci';
$lang['NewEmailNotActivatedByAdmin'] = 'Vá¹ profil byl úspì¹nì upraven. Proto¾e byla zmìnìna e-mailová adresa k va¹emu úètu %s, administrátor fóra jej musí znovu aktivovat. Pak se budete moci pøihlásit.';
$lang['NewEmailAdminActivationEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. E-mailová adresa k úètu [account_name] byla zmìnìna. Administrátor fóra nyní musí vá¹ úèet znovu aktivovat, co¾ mù¾e nìjakou dobu trvat.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Úèet èeká aktivaci';
$lang['AdminActivatedAccountEmailBody'] = 'Dobrý den,

Tento e-mail byl odeslán diskusním fórem [board_name]. Administrátor aktivoval vá¹ úèet [account_name]. Nyní se mù¾ete pøihlásit.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Úèet byl aktivován';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => 'po',
	'Tue' => 'út',
	'Wed' => 'st',
	'Thu' => 'èt',
	'Fri' => 'pá',
	'Sat' => 'so',
	'Sun' => 'ne',
	'Monday' => 'pondìlí',
	'Tuesday' => 'úterý',
	'Wednesday' => 'støeda',
	'Thursday' => 'ètvrtek',
	'Friday' => 'pátek',
	'Saturday' => 'sobota',
	'Sunday' => 'nedìle',
	'Jan' => 'led',
	'Feb' => 'ún',
	'Mar' => 'bøe',
	'Apr' => 'dub',
	'May' => 'kvì',
	'Jun' => 'èen',
	'Jul' => 'èec',
	'Aug' => 'srp',
	'Sep' => 'záø',
	'Oct' => 'øíj',
	'Nov' => 'lis',
	'Dec' => 'pro',
	'January' => 'leden',
	'February' => 'únor',
	'March' => 'bøezen',
	'April' => 'duben',
	'May' => 'kvìten',
	'June' => 'èerven',
	'July' => 'èervenec',
	'August' => 'srpen',
	'September' => 'záøí',
	'October' => 'øíjen',
	'November' => 'listopad',
	'December' => 'prosinec',
	'st' => '.',
	'nd' => '.',
	'th' => '.'
);

?>
