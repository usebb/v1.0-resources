<?php

/*
	Copyright (C) 2003-2004 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/sources/panel_activate.php,v 1.6 2004/04/05 09:37:24 pc_freak Exp $
	
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

$ModVersion = "1.0b";

require(ROOT_PATH.'AddALang/addlanguage.php');

if(USEBB_VERSION != '0.2')
	$functions->usebb_die(''. $lang['ErrorType'] .'', ''. $lang['ErrorVer'] .'', __FILE__, __LINE__);

Function EndMsg($Message) {
	echo "<script language=\"JavaScript\">alert('$Message')</script>";
}

Function LangFiles() {
	$langs = "";
	$files_array = array();
        $handle = opendir("AddALang/langfiles/");
  	while (false !== ($file = readdir($handle))) {
    		if ($file != "." && $file != "..") {
			if (substr($file, -4) == '.lng') {
      				$file = str_replace(".lng","",$file);
      				array_push($files_array, $file);
			}
    		}
  	}
  	foreach ($files_array as $value) {
		$langs .= "		<option value=\"$value\">$value</option>\n";
  	}
	echo $langs; 
}
$i = 0;
if(isset($_POST['submit'])) {
	$langfile = $_POST['langfile'];
	include_once("langfiles/$langfile.lng");
	While(list($key, $val) = each($language)) { 
		if(isset($_POST['overwrite'])) {
			$db->query("DELETE FROM ".TABLE_PREFIX."language WHERE (name='$key' && language='$langfile' && content='$val')");
			$db->query("INSERT INTO ".TABLE_PREFIX."language (name, language, content) VALUES ('$key', '$langfile', '$val')");
			$Msg = str_replace("%s","$langfile",$lang['AddComp']);
			if(isset($_POST['default'])) {
				$db->query("UPDATE ".TABLE_PREFIX."config SET content='$langfile' WHERE name='language'");
			}
		} else {
			if(($db->num_rows($db->query("SELECT * FROM ".TABLE_PREFIX."language WHERE (name='$key' && language='$langfile' && content='$val')"))) != 1) {
				$db->query("INSERT INTO ".TABLE_PREFIX."language (name, language, content) VALUES ('$key', '$langfile', '$val')");
				$Msg = str_replace("%s","$langfile",$lang['AddComp']);
				if(isset($_POST['default'])) {
					$db->query("UPDATE ".TABLE_PREFIX."config SET language='$langfile' WHERE name='language'");
				}
			} else {
				$Msg = $lang['AddFailed'];
			}
		}
	} 
EndMsg($Msg);
}

include("html.php");
?>

