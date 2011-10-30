<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.123 2006/05/14 17:05:09 pc_freak Exp $
	
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

	This file was translated into Hebrew by Dan_y2k.
	Translation website: http://usebbheb.official.ws
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
$lang['character_encoding'] = 'iso-8859-8-i';
$lang['language_code'] = 'he';
$lang['text_direction'] = 'rtl';

//
// Define translations
//
$lang['Home'] = 'בית';
$lang['YourPanel'] = 'הלוח שלך';
$lang['Register'] = 'הרשמה';
$lang['FAQ'] = 'שאלות נפוצות';
$lang['Search'] = 'חיפוש';
$lang['ActiveTopics'] = 'נושאים פעילים';
$lang['LogIn'] = 'התחברות';
$lang['LogOut'] = 'התנתקות (%s)';
$lang['MemberList'] = 'רשימת חברים';
$lang['StaffList'] = 'רשימת צוות';
$lang['Statistics'] = 'סטטיסטיקות';
$lang['ContactAdmin'] = 'יצירת קשר עם מנהל המערכת';
$lang['Forum'] = 'פורום';
$lang['Topics'] = 'נושאים';
$lang['Posts'] = 'הודעות';
$lang['LatestPost'] = 'הודעה אחרונה';
$lang['RSSFeed'] = 'הזנת RSS';
$lang['NewPosts'] = 'הודעות חדשות';
$lang['NoNewPosts'] = 'אין הודעות חדשות';
$lang['LockedNewPosts'] = 'נעול (הודעות חדשות)';
$lang['LockedNoNewPosts'] = 'נעול (אין הודעות חדשות)';
$lang['Locked'] = 'נעול';
$lang['LastLogin'] = 'התחברות אחרונה';
$lang['VariousInfo'] = 'מידע מגוון';
$lang['IndexStats'] = 'קהילה זו מכילה %d הודעות בתוך %d נושאים ויש לה %d חברים רשומים.';
$lang['NewestMemberExtended'] = 'ברוך הבא לחבר הכי חדש שלנו: %s.';
$lang['Username'] = 'שם משתמש';
$lang['CurrentPassword'] = 'סיסמה נוכחית';
$lang['UserID'] = 'מספר זיהוי של המשתמש';
$lang['NoSuchForum'] = 'הפורום %s לא קיים (יותר) בקהילה זו!';
$lang['WrongPassword'] = 'סליחה, אבל הסיסמה הזו אינה נכונה! בקש סיסמה חדשה דרך טופס ההתחברות אם שכחת אותה.';
$lang['Reset'] = 'איפוס';
$lang['SendPassword'] = 'שליחת סיסמה חדשה';
$lang['RegisterNewAccount'] = 'הרשמת חשבון חדש';
$lang['RememberMe'] = 'זכור אותי';
$lang['Yes'] = 'כן';
$lang['No'] = 'לא';
$lang['NotActivated'] = 'חשבונך %s לא הופעל עדיין. בבקשה בדוק את תיבת הדואר שלך שנרשמת איתה לקהילה זו עבור הוראות על כיצד להפעיל את חשבונך.';
$lang['Error'] = 'שגיאה';
$lang['Profile'] = 'הפרופיל של %s';
$lang['Level'] = 'רמה';
$lang['Administrator'] = 'מנהל מערכת';
$lang['Moderator'] = 'מנהל פורום';
$lang['Registered'] = 'נרשם';
$lang['Email'] = 'כתובת דואר אלקטרוני';
$lang['ContactInfo'] = 'מידע יצירת קשר';
$lang['Password'] = 'סיסמה';
$lang['PasswordAgain'] = 'סיסמה (שוב)';
$lang['EverythingRequired'] = 'כל השדות דרושים!';
$lang['RegisteredNotActivated'] = 'חשבונך %s נוצר עכשיו. דואר אלקטרוני נשלח אל %s עם הוראות על כיצד להפעיל את חשבונך. אתה צריך להפעיל אותו כדי להתחבר עם חשבונך.';
$lang['RegisteredActivated'] = 'חשבונך %s נוצר עכשיו. אתה יכול להתחבר מיד.';
$lang['Never'] = 'אף פעם';
$lang['Member'] = 'חבר';
$lang['RegistrationActivationEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. בדיוק רשמת חשבון ששמו [account_name], אבל אינו הופעל עדיין. בבקשה לחץ על הקישור הבא כדי להפעיל את חשבונך:

[activate_link]

או העתק והדבק אותו לדפדפן שלך. אז תוכל להתחבר בעזרת שם המשתמש והסיסמה הללו:

שם משתמש: [account_name]
סיסמה: [password]

אם תשכח את סיסמתך, אתה יכול לבקש אחת חדשה דרך הקישור שבטופס ההתחברות. תודה לך על שנרשמת!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'זוהי קהילה ריקה. מנהל המערכת לא יצר פורומים כלשהם עדיין.';
$lang['AlreadyActivated'] = 'חשבון עם מספר הזיהוי %d הופעל כבר.';
$lang['Activate'] = 'הפעלה';
$lang['Activated'] = 'חשבונך %s הופעל (מחדש) עכשיו. אתה תחובר אוטומטית.';
$lang['WrongActivationKey'] = 'לא ניתן להפעיל את חשבונך עם מספר הזיהוי %d. מפתח ההפעלה אינו נכון. אתה בטוח שלא ביקשת סיסמה חדשה בינתיים?';
$lang['RegisterIt'] = 'אתה יכול ליצור אותו דרך קישור ה\'הרשמה\'.';
$lang['BoardClosed'] = 'קהילה סגורה';
$lang['SendpwdEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. בדיוק ביקשת סיסמה חדשה עבור החשבון [account_name]. אתה יכול להתחבר בעזרת שם המשתמש והסיסמה הללו:

שם משתמש: [account_name]
סיסמה: [password]

אם תשכח את סיסמתך, אתה יכול לבקש אחת חדשה דרך הקישור בטופס ההתחברות. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'סיסמה חדשה';
$lang['SendpwdActivated'] = 'הסיסמה החדשה עבור חשבונך %s נשלחה אל %s. אתה יכול להתחבר עכשיו עם הסיסמה החדשה שלך.';
$lang['ForumIndex'] = 'אינדקס הפורומים';
$lang['MissingFields'] = 'השדות הדרושים הבאים היו חסרים או לא נכונים: %s.';
$lang['TermsOfUseContent'] = 'אתה מאשר שכל ההודעות שנמצאות בקהילה זו הן הדיעות של מחבריהן ולא של מנהל האתר, מנהלי המערכת או מנהלי הפורומים, חוץ מהודעות שנכתבו על ידי אחד מהם.

אתה מסכים לא לפרסם תוכן פוגע, מעליב, מגונה או לא הולם  או תוכן שאסור על פי חוק בפורומים אלו. עשיית דברים אלה עלולה לגרום לחשבונך להיחסם או להיות מוסר וספק האינטרנט שלך יבחין לבסוף בנוגע להתנהגותך. לכן, כתובת ה-IP שלך מאוחסנת עם כל הודעה שתמקם. אתה גם מסכים שמנהלי המערכת ומנהלי הפורומים מורשים לערוך, למחוק, להעביר או לנעול את הנושאים שלך כשהם חושבים שצריך.

כל מידע שתפרסם בפורומים אלו מאוחסן במערכת בסיס נתונים להתייחסות עתידית. מנהלי מערכת הקהילה לא יחלקו מחדש מידע זה בלי רשותך או התחייבותך על ידי סוגיות חוק. למרות זאת, לא מנהל האתר, מנהלי המערכת או מנהלי הפורומים או צוות UseBBHeb יכולות להיות אחראיות כשמידע כלשהו מודלף כתוצאה מניסיון פריצה.

קהילה זו משתמשת בעוגיות כדי לאחסן מידע זמני שהיא צריכה על ידי מערכת הפורום על המחשב המקומי שלך. גם, עוגיה יכולה לאחסן את מספר זיהוי המשתמש שלך ואת סיסמתך בצורה מוצפנת כדי לאפשר  התחברות אוטומטית לחשבונך אם בחרת לאפשר אפשרות זו. אם אינך רוצה שעוגיות כלשהן יאוחסנו  על המחשב שלך, פנה למדריך של הדפדפן שלך אודות  ניטרול עוגיות.

על ידי לחיצה על הכפתור "אני מקבל", אתה מסכים לתנאים וכללים אלה.';
$lang['TermsOfUse'] = 'תנאי שימוש';
$lang['RegistrationActivationEmailSubject'] = 'הפעלת חשבון';
$lang['NeedToBeLoggedIn'] = 'אתה צריך להיות מחובר כדי לעשות זאת. לחץ על קישור ה \'התחברות\' כדי להתחבר או \'הרשמה\' כדי ליצור חשבון חדש.';
$lang['WrongEmail'] = 'סליחה, אבל %s אינה כתובת הדואר האלקטרוני הנכונה עבור חשבונך %s. אם אינך מצליח לזכור את כתובת הדואר האלקטרוני שלך, בבקשה צור קשר עם מנהל מערכת הקהילה.';
$lang['Topic'] = 'נושא';
$lang['Author'] = 'מחבר';
$lang['Replies'] = 'תגובות';
$lang['Views'] = 'צפיות';
$lang['Note'] = 'הערה';
$lang['Hidden'] = 'מוסתרת';
$lang['ACP'] = 'לוח בקרת מנהל המערכת';
$lang['SendMessage'] = 'שליחת הודעה';
$lang['NoViewableForums'] = 'אין לך את הרשות לצפות בפורומים כלשהן עם שלב המשתמש הזה. אם אינך מחובר, התחבר. אם אתה מחובר, קרוב לוודאי שאינך צריך להיות כאן.';
$lang['Rank'] = 'דרגה';
$lang['Location'] = 'מיקום';
$lang['Website'] = 'אתר אינטרנט';
$lang['Occupation'] = 'עיסוק';
$lang['Interests'] = 'תחומי התעניינות';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'כתובת ה-IP שלך %s נחסמה מקהילה זו.';
$lang['Avatar'] = 'דמות אישית';
$lang['AvatarURL'] = 'כתובת לדמות האישית';
$lang['BannedUser'] = 'חשבון חסום';
$lang['BannedUserExplain'] = 'חשבונך %s חסום מקהילה זו. הסיבה היא:';
$lang['BannedUsername'] = 'שם המשתמש %s חסום מקהילה זו. בבקשה בחר אחד אחר.';
$lang['BannedEmail'] = 'כתובת הדואר האלקטרוני %s חסומה מקהילה זו. בבקשה בחר אחת אחרת.';
$lang['PostsPerDay'] = 'הודעות ליום';
$lang['BoardClosedOnlyAdmins'] = 'רק מנהלי המערכת יכולים להתחבר כשהקהילה סגורה.';
$lang['NoPosts'] = 'אין הודעות';
$lang['NoActivetopics'] = 'לקהילה זו אין נושאים פעילים כלשהם כרגע.';
$lang['AuthorDate'] = 'על ידי %s בתאריך %s';
$lang['ByAuthor'] = 'על ידי: %s';
$lang['OnDate'] = 'בתאריך: %s';
$lang['Re'] = 'בעניין:';
$lang['MailForm'] = 'שליחת דואר אלקטרוני אל %s';
$lang['SendEmail'] = 'שליחת הודעה אל %s';
$lang['NoMails'] = 'משתמש זה בחר שלא לקבל הודעות דואר אלקטרוני כלשהן.';
$lang['UserEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. המשתמש [username] שלח אליך הודעה זו דרך הקהילה שלנו. גוף ההודעה נמצא למטה.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'הדואר האלקטרוני שלך אל %s נשלח בהצלחה!';
$lang['To'] = 'אל';
$lang['From'] = 'שולח';
$lang['Subject'] = 'נושא';
$lang['Body'] = 'גוף';
$lang['Send'] = 'שליחה';
$lang['EditProfile'] = 'עריכת פרופיל';
$lang['EditOptions'] = 'עריכת אפשרויות';
$lang['EditPasswd'] = 'עריכת סיסמה';
$lang['PanelHome'] = 'בית הלוח';
$lang['NewEmailNotActivated'] = 'הפרופיל שלך נערך בהצלחה. בגלל ששינית את כתובת הדואר האלקטרוני שלך עבור חשבונך %s, אתה צריך להפעיל אותו מחדש. דואר אלקטרוני נשלח אל %s עם הוראות על כיצד לעשות זאת. אתה תנותק בינתיים.';
$lang['Required'] = 'דרוש';
$lang['ViewProfile'] = 'צפייה בפרופיל';
$lang['NewEmailActivationEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. זה עתה שינית את כתובת הדואר האלקטרוני של חשבונך [account_name], אבל הוא אינו הופעל מחדש עדיין. בבקשה לחץ על הקישור הבא כדי להפעיל מחדש את חשבונך:

[activate_link]

או העתק והדבק אותו לדפדפן שלך.

אם תשכח את סיסמתך, אתה יכול לבקש אחת חדשה דרך הקישור שבטופס ההתחברות.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'הפעלה מחדש של החשבון';
$lang['Signature'] = 'חתימה';
$lang['SessionInfo'] = 'מידע התחברות';
$lang['SessionID'] = 'מספר זיהוי של ההתחברות';
$lang['IPAddress'] = 'כתובת IP';
$lang['Seconds'] = 'שניות';
$lang['Updated'] = 'עודכן';
$lang['Pages'] = 'עמודים';
$lang['AutoLogin'] = 'התחברות אוטומטית';
$lang['Enabled'] = 'מאופשרת';
$lang['Disabled'] = 'מנוטרלת';
$lang['Enable'] = 'איפשור';
$lang['Disable'] = 'ניטרול';
$lang['AutoLoginSet'] = 'עוגיית ההתחברות האוטומטית הוצבה.';
$lang['AutoLoginUnset'] = 'עוגיית ההתחברות האוטומטית לא הוצבה.';
$lang['RegistrationEmailBody'] = 'Hello,

זוהי מערכת הפורומים של [board_name] מדברת. בדיוק נרשמת עם חשבון ששמו [account_name]. אתה יכול להתחבר בעזרת שם המשתמש והסיסמה הללו:

שם משתמש: [account_name]
סיסמה: [password]

אם תשכח את סיסמתך, אתה יכול לבקש אחת חדשה דרך הקישור שבטופס ההתחברות. תודה לך על שנרשמת!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'הרשמת חשבון';
$lang['PublicEmail'] = 'כתובת דואר אלקטרוני ציבורית';
$lang['PublicLastLogin'] = 'זמן התחברות אחרון ציבורי';
$lang['DateFormat'] = 'מבנה תאריך';
$lang['DateFormatHelp'] = 'תחביר מבנה התאריך שווה לפונקציית ה-%s ב-PHP.';
$lang['Again'] = 'שוב';
$lang['NewPassword'] = 'סיסמה חדשה';
$lang['NewPasswordAgain'] = 'סיסמה חדשה (שוב)';
$lang['PasswordEdited'] = 'סיסמתך נערכה בהצלחה.';
$lang['DetailedOnlineList'] = 'רשימת מחוברים מפורטת';
$lang['Detailed'] = 'מפורטת';
$lang['OptionsEdited'] = 'אפשרויות הקהילה שלך נערכו בהצלחה.';
$lang['ProfileEdited'] = 'הפרופיל שלך נערך בהצלחה.';
$lang['Started'] = 'הותחל';
$lang['Minutes'] = 'דקות';
$lang['Hours'] = 'שעות';
$lang['Days'] = 'ימים';
$lang['Weeks'] = 'שבועות';
$lang['TotalTime'] = 'זמן כולל';
$lang['NoTopics'] = 'פורום זה אינו מכיל נושאים כלשהם. אתה יכול לפרסם את הראשון!';
$lang['NotPermitted'] = 'אין לך את ההרשאות המתאימות לעשות זאת. אם אתה בספק, צור קשר עם מנהל המערכת.';
$lang['Language'] = 'שפה';
$lang['Template'] = 'עיצוב';
$lang['NoSuchMember'] = 'החבר %s לא קיים (יותר) בקהילה זו.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'תכונה זו מנוטרלת בגלל שקהילה זו לא יכול להציב או לקרוא עוגיות עם הדפדפן שלך.';
$lang['LogOutConfirm'] = 'אתה בטוח שברצונך להתנתק?';
$lang['Cancel'] = 'ביטול';
$lang['Timezone'] = 'אזור זמן';
$lang['DST'] = 'זמני שמירת אור יום';
$lang['Sticky'] = 'דביק';
$lang['PostNewTopic'] = 'נושא חדש';
$lang['ForumIsLocked'] = 'הפורום נעול';
$lang['NoSuchTopic'] = 'הנושא %s לא קיים (יותר) בקהילה זו.';
$lang['PostReply'] = 'פירסום תגובה';
$lang['TopicIsLocked'] = 'הנושא נעול';
$lang['Post'] = 'הודעה';
$lang['Edit'] = 'עריכה';
$lang['Delete'] = 'מחיקה';
$lang['Quote'] = 'ציטוט';
$lang['Wrote'] = '%s כתב';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'הנושא שאתה מנסה לפרסם בו הינו נעול. רק אנשים מורשים יכולים לפרסם תגובות עדיין.';
$lang['Content'] = 'תוכן';
$lang['Options'] = 'אפשרויות';
$lang['EnableBBCode'] = 'אפשר קוד BB.';
$lang['EnableSmilies'] = 'אפשר סמיילים.';
$lang['EnableSig'] = 'אפשר חתימה.';
$lang['EnableHTML'] = 'אפשר HTML.';
$lang['LockTopicAfterPost'] = 'נעילת הנושא לאחר הפירסום.';
$lang['Guest'] = 'אורח';
$lang['BackToPrevious'] = 'חזרה לעמוד הקודם';
$lang['NoSuchPost'] = 'ההודעה %s לא קיימת (יותר) בקהילה זו.';
$lang['UserPostedImage'] = 'תמונה שהתפרסמה על ידי המשתמש';
$lang['ForumIsLockedExplain'] = 'פורום זה הינו נעול. רק אנשים מורשים יכולים לפרסם נושאים חדשים.';
$lang['MakeTopicSticky'] = 'הפיכת הנושא לדביק.';
$lang['QuickReply'] = 'תגובה מהירה';
$lang['ReturnToTopicAfterPosting'] = 'חזרה לנושא לאחר הפירסום';
$lang['ModeratorList'] = 'מנהלי הפורום: %s.';
$lang['Nobody'] = 'אף אחד';
$lang['DeleteTopic'] = 'מחיקת הנושא';
$lang['MoveTopic'] = 'העברת הנושא';
$lang['LockTopic'] = 'נעילת הנושא';
$lang['UnlockTopic'] = 'ביטול נעילת הנושא';
$lang['MakeSticky'] = 'הפיכה לדביק';
$lang['ConfirmDeleteTopic'] = 'אתה בטוח שברצונך למחוק את הנושא %s שבתוך הפורום %s? זה בלתי הפיך!';
$lang['MakeNormalTopic'] = 'הפיכת הנושא לרגיל';
$lang['OldForum'] = 'פורום ישן';
$lang['NewForum'] = 'פורום חדש';
$lang['IAccept'] = 'אני מקבל';
$lang['IDontAccept'] = 'אני לא מקבל';
$lang['OpenLinksNewWindow'] = 'פתיחת קישורים חיצוניים בחלונות חדשים';
$lang['HideAllAvatars'] = 'הסתרת כל הדמויות האישיות';
$lang['HideUserinfo'] = 'הסתרת מידע משתמש';
$lang['HideAllSignatures'] = 'הסתרת כל החתימות';
$lang['HideFromOnlineList'] = 'הסתרה מרשימת המחוברים';
$lang['PageLinks'] = 'עמוד: %s';
$lang['Preview'] = 'תצוגה מקדימה';
$lang['DeletePost'] = 'מחיקת הודעה';
$lang['ConfirmDeletePost'] = 'אתה בטוח שברצונך למחוק הודעה זו שבתוך הנושא %s? זה בלתי הפיך!';
$lang['EditPost'] = 'עריכת הודעה';
$lang['PostEditInfo'] = 'עריכה אחרונה על ידי %s בתאריך %s.';
$lang['PasswdInfo'] = 'הסיסמה יכולה להכיל רק תווי אותיות וספרות ובעלת אורך של לפחות %d תווים.';
$lang['SubscribeTopic'] = 'הרשמה בתור מנוי';
$lang['UnsubscribeTopic'] = 'ביטול הרשמה בתור מנוי';
$lang['NewReplyEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. מישהו ([poster_name]) פירסם תגובה לנושא שנרשמת אליו בתור מנוי ("[topic_title]"). כדי לצפות בתגובה, בבקשה לחץ על הקישור הבא: [topic_link].

לחץ על הקישור הבא אם ברצונך לבטל את ההרשמה בתור מנוי לנושא זה (התחברות נדרשת): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'תגובה חדשה בתוך "%s"';
$lang['SubscribedTopic'] = 'אתה מנוי עכשיו לנושא זה.';
$lang['UnsubscribedTopic'] = 'אתה לא מנוי עכשיו לנושא זה.';
$lang['SubscribeToThisTopic'] = 'הרשמה בתור מנוי לנושא זה.';
$lang['OK'] = 'אישור';
$lang['Subscriptions'] = 'מנויים';
$lang['NoSubscribedTopics'] = 'אינך מנוי לנושא כלשהו כרגע.';
$lang['LatestUpdate'] = 'עידכון אחרון';
$lang['Unknown'] = 'לא ידוע';
$lang['PostingTopic'] = 'מפרסם נושא בתוך %s';
$lang['PostingReply'] = 'מפרסם תגובה בתוך %s';
$lang['MovingTopic'] = 'מעביר את הנושא %s';
$lang['DeletingTopic'] = 'מוחק את הנושא %s';
$lang['EditingPost'] = 'עורך הודעה בתוך %s';
$lang['DeletingPost'] = 'מוחק הודעה בתוך %s';
$lang['DebugMode'] = 'מצב איתור שגיאות';
$lang['ParseTime'] = 'זמן הצגה';
$lang['ServerLoad'] = 'עומס שרת';
$lang['TemplateSections'] = 'אזורי עיצוב';
$lang['SQLQueries'] = 'שאילתות SQL';
$lang['RealName'] = 'שם אמיתי';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'מנהלי מערכת';
$lang['Moderators'] = 'מנהלי פורומים';
$lang['TopicReview'] = 'סקירת נושא';
$lang['ViewMorePosts'] = 'צפייה בעוד הודעות';
$lang['DisplayedName'] = 'שם תצוגה';
$lang['UsernameInfo'] = 'שם משתמש יכול להכיל רק תווי אותיות וספרות, רווחים, _ ו -.';
$lang['Code'] = 'קוד';
$lang['Img'] = 'תמונה';
$lang['URL'] = 'כתובת';
$lang['Color'] = 'צבע';
$lang['Size'] = 'גודל';
$lang['ViewingForum'] = 'פורום: %s';
$lang['ViewingTopic'] = 'נושא: %s';
$lang['FloodIntervalWarning'] = 'מנהל המערכת ציין שאתה יכול לפרסם רק עם מרווח של %d שניות. בבקשה המתן לפחות %d שניות לפני שתשלח מחדש את הטופס.';
$lang['AutoSubscribe'] = 'מינוי אוטומטי';
$lang['OnPostingNewTopics'] = 'על פירסום נושאים';
$lang['OnPostingNewReplies'] = 'על פירסום תגובות';
$lang['UnsubscribeSelected'] = 'ביטול מינוי של הנבחרים';
$lang['SelectedTopicsUnsubscribed'] = 'אתה עכשיו לא מנוי על הנושאים שנבחרו.';
$lang['Birthday'] = 'יום הולדת';
$lang['Age'] = 'גיל';
$lang['Month'] = 'חודש';
$lang['Day'] = 'יום';
$lang['Year'] = 'שנה';
$lang['PoweredBy'] = '<span dir="ltr">%s is powered by %s<br />Translated and suited into Hebrew by The <a href="http://usebbheb.official.ws" target="_blank">UseBBHeb</a> Team</span>';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'סטטיסטיקות כלליות';
$lang['Members'] = 'חברים';
$lang['TopicsPerDay'] = 'נושאים ליום';
$lang['MembersPerDay'] = 'חברים ליום';
$lang['BoardStarted'] = 'קהילה הוקמה';
$lang['BoardAge'] = 'גיל הקהילה';
$lang['NewestMember'] = 'חבר הכי חדש';
$lang['MostActiveTopics'] = 'הנושאים הכי פעילים';
$lang['MostViewedTopics'] = 'הנושאים הכי נצפים';
$lang['PostsPerMember'] = 'הודעות לחבר';
$lang['PostsPerForum'] = 'הודעות לפורום';
$lang['Categories'] = 'קטגוריות';
$lang['Forums'] = 'פורומים';
$lang['TopicsPerMember'] = 'נושאים לחבר';
$lang['TopicsPerForum'] = 'נושאים לפורום';
$lang['MostActiveMembers'] = 'חברים הכי פעילים';
$lang['MostActiveForums'] = 'פורומים הכי פעילים';
$lang['DisplayedNameTaken'] = 'סליחה, %s תפוס כבר בתור שם התחברות או שם תצוגה.';
$lang['SearchKeywords'] = 'חיפוש אחר מילות מפתח';
$lang['SearchMode'] = 'מצב חיפוש';
$lang['SearchAuthor'] = 'חיפוש אחר מחבר';
$lang['SearchForums'] = 'חיפוש בפורומים';
$lang['AllForums'] = 'כל הפורומים';
$lang['NoSearchResults'] = 'סליחה, אבל לא נמצאו תוצאות המתאימות לקריטריונים שסיפקת.';
$lang['SearchMembersPosts'] = 'חיפוש אחר הודעות של החבר';
$lang['CurrentPage'] = 'עמוד נוכחי';
$lang['MemberGuestOnline'] = 'ב-%d הדקות האחרונות, %d חבר (%d מוסתר) ו-%d אורח ביקרו בפורומים.';
$lang['MembersGuestOnline'] = 'ב-%d הדקות האחרונות, %d חברים (%d מוסתרים) ו-%d אורח ביקרו בפורומים.';
$lang['MemberGuestsOnline'] = 'ב-%d הדקות האחרונות, %d חבר (%d מוסתר) ו-%d אורחים ביקרו בפורומים.';
$lang['MembersGuestsOnline'] = 'ב-%d הדקות האחרונות, %d חברים (%d מוסתרים) ו-%d אורחים ביקרו בפורומים.';
$lang['WhosOnline'] = 'מי מחובר';
$lang['Done'] = 'בוצע';
$lang['KeywordsExplain'] = 'מילות מפתח כלשהן באורך של לפחות %d תווים מופרדות על ידי רווחים.';
$lang['BCCMyself'] = 'שליחת עותק לכתובת הדואר האלקטרוני שלי.';
$lang['Save'] = 'שמירה';
$lang['Add'] = 'הוספה';
$lang['MarkAllAsRead'] = 'סימון הכול כנקראו';
$lang['MarkAllAsReadDone'] = 'כל הפורומים והנושאים סומנו כנקראו.';
$lang['StringTooShort'] = '%s קצר מדי, דרושים לפחות %d תווים.';
$lang['StringTooLong'] = '%s ארוך מדי, רק %d תווים הינם מורשים.';
$lang['Upload'] = 'העלאה';
$lang['RegistrationsDisabled'] = 'הרשמות נוטרלו';
$lang['PostFormShortcut'] = 'לחץ <span dir="ltr">Alt+S (Control+S ב-Apple)</span> כדי לשלוח במהירות טופס זה.';
$lang['EditThisMember'] = 'עריכת חבר זה';
$lang['EmailTaken'] = 'כתובת הדואר האלקטרוני %s הינה נמצאת כבר בשימוש בקהילה זו. בבקשה בחר כתובת אחרת.';
$lang['RegisteredNotActivatedByAdmin'] = 'חשבונך %s נוצר עכשיו. לפני שתוכל להתחבר, מנהל המערכת של קהילה זו חייב להפעיל את חשבונך. בבקשה הרשה לזמן לעבור כדי שזה יקרה.';
$lang['AdminActivationEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. בדיוק רשמת חשבון ששמו [account_name]. מנהל המערכת של הקהילה עדיין צריך להפעיל את חשבונך. ברגע שזה יקרה, אתה תוכל להתחבר בעזרת הבאים:

שם משתמש: [account_name]
סיסמה: [password]

אם תשכח את סיסמתך, אתה יכול לבקש אחת חדשה דרך הקישור שבטופס ההתחברות. תודה לך על שנרשמת!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'חשבון המחכה להפעלה';
$lang['NewEmailNotActivatedByAdmin'] = 'הפרופיל שלך נערך בהצלחה. בגלל ששינית את כתובת הדואר האלקטרוני עבור חשבונך %s, מנהל המערכת של הקהילה צריך להפעיל אותו מחדש. אתה תנותק בינתיים.';
$lang['NewEmailAdminActivationEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. בדיוק שינית את כתובת הדואר האלקטרוני של חשבונך [account_name], אבל הוא אינו הופעל מחדש עדיין. מנהל המערכת של הקהילה צריך קודם להפעיל מחדש את חשבונך. בבקשה המתן מעט זמן כדי שזה יקרה.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'חשבון המחכה להפעלה מחדש';
$lang['AdminActivatedAccountEmailBody'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. מנהל המערכת הפעיל את חשבונך [account_name]. אתה יכול להתחבר עכשיו.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'חשבון הופעל';
$lang['Sort'] = 'סידור';
$lang['SortBy'] = 'סידור לפי';
$lang['SortBy-displayed_name'] = 'שם משתמש';
$lang['SortBy-real_name'] = 'שם אמיתי';
$lang['SortBy-level'] = 'שלב';
$lang['SortBy-rank'] = 'דרגה';
$lang['SortBy-regdate'] = 'נרשם';
$lang['SortBy-posts'] = 'הודעות';
$lang['SortBy-latest_post'] = 'הודעה אחרונה';
$lang['SortBy-topic_title'] = 'כותרת הנושא';
$lang['SortBy-forum'] = 'פורום';
$lang['SortBy-author'] = 'מחבר';
$lang['SortBy-replies'] = 'תגובות';
$lang['SortBy-views'] = 'צפיות';
$lang['SortOrder-asc'] = 'עולה';
$lang['SortOrder-desc'] = 'יורד';
$lang['NoUsersFound'] = 'לא נמצאו חברים.';
$lang['SaveConfigManually'] = 'בגלל ש-config.php אינו ניתן לכתיבה, UseBBHeb אינה יכולה לשמור את ערכי התצורה בעצמה. בבקשה שמור את התכנים הבאים אל config.php והעלה אם הכרחי.';
$lang['ShowResultsAs'] = 'הצגת תוצאות בתור';
$lang['ShowMode-topics'] = 'נושאים';
$lang['ShowMode-posts'] = 'הודעות';
$lang['Mode-and'] = 'כל מילות המפתח (וגם)';
$lang['Mode-or'] = 'מילות מפתח כלשהן (או)';
$lang['ExactMatch'] = 'התאמה מדויקת';
$lang['IncludeGuests'] = 'כולל אורחים';
$lang['Top'] = 'ראש העמוד';
$lang['Bottom'] = 'תחתית העמוד';
$lang['Action'] = 'פעולה';

?>
