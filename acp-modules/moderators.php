<?php

/**
 * Moderator Management
 *
 * UseBB Module, v1.0
 *
 * Allows management of moderators
 *
 * @author	Gaia
 * @link	http://eternal-realm.net
 * @license	GPL-2
 * @copyright	Copyright (C) 2003-2005 UseBB Team
 *
 **/

$usebb_module_info = array( 
	'short_name' => 'moderators', 
	'long_name' => 'Manage Moderators', 
	'acp_category' => 'manage_mod',
	'new_acp_category_long_name' => 'Moderators',
);

if ( defined('RUN_MODULE') ) { 
	
	class usebb_module { 


		function mod_forums() { # get forums and moderators
		
            global $db;
            
            $output_mods = '';
            $forums = '';
            
            	    $result = $db->query("SELECT id, name FROM ".TABLE_PREFIX."forums");
           while ($get = $db->fetch_result($result)) {

           $forums .= '<option value="'.$get['id'].'">'.$get['name'].'</option>';
	}
			
			$result = $db->query("SELECT id, name FROM ".TABLE_PREFIX."members WHERE level = '2'");
           while ($moderators = $db->fetch_result($result)) {
           
           $output_mods .= '<option value="'.$moderators['id'].'">'.$moderators['name'].'</option>';
	}
	
    $create_list = '<h2>Add a moderator to a forum</h2><form action="" method="post"><select name="mid">'.$output_mods.'</select>&nbsp; &nbsp; <select name="fid">'.$forums.'</select><br /><br /><input type="submit" value="Add moderator to selected forum" name="addmod" /></form><br />';
    
			return $create_list;
			
		}
		
		function mod_status() { # get all moderators and regular members

            global $db;

            $output_mems = '';
            $output_mods = '';
	
	 $result = $db->query("SELECT id, name FROM ".TABLE_PREFIX."members WHERE level = '2'");
           while ($members = $db->fetch_result($result)) {

           $output_mods .= '<option value="'.$members['id'].'">'.$members['name'].'</option>';
	}

    $final = '<h2>Select A Member</h2><form action="" method="post">Enter the members ID<br /><input type="text" name="mid" /> &nbsp; &nbsp; <input type="submit" value="Make Moderator" name="makemod" /></form><br /><h2>Select A Moderator</h2><form action="" method="post"><select name="mid">'.$output_mods.'</select> &nbsp; &nbsp; <input type="submit" value="Remove Moderator" name="removemod" /></form><br />';

			return $final;

		}

		function make_mod() { # change the selected members level.

            global $functions,$db;

            $mid = '';
            
            $mid = $_POST['mid'];

                  $db->query("UPDATE ".TABLE_PREFIX."members SET level = 2 WHERE id = '$mid'");
                  
                  $message = 'Member level has been changed to <strong>Moderator</strong>. You can <a href="'.$functions->make_url('admin.php', array('act' => 'mod_moderators', 'do' => 'modstatus')).'">click here</a> to make another moderator, or <a href="'.$functions->make_url('admin.php', array('act' => 'mod_moderators', 'do' => 'modforum')).'">click here</a> to attach your new moderator to a forum.';

			return $message;

		}

		function remove_mod() { # change the selected members level.

            global $db;

            $mid = '';

            $mid = $_POST['mid'];

                  $db->query("UPDATE ".TABLE_PREFIX."members SET level = 1 WHERE id = '$mid'");
                  $db->query("DELETE FROM ".TABLE_PREFIX."moderators WHERE user_id = '$mid'");

                  $message = 'Member level has been changed to <strong>Member</strong> and has also been removed from any forums they moderated.';

			return $message;

		}

		function add_mod() { # change the selected members level.

            global $functions,$db;

            $mid = $_POST['mid'];
            $fid = $_POST['fid'];

                  $result = $db->query("SELECT * FROM ".TABLE_PREFIX."moderators WHERE forum_id='$fid' AND user_id='$mid'");
                  $check = $db->fetch_result($result);
                  if ( $check['forum_id'] == $fid && $check['user_id'] == $mid ) {
                        $message = 'That moderator already moderates that forum!';
                                 } else {
                  $db->query("INSERT INTO ".TABLE_PREFIX."moderators VALUES ('$fid', '$mid')");

                  $message = 'Moderator has been added to the forum.  You can <a href="'.$functions->make_url('admin.php', array('act' => 'mod_moderators', 'do' => 'modforum')).'">click here</a> to attach another moderator to a forum.';
                  }

			return $message;

		}
		
		function run_module() { 
			
			global $functions, $admin_functions;
			
			$content = 'Welcome to the <strong>Moderator Management</strong> module for <strong>UseBB 0.7 beta x</strong><br /><br /><div class="selected">Purpose of this module:</div> This module is meant to do the small tasks of adding and removing moderator status from a member (Add/Remove Moderator Status) and also the adding of a moderator to a forum (Add A Moderator To A Forum). <br /><br />&raquo; <a href="'.$functions->make_url('admin.php', array('act' => 'mod_moderators', 'do' => 'modstatus')).'">Add/Remove Moderator Status</a><br />&raquo; <a href="'.$functions->make_url('admin.php', array('act' => 'mod_moderators', 'do' => 'modforum')).'">Add Moderator To A Forum</a><br /><br />This module was written by Gaia of <a href="http://eternal-realm.net">Eternal Realm</a>';
			
			if ( !empty($_GET['do']) && $_GET['do'] == 'modstatus' && !isset($_POST['makemod']) && !isset($_POST['removemod'])) {
                $content = $this->mod_status();
                
                } elseif ( !empty($_GET['do']) && $_GET['do'] == 'modstatus' && isset($_POST['makemod'])) {
                  $content = $this->make_mod();
                } elseif ( !empty($_GET['do']) && $_GET['do'] == 'modstatus' && isset($_POST['removemod'])) {
                  $content = $this->remove_mod();
                }
                
   			if ( !empty($_GET['do']) && $_GET['do'] == 'modforum' && !isset($_POST['addmod']) && !isset($_POST['removeall'])) {
                $content = $this->mod_forums();

                } elseif ( !empty($_GET['do']) && $_GET['do'] == 'modforum' && isset($_POST['addmod'])) {
                  $content = $this->add_mod();
                }
            
            return $content;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
