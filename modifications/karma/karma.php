<?php

/*
	Copyright (C) 2003-2004 FreeX-Tech - Vandamme Samuel
	http://www.freex-tech.com
	
	This file is part of a mod for UseBB.
	
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

define('INCLUDED', true);
define('ROOT_PATH', './');

//
// Include usebb engine
//
require(ROOT_PATH.'sources/common.php');

//
// Update and get the session information
//
$session->update('karma');


//
// If id is passed
//
if ( ( !empty($_GET['id']) && is_numeric($_GET['id']) ) && ( !empty($_GET['act']) && ( $_GET['act'] == 'raise' || $_GET['act'] == 'lower') ) && ( !empty($_GET['post_o']) && is_numeric($_GET['post_o']) ) && ( !empty($_GET['post_t']) && is_numeric($_GET['post_t']) ) ) {
	
	//
	//	Get Votes by user
	//
	$result = $db->query("SELECT vote FROM ".TABLE_PREFIX."karma WHERE id_u = ".$_GET['id']." AND time > ".( time()-$functions->get_config('karma_expiretime') )." ORDER BY time DESC LIMIT 1");
	
	//
	// Make Vote
	//
	$value = ($_GET['act'] == "raise") ? 5:0;
	
		//
		// Check if user can post
		//
		if ( $db->num_rows($result) == 0 )
		$db->query("INSERT INTO ".TABLE_PREFIX."karma (id_u,id_v,vote,time) VALUES (".$_GET['id'].",".$session->sess_info['user_id'].",".$value.",".time().")");
			
	//
	// Get us back to post
	//
	header('Location: '.$functions->make_url('topic.php', array('post' => $_GET['post_o'])).'#post'.$_GET['post_t']);
	
} else {

	if ( !empty($_GET['post_o']) && is_numeric($_GET['post_o']) && ( !empty($_GET['post_t']) && is_numeric($_GET['post_t']) ) ) {
	
		//
		// Post id found! Get us back to post
		//
		header('Location: '.$functions->make_url('topic.php', array('post' => $_GET['post_o'])).'#post'.$_GET['post_t']);

	} else {
		
		//
		// There's no post ID! Get us back to the index...
		//
		header('Location: '.$functions->make_url('index.php', array(), false));

	}
}

//
// Include the page footer
//
require(ROOT_PATH.'sources/page_foot.php');

?>
