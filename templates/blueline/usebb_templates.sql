insert  into usebb_templates values 
('normal_header', 'default', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html>\r\n<head>\r\n  <title>{board_name}: {page_title}</title>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />\r\n  <link rel=\"stylesheet\" type=\"text/css\" href=\"{css_url}\" />\r\n</head>\r\n<body>\r\n  <div align=\"center\">\r\n  <div class=\"main\">\r\n  \r\n  <table class=\"header\">\r\n  <tbody>\r\n    <tr>\r\n      <td class=\"logo\"><a href=\"{link_home}\"><img src=\"{img_dir}usebb.gif\" alt=\"UseBB\" title=\"{home}\" /></a></td>\r\n      <td class=\"namebox\" nowrap=\"nowrap\"><div class=\"title\">{board_name}</div><div class=\"descr\">{board_descr}</div></td>\r\n    </tr>\r\n  </tbody>\r\n  </table>\r\n  \r\n  <div class=\"menu\">\r\n    <a href=\"{link_home}\" accesskey=\"h\">{home}</a><a href=\"{link_reg_panel}\">{reg_panel}</a><a href=\"{link_faq}\">{faq}</a><a href=\"{link_search}\">{search}</a><a href=\"{link_active}\">{active}</a><a href=\"{link_log_inout}\">{log_inout}</a>  </div>'), 
('normal_footer', 'default', '  <div class=\"linkbar\">\r\n    {link_bar}\r\n  </div>\r\n  <div class=\"copyright\">\r\n    {copyright}\r\n  </div>\r\n  \r\n  </div>\r\n  </div>\r\n</body>\r\n\r\n</html>'), 
('forumlist_header', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{forum}</th>\r\n      <th>{topics}</th>\r\n      <th>{posts}</th>\r\n      <th nowrap=\"nowrap\">{latest_post}</th>\r\n    </tr>'), 
('css', 'default', 'body {\r\n  margin: 0px;\r\n  padding: 0px;\r\n  background-color: #EFEFEF;\r\n  }\r\nbody, td, th {\r\n  font-family: verdana, sans-serif;\r\n  font-size: 10pt;\r\n  color: #000000;\r\n  }\r\nimg {\r\n  border: 0px;\r\n  }\r\nform {\r\n  margin: 0px;\r\n  }\r\nlabel {\r\n  cursor: pointer;\r\n  }\r\nhr {\r\n  border: 0px solid silver;\r\n  border-top-width: 1px;\r\n  height: 0px;\r\n  }\r\nsmall {\r\n  font-size: 8pt;\r\n  }\r\na:link, a:active, a:visited {\r\n  color: #336699;\r\n  text-decoration: none;\r\n  }\r\na:hover {\r\n  color: #FF9C00;\r\n  text-decoration: none;\r\n  }\r\na.administrator:link, a.administrator:active, a.administrator:visited {\r\n  color: red;\r\n  font-weight: bold;\r\n  }\r\na.moderator:link, a.moderator:active, a.moderator:visited {\r\n  color: green;\r\n  font-weight: bold;\r\n  }\r\ninput, select, textarea {\r\n  border: 1px solid silver;\r\n  background-color: #FFFFFF;\r\n  font-size: 10pt;\r\n  }\r\ntextarea {\r\n  font-family: verdana, sans-serif;\r\n  font-size: 8pt;\r\n  }\r\n.main {\r\n  width: 85%;\r\n  padding: 20px;\r\n  margin-top: 20px;\r\n  margin-bottom: 20px;\r\n  background-color: #FFFFFF;\r\n  border-left: 1px solid #000000;\r\n  border-right: 1px solid #000000;\r\n  border-top: 1px solid #000000;\r\n  border-bottom: 1px solid #000000;\r\n  }\r\n.header {\r\n  border-collapse: collapse;\r\n  width: 100%;\r\n  margin-bottom: 10px;\r\n  }\r\n.header td {\r\n  padding: 0px;\r\n  vertical-align: bottom;\r\n  }\r\n.header td.logo {\r\n  text-align: left;\r\n  width: 100%;\r\n  }\r\n.header td.namebox {\r\n  text-align: right;\r\n  }\r\n.header td.namebox .title {\r\n  font-family: \"trebuchet ms\", sans-serif;\r\n  font-size: 16pt;\r\n  font-weight: bold;\r\n  letter-spacing: 1px;\r\n  color: #000000;\r\n  border-bottom: 3px solid #FF9C00;\r\n  }\r\n.header td.namebox .descr {\r\n  font-style: italic;\r\n  padding-top: 2px;\r\n  }\r\n.menu {\r\n  border: 1px solid #000000;\r\n  background-image: url({img_dir}menubg.gif);\r\n  background-repeat: repeat-x;\r\n  background-color: #E5E5E5;\r\n  text-align: left;\r\n  padding-top: 4px;\r\n  padding-bottom: 4px;\r\n  margin-bottom: 20px;\r\n  font-size: 8pt;\r\n  }\r\n.menu a {\r\n  padding-left: 10px;\r\n  padding-right: 10px;\r\n  padding-top: 4px;\r\n  padding-bottom: 4px;\r\n  border-right: 1px solid #000000;\r\n  }\r\n.menu a:hover {\r\n  background-image: url({img_dir}menubg2.gif);\r\n  background-repeat: repeat-x;\r\n  background-color: #FFFFFF;\r\n  text-decoration: none;\r\n  border-right: 1px solid #000000;\r\n  }\r\n.locationbar {\r\n  text-align: left;\r\n  margin-bottom: 20px;\r\n  }\r\n.maintable, .msgbox, .confirmform {\r\n  border-collapse: collapse;\r\n  border-left: 1px solid #000000;\r\n  border-right: 1px solid #000000;\r\n  border-bottom: 1px solid #000000;\r\n  margin-bottom: 20px;\r\n  }\r\n.maintable th, .msgbox th, .confirmform th {\r\n  color: #FFFFFF;\r\n  font-weight: bold;\r\n  font-size: 8pt;\r\n  background-color: #000000;\r\n  background-image: url({img_dir}tableheadbg.gif);\r\n  background-position: top;\r\n  background-repeat: repeat-x;\r\n  text-align: left;\r\n  padding: 6px;\r\n  padding-top: 3px;\r\n  padding-bottom: 3px;\r\n  border-left: 1px solid #000000;\r\n  border-top: 1px solid #000000;\r\n  }\r\n.maintable td, .msgbox td, .confirmform td {\r\n  background-color: #EFEFEF;\r\n  padding: 6px;\r\n  text-align: left;\r\n  border-left: 1px solid #000000;\r\n  border-top: 1px solid #000000;\r\n  vertical-align: middle;\r\n  }\r\n.maintable {\r\n  width: 100%;\r\n  }\r\n.maintable td.forumcat {\r\n  font-weight: bold;\r\n  background-image: url({img_dir}menubg.gif);\r\n  background-repeat: repeat-x;\r\n  background-color: #E5E5E5;\r\n  }\r\n.maintable td.toolbar {\r\n  background-image: url({img_dir}menubg.gif);\r\n  background-repeat: repeat-x;\r\n  background-color: #E5E5E5;\r\n  }\r\n.maintable td.toolbar img {\r\n  margin-left: 5px;\r\n  }\r\n.maintable td.td1 {\r\n  background-color: #EFEFEF;\r\n  }\r\n.maintable td.td2 {\r\n  background-color: #E5E5E5;\r\n  }\r\n.maintable tr.post {\r\n  border-left: 1px solid #000000;\r\n  }\r\n.maintable tr.post td {\r\n  vertical-align: top;\r\n  border-left: 0px;\r\n  }\r\n.msgbox td, .confirmform td.content {\r\n  padding: 18px;\r\n  padding-left: 36px;\r\n  padding-right: 36px;\r\n  }\r\n.confirmform td.buttons {\r\n  background-color: #E5E5E5;\r\n  }\r\n.avatar {\r\n  margin-top: 10px;\r\n  }\r\n.avatar img {\r\n  margin-bottom: 10px;\r\n  }\r\n.postlinks {\r\n  float: right;\r\n  font-size: 8pt;\r\n  }\r\n.postcontent {\r\n  padding-top: 6px;\r\n  padding-bottom: 6px;\r\n  overflow: auto;\r\n  }\r\n.panelmenu {\r\n  border-collapse: collapse;\r\n  border-left: 1px solid #000000;\r\n  border-right: 1px solid #000000;\r\n  border-bottom: 1px solid #000000;\r\n  margin-bottom: 20px;\r\n  }\r\n.panelmenu td {\r\n  background-color: #E5E5E5;\r\n  padding: 5px;\r\n  padding-left: 15px;\r\n  padding-right: 15px;\r\n  text-align: center;\r\n  border-left: 1px solid #000000;\r\n  border-top: 1px solid #000000;\r\n  vertical-align: middle;\r\n  font-size: 8pt;\r\n  }\r\n.banners {\r\n  text-align: center;\r\n  margin-bottom: 2px;\r\n  }\r\n.linkbar {\r\n  color: #323232;\r\n  margin-bottom: 20px;\r\n  font-size: 8pt;\r\n  }\r\n.copyright {\r\n  color: #323232;\r\n  font-size: 8pt;\r\n  }'), 
('panel_menu', 'default', '  <table class=\"panelmenu\">\r\n  <tbody>\r\n    <tr>\r\n      <td class=\"td2\"><b>{yourpanel}</b></td>\r\n      <td>{panel_home}</td>\r\n      <td>{view_profile}</td>\r\n      <td>{panel_profile}</td>\r\n      <td>{panel_options}</td>\r\n      <td>{panel_passwd}</td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('forumlist_footer', 'default', '  </tbody>\r\n  </table>'), 
('topiclist_topic', 'default', '    <tr>\r\n      <td class=\"td1\" width=\"1\"><img src=\"{img_dir}{topic_icon}\" alt=\"{topic_status}\" /></td>\r\n      <td class=\"td1\" width=\"100%\">{topic_name}</td>\r\n      <td class=\"td1\" nowrap=\"nowrap\"><div align=\"center\"><small>{author}</small></div></td>\r\n      <td class=\"td2\"><div align=\"center\">{replies}</div></td>\r\n      <td class=\"td2\"><div align=\"center\">{views}</div></td>\r\n      <td class=\"td1\" nowrap=\"nowrap\"><small>{author_date}</small></td>\r\n    </tr>'), 
('profile', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{title}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{username}</td><td class=\"td1\">{username_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{userid}</td><td class=\"td1\">{userid_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{level}</td><td class=\"td1\">{level_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{rank}</td><td class=\"td1\">{rank_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{avatar}</td><td class=\"td1\">{avatar_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{regdate}</td><td class=\"td1\">{regdate_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{posts}</td><td class=\"td1\">{posts_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{postsperday}</td><td class=\"td1\">{postsperday_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{lastlogin}</td><td class=\"td1\">{lastlogin_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{location}</td><td class=\"td1\">{location_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{website}</td><td class=\"td1\">{website_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{occupation}</td><td class=\"td1\">{occupation_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{interests}</td><td class=\"td1\">{interests_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{signature}</td><td class=\"td1\"><small>{signature_v}</small></td>\r\n    </tr>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{contact_info}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{email}</td><td class=\"td1\">{email_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{msnm}</td><td class=\"td1\">{msnm_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{yahoom}</td><td class=\"td1\">{yahoom_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{aim}</td><td class=\"td1\">{aim_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{icq}</td><td class=\"td1\">{icq_v} {icq_status}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{jabber}</td><td class=\"td1\">{jabber_v}</td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('register_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{register_form}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{user}</td>\r\n    <td class=\"td1\">{user_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{email}</td>\r\n    <td class=\"td1\">{email_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td1\"><small>{everything_required}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('login_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{login}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{user}</td>\r\n    <td class=\"td1\">{user_input}<br /><small>{link_reg}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{password}</td>\r\n    <td class=\"td1\">{password_input}<br /><small>{link_sendpwd}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{remember}</td>\r\n    <td class=\"td1\">{remember_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('msgbox', 'default', '  <table class=\"msgbox\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th>{box_title}</th>\r\n    </tr>\r\n    <tr>\r\n      <td>{content}</td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('sendpwd_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{sendpwd}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{user}</td>\r\n    <td class=\"td1\">{user_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{email}</td>\r\n    <td class=\"td1\">{email_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td1\"><small>{everything_required}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('forumlist_cat', 'default', '  <tr>\r\n    <td colspan=\"5\" class=\"forumcat\"><small>&raquo;</small> {cat_name}</td>\r\n  </tr>'), 
('forumlist_stats', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{stats_title}</th>\r\n    </tr>\r\n    <tr>\r\n      <td rowspan=\"2\" width=\"1\"><img src=\"{img_dir}stats.gif\" alt=\"{stats_title}\" /></td>\r\n      <td>{small_stats}<br />{newest_member}</td>\r\n    </tr>\r\n    <tr>\r\n      <td>{users_online}<br />\r\n      <small>{members_online}</small>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('edit_profile', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{edit_profile}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{email}</td><td class=\"td1\">{email_input}&nbsp;<span class=\"small\">{required}</span></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{avatar}</td><td class=\"td1\">{avatar_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{location}</td><td class=\"td1\">{location_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{website}</td><td class=\"td1\">{website_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{occupation}</td><td class=\"td1\">{occupation_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{interests}</td><td class=\"td1\">{interests_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{signature}</td><td class=\"td1\">{signature_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{msnm}</td><td class=\"td1\">{msnm_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{yahoom}</td><td class=\"td1\">{yahoom_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{aim}</td><td class=\"td1\">{aim_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{icq}</td><td class=\"td1\">{icq_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{jabber}</td><td class=\"td1\">{jabber_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n    </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('mail_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{sendemail}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{from}</td>\r\n    <td class=\"td1\">{from_v}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{to}</td>\r\n    <td class=\"td1\">{to_v}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{subject}</td>\r\n    <td class=\"td1\">{subject_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{body}</td><td class=\"td1\">{body_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td1\"><small>{everything_required}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('panel_sess_info', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{title}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{sess_id}</td><td class=\"td1\">{sess_id_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{ip_addr}</td><td class=\"td1\">{ip_addr_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{started}</td><td class=\"td1\">{started_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{updated}</td><td class=\"td1\">{updated_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{total_time}</td><td class=\"td1\">{total_time_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{pages}</td><td class=\"td1\">{pages_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{al}</td><td class=\"td1\">{al_v}</td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('edit_options', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{edit_options}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{language}</td>\r\n    <td class=\"td1\">{language_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{template}</td>\r\n    <td class=\"td1\">{template_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{email_show}</td>\r\n    <td class=\"td1\">{email_show_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{last_login_show}</td>\r\n    <td class=\"td1\">{last_login_show_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{date_format}</td>\r\n    <td class=\"td1\">{date_format_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{timezone}</td>\r\n    <td class=\"td1\">{timezone_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{dst}</td>\r\n    <td class=\"td1\">{dst_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{quickreply}</td>\r\n    <td class=\"td1\">{quickreply_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{return_to_topic}</td>\r\n    <td class=\"td1\">{return_to_topic_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('editpwd_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{edit_pwd}</th>\r\n    </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{current_passwd}</td>\r\n    <td class=\"td1\">{current_passwd_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{new_passwd}</td>\r\n    <td class=\"td1\">{new_passwd1_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td width=\"25%\" class=\"td2\">{new_passwd_again}</td>\r\n    <td class=\"td1\">{new_passwd2_input}</td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td1\"><small>{everything_required}</small></td>\r\n  </tr>\r\n  <tr>\r\n    <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('location_bar', 'default', '  <div class=\"locationbar\">\r\n    &bull; {location_bar}\r\n  </div>'), 
('topiclist_header', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr>\r\n      <td colspan=\"6\" class=\"toolbar\"><div align=\"right\">\r\n        {new_topic_link}\r\n      </div></td>\r\n    </tr>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\" width=\"100%\">{topic}</th>\r\n      <th>{author}</th>\r\n      <th>{replies}</th>\r\n      <th>{views}</th>\r\n      <th nowrap=\"nowrap\">{latest_post}</th>\r\n    </tr>'), 
('forumlist_forum', 'default', '    <tr>\r\n      <td class=\"td1\"><img src=\"{img_dir}{forum_icon}\" alt=\"{forum_status}\" /></td>\r\n      <td class=\"td1\" width=\"100%\">{forum_name}<br /><small>{forum_descr}</small></td>\r\n      <td class=\"td2\"><div align=\"center\">{total_topics}</div></td>\r\n      <td class=\"td2\"><div align=\"center\">{total_posts}</div></td>\r\n      <td class=\"td1\" nowrap=\"nowrap\"><small>{latest_post}<br />{author_date}</small></td>\r\n    </tr>'), 
('topiclist_footer', 'default', '    <tr>\r\n      <td colspan=\"6\" class=\"toolbar\"><div align=\"right\">\r\n        {new_topic_link}\r\n      </div></td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"6\" class=\"td2\">\r\n        <small>{forum_moderators}</small>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('confirm_form', 'default', '  {form_begin}\r\n  <table class=\"confirmform\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th>{title}</th>\r\n    </tr>\r\n  <tr>\r\n    <td class=\"content\">{content}</td>\r\n  </tr>\r\n  <tr>\r\n    <td class=\"buttons\"><div align=\"center\">{submit_button}&nbsp;{cancel_button}</div></td>\r\n  </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('topic_header', 'default', '  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"toolbar\"><div align=\"right\">\r\n        {new_topic_link}{reply_link}\r\n      </div></td>\r\n    </tr>\r\n    <tr class=\"tablehead\">\r\n      <th>{author}</th>\r\n      <th>{post}</th>\r\n    </tr>'), 
('topic_post', 'default', '    <tr class=\"post\">\r\n      <td class=\"td{colornum}\" width=\"15%\">\r\n        {poster_name}<br />\r\n        <small>{poster_rank}</small>\r\n        <div class=\"avatar\">{poster_avatar}</div>\r\n        <small>{registered}<br />{posts}<br />{location}</small>\r\n      </td>\r\n      <td class=\"td{colornum}\">\r\n        <div class=\"postlinks\">{post_links}</div>\r\n        {post_anchor} - {topic_title}<br /><small>{post_date}</small>\r\n        <hr /><div class=\"postcontent\">{post_content}</div>{poster_sig}\r\n      </td>\r\n    </tr>'), 
('topic_footer', 'default', '    <tr>\r\n      <td colspan=\"2\" class=\"toolbar\"><div align=\"right\">\r\n        {new_topic_link}{reply_link}\r\n      </div></td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"td2\">\r\n        <small>{action_links}</small>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n  </table>'), 
('post_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{post_title}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{username}</td><td class=\"td1\">{username_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{subject}</td><td class=\"td1\">{subject_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{content}</td><td class=\"td1\">{content_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{options}</td><td class=\"td1\"><small>{options_input}</small></td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n    </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('quick_reply', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{quick_reply}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{username}</td><td class=\"td1\">{username_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{content}</td><td class=\"td1\">{content_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{reset_button}</div></td>\r\n    </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}'), 
('topiclist_notopics', 'default', '    <tr>\r\n      <td class=\"msgboxcontent\" colspan=\"6\">\r\n        {notopics}\r\n      </td>\r\n    </tr>'), 
('move_topic_form', 'default', '  {form_begin}\r\n  <table class=\"maintable\">\r\n  <tbody>\r\n    <tr class=\"tablehead\">\r\n      <th colspan=\"2\">{move_topic}</th>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{topic}</td><td class=\"td1\">{topic_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{old_forum}</td><td class=\"td1\">{old_forum_v}</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\"25%\" class=\"td2\">{new_forum}</td><td class=\"td1\">{new_forum_input}</td>\r\n    </tr>\r\n    <tr>\r\n      <td colspan=\"2\" class=\"td2\"><div align=\"center\">{submit_button}&nbsp;{cancel_button}</div></td>\r\n    </tr>\r\n  </tbody>\r\n  </table>\r\n  {form_end}');
