<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.124 2006/07/06 14:36:35 pc_freak Exp $
	
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
 *  Chinese (Simplified) for UseBB 1.0.1[UseBB简体中文汉化]
 *                              -------------------
 *     By:Zhu8
 *     Mail:zhu8@msn.com
 *     URI:http://zhu8.net
 *     Demo:http://bbs.zhu8.net
 *     Last Modify: Sat Aug 12 2006
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
$lang['language_code'] = 'zh_CN';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = '首页';
$lang['YourPanel'] = '控制面板';
$lang['Register'] = '注册';
$lang['FAQ'] = '帮助';
$lang['Search'] = '搜索';
$lang['ActiveTopics'] = '最新主题';
$lang['LogIn'] = '登录';
$lang['LogOut'] = '退出 (%s)';
$lang['MemberList'] = '用户列表';
$lang['StaffList'] = '用户组列表';
$lang['Statistics'] = '状态列表';
$lang['ContactAdmin'] = '联系管理员';
$lang['Forum'] = '论坛';
$lang['Topics'] = '主题';
$lang['Posts'] = '帖子';
$lang['LatestPost'] = '最新帖子';
$lang['RSSFeed'] = '订阅RSS';
$lang['NewPosts'] = '发表新帖';
$lang['NoNewPosts'] = '无新帖';
$lang['LockedNewPosts'] = '锁闭 (有新帖)';
$lang['LockedNoNewPosts'] = '锁闭 (无新帖)';
$lang['Locked'] = '锁闭';
$lang['LastLogin'] = '最后登录';
$lang['VariousInfo'] = '更多信息';
$lang['IndexStats'] = '该论坛有 %d 个帖子、 %d 个主题、和 %d 注册用户';
$lang['NewestMemberExtended'] = '欢迎新用户： %s.';
$lang['Username'] = '用户名';
$lang['CurrentPassword'] = '当前密码';
$lang['UserID'] = '用户 ID';
$lang['NoSuchForum'] = '论坛“ %s ”不存在！';
$lang['WrongPassword'] = '对不起，密码不正确！如果你忘记了密码，可以在登录界面重新设置密码。';
$lang['Reset'] = '重设';
$lang['SendPassword'] = '发送新密码';
$lang['RegisterNewAccount'] = '申请新帐号';
$lang['RememberMe'] = '记住我';
$lang['Yes'] = '是的';
$lang['No'] = '不是';
$lang['NotActivated'] = '你的帐号 %s 还没有激活，请检查你注册时的邮箱并阅读如何激活你的帐号。';
$lang['Error'] = '错误';
$lang['Profile'] = '%s 的个人资料';
$lang['Level'] = '用户组';
$lang['Administrator'] = '管理员';
$lang['Moderator'] = '版主';
$lang['Registered'] = '注册用户';
$lang['Email'] = '邮箱地址';
$lang['ContactInfo'] = '联系信息';
$lang['Password'] = '密码';
$lang['PasswordAgain'] = '再次输入密码';
$lang['EverythingRequired'] = '请填写完整你的注册资料！';
$lang['RegisteredNotActivated'] = '恭喜你！你的帐号 %s 注册成功！ 一封关于如何激活帐号的邮件已经发送到 %s ，你需要按照邮件要求并激活你的帐号。';
$lang['RegisteredActivated'] = '你的帐号 %s 已激活！现在你可以登录了。';
$lang['Never'] = '从不';
$lang['Member'] = '用户';
$lang['RegistrationActivationEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚注册了帐号： [account_name], 但是还没有激活. 请点击下面的链接以激活你的帐号：

[activate_link]

或者你可以复制该链接到浏览器地址栏. 激活后你就可以使用下面的帐号和密码登录论坛了:

用户名: [account_name]
密码: [password]

如果你忘记了密码, 可以在登录界面重新设置密码。 谢谢你的注册！祝你在 [board_name] 玩的愉快！

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = '这是一个空的论坛，管理员还没有建立任何论坛。';
$lang['AlreadyActivated'] = '帐号 %d 已激活';
$lang['Activate'] = '激活';
$lang['Activated'] = '你的帐号 %s 已经（重新）激活， 正在自动登录……';
$lang['WrongActivationKey'] = '我们无法激活你的帐号 %d. 激活码不正确， 你确定你没有同时重设密码吗？';
$lang['RegisterIt'] = '你可以通过 \'Register\' 链接申请该帐号.';
$lang['BoardClosed'] = '论坛关闭';
$lang['SendpwdEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚申请为帐号 [account_name]重设密码. 你可以使用下面的帐号和密码登录论坛了:

用户名: [account_name]
密码: [password]

如果你忘记了密码, 可以在登录界面重新设置密码。 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '重设新密码';
$lang['SendpwdActivated'] = '帐号 %s 的新密码已经发送到 %s. 你现在可以使用新密码登录了';
$lang['ForumIndex'] = '论坛首页';
$lang['MissingFields'] = '以下区域未填写或填写错误: %s.';
$lang['TermsOfUseContent'] = '我们希望您遵守以下的论坛规定。
请仔细阅读下列条款，您必须接受以下的任何条款才可以注册！

1. 遵守中华人民共和国的各项有关法律法规。

2. 不得在发布任何色情非法，以及危害国家安全的言论。

3. 严禁链接有关政治，色情，宗教，迷信等违法信息。

4. 承担一切因您的行为而直接或间接导致的民事或刑事法律责任。

5. 互相尊重，遵守互联网络道德，严禁互相恶意攻击，漫骂。

6. 管理员及版主有权保留或删除论坛中的任意内容。

7. 本站管理员拥有一切管理权力。

';
$lang['TermsOfUse'] = '论坛规则';
$lang['RegistrationActivationEmailSubject'] = '帐号激活';
$lang['NeedToBeLoggedIn'] = '您没有登录或者您没有权限访问此页面。这可能有如下几个原因:
1、您还没有登录，填写下面的表单登录后再次尝试。 
2、您没有足够的权限访问此页面。您正在尝试编辑其他人的帖子，访问管理功能或是其他一些需要特殊权限的功能吗？ 
3、您的帐号正在等待激活或者是您没有发帖的权限。
4、管理员可能要求您注册后才可查看此页面。';
$lang['WrongEmail'] = '对不起，  %s 与你的帐号 %s的注册邮箱不符。 如果你忘记了你的注册邮箱，请与管理员联系。';
$lang['Topic'] = '主题';
$lang['Author'] = '作者';
$lang['Replies'] = '回复';
$lang['Views'] = '查看';
$lang['Note'] = '注意';
$lang['Hidden'] = '隐藏';
$lang['ACP'] = '管理面板';
$lang['SendMessage'] = '发送消息';
$lang['NoViewableForums'] = '你当前所在的用户组无法查看此论坛， 如果你还没有登录，请登录；如果你已经登录，也许你该到这里来：）';
$lang['Rank'] = '等级';
$lang['Location'] = '来自';
$lang['Website'] = '网站';
$lang['Occupation'] = '职业';
$lang['Interests'] = '兴趣';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = '你的IP地址 %s 已被该论坛屏蔽';
$lang['Avatar'] = '头像';
$lang['AvatarURL'] = '头像地址';
$lang['BannedUser'] = '屏蔽的帐号';
$lang['BannedUserExplain'] = '你的帐号 %s 已被该论坛屏蔽， 原因是：';
$lang['BannedUsername'] = '该用户名 %s 已被该论坛屏蔽，请选择其他用户名。';
$lang['BannedEmail'] = '该邮件地址 %s 已被该论坛屏蔽，请选择其他邮件地址。';
$lang['PostsPerDay'] = '每日帖数';
$lang['BoardClosedOnlyAdmins'] = '当论坛关闭时只有管理员可以登录。';
$lang['NoPosts'] = '没有帖子';
$lang['NoActivetopics'] = '该论坛目前没有任何活跃的主题。';
$lang['AuthorDate'] = '由 %s 发表于 %s';
$lang['ByAuthor'] = '由: %s';
$lang['OnDate'] = '发表于: %s';
$lang['Re'] = '回复：';
$lang['MailForm'] = '给 %s 发送邮件';
$lang['SendEmail'] = '给 %s 发送消息';
$lang['NoMails'] = '该用户拒绝接受任何邮件。';
$lang['UserEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 用户 [username] 通过论坛发送该消息给您，消息内容如下：

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = '你给 %s 的邮件已发送成功！';
$lang['To'] = '收件人';
$lang['From'] = '发件人';
$lang['Subject'] = '主题';
$lang['Body'] = '内容';
$lang['Send'] = '发送';
$lang['EditProfile'] = '编辑个人资料';
$lang['EditOptions'] = '编辑选项';
$lang['EditPasswd'] = '编辑密码';
$lang['PanelHome'] = '控制面板首页';
$lang['NewEmailNotActivated'] = '你的个人资料更新成功，因为你修改了你的帐号 %s 的邮件地址，所以你需要重新激活你的帐号，一封邮件已经发送到： %s 并指导你如何重新激活，现在你将自动登出。';
$lang['Required'] = '必须';
$lang['ViewProfile'] = '查看个人资料';
$lang['NewEmailActivationEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚修改了你的帐号 [account_name] 的邮件地址, 但是还没有激活. 请点击下面的链接以重新激活你的帐号：

[activate_link]

或者你可以复制该链接到浏览器地址栏. 

如果你忘记了密码, 可以在登录界面重新设置密码。

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = '帐号重新激活';
$lang['Signature'] = '签名';
$lang['SessionInfo'] = 'Session 信息';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'IP地址';
$lang['Seconds'] = '秒';
$lang['Updated'] = '更新';
$lang['Pages'] = '页面';
$lang['AutoLogin'] = '自动登录';
$lang['Enabled'] = '已启用';
$lang['Disabled'] = '已禁用';
$lang['Enable'] = '启用';
$lang['Disable'] = '禁用';
$lang['AutoLoginSet'] = '启用自动登录的 cookie 已设置.';
$lang['AutoLoginUnset'] = '禁用自动登录的 cookie 已设置.';
$lang['RegistrationEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚注册了帐号： [account_name], 但是还没有激活. 请点击下面的链接以激活你的帐号：

[activate_link]

或者你可以复制该链接到浏览器地址栏. 激活后你就可以使用下面的帐号和密码登录论坛了:

用户名: [account_name]
密码: [password]

如果你忘记了密码, 可以在登录界面重新设置密码。 谢谢你的注册！祝你在 [board_name] 玩的愉快！

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = '帐号注册';
$lang['PublicEmail'] = '公开邮件地址';
$lang['PublicLastLogin'] = '公开最后登录时间';
$lang['DateFormat'] = '时间格式';
$lang['DateFormatHelp'] = '时间格式的文档参见 %s PHP 的时间格式.';
$lang['Again'] = '再次输入';
$lang['NewPassword'] = '新密码';
$lang['NewPasswordAgain'] = '新密码 (再次输入)';
$lang['PasswordEdited'] = '你的密码更新成功';
$lang['DetailedOnlineList'] = '详细的在线列表';
$lang['Detailed'] = '详细';
$lang['OptionsEdited'] = '你的论坛参数更新成功.';
$lang['ProfileEdited'] = '你的个人资料更新成功.';
$lang['Started'] = '始于';
$lang['Minutes'] = '分钟';
$lang['Hours'] = '小时';
$lang['Days'] = '日期';
$lang['Weeks'] = '星期';
$lang['TotalTime'] = '所有时间';
$lang['NoTopics'] = '该论坛目前没有任何主题，你可以张贴第一个！';
$lang['NotPermitted'] = '你没有适当的权限！有任何疑问请联系管理员。';
$lang['Language'] = '语言';
$lang['Template'] = '模版';
$lang['NoSuchMember'] = '用户 %s 在这个论坛（已经）不存在.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = '该功能无法正常使用因为该论坛无法设置或读取你的浏览器的cookies.';
$lang['LogOutConfirm'] = '你确定你将退出?';
$lang['Cancel'] = '取消';
$lang['Timezone'] = '时区';
$lang['DST'] = '夏时制';
$lang['Sticky'] = '置顶';
$lang['PostNewTopic'] = '发表新帖';
$lang['ForumIsLocked'] = '论坛已锁闭';
$lang['NoSuchTopic'] = '主题 %s 在这个论坛（已经）不存在';
$lang['PostReply'] = '发表回复';
$lang['TopicIsLocked'] = '主题已锁闭';
$lang['Post'] = '内容';
$lang['Edit'] = '编辑';
$lang['Delete'] = '删除';
$lang['Quote'] = '引用';
$lang['Wrote'] = '%s 写道';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = '你要回复的主题已锁闭，只有经授权的用户才能继续回复。';
$lang['Content'] = '内容';
$lang['Options'] = '选项';
$lang['EnableBBCode'] = '启用 BBCode.';
$lang['EnableSmilies'] = '启用表情.';
$lang['EnableSig'] = '启用签名.';
$lang['EnableHTML'] = '启用 HTML.';
$lang['LockTopicAfterPost'] = '发表后锁闭该主题.';
$lang['Guest'] = '访客';
$lang['BackToPrevious'] = '回到上一页';
$lang['NoSuchPost'] = '帖子 %s 在这个论坛（已经）不存在.';
$lang['UserPostedImage'] = '用户发表图片';
$lang['ForumIsLockedExplain'] = '该论坛已锁闭，只有经授权的用户才能发表新主题.';
$lang['MakeTopicSticky'] = '将该主题置顶.';
$lang['QuickReply'] = '快速回复';
$lang['ReturnToTopicAfterPosting'] = '回复后返回该主题';
$lang['ModeratorList'] = '版主: %s.';
$lang['Nobody'] = '没有人';
$lang['DeleteTopic'] = '删除主题';
$lang['MoveTopic'] = '移动主题';
$lang['LockTopic'] = '锁闭主题';
$lang['UnlockTopic'] = '解锁主题';
$lang['MakeSticky'] = '设置置顶';
$lang['ConfirmDeleteTopic'] = '你确定你将主题 %s 从论坛 %s 删除? 这是不可逆的!';
$lang['MakeNormalTopic'] = '设为普通';
$lang['OldForum'] = '旧论坛';
$lang['NewForum'] = '新论坛';
$lang['IAccept'] = '我接受';
$lang['IDontAccept'] = '我不接受';
$lang['OpenLinksNewWindow'] = '在新窗口中打开外部链接';
$lang['HideAllAvatars'] = '隐藏所有头像';
$lang['HideUserinfo'] = '隐藏用户资料';
$lang['HideAllSignatures'] = '隐藏所有签名';
$lang['HideFromOnlineList'] = '不列入在线列表中';
$lang['PageLinks'] = '页数: %s';
$lang['Preview'] = '预览';
$lang['DeletePost'] = '删除帖子';
$lang['ConfirmDeletePost'] = '你确定删除 %s主题中的该帖? 这是不可逆的!';
$lang['EditPost'] = '编辑帖子';
$lang['PostEditInfo'] = '最后编辑： %s 于 %s.';
$lang['PasswdInfo'] = '密码仅能由字母和数字构成并且不能超过 %d 个字数的限制.';
$lang['SubscribeTopic'] = '订阅主题';
$lang['UnsubscribeTopic'] = '取消订阅主题';
$lang['NewReplyEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 用户 ([poster_name]) 在你订阅的主题posted a reply to a topic you are subscribed to ("[topic_title]")发表了新的回复. 要查看该回复，你点击如下链接： [topic_link].

点击如下链接如果你想取消订阅该主题（需要登录）： [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '新回复在 "%s"';
$lang['SubscribedTopic'] = '你已订阅该主题.';
$lang['UnsubscribedTopic'] = '你已取消订阅该主题.';
$lang['SubscribeToThisTopic'] = '订阅该主题.';
$lang['OK'] = '确定';
$lang['Subscriptions'] = '已订阅主题';
$lang['NoSubscribedTopics'] = '你目前未订阅任何主题.';
$lang['LatestUpdate'] = '最后更新';
$lang['Unknown'] = '未知';
$lang['PostingTopic'] = '发表主题在 %s';
$lang['PostingReply'] = '发表回复在 %s';
$lang['MovingTopic'] = '移动主题在 %s';
$lang['DeletingTopic'] = '删除主题在 %s';
$lang['EditingPost'] = '编辑主题在 %s';
$lang['DeletingPost'] = '删除帖子在 %s';
$lang['DebugMode'] = '调试模式';
$lang['ParseTime'] = '解析时间';
$lang['ServerLoad'] = '服务器响应';
$lang['TemplateSections'] = '模版区域';
$lang['SQLQueries'] = 'SQL 查询';
$lang['RealName'] = '真实姓名';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = '管理员';
$lang['Moderators'] = '版主';
$lang['TopicReview'] = '主题回顾';
$lang['ViewMorePosts'] = '查看更多帖子';
$lang['DisplayedName'] = '显示的名称';
$lang['UsernameInfo'] = '用户名仅能包含文字、数字、空格、_ 和 -.';
$lang['Code'] = '代码';
$lang['Img'] = '图片';
$lang['URL'] = '网址';
$lang['Color'] = '颜色';
$lang['Size'] = '字体';
$lang['ViewingForum'] = '论坛: %s';
$lang['ViewingTopic'] = '主题: %s';
$lang['FloodIntervalWarning'] = '管理员设置了发表帖子的时间间隔为 %d 秒. 请等待至少 %d 秒在你再次提交内容之前。';
$lang['AutoSubscribe'] = '自动订阅';
$lang['OnPostingNewTopics'] = '当发表新主题时';
$lang['OnPostingNewReplies'] = '当发表新回复时';
$lang['UnsubscribeSelected'] = '取消订阅选择的主题';
$lang['SelectedTopicsUnsubscribed'] = '你已经取消订阅了选择的主题.';
$lang['Birthday'] = '生日';
$lang['Age'] = '年龄';
$lang['Month'] = '月';
$lang['Day'] = '日';
$lang['Year'] = '年';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Board';
$lang['GeneralStats'] = '总体状态';
$lang['Members'] = '用户数';
$lang['TopicsPerDay'] = '平均每天主题数';
$lang['MembersPerDay'] = '平均每天新用户数';
$lang['BoardStarted'] = '论坛建于';
$lang['BoardAge'] = '论坛运行时间';
$lang['NewestMember'] = '最新用户';
$lang['MostActiveTopics'] = '最多回复主题';
$lang['MostViewedTopics'] = '最多浏览主题';
$lang['PostsPerMember'] = '平均每用户发帖数';
$lang['PostsPerForum'] = '平均每论坛帖子数';
$lang['Categories'] = '论坛分类';
$lang['Forums'] = '论坛数量';
$lang['TopicsPerMember'] = '平均每用户主题数';
$lang['TopicsPerForum'] = '平均每论坛主题数';
$lang['MostActiveMembers'] = '最活跃用户';
$lang['MostActiveForums'] = '最活跃论坛';
$lang['DisplayedNameTaken'] = '对不起, %s 已被其他人使用.';
$lang['SearchKeywords'] = '搜索关键词';
$lang['SearchMode'] = '搜索模式';
$lang['SearchAuthor'] = '搜索作者';
$lang['SearchForums'] = '搜索论坛';
$lang['AllForums'] = '所有论坛';
$lang['NoSearchResults'] = '对不起，没有找到你所搜索的内容.';
$lang['SearchMembersPosts'] = '搜索用户帖子';
$lang['CurrentPage'] = '当前页';
$lang['MemberGuestOnline'] = '在过去 %d 分钟里, %d 用户 (%d 隐身用户) 以及 %d 访客 浏览过该论坛.';
$lang['MembersGuestOnline'] = '在过去 %d 分钟里, %d 用户 (%d 隐身用户) 以及 %d 访客 浏览过该论坛.';
$lang['MemberGuestsOnline'] = '在过去 %d 分钟里, %d 用户 (%d 隐身用户) 以及 %d 访客 浏览过该论坛.';
$lang['MembersGuestsOnline'] = '在过去 %d 分钟里, %d 用户 (%d 隐身用户) 以及 %d 访客 浏览过该论坛.';
$lang['WhosOnline'] = '谁在线';
$lang['Done'] = '完成';
$lang['KeywordsExplain'] = '关键词至少 %d 字节并且用空格分开.';
$lang['BCCMyself'] = '发送一份到我自己的邮箱.';
$lang['Save'] = '保存';
$lang['Add'] = '添加';
$lang['MarkAllAsRead'] = '设置所有为已读';
$lang['MarkAllAsReadDone'] = '所有的论坛和主题都已设置为已读.';
$lang['StringTooShort'] = '%s 太短, 至少需要 %d 个字.';
$lang['StringTooLong'] = '%s 太长, 最多允许 %d 个字.';
$lang['Upload'] = '上传';
$lang['RegistrationsDisabled'] = '注册功能已关闭';
$lang['PostFormShortcut'] = '按 Alt+S (苹果电脑请使用 Ctrl+S) 快速提交.';
$lang['EditThisMember'] = '编辑该用户';
$lang['EmailTaken'] = '该邮件地址 %s 已被使用，请重新使用一个邮件地址.';
$lang['RegisteredNotActivatedByAdmin'] = '你的帐号 %s 已建立，在你登录之前管理员需要激活你的帐号，请耐心等待并注意查收邮件。';
$lang['AdminActivationEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚注册了帐号 [account_name]. 在你登录之前管理员需要激活你的帐号，当管理员激活后，你可以使用下面的帐号和密码登录：

用户名: [account_name]
密码: [password]

如果你忘记了密码, 可以在登录界面重新设置密码。 谢谢你的注册！祝你在 [board_name] 玩的愉快！

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = '帐号等待激活';
$lang['NewEmailNotActivatedByAdmin'] = '你的个人资料已更新成功，因为你更改了帐号 %s 的邮件地址, 论坛管理员需要重新激活该帐号，现在你将自动登出。';
$lang['NewEmailAdminActivationEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件. 你刚刚更新了帐号 [account_name] 的邮件地址. 在你登录之前管理员需要重新激活你的帐号，请耐心等待并注意查收邮件。

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = '帐号等待激活';
$lang['AdminActivatedAccountEmailBody'] = '你好,

这是论坛： [board_name] 自动发送的邮件.管理员已经激活了你的帐号 [account_name]. 现在你可以登录了！

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = '帐号已激活';
$lang['Sort'] = '排序';
$lang['SortBy'] = '排序按照';
$lang['SortBy-displayed_name'] = '用户名';
$lang['SortBy-real_name'] = '真实姓名';
$lang['SortBy-level'] = '用户组';
$lang['SortBy-rank'] = '等级';
$lang['SortBy-regdate'] = '注册时间';
$lang['SortBy-posts'] = '发帖数';
$lang['SortBy-latest_post'] = '最后回复时间';
$lang['SortBy-topic_title'] = '主题标题';
$lang['SortBy-forum'] = '论坛';
$lang['SortBy-author'] = '作者';
$lang['SortBy-replies'] = '回复数';
$lang['SortBy-views'] = '浏览数';
$lang['SortOrder-asc'] = '升序';
$lang['SortOrder-desc'] = '降序';
$lang['NoUsersFound'] = '没有找到用户.';
$lang['SaveConfigManually'] = '因为 config.php 是不可写的, UseBB 不能自动保存你的更改，请保存下面的内容到 config.php 并且重新上传如果必要的话.';
$lang['ShowResultsAs'] = '显示结果为';
$lang['ShowMode-topics'] = '主题';
$lang['ShowMode-posts'] = '帖子';
$lang['Mode-and'] = '所有关键词 (AND)';
$lang['Mode-or'] = '单个关键词 (OR)';
$lang['ExactMatch'] = '精确匹配';
$lang['IncludeGuests'] = '包含访客';
$lang['Top'] = '顶端';
$lang['Bottom'] = '底部';
$lang['Action'] = '动作';

//Add By Zhu8
$lang['Mail'] = '邮件';
$lang['Google'] = 'Google';

?>
