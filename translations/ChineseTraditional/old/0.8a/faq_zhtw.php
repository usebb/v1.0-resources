<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_English.php,v 1.7 2006/01/07 14:02:27 pc_freak Exp $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', '帳號問題');
$faq[] = array('為什麼我要註冊呢?', '您不一定要這麼做, 這是由討論版的管理人員所決定的, 您必須註冊後才能在版上發表文章. 對於註冊成功的會員, 系統將會允許您使用一些完整的討論版的功能, 這些功能是未註冊的訪客所無法使用的, 例如: 可自行定義的個人圖像, 私人訊息, 會員之間的電子郵件發送, 使用者群組的認證 ...等等. 建議您註冊成為正式會員, 因為那只需要花您一點點的時間而已.');
$faq[] = array('註冊有甚麼好處呢?', '首先該帳號將專屬於您的. 您可以將個人資訊放置論壇中 甚至您可以選擇您要的個人設定風格跟語言. 還有一項重點是您可以訂閱主題.');
$faq[] = array('註冊時需要甚麼資訊?', '註冊時, 您需要輸入帳號 (登入名稱) . 您也可以輸入真實姓名於於帳號中. 註冊您無法便跟您的帳號, 但您可以變更顯示名稱. 接下來您需要電子信箱 (特別是需要啟動您的帳號時) 並選擇您的密碼(which you can change afterwards).');
$faq[] = array('我沒有收到啟動信件!', '您或許不需要啟動信件. 假如需要的話，請重新索取新的密碼. 如果沒有收到請聯絡管理員.');
$faq[] = array('我忘記密碼或是我的信箱已經失效了，該怎麼辦?', '您可以重新索取密碼. 假如您忘記了電子信箱或是電子信箱失效, 麻煩請聯絡管理員. 他/她或許可以變更或是調整您的信箱資訊.');
$faq[] = array('什麼是版主和管理員?', '版主可以管理文章. 並且可以幫助會員使用論壇. 而管理員是該站的站長, 他可以協助版主或是變更版面的基本設定.');
$faq[] = array('我要如何成為管理員或是版主?', '正常的情況下, 您無法成為管理員或版主, 但是您可以嘗試詢問管理員.');
$faq[] = array('我可以變更我的等級嗎?', '不行，僅有管理員才可以管理會員等級.');

$faq[] = array('--', '訂閱問題');
$faq[] = array('我要如何訂閱主題?', '在每個主題的下面, 您可以選擇訂閱. 此項操作僅限於您登入時.');
$faq[] = array('我要如何取消訂閱主題?', '您可以點選取消訂閱於您瀏覽的主題上.');

$faq[] = array('--', '個人資料');
$faq[] = array('我要如何變更帳號?', '您不能變更帳號 (登入名稱) . 僅有管理原有權限變更帳號. 您可以變更顯示名稱.');
$faq[] = array('帳號，顯示名稱跟真實姓名有甚麼差別?', '帳號是您登入論壇的的名稱,您無法變更它. 但顯示名稱 (預設為跟帳號相同) 為您實際顯示於版面時的名稱.您可以不斷的變更. 您的真實姓名, 他是不是非必要性的顯示於您的個人資訊上.');
$faq[] = array('我的版面語言已經遺失於選項中，請問要怎麼辦!', '可以詢問管理員，他或許會新增該語言於版面中.');
$faq[] = array('為甚麼我不能選其他風格?', '正常的情況下，目前沒有其他風格於該討論區中.');

$faq[] = array('--', '版面和主題形式');
$faq[] = array('什麼主題跟回覆?', '主題是會員發表於特定版面的文章. 您可以點選主題名稱於版面首頁中, 這樣您就可以瀏覽該主題了.');
$faq[] = array('什麼是置頂主題?', '置頂主題將會一直呈現於版面的頂端. 一般會員通常無法置頂主題,但是管理員和版主可以.');
$faq[] = array('為什麼我不能發表新的主題或回覆呢?', '假如您沒有看到發表文章跟回覆的標籤, 代表該版面無法發表主題或回覆主題. 此項設定為管理員或是版主設定.如果有疑問請聯絡管理員.');
$faq[] = array('什麼是 BBCode 和表情圖案?', 'BBCode 標籤是讓您可以加入特定元件於您的發表文章中. 您可以嘗試或是預覽. 微笑圖標示明確表達您的心情於文章中.');
$faq[] = array('發表後為什麼發表數沒有增加？', '在特定版面, 發表數是無法列入計算的. 這通常是測試版面或是聊天版面.');
$faq[] = array('為什麼我需要等一段時間才能發表?', '連續發表將會被禁止（因為將會造成伺服器的負擔）. 請耐心等候後發表.');

$faq[] = array('--', '其他問題');
$faq[] = array('我不想要收到任何有關於該論壇的信件!', '該管理員或許會將此電子信件設定為隱藏或是無效.');
$faq[] = array('什麼是 RSS ?', 'RSS (Really Simple Syndication：真簡單聯合供稿)將會把版面上最新的資訊提供於 news/RSS 閱讀軟體或是某些瀏覽器上.');
$faq[] = array('我可以將 Google Talk 帳號放到哪裡?', 'Google Talk 是一種基於 Jabber/XMPP 通訊協定的即時通. 您可以放置您的帳戶名稱 (請包含網址) 於您的 Jabber/XMPP 個人檔案欄位.');

$faq[] = array('--', 'UseBB 聲明');
$faq[] = array('誰寫了這個討論版? 什麼是 UseBB?', '該討論版程式, 稱為 <em>UseBB</em>, 該程式由 UseBB 團隊製作. UseBB 是開放性原始碼並使用 GPL license. 您可以自由的下載 UseBB 從<a href="http://www.usebb.net">www.usebb.net</a>. 通常管理員可以新增很多外掛在上面.');
$faq[] = array('該網站有UseBB的開發者維護嗎?', '沒有,該版面的維護由站長自行處理.  UseBB 團隊無法做任何的保證.');
$faq[] = array('對於該討論區有疑問和抱怨，請問我該聯絡誰?', '假如您對於討論區程式由疑問或是抱怨, 並且不是針對論壇發表內容, 歡迎您來到 <a href="http://www.usebb.net">告知 UseBB 團隊</a>.至於其他的問題，請聯絡該站站長.');

?>
