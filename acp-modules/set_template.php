<?php

/*
	UseBB 1 set template ACP module 1.1
	Copyright (C) 2007 Dietrich Moerman
	Released under the GNU GPL v2
*/

$usebb_module_info = array(
	'short_name' => 'set_template',
	'long_name' => 'Set Template',
	'acp_category' => 'various',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function run_module() {
			
			global $functions, $admin_functions, $db;
			
			$all_tpl = $functions->get_template_sets();
			
			if ( !empty($_POST['template']) && in_array($_POST['template'], $all_tpl) && $functions->verify_form() ) {
				
				$db->query("UPDATE ".TABLE_PREFIX."members SET template = '".$_POST['template']."'");
				return '<h2>Update completed</h2><p>All members now use the <em>'.$_POST['template'].'</em> template set.'
					.' Don\'t forget to adjust the global template set (used by guests and new members), too.</p>';
				
			} else {
				
				$return = '<h2>Choose template set</h2><p>Using this module, you can set the template set for all members of your forum.</p>'
					.'<form action="'.$functions->make_url('admin.php', array('act' => 'mod_set_template')).'" method="post">'
					.'<p>Template set: <select name="template">';
					foreach ( $all_tpl as $template ) {
						
						$return .= '<option value="'.$template.'">'.$template.'</option>';
						
					}				
				$return .= '</select> <input type="submit" value="Perform update" />'.$admin_functions->form_token().'</p></form>';
				return $return;
				
			}
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>

 	  	 
