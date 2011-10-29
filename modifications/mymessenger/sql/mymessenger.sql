#
# Table structure for table `usebb_messages`
#

CREATE TABLE `usebb_messages` (
  `message_id` int(11) NOT NULL auto_increment,
  `message_author_id` int(11) NOT NULL default '0',
  `message_recipient_id` int(11) NOT NULL default '0',
  `message_folder_id` mediumint(8) NOT NULL default '1',
  `message_title` varchar(255) NOT NULL default '',
  `message_content` text NOT NULL,
  `message_read` int(1) NOT NULL default '0',
  `message_date` varchar(255) NOT NULL default '',
  `message_copy_id` int(11) default NULL,
  PRIMARY KEY  (`message_id`)
) TYPE=MyISAM COMMENT='Stores messages.' AUTO_INCREMENT=1 ;

#
# Table structure for table `usebb_filters`
#

CREATE TABLE `usebb_filters` (
  `filter_id` int(11) NOT NULL auto_increment,
  `filter_user_id` int(11) NOT NULL default '0',
  `filter_method` varchar(255) NOT NULL default '',
  `filter_names` text NOT NULL,
  PRIMARY KEY  (`filter_id`)
) TYPE=MyISAM COMMENT='Stores spam filters.' AUTO_INCREMENT=1 ;

#
# Table structure for table `usebb_folders`
#

CREATE TABLE `usebb_folders` (
  `folder_id` int(11) NOT NULL auto_increment,
  `folder_user_id` int(11) NOT NULL default '0',
  `folder_title` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`folder_id`)
) TYPE=MyISAM COMMENT='Stores custom virtual folders.' AUTO_INCREMENT=11 ;

#
# Dumping data for table `usebb_folders`
#

INSERT INTO usebb_folders (folder_id, folder_user_id, folder_title) VALUES (1, 0, 'Inbox');
INSERT INTO usebb_folders (folder_id, folder_user_id, folder_title) VALUES (2, 0, 'Saved');
INSERT INTO usebb_folders (folder_id, folder_user_id, folder_title) VALUES (3, 0, 'Trash');
INSERT INTO usebb_folders (folder_id, folder_user_id, folder_title) VALUES (4, 0, 'Sent Messages');

INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFrom', 'English', 'Sender');
INSERT INTO usebb_language (name, language, content) VALUES ('MyMessenger', 'English', 'Messenger');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSubject', 'English', 'Subject');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDate', 'English', 'Date');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerUnread', 'English', 'New Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerReply', 'English', 'send reply');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSays', 'English', 'says');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMove', 'English', 'move to');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerComposeMessage', 'English', 'Compose Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerManageFolders', 'English', 'Manage Folders');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerManageFilters', 'English', 'Manage Filters');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSendTo', 'English', 'Send To');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSend', 'English', 'send');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCC', 'English', 'Forward To');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerContent', 'English', 'What you\'d like to say');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCompose', 'English', 'Composing New Private Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSendToDesc', 'English', 'Enter the username of the person which you would like to send this private message to.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCCDesc', 'English', 'Optionally enter usernames of people which you would like this message to be forewarded to. <strong>One username per line.</strong>');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageSent', 'English', 'Message Sent');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageSentDesc', 'English', 'Your private message has been successfully delivered.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageNotSent', 'English', 'Your private message could not be processed. Please go back and try again. If this does not fix the error, please contact the site administrator.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFakeCCs', 'English', 'The following user(s) in your forewarding list do(es) not appear to exist: %s. Please check that the username(s) are correct and try again.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSendToMemberDoesNotExist', 'English', 'The user which you have addressed this private message to does not appear to exist. Please check that the username is correct and try again.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageNotFound', 'English', 'The requested private message does not appear to exist.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerJumpToFolder', 'English', 'jump to folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMoveMessage', 'English', 'Moving Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerNonexistantFolder', 'English', 'The destination folder either does not exist or you may not have permission to execute the requested action.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageMoved', 'English', 'Your message has been moved.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerEmptyFolder', 'English', 'empty folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMessageNotMoved', 'English', 'The message could not be moved. Please go back and try again.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerEmptyingFolder', 'English', 'Emptying Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderEmptied', 'English', 'The folder has been emptied.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSentTo', 'English', 'Recipient');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerUnreadByRecipient', 'English', 'Unread By Recipient');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerForward', 'English', 'forward');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSendingReply', 'English', 'Sending Reply');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerOriginalMessage', 'English', 'Original Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerForwardingMessage', 'English', 'Forwarding Message');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCreatingFolder', 'English', 'Creating Virtual Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderTitle', 'English', 'Folder Title');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCreateFolder', 'English', 'create folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerUpdateFolder', 'English', 'update');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerEditingFolder', 'English', 'Editing Virtual Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDeletingFolder', 'English', 'Deleting Virtual Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSaveMessages', 'English', 'Save Messages?');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMoveMessagesToDir', 'English', 'Destination Directory for current messages?');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderListing', 'English', 'My Virtual Folders');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerTitle', 'English', 'Title');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerOptions', 'English', 'Options');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerEdit', 'English', 'Edit');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDelete', 'English', 'Delete');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCreatFolder', 'English', 'Create a Virtual Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerCreatingNewFolder', 'English', 'Creating New Virtual Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerNoFolders', 'English', 'You do not appear to have any custom virtual folders. Would you like to {make_a_folder}?');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerMakeAFolder', 'English', 'create one');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderCreated', 'English', 'Your custom virtual folder has been created!');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderUpdated', 'English', 'Folder Updated');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderUpdatedDesc', 'English', 'Your virtual folder has been successfully updated!');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerConfirmDelete', 'English', 'Are you sure you wish to permanently delete the virtual folder named "<strong>%s</strong>"?');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDestinationFolder', 'English', 'Destination Folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerChoose', 'English', 'Choose');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDeleteFolder', 'English', 'delete folder');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerYes', 'English', 'Yes');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerNo', 'English', 'No');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderDeleted', 'English', 'Folder Deleted');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFolderDeletedDesc', 'English', 'Your custom virtual folder has been successfully deleted.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSpamFilters', 'English', 'Managing Spam Filters');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFilterMethod', 'English', 'Filtering Method');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFilterNames', 'English', 'Usernames');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFilterNamesDesc', 'English', 'Enter a <strong>comma delimited</strong> list of usernames to filter.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerDisablePMs', 'English', 'Disallow all users from sending you personal messages? <strong>If yes, skip rest of form.</strong>');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerSubmit', 'English', 'submit');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFiltersUpdated', 'English', 'Spam Filters Updated');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerFiltersUpdatedDesc', 'English', 'Your spam filters have been successfully updated.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerNoPM', 'English', 'The person which you have adressed this personal message to has opted not to receive messages at this time.');
INSERT INTO usebb_language (name, language, content) VALUES ('MessengerNewMessages', 'English', 'You have new PMs!');
INSERT INTO `usebb_language` VALUES ('ViewInbox', 'English', 'Viewing Messages');
INSERT INTO `usebb_language` VALUES ('InboxEmpty', 'English', 'This folder appears to be empty.');
INSERT INTO `usebb_language` VALUES ('ViewMessage', 'English', 'Viewing Message');

#
# Dumping data for table `usebb_templates`
#

INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_inbox_header', 'default', ' <table class="maintable"> <tbody><tr> <td colspan="5" class="forumcat"><div style="float:right;width:auto;"><input type="button" onclick="window.location.href=\'{empty_url}\'" value="{empty_folder}" /></div>{viewing_inbox}</td> </tr> <tr class="tablehead"> <th width="50%">{subject}</th> <th width="15%">{from}</th> <th width="35%">{date}</th> </tr>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_inbox_row', 'default', '<tr> <td style="background:{bgcolor}">{message_title}</td> <td style="background:{bgcolor}">{message_author_name}</td> <td style="background:{bgcolor}">{message_date}</td> </tr> ');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_inbox_footer', 'default', '</table><br />');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_view_message', 'default', ' <table class="maintable"> \n<tbody>\n<tr> <td colspan="5" class="forumcat"><div style="float:right;width:auto"><input type="button" value="{forward}" onclick="window.location.href=\'{forward_url}\';"/><input type="button" value="{reply}" onclick="window.location.href=\'{reply_url}\';"/></div>{viewing_message}</td> </tr>\n <tr> <td width="25%" class="td2">{subject}</td> <td width="75%">{message_title}</td></tr>\n <tr><td width="25%" class="td2">{date}</td><td width="75%">{message_date}</td> </tr> \n<tr><td colspan="2" style="padding:10px;"><em>{message_sender} {says}</em>:<br /><br /><div style="padding-left:15px;padding-bottom:25px;">{message_content}</div></td></tr>\n<tr><td colspan="2" style="text-align:right;"><form method="get" action="panel.php"><input type="hidden" name="act" value="messenger" /><input type="hidden" name="op" value="move_message" /><input type="hidden" name="message_id" value="{message_id}" /><input type="submit" value="{move}"/> &nbsp;<select name="move_to">{move_options}</select></form></td></tr>\n</tbody>\n</table>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_menu', 'default', '<p align="center">[ {compose_message} | {manage_folders} | {manage_filters} ]</p><br />');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_compose_form', 'default', '<form method="post" action="{form_url}"><table class="maintable"> <tbody><tr><td colspan="5" class="forumcat">{composing_message}</td> </tr><tr><td width="25%" class="td2" style="vertical-align:top;">{subject}</td> <td width="75%"><input type="text" size="30" name="message_title" /></td></tr><tr><td width="25%"  valign="top" class="td2" style="vertical-align:top;">{send_to}<br/><br /><small><em>{send_desc}</em></small></td><td width="75%"><input type="text" size="30" name="message_send_to" /> </td> </tr> <tr><td width="25%" class="td2" valign="top" style="vertical-align:top;">{cc_send_to}<br /><br /><small><em>{cc_desc}</em></small></td><td width="75%">{cc_textarea}</td></tr><tr><td width="25%" class="td2" style="vertical-align:top;">{content}</td><td width="75%">{content_textarea}</td></tr><tr><td colspan="2" style="text-align:right"><input name="submit" type="submit" value="{send}" /></td></tr></tbody></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_reply_form', 'default', '<form method="post" action="{form_url}"><table class="maintable"> <tbody><tr><td colspan="5" class="forumcat">{sending_reply}</td> </tr><tr><td width="25%" class="td2" style="vertical-align:top;">{subject}</td> <td width="75%"><input type="text" size="30" name="message_title" value="{reply_subject}" /></td></tr><tr><td width="25%"  valign="top" class="td2" style="vertical-align:top;">{send_to}</td><td width="75%"><input type="text" size="30" name="message_send_to" value="{reply_username}" /> </td> </tr> <tr><td width="25%" class="td2" valign="top" style="vertical-align:top;">{cc_send_to}<br /><br /><small><em>{cc_desc}</em></small></td><td width="75%">{cc_textarea}</td></tr><tr><td width="25%" class="td2" style="vertical-align:top;">{content}</td><td width="75%">{content_textarea}</td></tr><tr><td colspan="2" style="text-align:right"><input name="submit" type="submit" value="{send}" /></td></tr></tbody></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_folder_jump', 'default', '<div align="right"><form action="panel.php" method="get"><input type="hidden" name="act" value="messenger" /><input type="hidden" name="op" value="view_folder" /><input type="submit" value="{jump_to_folder}" /> <select name="show_folder">{folder_options}</select></form></div>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_forward_form', 'default', '<form method=\'post\' action=\'{form_url}\'><table class=\'maintable\'><tr class=\'tablehead\'><th colspan=\'2\'>{forwarding_message}</th></tr><tr><td widht=\'25%\'>{username}</td><td width=\'75%\'><input type=\'text\' name=\'username\' /></td></tr><tr><td colspan=\'2\' style=\'text-align:right\'><input type=\'submit\' value=\'{send}\' /></td></tr></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_new_folder_form', 'default', '<form action="{form_url}" method="post"><table class="maintable"><tr class="tablehead"><th colspan="2">{creating_new_folder}</th></tr><tr><td width="25%">{folder_title}</td><td width="75%"><input type="text" name="folder_title" maxlength="20" /></td></tr><tr><td colspan="2" style="text-align:right"><input type="submit" name="submit" value="{create_folder}" /></td></tr></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_edit_folder_form', 'default', '<form action="{form_url}" method="post"><table class="maintable"><tr class="tablehead"><th colspan="2">{creating_new_folder}</th></tr><tr><td width="25%" maxlength="20">{folder_title}</td><td width="75%"><input type="text" name="folder_title" value="{the_title}" maxlength="20" /></td></tr><tr><td colspan="2" style="text-align:right"><input type="submit" value="{update_folder}" name="submit"/></td></tr></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_folder_list_header', 'default', '<table class="maintable"><tr><th colspan="3\'" class="mainheading"><div style="float:right;width:auto;"><input type="button" value="{create_folder}" onclick="window.location.href=\'{create_folder_url}\'" /></div>{folder_listing}</th></tr><tr><td width="70%" class="forumcat">{title}</td><td class="forumcat" width="30%" align="center" colspan="2"> {options}</td></tr>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_folder_list_row', 'default', '<tr><td width="70%">{title}</td><td width="15%">{edit}</td><td width="15%">{delete}</td></tr>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_folder_list_footer', 'default', '</table>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_delete_folder_form', 'default', '<form method="post" action="{form_url}"><table class="maintable"><tr class="tablehead"><th colspan="2" >{deleting_folder}</th></tr><tr><td colspan="2" style="text-align:center">{confirm}<br />{yes}<input type="checkbox" name="confirm" value="1" /></td></tr><tr><td>{save_messages}</td><td>{yes}<input type="radio" name="save_messages" value="1" /> {no}<input type="radio" name="save_messages" value="0" /></td></tr><tr><td>{destination_folder}</td><td><select name="destination_folder">{move_options}</select></td></tr><tr><td colspan="2" style="text-align:right"><input type="submit" name="submit" value="{delete_folder}" /></td></tr></table></form>');
INSERT INTO usebb_templates (name, template, content) VALUES ('messenger_filter_form', 'default', '<form method=\'POST\' action=\'{form_url}\'><table class="maintable"><tr class="tablehead"><th colspan="2">{managing_filters}</th></tr><tr><td width="25%">{disable_pms}</td><td width="75%">{yes}<input type="checkbox" name="disable_pms" value="1" /></td></tr><tr><td width="25%">{method}</td><td width="75%"><select name="filter_method">{method_options}</select></td></tr><tr><td width="25%" style="vertical-align:top;">{names}<br/><br /><em>{names_desc}</em></td><td width="75%">{names_textarea}</td></tr><tr><td colspan="2" style="text-align:right"><input type="submit" name="submit" value="{submit}" /></td></tr></table></form>');
INSERT INTO `usebb_templates` VALUES ('panel_menu', 'default', '  <table class="panelmenu">\r\n  <tbody>\r\n    <tr>\r\n      <td class="td2"><b>{yourpanel}</b></td>\r\n      <td>{panel_home}</td>\r\n      <td>{view_profile}</td>\r\n      <td>{panel_profile}</td>\r\n      <td>{panel_options}</td>\r\n      <td>{panel_passwd}</td>\r\n      <td>{panel_messenger}</td>\r\n    </tr>\r\n  </tbody>\r\n  </table>');