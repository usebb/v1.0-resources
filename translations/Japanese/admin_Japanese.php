<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header$
	EN-Revision: 1.96
	
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

$lang['AdminLogin'] = '管理者ログイン';
$lang['AdminPasswordExplain'] = 'セキュリティ上の理由で ACP へのログインはパスワードを入力しなければなりません。';

$lang['RunningBadACPModule'] = '1 つ以上のアスペクトが見当たらない($usebb_module オブジェクトが見つからない、および(または)見当たらない run_module()オブジェクトメソッドがない)ため、UseBBはこのモジュールを実行することができません。';

$lang['Category-main'] = '全体';
$lang['Category-forums'] = 'フォーラム管理';
$lang['Category-various'] = 'Various';
$lang['Category-members'] = '会員管理';
$lang['Category-pruning'] = '除去';
$lang['Category-security'] = 'セキュリティ管理';
$lang['Item-index'] = ' 一覧';
$lang['Item-version'] = 'バージョンの確認';
$lang['Item-config'] = '全体設定';
$lang['Item-categories'] = 'カテゴリ管理';
$lang['Item-forums'] = 'フォーラム管理';
$lang['Item-iplookup'] = 'IP アドレスの照会';
$lang['Item-sqltoolbox'] = 'SQL ツールボックス';
$lang['Item-modules'] = 'ACP モジュール';
$lang['Item-members'] = '会員の編集';
$lang['Item-delete_members'] = '会員の削除';
$lang['Item-register_members'] = '会員の登録';
$lang['Item-activate_members'] = '会員のアクティベート';
$lang['Item-prune_forums'] = 'フォーラムの除去';
$lang['Item-prune_members'] = '会員の除去';
$lang['Item-dnsbl'] = 'DNSBL 禁止';
$lang['Item-badwords'] = '禁止単語フィルター';
$lang['Item-mass_email'] = 'メール配信';
$lang['Item-bans'] = '禁止管理';

$lang['IndexWelcome'] = 'ようこそ UseBB フォーラムの管理コントロールパネルへ。ここから掲示板のすべての概観の設定、会員やフォーラムの制御などの設定を行うことができます。';
$lang['IndexSystemInfo'] = 'システム情報';
$lang['IndexUseBBVersion'] = 'UseBB バージョン';
$lang['IndexPHPVersion'] = 'PHP バージョン';
$lang['IndexSQLServer'] = 'SQL サーバーのドライバー';
$lang['IndexHTTPServer'] = 'HTTP サーバー';
$lang['IndexOS'] = 'オペレーションシステム';
$lang['IndexServerLoad'] = 'サーバーの負荷値(ロードアベレージ)';
$lang['IndexLinks'] = 'リンク一覧';
$lang['IndexUnactiveMembers'] = '未アクティベート会員一覧';
$lang['IndexNoUnactiveMembers'] = '管理者のアクティベート待ちの会員は居ません。';
$lang['IndexOneUnactiveMember'] = '管理者のアクティベート待ちの会員が 1 人居ます。';
$lang['IndexMoreUnactiveMembers'] = '管理者のアクティベート待ちの会員が %d 人居ます。';
$lang['IndexWarning'] = '警告!';
$lang['IndexUnwritableConfig'] = '%s に今は PHP から書き込めません。これは推奨しません。
書き込めるようにするために、FTP クライアントでファイルのパーミッションを変更するか、chmod 操作(0777)を行ってください。Contact your host in case of problems.';

$lang['VersionFailed'] = 'フォーラムは最新のバージョンを確定することができませんでした。最新のものを使用していること確認するために %s を確認してください。';
$lang['VersionFailed'] = 'フォーラムは最新のバージョンを確定することができませんでした。最新のものを持っているかどうか確かめるために %s を頻繁に確認してください。';
$lang['VersionLatestVersionTitle'] = 'これは最新のバージョンです。';
$lang['VersionLatestVersion'] = 'このフォーラムは最新の安定バージョンの UseBB %s でこのフォーラムは動いています。';
$lang['VersionNeedUpdateTitle'] = '新しいバージョンが利用できます。!';
$lang['VersionNeedUpdate'] = 'このフォーラムは UseBB %s ですが、セキュリティ向上とバグ修正のためにバージョン %s にアップデートしてください! 最新バージョンは %s に訪れてダウンロードしてください。';
$lang['VersionBewareDevVersionsTitle'] = '開発バージョンを見つけました。';
$lang['VersionBewareDevVersions'] = 'このフォーラムは「%s」が実行されています。しかしながら最新の安定したバージョンは「%s」です。開発バージョンで存在するかもしれない問題および非互換性に用心してください。';

$lang['ConfigInfo'] = 'このページは UseBB フォーラムのすべての設定を編集できます。注意深くデータベースの設定を変更してください。項目にしるされた「*」は必須項目を表します。';
$lang['ConfigSet'] = '新しい設定を保存しました。新しいページを読み込むと更新されて見えるでしょう。';
$lang['ConfigMissingFields'] = 'いくつかの項目が足りないか正しくありません (例えばテキストは数字が期待されたなど)次の項目を確認してください:';
$lang['ConfigBoard-type'] = '種類';
$lang['ConfigBoard-server'] = 'サーバー';
$lang['ConfigBoard-username'] = 'ユーザー名';
$lang['ConfigBoard-passwd'] = 'パスワード';
$lang['ConfigBoard-dbname'] = 'データベース名';
$lang['ConfigBoard-prefix'] = 'テーブル接頭語';
$lang['ConfigBoardSection-general'] = '掲示板の全般';
$lang['ConfigBoardSection-cookies'] = 'Cookie';
$lang['ConfigBoardSection-cookies-info'] = '空にすると自動検知するでしょう。';
$lang['ConfigBoardSection-sessions'] = 'セッション';
$lang['ConfigBoardSection-page_counts'] = 'ページ数';
$lang['ConfigBoardSection-date_time'] = '日付と時間';
$lang['ConfigBoardSection-date_time-info'] = 'ゲスト、または新規アカウントにのみ適用されます。';
$lang['ConfigBoardSection-database'] = 'データベース設定';
$lang['ConfigBoardSection-database-info'] = 'すぐに動作すると確信があるときのみ、これを変更してください。';
$lang['ConfigBoardSection-advanced'] = '高度な設定';
$lang['ConfigBoardSection-email'] = '電子メール';
$lang['ConfigBoardSection-additional'] = '追加機能';
$lang['ConfigBoardSection-user_rights'] = 'ユーザー権限';
$lang['ConfigBoardSection-min_levels'] = '最小アクセスレベル';
$lang['ConfigBoardSection-min_levels-info'] = 'これらは各項目にアクセスするのに必要な最小のレベルです。';
$lang['ConfigBoardSection-layout'] = 'レイアウト設定';
$lang['ConfigBoardSection-security'] = 'セキュリティ';
$lang['ConfigBoard-admin_email'] = '管理者の電子メールアドレス';
$lang['ConfigBoard-board_descr'] = '掲示板の詳細';
$lang['ConfigBoard-board_keywords'] = '掲示板のキーワード (カンマ区切り)';
$lang['ConfigBoard-board_keywords-info'] = 'カンマ区切りです。';
$lang['ConfigBoard-board_name'] = '掲示板名';
$lang['ConfigBoard-date_format'] = '日付の書式';
$lang['ConfigBoard-date_format-info'] = 'PHP の date() 関数と同じです。';
$lang['ConfigBoard-language'] = 'デフォルト言語';
$lang['ConfigBoard-language-info'] = 'ゲスト、または新規アカウントにのみ適用されます。';
$lang['ConfigBoard-session_name'] = 'セッション名';
$lang['ConfigBoard-session_name-info'] = '半角英数字半角のみです(空白も除く)少なくとも 1 文字なければなりません。';
$lang['ConfigBoard-template'] = 'デフォルトテンプレート';
$lang['ConfigBoard-template-info'] = 'ゲスト、または新規アカウントにのみ適用されます。';
$lang['ConfigBoard-active_topics_count'] = '活発なトピックをカウントする';
$lang['ConfigBoard-avatars_force_height'] = 'アバターの最大高 (ピクセル)';
$lang['ConfigBoard-avatars_force_height-info'] = '無制限はゼロ(0)です。';
$lang['ConfigBoard-avatars_force_width'] = 'アバターの最大幅 (ピクセル)';
$lang['ConfigBoard-avatars_force_width-info'] = '無制限はゼロ(0)です。';
$lang['ConfigBoard-debug'] = 'デバッグモード';
$lang['ConfigBoard-email_view_level'] = '電子メール表示レベル';
$lang['ConfigBoard-flood_interval'] = 'Flood 間隔(単位: 秒)';
$lang['ConfigBoard-members_per_page'] = 'ページ毎の会員数';
$lang['ConfigBoard-online_min_updated'] = 'オンラインユーザーの最終アクセスの間隔';
$lang['ConfigBoard-output_compression'] = '出力の圧縮';
$lang['ConfigBoard-passwd_min_length'] = 'パスワードの最小の長さ';
$lang['ConfigBoard-posts_per_page'] = 'ページ毎の投稿数';
$lang['ConfigBoard-rss_items_count'] = 'RSS 項目数';
$lang['ConfigBoard-search_limit_results'] = '検索結果の制限を x 項目へ';
$lang['ConfigBoard-search_nonindex_words_min_length'] = '検索キーワードの最小の長さ';
$lang['ConfigBoard-session_max_lifetime'] = 'セッションの最大生存時間 (単位: 秒)';
$lang['ConfigBoard-show_edited_message_timeout'] = '投稿の x 秒後に編集された時だけ編集の注意メッセージを表示します。';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'When the post was edited in these seconds after posting, the edited note remains hidden.';
$lang['ConfigBoard-topicreview_posts'] = 'トピックレビューの投稿数';
$lang['ConfigBoard-topics_per_page'] = 'ページ毎のトピック数';
$lang['ConfigBoard-view_active_topics_min_level'] = '活発なトピック';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'オンライン一覧の詳細を閲覧できる最小レベル';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = '統計ボックスを閲覧できる最小レベル';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = '電子メールアドレスを隠す最小レベル';
$lang['ConfigBoard-view_memberlist_min_level'] = '会員一覧を閲覧できる最小レベル';
$lang['ConfigBoard-view_search_min_level'] = '検索エンジン';
$lang['ConfigBoard-view_stafflist_min_level'] = 'スタッフ一覧を閲覧できる最小レベル';
$lang['ConfigBoard-view_stats_min_level'] = '統計ページを閲覧できる最小レベル';
$lang['ConfigBoard-view_contactadmin_min_level'] = '管理者の連絡先リンクを閲覧できる最小レベル';
$lang['ConfigBoard-allow_multi_sess'] = '単一 IP に複数セッションを許可する';
$lang['ConfigBoard-board_closed'] = 'ボードを閉鎖する';
$lang['ConfigBoard-board_closed-info'] = '管理者はログインできるでしょう。';
$lang['ConfigBoard-cookie_secure'] = 'セキュア Cookie (HTTPS 用)';
$lang['ConfigBoard-cookie_secure-info'] = '暗号化された Cookie (HTTPS のみ)';
$lang['ConfigBoard-cookie_httponly'] = 'HTTP only Cookie を有効にする';
$lang['ConfigBoard-cookie_httponly-info'] = 'Cookie に HttpOnly フラグを追加し、XSS に対してよりセキュアにします。';
$lang['ConfigBoard-dst'] = '夏時間';
$lang['ConfigBoard-enable_contactadmin'] = '管理者の連絡先リンクを有効にする';
$lang['ConfigBoard-enable_detailed_online_list'] = 'オンライン一覧の詳細を有効にする';
$lang['ConfigBoard-enable_forum_stats_box'] = '統計ボックスを有効にする';
$lang['ConfigBoard-enable_memberlist'] = '会員一覧を有効にする';
$lang['ConfigBoard-enable_quickreply'] = '簡単な返信を有効にする';
$lang['ConfigBoard-enable_rss'] = 'RSS フィードを有効にする';
$lang['ConfigBoard-enable_stafflist'] = 'スタッフ一覧を有効にする';
$lang['ConfigBoard-enable_stats'] = '統計ページを有効にする';
$lang['ConfigBoard-friendly_urls'] = 'フレンドリー URL を有効にする';
$lang['ConfigBoard-friendly_urls-info'] = 'Apache と mod_rewrite を要求します。URL セッション ID を無効にするでしょう。';
$lang['ConfigBoard-guests_can_access_board'] = 'ゲストが掲示板にアクセスできる';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'ゲストがプロフィール中の連絡先を参照できる';
$lang['ConfigBoard-guests_can_view_profiles'] = 'ゲストが会員のプロフィールを閲覧できる';
$lang['ConfigBoard-hide_avatars'] = 'すべてのアバターを隠す';
$lang['ConfigBoard-hide_signatures'] = 'すべての署名を隠す';
$lang['ConfigBoard-hide_userinfo'] = 'ユーザー情報を隠す';
$lang['ConfigBoard-rel_nofollow'] = 'BB コードのリンクの Google 追跡拒否(nofollow)を有効にする';
$lang['ConfigBoard-rel_nofollow-info'] = 'これは google に BBCode リンクをすべて無視させるでしょう。';
$lang['ConfigBoard-return_to_topic_after_posting'] = '投稿後にトピックに戻る';
$lang['ConfigBoard-sig_allow_bbcode'] = '署名中の BB コードを有効にする';
$lang['ConfigBoard-sig_allow_smilies'] = '署名中に顔文字を有効にする';
$lang['ConfigBoard-sig_max_length'] = '署名の最大長';
$lang['ConfigBoard-single_forum_mode'] = '単一フォーラムモード (適用可能な場合)';
$lang['ConfigBoard-single_forum_mode-info'] = 'フォーラムインデックスとして可視フォーラムのみ表示します。';
$lang['ConfigBoard-target_blank'] = 'BB コードのリンクは新しいウィンドウで開く';
$lang['ConfigBoard-activation_mode'] = 'アクティベーションモード';
$lang['ConfigBoard-activation_mode0'] = 'アクティベーションなし';
$lang['ConfigBoard-activation_mode1'] = '電子メールアクティベーション';
$lang['ConfigBoard-activation_mode2'] = '管理者アクティベーション';
$lang['ConfigBoard-board_closed_reason'] = '掲示板閉鎖の理由';
$lang['ConfigBoard-board_url'] = '掲示板 URL (空だと自動検出)';
$lang['ConfigBoard-board_url-info'] = '末尾のスラッシュを含む完全な URL です。空の場合、自動検出します。';
$lang['ConfigBoard-cookie_domain'] = 'Cookie ドメイン';
$lang['ConfigBoard-cookie_path'] = 'Cookie パス';
$lang['ConfigBoard-session_save_path'] = 'セッションの保存パス';
$lang['ConfigBoard-session_save_path-info'] = 'カスタムのセッションデータの保存パスです。絶対指定のディレクトリ名のみです。';
$lang['ConfigBoard-exclude_forums_active_topics'] = '活発なトピックから除外するフォーラム';
$lang['ConfigBoard-exclude_forums_rss'] = 'RSS フィードから除外するフォーラム';
$lang['ConfigBoard-exclude_forums_stats'] = '統計ページから除外するフォーラム';
$lang['ConfigBoard-timezone'] = 'タイムゾーン';
$lang['ConfigBoard-debug0'] = '無効';
$lang['ConfigBoard-debug1'] = '簡単(時間と回数の解析)';
$lang['ConfigBoard-debug2'] = '拡張(「簡単」とSQL 照会)';
$lang['ConfigBoard-email_view_level0'] = 'すべての電子メールアドレスを表示する';
$lang['ConfigBoard-email_view_level1'] = '電子メールフォームを有効にする';
$lang['ConfigBoard-email_view_level2'] = 'spam 検査表示をする';
$lang['ConfigBoard-email_view_level3'] = '生で表示する';
$lang['ConfigBoard-output_compression0'] = '無効';
$lang['ConfigBoard-output_compression1'] = 'HTML を圧縮する';
$lang['ConfigBoard-output_compression2'] = 'Gzip を有効にする';
$lang['ConfigBoard-output_compression3'] = 'HTML の圧縮と Gzip を有効にする';
$lang['ConfigBoard-level0'] = 'ゲスト';
$lang['ConfigBoard-level1'] = '会員';
$lang['ConfigBoard-level2'] = 'モデレータ';
$lang['ConfigBoard-level3'] = '管理者';
$lang['ConfigBoard-enable_acp_modules'] = 'ACP モジュール有効';
$lang['ConfigBoard-disable_registrations'] = 'ユーザー登録を無効にする';
$lang['ConfigBoard-disable_registrations-info'] = 'ユーザーは今まで通り、ACP によって登録できます。';
$lang['ConfigBoard-disable_registrations_reason'] = 'ユーザー登録を無効にする理由';
$lang['ConfigBoard-allow_duplicate_emails'] = '電子メールアドレスの複製を許可する';
$lang['ConfigBoard-enable_badwords_filter'] = '禁止単語フィルターを有効にする';
$lang['ConfigBoard-enable_ip_bans'] = 'IP アドレスの禁止を有効にする';
$lang['ConfigBoard-show_raw_entities_in_code'] = '[code] タグの生要素を表示します。';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'HTML 表現の変わりに、生の要素コードを表示します。';
$lang['ConfigBoard-username_min_length'] = 'ユーザー名の最小長';
$lang['ConfigBoard-username_max_length'] = 'ユーザー名の最大長';
$lang['ConfigBoard-show_never_activated_members'] = 'ずっとアクティベート済み会員は表示しない';
$lang['ConfigBoard-show_never_activated_members-info'] = '状態ボックスと会員一覧で表示します。';
$lang['ConfigBoard-enable_registration_log'] = '登録ログを有効にする';
$lang['ConfigBoard-enable_registration_log-info'] = 'テキストファイルに登録の記録を書き込みます。';
$lang['ConfigBoard-registration_log_file'] = '登録ログファイル';
$lang['ConfigBoard-registration_log_file-info'] = 'フォーラムのディレクトリへの相対パスか、絶対パスです。';
$lang['ConfigBoard-enable_email_dns_check'] = '電子メールアドレスの DNS 確認を有効にする';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'MX レコードの検査により返照します。これはすべての有効なドメインで処理をしないかもしれません。';
$lang['ConfigBoard-edit_post_timeout'] = '投稿のタイムアウト';
$lang['ConfigBoard-edit_post_timeout-info'] = 'ユーザーは、投稿 x 秒後以内に彼の投稿を編集することのみ許可します。';
$lang['ConfigBoard-disable_xhtml_header'] = 'XHTML テンプレートの XHTML ヘッダーを無効にする';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'Content-Type が XHTML の設定はコンテンツが 100% 整形されているときのみ使用できます。非対応ブラウザーでは常に XHTML を無効にします。';
$lang['ConfigBoard-email_reply-to_header'] = 'Reply-To ヘッダーを使う';
$lang['ConfigBoard-email_reply-to_header-info'] = 'ユーザーの電子メールアドレスの From の代わりに Reply-to を使います(いくつかのホストで要求されます)。';
$lang['ConfigBoard-mass_email_msg_recipients'] = '電子メール配信の受信者数';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'すべての受信者にメール送信されるまで大量のメッセージが送信されるでしょう。';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'sendmail のパラメーター -f を有効にします。';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'これは一部のホストで電子メールの機能性を壊すかもしれません。';
$lang['ConfigBoard-antispam_question_mode'] = 'アンチスパムの問題モード';
$lang['ConfigBoard-antispam_question_mode-info'] = '登録、新しいトピックおよび返信フォームへのアクセスの前にゲストに問題を見せます。';
$lang['ConfigBoard-antispam_question_mode0'] = '無効';
$lang['ConfigBoard-antispam_question_mode1'] = 'ランダムな数字の問題';
$lang['ConfigBoard-antispam_question_mode2'] = 'ランダムに選ぶカスタム問題';
$lang['ConfigBoard-antispam_question_questions'] = 'カスタムアンチスパム問題';
$lang['ConfigBoard-antispam_question_questions-info'] = '「問題|回答」のフォームの質問で、改行で区切ります。回答の半角英字はAとaやZとzを同一視(case insentive)します。';

$lang['CategoriesInfo'] = 'このセクションは、掲示板に存在する様々なカテゴリへの制御を提供します。';
$lang['CategoriesAddNewCat'] = '新規カテゴリを追加する';
$lang['CategoriesAdjustSortIDs'] = 'ソート ID の調整';
$lang['CategoriesSortAutomatically'] = '自動でカテゴリをソートする';
$lang['CategoriesNoCatsExist'] = 'この掲示板はまだカテゴリがありません。';
$lang['CategoriesCatName'] = 'カテゴリ名';
$lang['CategoriesSortID'] = 'ソート ID';
$lang['CategoriesMissingFields'] = 'いくつかの必須項目が足りません。それらに正確に記入してください。';
$lang['CategoriesSortChangesApplied'] = 'ソート ID への変更が適用されました。';
$lang['CategoriesConfirmCatDelete'] = 'カテゴリ削除の確認';
$lang['CategoriesConfirmCatDeleteContent'] = '本当にカテゴリ「%s」を削除しますか? この操作は戻せません!';
$lang['CategoriesMoveContents'] = 'カテゴリの内容を %s に移動する';
$lang['CategoriesDeleteContents'] = '内容を削除する';
$lang['CategoriesEditingCat'] = 'カテゴリ %s を編集中';

$lang['ForumsInfo'] = 'このセクションは、掲示板に存在する様々なフォーラムへの制御を提供します。';
$lang['ForumsAddNewForum'] = '新規フォーラムを追加する';
$lang['ForumsAdjustSortIDs'] = 'ソート ID を調整する';
$lang['ForumsSortAutomatically'] = 'フォーラムを自動ソートする';
$lang['ForumsNoForumsExist'] = 'この掲示板はまだフォーラムがありません。';
$lang['ForumsForumName'] = 'フォーラム名';
$lang['ForumsCatName'] = '親カテゴリ';
$lang['ForumsDescription'] = '説明';
$lang['ForumsDescriptionExplain'] = 'これは HTML が有効な項目です。もし特殊文字を使用したい場合、それぞれの HTML 要素を使用することが確実です (例えば「&amp;」の代わりに「&amp;amp;」).';
$lang['ForumsStatus'] = '状態';
$lang['ForumsStatusOpen'] = '開く';
$lang['ForumsAutoLock'] = 'x 自動ロック';
$lang['ForumsAutoLockXReplies'] = '%s 個の返信でロックします。';
$lang['ForumsIncreasePostCount'] = 'ユーザーの投稿数を増加する';
$lang['ForumsModerators'] = 'モデレーター';
$lang['ForumsModeratorsExplain'] = 'カンマで区切ったユーザー名(表示名ではありません) 英大小文字を区別しません。';
$lang['ForumsModeratorsUnknown'] = '不明の会員: %s.';
$lang['ForumsHideModsList'] = 'モデレータ一覧を隠す';
$lang['ForumsSortID'] = 'ソート ID';
$lang['ForumsMissingFields'] = 'いくつかの必須項目が足りません。正しく埋めてください。';
$lang['ForumsSortChangesApplied'] = 'ソート ID の変更を適用しました。';
$lang['ForumsConfirmForumDelete'] = 'フォーラム削除の確認';
$lang['ForumsConfirmForumDeleteContent'] = '本当にフォーラム「%s」を削除しますか? この操作は復元できません!';
$lang['ForumsMoveContents'] = 'フォーラムの内容を「%s」に移動する';
$lang['ForumsMoveModerators'] = 'コンテンツを移動するとき、モデレーターも移動します。';
$lang['ForumsDeleteContents'] = '内容を削除する';
$lang['ForumsEditingForum'] = 'フォーラム「%s」の編集中';
$lang['ForumsGeneral'] = '一般設定';
$lang['ForumsAuth'] = '認証設定';
$lang['ForumsAuthNote'] = '設定は互いに継承しません。!';
$lang['Forums-level0'] = 'ゲスト';
$lang['Forums-level1'] = '会員';
$lang['Forums-level2'] = 'モデレータ';
$lang['Forums-level3'] = '管理者';
$lang['Forums-auth0'] = 'フォーラムの閲覧';
$lang['Forums-auth1'] = 'トピックを読む';
$lang['Forums-auth2'] = '新規トピックの投稿';
$lang['Forums-auth3'] = 'トピックへの返信';
$lang['Forums-auth4'] = 'その他の投稿の編集';
$lang['Forums-auth5'] = 'トピックの移動';
$lang['Forums-auth6'] = 'トピックと投稿の削除';
$lang['Forums-auth7'] = 'トピックのロック';
$lang['Forums-auth8'] = 'スティッキトピック';
$lang['Forums-auth9'] = 'HTML として投稿 (危険)';

$lang['IPLookupSearchHostname'] = '検索ホスト名';
$lang['IPLookupSearchUsernames'] = '検索ユーザー名';
$lang['IPLookupHostname'] = 'ホスト名';
$lang['IPLookupHostnameNotFound'] = '対応するホスト名を見つけることができません。';
$lang['IPLookupUsernames'] = 'ユーザー名';
$lang['IPLookupUsernamesNotFound'] = '対応するユーザー名を見つけることができません。';

$lang['SQLToolboxWarningTitle'] = '重要な警告です!';
$lang['SQLToolboxWarningContent'] = '生の照会ツールは注意深く使ってください。ALTER、DELETE、TRUNCATE もしくは他の種類の照会の実行は取消せず、フォーラムを破損するかもしれません! 何を行うか分かる場合のみこれを使用してください。';
$lang['SQLToolboxExecuteQuery'] = '照会を実行する';
$lang['SQLToolboxExecuteQueryInfo'] = '実行する SQL を入力してください。結果は別のテキストボックスに表示されるでしょう。';
$lang['SQLToolboxExecute'] = '実行する';
$lang['SQLToolboxExecutedSuccessfully'] = '照会の実行に成功しました。';
$lang['SQLToolboxMaintenance'] = 'メンテナンス';
$lang['SQLToolboxMaintenanceInfo'] = 'これらの機能は、UseBB で使用する SQL テーブルを最適化(または修理)します。しばしばテーブルの十分な最適化が大きな掲示板で推奨されます。';
$lang['SQLToolboxRepairTables'] = 'テーブルを修復する';
$lang['SQLToolboxOptimizeTables'] = 'テーブルを最適化する';
$lang['SQLToolboxMaintenanceNote'] = '注意: これはデータベースのロストデータは復元できません。';

$lang['ModulesInfo'] = 'ACP モジュールはサードパーティプログラマーによって作成された機能か私たちの機能で ACP を有用に拡張します。モジュールは、UseBB ウェブサイトにて見つけることができます: %s.';
$lang['ModulesLongName'] = '長い名前';
$lang['ModulesShortName'] = '短い名前';
$lang['ModulesCategory'] = 'カテゴリ';
$lang['ModulesFilename'] = 'ファイル名';
$lang['ModulesDeleteNotPermitted'] = '実行できません';
$lang['ModulesDisabled'] = '掲示板の設定で ACP モジュールは無効になっています。';
$lang['ModulesNoneAvailable'] = 'モジュールはこの間中に利用可能ではありません。';
$lang['ModulesUpload'] = 'モジュールのアップロード';
$lang['ModulesUploadInfo'] = 'アップロードする UseBB ACP モジュールのローカルのファイル名を入力します。';
$lang['ModulesUploadDuplicateModule'] = 'ファイル名「%s」というモジュールは既に存在します。それをはじめに削除してください。';
$lang['ModulesUploadNoValidModule'] = 'ファイル「%s」は正しい UseBB モジュールではありません。';
$lang['ModulesUploadFailed'] = 'モジュール %s をインストールできません。コピーに失敗しました。';
$lang['ModulesUploadDisabled'] = 'モジュールディレクトリが書き込めません。アップロードが無効です。有効にし、ディレクトリ「%s」を作成し、ウェブサーバーで書き込めるようにします(chmod 777 を試す)';
$lang['ModulesConfirmModuleDelete'] = 'モジュール削除の確認';
$lang['ModulesConfirmModuleDeleteInfo'] = 'モジュール「%s(%s)」を本当に削除しますか?';

$lang['MembersSearchMember'] = '会員検索';
$lang['MembersSearchMemberInfo'] = '編集するユーザー名か表示名(の一部)を入力します。';
$lang['MembersSearchMemberExplain'] = 'ユーザー名か表示名';
$lang['MembersSearchMemberNotFound'] = '「%s」というユーザー名か表示名では会員が見つかりませんでした。';
$lang['MembersSearchMemberList'] = '次の会員が見つかりました';
$lang['MembersEditingMember'] = '会員「%s」の編集中';
$lang['MembersEditingMemberInfo'] = 'フォームのユーザー情報を送信して更新します。アスタリスク(*)でマークされた項目は必須です。';
$lang['MembersEditingMemberUsernameExists'] = 'ユーザー名「%s」はユーザー名か表示名で既に存在します。';
$lang['MembersEditingMemberDisplayedNameExists'] = '表示名「%s」はユーザー名か表示名で既に存在します。';
$lang['MembersEditingMemberBanned'] = '禁止';
$lang['MembersEditingMemberBannedReason'] = '禁止の理由';
$lang['MembersEditingMemberCantChangeOwnLevel'] = '自分のレベルを変更できません。';
$lang['MembersEditingMemberCantBanSelf'] = '自分自身を禁止にできません。';
$lang['MembersEditingComplete'] = '会員「%s」のプロファイルの編集に成功しました。';
$lang['MembersEditingLevelModInfo'] = 'モデレーターを作成するには、フォーラムの編集で、モデレーターの入力項目にメンバーのユーザー名を追加してください。';

$lang['DeleteMembersSearchMember'] = '会員検索';
$lang['DeleteMembersSearchMemberInfo'] = '削除するユーザー名か表示名(の一部)を入力します。';
$lang['DeleteMembersSearchMemberExplain'] = 'ユーザー名か表示名';
$lang['DeleteMembersSearchMemberNotFound'] = 'ユーザー名か表示名「%s」が会員で見つかりません。';
$lang['DeleteMembersSearchMemberList'] = '次の会員が見つかりました';
$lang['DeleteMembersConfirmMemberDelete'] = '会員削除の確認';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '会員「%s」を本当に削除しますか? これは取り消せません!';
$lang['DeleteMembersComplete'] = '会員「%s」の削除を完了しました。';

$lang['RegisterMembersExplain'] = 'ここで、あらかじめ会員アカウントを登録することができます。アカウントを作成するには、次の情報を埋めてください。';
$lang['RegisterMembersComplete'] = 'ユーザー「%s」の登録を完了しました。ユーザーはすぐにログインすることができます。';

$lang['ActivateMembersExplain'] = 'これはフォーラムの未アクティベートの会員の一覧です。ここで手動でアカウントの承認ができます。アカウントにアスタリスク(*)がマークされたものがアクティブ前です。';
$lang['ActivateMembersNoMembers'] = 'この掲示板に未アクティベートの会員アカウントはありません。';
$lang['ActivateMembersListAdmin'] = '管理者承認';
$lang['ActivateMembersListEmail'] = '電子メール承認';
$lang['ActivateMembersListAll'] = 'すべて';

$lang['PruneForumsStart'] = '除去開始';
$lang['PruneForumsExplain'] = 'フォーラムの除去で、古いトピックを削除するか移動させ、フォーラムをきれいにしておくことができます。';
$lang['PruneForumsForums'] = 'フォーラムを除去する';
$lang['PruneForumsAction'] = '操作';
$lang['PruneForumsActionLock'] = 'ロックする';
$lang['PruneForumsActionMove'] = '移動する';
$lang['PruneForumsActionDelete'] = '削除する';
$lang['PruneForumsMoveTo'] = '次にトピックを移動する';
$lang['PruneForumsTopicAge'] = 'Topic age';
$lang['PruneForumsTopicAgeField'] = '%s 日前に最後の返信です。';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '「移動する」フォーラムは除去に選択できません。';
$lang['PruneForumsConfirm'] = '確認';
$lang['PruneForumsConfirmText'] = 'この操作は戻せないことを理解しました。';
$lang['PruneForumsNotConfirmed'] = 'この操作をはじめに確認する必要があります。';
$lang['PruneForumsDone'] = '除去は完了しました。%d 個のトピックを除去しました。';
$lang['PruneForumsExcludeStickies'] = 'スティッキトピックを除外する';

$lang['PruneMembersExplain'] = 'By pruning members you can clean up the forum\'s user base by removing unactivated or inactive user accounts.';
$lang['PruneMembersTypeNeverActivated'] = 'まだアクティベートしていない会員';
$lang['PruneMembersRegisteredDaysAgo'] = '少なくとも %s 日前に登録しました。';
$lang['PruneMembersTypeNeverPosted'] = 'まだ投稿していない会員';
$lang['PruneMembersTypeInactive'] = '非アクティブな会員一覧';
$lang['PruneMembersLastLoggedIn'] = '少なくとも %d 日前に最後のログインしています。';
$lang['PruneMembersExclude'] = '除外';
$lang['PruneMembersConfirmText'] = '私はこの操作が不可逆であることを理解しています。';
$lang['PruneMembersStart'] = '除去を開始する';
$lang['PruneMembersNotConfirmed'] = 'この操作は初めに確認を必要とします。';
$lang['PruneMembersDone'] = '除去を完了しました。%d 件の会員を除去しました。';

$lang['DNSBLIPBansDisabled'] = 'IP アドレスでの禁止は無効です';
$lang['DNSBLIPBansDisabledInfo'] = 'DNSBL を用いた禁止処理は、IP アドレスの禁止を有効にしなければなりません。';
$lang['DNSBLGeneralInfo'] = 'オープンプロキシはスパムやメッセージの乱用にしばしば使用されます。UseBBの保護システムを使用すると、ほとんどのこれらのプロキシを自動的に検知し禁止することができます。Herefore blacklists are queried for information about the visitor\'s IP address.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'DNSBL による禁止を有効にする';
$lang['DNSBLServers'] = 'DNS ブラックリスト (DNSBL) サーバー';
$lang['DNSBLServersInfo'] = '1 行毎に 1 つの DNSBL を記述します。これらのブラックリストの多くの使用は、フォーラムで新しいセッションを作成する上で速度低下の原因になるかもしれないことに注意してください。';
$lang['DNSBLMinPositiveHits'] = 'IP アドレスを禁止するには、少なくとも実際に %s 個のヒットが必要です。';
$lang['DNSBLRecheckMinutes'] = '%s 秒毎に許可された IP アドレスを再確認する (0 で無効).';
$lang['DNSBLSettingsSaved'] = 'DNSBL 禁止設定を保存しました。';
$lang['DNSBLWhitelist'] = 'ホワイトリスト';
$lang['DNSBLWhitelistInfo'] = '1 つの IP アドレスか、行毎にホスト名 (ワイルドカードとして「*」と「?」を使うことができます)。';

$lang['BadwordsInfo'] = '禁止単語は最終的に(「*」で)部分一致を用いることで、フィルタリングか置換ができます。';
$lang['BadwordsDisabled'] = '禁止単語フィルターは無効です';
$lang['BadwordsDisabledInfo'] = '禁止単語フィルターはこのボードの設定で無効になっています。';
$lang['BadwordsNoBadwordsExist'] = 'このフォーラムはフィルターは存在しません。';
$lang['BadwordsAddBadwordWord'] = '単語';
$lang['BadwordsAddBadwordReplacement'] = '置換';

$lang['MassEmailInfo'] = 'すべての会員、または指定レベルのグループに電子メールを送信します。';
$lang['MassEmailRecipients'] = '受信者';
$lang['MassEmailRecipients-admins'] = '管理者';
$lang['MassEmailRecipients-mods'] = 'モデレータ';
$lang['MassEmailRecipients-members'] = '一般会員';
$lang['MassEmailSubject'] = '件名';
$lang['MassEmailBody'] = '本文';
$lang['MassEmailTemplate'] = 'こんにちは。

これは [board_name] のフォーラムソフトウェアから配信しています。
管理者が掲示板よりこの電子メールでメッセージを送信しています。
下記にメッセージ本文があります。

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = '%d 件の会員にメールを配信しました。';
$lang['MassEmailSent'] = '%2$d 件のメッセージを使用して %1$d 人に電子メールメッセージを配信しました';
$lang['MassEmailOptions'] = 'オプション';
$lang['MassEmailPublicEmailsOnly'] = '公開電子メールアドレスにのみ送信する';
$lang['MassEmailExcludeBanned'] = '禁止されたメンバーは除外する';

$lang['BansInfo'] = 'ここでフォーラムのほとんどすべての禁止をする局面の制御ができます。(「*」を用いて)部分一致ができます。個々のアカウントは、メンバー編集ペインによって禁止することができます。';
$lang['Bans-username'] = 'ユーザー名';
$lang['Bans-email'] = '電子メールアドレス';
$lang['Bans-ip_addr'] = 'IP アドレス';
$lang['BansUsername'] = 'ユーザー名';
$lang['BansEmail'] = '電子メールアドレス';
$lang['BansIp_addr'] = 'IP アドレス';
$lang['BansNoBansExist'] = 'この種類の禁止はこのフォーラムに存在しません。';
$lang['BansIPBansDisabledInfo'] = '掲示板の設定で、IP アドレスの禁止は無効です。';

?>
