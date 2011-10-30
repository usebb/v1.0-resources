<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header$
	EN-Revision: 1.10
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', 'ユーザーアカウント');
$faq[] = array('私は登録をする必要がありますか?', '登録はこのフォーラムで投稿するには要求されるかもしれません。これは、掲示板管理者がゲスト投稿を可能にしたかどうか(フォーラム単位)に依存します。一般的 に、登録は多くの追加の機能を提供するため、いい考えです。');
$faq[] = array('登録する利点は何か?', '第一に、あなただけが利用できるニックネームを個人アカウントを取得できます。さらに好みで、編集オプション機能で希望のフォーラムを調整することができ、自分自身に関連する追加情報を取得することができる個人プロフィールを得ます。それはさらに言語とテンプレートの設定の選択も含んでいます。非常に面白い機能はトピックを予約することが可能なことです。');
$faq[] = array('私は、アカウントを登録するために何を必要としますか?', '登録するために、アカウントの鍵になるニックネーム(ユーザー名)を選択する必要があります。好みで、ニックネームの代わりに本名を使用してもいいでしょう。ユーザー名は同名を防ぎながら表示された名前はいつでも変更することができますが、登録後に自分自身でユーザー名を変更できないことに注意してください。さらに、有効なアドレスを持っている必要があります。さらに運用中の電子メールアドレス(それがアカウントをアクティベーションするために要求されるかもしれないと共に)とパスワード(それを後で変更することができる)の選択が必要です。');
$faq[] = array('私はアクティベーションの電子メールを受信しませんでした!', 'アクティベーションせずにログインすることができるかもしれません。さもなければ、新しいパスワードを要求してみてください。これが処理されない場合は、管理者と連絡をとってください。');
$faq[] = array('万が一私がログイン情報を忘れるか、電子メールアドレスがこれ以上役立たなかったら、どうしますか?', 'You can always request a new password via the link on the login form. If your e-mail address doesn\'t work anymore or if you have forgotten it, contact an administrator. He/she may give you the e-mail address you registered with or adjust your account to your new and working e-mail address.');
$faq[] = array('モデレータと管理者は何ですか?', 'A moderator is a person which checks one or more forums for inaccurate posts. He/she may also help the users in his/her forum. An administrator is a moderator on all boards, also he/she can assign moderators and change all configuration options of the forum.');
$faq[] = array('私はどのようにすればモデレータか管理者になれますか?', '通常できません。しかしもし興味があるなら管理者に問い合わせてみましょう。');
$faq[] = array('私は自分のランクを変更できますか?', 'いいえ、管理者だけがユーザーにカスタムランクを提供することができます。');

$faq[] = array('--', '購読');
$faq[] = array('私はどうやってトピックを購読しますか?', '
各トピックの下に、それを自分自身で予約購読するためのリンクを見つけられます。ログインした場合のみ、トピックを予約することができます。');
$faq[] = array('私はどうやってトピックの購読を止めますか?', '購読中止するリンクのクリック、あるいはパネル中の予約要約で登録を取り消すことができます。');

$faq[] = array('--', 'プロファイル');
$faq[] = array('私はどうやって自分のユーザー名を変更できますか?', '自分自身でユーザー名(ログイン名)は変更できません。ボード管理者だけが、それをすることが許可されています。しかし、表示される名前をいつでも変更することができます。
You can however change your displayed name at any time.');
$faq[] = array('ユーザー名と表示された名前および本名の違いは何ですか?', 'Your username, which you use to log in onto the forums, is constant, you can\'t change it. Your displayed name (which is upon registering equal to your username) is the name displayed publicly. You can always change this name. Note you will still have to log in with your constant username. Your real name, which is optional, is only shown on your profile page.');
$faq[] = array('自分の言語がドロップダウンボックスにありません!', 'Ask the administrator of this board whether he/she wants to add a translation for your language.');
$faq[] = array('なぜ私は他のテンプレートを選ぶことができないのでしょう?', 'おそらく他のテンプレートはこの掲示板で利用できません。');

$faq[] = array('--', 'トピックと投稿');
$faq[] = array('トピックと投稿は何ですか?', 'A topic is a group of messages (posts) in a certain forum. If you click the name of a forum on the forum index, you can see an overview of topics in that forum.');
$faq[] = array('スティッキトピックは何ですか?', 'Sticky topics are designed to always stay on top of the topic overview. Generally, normal users can not create sticky topics, but moderators and administrators can.');
$faq[] = array('なぜ私は新しいトピックあるいは返事を投稿することができないのですか?', 'If no link appears to create new topics or posts, you are not allowed to make new topics or posts in that forum. This may either be a setting of the forum or the topic may have been closed by a moderator. In doubt, contact the administrator.');
$faq[] = array('BB コードと表情文字ってなんですか?', 'BBCode are tags which you can use to add certain elements to your post. Try some and preview your post to see the effect. Smilies are used to express emotions in your posts.');
$faq[] = array('投稿しても自分の投稿数が増えません!', 'In certain forums, post count increasing may have been disabled. This is common for testing or general chat forums.');
$faq[] = array('なぜ私は投稿と投稿の間、の時間を待たなければなりませんか?', 'Flood protection is used to ommit spamming or flooding the server with posting requests. しばらく待って投稿を再送信してください。');

$faq[] = array('--', 'いろいろ');
$faq[] = array('私はこの掲示板から電子メールを受け取りません!', 'Make sure the e-mails are not blocked by anti spam software. If not, the e-mail address set up in your profile may not work anymore.');
$faq[] = array('RSS フィードって何ですか?', 'RSS feeds are used to fetch recent information from a website or a forum to view in a news/RSS reader or some browsers.');
$faq[] = array('私は、プロファイル中のどこで Google Talk アカウントを置くことができますか?', 'Google Talk is an IM network using the Jabber/XMPP protocol. You can place your account name (completely, including the domain name) in the Jabber/XMPP profile field.');

$faq[] = array('--', 'UseBB の問題');
$faq[] = array('誰がこのフォーラムを作ったのですか? UseBB って何ですか?', 'この掲示板は <em>UseBB</em> と呼ばれ、UseBB チームにより開発されました。UseBB は GPL の下でリリースされたオープンソースソフトウェアです。UseBB は <a href="http://www.usebb.net">www.usebb.net</a> から自由にダウンロードできます。Note the administrator(s) of this forum/website may have added additional functionality.');
$faq[] = array('UseBBの作成者はこのフォーラムの責任を負いますか?', 'いいえ、この掲示板はウェブサイトのウェブマスターがメンテナンスしています。UseBB チームはどんな方法でもこのフォーラムの責任を持つことはできません。');
$faq[] = array('私は、このフォーラムに対する苦情を持っています。私は誰に言わなければなりませんか?', 'If you have a complaint about the forum software itself, not the content, you are welcome to <a href="http://www.usebb.net">tell the UseBB Team</a>. For any other inquiries, please contact the administrator(s) of this forum/website.');

?>
