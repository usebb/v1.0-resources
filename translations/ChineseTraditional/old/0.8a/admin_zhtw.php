<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.53 2006/02/08 16:59:34 pc_freak Exp $
	
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

$lang['AdminLogin'] = '管理控制台登入';
$lang['AdminPasswordExplain'] = '基於安全的理由，請再一次的輸入密碼登入管理介面。';

$lang['RunningBadACPModule'] = 'UseBB 無法執行該模組，因為相關模組的檔案遺失了(no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = '一般設定';
$lang['Item-index'] = '控制台首頁';
$lang['Item-version'] = '確認版本';
$lang['Item-config'] = '基本設定';
$lang['Category-forums'] = '版面管理';
$lang['Item-categories'] = '管理分區';
$lang['Item-forums'] = '管理版面';
$lang['Category-various'] = '額外功能';
$lang['Item-iplookup'] = '查詢IP位址';
$lang['Item-sqltoolbox'] = 'SQL 工具箱';
$lang['Item-modules'] = '控制台模組';
$lang['Category-members'] = '會員管理';
$lang['Item-members'] = '編輯會員';
$lang['Item-delete_members'] = '刪除會員帳號';
$lang['Item-register_members'] = '新增會員帳號';
$lang['Item-activate_members'] = '審核會員帳號';
$lang['Item-prune_forums'] = '刪除版面';

$lang['IndexWelcome'] = '歡迎來到UseBB的管理員控制台。從這裡您可以控制、設定、更改版面或會員...等相關資訊。';
$lang['IndexSystemInfo'] = '系統資訊';
$lang['IndexUseBBVersion'] = 'UseBB 版本';
$lang['IndexPHPVersion'] = 'PHP 版本';
$lang['IndexSQLServer'] = 'SQL 伺服器驅動程式';
$lang['IndexHTTPServer'] = 'HTTP 伺服器';
$lang['IndexOS'] = '作業系統';
$lang['IndexLinks'] = '相關連結';
$lang['IndexUnactiveMembers'] = '尚未審核的會員';
$lang['IndexNoUnactiveMembers'] = '目前沒有等待管理員審核的會員.';
$lang['IndexOneUnactiveMember'] = '目前有 1 位會員等待審核.';
$lang['IndexMoreUnactiveMembers'] = '目前有 %d 位會員等待審核.';

$lang['VersionFailed'] = '此程式的版本過舊 (%s 無效版本)。基於安全理由，請更新為 %s 版本。';
$lang['VersionLatestVersionTitle'] = '這是目前最新的版本';
$lang['VersionLatestVersion'] = '此程式為 UseBB %s 目前最新的穩定版本。';
$lang['VersionNeedUpdateTitle'] = '新版本已釋出!';
$lang['VersionNeedUpdate'] = '目前版本 %s 需要更新到 %s ! 請瀏覽 %s 並下載最新版本。';
$lang['VersionBewareDevVersionsTitle'] = '開發測試版';
$lang['VersionBewareDevVersions'] = '該程式已執行 %s 測試版而 %s 是最新且穩定的版本. 如果您擔心系統不穩定請使用穩定版本.';

$lang['ConfigInfo'] = '您可以設定 UseBB 討論區相關選項，請小心更動有關資料庫的設定。 (*) 星號欄位為必填欄位。';
$lang['ConfigSet'] = '設定已經更新，您將可以看到下載新頁面的情形。';
$lang['ConfigMissingFields'] = '部份欄位遺失或錯誤 (例如： 某些欄位僅輸入數字).請確認下列欄位:';
$lang['ConfigBoard-type'] = '資料庫類型';
$lang['ConfigBoard-server'] = '伺服器位址';
$lang['ConfigBoard-username'] = '資料庫帳號';
$lang['ConfigBoard-passwd'] = '資料庫密碼';
$lang['ConfigBoard-dbname'] = '資料庫名稱';
$lang['ConfigBoard-prefix'] = '資料表前置字元';
$lang['ConfigBoardSection-general'] = '一般版面';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = '顯示頁面設定';
$lang['ConfigBoardSection-date_time'] = '日期時間設定';
$lang['ConfigBoardSection-database'] = '資料庫設定';
$lang['ConfigBoardSection-advanced'] = '進階設定';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = '附加特色';
$lang['ConfigBoardSection-user_rights'] = '會員權限';
$lang['ConfigBoardSection-layout'] = '外觀設定';
$lang['ConfigBoard-admin_email'] = '管理員信箱';
$lang['ConfigBoard-board_descr'] = '版面描述';
$lang['ConfigBoard-board_keywords'] = '關鍵字設定 (請用逗點分開)';
$lang['ConfigBoard-board_name'] = '討論區名稱';
$lang['ConfigBoard-date_format'] = '日期格式';
$lang['ConfigBoard-language'] = '預設語言';
$lang['ConfigBoard-session_name'] = 'Session 名稱';
$lang['ConfigBoard-template'] = '預設風格';
$lang['ConfigBoard-active_topics_count'] = '啟動主題計算';
$lang['ConfigBoard-avatars_force_width'] = '頭像寬度設定(像素px)';
$lang['ConfigBoard-avatars_force_height'] = '頭像長度設定 (px)';
$lang['ConfigBoard-debug'] = '除錯模式';
$lang['ConfigBoard-email_view_level'] = '可觀看E-mail等級 ';
$lang['ConfigBoard-flood_interval'] = '連續發表間隔時間 (秒)';
$lang['ConfigBoard-members_per_page'] = '每頁顯示會員數';
$lang['ConfigBoard-online_min_updated'] = '最後幾分鐘在線上會員';
$lang['ConfigBoard-output_compression'] = '壓縮輸出';
$lang['ConfigBoard-passwd_min_length'] = '密碼的最小長度';
$lang['ConfigBoard-posts_per_page'] = '每頁顯示發表數';
$lang['ConfigBoard-rss_items_count'] = 'RSS 項目計算';
$lang['ConfigBoard-search_limit_results'] = '限制搜尋該結果';
$lang['ConfigBoard-search_nonindex_words_min_length'] = '搜尋關鍵字最小字元';
$lang['ConfigBoard-session_max_lifetime'] = 'Session 最久存活時間(秒)';
$lang['ConfigBoard-show_edited_message_timeout'] = '顯示編輯資訊 （當發表後x秒鐘內的修改時顯示）';
$lang['ConfigBoard-topicreview_posts'] = '主題回覆數';
$lang['ConfigBoard-topics_per_page'] = '每頁顯示主題數';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = '檢視詳細的線上情形最低的會員等級';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = '檢視網站統計的最低會員等級';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = '檢視隱藏信箱的最低會員等級';
$lang['ConfigBoard-view_memberlist_min_level'] = '檢視會員名單的最低會員等級';
$lang['ConfigBoard-view_stafflist_min_level'] = '檢視管理團隊的最低會員等級';
$lang['ConfigBoard-view_stats_min_level'] = '檢視統計頁面的最低會員等級';
$lang['ConfigBoard-view_contactadmin_min_level'] = '檢視聯絡管理員的最低會員等級';
$lang['ConfigBoard-allow_multi_sess'] = '允許每個IP有多個 sessions ';
$lang['ConfigBoard-board_closed'] = '關閉論壇';
$lang['ConfigBoard-cookie_secure'] = '安全 cookies (給 HTTPS)';
$lang['ConfigBoard-dst'] = '日光節約時間';
$lang['ConfigBoard-enable_contactadmin'] = '開啟聯絡管理員';
$lang['ConfigBoard-enable_detailed_online_list'] = '開啟詳細的線上名單';
$lang['ConfigBoard-enable_forum_stats_box'] = '開啟版面的統計盒';
$lang['ConfigBoard-enable_memberlist'] = '開啟會員名單';
$lang['ConfigBoard-enable_quickreply'] = '開啟快速回覆';
$lang['ConfigBoard-enable_rss'] = '開啟提供 RSS ';
$lang['ConfigBoard-enable_stafflist'] = '開啟管理團隊名單';
$lang['ConfigBoard-enable_stats'] = '開啟統計頁面';
$lang['ConfigBoard-friendly_urls'] = '開啟友善連結';
$lang['ConfigBoard-friendly_urls-info'] = '需要 Apache 和 mod_rewrite. 取蕭 URL session ID\'s.';
$lang['ConfigBoard-guests_can_access_board'] = '訪客可以進入論壇';
$lang['ConfigBoard-guests_can_view_profiles'] = '訪客可以瀏覽會員資料';
$lang['ConfigBoard-hide_avatars'] = '關閉顯示頭像';
$lang['ConfigBoard-hide_signatures'] = '關閉顯示簽名檔';
$lang['ConfigBoard-hide_userinfo'] = '關閉顯示會員資訊';
$lang['ConfigBoard-rel_nofollow'] = '開啟 Google\'s nofollow 給 BBCode 連結';
$lang['ConfigBoard-return_to_topic_after_posting'] = '發表後會到主題';
$lang['ConfigBoard-sig_allow_bbcode'] = '允許BBCode於簽名檔中  ';
$lang['ConfigBoard-sig_allow_smilies'] = '允許微笑圖標於簽名檔中';
$lang['ConfigBoard-sig_max_length'] = '簽名檔最大長度';
$lang['ConfigBoard-single_forum_mode'] = '單一版面模式 (when applicable)';
$lang['ConfigBoard-target_blank'] = 'BBCode 網址開啟於新的視窗';
$lang['ConfigBoard-activation_mode'] = '啟動審核模式';
$lang['ConfigBoard-activation_mode0'] = '不需要啟動';
$lang['ConfigBoard-activation_mode1'] = 'E-mail 啟動審核';
$lang['ConfigBoard-activation_mode2'] = '管理員啟動審核';
$lang['ConfigBoard-board_closed_reason'] = '論壇關閉原因';
$lang['ConfigBoard-board_url'] = '論壇連結 (自動偵測留空)';
$lang['ConfigBoard-cookie_domain'] = 'Cookie 網域';
$lang['ConfigBoard-cookie_path'] = 'Cookie 路徑';
$lang['ConfigBoard-session_save_path'] = 'Session 儲存路徑';
$lang['ConfigBoard-exclude_forums_active_topics'] = '不考慮版面活躍主題';
$lang['ConfigBoard-exclude_forums_rss'] = '不考慮版面RSS 提供';
$lang['ConfigBoard-exclude_forums_stats'] = '不考慮版面統計頁面';
$lang['ConfigBoard-timezone'] = '時區';
$lang['ConfigBoard-debug0'] = '關閉';
$lang['ConfigBoard-debug1'] = '簡單除錯資訊';
$lang['ConfigBoard-debug2'] = '進階除錯資訊';
$lang['ConfigBoard-email_view_level0'] = '隱藏 e-mail 信箱';
$lang['ConfigBoard-email_view_level1'] = '開啟 e-mail 欄位 ';
$lang['ConfigBoard-email_view_level2'] = '顯示預防垃圾信';
$lang['ConfigBoard-email_view_level3'] = '顯示 raw';
$lang['ConfigBoard-output_compression0'] = '關閉';
$lang['ConfigBoard-output_compression1'] = '壓縮 HTML';
$lang['ConfigBoard-output_compression2'] = '開啟 Gzip';
$lang['ConfigBoard-output_compression3'] = '壓縮 HTML + Gzip';
$lang['ConfigBoard-level0'] = '訪客';
$lang['ConfigBoard-level1'] = '會員';
$lang['ConfigBoard-level2'] = '版主';
$lang['ConfigBoard-level3'] = '管理員';
$lang['ConfigBoard-enable_acp_modules'] = '開啟控制台模組';
$lang['ConfigBoard-disable_registrations'] = '暫停會員註冊';
$lang['ConfigBoard-disable_registrations_reason'] = '暫停註冊理由';
$lang['ConfigBoard-allow_duplicate_emails'] = '允許相同的電子信箱';

$lang['CategoriesInfo'] = '該分區是讓您控制分區-新增/編輯等項目.';
$lang['CategoriesAddNewCat'] = '新增分區';
$lang['CategoriesAdjustSortIDs'] = '調整排列順序ID\'s';
$lang['CategoriesSortAutomatically'] = '自動排列分區';
$lang['CategoriesNoCatsExist'] = '目前沒有任何分區.';
$lang['CategoriesCatName'] = '分區名稱';
$lang['CategoriesSortID'] = '排列ID';
$lang['CategoriesMissingFields'] = '部份必須填寫欄位資料遺失. 請重新填寫.';
$lang['CategoriesSortChangesApplied'] = '您已經變更排列順序.';
$lang['CategoriesConfirmCatDelete'] = '刪除分區確認動作';
$lang['CategoriesConfirmCatDeleteContent'] = '您確定要刪除該分區 %s? 此項操作不可回複!';
$lang['CategoriesMoveContents'] = '移動分區內的主題到 %s';
$lang['CategoriesDeleteContents'] = '刪除主題';
$lang['CategoriesEditingCat'] = '編輯中的分區 %s';

$lang['ForumsInfo'] = '該分區是讓您控制版面-新增/編輯等項目.';
$lang['ForumsAddNewForum'] = '新增版面';
$lang['ForumsAdjustSortIDs'] = '調整排列順序 ID\'s';
$lang['ForumsSortAutomatically'] = '自動排列版面';
$lang['ForumsNoForumsExist'] = '目前沒有任何版面.';
$lang['ForumsForumName'] = '版面名稱';
$lang['ForumsCatName'] = '上層分區';
$lang['ForumsDescription'] = '版面描述';
$lang['ForumsStatus'] = '狀態';
$lang['ForumsStatusOpen'] = '開啟';
$lang['ForumsAutoLock'] = '自動鎖住主題當有 x 個回覆數';
$lang['ForumsIncreasePostCount'] = '增加會員發表數';
$lang['ForumsModerators'] = '版主';
$lang['ForumsModeratorsExplain'] = '會員 (不是顯示名稱), 採用逗號間隔. 不用區分打小寫.';
$lang['ForumsModeratorsUnknown'] = '未知會員(s): %s.';
$lang['ForumsHideModsList'] = '隱藏版主名單';
$lang['ForumsSortID'] = 'Sort ID';
$lang['ForumsMissingFields'] = '部份必須填寫欄位資料遺失. 請重新填寫.';
$lang['ForumsSortChangesApplied'] = '您已經成功變更排列順序.';
$lang['ForumsConfirmForumDelete'] = '刪除版面確認動作';
$lang['ForumsConfirmForumDeleteContent'] = '您確定要刪除該版面 %s? 此項操作不可回複!';
$lang['ForumsMoveContents'] = '移動該版面主題到 %s';
$lang['ForumsMoveModerators'] = '當移動內容時,版主將一起變更.';
$lang['ForumsDeleteContents'] = '刪除內容';
$lang['ForumsEditingForum'] = '編輯版面 %s';
$lang['ForumsGeneral'] = '一般設定';
$lang['ForumsAuth'] = '審核認證設定';
$lang['ForumsAuthNote'] = '權限設定將不會有繼承功能!';
$lang['Forums-level0'] = '訪客';
$lang['Forums-level1'] = '會員';
$lang['Forums-level2'] = '版主';
$lang['Forums-level3'] = '管理員';
$lang['Forums-auth0'] = '瀏覽版面';
$lang['Forums-auth1'] = '閱讀主題';
$lang['Forums-auth2'] = '發表新主題';
$lang['Forums-auth3'] = '回覆該主題';
$lang['Forums-auth4'] = '編輯他人回覆';
$lang['Forums-auth5'] = '搬移主題';
$lang['Forums-auth6'] = '刪除主題和回覆';
$lang['Forums-auth7'] = '鎖住主題';
$lang['Forums-auth8'] = '置頂主題';
$lang['Forums-auth9'] = '允許 HTML 編碼發表 (該程序具有危險性)';

$lang['IPLookupSearchHostname'] = '搜尋主機名稱';
$lang['IPLookupSearchUsernames'] = '搜尋帳號(s)';
$lang['IPLookupResult'] = ' IP 位址所對應的主機名稱 %s （ %s）.';
$lang['IPLookupNotFound'] = ' %s 無對應的主機名稱.';
$lang['IPLookupUsernamesSingular'] = '該會員 %s 已發表 %s 個訊息.';
$lang['IPLookupUsernamesPlural'] = '該 %d 會員 %s 已發表 %s 訊息.';
$lang['IPLookupUsernamesNotFound'] = '沒有找到符合 %s 的會員.';

$lang['SQLToolboxWarningTitle'] = '重要警告!';
$lang['SQLToolboxWarningContent'] = '請小心使用 raw 查詢工具. 執行 ALTER, DELETE, TRUNCATE 或是其他類型的SQL語法! 注意不當操作將會損壞您的論壇結構.';
$lang['SQLToolboxExecuteQuery'] = ' 執行SQL 語法';
$lang['SQLToolboxExecuteQueryInfo'] = '輸入 SQL 語法. 通常結果將會顯示於第二個文字盒.';
$lang['SQLToolboxExecute'] = '執行';
$lang['SQLToolboxExecutedSuccessfully'] = 'SQL 語法執行成功.';
$lang['SQLToolboxMaintenance'] = '維護';
$lang['SQLToolboxMaintenanceInfo'] = '利用UseBB最佳化您的資料表 (或是修復)  . 通常建議使用於大型論壇之中.';
$lang['SQLToolboxRepairTables'] = '修復資料表';
$lang['SQLToolboxOptimizeTables'] = '最佳化資料表';
$lang['SQLToolboxMaintenanceNote'] = '注意: 該項操作將不會恢復任何已遺失的資料.';

$lang['ModulesInfo'] = 'ACP 模組可以執行 您個人的或是第三方外掛的管理程式. 模組將可以在 UseBB 網站上找到: %s.';
$lang['ModulesLongName'] = '較長名稱';
$lang['ModulesShortName'] = '簡稱';
$lang['ModulesCategory'] = '分區';
$lang['ModulesFilename'] = '檔案名昌';
$lang['ModulesDeleteNotPermitted'] = '尚未允許';
$lang['ModulesDisabled'] = 'ACP 模組在版面基本設定中被禁止使用.';
$lang['ModulesNoneAvailable'] = '目前沒有任何使用中模組.';
$lang['ModulesUpload'] = '上傳模組';
$lang['ModulesUploadInfo'] = '輸入已上傳的UseBB ACP module檔名.';
$lang['ModulesUploadDuplicateModule'] = '該模組檔名 %s 已經存在. 請先移除.';
$lang['ModulesUploadNoValidModule'] = '該檔案 %s 目前不是 UseBB 認證模組.';
$lang['ModulesUploadFailed'] = '無法安裝該模組 %s. 複製失敗.';
$lang['ModulesUploadDisabled'] = '該模組目錄權限不可寫入. 上傳功能將會關閉. 如果要開啟, 請將資料夾 %s 變更權限為777 (請chmod 777).';
$lang['ModulesConfirmModuleDelete'] = '確認刪除模組';
$lang['ModulesConfirmModuleDeleteInfo'] = '您確定要刪除該模組 %s (%s)?';

$lang['MembersSearchMember'] = '搜尋會員';
$lang['MembersSearchMemberInfo'] = '輸入(部份名稱) 會員或顯示名稱以便於編輯.';
$lang['MembersSearchMemberExplain'] = '帳號或是顯示名稱';
$lang['MembersSearchMemberNotFound'] = '沒有找到類似 %s 的會員名稱或是顯示名稱.';
$lang['MembersSearchMemberList'] = '相關的會員如下';
$lang['MembersEditingMember'] = '編輯會員 %s';
$lang['MembersEditingMemberInfo'] = '更新會員資訊並送出該表格. (*) 星號欄位為必填欄位.';
$lang['MembersEditingMemberUsernameExists'] = '該會員名稱 %s 已存在於會員名稱或顯示名稱中.';
$lang['MembersEditingMemberDisplayedNameExists'] = '該顯示名稱 %s 已存在於會員名稱或顯示名稱中.';
$lang['MembersEditingMemberBanned'] = '已封鎖';
$lang['MembersEditingMemberBannedReason'] = '封鎖理由';
$lang['MembersEditingMemberCantChangeOwnLevel'] = '您無法變更自己的等級.';
$lang['MembersEditingMemberCantBanSelf'] = '您無法封鎖您自己.';
$lang['MembersEditingComplete'] = '該會員 %s 的個人資料已編輯成功.';

$lang['DeleteMembersSearchMember'] = '搜尋會員';
$lang['DeleteMembersSearchMemberInfo'] = '輸入(部份名稱) 會員或顯示名稱以便於刪除.';
$lang['DeleteMembersSearchMemberExplain'] = '會員名稱或顯示名稱';
$lang['DeleteMembersSearchMemberNotFound'] = '沒有找到類似 %s 的會員名稱或是顯示名稱.';
$lang['DeleteMembersSearchMemberList'] = '相關的會員如下';
$lang['DeleteMembersConfirmMemberDelete'] = '確認刪除會員';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '您確定要刪除該會員 %s? 該動作無法恢復!';
$lang['DeleteMembersComplete'] = '刪除會員 %s 已完成.';

$lang['RegisterMembersExplain'] = '您可以新增會員帳號. 僅需要填寫下列資訊即可.';
$lang['RegisterMembersComplete'] = '新增會員 %s 已完成. 該會員可以立即登入.';

$lang['ActivateMembersExplain'] = '這是目前尚未審核啟動名單. 您可以審核啟動帳號.  (*) 星號欄位代表該會員之前審核啟動過.';
$lang['ActivateMembersNoMembers'] = '沒有會員於名單之中.';
$lang['ActivateMembersListAdmin'] = '管理員審核啟動';
$lang['ActivateMembersListEmail'] = 'Email 審核啟動';
$lang['ActivateMembersListAll'] = '全部';

$lang['PruneForumsStart'] = '開始刪除整理';
$lang['PruneForumsExplain'] = '版面刪除整理, 您可以刪除或是移動舊的主題已保持版面清潔.';
$lang['PruneForumsForums'] = '版面整理';
$lang['PruneForumsAction'] = '動作';
$lang['PruneForumsActionMove'] = '移動主題';
$lang['PruneForumsActionDelete'] = '刪除主題';
$lang['PruneForumsMoveTo'] = '移動主題到';
$lang['PruneForumsTopicAge'] = '主題年紀';
$lang['PruneForumsTopicAgeField'] = '最後回覆於 %s 天以前.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '該版面 &quot;移動到&quot; 無法被整理.';
$lang['PruneForumsConfirm'] = '確認';
$lang['PruneForumsConfirmText'] = '我瞭解該動作無法恢復.';
$lang['PruneForumsNotConfirmed'] = '您必須確認該動作.';
$lang['PruneForumsDone'] = '整理完畢. %d 主題已經被整理刪除.';
$lang['PruneForumsExcludeStickies'] = '執行置頂主題';

?>
