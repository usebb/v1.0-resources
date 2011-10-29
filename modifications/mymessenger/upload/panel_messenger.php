<?php
/*
+--------------------------------------------------------------------------
|   My Messenger UseBB Mod
|   ========================================
|   Jake Wehner <jwehner@wehnerweb.com>
|   (c) Copyright 2004 Wehnerweb Media Solutions
|   http://www.wehnerweb.com
|   ========================================
|   @copyright  Wehnerweb Media SOlutions 2004
|   @author     Jake Wehner <jwehner@wehnerweb.com>
|   @version    $Id: panel_messenger.php,v 1.0.0 7/10/2004 2:47:25 PM Exp $
|   @date       $Date: 7/10/2004 2:47:25 PM 
|   @revision   $Revision: 1.0.0 
|   @filename   $RCSfile: panel_messenger.php,v
+---------------------------------------------------------------------------
|
|   > Your Panel Messenger System
|   > Script Written By Jake Wehner
|   > Last Updated: <date>
|
+--------------------------------------------------------------------------
*/

//
// Die when called directly in browser
//
if (!defined('INCLUDED'))
	exit();

//
// Decide what to do.
//

if(array_key_exists("op", $_GET)) {

	$op = $_GET['op'];

} else {

	$op = "view_folder";

}

//
// Parse the Messenger Menu which
// will appear regardless of the
// requested operation.
//

$template->parse('messenger_menu', array(

		"compose_message" => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_message')).'">'.$lang['MessengerComposeMessage'].'</a>',
		"manage_filters" => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'manage_filters')).'">'.$lang['MessengerManageFilters'].'</a>',
		"manage_folders" => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'manage_folders')).'">'.$lang['MessengerManageFolders'].'</a>'

	)
	
);

switch($op) {
	case "send_reply":
		send_reply();
		break;
	case "new_message":
		new_message();
		break;
	case "view_message":
		view_message();
		break;
	case "move_message":
		move_message();
		break;
	case "forward_message":
		forward_message();
		break;
	case "manage_folders":
		view_folders();
		break;
	case "new_folder":
		new_folder();
		break;
	case "delete_folder":
		delete_folder();
		break;
	case "edit_folder":
		edit_folder();
		break;
	case "empty_folder":
		empty_folder();
		break;
	case "view_folder":
		view_folder();
		break;
	case "manage_filters":
		manage_filters();
		break;
	default:
		view_folder();
		break;

}

//
// View Inbox
//

function view_folder() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['ViewInbox']);

	//
	// Showing a particular folder? 
	//
	
	$folder_to_show = '';

	if(array_key_exists('show_folder', $_GET) AND is_numeric($_GET['show_folder'])) {

		$folder_to_show = $_GET['show_folder'];

	} else {

		$folder_to_show = 1;

	}

	//
	// Get Folder information
	// 

	$my_folders = load_folders($session->sess_info['user_info']['id']);

	//
	// Is the requested folder ours?
	//

	if(!array_key_exists($folder_to_show, $my_folders)) {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => $lang['MessengerNonexistantFolder']
			)
				
		);

	} else {

		//
		// Set up folder options.
		//

		$folder_options = '';

		foreach ($my_folders AS $id => $title) {

			$folder_options .= '<option value="'.$id.'">'.$title.'</option>';

		}
		
		//
		// Fetch Messages
		//

		$result = $db->query("SELECT t.*, m.name FROM ".TABLE_PREFIX."messages AS t, ".TABLE_PREFIX."users AS m WHERE m.id = t.message_author_id AND t.message_recipient_id = {$session->sess_info['user_info']['id']} AND t.message_folder_id = '{$folder_to_show}' GROUP BY message_id ORDER BY message_id DESC");

		if(!$db->num_rows($result) > 0) {

			$template->parse('msgbox', array(

				'box_title' => $lang['ViewInbox'],
				'content' => $lang['InboxEmpty']
					
				)
			);

			$template->parse('messenger_folder_jump', array(
				
				'jump_to_folder' => $lang['MessengerJumpToFolder'],
				'folder_options' => $folder_options

				)
						
			);

		} else {

			$template->parse('messenger_inbox_header', array(
					
					'viewing_inbox' => $lang['ViewInbox'] . ' -> ' . $my_folders[$folder_to_show],
					'empty_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'empty_folder', 'folder_id' => $folder_to_show), false),
					'empty_folder' => $lang['MessengerEmptyFolder'],
					'subject' => $lang['MessengerSubject'],
					'from' => ($folder_to_show == 4) ? $lang['MessengerSentTo'] : $lang['MessengerFrom'],
					'date' => $lang['MessengerDate']

				)
			);

			while ($row = $db->fetch_result($result)) {

				//
				// 'Sent Messages' checking for Message Tracking
				//
					
				if($folder_to_show == '4') {

					$read_status_result = $db->query("SELECT message_read FROM ".TABLE_PREFIX."messages WHERE message_id = '{$row['message_copy_id']}' LIMIT 1");
							
					if($db->num_rows($read_status_result) > 0) {
							
						$results = $db->fetch_result($read_status_result);

						if($results['message_read'] == '0') {

							$row['message_read'] = 0;
							$lang_to_use = $lang['MessengerUnreadByRecipient'];

						} else {

							$row['message_read'] = 1;

						}

					} else {

						$row['message_read'] = 1;

					}

				} else {

					$lang_to_use = $lang['MessengerUnread'];

				}

				//
				// Parse it
				//

				$template->parse('messenger_inbox_row', array(
						
					'bgcolor' => ($row['message_read'] == 1) ? '#efefef' : '#ccffcc',
					'message_id' => $row['message_id'],
					'message_author_id' => $row['message_author_id'],
					'message_author_name' => $row['name'],
					'message_title' => ($row['message_read'] == 1) ? '<a href="'.$functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'view_message', 'message_id' => $row['message_id'])).'">'.$row['message_title'].'</a>' : '<a href="'.$functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'view_message', 'message_id' => $row['message_id'])).'">'.$row['message_title'].'</a> <span style="font-size:8pt;color:#555555;">['.$lang_to_use.']</span>',
					'message_date' => $functions->make_date($row['message_date'])

					)

				);

			}

			$template->parse('messenger_inbox_footer');
					
			$template->parse('messenger_folder_jump', array(
				
				'jump_to_folder' => $lang['MessengerJumpToFolder'],
				'folder_options' => $folder_options

				)
						
			);

		}

	}

}

//
// View message
//

function view_message() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['ViewMessage']);

	if(!array_key_exists("message_id", $_GET) || !is_numeric($_GET['message_id'])) {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => $lang['CouldNotGetTheShiznit'],
				
			)

		);

	} else {

		// Fetch it boy! C'mon! Gooooooood boy.
		
		$result = $db->query("SELECT t.*, m.name, m.id FROM ".TABLE_PREFIX."messages AS t, ".TABLE_PREFIX."users AS m WHERE t.message_id = {$_GET['message_id']} AND t.message_recipient_id = {$session->sess_info['user_info']['id']} AND m.id=t.message_author_id GROUP BY t.message_id LIMIT 1");

		if(!$db->num_rows($result) > 0) {
			
			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => $lang['MessengerMessageNotFound'],
				)
					
			);

		} else {
				
			$message_data = $db->fetch_result($result);

			//
			// Generate the folder list for moving.
			//

			$folders = load_folders($session->sess_info['user_id']);
			   
			$move_options = '';

			foreach ($folders AS $id => $title) {

				$move_options .= '<option value="'.$id.'">'.$title.'</option>';

			}

			$template->parse('messenger_view_message', array(
								
					'says' => $lang['MessengerSays'],
					'viewing_message' => $lang['ViewMessage'],
					'date' => $lang['MessengerDate'],
					'subject' => $lang['MessengerSubject'],
					'reply' => $lang['MessengerReply'],
					'reply_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'send_reply', 'message_id' => $message_data['message_id'])),
					'forward' => $lang['MessengerForward'],
					'forward_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'forward_message', 'message_id' => $message_data['message_id'])),
					'move' => $lang['MessengerMove'],
					'move_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'move_message', 'message_id' => $message_data['message_id'])),
					'move_options' => $move_options,
					'message_id' => $message_data['message_id'],
					'message_date' => $functions->make_date($message_data['message_date']),
					'message_sender' => $message_data['name'],
					'message_title' => stripslashes($message_data['message_title']),
					'message_content' => stripslashes($message_data['message_content']),
					'message_author_id' => $message_data['id']

				)      
			);

			// Update this messages read status 
			// so that it wont appear highlighted 
			// in the main list (YAY!)
			
			$db->query("UPDATE ".TABLE_PREFIX."messages SET message_read=1 WHERE message_id = {$message_data['message_id']} LIMIT 1");
			
		}

	}

}

//
// Compose a message
//

function new_message() {

	global $template, $db, $lang, $session, $functions;
	
	$template->set_page_title($lang['MessengerCompose']);

	//
	// Set required fields
	//

	$required = array('message_send_to' => 'MessengerSendTo', 'message_title' => 'MessengerSubject', 'message_content' => 'MessengerContent');
	
	if(array_key_exists('submit', $_POST)) {
		
		//
		// check if we're missing fields 
		//

		$missing = array();

		foreach($required AS $key => $lang_item) {

			if(!array_key_exists($key, $_POST) || $_POST[$key] == '') {

				$missing[] = $lang[$lang_item];

			}

		}
		
		if(count($missing) > 0) {

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => sprintf($lang['MissingFields'], join(', ', $missing))
				)
				
			);
						
		} else {
			
			//
			// Process the form
			//

			$safe_data = array(
	
				'message_author_id' => $session->sess_info['user_info']['id'],
				'message_date' => time()
	   
				);

			//
			// Quarantine data we know we can't trust
			//

			$user_input_data = array( // not to be trusted ;)

				'message_title' => $_POST['message_title'],
				'message_content' => $_POST['message_content'],
				'message_send_to' => $_POST['message_send_to'],
				'message_cc' => explode("\n", $_POST['message_cc'])

			);

			//
			// Initialize an array for cleaned data
			// and proceed to make the input safe.
			// No htmlentities(), internal parsing
			// function takes care of that... NOTE* This method of cleaning data should change in the future.
			//

			$cleaned_data = array();

			foreach($user_input_data AS $key => $value) {
				
				  $cleaned_data[$key] = (get_magic_quotes_gpc()) ? $value : addslashes($value);

			}

			//
			// Merge arrays to one safe hash
			//

			$the_data = array_merge($safe_data, $cleaned_data);

			//
			// Validate the 'send to' and 'cc' member names.
			// Would you send messages to fake users?
			// Thought so.
			//  
			
			if(false == ($recipient_id = validate_user($the_data['message_send_to']))) {

			   $template->parse('msgbox', array(

					'box_title' => $lang['Error'],
					'content' => $lang['MessengerSendToMemberDoesNotExist'],
				
					)

				);
				   
			} else {

				//
				// 'Fore we waste more CPU, can we even message this person or did that bastiege block us?
				//

				if(!can_message($session->sess_info['user_info']['name'], $recipient_id)) {

					$template->parse('msgbox', array(

						'box_title' => $lang['Error'],
						'content' => $lang['MessengerNoPM'],
						)
					
					);
				
				} else {

					$the_data['message_send_to'] = $recipient_id;
				
					$cc_ids = array();

					$fakes = array();

					foreach($the_data['message_cc'] AS $cc_user) {

						if($cc_user !== '') {

							$cc_user = strtolower(trim($cc_user)); // trim() ended a day of debugging. who would have thought whitespace threw off the username validator :/
											   
							if(false == ($cc_id = validate_user($cc_user))) {
								
								$fakes[] = $cc_user;

							} else {
							    
								if(can_message($session->sess_info['user_info']['name'], $cc_id) {

									$cc_ids[] = $cc_id;

								}

							}

						}

					}

					if(count($fakes)>0) {

						$template->parse('msgbox', array(

							'box_title' => $lang['Error'],
							'content' => sprintf($lang['MessengerFakeCCs'], join(', ', $fakes))
						
							)

						);

					} else {


						//
						// Parse the content for BBCode and smilies
						// (using the core usebb parser means all
						// changes and customizations also take affect 
						// here, which is like totally awesome, gnarly, 
						// and not to mention killer.
						//

						$the_data['message_content'] = $functions->markup($the_data['message_content']);

						//
						// Send to recipient
						//

						if($result = $db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read) VALUES ('".$the_data['message_author_id']."', '".$the_data['message_send_to']."', '".$the_data['message_date']."', '".$the_data['message_title']."','".$the_data['message_content']."','0')")) {
                            
                            //
                            // notify user
                            //

                            notify($the_data['message_send_to']);

							//
							// Get the message's id for tracking purposes.
							//

							$message_copy_id = $db->last_id();

							//
							// Foreward to necessary users
							//

							foreach($cc_ids AS  $id) {
								
								if ($id !== '') {

									$db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read) VALUES ('".$the_data['message_author_id']."', '".$id."', '".$the_data['message_date']."', 'Fw:".$the_data['message_title']."','".$the_data['message_content']."','0')");
									
									$message_copy_id = $db->last_id();

									$db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read, message_folder_id, message_copy_id) VALUES ('".$id."', '".$the_data['message_author_id']."', '".$the_data['message_date']."', 'Fw: ".$the_data['message_title']."','".$the_data['message_content']."','1', '4', '{$message_copy_id}')");
						            
                                    notify($id);
                                }
							}
				
							//
							// Place a copy in the author's 'Sent Messages' virtual directory.
							//

							$db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read, message_folder_id, message_copy_id) VALUES ('".$the_data['message_send_to']."', '".$the_data['message_author_id']."', '".$the_data['message_date']."', '".$the_data['message_title']."','".$the_data['message_content']."','1', '4', '{$message_copy_id}')");

							$template->parse('msgbox', array(

							   'box_title' => $lang['MessengerMessageSent'],
							   'content' => $lang['MessengerMessageSentDesc'],
							
							   )

							);               

						} else {

							$template->parse('msgbox', array(

								'box_title' => $lang['Error'],
								'content' => $lang['MessengerMessageNotSent'],
							
								)

							); 
						
						}

					}

				}

			}

		}

	} else {

		// 
		// Form wasn't submitted yet
		// so show it.
		//
		
		$template->parse('messenger_compose_form', array(

			'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_message')),
			'send_to' => $lang['MessengerSendTo'],
			'send' => $lang['MessengerSend'],
			'send_desc' => $lang['MessengerSendToDesc'],
			'cc_send_to' => $lang['MessengerCC'],
			'cc_desc' => $lang['MessengerCCDesc'],
			'subject' => $lang['MessengerSubject'],
			'content' => $lang['MessengerContent'],
			'composing_message' => $lang['MessengerCompose'],
			'cc_textarea' => '<textarea rows="'.$template->get_config('textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="message_cc"></textarea>',
			'content_textarea' => '<textarea rows="'.$template->get_config('textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="message_content"></textarea>',
		  
			)

		);

	}

}

//
// send a reply
//

function send_reply() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerSendingReply']);
		
	if(!array_key_exists("message_id", $_GET) OR !is_numeric($_GET['message_id'])) {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], 'message_id')
					
			)

		);

	} else {

		//
		// Get the origrinal message from the database 
		//

		$result = $db->query("SELECT t.*, m.name AS name FROM ".TABLE_PREFIX."messages AS t, ".TABLE_PREFIX."users AS m WHERE t.message_id = '{$_GET['message_id']}' AND m.id = t.message_author_id GROUP BY t.message_id LIMIT 1");

		if($db->num_rows($result) > 0) {

			$message = $db->fetch_result($result);

			$template->parse('messenger_reply_form', array(

				'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_message')), // save some code and use the new message parser
				'send_to' => $lang['MessengerSendTo'],
				'send' => $lang['MessengerSend'],
				'reply_username' => $message['name'],
				'reply_subject' => 'Re: '.$message['message_title'],
				'cc_send_to' => $lang['MessengerCC'],
				'cc_desc' => $lang['MessengerCCDesc'],
				'subject' => $lang['MessengerSubject'],
				'content' => $lang['MessengerContent'],
				'sending_reply' => $lang['MessengerSendingReply'],
				'cc_textarea' => '<textarea rows="'.$template->get_config('textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="message_cc"></textarea>',
				'content_textarea' => '<textarea rows="'.$template->get_config('textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="message_content"  wrap="hard">[i]'. str_replace('<br />', '', $message['message_content']) .'[/i]</textarea>',
				  
				)

			);

		} else {

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => $lang['MessengerMessageNotFound'],
				)
					
			);

		}

	}

}

//
// move a message
//

function move_message() {

	global $template, $db, $lang, $session, $functions;
	
	$template->set_page_title($lang['MessengerMoveMessage']);
	
	$required = array('message_id', 'move_to');

	$missing = array();

	foreach ($required AS $item) {

		if(!array_key_exists($item, $_GET) OR !is_numeric($_GET[$item])) {

			$missing[] = $item;

		}

	}
	
	if(!count($missing)>0) {

		//
		// Check that the folder exists.
		//

		$folder_id = $_GET['move_to'];
		
		$my_folders = load_folders($session->sess_info['user_info']['id']);

		if(!array_key_exists($folder_id, $my_folders)) {

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => $lang['MessengerNonexistantFolder']
				)
				
			);

		} else {

			//
			// Attempt to edit the message entry 
			//

			if($db->query("UPDATE ".TABLE_PREFIX."messages SET message_folder_id = '{$_GET['move_to']}' WHERE message_recipient_id = '{$session->sess_info['user_info']['id']}' AND message_id = '{$_GET['message_id']}' LIMIT 1")) {

				$template->parse('msgbox', array(

					'box_title' => $lang['MessengerMoveMessage'],
					'content' => $lang['MessengerMessageMoved']
					)
				
				);

			} else {

				$template->parse('msgbox', array(

					'box_title' => $lang['Error'],
					'content' => $lang['MessengerMessageNotMoved']
					)
				
				);

			}

		}

	} else {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], join(', ', $missing))
			)
				
		);

	}

}

//
// Forward a message.
//

function forward_message() {

	global $template, $db, $lang, $session, $functions;
	
	$template->set_page_title($lang['MessengerForwardingMessage']);

	if(!array_key_exists('message_id', $_GET) OR !is_numeric($_GET['message_id'])) {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], 'message_id')
			)
				
		);

	} else {

		if(array_key_exists('username', $_POST)) {

			$username = (get_magic_quotes_gpc()) ? $_POST['username'] : addslashes($_POST['username']);

			//
			// Validate this user.
			//

			if(false == ($recipient_id = validate_user(trim($username)))) {

			   $template->parse('msgbox', array(

					'box_title' => $lang['Error'],
					'content' => $lang['MessengerSendToMemberDoesNotExist'],
				
					)

				);              
			   
			} else {

				//
				// did we push our cheap viagra too much and get blocked?
				//

				if(!can_message($session->sess_info['user_info']['name'], $recipient_id)) {

					$template->parse('msgbox', array(

						'box_title' => $lang['Error'],
						'content' => $lang['MessengerNoPM'],
						)
					
					);
				
				} else {

					//
					// Get the message data
					//

					$result = $db->query("SELECT * FROM ".TABLE_PREFIX."messages WHERE message_id = '{$_GET['message_id']}' AND message_recipient_id = '{$session->sess_info['user_info']['id']}' LIMIT 1");
					
					if(!$db->num_rows($result) > 0) {
						
						$template->parse('msgbox', array(

							'box_title' => $lang['Error'],
							'content' => $lang['MessengerMessageNotFound'],
							)
							
						);

					} else {

						//
						// Insert the message into the new user's inbox
						//

						$the_data = $db->fetch_result($result);

						$db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read) VALUES ('".$the_data['message_author_id']."', '".$recipient_id."', '".$the_data['message_date']."', 'Fw:".$the_data['message_title']."','".$the_data['message_content']."','0')");
						
                        notify($recipient_id);

						$message_copy_id = $db->last_id();
									
						$db->query("INSERT INTO ".TABLE_PREFIX."messages(message_author_id, message_recipient_id, message_date, message_title, message_content, message_read, message_folder_id, message_copy_id) VALUES ('".$session->sess_info['user_info']['id']."', '".$the_data['message_author_id']."', '".$the_data['message_date']."', 'Fw: ".$the_data['message_title']."','".$the_data['message_content']."','1', '4', '{$message_copy_id}')");

						$template->parse('msgbox', array(

							'box_title' => $lang['MessengerMessageSent'],
							'content' => $lang['MessengerMessageSentDesc'],
								
							)

						);  
						
					}

				}

			}

		} else {

			$template->parse('messenger_forward_form', array('form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'forward_message', 'message_id' => $_GET['message_id'])), 'send' => $lang['MessengerSend'], 'username' => $lang['MessengerSendTo'], 'forwarding_message' => $lang['MessengerForwardingMessage']));

		}

	}

}

//
// empty a folder
//

function empty_folder() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerEmptyingFolder']);

	if(array_key_exists("folder_id", $_GET) AND is_numeric($_GET['folder_id'])) {

		$my_folders = load_folders($session->sess_info['user_info']['id']);

		if(array_key_exists($_GET['folder_id'], $my_folders)) {

			if($db->query("DELETE FROM ".TABLE_PREFIX."messages WHERE message_folder_id = '{$_GET['folder_id']}' AND message_recipient_id = '{$session->sess_info['user_info']['id']}'")) {

				$template->parse('msgbox', array(

					'box_title' => $lang['MessengerEmptyingFolder'],
					'content' => $lang['MessengerFolderEmptied']
					)

				);

			}

		} else {

			//
			// No emptying Bob or Joe's folders, just yours!
			//

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => $lang['MessengerNonexistantFolder']
				)
				
			);    

		}

	} else {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], 'folder_id')
			)
				
		);
	}

}

//
// Add new virtual directory.
//

function new_folder() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerCreatingNewFolder']);
	
	//
	// Was the form submitted?
	//

	if(array_key_exists('submit', $_POST)) {

		//
		// Missing fields?
		//

		if(!array_key_exists('folder_title', $_POST)) {

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => sprintf($lang['MissingFields'], 'folder_title')
				)
					
			);

		} else {
		
			$folder_title = (get_magic_quotes_gpc()) ? $_POST['folder_title'] : addslashes($_POST['folder_title']);

			//
			// Insert into the database.
			//

			$db->query('INSERT INTO '.TABLE_PREFIX.'folders (folder_title, folder_user_id) VALUES ("'. trim($folder_title) .'", "'. $session->sess_info['user_info']['id'] .'")');

			$template->parse('msgbox', array(

				'box_title' => $lang['MessengerCreatingNewFolder'],
				'content' => $lang['MessengerFolderCreated']
				
				)

			);

		}

	} else {

		//
		// form, order up
		// 

		$template->parse('messenger_new_folder_form', array(

			'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_folder')),
			'folder_title' => $lang['MessengerFolderTitle'],
			'create_folder' => $lang['MessengerCreateFolder'],
			'creating_new_folder' => $lang['MessengerCreatingFolder'],

			)

		);

	}

}

//
// View Folder List
//

function view_folders() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerFolderListing']);

	$my_folders = load_folders($session->sess_info['user_info']['id']);

	//
	// filter out global folders
	//

	foreach ($my_folders AS $id => $title) {

		if($id < 5) {

			unset($my_folders[$id]);

		}
	}
	
	if(count($my_folders) > 0) {

		$template->parse('messenger_folder_list_header', array('create_folder' => $lang['MessengerCreateFolder'], 'create_folder_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_folder'), false), 'folder_listing' => $lang['MessengerFolderListing'], 'title' => $lang['MessengerTitle'], 'options' => $lang['MessengerOptions']));

		foreach ($my_folders AS $id => $title) {

			$template->parse('messenger_folder_list_row', array('title' => $title, 'edit' => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'edit_folder', 'folder_id' => $id)).'">'. $lang['MessengerEdit'] .'</a>', 'delete' => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'delete_folder', 'folder_id' => $id)).'">'. $lang['MessengerDelete'] .'</a>'));

		}

		$template->parse('messenger_folder_list_footer');

	} else {

	   $template->parse('msgbox', array(

		   'box_title' => $lang['MessengerFolderListing'],
		   'content' => $lang['MessengerNoFolders'],
		   'make_a_folder' => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'new_folder')) .'">'. $lang['MessengerMakeAFolder'] .'</a>',
				
		   )

		);

	}

}

//
// edit a folder
//

function edit_folder () {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerEditingFolder']);

	if(!array_key_exists('folder_id', $_GET) OR !is_numeric($_GET['folder_id'])) {
		
		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], 'folder_id')
			)
					
		);

	} else {

		//
		// Is this folder editable?
		//
		   
		$my_folders = load_folders($session->sess_info['user_info']['id']);

		foreach($my_folders AS $id => $title) {

			if($id < 5) {

				unset($my_folders[$id]);

			}

		}

		if(!array_key_exists($_GET['folder_id'], $my_folders)) {

			$template->parse('msgbox', array(

				'box_title' => $lang['Error'],
				'content' => $lang['MessengerNonexistantFolder']

				)
				
			);
		
		} else {

			if(array_key_exists('submit', $_POST)) {

				if(array_key_exists('folder_title', $_POST) AND $_POST['folder_title'] !== '') {

					$folder_title = (get_magic_quotes_gpc()) ? trim($_POST['folder_title']) : trim(addslashes($_POST['folder_title']));

					$db->query('UPDATE '.TABLE_PREFIX.'folders SET folder_title = "'. $folder_title .'" WHERE folder_user_id = "'. $session->sess_info['user_info']['id'] .'" AND folder_id = "'. $_GET['folder_id'] .'" LIMIT 1');

					$template->parse('msgbox', array(

						'box_title' => $lang['MessengerFolderUpdated'],
						'content' => $lang['MessengerFolderUpdatedDesc']
						)
						
					);

				} else {

					$template->parse('msgbox', array(

						'box_title' => $lang['Error'],
						'content' => sprintf($lang['MissingFields'], 'folder_title')
						)
						
					);
				}

			} else {

				//
				// no submit, show form
				//

				$template->parse('messenger_edit_folder_form', array(

					'creating_new_folder' => $lang['MessengerEditingFolder'], // I'm lazy
					'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'edit_folder', 'folder_id' => $_GET['folder_id']), false),
					'folder_title' => $lang['MessengerFolderTitle'],
					'update_folder' => $lang['MessengerUpdateFolder'],
					'the_title' => $my_folders[$_GET['folder_id']]
						
					)

				);

			}

		}

	}

}

//
// delete a folder
//

function delete_folder() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerDeletingFolder']);
	
	if(array_key_exists('folder_id', $_GET)) {

		if(array_key_exists('submit', $_POST)) {

			$required = array('confirm', 'save_messages');
			
			$missing = array();

			foreach($required AS $key) {

				if(!array_key_exists($key, $_POST) OR $_POST[$key] == '') {

					$missing[] = $key;

				}

			}

			if(count($missing) > 0) {

				$template->parse('msgbox', array(

					'box_title' => $lang['Error'],
					'content' => sprintf($lang['MissingFields'], join(', ', $missing))
					)
							
				);

			} else {

				if($_POST['save_messages'] == '1') {

					$my_folders = load_folders($session->sess_info['user_info']['id']);

					$db->query('UPDATE '.TABLE_PREFIX.'messages SET message_folder_id = "'.$_POST['destination_folder'].'" WHERE message_folder_id = "'.$_GET['folder_id'].'" AND message_recipient_id = "'. $session->sess_info['user_info']['id'] .'"');
		  
					$db->query('DELETE FROM '.TABLE_PREFIX.'folders WHERE folder_id = "'.$_GET['folder_id'].'" AND folder_user_id = "'.$session->sess_info['user_info']['id'].'"');

					$template->parse('msgbox', array(

						'box_title' => $lang['MessengerFolderDeleted'],
						'content' => $lang['MessengerFolderDeletedDesc']
						)
								
					);
					
				} else {

					$db->query('DELETE FROM '.TABLE_PREFIX.'messages WHERE message_folder_id = "'. $_GET['folder_id'] .'" AND message_recipient_id = "'. $session->sess_info['user_info']['id'] .'"');

					$db->query('DELETE FROM '.TABLE_PREFIX.'folders WHERE folder_id = "'.$_GET['folder_id'].'" AND folder_user_id = "'.$session->sess_info['user_info']['id'].'"');
				
					$template->parse('msgbox', array(

						'box_title' => $lang['MessengerFolderDeleted'],
						'content' => $lang['MessengerFolderDeletedDesc']
						)
								
					);

				}

			} 

		} else {

			//
			// show form
			//

			$my_folders = load_folders($session->sess_info['user_info']['id']);

			//
			// is the folder ours?
			//

			if(array_key_exists($_GET['folder_id'], $my_folders) AND $_GET['folder_id'] > 4) {

				$options = '';

				foreach ($my_folders AS $id => $title) {

					if(intval($id) !== intval($_GET['folder_id'])) { // technically intval() shouldn't be neccessary, but go figure.

						$options .= '<option value="'. $id .'">'.$title.'</option>';

					}

				}

				$template->parse('messenger_delete_folder_form', array(
				
					'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'delete_folder', 'folder_id' => $_GET['folder_id']), false),
					'deleting_folder' => $lang['MessengerDeletingFolder'],
					'confirm' => sprintf($lang['MessengerConfirmDelete'], $my_folders[$_GET['folder_id']]),
					'save_messages' => $lang['MessengerSaveMessages'],
					'destination_folder' => $lang['MessengerDestinationFolder'],
					'choose' => $lang['MessengerChoose'],
					'move_options' => $options,
					'delete_folder' => $lang['MessengerDeleteFolder'],
					'yes' => $lang['MessengerYes'],
					'no' => $lang['MessengerNo']


					)
						
				);

			} else {

				$template->parse('msgbox', array(

					'box_title' => $lang['Error'],
					'content' => $lang['MessengerNonexistantFolder']

					)
					
				);
				
			}

		}

	} else {

		$template->parse('msgbox', array(

			'box_title' => $lang['Error'],
			'content' => sprintf($lang['MissingFields'], 'folder_id')
			
			)
							
		);       

	}

}

//
// Manage spam filters (or ignore, as Slicer at the community forums puts it) :D
// Bloody hell this is the last function to write. I hope you all enjoy this more than I enjoyed writing it ;)
//

function manage_filters() {

	global $template, $db, $lang, $session, $functions;

	$template->set_page_title($lang['MessengerSpamFilters']);

	if(array_key_exists('submit', $_POST)) {

		//
		// does this user have a filter in the db, if so, use UPDATE
		//

		$check_4_filter = $db->query('SELECT * FROM '.TABLE_PREFIX.'filters WHERE filter_user_id = "'. $session->sess_info['user_info']['id'] .'" LIMIT 1');

		$use_update = 0;

		if($db->num_rows($check_4_filter) > 0) {

			$use_update = 1;

		}

		if(array_key_exists('disable_pms', $_POST) AND $_POST['disable_pms'] == '1') {

			switch($use_update) {

				case 1:
					$db->query('UPDATE '.TABLE_PREFIX.'filters SET filter_method="DISABLE ALL" WHERE filter_user_id = "'. $session->sess_info['user_info']['id'] .'" LIMTI 1');
					break;

				case 0:
					$db->query('INSERT INTO '.TABLE_PREFIX.'filters (filter_user_id, filter_method, filter_names) VALUES ("'. $session->sess_info['user_info']['id'] .'", "DISALLOW ALL", NULL)');
					break;

			}

			$template->parse('msgbox', array(

				'box_title' => $lang['MessengerFiltersUpdated'],
				'content' => $lang['MessengerFiltersUpdatedDesc']
			
				)
							
			);   

		} else {

			$filter_names = $_POST['filter_names'];
			$filter_method = $_POST['filter_method'];

			switch($use_update) {

				case 1:
					$db->query('UPDATE '.TABLE_PREFIX.'filters SET filter_method="'.$filter_method.'", filter_names ="'.$filter_names.'" WHERE filter_user_id = "'. $session->sess_info['user_info']['id'] .'" LIMIT 1');
					break;

				case 0:
					$db->query('INSERT INTO '.TABLE_PREFIX.'filters (filter_user_id, filter_method, filter_names) VALUES ("'. $session->sess_info['user_info']['id'] .'", "'.$filter_method.'", "'.$filter_names.'")');
					break;

			}

			$template->parse('msgbox', array(

				'box_title' => $lang['MessengerFiltersUpdated'],
				'content' => $lang['MessengerFiltersUpdatedDesc']
			
				)
							
			);   

		}           

	} else {
		
		//
		// show form
		//

		//
		// do we have this users filter already made?
		//

		$result = $db->query('SELECT * FROM '.TABLE_PREFIX.'filters WHERE filter_user_id = "'. $session->sess_info['user_info']['id'] .'" LIMIT 1');

		if ($db->num_rows($result) > 0 ) {

			$filter_data = $db->fetch_result($result);

			$filter_names = $filter_data['filter_names'];
			$filter_method = $filter_data['filter_method'];
		
		} else {

			$filter_names = '';
			$filter_method = 'DISALLOW THESE';
			
		}

		$method_options = '<option value="DISALLOW THESE"'; if($filter_method == 'DISALLOW THESE') { $method_options .= 'selected="selected"'; } $method_options .='>DISALLOW THESE</option>';

		$method_options .='<option value="ONLY ALLOW THESE"'; if($filter_method == 'ONLY ALLOW THESE') { $method_options .= 'selected="selected"'; } $method_options .='>ONLY ALLOW THESE</option>';

		$template->parse('messenger_filter_form', array(

			'form_url' => $functions->make_url('panel.php', array('act' => 'messenger', 'op' => 'manage_filters'), false),
			'names_textarea' => '<textarea rows="'.$template->get_config('textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="filter_names"  wrap="hard">'.$filter_names.'</textarea>',
			'managing_filters' => $lang['MessengerSpamFilters'],
			'method' => $lang['MessengerFilterMethod'],
			'method_options' => $method_options,
			'names' => $lang['MessengerFilterNames'],
			'names_desc' => $lang['MessengerFilterNamesDesc'],
			'disable_pms' => $lang['MessengerDisablePMs'],
			'yes' => $lang['MessengerYes'],
			'no' => $lang['MessengerNo'],
			'submit' => $lang['MessengerSubmit'],

			)

		);

	}

}

/* Utility Functions --------------------------------------------------*/

//
// Load a users virtual folders
//

function load_folders($user_id) {

	global $db;

	//
	// NOTE: a folder_user_id of 0 denotes a global folder.
	//

	if($result = $db->query("SELECT * FROM ".TABLE_PREFIX."folders WHERE folder_user_id = {$user_id} OR folder_user_id = '0'")) {

		if(!$db->num_rows($result)>0) {

			return false;

		} else {

			while($row = $db->fetch_result($result)) {

				$folders[$row['folder_id']] = $row['folder_title'];

			}

			return $folders;

		}

	} else {

		return false;

	}

}

//
// Validate a user and return user id on success
//

function validate_user($user) {

	global $db;

	$result = $db->query('SELECT * FROM '.TABLE_PREFIX.'users WHERE name = "'.$user.'" LIMIT 1');

	if($db->num_rows($result) >= 1) {

		$user_data = $db->fetch_result($result);

		return $user_data['id'];

	} else {

		return false;

	}

}

//
// check if a user is blocked due to a recipient's spam filters
//

function can_message($user, $recipient_id) {

	global $db, $session;

	//
	// Are we dumb enough to PM ourself?
	//

	if($user == $session->sess_info['user_info']['name'] AND $recipient_id == $session->sess_info['user_info']['id']) {

		return true;

	}

	$result = $db->query('SELECT * FROM '.TABLE_PREFIX.'filters WHERE filter_user_id = "'.$recipient_id.'" LIMIT 1');

	if($db->num_rows($result) > 0) {

		$filter_data = $db->fetch_result($result);

		$names = explode(',', $filter_data['filter_names']);

		switch($filter_data['filter_method']) {

			case 'ONLY ALLOW THESE':
				if(in_array($user, $names)) {

					return true;

				} else {

					return false;

				}

				break;

			case 'DISALLOW THESE':
			   if(in_array($user, $names)) {

					return false;

				} else {

					return true;

				}

				break;

			case 'DISALLOW ALL':
				return false;
				break;

		}

	} else {

		return true;

	}

}

//
// notify users of pms
//

function notify($user_id) {

    global $functions, $db;

    $result = $db->query('SELECT * FROM '.TABLE_PREFIX.'users WHERE id ="'. $user_id .'" LIMIT 1');

    $data = $db->fetch_result($result);

    $message = "Dear ".$data['name'].":\n\n You have a new personal message in your inbox at ".$functions->get_config('board_name').". You can view your inbox at the below URL: \n\n ". $functions->get_config('board_url') . $functions->make_url('panel.php', array('act' => 'messenger'), true)."\n\n Thanks.\n\n- - - - - - - - - - - - - - - - - - - - - \nThis is a server generated message. Please do not reply!\n - - - - - - - - - - - - - - - - - - - - - \n\n";
    
    mail($data['email'], "New Personal Message at ".$functions->get_config('board_name'), $message, "From: ". $functions->get_config('board_name') ."\nX-Mailer: PHP/" . phpversion());
    
    return true;


}

/* Seacrest Out */
?>