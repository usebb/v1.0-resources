<?php

/**
 * Member Management
 *
 * UseBB Module, v1.0
 *
 * Allows management of members
 *
 * @author	Gaia
 * @link	http://eternal-realm.net
 * @license	GPL-2
 * @copyright	Copyright (C) 2003-2005 UseBB Team
 *
 **/

$usebb_module_info = array( 
	'short_name' => 'members',
	'long_name' => 'Manage Members',
	'acp_category' => 'manage_mems',
	'new_acp_category_long_name' => 'Members',
);

if ( defined('RUN_MODULE') ) { 
	
	class usebb_module { 

    function get_mem_stats() {

            global $db;

            $mid = $_POST['mid'];

            $result = $db->query("SELECT * FROM ".TABLE_PREFIX."members WHERE id = '$mid'");
                $member = $db->fetch_result($result);
                
                $mem_form = '<h2>Editing Member <strong>'.$member['name'].'</strong></h2><form action="" method="post"><table id="adminconfigtable"><tr><th colspan="2">Edit Member Profile</th></tr><tr><td class="fieldtitle">Username</td><td><input type="text" name="user" value="'.$member['name'].'" /><input type="hidden" name="mid" value="'.$mid.'" /></td></tr><td class="fieldtitle">Displayed Name</td><td><input type="text" name="displayed_name" value="'.$member['displayed_name'].'" /></td></tr><td class="fieldtitle">Real Name</td><td><input type="text" name="real_name" value="'.$member['real_name'].'" /></td></tr><tr><td class="fieldtitle">Rank</td><td><input type="text" name="rank" value="'.$member['rank'].'" /><br /><small>Leave blank for default</small></td></tr><tr><td class="fieldtitle">Post Count</td><td><input type="text" name="posts" value="'.$member['posts'].'" /></td></tr><td class="fieldtitle">Avatar</td><td><input type="text" name="avatar" value="'.$member['avatar_remote'].'" /></td></tr><td class="fieldtitle">Location</td><td><input type="text" name="location" value="'.$member['location'].'" /></td></tr><td class="fieldtitle">Website</td><td><input type="text" name="website" value="'.$member['website'].'" /></td></tr><td class="fieldtitle">Occupation</td><td><input type="text" name="occupation" value="'.$member['occupation'].'" /></td></tr><td class="fieldtitle">Interests</td><td><input type="text" name="interests" value="'.$member['interests'].'" /></td></tr><td class="fieldtitle">Signature</td><td><textarea name="signature">'.$member['signature'].'</textarea></td></tr></table>
                <table id="adminconfigtable"><tr><th colspan="2">Edit Contact Information</th></tr><td class="fieldtitle">E-Mail</td><td><input type="text" name="email" value="'.$member['email'].'" /></td></tr><td class="fieldtitle">MSN Messanger</td><td><input type="text" name="msn" value="'.$member['msnm'].'" /></td></tr><td class="fieldtitle">Yahoo Messanger</td><td><input type="text" name="yahoo" value="'.$member['yahoom'].'" /></td></tr><td class="fieldtitle">AIM</td><td><input type="text" name="aim" value="'.$member['aim'].'" /></td></tr><td class="fieldtitle">ICQ</td><td><input type="text" name="icq" value="'.$member['icq'].'" /></td></tr><td class="fieldtitle">Jabber</td><td><input type="text" name="jabber" value="'.$member['jabber'].'" /></td></tr><td class="fieldtitle">Skype</td><td><input type="text" name="skype" value="'.$member['skype'].'" /></td></tr><tr><td class="formcontrols" colspan="2"><input type="submit" name="update" value="Submit Edits" /></td></tr></table></form>';
                
                return $mem_form;
              }

    function send_mem_edits()
            {
              global $db;
                
                $mid = $_POST['mid'];
                
                	$result = $db->query("UPDATE ".TABLE_PREFIX."members SET
        name          = '".$_POST['user']."',
		email         = '".$_POST['email']."',
		displayed_name = '".$_POST['displayed_name']."',
		real_name     = '".$_POST['real_name']."',
		posts         = '".$_POST['posts']."',
		rank          = '".$_POST['rank']."',
		location      = '".$_POST['location']."',
		website       = '".$_POST['website']."',
		avatar_remote = '".$_POST['avatar']."',
		occupation    = '".$_POST['occupation']."',
		interests     = '".$_POST['interests']."',
		signature     = '".$_POST['signature']."',
		msnm          = '".$_POST['msn']."',
		yahoom        = '".$_POST['yahoo']."',
		aim           = '".$_POST['aim']."',
		icq           = '".$_POST['icq']."',
		jabber        = '".$_POST['jabber']."',
		skype         = '".$_POST['skype']."'
	WHERE id = '$mid'");
	
        $message = '<strong>Members profile has been successfully updated</strong>';
        
            return $message;
            }
            
		
		function run_module() { 
			
			global $functions, $admin_functions;
			
			$content = 'Welcome to the <strong>Member Management</strong> module for <strong>UseBB 0.7 beta x</strong><br /><br /><h2>Enter Member ID</h2><br /><form action="" method="post"><input type="text" name="mid" />&nbsp; &nbsp; <input type="submit" value="Edit Member" name="editmem" /></form><br />';
			
			if ( isset($_POST['editmem']) ) {
              $content .= $this->get_mem_stats();
              } elseif ( isset($_POST['update']) ) {
                $content = $this->send_mem_edits();
                }
            
            $content .= '<br /><br /><h2>Module Info</h2>This module was written by Gaia of <a href="http://eternal-realm.net">Eternal Realm</a>';
            
            return $content;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
