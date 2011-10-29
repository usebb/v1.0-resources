<?php
/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/sources/common.php,v 1.38 2005/02/18 18:56:24 pc_freak Exp $
	
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

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Check PHP version by checking the presence of version_compare()
// (available since PHP 4.1.0)
//
if ( !function_exists('version_compare') )
	die('<h1>Warning!</h1><p>UseBB does not work on PHP '.phpversion().'. You need at least <strong>4.1.0</strong>. Get a recent version from <a href="http://www.php.net/downloads.php">PHP.net</a>.</p>');

//
// Timer for checking parsetime
//
$timer['begin'] = explode(' ', microtime());
$timer['begin'] = (float)$timer['begin'][1] + (float)$timer['begin'][0];

//
// Show all errors so that we avoid making stupid
// but dangerous mistakes + disable that annoying
// magic quotes runtime.
//
error_reporting(E_ALL && ~E_NOTICE);
set_magic_quotes_runtime(0);

//
// Include all necessary files
//
require(ROOT_PATH.'sources/functions.php');
require(ROOT_PATH.'config.php');
require(ROOT_PATH.'sources/session.php');
require(ROOT_PATH.'sources/template.php');

//
// Define some constants
//
define('TABLE_PREFIX', $dbs['prefix']);
define('USEBB_VERSION', '0.3.2');
define('USER_PREG', '#^[a-z0-9\.\-\+\[\]_ ]+$#is');
define('EMAIL_PREG', '#^[a-z0-9&\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+$#is');
define('PWD_PREG', '#^[^\'\"\s]+$#is');
define('WEB_PREG', '#^[\w]+?://[^ \"\n\r\t<]*?$#is');
define('IMG_PREG', '#^[\w]+?://[^ \"\n\r\t<]*?\.(gif|png|jpe?g)$#is');

//
// Create objects
//
$functions = new functions;
$session = new session;
$template = new template;

//
// Load the database class
//
$db_class_file = ROOT_PATH.'sources/db_'.$dbs['type'].'.php';
if ( !file_exists($db_class_file) || !is_readable($db_class_file) )
	$functions->usebb_die('General', 'Unable to load module for database server "'.$dbs['type'].'"!', __FILE__, __LINE__);
else
	require($db_class_file);

//
// Create objects
//
$db = new db;

//
// Set the UseBB error handler
//
function error_handler($errno, $error, $file, $line) {
	
	//
	// We use this workaround to make the error handler work
	// on < PHP 4.3.0. These older versions do not accept an 
	// array containing a link to a function inside a class.
	//
	
	global $functions;
	$functions->usebb_die($errno, $error, $file, $line);
	
}
set_error_handler('error_handler');

//
// Activate gzip compression if needed, BEFORE doing a session_start()
//
if ( !defined('NO_GZIP') && ( $functions->get_config('output_compression') === 2 || $functions->get_config('output_compression') === 3 ) && !ini_get('zlib.output_compression') )
	ob_start('ob_gzhandler');

//
// Add slashes to get, post and cookie variables if magic
// quotes gpc is off. This is necessary for security reasons.
//
if ( !get_magic_quotes_gpc() ) {
	
	$_GET = $functions->slashes_to_global($_GET); // slashes to get vars
	$_POST = $functions->slashes_to_global($_POST); // slashes to post vars
	$_COOKIE = $functions->slashes_to_global($_COOKIE); // slashes to cookie vars
	
}
	
//
// Trim get, post and cookie variables
//
$_GET = $functions->trim_global($_GET); // trim get vars
$_POST = $functions->trim_global($_POST); // trim post vars
$_COOKIE = $functions->trim_global($_COOKIE); // trim cookie vars

//
// Connect to DB
//
$db->connect($dbs);

//
// Start/continue session
//
$session->start();

$bbcodes_panel = "
<script language=\"javascript\" type=\"text/javascript\">
<!--
// Define the bbCode tags
bbcode = new Array();
bblast = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[img]','[/img]','[url]','[/url]');
imageTag = false;
//-->
</script>
<script language=\"javascript\" type=\"text/javascript\" src=\"./editor.js\"></script>
<table cellspacing=\"1\" cellpadding=\"1\" border=\"0\" class=\"maintable\">
<tr>
    <td><input type=\"button\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 0, '{form}.{element}')\"/></td>
    <td><input type=\"button\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 2, '{form}.{element}')\" /></td>
    <td><input type=\"button\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 4, '{form}.{element}')\" /></td>
    <td><input type=\"button\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 6, '{form}.{element}')\" /></td>
    <td><input type=\"button\" accesskey=\"Q\" name=\"addbbcode6\" value=\"Quote selection\" style=\"width: 100%\" onclick=\"addquote(document.forms['{form}'].elements['{element}'])\" /></td>
    <td><input type=\"button\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 8, '{form}.{element}')\" /></td>
    <td><input type=\"button\" accesskey=\"p\" name=\"addbbcode10\" value=\"Image\" style=\"width: 100%\"  onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 10, '{form}.{element}')\" /></td>
    <td><input type=\"button\" accesskey=\"w\" name=\"addbbcode12\" value=\"URL\" style=\"text-decoration: underline; width: 100%\" onclick=\"bbstyle(document.forms['{form}'].elements['{element}'], 12, '{form}.{element}')\" /></td>
</tr>
<tr>
    <td colspan=\"8\" align=\"center\"><a href=\"javascript:bbstyle(document.forms['{form}'].elements['{element}'], -1, '{form}.{element}')\">Close tags</a></td>
</tr>
</table>";
?>
