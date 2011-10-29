<?php

/*
	SMF to UseBB Convertor - Copyright (C) 2005 Dietrich Moerman
	http://www.usebb.net
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

define('VERSION', '1.0');

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>SMF to UseBB Convertor '.VERSION.'</title>
<style type="text/css">
body {
	font-family: verdana, sans-serif;
	font-size: 10pt;
}
</style>
</head>
<body>
<h1>SMF to UseBB Convertor '.VERSION.'</h1>
';

error_reporting(E_ALL);
set_magic_quotes_runtime(1);
@ini_set('display_errors', '1');
@ini_set('mysql.trace_mode', '0');
@set_time_limit(@ini_get('max_execution_time'));

if ( !empty($_POST['usebb_path']) && !empty($_POST['smf_host']) && !empty($_POST['smf_user']) && !empty($_POST['smf_pw']) && !empty($_POST['smf_db']) && !empty($_POST['smf_prefix']) ) {
	
	define('INCLUDED', true);
	require($_POST['usebb_path'].'config.php');
	
	$smf_data = $last_post_ids = $topic_titles = array();
	$topics = $posts = $members = 0;
	$usebb_data = array(
		'forums' => array(),
		'cats' => array(),
		'members' => array(),
		'posts' => array(),
		'topics' => array()
	);
	
	function fetch($what) {
		
		global $smf_data;
		$smf_data[$what] = array();
		
		echo '<li>Fetching '.$what.'...</li>';
		flush();
		
		$result = mysql_query("SELECT * FROM ".$_POST['smf_prefix'].$what);
		while ( $out = mysql_fetch_array($result, MYSQL_ASSOC) )
			$smf_data[$what][] = $out;
		
	}
	
	function put($what) {
		
		global $usebb_data, $dbs;
		
		echo '<li>Putting '.$what.'...</li>';
		flush();
		
		mysql_query("DELETE FROM ".$dbs['prefix'].$what);
		$field_names = array();
		$i = 1;
		foreach ( $usebb_data[$what] as $item ) {
			
			$field_contents = array();
			foreach ( $item as $field_name => $field_content ) {
				
				if ( $i === 1 )
					$field_names[] = $field_name;
				$field_contents[] = "'".$field_content."'";
				
			}
			$query = "INSERT INTO ".$dbs['prefix'].$what." (".join(', ', $field_names).") VALUES (".join(', ', $field_contents).")";
			mysql_query($query);
			$i++;
			
		}
		unset($usebb_data[$what]);
		
	}
	
	function sanatize_body($body) {
		
		$body = str_replace('&nbsp;', ' ', $body);
		$body = str_replace('&quot;', '"', $body);
		$body = str_replace('&lt;', '<', $body);
		$body = str_replace('&gt;', '>', $body);
		$body = str_replace('&amp;', '&', $body);
		$body = str_replace('<br />', "\n", $body);
		$body = preg_replace(array('#\[quote author=(.+) link=.+ date=[0-9]+\]\s*#', '#\[img( (width|height)=[0-9]+){0,2}\]#', '#\[size=([0-9]+)pt\]#', '#\[iurl\]#', '#\[/iurl\]#'), array('[quote=\\1]', '[img]', '[size=\\1]', '[url]', '[/url]'), $body);
		return $body;
		
	}
	
	mysql_connect($_POST['smf_host'], $_POST['smf_user'], $_POST['smf_pw']);
	mysql_select_db($_POST['smf_db']);
	
	echo '<h2>Running convertor</h2><ul>';
	
	fetch('boards');
	fetch('categories');
	fetch('members');
	fetch('messages');
	fetch('topics');
	
	mysql_close();
	mysql_connect($dbs['server'], $dbs['username'], $dbs['passwd']);
	mysql_select_db($dbs['dbname']);
	
	foreach ( $smf_data['boards'] as $smf_board ) {
		
		$usebb_data['forums'][] = array(
			'id' => $smf_board['ID_BOARD'],
			'name' => sanatize_body($smf_board['name']),
			'cat_id' => $smf_board['ID_CAT'],
			'descr' => $smf_board['description'],
			'topics' => $smf_board['numTopics'],
			'posts' => $smf_board['numPosts'],
			'sort_id' => $smf_board['boardOrder'],
		);
		$last_post_ids[$smf_board['ID_BOARD']] = $smf_board['ID_LAST_MSG'];
		
	}
	put('forums');
	
	foreach ( $smf_data['categories'] as $smf_category ) {
		
		$usebb_data['cats'][] = array(
			'id' => $smf_category['ID_CAT'],
			'name' => sanatize_body($smf_category['name']),
			'sort_id' => $smf_category['catOrder']
		);
		
	}
	put('cats');
	
	foreach ( $smf_data['members'] as $smf_member ) {
		
		$usebb_data['members'][] = array(
			'id' => $smf_member['ID_MEMBER'],
			'name' => preg_replace('#[^A-Za-z0-9_\-]#', '', str_replace(' ', '_', $smf_member['memberName'])),
			'email' => $smf_member['emailAddress'],
			'email_show' => ( $smf_member['hideEmail'] ) ? 0 : 1,
			'passwd' => $smf_member['passwd'],
			'regdate' => $smf_member['dateRegistered'],
			'level' => ( intval($smf_member['ID_GROUP']) === 1 ) ? 3 : 1,
			'rank' => $smf_member['usertitle'],
			'active' => $smf_member['is_activated'],
			'active_key' => ( !empty($smf_member['validation_code']) ) ? md5($smf_member['validation_code']) : '',
			'last_login' => $smf_member['lastLogin'],
			'hide_from_online_list' => ( $smf_member['showOnline'] ) ? 0 : 1,
			'posts' => $smf_member['posts'],
			'template' => $conf['template'],
			'language' => $conf['language'],
			'date_format' => $conf['date_format'],
			'timezone' => $smf_member['timeOffset'],
			'enable_quickreply' => $conf['enable_quickreply'],
			'return_to_topic_after_posting' => $conf['return_to_topic_after_posting'],
			'target_blank' => $conf['target_blank'],
			'hide_avatars' => $conf['hide_avatars'],
			'hide_userinfo' => $conf['hide_userinfo'],
			'hide_signatures' => $conf['hide_signatures'],
			'avatar_type' => ( !empty($smf_member['avatar']) ) ? 1 : 0,
			'avatar_remote' => $smf_member['avatar'],
			'displayed_name' => $smf_member['realName'],
			'signature' => sanatize_body($smf_member['signature']),
			'birthday' => str_replace('-', '', $smf_member['birthdate']),
			'location' => $smf_member['location'],
			'website' => $smf_member['websiteUrl'],
			'msnm' => $smf_member['MSN'],
			'yahoom' => $smf_member['YIM'],
			'aim' => $smf_member['AIM'],
			'icq' => $smf_member['ICQ'],
		);
		$members++;
		
	}
	put('members');
	
	foreach ( $smf_data['messages'] as $smf_message ) {
		
		$usebb_data['posts'][] = array(
			'id' => $smf_message['ID_MSG'],
			'topic_id' => $smf_message['ID_TOPIC'],
			'poster_id' => $smf_message['ID_MEMBER'],
			'poster_guest' => ( !$smf_message['ID_MEMBER'] ) ? preg_replace('#[^A-Za-z0-9_\-]#', '', str_replace(' ', '_', $smf_message['posterName'])) : '',
			'poster_ip_addr' => $smf_message['posterIP'],
			'content' => sanatize_body($smf_message['body']),
			'post_time' => $smf_message['posterTime'],
			'post_edit_time' => $smf_message['modifiedTime'],
			'post_edit_by' => 0,
			'enable_smilies' => $smf_message['smileysEnabled'],
		);
		if ( !isset($topic_titles[$smf_message['ID_TOPIC']]) )
			$topic_titles[$smf_message['ID_TOPIC']] = sanatize_body($smf_message['subject']);
		$posts++;
		
	}
	put('posts');
	
	foreach ( $smf_data['topics'] as $smf_topic ) {
		
		$usebb_data['topics'][] = array(
			'id' => $smf_topic['ID_TOPIC'],
			'forum_id' => $smf_topic['ID_BOARD'],
			'first_post_id' => $smf_topic['ID_FIRST_MSG'],
			'last_post_id' => $smf_topic['ID_LAST_MSG'],
			'count_replies' => $smf_topic['numReplies'],
			'count_views' => $smf_topic['numViews'],
			'status_locked' => $smf_topic['locked'],
			'status_sticky' => $smf_topic['isSticky'],
		);
		$topics++;
		
	}
	put('topics');
	
	//
	// This is something extra to adjust the last topic id
	// because we only have the last post id
	//
	echo '<li>Fixing last topic ID\'s...</li>';
	flush();
	foreach ( $last_post_ids as $forum_id => $post_id ) {
		
		$result = mysql_query("SELECT topic_id FROM ".$dbs['prefix']."posts WHERE id = ".$post_id);
		$out = mysql_fetch_array($result);
		$topic_id = $out['topic_id'];
		mysql_query("UPDATE ".$dbs['prefix']."forums SET last_topic_id = ".$topic_id." WHERE id = ".$forum_id);
		
	}
	unset($last_post_ids);
	
	//
	// This is something extra to adjust the topic titles
	// because we only have topic titles with the messages
	//
	echo '<li>Fixing topic titles...</li>';
	flush();
	foreach ( $topic_titles as $topic_id => $topic_title ) {
		
		mysql_query("UPDATE ".$dbs['prefix']."topics SET topic_title = '".$topic_title."' WHERE id = ".$topic_id);
		
	}
	unset($topic_titles);
	
	//
	// Update the statistics
	//
	echo '<li>Adjusting statistics...</li>';
	flush();
	mysql_query("UPDATE ".$dbs['prefix']."stats SET content = ".$topics." WHERE name = 'topics'");
	mysql_query("UPDATE ".$dbs['prefix']."stats SET content = ".$posts." WHERE name = 'posts'");
	mysql_query("UPDATE ".$dbs['prefix']."stats SET content = ".$members." WHERE name = 'members'");
	$result = mysql_query("SELECT regdate FROM ".$dbs['prefix']."members WHERE regdate > 0 ORDER BY regdate ASC LIMIT 1");
	$out = mysql_fetch_array($result);
	mysql_query("UPDATE ".$dbs['prefix']."stats SET content = ".$out['regdate']." WHERE name = 'started'");
	
	//
	// Emptying some old data (eventually)
	//
	echo '<li>Removing old data in UseBB\'s tables...</li>';
	flush();
	mysql_query("DELETE FROM ".$dbs['prefix']."moderators");
	mysql_query("DELETE FROM ".$dbs['prefix']."searches");
	mysql_query("DELETE FROM ".$dbs['prefix']."sessions");
	mysql_query("DELETE FROM ".$dbs['prefix']."subscriptions");
	
	echo '</ul><p><strong>Done!</strong> You may now want to check out your <a href="'.$_POST['usebb_path'].'">converted forum</a>.</p>
';
	
} else {
	
	echo '<h2>What does this do?</h2>
<p>This convertor program will convert categories, boards, topics, messages and members of your SMF 1.x install to UseBB. It will, however, <strong>NOT</strong> keep:</p>
<ul>
	<li>the hierarchy of the boards (i.e. child boards);</li>
	<li>the permissions of the boards (all boards become default UseBB permissions = <strong>world-readable</strong>);</li>
	<li>the topic subscriptions of the members;</li>
	<li>the permissions of members, except for admins which will also be admins on UseBB;</li>
	<li>any other content such as bans, instant messages, logs, ...</li>
</ul>
<p>Please keep this in mind before converting your forum. Converting a SMF board will not delete or alter the content in SMF\'s database, so you have nothing to lose.</p>

<h2>Important note!</h2>
<p>Because SMF uses a different manner of encrypting member\'s passwords, your users will have to request a new password via the link on the login form! Also, UseBB accepts less characters in the login name than SMF does, any characters not in <code>A-Za-z0-9_-</code> will be stripped, and spaces become <code>_</code>. The displayed name is not altered. Please note this to your users.</p>

<h2>Start convertor</h2>
<p><strong>Before</strong> starting the convertor, first install a base UseBB installation. See the <code>INSTALL</code> file included with UseBB.</p>
<form action="'.$_SERVER['PHP_SELF'].'" method="post">
<table>
	<tr><td>Path to UseBB installation</td><td><input type="text" name="usebb_path" /> <small>(&quot;<code>./</code>&quot; if in the same directory; include trailing slash!)</small></td></tr>
	<tr><td>SMF MySQL server name</td><td><input type="text" name="smf_host" /> <small>(mostly &quot;<code>localhost</code>&quot;)</small></td></tr>
	<tr><td>SMF MySQL username</td><td><input type="text" name="smf_user" /></td></tr>
	<tr><td>SMF MySQL password</td><td><input type="password" name="smf_pw" /></td></tr>
	<tr><td>SMF MySQL database name</td><td><input type="text" name="smf_db" /></td></tr>
	<tr><td>SMF MySQL table prefix</td><td><input type="text" name="smf_prefix" /> <small>(mostly &quot;<code>smf_</code>&quot;)</small></td></tr>
</table>
<p><input type="submit" value="Start convertor" /></p>
</form>';
	
}

echo '<p><small>Copyright &copy; 2005 Dietrich Moerman</small></p>
</body>
</html>';

?>