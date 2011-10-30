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
/***************************************************************************
 *                            Traditional Chinese Translation [正體中文語系]
 *                              -------------------
 *     begin                : Sat Apr 1 2006
 *     by                   : Hanklu
 *     email                : Hankbox@gmail.com
 *
 *     last modify          : Sat Apr 1 2006
 *
 ***************************************************************************/
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
$lang['language_code'] = 'zhtw';
$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = '首頁';
$lang['YourPanel'] = '控制台';
$lang['Register'] = '註冊';
$lang['FAQ'] = '常見問題';
$lang['Search'] = '搜尋';
$lang['ActiveTopics'] = '最近活動主題';
$lang['LogIn'] = '登入';
$lang['LogOut'] = '登出 (%s)';
$lang['MemberList'] = '會員列表';
$lang['StaffList'] = '管理團隊';
$lang['Statistics'] = '狀態';
$lang['ContactAdmin'] = '回報';
$lang['Forum'] = '版面';
$lang['Topics'] = '主題';
$lang['Posts'] = '發表';
$lang['LatestPost'] = '最後發表';
$lang['RSSFeed'] = '提供RSS ';
$lang['NewPosts'] = '發表文章';
$lang['NoNewPosts'] = '沒有新的文章';
$lang['LockedNewPosts'] = '鎖定主題 (有新的回覆)';
$lang['LockedNoNewPosts'] = '鎖定主題 (沒有新的回覆)';
$lang['Locked'] = '已鎖住';
$lang['LastLogin'] = '最後登入';
$lang['VariousInfo'] = '綜合資訊';
$lang['IndexStats'] = '目前發表的 %d 篇文章和 %d 篇主題 ，參與討論的會員 %d 位.';
$lang['NewestMemberExtended'] = '歡迎我們最新註冊的會員: %s.';
$lang['NewestMember'] = '歡迎我們的新會員: %s.';
$lang['OnlineUsers'] = '目前線上有 %d 位會員和 %d 位訪客，在過去 %d 分鐘內';
$lang['Username'] = '帳號';
$lang['CurrentPassword'] = '正確密碼';
$lang['UserID'] = '帳號 ID';
$lang['NoSuchForum'] = '這個版面 %s 不存在與這個討論區';
$lang['WrongPassword'] = '您的密碼有問題!假如您忘記了密碼請到登入頁面要求新的密碼.';
$lang['Reset'] = '清除重新設置';
$lang['SendPassword'] = '寄新密碼';
$lang['RegisterNewAccount'] = '註冊新會員';
$lang['RememberMe'] = '自動登入';
$lang['Yes'] = '是';
$lang['No'] = '不是';
$lang['NotActivated'] = '您的帳號 %s 還沒有啟動.請檢查您的信箱是否有認證信件並請按照上面指示啟動.';
$lang['Error'] = '錯誤';
$lang['Profile'] = ' %s 個人檔案';
$lang['Level'] = '階級';
$lang['Administrator'] = '管理員';
$lang['Moderator'] = '版主';
$lang['Registered'] = '註冊時間';
$lang['Email'] = 'E-mail 信箱';
$lang['ContactInfo'] = '聯絡資訊';
$lang['Password'] = '密碼';
$lang['PasswordAgain'] = '密碼(請再次輸入)';
$lang['EverythingRequired'] = '所有欄位為必須都要填寫的欄位';
$lang['UserAlreadyExists'] = '抱歉, 此帳號 %s 已經有人使用. 假如是您的, 登入或索取新的密碼. 假如不是, 請另外選擇其他帳號.';
$lang['RegisteredNotActivated'] = '你的帳號 %s 已新增. 系統已寄出啟動信件 %s 將會指引您啟動您的帳號. 您必須啟動您的帳號才可以登入.';
$lang['RegisteredActivated'] = ' %s 您的帳號已經新增. 系統已寄出信件 %s 有關於您的帳號細節. 您可以立即登入.';
$lang['Never'] = '從來沒有';
$lang['Member'] = '會員';
$lang['RegistrationActivationEmailBody'] = '您好,

這是系統發出的，來自於 [board_name] . 您剛才成為我們的會員，帳號是 [account_name], 但是還沒有啟動確認. 請點選下面連結來啟動您的帳號:

[activate_link]

或複製貼上您的瀏覽器. 啟動後您就可以使用下列帳號密碼登入:

帳號: [account_name]
密碼: [password]

假如您忘記密碼, 您可以索取新的密碼在要登入的版面上. 感謝您的註冊!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = '本站目前開發中. 管理者尚未開啟新的版面.';
$lang['AlreadyActivated'] = '帳號 ID %d 已經被啟動過了.';
$lang['Activate'] = '啟動';
$lang['Activated'] = '您的帳號 %s 現在被啟動.您可以藉由寄給您的信件裡所顯示的密碼來登入.';
$lang['WrongActivationKey'] = '我們現在不允許啟動你的帳號 ID %d. 啟動密碼錯誤. 您確定您沒有要求新的密碼嗎?';
$lang['RegisterIt'] = '你可以點選 \'註冊\' 連結.';
$lang['BoardClosed'] = '論壇暫時關閉';
$lang['SendpwdEmailBody'] = '您好,

這是系統發出的，來自於 [board_name] . [account_name]您剛才索取了新的密碼. 請到下面連結請重新啟動您的帳號:

[activate_link]

或複製貼上您的瀏覽器. 您就可以使用下列帳號密碼登入:

Username: [account_name]
Password: [password]

假如您忘記密碼, 您可以索取新的密碼在要登入的版面上. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '新的密碼';
$lang['SendpwdActivated'] = ' %s 您的新密碼已經寄給 %s. 您現在可以使用新的密碼登入.';
$lang['ForumIndex'] = '首頁';
$lang['MissingFields'] = '下面的欄位請填寫正確不留空白: %s.';
$lang['TermsOfUseContent'] = '在本站的任何言行責任，歸原發表人所有，本站不負相關責任，請自重.

您必須同意
	1.不發表任何辱罵, 不愉快, 猥褻的或不適當的內容
	2.不發表違反當地法律的內容. 
違反上面條款將會導致網站或您的會員資格封鎖或移除, 而您的IP也會被紀錄在每個發表的文章上.您必須同意管理團隊可以在不通知您的情況下刪除或編輯您的文章‧

本站相關資料如有造成任何損害，管理團隊或Usebb不會對這些資料的遺失負相關的責任‧
本版面會使用cookies.  cookie 將會儲存您的會員 ID 和密碼，方便您自動登入‧ 如果您不想要使用cookie，您可以關閉瀏覽器cookie選項.

假如您同意此條款，請點選 "我接受" .';
$lang['TermsOfUse'] = '使用條款';
$lang['RegistrationActivationEmailSubject'] = '帳號啟動';
$lang['NeedToBeLoggedIn'] = '此向操作必須登入. 點選 \'登入\' 到登入介面或 \'註冊\' 一個新的帳號.';
$lang['WrongEmail'] = '抱歉,  %s 您的信箱有誤‧ %s 假如您忘記您的信箱， 請聯絡管理員.';
$lang['Topic'] = '主題';
$lang['Author'] = '作者';
$lang['Replies'] = '回覆';
$lang['Views'] = '觀看';
$lang['Note'] = '注意';
$lang['Hidden'] = '隱藏';
$lang['ACP'] = '管理員控制台';
$lang['SendMessage'] = '發短訊息';
$lang['NoViewableForums'] = '您的權限無法瀏覽任何版面. 請登入. 假如你已經登入, 你可能不在這裡.';
$lang['Rank'] = '等級';
$lang['Location'] = '來自';
$lang['Website'] = '網站';
$lang['Occupation'] = '職業';
$lang['Interests'] = '興趣';
$lang['MSNM'] = 'MSN 及時通';
$lang['YahooM'] = 'Yahoo 及時通';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['BannedIP'] = '您的 IP 位置 %s 已經被此討論區拒絕往來.';
$lang['Avatar'] = '頭像';
$lang['AvatarURL'] = '頭像連結網址';
$lang['BannedUser'] = '封鎖會員';
$lang['BannedUserExplain'] = '您的帳號 %s 已經被封鎖了. 理由是:';
$lang['BannedUsername'] = '這個會員名稱 %s 已經被封鎖了. 請選擇其他會員名稱.';
$lang['BannedEmail'] = '這 e-mail 信箱 %s 已經被封鎖拒絕登陸. 請選擇其他信箱名稱.';
$lang['PostsPerDay'] = '平均每天發表';
$lang['BoardClosedOnlyAdmins'] = '只有管理員可以在論壇關閉時登入.';
$lang['NoPosts'] = '沒有文章';
$lang['NoActivetopics'] = '此版目前沒有任何活動的主題.';
$lang['AuthorDate'] = '發表日期 %s on %s';
$lang['ByAuthor'] = '發表會員: %s';
$lang['OnDate'] = '發表時間: %s';
$lang['Re'] = '回覆:';
$lang['MailForm'] = '發短訊息給 %s';
$lang['SendEmail'] = '發信件給 %s';
$lang['NoMails'] = '這個會員拒絕接受信件';
$lang['UserEmailBody'] = '您好,

這是系統發出的，來自於 [board_name] . 此會員 [username] 發送個人訊息給您. 訊息內容如下.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = '您的信件 %s 已成功寄出!';
$lang['To'] = '收件者';
$lang['From'] = '寄件者';
$lang['Subject'] = '主題';
$lang['Body'] = '內容';
$lang['Send'] = '寄出信件';
$lang['EditProfile'] = '編輯個人檔案';
$lang['EditOptions'] = '編輯功能選項';
$lang['EditPasswd'] = '編輯密碼';
$lang['PanelHome'] = '控制台首頁';
$lang['NewEmailNotActivated'] = '%s 您的個人檔案已成功編輯. 但是因為您更改了信想為址 , 您必須重新啟動. 啟動信件已經寄給 %s 並會告訴您如何操作. 您將可以順利登入.';
$lang['Required'] = '必填選項';
$lang['ViewProfile'] = '觀看個人檔案';
$lang['NewEmailActivationEmailBody'] = '您好,

這是系統發出的，來自於 [board_name] .  [account_name]您剛才變更了您的信箱, 但是還沒有重新啟動. 請點選下面連解重新啟動:

[activate_link]

或複製貼上您的瀏覽器. 您就可以使用下列帳號密碼登入:

Username: [account_name]
Password: [password]

假如您忘記密碼, 您可以索取新的密碼在要登入的版面上.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = '帳號重新啟動';
$lang['Signature'] = '簽名檔';
$lang['SessionInfo'] = 'Session 資訊';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = '您的IP位址 ';
$lang['Seconds'] = '秒';
$lang['Updated'] = '更新於';
$lang['Pages'] = '瀏覽頁面';
$lang['AutoLogin'] = '自動登入';
$lang['Enabled'] = '已開啟';
$lang['Disabled'] = '已關閉';
$lang['Enable'] = '開啟';
$lang['Disable'] = '關閉';
$lang['AutoLoginSet'] = '自動登入已經設置完成.';
$lang['AutoLoginUnset'] = '自動登入已經取消.';
$lang['RegistrationEmailBody'] = '您好,

這是系統發出的，來自於 [board_name]. 您剛才註冊會員名稱為 [account_name]. 您可以登入使用下列帳號和密碼:

Username: [account_name]
Password: [password]

假如您忘記密碼, 您可以索取新的密碼在要登入的版面上. 感謝您的註冊!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = '會員註冊';
$lang['PublicEmail'] = '公開信箱位址';
$lang['PublicLastLogin'] = '公開上次登入時間';
$lang['DateFormat'] = '日期格式';
$lang['DateFormatHelp'] = '這日期格式跟 php函數 %s 一樣.';
$lang['Again'] = '再次輸入';
$lang['NewPassword'] = '新的密碼';
$lang['NewPasswordAgain'] = '新的密碼(請再次輸入)';
$lang['PasswordEdited'] = '您的密碼已經更新成功.';
$lang['DetailedOnlineList'] = '線上詳細名單';
$lang['Detailed'] = '打開上站列表';
$lang['OptionsEdited'] = '你的版面選項已經編輯完成.';
$lang['ProfileEdited'] = '您的個人資料已經編輯成功.';
$lang['Started'] = '開始於';
$lang['Minutes'] = '分鐘';
$lang['Hours'] = '小時';
$lang['Days'] = '天';
$lang['Weeks'] = '周';
$lang['TotalTime'] = '此次線上時間';
$lang['NoTopics'] = '本版面沒有任何主題!';
$lang['NotPermitted'] = '您沒有權力執行此動作. 如果有問題,請聯絡管理員 .';
$lang['Language'] = '語言';
$lang['Template'] = '風格';
$lang['NoSuchMember'] = '此會員 %s 不存在.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = '此向操作失效，因為無法讀取或設置你的瀏覽器cookies.';
$lang['LogOutConfirm'] = '您確定要登出嗎? 你的自動登入cookie將會被刪除!';
$lang['Cancel'] = '取消';
$lang['Timezone'] = '時區';
$lang['DST'] = '日光節約時間';
$lang['Sticky'] = '置頂';
$lang['PostNewTopic'] = '發表新文章';
$lang['ForumIsLocked'] = '版面已被鎖住';
$lang['NoSuchTopic'] = '此主題 %s 不存在.';
$lang['PostReply'] = '發表回覆';
$lang['TopicIsLocked'] = '主題已經被鎖住了';
$lang['Post'] = '發表';
$lang['Edit'] = '編輯';
$lang['Delete'] = '刪除';
$lang['Quote'] = '引用';
$lang['Wrote'] = '%s 編輯';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = '您想要回覆的主題已經被鎖住了. 只有特定會員才可以回覆.';
$lang['Content'] = '文章內容';
$lang['Options'] = '選項';
$lang['EnableBBCode'] = '可以使用 BBCode.';
$lang['EnableSmilies'] = '可以使用 smilies.';
$lang['EnableSig'] = '可以顯示簽名檔.';
$lang['EnableHTML'] = '可以使用 HTML.';
$lang['LockTopicAfterPost'] = '發表後鎖住此主題.';
$lang['Guest'] = '訪客';
$lang['BackToPrevious'] = '回到上一頁';
$lang['NoSuchPost'] = '此回覆 %s 不存在.';
$lang['UserPostedImage'] = 'User posted image';
$lang['ForumIsLockedExplain'] = '此版面已鎖住. 只有特定會員可以發表.';
$lang['MakeTopicSticky'] = '將此主題置頂.';
$lang['QuickReply'] = '快速回覆';
$lang['ReturnToTopicAfterPosting'] = '發表後回到發表主題';
$lang['ModeratorList'] = '版主: %s.';
$lang['Nobody'] = '目前沒有';
$lang['DeleteTopic'] = '刪除 主題';
$lang['MoveTopic'] = '移動 主題';
$lang['LockTopic'] = '鎖住 主題';
$lang['UnlockTopic'] = '解開主題 ';
$lang['MakeSticky'] = '置頂';
$lang['ConfirmDeleteTopic'] = '您確定要刪除文章 %s 在 %s這個版面上嗎? 此向操作是無法復原的!';
$lang['MakeNormalTopic'] = '恢復為一般性質文章';
$lang['OldForum'] = '舊版面';
$lang['NewForum'] = '新版面';
$lang['IAccept'] = '我接受';
$lang['IDontAccept'] = '不接受';
$lang['OpenLinksNewWindow'] = '於新的視窗開啟連結';
$lang['HideAllAvatars'] = '隱藏所有頭像';
$lang['HideUserinfo'] = '隱藏使用者資訊';
$lang['HideAllSignatures'] = '隱藏所有的簽名檔';
$lang['HideFromOnlineList'] = '隱藏於線上名單';
$lang['PageLinks'] = '頁數: %s';
$lang['Preview'] = '預覽';
$lang['DeletePost'] = '刪除';
$lang['ConfirmDeletePost'] = '您確定要刪除這篇主題 %s? 這是無法逆向操作的!';
$lang['EditPost'] = '編輯';
$lang['PostEditInfo'] = '最後編輯於 %s on %s.';
$lang['PasswdInfo'] = '密碼不可以包含空白鍵和引號. 至少需要 %d 字元.';
$lang['SubscribeTopic'] = '訂閱';
$lang['UnsubscribeTopic'] = '取消訂閱';
$lang['NewReplyEmailBody'] = '您好,

這是系統發出的，來自於  [board_name] . 會員 ([poster_name]) 回覆您訂閱的文章 ("[topic_title]"). 如果您想要檢視，他請點選連結: [topic_link].

如果您不想要訂閱此主題請點選連結 (需登入操作): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '最後回覆 "%s"';
$lang['SubscribedTopic'] = '您已經訂閱過此主題.';
$lang['UnsubscribedTopic'] = '您現在取消訂閱此主題.';
$lang['SubscribeToThisTopic'] = '訂閱主題.';
$lang['OK'] = '送出';
$lang['Subscriptions'] = '訂閱主題';
$lang['NoSubscribedTopics'] = '您沒有訂閱任何主題.';
$lang['LatestUpdate'] = '最後更新';
$lang['Unknown'] = '未知';
$lang['PostingTopic'] = '發表主題 %s';
$lang['PostingReply'] = '發表回覆 %s';
$lang['MovingTopic'] = '移動主題 %s';
$lang['DeletingTopic'] = '刪除主題 %s';
$lang['EditingPost'] = '編輯主題 %s';
$lang['DeletingPost'] = '刪除主題 %s';
$lang['DebugMode'] = '除錯模式';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = '系統負載';
$lang['TemplateSections'] = '風格選擇';
$lang['SQLQueries'] = 'SQL 查詢';
$lang['RealName'] = '真實姓名';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = '管理員';
$lang['Moderators'] = '版主';
$lang['SortBy'] = '排序: %s';
$lang['TopicReview'] = '主題預覽';
$lang['ViewMorePosts'] = '瀏覽更多主題';
$lang['DisplayedName'] = '顯示名稱';
$lang['UsernameInfo'] = '帳號僅限於 英文字母, 空白, _ 和-.';
$lang['Code'] = '程式碼';
$lang['Img'] = '圖片';
$lang['URL'] = '連結';
$lang['Color'] = '顏色';
$lang['Size'] = '大小';
$lang['ViewingForum'] = '版面: %s';
$lang['ViewingTopic'] = '主題: %s';
$lang['FloodIntervalWarning'] = '管理員設定您連續發表必須間隔 %d 秒.請耐心等候.';
$lang['AutoSubscribe'] = '自動訂閱';
$lang['OnPostingNewTopics'] = '發表中的主題';
$lang['OnPostingNewReplies'] = '發表中的回覆';
$lang['UnsubscribeSelected'] = '選擇取消訂閱';
$lang['SelectedTopicsUnsubscribed'] = '您已經將您所選擇的取消訂閱了.';
$lang['Birthday'] = '生日';
$lang['Age'] = '年齡';
$lang['Month'] = '月';
$lang['Day'] = '日';
$lang['Year'] = '年';
$lang['PoweredBy'] = '%s 該網站製作團隊為 %s';
$lang['GeneralStats'] = '一般統計';
$lang['Members'] = '會員';
$lang['TopicsPerDay'] = '每天平均主題數';
$lang['MembersPerDay'] = '每天平均會員數';
$lang['BoardStarted'] = '討論區開始於';
$lang['BoardAge'] = '討論區的年齡';
$lang['NewestMember'] = '最新會員';
$lang['MostActiveTopics'] = '最熱門的主題';
$lang['MostViewedTopics'] = '最多人瀏覽的主題';
$lang['PostsPerMember'] = '平均每位會員回覆數';
$lang['PostsPerForum'] = '平均每個版面回覆數';
$lang['Categories'] = '分區';
$lang['Forums'] = '版面';
$lang['TopicsPerMember'] = '平均每位會員主題數';
$lang['TopicsPerForum'] = '平均每個版面主題數';
$lang['MostActiveMembers'] = '最活耀的會員';
$lang['MostActiveForums'] = '最熱門的版面';
$lang['DisplayedNameTaken'] = '很抱歉, %s 已經有人使用該帳號或顯示名稱.';
$lang['SearchKeywords'] = '搜尋關鍵字';
$lang['SearchMode'] = '搜尋模式';
$lang['SearchAuthor'] = '搜尋作者';
$lang['SearchForums'] = '搜尋版面';
$lang['AllForums'] = '所有版面';
$lang['AllKeywords'] = '所有關鍵字';
$lang['OneOrMoreKeywords'] = '一個或是多個關鍵字';
$lang['NoSearchResults'] = '很抱歉, 沒有任何符合您想要的結果.';
$lang['SearchMembersPosts'] = '搜尋該會員主題';
$lang['CurrentPage'] = '目前頁面';
$lang['MemberGuestOnline'] = '最近 %d 分鐘內, %d 位會員 (%d 位隱藏會員) 和 %d 位訪客瀏覽該討論區.';
$lang['MembersGuestOnline'] = '最近 %d 分鐘內, %d 位會員  (%d 位隱藏會員)和 %d 位訪客瀏覽該討論區.';
$lang['MemberGuestsOnline'] = '最近 %d 分鐘內, %d 位會員  (%d 位隱藏會員) 和 %d 位訪客瀏覽該討論區.';
$lang['MembersGuestsOnline'] = '最近 %d 分鐘內, %d 位會員  (%d 位隱藏會員) 和 %d 位訪客瀏覽該討論區.';
$lang['WhosOnline'] = '目前線上情形';
$lang['Done'] = '已完成';
$lang['KeywordsExplain'] = '任何關鍵字至少要有 %d 個字元並用空白鍵分開.';
$lang['BCCMyself'] = '發送時順便寄送副本到我的信箱.';
$lang['Save'] = '儲存';
$lang['Add'] = '新增';
$lang['MarkAllAsRead'] = '標記所有的為已讀取';
$lang['MarkAllAsReadDone'] = '所有版面和主題現在標記已讀取.';
$lang['StringTooShort'] = '%s 字數太少, 至少需要 %d 字元.';
$lang['StringTooLong'] = '%s 字數太長, 僅允許 %d 字元以內.';
$lang['Upload'] = '上傳';
$lang['RegistrationsDisabled'] = '暫停註冊';
$lang['PostFormShortcut'] = '請選 Alt+S (Cmd+S 於頻果電腦) 快速送出.';
$lang['EditThisMember'] = '編輯該會員';
$lang['EmailTaken'] = '該電子信箱 %s 已被使用. 請選擇另外的電子信箱.';
$lang['RegisteredNotActivatedByAdmin'] = '您的帳號已經有人使用. 在您登入前,管理員必須審核啟動您的帳號.請耐心等候.';
$lang['AdminActivationEmailBody'] = '您好,

這是系統發出的，來自於 [board_name]. 您剛才註冊會員名稱為 [account_name]. 您可以登入使用下列帳號和密碼:

Username: [account_name]
Password: [password]

假如您忘記密碼, 您可以索取新的密碼在要登入的版面上. 感謝您的註冊!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = '等待審核啟動帳號';
$lang['NewEmailNotActivatedByAdmin'] = '您的個人檔案編輯成功. 因為您變更帳號 %s 信箱,管理員需要重新啟動帳號. 您將會自動登出.';
$lang['NewEmailAdminActivationEmailBody'] = '您好,

這是系統發出的，來自於 [board_name]. 您剛才改變了帳號 [account_name]的電子信箱, 但是尚未審核啟動. 管理員將會審核啟動您的帳號. 請耐心等候.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = '等候審核啟動帳號';
$lang['AdminActivatedAccountEmailBody'] = '您好,

這是系統發出的，來自於 [board_name]. 該網站管理審核啟動您的帳號 [account_name]. 您現在可以登入了.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = '帳號已啟動';

?>
