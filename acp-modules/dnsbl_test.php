<?php

/*
	UseBB 1 DNSBL test ACP module 1.0
	Copyright (C) 2007 Dietrich Moerman
	Released under the GNU GPL v2
*/

$usebb_module_info = array(
	'short_name' => 'dnsbl_test',
	'long_name' => 'DNSBL Test',
	'acp_category' => 'various',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function run_module() {
			
			global $functions, $template;
			
			if ( function_exists('checkdnsrr') && !ON_WINDOWS ) {
				
				$dnsrr_available = true;
				$dnsrr_function = 'checkdnsrr';
				
			} elseif ( ON_WINDOWS ) {
				
				$dnsrr_available = true;
				$dnsrr_function = 'checkdnsrr_win';
				
			} else {
				
				$dnsrr_available = false;
				
			}
			
			if ( !$dnsrr_available )
				return '<h2>Unavailable</h2><p>This server is not capable of performing DNS lookups.</p>';
			
			$return = '';
			
			if ( !empty($_POST['servers']) && !empty($_POST['address']) && preg_match('#^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$#', $_POST['address']) ) {
				
				$return .= '<h2>Results</h2><table id="adminregulartable"><tr><th>Server</th><th>Result</th><th>Time</th></tr>';
				
				$servers = preg_split('#\s+#', $_POST['servers']);
				$dnsbl = join('.', array_reverse(explode('.', $_POST['address'])));
				
				foreach ( $servers as $server ) {
					
					if ( !preg_match('#^(?:[a-z0-9\-]+\.){1,}[a-z]{2,}$#i', $server) )
						continue;
					
					list($usec, $sec) = explode(" ", microtime());
					$start = ((float)$usec + (float)$sec);
					
					$ret = call_user_func($dnsrr_function, $dnsbl.'.'.$server, 'A');
					
					list($usec, $sec) = explode(" ", microtime());
					$end = ((float)$usec + (float)$sec);
					
					$time = round($end - $start, 5);
					
					$return .= '<tr><td>'.$server.'</td><td>'.($ret ? '<strong>positive</strong>' : 'negative').'</td><td>'.($time > 0.25 ? '<strong>'.$time.'s</strong>' : $time.'s').'</td></tr>';
					
				}
				
				$return .= '</table>';
				
			} else {
				
				$template->set_js_onload("set_focus('servers')");
				
			}
			
			$config_dnsbl = $functions->get_config('dnsbl_powered_banning_servers');
			
			if ( !empty($_GET['do']) && $_GET['do'] == 'getdnsbl' && count($config_dnsbl) ) {
				
				$_POST['servers'] = join("\n", $config_dnsbl);
				$template->set_js_onload("set_focus('address')");
				
			} 
			
			$return .= '<h2>Start Test</h2><form action="'.$functions->make_url('admin.php', array('act' => 'mod_dnsbl_test')).'" method="post">'
				.'<p>Enter a number of DNSBL servers seperated by spaces or newlines in the field below:</p>'
				.'<p><textarea name="servers" id="servers" rows="5" cols="50">'.(!empty($_POST['servers']) ? unhtml($_POST['servers']) : '').'</textarea></p>'
				.(empty($_POST['servers']) && count($config_dnsbl) ? '<p>You can also <a href="'.$functions->make_url('admin.php', array('act' => 'mod_dnsbl_test', 'do' => 'getdnsbl')).'">use the servers set in the configuration file</a>.</p>' : '')
				.'<p>Enter an IP address to test: <input type="text" name="address" id="address" value="'.(!empty($_POST['address']) ? unhtml($_POST['address']) : '').'" size="15" maxlength="15" /></p>'
				.'<p class="submit"><input type="submit" value="Start Test" /></p>'
				.'</form>';
			
			return $return;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
