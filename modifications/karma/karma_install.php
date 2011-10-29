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


$profile = '<table class="maintable">
	<tbody>
    <tr class="tablehead">
      <th colspan="2">{title}</th>
    </tr>
    <tr>
      <td width="25%" class="td2">{username}</td><td class="td1">{username_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{userid}</td><td class="td1">{userid_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{level}</td><td class="td1">{level_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{rank}</td><td class="td1">{rank_v}</td>
    </tr>
<td width="25%" class="td2">{karma}</td><td class="td1">{karma_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{avatar}</td><td class="td1">{avatar_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{regdate}</td><td class="td1">{regdate_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{posts}</td><td class="td1">{posts_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{postsperday}</td><td class="td1">{postsperday_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{lastlogin}</td><td class="td1">{lastlogin_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{location}</td><td class="td1">{location_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{website}</td><td class="td1">{website_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{occupation}</td><td class="td1">{occupation_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{interests}</td><td class="td1">{interests_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{signature}</td><td class="td1">{signature_v}</td>
    </tr>
    <tr class="tablehead">
      <th colspan="2">{contact_info}</th>
    </tr>
    <tr>
      <td width="25%" class="td2">{email}</td><td class="td1">{email_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{msnm}</td><td class="td1">{msnm_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{yahoom}</td><td class="td1">{yahoom_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{aim}</td><td class="td1">{aim_v}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{icq}</td><td class="td1">{icq_v} {icq_status}</td>
    </tr>
    <tr>
      <td width="25%" class="td2">{jabber}</td><td class="td1">{jabber_v}</td>
    </tr>
  </tbody>
  </table>';
$post = '<tr class="post">
      <td class="td{colornum}" width="15%">
        {poster_name}
        <div class="small">
          {poster_rank}<br />
{poster_karma} : {poster_karma_v}
{poster_karma_o}<br />
          {poster_avatar}
        </div>
      </td>
      <td class="td{colornum}">
        <div class="postlinks">{post_links}</div>
        <div class="small">{post_anchor} - {post_date}</div>
        <hr />{post_content}
      </td>
    </tr>';
  
if ( ! $db->query("CREATE TABLE ".TABLE_PREFIX."karma (
  id_u tinyint(4) NOT NULL default '0',
  id_v tinyint(4) NOT NULL default '0',
  vote tinyint(4) NOT NULL default '0',
  time int(11) NOT NULL default '0'
) TYPE=MyISAM")  &&
! $db->query("INSERT INTO ".TABLE_PREFIX."config VALUES ('karma_expiretime', '43200')")  &&
! $db->query("UPDATE ".TABLE_PREFIX."templates SET profile = '".$profile."', SET topic_post ='".$post."'") )
	echo "Mod is installed!";
	else
	echo "Install Failed";

?>
