<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_Simple-Chinese.php,v 1.85 2006/07/13 20:56:30 pc_freak Exp $
	
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
 /***************************************************************************
 *  Chinese (Simplified) for UseBB 1.0.7[UseBB简体中文版]
 *                              -------------------
 *     By:sluke
 *     Mail:topscn@gmail.com
 *     URI:http://www.hicode.org
 *     Last Modify: 7.23 2007
 *
 ***************************************************************************/
//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = '管理登陆';
$lang['AdminPasswordExplain'] = '出于安全考虑，请再一次的输入密码登陆管理界面。';

$lang['RunningBadACPModule'] = 'UseBB 无法执行该模块，因为相关模块的档案遗失了(no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = '一般设定';
$lang['Category-forums'] = '版面管理';
$lang['Category-various'] = '其他功能';
$lang['Category-members'] = '用户管理';
$lang['Category-pruning'] = '清空整理';
$lang['Category-security'] = '安全设定';
$lang['Item-index'] = '控制面板首页';
$lang['Item-version'] = '确认版本';
$lang['Item-config'] = '基本设定';
$lang['Item-categories'] = '管理分区';
$lang['Item-forums'] = '管理版面';
$lang['Item-iplookup'] = '查询IP地址';
$lang['Item-sqltoolbox'] = 'SQL 工具箱';
$lang['Item-modules'] = '控制台模块';
$lang['Item-members'] = '编辑用户';
$lang['Item-delete_members'] = '删除用户帐号';
$lang['Item-register_members'] = '新增用户帐号';
$lang['Item-activate_members'] = '审核用户帐号';
$lang['Item-prune_forums'] = '删除版面';
$lang['Item-prune_members'] = '删除用户';
$lang['Item-dnsbl'] = '基本DNS锁定';
$lang['Item-badwords'] = '敏感文字过滤';
$lang['Item-mass_email'] = '群发 Email';
$lang['Item-bans'] = '锁定管理';

$lang['IndexWelcome'] = '欢迎来到UseBB的管理员控制台。从这里您可以控制、设定、更改版面或用户...等相关信息。';
$lang['IndexSystemInfo'] = '系统信息';
$lang['IndexUseBBVersion'] = 'UseBB 版本';
$lang['IndexPHPVersion'] = 'PHP 版本';
$lang['IndexSQLServer'] = 'SQL 服务器信息';
$lang['IndexHTTPServer'] = 'HTTP 服务器';
$lang['IndexOS'] = '索引系统';
$lang['IndexServerLoad'] = '服务器载入值';
$lang['IndexLinks'] = '相关链接';
$lang['IndexUnactiveMembers'] = '尚未审核的用户';
$lang['IndexNoUnactiveMembers'] = '目前没有等待管理员审核的用户.';
$lang['IndexOneUnactiveMember'] = '目前有 1 位用户等待审核.';
$lang['IndexMoreUnactiveMembers'] = '目前有 %d 位用户等待审核.';
$lang['IndexWarning'] = '警告!';
$lang['IndexUnwritableConfig'] = '无法于 PHP中写入 %s . 不建议使用. 请利用FTP变更档案权限为 (0777) . 详情请联络主机商.';

$lang['VersionFailed'] = '此程序的版本过旧 (%s 无效版本)。基于安全理由，请更新为 %s 版本。';
$lang['VersionLatestVersionTitle'] = '这是目前最新的版本';
$lang['VersionLatestVersion'] = '此程序为 UseBB %s 目前最新的稳定版本。';
$lang['VersionNeedUpdateTitle'] = '新版本已释出!';
$lang['VersionNeedUpdate'] = '目前版本 %s 需要更新到 %s ! 请浏览 %s 并下载最新版本。';
$lang['VersionBewareDevVersionsTitle'] = '开发测试版';
$lang['VersionBewareDevVersions'] = '该程序已执行 %s 测试版而 %s 是最新且稳定的版本. 如果您担心系统不稳定请使用稳定版本.';

$lang['ConfigInfo'] = '您可以设定 UseBB 讨论区相关选项，请小心更动有关数据库的设定。 (*) 星号栏位为必填栏位。';
$lang['ConfigSet'] = '设定已经更新，请刷新并清空cookie。';
$lang['ConfigMissingFields'] = '部分栏位遗失或错误 (例如： 某些栏位仅输入数字).请确认下列栏位:';
$lang['ConfigBoard-type'] = '数据库类型';
$lang['ConfigBoard-server'] = '服务器地址';
$lang['ConfigBoard-username'] = '数据库帐号';
$lang['ConfigBoard-passwd'] = '数据库密码';
$lang['ConfigBoard-dbname'] = '数据库名称';
$lang['ConfigBoard-prefix'] = '数据表前置字元';
$lang['ConfigBoardSection-general'] = '一般版面';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = '自动监测请保留空白.';
$lang['ConfigBoardSection-sessions'] = '会话';
$lang['ConfigBoardSection-page_counts'] = '显示页面设定';
$lang['ConfigBoardSection-date_time'] = '日期时间设定';
$lang['ConfigBoardSection-date_time-info'] = '强制游客和新会员使用.';
$lang['ConfigBoardSection-database'] = '数据库设定';
$lang['ConfigBoardSection-database-info'] = '请您确定该变更立即有效.';
$lang['ConfigBoardSection-advanced'] = '高级设定';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = '附加特色';
$lang['ConfigBoardSection-user_rights'] = '用户权限';
$lang['ConfigBoardSection-min_levels'] = '最低接受等级';
$lang['ConfigBoardSection-min_levels-info'] = '每各项目的最低接受等级.';
$lang['ConfigBoardSection-layout'] = '外观设定';
$lang['ConfigBoardSection-security'] = '安全设定';
$lang['ConfigBoard-admin_email'] = '管理员邮箱';
$lang['ConfigBoard-board_descr'] = '版面描述';
$lang['ConfigBoard-board_keywords'] = '关键字设定 (请用逗点分开)';
$lang['ConfigBoard-board_keywords-info'] = '(请用逗点分开)';
$lang['ConfigBoard-board_name'] = '讨论区名称';
$lang['ConfigBoard-date_format'] = '日期格式';
$lang['ConfigBoard-date_format-info'] = '使用 PHP\'s date().';
$lang['ConfigBoard-language'] = '预设语言';
$lang['ConfigBoard-language-info'] = '只适用于游客和新用户.';
$lang['ConfigBoard-session_name'] = 'Session 名称';
$lang['ConfigBoard-session_name-info'] = '仅限于英文字母, 不接受空白键. 必须至少包含一个字母.';
$lang['ConfigBoard-template'] = '默认风格';
$lang['ConfigBoard-template-info'] = '只适用于游客和新用户.';
$lang['ConfigBoard-active_topics_count'] = '启动主题计算';
$lang['ConfigBoard-avatars_force_height'] = '头像高度设定 (px)';
$lang['ConfigBoard-avatars_force_height-info'] = 'Zero for unlimited.';
$lang['ConfigBoard-avatars_force_width'] = '头像宽度设定(像素px)';
$lang['ConfigBoard-avatars_force_width-info'] = '保留空白或是设为0即关闭此功能.';
$lang['ConfigBoard-debug'] = '除错模式';
$lang['ConfigBoard-email_view_level'] = '可观看E-mail等级 ';
$lang['ConfigBoard-flood_interval'] = '连续发表间隔时间 (秒)';
$lang['ConfigBoard-members_per_page'] = '每页显示用户数';
$lang['ConfigBoard-online_min_updated'] = '最后几分鐘在线上用户';
$lang['ConfigBoard-output_compression'] = '压缩输出';
$lang['ConfigBoard-passwd_min_length'] = '密码的最小长度';
$lang['ConfigBoard-posts_per_page'] = '每页显示发表数';
$lang['ConfigBoard-rss_items_count'] = 'RSS 条目计算';
$lang['ConfigBoard-search_limit_results'] = '限制搜寻该结果';
$lang['ConfigBoard-search_nonindex_words_min_length'] = '搜寻关键字最小字元';
$lang['ConfigBoard-session_max_lifetime'] = 'Session 最久存活时间(秒)';
$lang['ConfigBoard-show_edited_message_timeout'] = '显示编辑数据 ';
$lang['ConfigBoard-show_edited_message_timeout-info'] = '（当发表后x秒鐘内的修改时显示）, 通常建议隐藏.';
$lang['ConfigBoard-topicreview_posts'] = '主题回复数';
$lang['ConfigBoard-topics_per_page'] = '每页显示主题数';
$lang['ConfigBoard-view_active_topics_min_level'] = '启动主题';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = '在线详细清单';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = '统计盒';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = '浏览隐藏电子邮箱的最低权限';
$lang['ConfigBoard-view_memberlist_min_level'] = '用户名单';
$lang['ConfigBoard-view_search_min_level'] = '搜寻引擎';
$lang['ConfigBoard-view_stafflist_min_level'] = '工作团队';
$lang['ConfigBoard-view_stats_min_level'] = '统计页面';
$lang['ConfigBoard-view_contactadmin_min_level'] = '联络管理员链接';
$lang['ConfigBoard-allow_multi_sess'] = '允许每个 IP 有多个 会话';
$lang['ConfigBoard-board_closed'] = '关闭讨论区';
$lang['ConfigBoard-board_closed-info'] = '管理员一样可以登入.';
$lang['ConfigBoard-cookie_secure'] = '安全的 cookies';
$lang['ConfigBoard-cookie_secure-info'] = '加密的 cookies (仅限于 HTTPS )';
$lang['ConfigBoard-cookie_httponly'] = '开启仅限于HTTP cookies';
$lang['ConfigBoard-cookie_httponly-info'] = '新增一个httpOnly 图标给 cookies, 确认他们可以更安全抵抗 XSS.';
$lang['ConfigBoard-dst'] = '公开保存时间';
$lang['ConfigBoard-enable_contactadmin'] = '开启联络管理员';
$lang['ConfigBoard-enable_detailed_online_list'] = '开启详细的线上名单';
$lang['ConfigBoard-enable_forum_stats_box'] = '开启版面的统计盒';
$lang['ConfigBoard-enable_memberlist'] = '开启用户名单';
$lang['ConfigBoard-enable_quickreply'] = '开启快速回复';
$lang['ConfigBoard-enable_rss'] = '开启提供 RSS ';
$lang['ConfigBoard-enable_stafflist'] = '开启管理团队名单';
$lang['ConfigBoard-enable_stats'] = '开启统计页面';
$lang['ConfigBoard-friendly_urls'] = '开启友情链接';
$lang['ConfigBoard-friendly_urls-info'] = '需要 Apache 和 mod_rewrite. 取消 URL session ID\'s.';
$lang['ConfigBoard-guests_can_access_board'] = '访客可以进入论坛';
$lang['ConfigBoard-guests_can_see_contact_info'] = '访客可以浏览联络管理员的个人资料';
$lang['ConfigBoard-guests_can_view_profiles'] = '访客可以浏览用户资料';
$lang['ConfigBoard-hide_avatars'] = '关闭显示头像';
$lang['ConfigBoard-hide_signatures'] = '关闭显示签名档';
$lang['ConfigBoard-hide_userinfo'] = '关闭显示用户资料';
$lang['ConfigBoard-rel_nofollow'] = '开启 Google\'s 忽略 BBCode 链接';
$lang['ConfigBoard-rel_nofollow-info'] = '这将会设定 Google 忽略所有的 all BBCode 链接.';
$lang['ConfigBoard-return_to_topic_after_posting'] = '发表后会到主题';
$lang['ConfigBoard-sig_allow_bbcode'] = '允许BBCode于签名档中  ';
$lang['ConfigBoard-sig_allow_smilies'] = '允许表情图标于签名档中';
$lang['ConfigBoard-sig_max_length'] = '签名档最大长度';
$lang['ConfigBoard-single_forum_mode'] = '单一版面模式 (when applicable)';
$lang['ConfigBoard-single_forum_mode-info'] = '显示可浏览的讨论区于首页.';
$lang['ConfigBoard-target_blank'] = 'BBCode 网址开启于新的视窗';
$lang['ConfigBoard-activation_mode'] = '启动审核模式';
$lang['ConfigBoard-activation_mode0'] = '不需要启动';
$lang['ConfigBoard-activation_mode1'] = 'E-mail 启动审核';
$lang['ConfigBoard-activation_mode2'] = '管理员启动审核';
$lang['ConfigBoard-board_closed_reason'] = '论坛关闭原因';
$lang['ConfigBoard-board_url'] = '论坛链接 ';
$lang['ConfigBoard-board_url-info'] = '完整链接必须包含短斜线/ ; (自动侦测留空).';
$lang['ConfigBoard-cookie_domain'] = 'Cookie 域名';
$lang['ConfigBoard-cookie_path'] = 'Cookie 路径';
$lang['ConfigBoard-session_save_path'] = 'Session 储存路径';
$lang['ConfigBoard-session_save_path-info'] = '自订 session 资料储存路径; 仅限于绝对路径目录名称.';
$lang['ConfigBoard-exclude_forums_active_topics'] = '不考虑版面活跃主题';
$lang['ConfigBoard-exclude_forums_rss'] = '不考虑版面RSS 提供';
$lang['ConfigBoard-exclude_forums_stats'] = '不考虑版面统计页面';
$lang['ConfigBoard-timezone'] = '时区';
$lang['ConfigBoard-debug0'] = '关闭';
$lang['ConfigBoard-debug1'] = '简单除错资料';
$lang['ConfigBoard-debug2'] = '高级除错资料';
$lang['ConfigBoard-email_view_level0'] = '隐藏 e-mail';
$lang['ConfigBoard-email_view_level1'] = '开启 e-mail 栏 ';
$lang['ConfigBoard-email_view_level2'] = '显示预防垃圾信';
$lang['ConfigBoard-email_view_level3'] = '显示 raw';
$lang['ConfigBoard-output_compression0'] = '关闭';
$lang['ConfigBoard-output_compression1'] = '压缩 HTML';
$lang['ConfigBoard-output_compression2'] = '开启 Gzip';
$lang['ConfigBoard-output_compression3'] = '压缩 HTML + Gzip';
$lang['ConfigBoard-level0'] = '游客';
$lang['ConfigBoard-level1'] = '用户';
$lang['ConfigBoard-level2'] = '版主';
$lang['ConfigBoard-level3'] = '管理员';
$lang['ConfigBoard-enable_acp_modules'] = '开启控制台模块';
$lang['ConfigBoard-disable_registrations'] = '暂停用户注册';
$lang['ConfigBoard-disable_registrations-info'] = '用户可以注册经由管理控制台认证.';
$lang['ConfigBoard-disable_registrations_reason'] = '暂停注册理由';
$lang['ConfigBoard-allow_duplicate_emails'] = '允许相同的电子邮箱';
$lang['ConfigBoard-enable_badwords_filter'] = '开启敏感文字过滤';
$lang['ConfigBoard-enable_ip_bans'] = '开启 IP 地址锁定功能';
$lang['ConfigBoard-show_raw_entities_in_code'] = '显示列的实体于 [code] 标签.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = '显示列的实体编码替代 HTML 编码.';
$lang['ConfigBoard-username_min_length'] = '用户名称最小长度';
$lang['ConfigBoard-username_max_length'] = '用户名称最大长度';
$lang['ConfigBoard-show_never_activated_members'] = '显示未激活的用户';
$lang['ConfigBoard-show_never_activated_members-info'] = '显示这些于统计盒于用户名单中.';
$lang['ConfigBoard-enable_registration_log'] = '开启注册纪录';
$lang['ConfigBoard-enable_registration_log-info'] = '写入注册纪录于文字档案.';
$lang['ConfigBoard-registration_log_file'] = '注册纪录档案';
$lang['ConfigBoard-registration_log_file-info'] = '相对应讨论区目录, 或是绝对路径.';
$lang['ConfigBoard-enable_email_dns_check'] = '开启电子邮箱DNS检查';
$lang['ConfigBoard-enable_email_dns_check-info'] = '认证将会寻找 MX 纪录. 这将不会工作于全部认可的网址.';
$lang['ConfigBoard-edit_post_timeout'] = '开启发表暂停时间';
$lang['ConfigBoard-edit_post_timeout-info'] = '该用户可以编辑他的文章于 x 内.';
$lang['ConfigBoard-disable_xhtml_header'] = '禁用 XHTML 页面.';
$lang['ConfigBoard-disable_xhtml_header-info'] = '一个 XHTML Content-Type 只在结构良好时才有效，在非XHTML浏览器中无效。';
$lang['ConfigBoard-email_reply-to_header'] = '启动回复标题';
$lang['ConfigBoard-email_reply-to_header-info'] = '对用户的电子邮件地址使用“回复”替代“发自”（在某些主机上必须）.';
$lang['ConfigBoard-mass_email_msg_recipients'] = '群发邮件收件人计数';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = '邮件将被多次发送，直到所有收件人收到。';
$lang['ConfigBoard-sendmail_sender_parameter'] = '使用sendmail -f 参数.';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = '在一些主机上，这可能破坏邮件功能。';
$lang['ConfigBoard-antispam_question_mode'] = '反垃圾评论模式';
$lang['ConfigBoard-antispam_question_mode-info'] = '在游客注册、发布或回复主题时需要回答一个问题。';
$lang['ConfigBoard-antispam_question_mode0'] = '不可用';
$lang['ConfigBoard-antispam_question_mode1'] = '随机算术题';
$lang['ConfigBoard-antispam_question_mode2'] = '随机选择自定义问题';
$lang['ConfigBoard-antispam_question_questions'] = '自定义反垃圾评论问题';
$lang['ConfigBoard-antispam_question_questions-info'] = '提问形式是 &quot;问题|答案&quot; (无引号), 每行一个. 区分大小写.';
$lang['CategoriesInfo'] = '该分区是让您控制分区-新增/编辑等项目.';
$lang['CategoriesAddNewCat'] = '新增分区';
$lang['CategoriesAdjustSortIDs'] = '调整排列顺序ID\'s';
$lang['CategoriesSortAutomatically'] = '自动排列分区';
$lang['CategoriesNoCatsExist'] = '目前没有任何分区.';
$lang['CategoriesCatName'] = '分区名称';
$lang['CategoriesSortID'] = '排列ID';
$lang['CategoriesMissingFields'] = '部分必须填写栏位资料遗失. 请重新填写.';
$lang['CategoriesSortChangesApplied'] = '您已经变更排列顺序.';
$lang['CategoriesConfirmCatDelete'] = '删除分区确认动作';
$lang['CategoriesConfirmCatDeleteContent'] = '您确定要删除该分区 %s? 此项操作不可回复!';
$lang['CategoriesMoveContents'] = '移动分区内的主题到 %s';
$lang['CategoriesDeleteContents'] = '删除主题';
$lang['CategoriesEditingCat'] = '编辑中的分区 %s';
$lang['ForumsInfo'] = '该分区是让您控制版面-新增/编辑等项目.';
$lang['ForumsAddNewForum'] = '新增版面';
$lang['ForumsAdjustSortIDs'] = '调整排列顺序 ID\'s';
$lang['ForumsSortAutomatically'] = '自动排列版面';
$lang['ForumsNoForumsExist'] = '目前没有任何版面.';
$lang['ForumsForumName'] = '版面名称';
$lang['ForumsDescriptionExplain'] = '允许使用HTML标签。如果要使用特定字符，请注意使用转义字符。(例如： &amp;amp; 替換成 &amp;).';
$lang['ForumsCatName'] = '上一级分区';
$lang['ForumsDescription'] = '版面描述';
$lang['ForumsStatus'] = '状态';
$lang['ForumsStatusOpen'] = '开启';
$lang['ForumsAutoLock'] = '自动锁定';
$lang['ForumsAutoLockXReplies'] = '锁住主题当有 x 个回复数.';
$lang['ForumsIncreasePostCount'] = '增加用户发表数';
$lang['ForumsModerators'] = '版主';
$lang['ForumsModeratorsExplain'] = '用户 (不是显示名称), 采用逗号间隔. 不用区分打小写.';
$lang['ForumsModeratorsUnknown'] = '未知用户(s): %s.';
$lang['ForumsHideModsList'] = '隐藏版主名单';
$lang['ForumsSortID'] = 'Sort ID';
$lang['ForumsMissingFields'] = '部分必须填写栏位资料遗失. 请重新填写.';
$lang['ForumsSortChangesApplied'] = '您已经成功变更排列顺序.';
$lang['ForumsConfirmForumDelete'] = '确认删除版面';
$lang['ForumsConfirmForumDeleteContent'] = '您确定要删除该版面 %s? 没有后悔药哦!';
$lang['ForumsMoveContents'] = '移动该版面主题到 %s';
$lang['ForumsMoveModerators'] = '当移动内容时,版主将一起变更.';
$lang['ForumsDeleteContents'] = '删除内容';
$lang['ForumsEditingForum'] = '编辑版面 %s';
$lang['ForumsGeneral'] = '一般设定';
$lang['ForumsAuth'] = '审核认证设定';
$lang['ForumsAuthNote'] = '权限设定将不会有继承功能!';
$lang['Forums-level0'] = '游客';
$lang['Forums-level1'] = '用户';
$lang['Forums-level2'] = '版主';
$lang['Forums-level3'] = '管理员';
$lang['Forums-auth0'] = '浏览版面';
$lang['Forums-auth1'] = '阅读主题';
$lang['Forums-auth2'] = '发表新主题';
$lang['Forums-auth3'] = '回复该主题';
$lang['Forums-auth4'] = '编辑他人回复';
$lang['Forums-auth5'] = '移除主题';
$lang['Forums-auth6'] = '删除主题和回复';
$lang['Forums-auth7'] = '锁定主题';
$lang['Forums-auth8'] = '置顶主题';
$lang['Forums-auth9'] = '允许 HTML 标签发表 (该程序具有危险性)';

$lang['IPLookupSearchHostname'] = '搜寻主机名称';
$lang['IPLookupSearchUsernames'] = '搜寻帐号(s)';
$lang['IPLookupHostname'] = '主机名称';
$lang['IPLookupHostnameNotFound'] = '没有相对的主机名称.';
$lang['IPLookupUsernames'] = '用户名称';
$lang['IPLookupUsernamesNotFound'] = '没有相对的用户名称.';

$lang['SQLToolboxWarningTitle'] = '重要警告!';
$lang['SQLToolboxWarningContent'] = '请小心使用 raw 查询工具. 执行 ALTER, DELETE, TRUNCATE 或是其他类型的SQL语法! 注意不当操作将会损坏您的论坛结构.';
$lang['SQLToolboxExecuteQuery'] = ' 执行SQL 语法';
$lang['SQLToolboxExecuteQueryInfo'] = '输入 SQL 语法. 通常结果将会显示于第二个文字盒.';
$lang['SQLToolboxExecute'] = '执行';
$lang['SQLToolboxExecutedSuccessfully'] = 'SQL 语法执行成功.';
$lang['SQLToolboxMaintenance'] = '维护';
$lang['SQLToolboxMaintenanceInfo'] = '利用UseBB最佳化您的资料表 (或是修復)  . 通常建议使用于大型论坛之中.';
$lang['SQLToolboxRepairTables'] = '修复资料表';
$lang['SQLToolboxOptimizeTables'] = '优化资料表';
$lang['SQLToolboxMaintenanceNote'] = '注意: 该项操作将不会恢复任何已遗失的资料.';

$lang['ModulesInfo'] = 'ACP 模块可以执行 您个人的或是第三方插件的管理程序. 模块将可以在 UseBB 网站上找到: %s.';
$lang['ModulesLongName'] = '较长名称';
$lang['ModulesShortName'] = '简称';
$lang['ModulesCategory'] = '分区';
$lang['ModulesFilename'] = '档案名昌';
$lang['ModulesDeleteNotPermitted'] = '尚未允许';
$lang['ModulesDisabled'] = 'ACP 模块在版面基本设定中被禁止使用.';
$lang['ModulesNoneAvailable'] = '目前没有任何使用中模块.';
$lang['ModulesUpload'] = '上传模块';
$lang['ModulesUploadInfo'] = '输入已上传的UseBB ACP module档名.';
$lang['ModulesUploadDuplicateModule'] = '该模块档名 %s 已经存在. 请先移除.';
$lang['ModulesUploadNoValidModule'] = '该档案 %s 目前不是 UseBB 认证模块.';
$lang['ModulesUploadFailed'] = '无法安装该模块 %s. 复製失败.';
$lang['ModulesUploadDisabled'] = '该模块目录权限不可写入. 上传功能将会关闭. 如果要开启, 请将资料夹 %s 变更权限为777 (请chmod 777).';
$lang['ModulesConfirmModuleDelete'] = '确认删除模块';
$lang['ModulesConfirmModuleDeleteInfo'] = '您确定要删除该模块 %s (%s)?';

$lang['MembersSearchMember'] = '搜寻用户';
$lang['MembersSearchMemberInfo'] = '输入(部分名称) 用户或显示名称以便于编辑.';
$lang['MembersSearchMemberExplain'] = '帐号或是显示名称';
$lang['MembersSearchMemberNotFound'] = '没有找到类似 %s 的用户名称或是显示名称.';
$lang['MembersSearchMemberList'] = '相关的用户如下';
$lang['MembersEditingMember'] = '编辑用户 %s';
$lang['MembersEditingMemberInfo'] = '更新用户资料并送出该表格. (*) 星号栏位为必填栏位.';
$lang['MembersEditingMemberUsernameExists'] = '该用户名称 %s 已存在于用户名称或显示名称中.';
$lang['MembersEditingMemberDisplayedNameExists'] = '该显示名称 %s 已存在于用户名称或显示名称中.';
$lang['MembersEditingMemberBanned'] = '已锁定';
$lang['MembersEditingMemberBannedReason'] = '锁定理由';
$lang['MembersEditingMemberCantChangeOwnLevel'] = '您无法变更自己的等级.';
$lang['MembersEditingMemberCantBanSelf'] = '您无法锁定您自己.';
$lang['MembersEditingComplete'] = '用户 %s 的个人资料已编辑成功.';

$lang['DeleteMembersSearchMember'] = '搜寻用户';
$lang['DeleteMembersSearchMemberInfo'] = '输入(部分名称) 用户或显示名称以便于删除.';
$lang['DeleteMembersSearchMemberExplain'] = '用户名称或显示名称';
$lang['DeleteMembersSearchMemberNotFound'] = '没有找到类似 %s 的用户名称或是显示名称.';
$lang['DeleteMembersSearchMemberList'] = '相关的用户如下';
$lang['DeleteMembersConfirmMemberDelete'] = '确认删除用户';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '您确定要删除该用户 %s? 该动作无法恢复!';
$lang['DeleteMembersComplete'] = '删除用户 %s 已完成.';

$lang['RegisterMembersExplain'] = '您可以新增用户帐号. 仅需要填写下列资料即可.';
$lang['RegisterMembersComplete'] = '新增用户 %s 已完成. 该用户可以立即登入.';

$lang['ActivateMembersExplain'] = '这是目前尚未审核激活名单. 您可以审核激活帐号.  (*) 星号栏位代表该用户之前审核激活过.';
$lang['ActivateMembersNoMembers'] = '没有用户于名单之中.';
$lang['ActivateMembersListAdmin'] = '管理员审核机制启动';
$lang['ActivateMembersListEmail'] = 'Email 审核机制启动';
$lang['ActivateMembersListAll'] = '全部';

$lang['PruneForumsStart'] = '开始删除整理';
$lang['PruneForumsExplain'] = '版面删除整理, 您可以删除或是移动旧的主题已保持版面清洁.';
$lang['PruneForumsForums'] = '版面整理';
$lang['PruneForumsAction'] = '动作';
$lang['PruneForumsActionLock'] = '锁定';
$lang['PruneForumsActionMove'] = '移动';
$lang['PruneForumsActionDelete'] = '删除';
$lang['PruneForumsMoveTo'] = '移动主题到';
$lang['PruneForumsTopicAge'] = '主题年纪';
$lang['PruneForumsTopicAgeField'] = '最后回复于 %s 天以前.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '该版面 &quot;移动到&quot; 无法被整理.';
$lang['PruneForumsConfirm'] = '确认';
$lang['PruneForumsConfirmText'] = '我了解该动作无法恢复.';
$lang['PruneForumsNotConfirmed'] = '您必须确认该动作.';
$lang['PruneForumsDone'] = '整理完毕. %d 主题已经被整理删除.';
$lang['PruneForumsExcludeStickies'] = '执行置顶主题';

$lang['PruneMembersExplain'] = '清空很久没来或是未激活的用户帐号.';
$lang['PruneMembersTypeNeverActivated'] = '从未激活的用户';
$lang['PruneMembersRegisteredDaysAgo'] = '注册至今 %s 天.';
$lang['PruneMembersTypeNeverPosted'] = '用户从来没有发表';
$lang['PruneMembersTypeInactive'] = '尚未激活用户';
$lang['PruneMembersLastLoggedIn'] = '上次登入时间距今 %s 天.';
$lang['PruneMembersExclude'] = '开除';
$lang['PruneMembersConfirmText'] = '我了解该项动作无法还塬.';
$lang['PruneMembersStart'] = '开始清空';
$lang['PruneMembersNotConfirmed'] = '您必须先确认这个动作.';
$lang['PruneMembersDone'] = '清空已完成. %d 用户被删除.';

$lang['DNSBLIPBansDisabled'] = 'IP 地址锁定功能已关闭';
$lang['DNSBLIPBansDisabledInfo'] = '基本DNS锁定功能开启, IP 地址锁定将会被开启.';
$lang['DNSBLGeneralInfo'] = '开启过滤机器人不停发垃圾文章或是广告. 使用 UseBB\'s 保护系统, 很多机器人将会被侦测自动过滤.访客的 IP 地址将会对照查询黑名单的资料.';
$lang['DNSBLEnableOpenDNSBLBan'] = '基本DNS锁定功能开启';
$lang['DNSBLServers'] = 'DNS 黑名单 (DNSBL) 服务器';
$lang['DNSBLServersInfo'] = '一个 DNSBL 服务器于一行. 请注意，如果使用过多的黑名单将会造成您的新的 session 速度减慢.';
$lang['DNSBLMinPositiveHits'] = '至少 %s 点击才可以锁定该 IP 地址.';
$lang['DNSBLRecheckMinutes'] = '重新检查允许的 IP 地址于 %s 分鐘内 (0 将会关闭该功能).';
$lang['DNSBLSettingsSaved'] = 'DNSBL 过滤设定已储存.';
$lang['DNSBLWhitelist'] = '白名单';
$lang['DNSBLWhitelistInfo'] = '一个 IP 或一个主机于每一行 (可以使用* 和 ? 作为通配符 ).';

$lang['BadwordsInfo'] = '不良文字将会被过滤器过滤或是替代, 部分吻合即执行(使用 * ).';
$lang['BadwordsDisabled'] = '不良文字过滤关闭';
$lang['BadwordsDisabledInfo'] = '不良文字过滤关闭于讨论区的基本设定.';
$lang['BadwordsNoBadwordsExist'] = '没有任何过滤器设定于该讨论区.';
$lang['BadwordsAddBadwordWord'] = '文字';
$lang['BadwordsAddBadwordReplacement'] = '替代';

$lang['MassEmailInfo'] = '发送大量电子信件给您所有用户或群组.';
$lang['MassEmailRecipients'] = '收信人';
$lang['MassEmailRecipients-admins'] = '管理员';
$lang['MassEmailRecipients-mods'] = '版主';
$lang['MassEmailRecipients-members'] = '一般用户';
$lang['MassEmailSubject'] = '主题';
$lang['MassEmailBody'] = '内容';
$lang['MassEmailTemplate'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 这是管理员发送的大量电子邮件，内容如下.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = '该大量信件将会送给 %d 用户.';
$lang['MassEmailOptions'] = '其他选项';
$lang['MassEmailPublicEmailsOnly'] = '仅寄给公开的电子邮箱';
$lang['MassEmailExcludeBanned'] = '排除已锁定用户';

$lang['BansInfo'] = '这里您可以锁定您想要的情况. 部分吻合即执行(使用 * ). 个别的帐号可以被锁定于用户区块中.';
$lang['Bans-username'] = '用户名称';
$lang['Bans-email'] = '电子邮箱';
$lang['Bans-ip_addr'] = 'IP 地址';
$lang['BansUsername'] = '用户名称';
$lang['BansEmail'] = '电子邮箱';
$lang['BansIp_addr'] = 'IP 地址';
$lang['BansNoBansExist'] = '目前没有任何锁定类型存在于该讨论区.';
$lang['BansIPBansDisabledInfo'] = 'IP 地址锁定功能已经关闭于讨论区设定中.';

?>
