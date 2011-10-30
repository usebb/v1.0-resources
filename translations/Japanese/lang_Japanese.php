<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header$
	EN-Revision: 1.126
	
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
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'UTF-8';
$lang['language_code'] = 'ja';
$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'ホーム';
$lang['YourPanel'] = 'コントロールパネル';
$lang['Register'] = '登録';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = '検索';
$lang['ActiveTopics'] = '活発なトピック';
$lang['LogIn'] = 'ログイン';
$lang['LogOut'] = 'ログアウト (%s)';
$lang['MemberList'] = '会員一覧';
$lang['StaffList'] = 'スタッフ一覧';
$lang['Statistics'] = '統計';
$lang['ContactAdmin'] = '管理者へ連絡';
$lang['Forum'] = 'フォーラム';
$lang['Topics'] = 'トピック数';
$lang['Posts'] = '返信数';
$lang['LatestPost'] = '最終返信';
$lang['RSSFeed'] = 'RSS フィード';
$lang['NewPosts'] = '新規投稿数';
$lang['NoNewPosts'] = '新規投稿がありません';
$lang['LockedNewPosts'] = 'ロック済み (新規投稿あり)';
$lang['LockedNoNewPosts'] = 'ロック済み (新規投稿なし)';
$lang['Locked'] = 'ロック済み';
$lang['LastLogin'] = '最終ログイン';
$lang['VariousInfo'] = '様々な情報';
$lang['IndexStats'] = 'この掲示板は %3$d 人の会員登録があり、 %2$d 個のトピックと %1$d 個の投稿があります。';
$lang['NewestMemberExtended'] = 'ようこそ新しい会員さん: %s';
$lang['Username'] = 'ユーザー名';
$lang['CurrentPassword'] = '現在のパスワード';
$lang['UserID'] = 'ユーザー ID';
$lang['NoSuchForum'] = 'この掲示板にはフォーラム「%s」は存在しません!';
$lang['WrongPassword'] = 'すみません、パスワードが正確ではありません! 忘れてしまった場合、ログインフォームより新しいパスワードを要求してください。';
$lang['Reset'] = 'リセット';
$lang['SendPassword'] = '新規パスワードを送信する';
$lang['RegisterNewAccount'] = '新規アカウントを登録する';
$lang['RememberMe'] = '情報を覚える';
$lang['Yes'] = 'はい';
$lang['No'] = 'いいえ';
$lang['NotActivated'] = 'アカウント %s はまだアクティベートされていません。アカウントのアクティベート方法の説明書はこのフォーラムで登録したメールボックスを確認してください。';
$lang['Error'] = 'エラー';
$lang['Profile'] = '%s のプロファイル';
$lang['Level'] = 'レベル';
$lang['Administrator'] = '管理者';
$lang['Moderator'] = 'モデレータ';
$lang['Registered'] = '登録者';
$lang['Email'] = '電子メールアドレス';
$lang['ContactInfo'] = '連絡情報';
$lang['Password'] = 'パスワード';
$lang['PasswordAgain'] = 'パスワード (再度)';
$lang['EverythingRequired'] = '全ての項目が必要です!';
$lang['RegisteredNotActivated'] = 'アカウント「%s」はただいま作成されました。アカウントをアクティベートする方法の説明書を「%s」に送信しました。アカウントでログインするためにアクティベートする必要があります。';
$lang['RegisteredActivated'] = 'アカウント「%s」はただいま作成されました。すぐにログインすることができます。';
$lang['Never'] = 'まだ';
$lang['Member'] = '会員';
$lang['RegistrationActivationEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからです。
アカウント名 [account_name] を登録しました。
しかしまだそれは有効ではありません。
アカウントを有効にするには下記のリンクをクリックしてください:

[activate_link]

もしくはコピーしてブラウザーに貼り付けてください。
そうすればこのユーザー名とパスワードを使ってログインできます:

ユーザー名: [account_name]
パスワード: [password]

パスワードを忘た場合、ログインフォーム上のリンクで新しいものを要求することができます。
登録をありがとう!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'これは空の掲示板です。管理者はまだフォーラムを作って居ません。';
$lang['AlreadyActivated'] = 'ID %d のアカウントは既にアクティベートされています。';
$lang['Activate'] = 'アクティベート';
$lang['Activated'] = 'アカウント %s はただいま(再)アクティベートしました。ユーザー名とパスワードで今すぐログインすることができます。';
$lang['WrongActivationKey'] = 'ID:%d のアカウントをアクティベートできませんでした。アクティベートキーが正しくありません。新しいパスワードを要求を意図しませんでしたか?';
$lang['RegisterIt'] = '「登録」リンクで作成できます。';
$lang['BoardClosed'] = '掲示板は閉じています';
$lang['SendpwdEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからです。
アカウント「[account_name]」の新しいパスワードを今要求されました。
ユーザー名とパスワードを用いてログインできます:

ユーザー名: [account_name]
パスワード: [password]

パスワードを忘た場合、ログインフォーム上のリンクで新しいものを要求することができます。 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '新規パスワード';
$lang['SendpwdActivated'] = 'アカウント「%s」の新しいパスワードを「%s」に送信しました。新しいパスワードで今からログインすることができます。';
$lang['ForumIndex'] = 'フォーラム一覧';
$lang['MissingFields'] = '次のフィールドが足りないか間違っています: %s.';
$lang['TermsOfUseContent'] = '翻訳文:(翻訳文は参考程度にしてください)
この掲示板で見つかった投稿がすべてウェブサイトのウェブマスター、フォーラム管理者あるいはモデレータのうちのひとりによって書かれた投稿を除いてその投稿の見解であると認めます。

あなたはいかなる乱暴、攻撃、わいせつ、不適当な内容、あるいはこれらのフォーラム上の規則によって禁止される内容も投稿しないことに合意します。
そういった行動をすると、これらのフォーラム上のあなたのアカウントは禁止するか削除することができます。
また、あなたのインターネット・サービス・プロバイダーにあなたの行動に関して通告をします。
したがってすべての投稿の IP アドレスが保管されます。

フォーラムに送信する情報は、すべて将来の参照のためにデータベースシステムに格納されています。掲示板管理者は、法的問題の義務か、あなたの許可かなければ、この情報を再配布しないでしょう。
しかし、ハッキングの試みの結果いかなる情報が漏らされている場合も、ウェブマスター、管理者またはモデレータおよび UseBB チームは、責任を負うことはできません。

この掲示板は、フォーラムシステムで必要な一時的情報をローカルコンピュータ上に格納するために Cookie を使用します。
これを有効にすることをに決めた場合、アカウントの自動ログインを有効にするために、暗号化された形式であなたのユーザー ID およびあなたのパスワードを Cookie に格納することができます。
コンピュータ上に Cookie が格納されることを望まない場合、ブラウザーの Cookie を無効にするようにブラウザーのマニュアルを参照してください。

「受諾する」ボタンをクリックすることでと、あなたはこれらの条件に同意します。

原文: You acknowledge that all posts found at this board are the opinions of its authors and not of the web site\'s webmaster, forum administrators or moderators, except for posts written by one of them.

You agree not to post any abusive, offensive, obscene or inappropriate content or content that is forbidden by law on these forums. Doing so can cause your account on these forums to get banned or removed and your internet service provider eventually noticed about your behaviour. Therefore, your IP address is stored with every post you place. You also agree that administrators and moderators are permitted to edit, delete, move or lock your topics when they think this is needed.

All information you post to these forums is being stored in a database system for future reference. The board administrators will not redistribute this information without your permission or obligation by legal issues. However, nor the webmaster, administrators or moderators nor the UseBB Team can be held responsible when any information is being leaked as a result of a hacking attempt.

This board uses cookies to store temporary information needed by the forum system on your local computer. Also, a cookie can store your user ID and your password in an encrypted form to enable automatic login of your account if you chose to enable this. If you don\'t want any cookies to be stored on your computer, refer to your browser\'s manual about disabling cookies.

By clicking the "I accept" button, you agree to these terms and conditions.';
$lang['TermsOfUse'] = '利用条件';
$lang['RegistrationActivationEmailSubject'] = 'アカウントアクティベーション';
$lang['NeedToBeLoggedIn'] = 'これを行うにはログインされる必要があります。ログインするために「ログインする」のリンクか、新しいアカウントを作成するために「登録する」をクリックします。';
$lang['WrongEmail'] = 'すみません。%s はアカウント「%s」の為の正しいメールアドレスではありません。電子メールアドレスを思い出せない場合、掲示板の管理者に連絡をとってください。';
$lang['Topic'] = 'トピック';
$lang['Author'] = '投稿者';
$lang['Replies'] = '返信数';
$lang['Views'] = '閲覧数';
$lang['Note'] = 'Note';
$lang['Hidden'] = '隠しています';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'メッセージを送信する';
$lang['NoViewableForums'] = 'このユーザーレベルはどのフォーラムを閲覧する権限も持っていません。ログインしていない場合、ログインしてください。ログインされる場合、恐らくここに居ないはずです';
$lang['Rank'] = 'ランク';
$lang['Location'] = '住居';
$lang['Website'] = 'ウェブサイト';
$lang['Occupation'] = '職業';
$lang['Interests'] = '関心';
$lang['MSNM'] = 'Windows Live メッセンジャー';
$lang['YahooM'] = 'Yahoo! メッセンジャー';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'あなたの IP アドレス「%s」はこの掲示板から禁止されています。';
$lang['Avatar'] = 'アバター';
$lang['AvatarURL'] = 'アバター URL';
$lang['BannedUser'] = '禁止されたアカウント';
$lang['BannedUserExplain'] = 'アカウント %s はこの掲示板から拒否されています。理由:';
$lang['BannedUsername'] = 'ユーザー名 %s はこの掲示板から拒否されています。別の名前を選んでください。';
$lang['BannedEmail'] = '電子メールアドレス「%s」はこの掲示板の禁止一覧に既に存在します。別のものを選択してください。';
$lang['PostsPerDay'] = '日毎の投稿数';
$lang['BoardClosedOnlyAdmins'] = '掲示板が閉鎖されている時は管理者のみがログインできます。';
$lang['NoPosts'] = '投稿はありません';
$lang['NoActivetopics'] = 'この掲示板は現在活発なトピックがありません。';
$lang['AuthorDate'] = '投稿者 %s 投稿日時 %s';
$lang['ByAuthor'] = '投稿者: %s';
$lang['OnDate'] = '投稿日時: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = '%s に電子メールを送信する';
$lang['SendEmail'] = '%s にメッセージを送信する';
$lang['NoMails'] = 'このユーザーはいかなる電子メールも受け取らないことを選択しました。';
$lang['UserEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからです。
ユーザー [username] は掲示板からこのメッセージを送りました。
次がメッセージ本文です。

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = '電子メールを「%s」に送信することに成功しました!';
$lang['To'] = '宛先';
$lang['From'] = '差出人';
$lang['Subject'] = '件名';
$lang['Body'] = '本文';
$lang['Send'] = '送信する';
$lang['EditProfile'] = 'プロファイルを編集する';
$lang['EditOptions'] = 'オプションを編集する';
$lang['EditPasswd'] = 'パスワードを編集する';
$lang['PanelHome'] = 'パネルのホーム';
$lang['NewEmailNotActivated'] = 'プロファイルの編集に成功しました。アカウント「%s」の電子メールアドレスを変更したので、再アクティベーションの必要があります。%s に電子メールでこれを行う方法についての説明書を送りました。その間にログアウトするでしょう。';
$lang['Required'] = '必須';
$lang['ViewProfile'] = 'プロファイルを閲覧する';
$lang['NewEmailActivationEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからです。
ただいまアカウント [account_name] の電子メールアドレスを変更しました。
しかしまだ再アクティベーションしていません。
アカウントをアクティベートするには下記のリンクにクリックしてください:

[activate_link]

もしくはコピーしてブラウザーに貼り付けてください。
パスワードを忘た場合、ログインフォーム上のリンクで新しいものを要求することができます。

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'アカウントの再アクティベーション';
$lang['Signature'] = '署名';
$lang['SessionInfo'] = 'セッション情報';
$lang['SessionID'] = 'セッション ID';
$lang['IPAddress'] = 'IP アドレス';
$lang['Seconds'] = '秒';
$lang['Updated'] = '更新しました';
$lang['Pages'] = 'Pages';
$lang['AutoLogin'] = '自動ログイン';
$lang['Enabled'] = '有効です';
$lang['Disabled'] = '無効です';
$lang['Enable'] = '有効にする';
$lang['Disable'] = '無効にする';
$lang['AutoLoginSet'] = '自動ログインのクッキーを設定しました。';
$lang['AutoLoginUnset'] = '自動ログインのクッキーを設定解除しました。';
$lang['RegistrationEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからです。
ただいま「[account_name]」という名のアカウントを登録しました。
あなたはこのユーザー名とパスワードを用いてログインできます:

ユーザー名: [account_name]
パスワード: [password]

パスワードを忘た場合、ログインフォーム上のリンクで新しいものを要求することができます。
登録ありがとうございます!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'アカウントの登録';
$lang['PublicEmail'] = '電子メールアドレスを公開する';
$lang['PublicLastLogin'] = '最終ログイン時間を公開する';
$lang['DateFormat'] = '日付の書式';
$lang['DateFormatHelp'] = '日付の書式は、PHP の %s 関数と同じ文法です。';
$lang['Again'] = '再度';
$lang['NewPassword'] = '新規パスワード';
$lang['NewPasswordAgain'] = '新規パスワード (再度)';
$lang['PasswordEdited'] = 'パスワードの編集に成功しました。';
$lang['DetailedOnlineList'] = 'オンラインの詳細';
$lang['Detailed'] = '詳細';
$lang['OptionsEdited'] = '掲示板のオプション編集に成功しました。';
$lang['ProfileEdited'] = 'プロファイルの編集に成功しました。';
$lang['Started'] = '開始しました';
$lang['Minutes'] = '分';
$lang['Hours'] = '時間';
$lang['Days'] = '日';
$lang['Weeks'] = '週';
$lang['TotalTime'] = '総時間';
$lang['NoTopics'] = 'このフォーラムはトピックがありません。はじめての投稿ができます!';
$lang['NotPermitted'] = 'これを行う適切な権限がありません。もし疑問なら管理者に連絡してください。';
$lang['Language'] = '言語';
$lang['Template'] = 'テンプレート';
$lang['NoSuchMember'] = 'この掲示板に会員「%s」は存在しません。';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'この掲示板でブラウザーのクッキーが読めないか設定できないため、この機能は無効です。';
$lang['LogOutConfirm'] = '本当にログアウトしますか? 自動ログインのクッキーも削除します!';
$lang['Cancel'] = '取り消し';
$lang['Timezone'] = 'タイムゾーン';
$lang['DST'] = '夏時間';
$lang['Sticky'] = 'スティッキ';
$lang['PostNewTopic'] = '新規トピック';
$lang['ForumIsLocked'] = 'フォーラムはロック済みです。';
$lang['NoSuchTopic'] = 'トピック「%s」はこの掲示板にもう存在していません。';
$lang['PostReply'] = '返信を投稿する';
$lang['TopicIsLocked'] = 'トピックをロックしました。';
$lang['Post'] = '投稿';
$lang['Edit'] = '編集';
$lang['Delete'] = '削除';
$lang['Quote'] = '引用';
$lang['Wrote'] = '%s wrote';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = '投稿しようとしているトピックはロックされています。認証された人のみ返信を投稿することができます。';
$lang['Content'] = '内容';
$lang['Options'] = 'オプション';
$lang['EnableBBCode'] = 'BBCode を有効にする';
$lang['EnableSmilies'] = '表情文字を有効にする';
$lang['EnableSig'] = '署名を有効にする';
$lang['EnableHTML'] = 'HTML を有効にする';
$lang['LockTopicAfterPost'] = '投稿後にトピックをロックする';
$lang['Guest'] = 'ゲスト';
$lang['BackToPrevious'] = '前のページに戻る';
$lang['NoSuchPost'] = '投稿「%s」はこの掲示板に(今は)存在しません。';
$lang['UserPostedImage'] = 'ユーザーの投稿済み画像';
$lang['ForumIsLockedExplain'] = 'このフォーラムはロック済みです。認証済みの人だけが新規トピックを投稿できます。';
$lang['MakeTopicSticky'] = 'スティッキトピックを作る';
$lang['QuickReply'] = '簡単な返信';
$lang['ReturnToTopicAfterPosting'] = '投稿後にトピックに戻る';
$lang['ModeratorList'] = 'モデレータ: %s';
$lang['Nobody'] = '匿名';
$lang['DeleteTopic'] = 'トピックを削除する';
$lang['MoveTopic'] = 'トピックを移動する';
$lang['LockTopic'] = 'トピックをロックする';
$lang['UnlockTopic'] = 'トピックをロック解除する';
$lang['MakeSticky'] = 'スティッキの作成';
$lang['ConfirmDeleteTopic'] = '本当にフォーラム「%s」のトピック「%s」を削除しますか? これは戻せません!';
$lang['MakeNormalTopic'] = '通常のトピックを作成する';
$lang['OldForum'] = '古いフォーラム';
$lang['NewForum'] = '新しいフィーラム';
$lang['IAccept'] = '受諾する';
$lang['IDontAccept'] = '受諾しない';
$lang['OpenLinksNewWindow'] = '外部リンクを開くときは新規ウィンドウ';
$lang['HideAllAvatars'] = 'すべてのアバターを隠す';
$lang['HideUserinfo'] = 'ユーザー情報を隠す';
$lang['HideAllSignatures'] = 'すべての署名を隠す';
$lang['HideFromOnlineList'] = 'オンライン一覧を隠す';
$lang['PageLinks'] = 'ページ: %s';
$lang['Preview'] = 'プレビュー';
$lang['DeletePost'] = '投稿を削除する';
$lang['ConfirmDeletePost'] = '本当にトピック「%s」にあるこのトピックを削除しますか? これは戻せません!';
$lang['EditPost'] = '投稿を編集する';
$lang['PostEditInfo'] = '最終編集者 %s 日時 %s.';
$lang['PasswdInfo'] = 'パスワードは英数字のみを含むことができ、最小 8 文字になります。';
$lang['SubscribeTopic'] = '購読する';
$lang['UnsubscribeTopic'] = '購読をやめる';
$lang['NewReplyEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアからのお知らせです。
ある人([poster_name])が、購読予約されているトピック「[topic_title]」への返信を投稿しました。
返信を閲覧するには次のリンクをクリックしてください:
[topic_link]

もしトピックの購読をやめたいなら、次のリンクをクリックしてください。
(ログインが必要):
[unsubscribe_link]

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '「%s」の新規返信';
$lang['SubscribedTopic'] = 'ただ今このトピックを購読しました。';
$lang['UnsubscribedTopic'] = 'ただ今このトピックの購読を取りやめました。';
$lang['SubscribeToThisTopic'] = 'このトピックを購読します。';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = '購読';
$lang['NoSubscribedTopics'] = 'どんなトピックも現在購読していません。';
$lang['LatestUpdate'] = '最終更新';
$lang['Unknown'] = '不明';
$lang['PostingTopic'] = '「%s」のトピックを投稿中';
$lang['PostingReply'] = '「%s」の返信を投稿中';
$lang['MovingTopic'] = '「%s」のトピックを移動中';
$lang['DeletingTopic'] = '「%s」のトピックを削除中';
$lang['EditingPost'] = '「%s」の投稿を編集中';
$lang['DeletingPost'] = '「%s」の投稿を削除中';
$lang['DebugMode'] = 'デバグモード';
$lang['ParseTime'] = '解析時間';
$lang['ServerLoad'] = 'サーバー負荷';
$lang['TemplateSections'] = 'テンプレートセクション';
$lang['SQLQueries'] = 'SQL 照会';
$lang['RealName'] = '本名';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = '管理者';
$lang['Moderators'] = 'モデレータ';
$lang['TopicReview'] = 'トピックをレビューする';
$lang['ViewMorePosts'] = 'もっと投稿を閲覧する';
$lang['DisplayedName'] = '表示名';
$lang['UsernameInfo'] = 'ユーザー名には英数字、「_(アンダーライン)」、「-(ハイフン)」と「 (半角空白)」のみ使用できます。';
$lang['Code'] = 'コード';
$lang['Img'] = '画像';
$lang['URL'] = 'URL';
$lang['Color'] = '色';
$lang['Size'] = 'サイズ';
$lang['ViewingForum'] = 'フォーラム: %s';
$lang['ViewingTopic'] = 'トピック: %s';
$lang['FloodIntervalWarning'] = '管理者は %d 秒間隔で投稿できるように指定しています。しばらく待ってから再び投稿フォームで送信を試してください。';
$lang['AutoSubscribe'] = '自動購読';
$lang['OnPostingNewTopics'] = 'トピックを投稿したとき';
$lang['OnPostingNewReplies'] = '返信を投稿したとき';
$lang['UnsubscribeSelected'] = '選択されたトピックの購読停止';
$lang['SelectedTopicsUnsubscribed'] = '選択されたトピックの購読をただいま停止します';
$lang['Birthday'] = '生年月日';
$lang['Age'] = '年齢';
$lang['Month'] = '月';
$lang['Day'] = '日';
$lang['Year'] = '年';
$lang['PoweredBy'] = '%s は %s を使用しています';
$lang['ForumSoftware'] = 'フォーラムソフトウェア';
$lang['GeneralStats'] = '全体の統計';
$lang['Members'] = '会員数';
$lang['TopicsPerDay'] = '一日のトピック数';
$lang['MembersPerDay'] = '一日の会員数';
$lang['BoardStarted'] = '掲示板運営開始';
$lang['BoardAge'] = '掲示板運営日数';
$lang['NewestMember'] = '新しい会員';
$lang['MostActiveTopics'] = 'もっともアクティブなトピック';
$lang['MostViewedTopics'] = 'もっとも閲覧されたトピック';
$lang['PostsPerMember'] = '会員毎の投稿数';
$lang['PostsPerForum'] = 'フォーラム毎の投稿数';
$lang['Categories'] = 'カテゴリ数';
$lang['Forums'] = 'フォーラム数';
$lang['TopicsPerMember'] = '会員毎のトピック数';
$lang['TopicsPerForum'] = 'フォーラム毎のトピック数';
$lang['MostActiveMembers'] = 'もっとも活発な会員';
$lang['MostActiveForums'] = 'もっとも活発なフォーラム';
$lang['DisplayedNameTaken'] = 'すみませんが「%s」はログイン名か表示名として既に取得されています。';
$lang['SearchKeywords'] = 'キーワード検索';
$lang['SearchMode'] = '検索モード';
$lang['SearchAuthor'] = '投稿者	検索';
$lang['SearchForums'] = 'フォーラム検索';
$lang['AllForums'] = 'すべてのフォーラム';
$lang['NoSearchResults'] = 'すみませんが、結果は提供した基準と一致するかどうか分かりませんでした。';
$lang['SearchMembersPosts'] = '会員の投稿を検索';
$lang['CurrentPage'] = '現在のページ';
$lang['MemberGuestOnline'] = '最近の %d 分で, %d 人の会員 (%d 人隠れています) と %d 人のゲストがフォーラムを訪問しています。';
$lang['MembersGuestOnline'] = '最近の %d 分で, %d 人の会員 (%d 人隠れています) と %d 人のゲストがフォーラムを訪問しています。';
$lang['MemberGuestsOnline']  = '最近の %d 分で, %d 人の会員 (%d 人隠れています) と %d 人のゲストがフォーラムを訪問しています。';
$lang['MembersGuestsOnline'] = '最近の %d 分で, %d 人の会員 (%d 人隠れています) と %d 人のゲストがフォーラムを訪問しています。';
$lang['WhosOnline'] = 'オンラインユーザー';
$lang['Done'] = '終了する';
$lang['KeywordsExplain'] = '半角空白で区切られた少なくとも %d 文字のいくつかのキーワードです。';
$lang['BCCMyself'] = '自分の電子メールアドレスにコピーを送信します。';
$lang['Save'] = '保存する';
$lang['Add'] = '追加する';
$lang['MarkAllAsRead'] = 'すべて既読にする';
$lang['MarkAllAsReadDone'] = 'すべてのフォーラムとトピックを既読にしました。';
$lang['StringTooShort'] = '%s は短すぎます。最低 %d 文字必要です。';
$lang['StringTooLong'] = '%s は長すぎます。%d 文字までが許可されています。';
$lang['Upload'] = 'アップロードする';
$lang['RegistrationsDisabled'] = '登録は無効になっています。';
$lang['PostFormShortcut'] = 'すばやくこのフォームを送信するには[Alt]と[S](Macintosh では[cmd]と[S])を押します。';
$lang['EditThisMember'] = 'この会員を編集する';
$lang['EmailTaken'] = '電子メールアドレス「%s」はこの掲示板で既に使用されています。別のアドレスを選択してください。';
$lang['RegisteredNotActivatedByAdmin'] = 'アカウント「%s」はただいま作成されました。ログインする前に、このフォーラムの管理者がアカウントをアクティベートしなければなりません。これが行われるまで、しばらくお待ちください。';
$lang['AdminActivationEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアから配信しています。
さきほどアカウント名「account_name」で登録されました。
フォーラムの管理者がアカウントをアクティベートする必要があります。
これが行われたら、下記を用いてログインすることができます:

Username: [account_name]
Password: [password]

パスワードを忘れた場合、ログインフォームのリンクで新しいパスワードを要求することができます。
登録してくれてありがとうございます!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'アカウントはアクティベーション待ちです。';
$lang['NewEmailNotActivatedByAdmin'] = 'プロファイルの編集に成功しました。
アカウント「%s」の電子メールアドレスを変更したので、この掲示板の管理が再アクティベートする必要があります。その間ログアウトします。';
$lang['NewEmailAdminActivationEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアから配信しています。
先ほどアカウント「[account_name]」の電子メールアドレスを変更しました。
しかし、まだ再アクティベートされていません。
これが行われるまで、しばらくお待ちください。

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'アカウントは再アクティベーション待ちです。';
$lang['AdminActivatedAccountEmailBody'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアから配信しています。
管理者はアカウント「[account_name]」をアクティベートしました。
今すぐログインすることができます。

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'アカウントをアクティベーションしました。';
$lang['Sort'] = 'ソート';
$lang['SortBy'] = 'ソート基準';
$lang['SortBy-displayed_name'] = 'ユーザー名';
$lang['SortBy-real_name'] = '本名';
$lang['SortBy-level'] = 'レベル';
$lang['SortBy-rank'] = 'ランク';
$lang['SortBy-regdate'] = 'Registered';
$lang['SortBy-posts'] = 'Posts';
$lang['SortBy-latest_post'] = '最新の投稿';
$lang['SortBy-topic_title'] = 'トピックの題名';
$lang['SortBy-forum'] = 'フォーラム';
$lang['SortBy-author'] = '投稿者';
$lang['SortBy-replies'] = '返信数';
$lang['SortBy-views'] = '閲覧数';
$lang['SortOrder-asc'] = '昇順';
$lang['SortOrder-desc'] = '降順';
$lang['NoUsersFound'] = 'メンバーが見つかりません';
$lang['SaveConfigManually'] = 'config.php が書き込めないため、UseBB は設定値を保存できません。必要な場合、次のコンテンツを config.php に保存してください。';
$lang['ShowResultsAs'] = 'Show results as';
$lang['ShowMode-topics'] = 'トピック数';
$lang['ShowMode-posts'] = '返信数';
$lang['Mode-and'] = 'すべてのキーワード (AND)';
$lang['Mode-or'] = 'いずれかのキーワード (OR)';
$lang['ExactMatch'] = '完全一致';
$lang['IncludeGuests'] = 'ゲストを含む';
$lang['Top'] = 'Top';
$lang['Bottom'] = 'Bottom';
$lang['Action'] = 'Action';
$lang['AntiSpamQuestion'] = 'スパム対策の質問';
$lang['AntiSpamQuestionInfo'] = '
スパム対策として、フォーラムのこのコンポーネントにアクセスするためにこの質問に正確に答える必要があります。いちセッションあたりひとつの質問が出されますが、登録中は、完全に動作ないでしょう。';
$lang['Question'] = '質問';
$lang['Answer'] = '回答';
$lang['AntiSpamQuestionMathPlus'] = '%d と %d を加算すると?';
$lang['AntiSpamQuestionMathMinus'] = '%d から %d を引くと?';
$lang['AntiSpamWrongAnswer'] = '送信された回答は間違っています。このコンポーネントへのアクセスには、正しい解答を入力してください。';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => '月',
	'Tue' => '火',
	'Wed' => '水',
	'Thu' => '木',
	'Fri' => '金',
	'Sat' => '土',
	'Sun' => '日',
	'Monday' => '月曜日',
	'Tuesday' => '火曜日',
	'Wednesday' => '水曜日',
	'Thursday' => '木曜日',
	'Friday' => '金曜日',
	'Saturday' => '土曜日',
	'Sunday' => '日曜日',
	'Jan' => '1',
	'Feb' => '2',
	'Mar' => '3',
	'Apr' => '4',
	'May' => '5',
	'Jun' => '6',
	'Jul' => '7',
	'Aug' => '8',
	'Sep' => '9',
	'Oct' => '10',
	'Nov' => '11',
	'Dec' => '12',
	'January' => '1 月',
	'February' => '2 月',
	'March' => '3 月',
	'April' => '4 月',
	'May' => '5 月',
	'June' => '6 月',
	'July' => '7 月',
	'August' => '8 月',
	'September' => '9 月',
	'October' => '10 月',
	'November' => '11 月',
	'December' => '12 月',
	'st' => '',
	'nd' => '',
	'th' => ''
);

?>
