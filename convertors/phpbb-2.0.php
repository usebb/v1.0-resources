<?php

/*
	phpBB 2.0.x to UseBB Convertor - Copyright (C) 2006 Dietrich Moerman
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

/*

Alpha 3 Changelog
-------------------------

- Convert bans
- Convert disallowed names
- Convert word censors
- Convert moderator permissions
- Fix entities in [code] tags
- Optimize database queries

Alpha 2 Changelog
-------------------------

- Fix anonymous posts
- Fix [url=www... tags
- Fix admin levels
- Fix huge memory usage
- Fix not all emptied tables
- Correctly set started stat value

*/

define('VERSION', 'Alpha 3');

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>phpBB to UseBB convertor '.VERSION.'</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
	<style type="text/css">
		html, body {
			margin: 0;
			padding: 0;
		}
		body {
			font-family: arial, sans-serif;
			font-size: 11pt;
			border-top: 2px solid #369;
			padding: 25px;
			padding-bottom: 0;
		}
		#wrapper {
			width: 750px;
			margin: 0 auto 0 auto;
		}
		h1, h2, h3 {
			color: #666;
			font-family: "Trebuchet MS", sans-serif;
		}
		h1 {
			margin: 0;
			color: #369;
			text-align: right;
			border-bottom: 1px solid silver;
			padding-bottom: 5px;
			font-size: 20pt;
		}
		h2 {
			font-size: 16pt;
		}
		h3 {
			font-size: 12pt;
		}
		code {
			font-size: smaller;
		}
		#submit {
			text-align: center;
			padding: 4px;
			background-color: #e8e8e8;
		}
		#submit input {
			padding: 2px 14px 2px 14px;
			font-weight: bold;
		}
		#copyright {
			color: #999;
			font-style: italic;
			text-align: center;
			font-size: 10pt;
		}
	</style>
</head>
<body>
<div id="wrapper">

<h1>phpBB to UseBB convertor '.VERSION.'</h1>
';

error_reporting(E_ALL);
set_magic_quotes_runtime(1);
@ini_set('display_errors', '1');
@set_time_limit(0);

if ( !empty($_POST['usebb_path']) && !empty($_POST['phpbb_host']) && !empty($_POST['phpbb_user']) && !empty($_POST['phpbb_pw']) && !empty($_POST['phpbb_db']) && !empty($_POST['phpbb_prefix']) ) {
	
	echo '<p>Busy converting:</p><ul><li>Creating database connections...</li>';
	flush();
	
	define('INCLUDED', true);
	require($_POST['usebb_path'].'config.php');
	
	//
	// Load the database class
	//
	$db_class_file = $_POST['usebb_path'].'sources/db_'.$dbs['type'].'.php';
	if ( !file_exists($db_class_file) || !is_readable($db_class_file) )
		trigger_error('Unable to load module for database server "'.$dbs['type'].'"!', E_USER_ERROR);
	require($db_class_file);
	
	//
	// Connect to DB (UseBB)
	//
	$db_usebb = new db;
	$db_usebb->connect($dbs);
	
	//
	// Connect to DB (phpBB)
	//
	$db_phpbb = new db;
	$db_phpbb->connect(array(
		'server' => $_POST['phpbb_host'],
		'username' => $_POST['phpbb_user'],
		'passwd' => $_POST['phpbb_pw'],
		'dbname' => $_POST['phpbb_db']
	));
	
	//
	// IP decode procedure (from phpBB 2.0.x)
	//
	function decode_ip($int_ip) {
		
		$hexipbang = explode('.', chunk_split($int_ip, 2, '.'));
		return hexdec($hexipbang[0]). '.' . hexdec($hexipbang[1]) . '.' . hexdec($hexipbang[2]) . '.' . hexdec($hexipbang[3]);
		
	}
	
	//
	// Switch on/off
	//
	function switch_var(&$var) {
		
		$var = ( (bool)$var === true ) ? 0 : 1;
		
	}
	
	//
	// BBCode tags clean
	//
	function bbcode_clean($string) {
		
		return preg_replace(array('#\[(/?[^:]+):[a-z0-9:]+([^\]]*)\]#i', '#\[quote=\\\"([^"]+)\\\"\]#i', '#\[url=(www\.[^\]]+)\]#i'), array('[\\1\\2]', '[quote=\\1]', '[url=http://\\1]'), $string);
		
	}
	
	$entity_table = array_flip(get_html_translation_table(HTML_ENTITIES));
	
	//
	// Undo HTML etities
	// fixme: needs more ones
	//
	function undo_entities($string, $is_post=false) {
		
		global $entity_table;
		
		$string = strtr($string, $entity_table);
		
		if ( !$is_post )
			return $string;
		
		preg_match_all("#\[code\](.*?)\[/code\]#is", $string, $matches);
		foreach ( $matches[1] as $oldpart ) {
			
			$newpart = preg_replace('/&#(\d+);/me', "chr('\\1')", $oldpart);
			$string = str_replace('[code]'.$oldpart.'[/code]', '[code]'.$newpart.'[/code]', $string);
			
		}
		
		return $string;
		
	}
	
	$stats = array('members' => 0, 'topics' => 0, 'posts' => 0, 'started' => 0);
	
	//
	// Empty existing tables
	//
	echo '<li>Emptying existing tables...</li>';
	flush();
	foreach ( array('badwords', 'bans', 'cats', 'forums', 'members', 'moderators', 'posts', 'searches', 'sessions', 'stats', 'subscriptions', 'topics') as $table )
		$db_usebb->query("TRUNCATE ".$dbs['prefix'].$table);
	
	//
	// Convert users
	//
	echo '<li>Converting members...';
	flush();
	$admins = array();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."users WHERE user_id >= 1 ORDER BY user_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
				
		$out['username'] = preg_replace('#[^a-z0-9_\- ]#i', '', $out['username']);
		
		if ( $out['user_level'] == 1 ) {
			
			$out['user_level'] = 3;
			$admins[] = $out['username'];
			
		} else {
			
			$out['user_level'] = 1;
			
		}
		
		switch_var($out['user_allow_viewonline']);
		$out['user_sig'] = bbcode_clean($out['user_sig']);
		
		if ( $out['user_avatar_type'] == 2 ) {
			
			$out['user_avatar_type'] = 1;
			
		} else {
			
			$out['user_avatar_type'] = 0;
			$out['user_avatar'] = '';
			
		}
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."members VALUES(".$out['user_id'].", '".$out['username']."', '".$out['user_email']."', ".$out['user_viewemail'].", '".$out['user_password']."', ".$out['user_regdate'].", ".$out['user_level'].", '', ".$out['user_active'].", '".$out['user_actkey']."', 0, '', ".$out['user_lastvisit'].", 0, ".$out['user_lastvisit'].", ".$out['user_allow_viewonline'].", ".$out['user_posts'].", 'default', 'English', '".$out['user_dateformat']."', ".$out['user_timezone'].", 0, 1, 1, 0, 0, 0, 0, ".$out['user_notify'].", ".$out['user_notify'].", ".$out['user_avatar_type'].", '".$out['user_avatar']."', '".$out['username']."', '', '".$out['user_sig']."', 0, '".$out['user_from']."', '".$out['user_website']."', '".$out['user_occ']."', '".$out['user_interests']."', '".$out['user_msnm']."', '".$out['user_yim']."', '".$out['user_aim']."', '".$out['user_icq']."', '', '')", false, false);
		
		$stats['members']++;
		
		if ( !$stats['started'] )
			$stats['started'] = $out['user_regdate'];
		
	}
	echo '<ul><li>Administrators are: <em>'.join(', ', $admins).'</em></li></ul></li>';
	flush();
	
	//
	// Convert categories
	//
	echo '<li>Converting categories...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."categories ORDER BY cat_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."cats VALUES(".$out['cat_id'].", '".$out['cat_title']."', ".$out['cat_order'].")", false, false);
		
	}
	
	//
	// Convert forums
	//
	echo '<li>Converting forums...</li>';
	flush();
	$result = $db_phpbb->query("SELECT f.*, p.topic_id FROM ".$_POST['phpbb_prefix']."forums f, ".$_POST['phpbb_prefix']."posts p WHERE p.post_id = f.forum_last_post_id ORDER BY forum_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		switch_var($out['forum_status']);
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."forums VALUES(".$out['forum_id'].", '".$out['forum_name']."', ".$out['cat_id'].", '".$out['forum_desc']."', ".$out['forum_status'].", ".$out['forum_topics'].", ".$out['forum_posts'].", ".$out['topic_id'].", ".$out['forum_order'].", '0011222223', 0, 1, 0)", false, false);
		
	}
	
	//
	// Convert topics
	//
	echo '<li>Converting topics...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."topics ORDER BY topic_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		if ( $out['topic_type'] == 2 ) {
			
			$out['topic_title'] = strtoupper($out['topic_title']);
			$out['topic_type'] = 1;
			
		}
		
		if ( $out['topic_status'] == 2 )
			continue;
		
		$out['topic_title'] = undo_entities($out['topic_title']);
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."topics VALUES(".$out['topic_id'].", ".$out['forum_id'].", '".$out['topic_title']."', ".$out['topic_first_post_id'].", ".$out['topic_last_post_id'].", ".$out['topic_replies'].", ".$out['topic_views'].", ".$out['topic_status'].", ".$out['topic_type'].")", false, false);
		
		$stats['topics']++;
		
	}
	
	//
	// Convert posts
	//
	echo '<li>Converting posts...<ul>';
	flush();
	$result = $db_phpbb->query("SELECT p.*, t.post_text FROM ".$_POST['phpbb_prefix']."posts p, ".$_POST['phpbb_prefix']."posts_text t WHERE t.post_id = p.post_id ORDER BY post_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		if ( $out['poster_id'] == -1 ) {
			
			$out['poster_id'] = 0;
			$out['post_username'] = ( !empty($out['post_username']) ) ? $out['post_username'] : 'Guest';
			
		}
		
		$out['poster_ip'] = decode_ip($out['poster_ip']);
		$out['post_edit_time'] = ( is_int($out['post_edit_time']) ) ? $out['post_edit_time'] : 0;
		$out['post_text'] = undo_entities(bbcode_clean($out['post_text']), true);
		 
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."posts VALUES(".$out['post_id'].", ".$out['topic_id'].", ".$out['poster_id'].", '".$out['post_username']."', '".$out['poster_ip']."', '".$out['post_text']."', ".$out['post_time'].", ".$out['post_edit_time'].", 0, ".$out['enable_bbcode'].", ".$out['enable_smilies'].", ".$out['enable_sig'].", ".$out['enable_html'].")", false, false);
		
		$stats['posts']++;
		
		if ( $stats['posts'] % 10000 == 0 ) {
			
			echo '<li>'.$stats['posts'].' posts</li>';
			flush();
			
		}
		
	}
	echo '</ul></li>';
	flush();
	
	//
	// Convert subscriptions
	//
	echo '<li>Converting subscriptions...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."topics_watch");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."subscriptions VALUES(".$out['topic_id'].", ".$out['user_id'].")", false, false);
		
	}
	
	//
	// Convert bans
	//
	echo '<li>Converting bans...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."banlist ORDER BY ban_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		if ( !empty($out['ban_userid']) ) {
			
			$db_usebb->query("UPDATE ".$dbs['prefix']."members SET banned = 1 WHERE id = ".$out['ban_userid']);
			
		} elseif ( !empty($out['ban_ip']) ) {
			
			$out['ban_ip'] = str_replace('255', '*', decode_ip($out['ban_ip']));
			$db_usebb->query("INSERT INTO ".$dbs['prefix']."bans VALUES(NULL, '', '', '".$out['ban_ip']."')");
			
		} elseif ( !empty($out['ban_email']) ) {
			
			$db_usebb->query("INSERT INTO ".$dbs['prefix']."bans VALUES(NULL, '', '".$out['ban_email']."', '')");
			
		}
		
	}
	
	//
	// Convert disallowed usernames
	//
	echo '<li>Converting disallowed usernames...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."disallow ORDER BY disallow_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."bans VALUES(NULL, '".$out['disallow_username']."', '', '')");
		
	}
	
	//
	// Convert word censors
	//
	echo '<li>Converting word censors...</li>';
	flush();
	$result = $db_phpbb->query("SELECT * FROM ".$_POST['phpbb_prefix']."words");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."badwords VALUES('".$out['word']."', '".$out['replacement']."')");
		
	}
	
	//
	// Convert moderator permissions
	//
	echo '<li>Converting moderator permissions...</li>';
	flush();
	$mods = array();
	$result = $db_phpbb->query("SELECT u.user_id, a.forum_id FROM ".$_POST['phpbb_prefix']."auth_access a, ".$_POST['phpbb_prefix']."groups g, ".$_POST['phpbb_prefix']."user_group u WHERE a.auth_mod = 1 AND g.group_single_user = 1 AND u.group_id = g.group_id AND g.group_id = a.group_id");
	while ( $out = $db_phpbb->fetch_result($result) ) {
		
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."moderators VALUES(".$out['forum_id'].", ".$out['user_id'].")");
		
		if ( !in_array($out['user_id'], $mods) ) {
			
			$db_usebb->query("UPDATE ".$dbs['prefix']."members SET level = 2 WHERE level = 1 AND id = ".$out['user_id']);
			$mods[] = $out['user_id'];
			
		}
		
	}
	
	//
	// Adjust stats
	//
	echo '<li>Adjusting statistics...</li>';
	flush();
	foreach ( $stats as $key => $val )
		$db_usebb->query("INSERT INTO ".$dbs['prefix']."stats VALUES ('".$key."', ".$val.")");
	
	$db_usebb->disconnect();
	$db_phpbb->disconnect();
	
	echo '</ul><p><strong>Done!</strong> Successfully converted '.$stats['posts'].' posts. You may now want to check out your <a href="'.$_POST['usebb_path'].'">converted forum</a>.</p>';
	
	echo "\n\n".'<!-- '.round(( memory_get_usage() / 1024 / 1024 ), 4).' MB -->'."\n\n";
	
} else {
	
	echo '<h2>What does this do?</h2>
<p>This convertor program will convert members, categories, forums, topics, posts, topic subscriptions, IP &amp; email address bans, disallowed usernames and word censors of your phpBB 2.0.x install to UseBB. It will, however, <strong>NOT</strong> (yet) keep:</p>
<ul>
	<li>the permissions of the forums (all forums become <strong>world-readable</strong>);</li>
	<li>custom moderation permissions (unsupported in UseBB);</li>
	<li>any other unsupported content such as instant messages and polls.</li>
</ul>
<p>Please keep this in mind before converting your forum. Converting a phpBB board will not delete or alter the content in phpBB\'s database, so you have nothing to lose.</p>

<h3>TODO</h3>
<p>Convert...</p>
<ul>
	<li>forum authorization settings;</li>
</ul>
<p>Please check <a href="http://www.usebb.net/community/">UseBB.net</a> for version updates on this convertor script. If you can help with the development of this convertor, feel free to post your modified version on the forums.</p>

<h2>Important note!</h2>
<p>This convertor needs at least UseBB <strong>1.0 <em>RC3</em></strong>!</p>
<p>UseBB accepts less characters in the login name than phpBB does, any characters not in <code>A-Za-z0-9_-</code> will be stripped. The displayed name is not altered. Please note this to your users.</p>

<h2>Start convertor</h2>
<p><strong>Before</strong> starting the convertor, first install a base UseBB installation. See the <code>docs/index.html</code> file included with UseBB.</p>
<p><strong>Note:</strong> only <strong>MySQL</strong> is supported!</p>
<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">
<table>
	<tr><td>Path to UseBB installation</td><td><input type="text" name="usebb_path" /> <small>(&quot;<code>./</code>&quot; if in the same directory; include trailing slash!)</small></td></tr>
	<tr><td>phpBB MySQL server name</td><td><input type="text" name="phpbb_host" /> <small>(mostly &quot;<code>localhost</code>&quot;)</small></td></tr>
	<tr><td>phpBB MySQL username</td><td><input type="text" name="phpbb_user" /></td></tr>
	<tr><td>phpBB MySQL password</td><td><input type="password" name="phpbb_pw" /></td></tr>
	<tr><td>phpBB MySQL database name</td><td><input type="text" name="phpbb_db" /></td></tr>
	<tr><td>phpBB MySQL table prefix</td><td><input type="text" name="phpbb_prefix" /> <small>(mostly &quot;<code>phpbb_</code>&quot;)</small></td></tr>
</table>
<p>Everything filled in correctly?</p>
<p id="submit"><input type="submit" value="Start convertor" /></p>
</form>';
	
}

echo '<p id="copyright">Copyright &copy; 2006 Dietrich Moerman</p>
</div>
</body>
</html>';

?>