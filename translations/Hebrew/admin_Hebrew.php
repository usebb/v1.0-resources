<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.92 2007/01/01 11:58:43 pc_freak Exp $
	
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

	This file was translated into Hebrew by Dan_y2k.
	Translation website: http://y2k.official.ws
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = 'התחברות מנהל מערכת';
$lang['AdminPasswordExplain'] = 'מסיבות בטיחותיות, אתה חייב להכניס את סיסמת החשבון שלך כדי להתחבר לתוך לוח בקרת מנהל המערכת.';

$lang['RunningBadACPModule'] = 'UseBB אינה יכולה להריץ מודול זה בגלל שאחד או יותר מההיבטים חסר (אובייקט $usebb_module לא נמצא ו/או חסרה שיטת אובייקט run_module()).';

$lang['Category-main'] = 'כללי';
$lang['Category-forums'] = 'פורומים';
$lang['Category-various'] = 'שונות';
$lang['Category-members'] = 'חברים';
$lang['Category-pruning'] = 'קיצוץ';
$lang['Category-security'] = 'אבטחה';
$lang['Item-index'] = 'אינדקס לוח בקרת מנהל המערכת';
$lang['Item-version'] = 'בדיקת גירסה';
$lang['Item-config'] = 'תצורה כללית';
$lang['Item-categories'] = 'ניהול קטגוריות';
$lang['Item-forums'] = 'ניהול פורומים';
$lang['Item-iplookup'] = 'חיפוש כתובת IP';
$lang['Item-sqltoolbox'] = 'תיבת כלי SQL';
$lang['Item-modules'] = 'מודולי לוח בקרת מנהל המערכת';
$lang['Item-members'] = 'עריכת חברים';
$lang['Item-delete_members'] = 'מחיקת חברים';
$lang['Item-register_members'] = 'הרשמת חברים';
$lang['Item-activate_members'] = 'הפעלת חברים';
$lang['Item-prune_forums'] = 'קיצוץ פורומים';
$lang['Item-prune_members'] = 'קיצוץ חברים';
$lang['Item-dnsbl'] = 'חסימות DNSBL';
$lang['Item-badwords'] = 'מסנן מילים רעות';
$lang['Item-mass_email'] = 'דואר אלקטרוני לכל החברים';
$lang['Item-bans'] = 'ניהול חסימות';

$lang['IndexWelcome'] = 'ברוך הבא ללוח בקרת מנהל המערכת של קהילת UseBB שלך. מכאן אתה יכול לשלוט על כל ההיבטים של הקהילה שלך, הגדרת התצורה, שליטה על פורומים, חברים, וכדומה.';
$lang['IndexSystemInfo'] = 'מידע מערכת';
$lang['IndexUseBBVersion'] = 'גירסת UseBB';
$lang['IndexPHPVersion'] = 'גירסת PHP';
$lang['IndexSQLServer'] = 'דרייבר שרת ה-SQL';
$lang['IndexHTTPServer'] = 'שרת HTTP';
$lang['IndexOS'] = 'מערכת הפעלה';
$lang['IndexServerLoad'] = 'ערכי עומס שרת';
$lang['IndexLinks'] = 'קישורים';
$lang['IndexUnactiveMembers'] = 'חברים שלא הופעלו';
$lang['IndexNoUnactiveMembers'] = 'אין חברים הממתינים להפעלת מנהל מערכת.';
$lang['IndexOneUnactiveMember'] = 'ישנו חבר אחד הממתין להפעלת מנהל מערכת.';
$lang['IndexMoreUnactiveMembers'] = 'ישנם %d חברים הממתינים להפעלת מנהל מערכת.';
$lang['IndexWarning'] = 'אזהרה!';
$lang['IndexUnwritableConfig'] = 'ברגע זה, %s אינו ניתן לכתיבה על ידי PHP. זה אינו מומלץ. כדי לעשות אותו ניתן לכתיבה, שנה את הרשאות הקובץ עם תוכנת FTP או בצע פעולת chmod (0777) עליו. צור קשר עם המאחסן שלך במקרה של בעיות.';

$lang['VersionFailed'] = 'המערכת לא יכלה לקבוע מהי הגירסה האחרונה (%s מנוטרל). בבקשה בדוק לעיתים קרובות %s כדי לוודא שיש לך את הגירסה האחרונה.';
$lang['VersionLatestVersionTitle'] = 'זוהי הגירסה האחרונה';
$lang['VersionLatestVersion'] = 'מערכת זו מופעלת על ידי UseBB %s שהינה הגירסה היציבה האחרונה.';
$lang['VersionNeedUpdateTitle'] = 'גירסה חדשה זמינה!';
$lang['VersionNeedUpdate'] = 'מערכת זו מריצה את UseBB גירסה %s שצריכה להתעדכן לגירסה %s כדי להישאר מאובטחת וללא תקלות! בקר ב-%s כדי להוריד את הגירסה האחרונה.';
$lang['VersionBewareDevVersionsTitle'] = 'גירסת פיתוח נמצאה';
$lang['VersionBewareDevVersions'] = 'מערכת זו מריצה את גירסה %s למרות זאת %s היא עדיין הגירסה היציבה האחרונה. היזהר מהבעיות ואי ההתאמות שעלולות להיות קיימות בגירסאות פיתוח.';

$lang['ConfigInfo'] = 'בעמוד זה אתה יכול לערוך את כל ההגדרות של קהילת ה-UseBB שלך. היזהר בעת שינוי תצורת בסיס הנתונים. שדות המסומנים עם כוכבית (*) הינם דרושים.';
$lang['ConfigSet'] = 'התצורה החדשה נקבעה. ניתן יהיה לראות אותה לאחר טעינת עמוד חדש.';
$lang['ConfigMissingFields'] = 'כמה שדות היו חסרים או לא נכונים (לדוגמה טקסט היכן שהיה צריך להיות מספר). בבקשה בדוק את השדות הבאים:';
$lang['ConfigBoard-type'] = 'סוג';
$lang['ConfigBoard-server'] = 'שרת';
$lang['ConfigBoard-username'] = 'שם משתמש';
$lang['ConfigBoard-passwd'] = 'סיסמה';
$lang['ConfigBoard-dbname'] = 'שם בסיס הנתונים';
$lang['ConfigBoard-prefix'] = 'קידומת טבלה';
$lang['ConfigBoardSection-general'] = 'קהילה כללית';
$lang['ConfigBoardSection-cookies'] = 'עוגיות';
$lang['ConfigBoardSection-cookies-info'] = 'אתה יכול להשאיר את אלה ריקים עבור גילוי אוטומטי.';
$lang['ConfigBoardSection-sessions'] = 'התחברויות';
$lang['ConfigBoardSection-page_counts'] = 'ספירות עמוד';
$lang['ConfigBoardSection-date_time'] = 'תאריכים &amp; זמנים';
$lang['ConfigBoardSection-date_time-info'] = 'מתייחס רק לאורחים וחשבונות חדשים.';
$lang['ConfigBoardSection-database'] = 'תצורת בסיס נתונים';
$lang['ConfigBoardSection-database-info'] = 'שנה את זה רק כשאתה בטוח שההגדרות יעבדו מיידית.';
$lang['ConfigBoardSection-advanced'] = 'הגדרות מתקדמות';
$lang['ConfigBoardSection-email'] = 'דואר אלקטרוני';
$lang['ConfigBoardSection-additional'] = 'תכונות נוספות';
$lang['ConfigBoardSection-user_rights'] = 'זכויות משתמש';
$lang['ConfigBoardSection-min_levels'] = 'רמות גישה מינימליות';
$lang['ConfigBoardSection-min_levels-info'] = 'אלה הן הרמות המינימליות הדרושות לגשת לכל פריט.';
$lang['ConfigBoardSection-layout'] = 'הגדרות חיצוניות';
$lang['ConfigBoardSection-security'] = 'אבטחה';
$lang['ConfigBoard-admin_email'] = 'כתובת דואר אלקטרוני של מנהל המערכת';
$lang['ConfigBoard-board_descr'] = 'תיאור הקהילה';
$lang['ConfigBoard-board_keywords'] = 'מילות מפתח של הקהילה';
$lang['ConfigBoard-board_keywords-info'] = 'מופרדות על ידי פסיקים.';
$lang['ConfigBoard-board_name'] = 'שם הקהילה';
$lang['ConfigBoard-date_format'] = 'מבנה תאריך';
$lang['ConfigBoard-date_format-info'] = 'אותו התחביר כמו ה-date() של PHP.';
$lang['ConfigBoard-language'] = 'שפת ברירת המחדל';
$lang['ConfigBoard-language-info'] = 'מיושם רק על אורחים ועל חשבונות חדשים שנוצרו.';
$lang['ConfigBoard-session_name'] = 'שם התחברות';
$lang['ConfigBoard-session_name-info'] = 'רק תווי אותיות ומספרים, ללא רווחים. חייב להכיל לפחות אות אחת.';
$lang['ConfigBoard-template'] = 'עיצוב ברירת המחדל';
$lang['ConfigBoard-template-info'] = 'מיושם רק על אורחים ועל חשבונות חדשים שנוצרו.';
$lang['ConfigBoard-active_topics_count'] = 'ספירת נושאים פעילים';
$lang['ConfigBoard-avatars_force_height'] = 'הכרחת גובה של הדמות האישיות (פיקסלים)';
$lang['ConfigBoard-avatars_force_width'] = 'הכרחת רוחב של הדמויות האישיות (פיקסלים)';
$lang['ConfigBoard-avatars_force_width-info'] = 'השאר ריק או אפס לניטרול.';
$lang['ConfigBoard-debug'] = 'מצב איתור שגיאות';
$lang['ConfigBoard-email_view_level'] = 'רמת צפייה בדואר אלקטרוני';
$lang['ConfigBoard-flood_interval'] = 'מרווח הצפה (שניות)';
$lang['ConfigBoard-members_per_page'] = 'חברים לעמוד';
$lang['ConfigBoard-online_min_updated'] = 'משתמשים מחוברים במשך הדקות האחרונות';
$lang['ConfigBoard-output_compression'] = 'דחיסת פלט';
$lang['ConfigBoard-passwd_min_length'] = 'אורך סיסמה מינימלי';
$lang['ConfigBoard-posts_per_page'] = 'הודעות לעמוד';
$lang['ConfigBoard-rss_items_count'] = 'ספירת פריטי RSS';
$lang['ConfigBoard-search_limit_results'] = 'הגבלת תוצאות חיפוש ל-x פריטים';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'אורך מילת מפתח מינימלית לחיפוש';
$lang['ConfigBoard-session_max_lifetime'] = 'זמן חיי התחברות מירבי (דקות)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'פסק זמן הערת הודעה ערוכה';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'כשההודעה נערכה בשניות האלה לאחר פירסום, הערכת העריכה נשארת חבויה.';
$lang['ConfigBoard-topicreview_posts'] = 'ספירת הודעת סקירת נושא';
$lang['ConfigBoard-topics_per_page'] = 'נושאים לעמוד';
$lang['ConfigBoard-view_active_topics_min_level'] = 'נושאים פעילים';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'רשימת מחוברים מפורטת';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'תיבת סטטיסטיקות';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'רמה מינימלית עבור צפייה בכתובת דואר אלקטרוני מוסתרות';
$lang['ConfigBoard-view_memberlist_min_level'] = 'רשימת חברים';
$lang['ConfigBoard-view_search_min_level'] = 'מנוע חיפוש';
$lang['ConfigBoard-view_stafflist_min_level'] = 'רשימת צוות';
$lang['ConfigBoard-view_stats_min_level'] = 'עמוד סטטיסטיקות';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'קישור יצירת קשר עם מנהל המערכת';
$lang['ConfigBoard-allow_multi_sess'] = 'הרשאת כמה התחברויות לכל IP';
$lang['ConfigBoard-board_closed'] = 'סגירת הקהילה';
$lang['ConfigBoard-board_closed-info'] = 'מנהלי מערכת עדיין יוכלו להתחבר.';
$lang['ConfigBoard-cookie_secure'] = 'איבטוח עוגיות';
$lang['ConfigBoard-cookie_secure-info'] = 'עוגיות מוצפנות (HTTPS בלבד)';
$lang['ConfigBoard-cookie_httponly'] = 'איפשור עוגיות HTTP בלבד';
$lang['ConfigBoard-cookie_httponly-info'] = 'מוסיף דגל httpOnly לעוגיות, והופך אותן ליותר מאובטחות נגד XSS.';
$lang['ConfigBoard-dst'] = 'זמני שמירת אור יום';
$lang['ConfigBoard-enable_contactadmin'] = 'איפשור קישור יצירת קשר עם מנהל המערכת';
$lang['ConfigBoard-enable_detailed_online_list'] = 'איפשור רשימת מחוברים מפורטת';
$lang['ConfigBoard-enable_forum_stats_box'] = 'איפשור תיבת סטטיסטיקות הקהילה';
$lang['ConfigBoard-enable_memberlist'] = 'איפשור רשימת חברים';
$lang['ConfigBoard-enable_quickreply'] = 'איפשור תגובה מהירה';
$lang['ConfigBoard-enable_rss'] = 'איפשור הזנת RSS';
$lang['ConfigBoard-enable_stafflist'] = 'איפשור רשימת צוות';
$lang['ConfigBoard-enable_stats'] = 'איפשור עמוד סטטיסטיקות';
$lang['ConfigBoard-friendly_urls'] = 'איפשור כתובות ידידותיות';
$lang['ConfigBoard-friendly_urls-info'] = 'דורשת Apache ו-mod_rewrite. תנטרל את מספרי זיהוי כתובת ההתחברות.';
$lang['ConfigBoard-guests_can_access_board'] = 'אורחים יכולים לגשת לקהילה';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'אורחים יכולים לראות מידע יצירת קשר בפרופילים';
$lang['ConfigBoard-guests_can_view_profiles'] = 'אורחים יכולים לצפות בפרופילי חברים';
$lang['ConfigBoard-hide_avatars'] = 'הסתרת כל הדמויות האישיות';
$lang['ConfigBoard-hide_signatures'] = 'הסתרת כל החתימות';
$lang['ConfigBoard-hide_userinfo'] = 'הסתרת מידע משתמש';
$lang['ConfigBoard-rel_nofollow'] = 'איפשור nofollow של Google';
$lang['ConfigBoard-rel_nofollow-info'] = 'זה יגרום ל-Google להתעלם מכל קישורי קוד BB.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'חזרה לנושא לאחר פירסום';
$lang['ConfigBoard-sig_allow_bbcode'] = 'איפשור קוד BB בחתימות';
$lang['ConfigBoard-sig_allow_smilies'] = 'איפשור סמיילים בחתימות';
$lang['ConfigBoard-sig_max_length'] = 'אורך חתימה מירבי';
$lang['ConfigBoard-single_forum_mode'] = 'מצב פורום בודד';
$lang['ConfigBoard-single_forum_mode-info'] = 'מציג רק את הפורום הניתן לצפייה בתור אינדקס הפורומים.';
$lang['ConfigBoard-target_blank'] = 'קישורי קוד BB ייפתחו בחלון חדש';
// $lang['ConfigBoard-target_blank-info'] = 'עלול לגרום לשבירת תקינות XHTML!';
$lang['ConfigBoard-activation_mode'] = 'מצב הפעלה';
$lang['ConfigBoard-activation_mode0'] = 'ללא הפעלה';
$lang['ConfigBoard-activation_mode1'] = 'הפעלה בדואר אלקטרוני';
$lang['ConfigBoard-activation_mode2'] = 'הפעלה על ידי מנהל מערכת';
$lang['ConfigBoard-board_closed_reason'] = 'סיבת סגירת הקהילה';
$lang['ConfigBoard-board_url'] = 'כתובת הקהילה';
$lang['ConfigBoard-board_url-info'] = 'כתובת מלאה כולל לוכסן סופי; ריק עבור גילוי אוטומטי.';
$lang['ConfigBoard-cookie_domain'] = 'דומיין עוגיה';
$lang['ConfigBoard-cookie_path'] = 'נתיב עוגיה';
$lang['ConfigBoard-session_save_path'] = 'נתיב שמירת התחברות';
$lang['ConfigBoard-session_save_path-info'] = 'נתיב שמירת נתוני התחברות מותאמים אישית; רק שמות תיקיות מוחלטים.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'מניעת פורומים מהנושאים הפעילים';
$lang['ConfigBoard-exclude_forums_rss'] = 'מניעת פורומים מהזנת RSS';
$lang['ConfigBoard-exclude_forums_stats'] = 'מניעת פורומים מעמוד הסטטיסטיקות';
$lang['ConfigBoard-timezone'] = 'אזור זמן';
$lang['ConfigBoard-debug0'] = 'מנוטרל';
$lang['ConfigBoard-debug1'] = 'פשוט (זמן הרצה וספירות)';
$lang['ConfigBoard-debug2'] = 'מורחב (פשוט + שאילתות SQL)';
$lang['ConfigBoard-email_view_level0'] = 'הסתרת כל כתובות הדואר האלקטרוני';
$lang['ConfigBoard-email_view_level1'] = 'איפשור טופס דואר אלקטרוני';
$lang['ConfigBoard-email_view_level2'] = 'הצגת חסין מדואר זבל';
$lang['ConfigBoard-email_view_level3'] = 'הצגה פשוטה';
$lang['ConfigBoard-output_compression0'] = 'מנוטרלת';
$lang['ConfigBoard-output_compression1'] = 'דחיסת HTML';
$lang['ConfigBoard-output_compression2'] = 'איפשור Gzip';
$lang['ConfigBoard-output_compression3'] = 'דחיסת HTML + Gzip';
$lang['ConfigBoard-level0'] = 'אורחים';
$lang['ConfigBoard-level1'] = 'חברים';
$lang['ConfigBoard-level2'] = 'מנהלי פורומים';
$lang['ConfigBoard-level3'] = 'מנהלי מערכת';
$lang['ConfigBoard-enable_acp_modules'] = 'איפשור מודולי לוח בקרת מנהל המערכת';
$lang['ConfigBoard-disable_registrations'] = 'ניטרול הרשמות משתמשים';
$lang['ConfigBoard-disable_registrations-info'] = 'משתמשים עדיין יוכלו להירשם דרך לוח בקרת מנהל המערכת.';
$lang['ConfigBoard-disable_registrations_reason'] = 'סיבת ניטרול הרשמות משתמשים';
$lang['ConfigBoard-allow_duplicate_emails'] = 'הרשאת כתובות דואר אלקטרוני זהות';
$lang['ConfigBoard-enable_badwords_filter'] = 'איפשור מסנן מילים רעות';
$lang['ConfigBoard-enable_ip_bans'] = 'איפשור חסימת כתובת IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'הצגת ישויות פשוטות בתגי [code].';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'מציג ישות קוד פשוטה במקום ייצוג ה-HTML.';
$lang['ConfigBoard-username_min_length'] = 'אורך שם משתמש מינימלי';
$lang['ConfigBoard-username_max_length'] = 'אורך שם משתמש מירבי';
$lang['ConfigBoard-show_never_activated_members'] = 'הצגת חברים שלא הופעלו אף פעם';
$lang['ConfigBoard-show_never_activated_members-info'] = 'מציג את אלה בתיבת הסטטיסטיקות ורשימת החברים.';
$lang['ConfigBoard-enable_registration_log'] = 'איפשור יומן הרשמה';
$lang['ConfigBoard-enable_registration_log-info'] = 'כותב יומן הרשמה בקובץ טקסט.';
$lang['ConfigBoard-registration_log_file'] = 'קובץ יומן הרשמה';
$lang['ConfigBoard-registration_log_file-info'] = 'ביחס לתיקיית הקהילה, או נתיב מוחלט.';
$lang['ConfigBoard-enable_email_dns_check'] = 'איפשור בדיקת DNS של כתובת דואר אלקטרוני';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'נותן תוקף על ידי חיפוש אחר רשומות MX. זה עלול לא לעבוד על כל הדומיינים התקינים.';
$lang['ConfigBoard-edit_post_timeout'] = 'פסק זמן עריכת הודעה';
$lang['ConfigBoard-edit_post_timeout-info'] = 'משתמש רשאי לערוך את הודעותיו רק בתוך x שניות לאחר פירסום.';
$lang['ConfigBoard-disable_xhtml_header'] = 'ניטרול כותרת XHTML עבור עיצובי XHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'ניתן להשתמש בסוג תוכן XHTML רק כשהתוכן הוא 100% מפותח היטב. זה תמיד מנוטרל עבור דפדפנים ללא תמיכת XHTML.';
$lang['ConfigBoard-email_reply-to_header'] = 'השתמש בכותרת תגובה-אל';

$lang['ConfigBoard-email_reply-to_header-info'] = 'השתמש בתגובה-אל במקום שולח עבור כתובת הדואר האלקטרוני של המשתמש (דרוש בחלק מהמאחסנים).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'ספירת שליחת הודעת דואר אלקטרוני רבת משתמשים';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'הודעות מרובות יישלחו עד שכל הנמענים יקבלו דואר.';

$lang['CategoriesInfo'] = 'אזור זה נותן לך את השליטה על כל הקטגוריות השונות שקיימות בקהילה שלך.';
$lang['CategoriesAddNewCat'] = 'הוספת קטגוריה חדשה';
$lang['CategoriesAdjustSortIDs'] = 'התאמת מספרי זיהוי של הסידור';
$lang['CategoriesSortAutomatically'] = 'סידור קטגוריות אוטומטי';
$lang['CategoriesNoCatsExist'] = 'קהילה זו אינה מכילה קטגוריות כלשהן עדיין.';
$lang['CategoriesCatName'] = 'שם הקטגוריה';
$lang['CategoriesSortID'] = 'מספר זיהוי של הסידור';
$lang['CategoriesMissingFields'] = 'כמה שדות דרושים היו חסרים. בבקשה מלא אותם נכונה.';
$lang['CategoriesSortChangesApplied'] = 'השינויים שלך למספרי זיהוי הסידור בוצעו.';
$lang['CategoriesConfirmCatDelete'] = 'אישור מחיקת קטגוריה';
$lang['CategoriesConfirmCatDeleteContent'] = 'אתה בטוח שאתה רוצה למחוק את הקטגוריה %s? פעולה זו הינה בלתי הפיכה!';
$lang['CategoriesMoveContents'] = 'העברת התכנים של הקטגוריה אל %s';
$lang['CategoriesDeleteContents'] = 'מחיקת התכנים';
$lang['CategoriesEditingCat'] = 'עריכת הקטגוריה %s';

$lang['ForumsInfo'] = 'אזור זה נותן לך את השליטה על כל הפורומים השונים שקיימים בקהילה שלך.';
$lang['ForumsAddNewForum'] = 'הוספת פורום חדש';
$lang['ForumsAdjustSortIDs'] = 'התאמת מספרי זיהוי של הסידור';
$lang['ForumsSortAutomatically'] = 'סידור פורומים אוטומטי';
$lang['ForumsNoForumsExist'] = 'קהילה זו אינה מכילה פורומים כלשהם עדיין.';
$lang['ForumsForumName'] = 'שם הפורום';
$lang['ForumsCatName'] = 'קטגוריה ראשית';
$lang['ForumsDescription'] = 'תיאור';
$lang['ForumsDescriptionExplain'] = 'אזור זה הינו מאופשר HTML. אם אתה רוצה להשתמש בתווים מיוחדים, וודא שאתה משתמש בישויות ה-HTML המתאימות (לדוגמה &amp;amp; במקום &amp;).';
$lang['ForumsStatus'] = 'מצב';
$lang['ForumsStatusOpen'] = 'פתוח';
$lang['ForumsAutoLock'] = 'נעילה אוטומטית';
$lang['ForumsAutoLockXReplies'] = 'נעילה לאחר %s תגובות.';
$lang['ForumsIncreasePostCount'] = 'העלאת מונה הודעות המשתמש';
$lang['ForumsModerators'] = 'מנהלי הפורום';
$lang['ForumsModeratorsExplain'] = 'שמות משתמשים (לא שמות תצוגה), מופרדים על ידי פסיקים. ללא רגישות לאותיות גדולות וקטנות.';
$lang['ForumsModeratorsUnknown'] = 'חברים לא ידועים: %s.';
$lang['ForumsHideModsList'] = 'הסתרת רשימת מנהלי הפורום';
$lang['ForumsSortID'] = 'מספר זיהוי של הסידור';
$lang['ForumsMissingFields'] = 'כמה שדות דרושים היו חסרים. בבקשה מלא אותם נכונה.';
$lang['ForumsSortChangesApplied'] = 'השינויים שלך למספרי זיהוי הסידור בוצעו.';
$lang['ForumsConfirmForumDelete'] = 'אישור מחיקת פורום';
$lang['ForumsConfirmForumDeleteContent'] = 'אתה בטוח שאתה רוצה למחוק את הפורום %s? פעולה זו הינה בלתי הפיכה!';
$lang['ForumsMoveContents'] = 'העברת התכנים של הפורום אל %s';
$lang['ForumsMoveModerators'] = 'כשאתה מעביר תכנים, העבר גם את מנהלי הפורום.';
$lang['ForumsDeleteContents'] = 'מחיקת התכנים';
$lang['ForumsEditingForum'] = 'עריכת הפורום %s';
$lang['ForumsGeneral'] = 'הגדרות כלליות';
$lang['ForumsAuth'] = 'הגדרות הרשאה';
$lang['ForumsAuthNote'] = 'ההגדרות אינן מועתקות אחת מהשנייה!';
$lang['Forums-level0'] = 'אורחים';
$lang['Forums-level1'] = 'חברים';
$lang['Forums-level2'] = 'מנהלי פורומים';
$lang['Forums-level3'] = 'מנהלי מערכת';
$lang['Forums-auth0'] = 'צפייה בפורום';
$lang['Forums-auth1'] = 'קריאת נושאים';
$lang['Forums-auth2'] = 'פירסום נושאים חדשים';
$lang['Forums-auth3'] = 'פירסום תגובה לנושאים';
$lang['Forums-auth4'] = 'עריכת הודעות של אחרים';
$lang['Forums-auth5'] = 'העברת נושאים';
$lang['Forums-auth6'] = 'מחיקת נושאים והודעות';
$lang['Forums-auth7'] = 'נעילת נושאים';
$lang['Forums-auth8'] = 'נושאים דביקים';
$lang['Forums-auth9'] = 'פירסום בתור HTML (מסוכן)';

$lang['IPLookupSearchHostname'] = 'חיפוש שם מאחסן';
$lang['IPLookupSearchUsernames'] = 'חיפוש שמות משתמשים';
$lang['IPLookupHostname'] = 'שם מאחסן';
$lang['IPLookupHostnameNotFound'] = 'לא נמצא שם מאחסן מתאים.';
$lang['IPLookupUsernames'] = 'שמות משתמשים';
$lang['IPLookupUsernamesNotFound'] = 'לא נמצאו שמות משתמשים מתאימים.';

$lang['SQLToolboxWarningTitle'] = 'אזהרה חשובה!';
$lang['SQLToolboxWarningContent'] = 'היזהר בעת שימוש בכלי השאילתה הפשוט. ביצוע ALTER, DELETE, TRUNCATE או סוגים אחרים של שאילתות עלולים לגרום נזק בלתי הפיך לקהילה שלך! השתמש רק כשאתה יודע מה אתה עושה.';
$lang['SQLToolboxExecuteQuery'] = 'ביצוע שאילתה';
$lang['SQLToolboxExecuteQueryInfo'] = 'הכנס שאילתת SQL לביצוע. בסוף, תוצאות יוצגו בתיבת הטקסט השנייה.';
$lang['SQLToolboxExecute'] = 'ביצוע';
$lang['SQLToolboxExecutedSuccessfully'] = 'שאילתה בוצעה בהצלחה.';
$lang['SQLToolboxMaintenance'] = 'תחזוקה';
$lang['SQLToolboxMaintenanceInfo'] = 'פונקציות אלה מייעלות (ומתקנות) את טבלאות ה-SQL המשומשות על ידי UseBB. ייעול הטבלאות לעיתים קרובות מספיק הינו מומלץ לקהילות גדולות.';
$lang['SQLToolboxRepairTables'] = 'תיקון טבלאות';
$lang['SQLToolboxOptimizeTables'] = 'ייעול טבלאות';
$lang['SQLToolboxMaintenanceNote'] = 'הערה: זה אינו מחזיר נתונים אבודים כלשהם בבסיס הנתונים.';

$lang['ModulesInfo'] = 'מודולי לוח בקרת מנהל המערכת מאפשרים לך להרחיב את לוח בקרת מנהל המערכת עם התכונות שלך או תכונות שנוצרו על ידי מתכנתים מצד שלישי. מודולים יכולים להימצא דרך אתר UseBB: %s.';
$lang['ModulesLongName'] = 'שם ארוך';
$lang['ModulesShortName'] = 'שם קצר';
$lang['ModulesCategory'] = 'קטגוריה';
$lang['ModulesFilename'] = 'שם קובץ';
$lang['ModulesDeleteNotPermitted'] = 'לא מורשה';
$lang['ModulesDisabled'] = 'מודולי לוח בקרת מנהל המערכת נוטרלו בתצורת הקהילה.';
$lang['ModulesNoneAvailable'] = 'אין מודולים זמינים כרגע.';
$lang['ModulesUpload'] = 'העלאת מודול';
$lang['ModulesUploadInfo'] = 'הכנס שם קובץ מקוי של מודול לוח בקרת מנהל מערכת UseBB כדי להעלות אותו.';
$lang['ModulesUploadDuplicateModule'] = 'מודול תחת שם הקובץ %s קיים כבר. בבקשה הסר אותו קודם.';
$lang['ModulesUploadNoValidModule'] = 'הקובץ %s אינו מודול UseBB תקין.';
$lang['ModulesUploadFailed'] = 'לא ניתן להתקין את המודול %s. העתקה נכשלה.';
$lang['ModulesUploadDisabled'] = 'תיקיית המודולים אינה ניתנת לכתיבה. העלאה נוטרלה. כדי לאפשר, הפוך את התיקייה %s לניתנת לכתיבה על ידי שרת האינטרנט (נסה chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'אישור מחיקת מודול';
$lang['ModulesConfirmModuleDeleteInfo'] = 'אתה בטוח שאתה רוצה למחוק את המודול %s (%s)?';

$lang['MembersSearchMember'] = 'חיפוש חבר';
$lang['MembersSearchMemberInfo'] = 'הכנס (חלק מ) שם משתמש או שם תצוגה לעריכה.';
$lang['MembersSearchMemberExplain'] = 'שם משתמש או שם תצוגה';
$lang['MembersSearchMemberNotFound'] = 'אין חברים עם שם המשתמש או שם התצוגה %s שנמצאו.';
$lang['MembersSearchMemberList'] = 'החברים הבאים נמצאו';
$lang['MembersEditingMember'] = 'עריכת החבר %s';
$lang['MembersEditingMemberInfo'] = 'עדכן את מידע המשתמש ושלח את הטופס. שדות המסומנים עם כוכבית (*) הינם דרושים.';
$lang['MembersEditingMemberUsernameExists'] = 'שם המשתמש %s קיים כבר בתור שם משתמש או שם תצוגה.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'שם התצוגה %s קיים כבר בתור שם משתמש או שם תצוגה.';
$lang['MembersEditingMemberBanned'] = 'נחסם';
$lang['MembersEditingMemberBannedReason'] = 'סיבה לחסימה';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'אינך יכול לשנות את הרמה שלך.';
$lang['MembersEditingMemberCantBanSelf'] = 'אינך יכול לחסום את עצמך.';
$lang['MembersEditingComplete'] = 'הפרופיל של חהבר %s נערך בהצלחה.';

$lang['DeleteMembersSearchMember'] = 'חיפוש חבר';
$lang['DeleteMembersSearchMemberInfo'] = 'הכנס (חלק מ) שם משתמש או שם תצוגה למחיקה.';
$lang['DeleteMembersSearchMemberExplain'] = 'ש משתמש או שם תצוגה';
$lang['DeleteMembersSearchMemberNotFound'] = 'אין חברים עם שם המשתמש או שם התצוגה %s שנמצאו.';
$lang['DeleteMembersSearchMemberList'] = 'החברים הבאים נמצאו';
$lang['DeleteMembersConfirmMemberDelete'] = 'אישור מחיקת חבר';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'אתה בטוח שאתה רוצה למחוק את החבר %s? זה הינו בלתי הפיך!';
$lang['DeleteMembersComplete'] = 'מחיקת החבר %s הושלמה.';

$lang['RegisterMembersExplain'] = 'כאן אתה יכול לרשום מראש חשבונות חברים. פשוט מלא את המידע הבא כדי ליצור חשבון.';
$lang['RegisterMembersComplete'] = 'ההרשמה של המשתמש %s הושלמה. המשתמש יכול להתחבר ברגע זה.';

$lang['ActivateMembersExplain'] = 'זוהי רשימה של חברים לא מופעלים בקהילה שלך. כאן אתה יכול לאשר חשבונות ידנית. כוכבית (*) משמעותה שחשבון המשתמש היה פעיל בעבר.';
$lang['ActivateMembersNoMembers'] = 'אין חברים לרשימה.';
$lang['ActivateMembersListAdmin'] = 'אישור מנהל מערכת';
$lang['ActivateMembersListEmail'] = 'אישור בדואר אלקטרוני';
$lang['ActivateMembersListAll'] = 'הכול';

$lang['PruneForumsStart'] = 'התחלת קיצוץ';
$lang['PruneForumsExplain'] = 'על ידי קיצוץ פורומים, אתה יכול למחוק או להעביר נושאים ישנים ולשמור על הקהילה שלך נקייה.';
$lang['PruneForumsForums'] = 'פורומים לקיצוץ';
$lang['PruneForumsAction'] = 'פעולה';
$lang['PruneForumsActionLock'] = 'נעילה';
$lang['PruneForumsActionMove'] = 'העברה';
$lang['PruneForumsActionDelete'] = 'מחיקה';
$lang['PruneForumsMoveTo'] = 'העברת נושאים אל';
$lang['PruneForumsTopicAge'] = 'גיל נושא';
$lang['PruneForumsTopicAgeField'] = 'תגובה אחרונה לפני %s ימים.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'פורום &quot;ההעברה&quot; אינו יכול להיבחר עבור קיצוץ.';
$lang['PruneForumsConfirm'] = 'אישור';
$lang['PruneForumsConfirmText'] = 'אני מבין שפעולה זו הינה בלתי הפיכה.';
$lang['PruneForumsNotConfirmed'] = 'אתה צריך לאשר פעולה זו קודם.';
$lang['PruneForumsDone'] = 'קיצוץ הושלם. %d נושאים קוצצו.';
$lang['PruneForumsExcludeStickies'] = 'מניעת נושאים דביקים';

$lang['PruneMembersExplain'] = 'על ידי קיצוץ חברים אתה יכול לנקות את בסיס המשתמשים של הקהילה על ידי הסרת חשבונות משתמשים שלא הופעלו או לא פעילים.';
$lang['PruneMembersTypeNeverActivated'] = 'חברים שלא הופעלו אף פעם';
$lang['PruneMembersRegisteredDaysAgo'] = 'נרשמו לפני לפחות %s ימים.';
$lang['PruneMembersTypeNeverPosted'] = 'חברים שלא פירסמו אף פעם';
$lang['PruneMembersTypeInactive'] = 'חברים לא פעילים';
$lang['PruneMembersLastLoggedIn'] = 'התחברו בפעם האחרונה לפני לפחות %s ימים.';
$lang['PruneMembersExclude'] = 'מניעה';
$lang['PruneMembersConfirmText'] = 'אני מבין שפעולה זו הינה בלתי הפיכה.';
$lang['PruneMembersStart'] = 'התחלת קיצוץ';
$lang['PruneMembersNotConfirmed'] = 'אתה צריך לאשר פעולה זו קודם.';
$lang['PruneMembersDone'] = 'הקיצוץ הושלם. %d חברים קוצצו.';

$lang['DNSBLIPBansDisabled'] = 'חסימת כתובות IP נוטרלה';
$lang['DNSBLIPBansDisabledInfo'] = 'כדי שחסימה המופעלת על ידי DNSBL תעבוד, חסימת כתובות IP חייבת להיות מאופשרת.';
$lang['DNSBLGeneralInfo'] = 'פרוקסים פתוחים הינם משומשים לעיתים קרובות כדי לפרסם זבל או הודעות פוגעות. שימוש במערכת ההגנה של UseBB, רוב הפרוקסים האלה יכולים להיות מאותרים וחסומים אוטומטית. לשם כך רשימות שחורות מחפשות מידע אודות כתובת ה-IP של המבקר.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'איפשור חסימה המופעלת על ידי DNSBL';
$lang['DNSBLServers'] = 'רשימה שחורה של שרתי DNS (DNSBL)';
$lang['DNSBLServersInfo'] = 'שרת DNS אחד לכל שורה. שים לב בעת שימוש רב של רשימות שחורות אלה ביחד עלול לגרום איטיות בעת יצירת התחברות חדשה לקהילה שלך.';
$lang['DNSBLMinPositiveHits'] = 'לפחות %s כניסות חיוביות הינן דרושות כדי לחסום כתובת IP.';
$lang['DNSBLRecheckMinutes'] = 'בדוק מחדש כתובות IP מורשות כל %s דקות (0 כדי לנטרל).';
$lang['DNSBLEnableOpenDNSBLBanWildcard'] = 'אפשר חסימה חלקית %s (לא מומלץ)';
$lang['DNSBLSettingsSaved'] = 'הגדרות חסימת DNSBL נשמרו.';
$lang['DNSBLWhitelist'] = 'רשימה לבנה';
$lang['DNSBLWhitelistInfo'] = 'כתובת IP אחת או שם מאחסן אחד לכל שורה (* ו-? יכולות לשמש כחלקיות).';

$lang['BadwordsInfo'] = 'מילים רעות יכולות להיות מסוננות או מוחלפות, בסוף שימוש בהתאמה חלקית (בעת שימוש ב-*).';
$lang['BadwordsDisabled'] = 'מסנן מילים רעות מנוטרל';
$lang['BadwordsDisabledInfo'] = 'מסנן מילים רעות נוטרל בתצורת הקהילה.';
$lang['BadwordsNoBadwordsExist'] = 'לא קיימים מסננים בקהילה זו.';
$lang['BadwordsAddBadwordWord'] = 'מילה';
$lang['BadwordsAddBadwordReplacement'] = 'החלפה';

$lang['MassEmailInfo'] = 'שליחת הודעת דואר אלקטרוני לכל החברים שלך או לקבוצת רמה.';
$lang['MassEmailRecipients'] = 'נמענים';
$lang['MassEmailRecipients-admins'] = 'מנהלי מערכת';
$lang['MassEmailRecipients-mods'] = 'מנהלי פורומים';
$lang['MassEmailRecipients-members'] = 'חברים רגילים';
$lang['MassEmailSubject'] = 'נושא';
$lang['MassEmailBody'] = 'גוף';
$lang['MassEmailTemplate'] = 'שלום,

זוהי מערכת הפורומים של [board_name] מדברת. מנהל המערכת שלח הודעת דואר אלקטרוני זו לחלק מהמשתמשים דרך הקהילה שלנו. גוף ההודעה נמצא למטה.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'הודעת הדואר האלקטרוני נשלחה ל -%d חברים.';
$lang['MassEmailSent'] = 'הודעת הדואר האלקטרוני רבת המשתמשים נשלחה אל %d חברים תוך כדי שימוש ב-%d הודעות.';
$lang['MassEmailOptions'] = 'אפשרויות';
$lang['MassEmailPublicEmailsOnly'] = 'שליחה רק לכתובות דואר אלקטרוני ציבוריות';
$lang['MassEmailExcludeBanned'] = 'מניעה מחברים חסומים';

$lang['BansInfo'] = 'כאן אתה יכול לשלוט בכמעט כל היבטי החסימה של הקהילה שלך. התאמה חלקית (בעזרת *) אפשרית. חשבונות יחידים יכולים להיחסם דרך לוח עריכת החבר.';
$lang['Bans-username'] = 'שמות משתמשים';
$lang['Bans-email'] = 'כתובות דואר אלקטרוני';
$lang['Bans-ip_addr'] = 'כתובות IP';
$lang['BansUsername'] = 'שם משתמש';
$lang['BansEmail'] = 'כתובת דואר אלקטרוני';
$lang['BansIp_addr'] = 'כתובת IP';
$lang['BansNoBansExist'] = 'אין חסימות מסוג זה הקיימות בקהילה זו.';
$lang['BansIPBansDisabledInfo'] = 'חסימת כתובות IP נוטרלה  בתצורת הקהילה.';

?>
