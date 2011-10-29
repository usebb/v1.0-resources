<?php

/*
	UseBB 1 topic merge ACP module 1.3
	Copyright (C) 2006 Dietrich Moerman
	Released under the GNU GPL v2

	Version 1.3 (Apr 2011)
		* Use an anti-CSRF form token (UseBB 1.0.12+)
	
	Version 1.2 (Jan 2011)
		* Use proper table prefix
		* Update subscriptions
	
	Version 1.1
		* PHP 5 fix
*/

$usebb_module_info = array(
	'short_name' => 'merge_topics',
	'long_name' => 'Merge topics',
	'acp_category' => 'various',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function run_module() {
			
			global $functions;
			
			if ( !empty($_POST['source_topic']) && valid_int($_POST['source_topic'])
				&& !empty($_POST['destination_topic']) && valid_int($_POST['destination_topic'])
				&& $functions->verify_form() )
				return $this->do_merge($_POST['source_topic'], $_POST['destination_topic']);
			else
				return $this->input_screen();
			
		}
		
		function do_merge($source, $destination) {
			
			global $db;
			
			if ( $source === $destination )
				return '<p><strong>Won\'t merge identical topics.</strong></p>';
			
			if ( !$this->check_existance($source) || !$this->check_existance($destination) )
				return '<p><strong>Unexisting topic(s).</strong></p>';
			
			$info = array();
			$result = $db->query("SELECT id, forum_id, count_replies, count_views, first_post_id, last_post_id FROM ".TABLE_PREFIX."topics WHERE id IN(".$source.", ".$destination.")");
			while ( $out = $db->fetch_result($result) ) {
				
				if ( $out['id'] == $source )
					$info['source'] = $out;
				else
					$info['destination'] = $out;
				
			}
			
			$db->query("UPDATE ".TABLE_PREFIX."posts SET topic_id = ".$destination." WHERE topic_id = ".$source);
			$db->query("DELETE FROM ".TABLE_PREFIX."topics WHERE id = ".$source);
			$db->query("UPDATE ".TABLE_PREFIX."topics SET count_replies = count_replies + ".($info['source']['count_replies']+1)." WHERE id = ".$destination);
			$db->query("UPDATE ".TABLE_PREFIX."topics SET count_views = count_views + ".$info['source']['count_views']." WHERE id = ".$destination);
			
			if ( $info['source']['first_post_id'] < $info['destination']['first_post_id'] )
				$db->query("UPDATE ".TABLE_PREFIX."topics SET first_post_id = ".$info['source']['first_post_id']." WHERE id = ".$destination);
			
			if ( $info['source']['last_post_id'] > $info['destination']['last_post_id'] )
				$db->query("UPDATE ".TABLE_PREFIX."topics SET last_post_id = ".$info['source']['last_post_id']." WHERE id = ".$destination);
			
			$db->query("UPDATE ".TABLE_PREFIX."forums SET topics = topics - 1 WHERE id = ".$info['source']['forum_id']);
			
			if ( $info['source']['forum_id'] != $info['destination']['forum_id'] ) {
				
				$db->query("UPDATE ".TABLE_PREFIX."forums SET posts = posts - ".($info['source']['count_replies']+1)." WHERE id = ".$info['source']['forum_id']);
				$db->query("UPDATE ".TABLE_PREFIX."forums SET posts = posts + ".($info['source']['count_replies']+1)." WHERE id = ".$info['destination']['forum_id']);
				
				$result = $db->query("SELECT t.id FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."posts p WHERE t.id = p.topic_id AND t.forum_id = ".$info['source']['forum_id']." ORDER BY p.id DESC LIMIT 1");
				$out = $db->fetch_result($result);
				$db->query("UPDATE ".TABLE_PREFIX."forums SET last_topic_id = ".$out['id']." WHERE id = ".$info['source']['forum_id']);
				
			}
			
			$result = $db->query("SELECT t.id FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."posts p WHERE t.id = p.topic_id AND t.forum_id = ".$info['destination']['forum_id']." ORDER BY p.id DESC LIMIT 1");
			$out = $db->fetch_result($result);
			$db->query("UPDATE ".TABLE_PREFIX."forums SET last_topic_id = ".$out['id']." WHERE id = ".$info['destination']['forum_id']);

			$db->query("UPDATE ".TABLE_PREFIX."subscriptions SET topic_id = ".$destination." WHERE topic_id = ".$source);
			
			return '<p>Merge completed successfully.</p>';
			
		}
		
		function check_existance($topic_id) {
			
			global $db;
			
			$result = $db->query("SELECT COUNT(*) as existing FROM ".TABLE_PREFIX."topics WHERE id = ".$topic_id);
			$result = $db->fetch_result($result);
			
			if ( !$result['existing'] )
				return false;
			
			return true;
			
		}
		
		function input_screen() {
			
			global $functions, $admin_functions, $template;
			
			$out = '<form action="'.$functions->make_url('admin.php', array('act' => 'mod_merge_topics')).'" method="post">';
				$out .= '<p>Enter the topic IDs of the topics this merge will affect. You can find topic IDs in the topic\'s URL.</p>';
				$out .= '<p>Merge topic <input type="text" size="5" maxlength="11" name="source_topic" id="source_topic" /> into topic <input type="text" size="5" maxlength="11" name="destination_topic" id="destination_topic" /> (IDs only).</p>';
				$out .= '<p class="submit"><input type="submit" value="Perform merge" />'.$admin_functions->form_token().'</p>';
			$out .= '</form>';
			
			$template->set_js_onload("set_focus('source_topic')");
			
			return $out;
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
