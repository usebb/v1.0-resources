<?php

/*
	UseBB 1 IP bans export ACP module 1.0
	Copyright (C) 2011 Dietrich Moerman
	Released under the GNU GPL v2
*/

$usebb_module_info = array(
	'short_name' => 'ipbans_export',
	'long_name' => 'Export IP bans',
	'acp_category' => 'security',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function run_module() {
			
			global $functions, $db, $admin_functions;
			
			$content = '<form action="'.$functions->make_url('admin.php', array('act' => 'mod_ipbans_export')).'" method="post">';
			
			//
			// Export
			//

			$content .= '<p>Please specify the output format, where <code>%s</code> is the IP address. You can surround with single quotes to keep whitespace at begin/end.</p>'
				.'<p><textarea rows="3" cols="60" name="format">'.( !empty($_POST['format']) ? unhtml(stripslashes($_POST['format'])) : '').'</textarea></p>'
				.'<p><input type="submit" name="do-export" value="Export" /></p>';

			if ( !empty($_POST['format']) && !empty($_POST['do-export']) ) {

				$_POST['format'] = stripslashes($_POST['format']);

				if ( substr($_POST['format'], 0, 1) == "'" && substr($_POST['format'], -1) == "'" )
					$_POST['format'] = substr($_POST['format'], 1, strlen($_POST['format'])-2);
				
				$export = '';
				$query = $db->query("SELECT ip_addr FROM ".TABLE_PREFIX."bans WHERE ip_addr <> '' ORDER BY ip_addr");

				while ( $result = $db->fetch_result($query) )
					$export .= sprintf($_POST['format'], $result['ip_addr']);

				$content .= '<h2>Results</h2><p><textarea rows="15" cols="60" readonly="readonly">'.unhtml($export).'</textarea></p>';
			}

			//
			// Prune
			//

			$content .= '<h2>Prune IP bans</h2>'
				.'<p><label><input type="checkbox" name="confirm" value="1" /> Confirm to delete all current IP bans.</label></p>'
				.'<p><input type="submit" name="do-prune" value="Prune" />'.$admin_functions->form_token().'</p>';

			if ( !empty($_POST['confirm']) && !empty($_POST['do-prune']) && $functions->verify_form() ) {
				
				$db->query("DELETE FROM ".TABLE_PREFIX."bans WHERE ip_addr <> ''");
				$content .= '<p>Pruning done.</p>';

			}

			$content .= '</form>';

			return $content;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>

 	  	 
