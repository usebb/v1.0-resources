<?php

/*
	UseBB 1 active members ACP module 1.1
	Copyright (C) 2007 Dietrich Moerman
	Released under the GNU GPL v2
*/

$usebb_module_info = array(
	'short_name' => 'active_members',
	'long_name' => 'Show Active Members',
	'acp_category' => 'members',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function run_module() {
			
			global $functions, $template, $db;
			
			$out = '<form action="'.$functions->make_url('admin.php', array('act' => 'mod_active_members')).'" method="post">'
				.'<p>Show active members in last <input type="text" name="hours" id="hours" size="4" maxlength="5" value="'
				.( ( !empty($_POST['hours']) && valid_int($_POST['hours']) ) ? $_POST['hours'] : '' )
				.'" /> hours. <input type="submit" value="Show" /></p></form>';
			$template->set_js_onload("set_focus('hours')");
			
			if ( !empty($_POST['hours']) && valid_int($_POST['hours']) ) {
				
				$result = $db->query("SELECT id, displayed_name, level, last_pageview FROM ".TABLE_PREFIX."members WHERE last_pageview > ".(time() - 3600 * $_POST['hours'])." ORDER BY last_pageview DESC");
				$out .= '<table id="adminregulartable"><tr><th>Name</th><th>Last pageview</th></tr>';
				$count = 0;
				while ( $data = $db->fetch_result($result) ) {
					
					$out .= '<tr><td>'.$functions->make_profile_link($data['id'], $data['displayed_name'], $data['level']).'</td><td>'.$functions->make_date($data['last_pageview']).'</td></tr>';
					$count++;
					
				}
				$out .= '<tr><td colspan="2">'.$count.' member(s) found.</td></tr></table>';
				
			}
			
			return $out;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
