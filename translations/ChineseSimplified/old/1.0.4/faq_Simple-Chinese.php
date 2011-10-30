<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_English.php,v 1.8 2006/02/25 19:32:01 pc_freak Exp $
	
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
 *  Chinese (Simplified) for UseBB 1.0.4[UseBB简体中文版]
 *                              -------------------
 *     By:sluke
 *     Mail:topscn@gmail.com
 *     URI:http://www.sluke.cn
 *     Last Modify: 2.29 2007
 *
 ***************************************************************************/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', '用户须知');
$faq[] = array('我必须要注册吗？', '这取决于管理员如何设置论坛的用户组权限选项，您甚至有可能必须在注册成正式用户后后才能浏览帖子。当然，在通常情况下，您至少应该是正式用户才能发新帖和回复已有帖子。
强烈建议您注册，这样会得到很多以游客身份无法实现的功能。');
$faq[] = array('注册了会有怎样的功能？', '首先，你得到了一个只属于你的用户名和昵称，同时你拥有了属于你自己的个人资料并且如果你愿意你可以加上一些关于你的信息，你还可以将论坛设置成你想如何浏览的样式比如选择某种语言和模版等等，最有趣的是你可以订阅你喜欢的主题。');
$faq[] = array('注册一个帐号我需要做什么？', '首先你要选择一个用户名（昵称），如果你愿意，你同样可以填写你的真实姓名来代替你的昵称。需要注意的是虽然你可以随时更改你显示的名称但是无法更改你的用户名，同时你需要一个可以接受邮件的电子邮箱（因为管理员可能设置称需要激活才能使用）。当然，还有密码:-)（你可以在注册后更改）。');
$faq[] = array('我没有收到激活邮件！', '你也许并不需要激活旧可以登陆，如果不行，试试登录框里的发送新密码。如果还不行，就联系管理员吧！');
$faq[] = array('如果我忘记了帐号信息或者我的电子邮件不能用了怎么办？', '你随时可以用登录框里的发送新密码重新设置密码。如果你的电子邮件地址不能用了或者你忘记了，联系管理员，他/她会帮你找到你注册时的电子邮件地址或者编辑你的帐号并使用另一个可以正常使用的电子邮件地址。.');
$faq[] = array('什么是版主和管理员？', '版主是某个或某几个分论坛的帖子和主题的管理者，同时他/她会帮助他/她所管理的论坛的用户。管理员是所有论坛的管理者，同时他/她可以指定版主以及修改整个论坛的设置。');
$faq[] = array('我如何成为版主或者管理员？', '正常情况下，你不可以。但是可以试试问问管理员如果你有兴趣的话。');
$faq[] = array('你可以更改我的级别吗？', '不可以，只有管理员可以给用户一个定义的级别。');

$faq[] = array('--', '订阅主题');
$faq[] = array('我如何订阅主题？', '在每个主题的底部，你可以找到一个订阅该主题的链接，只有登录了之后你才能订阅主题。');
$faq[] = array('我如何取消订阅主题？', '你可以点击取消订阅的链接或者在你的控制面板中的订阅浏览里取消。');

$faq[] = array('--', '个人资料');
$faq[] = array('我如何更改我的用户名？', '你不可以自行更改你的用户名（登录名），只有管理员允许这么做。但是你可以随时更改你显示的名称。');
$faq[] = array('用户名、显示名称、真实姓名有什么区别？', '你的用户名，就是你用来登录论坛的，是不可变的。你的显示名称（当你注册时就是你的用户名）就是公开显示的名称，你随时可以更改它。注意你登录的时候仍须使用你的用户名，而不是显示名称。你的真实姓名，是可选填项，并且只会显示在你的资料页中。');
$faq[] = array('在语言选择栏里没有找到我的语言！', '问问管理员他/她是否愿意加上一份你的语言的翻译。');
$faq[] = array('为什么我不能选择另一个模版？', '很有可能，该论坛没有其他的模版可供选择：（');

$faq[] = array('--', '主题与帖子');
$faq[] = array('什么是主题和帖子？', '一个主题就是某个论坛中的某些帖子组成的。当你在论坛首页点击某个子论坛时，你可以看到那个论坛中的帖子概览。');
$faq[] = array('什么是置顶主题？', '置顶主题就是一直在某个论坛顶端当你浏览该论坛的帖子概览的时候。一般情况下，普通用户不能设置置顶主题，而版主和管理员可以。');
$faq[] = array('为什么我不能发表新帖子或者回复？', '如果没有发表新主题或者新帖子的链接，你不能在那个论坛发表新主题或者帖子，这可能是那个论坛的设置或者那个主题已经被版主关闭了，如果有疑问，可以联系管理员。');
$faq[] = array('什么是 BBCode 和表情？', 'BBCode 是你可以用来添加某些标签到你的帖子里的代码。试试使用并且预览下效果。表情符号是用来在帖子里表达你的感情的：）');
$faq[] = array('我发表帖子后我的帖子没有增长！', '在某些论坛里，帖子计数也许被停用了。这在试验论坛和一般的聊天论坛里是正常的。');
$faq[] = array('为什么我需要等待一些时间在我发帖之后才能再次发帖？', '防灌水机制是用来防止垃圾留言以及减少服务器负荷的。请等待一些时间再重新发帖。');

$faq[] = array('--', '杂项');
$faq[] = array('我无法接收任何来自该论坛的邮件！', '请确认邮件是否被某些反垃圾邮件的软件阻止了。如果没有，那么你资料里设置的电子邮件地址也许无法在该论坛正常使用。');
$faq[] = array('什么是RSS？', 'RSS是在线共享内容的一种简易方式（也叫聚合内容，Really Simple Syndication）。通常在时效性比较强的内容上使用RSS订阅能更快速获取信息，网站提供RSS输出，有利于让用户获取网站内容的最新更新。网络用户可以在客户端借助于支持RSS的聚合工具软件（例如SharpReader,NewzCrawler、FeedDemon），在不打开网站内容页面的情况下阅读支持RSS输出的网站内容。');
$faq[] = array('我在哪儿放置我的 Google Talk 帐号？', 'Google Talk 是一款使用 Jabber/XMPP 协议的IM工具。你可以将你的Google Talk帐号（包含域名的完整帐号）放在你的个人资料的 Jabber/XMPP 栏里。');

$faq[] = array('--', '关于UseBB');
$faq[] = array('谁制作了这个论坛？什么是 UseBB？', '这个论坛程序，叫做 <em>UseBB</em>, 由 UseBB Team开发. UseBB 是一款开源（Open Source） 软件并使用GPL协议（GPL license）. 你可以从这儿免费下载 UseBB ： <a href="http://www.usebb.net">www.usebb.net</a>. 注意这个网站的管理员也许添加了其他的功能.');
$faq[] = array(' UseBB Team是否负责这个论坛？', '不，这个论坛是由这个网站的管理员（们）维护的。The UseBB Team 不可能对该论坛负任何管理责任。');
$faq[] = array('我对这个论坛有一些建议（意见）。我应该找谁？', '如果你对这款论坛程序本身有建议（意见），而不是该论坛的内容，欢迎 <a href="http://www.usebb.net">告知 the UseBB Team</a>.。如果是任何其他的问题，请与该论坛/网站的管理员联系。如果是关于中文版的问题，请联系<a href="http://usebb.net">Zhu8</a>。');

?>
