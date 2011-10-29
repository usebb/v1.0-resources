<?php 
require_once('config.php'); 

mysql_select_db($database_connect, $connect);
if ($insert=="yes"){
	mysql_query("INSERT INTO usebb_forums SET id='', name='$name', cat_id='$cat_id', descr='$descr', status='1', topics='0', posts='0', last_topic_id='0', sort_id='$sort_id', auth='$auth', auto_lock='0', increase_post_count='1', hide_mods_list='$hide_mods_list'") or die(mysql_error());
}
if ($update=="yes"){
	mysql_query("UPDATE usebb_forums SET name='$name', cat_id='$cat_id', descr='$descr', status='$status', sort_id='$sort_id', auth='$auth', auto_lock='$auto_lock', increase_post_count='$increase_post_count', hide_mods_list='$hide_mods_list' WHERE id='$updateID'") or die(mysql_error());
}
if ($delete=="yes"){
	mysql_query("DELETE FROM usebb_forums WHERE id='$deleteID'") or die(mysql_error());
}
mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM usebb_forums";
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
mysql_select_db($database_connect, $connect);
$query_cats = "SELECT * FROM usebb_cats";
$cats = mysql_query($query_cats, $connect) or die(mysql_error());
$row_cats = mysql_fetch_assoc($cats);
$totalRows_cats = mysql_num_rows($cats);

?>
<body>
<?php include "index.php";?>
<p>
<form id="insert" name="insert" method="post" action="forums.php">
  <div align="center">
  <input name="insert" type="hidden" value="yes" />
  <table border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h4>Insert New Forum</h4>
      </div></td>
      </tr>
    <tr>
      <td><div align="right">Forum Name</div></td>
        <td><div align="left">
          <input type="text" name="name" />
        </div></td>
      </tr>
    <tr>
      <td><div align="right">Category </div></td>
        <td><div align="left">
        	<select name="select2">
        		<option value="Select">Select</option>
        		<?php
do {  
?>
        		<option value="<?php echo $row_cats['id']?>"><?php echo $row_cats['name']?></option>
        		<?php
} while ($row_cats = mysql_fetch_assoc($cats));
  $rows = mysql_num_rows($cats);
  if($rows > 0) {
      mysql_data_seek($cats, 0);
	  $row_cats = mysql_fetch_assoc($cats);
  }
?>
        		</select>
</div></td>
      </tr>
    <tr>
      <td><div align="right">Description</div></td>
        <td><div align="left">
          <textarea name="descr"></textarea>
        </div></td>
      </tr>
    <tr>
      <td><div align="right">Sort ID <span class="style1">(Lower numbers display first)</span></div></td>
      <td><div align="left">
          <input type="text" name="sort_id" />
      </div></td>
    </tr>
    <tr>
      <td><div align="right">Permissions</div></td>
      <td><div align="left">
        <input name="auth" type="text" value="0011222223" size="10"/>
      </div></td>
    </tr>
    <tr>
      <td><div align="right">Hide Moderators? </div></td>
      <td><div align="left">
        <p>
          <label>
            <input name="hide_mods_list" type="radio" value="0" checked="checked" />
            No</label>
          <br />
          <label>
            <input type="radio" name="hide_mods_list" value="1" />
            Yes</label>
          <br />
        </p>
      </div></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><div align="left">
        <input type="submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  </div>
</form>
<div align="center">
  <table border="1">
    <tr>
      <td><h4 align="center">ID</h4></td>
      <td><h4 align="center">Name</h4></td>
      <td><h4 align="center">Category  </h4></td>
      <td><div align="center">
      	<h4>Description</h4>
      </div></td>
      <td><div align="center">
      	<h4 align="center">Lockdown</h4>
      </div>
      	<div align="center"><span class="style1">No new posts accepted  </span></div></td>
      <td><div align="center">
      	<h4>Sort ID</h4>
		<span class="style1">Lower numbers display first      	</span></div></td>
      <td><div align="center">
      	<h4>Permissions</h4>
      </div>
      	<div align="center" class="style1">
      	See Below </div></td>
      <td><div align="center">
      	<h4>Auto Lock </h4>
      </div>
      	<div>
      		<div align="center" class="style2"><em>auto_lock</em> is the maximum number of replies a topic in   this forum can have. When this number is reached, the topic will be locked   automatically. Set this to 0 to disable auto_lock;</div>
      	</div></td>
      <td><div align="center">
      	<h4>Increase Post Count </h4>
      </div>
      	<div align="center" class="style2">Setting <em>increase_post_count</em> to 0 will make members posting in the forum   not have their post count increased. This is useful for <em>spamming</em> or   testing forums.</div></td>
      <td><div align="center">
      	<h4>Hide Moderators </h4>
      </div></td>
      <td><h4 align="center">Update</h4></td>
      <td><h4 align="center">Delete</h4></td>
    </tr>
 <?php 
 do{
 	$cat_id=$row_Recordset1['cat_id'];
	mysql_select_db($database_connect, $connect);
	$query_catsx = "SELECT * FROM usebb_cats WHERE id='$cat_id'";
	$catsx = mysql_query($query_Recordset1, $connect) or die(mysql_error());
	$row_catsx = mysql_fetch_assoc($catsx);
	$totalRows_catsx = mysql_num_rows($catsx);

	?>
    <tr>
 	<form action="forums.php" method="post" name="update" target="_self">
 	<input name="update" type="hidden" value="yes" />
 	<input name="updateID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
      <td valign="top"><div align="center"><?php echo $row_Recordset1['id']; ?></div></td>
      <td valign="top"><div align="center">
        <input type="text" name="name" value="<?php echo $row_Recordset1['name']; ?>"/>
      </div></td>
      <td valign="top"><div align="center">
      	<select name="select">
      		<?php
do {  
?>
      		<option value="<?php echo $row_catsx['id']?>"<?php if (!(strcmp($row_catsx['id'], $row_Recordset1['cat_id']))) {echo "selected=\"selected\"";} ?>><?php echo $row_catsx['name']?></option>
      		<?php
} while ($row_catsx = mysql_fetch_assoc($catsx));
  $rows = mysql_num_rows($catsx);
  if($rows > 0) {
      mysql_data_seek($catsx, 0);
	  $row_catsx = mysql_fetch_assoc($catsx);
  }
?>
				</select>
      </div></td>
      <td valign="top"><textarea name="descr" rows="5" id="descr"><?php echo $row_Recordset1['descr']; ?></textarea></td>
      <td valign="top"><p align="center">
      	<label>
      		<input  <?php if (!(strcmp($row_Recordset1['status'],"0"))) {echo "checked=\"checked\"";} ?> type="radio" name="status" value="0" />
      		Yes</label>
      	<br />
      	<label>
      		<input  <?php if (!(strcmp($row_Recordset1['status'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="status" value="1" />
      		No</label>
      	<br />
      	</p></td>
      <td valign="top"><div align="center">
      	<input name="sort_id2" type="text" value="<?php echo $row_Recordset1['sort_id']; ?>" size="3"/>
      	</div></td>
      <td valign="top"><div align="center">
      	<input name="auth" type="text" id="auth" value="<?php echo $row_Recordset1['auth']; ?>" size="10" />
      	</div></td>
      <td valign="top"><div align="center">
      	<input name="textfield" type="text" value="<?php echo $row_Recordset1['auto_lock']; ?>" size="3" />
      </div></td>
      <td valign="top"><div align="center">
      	<p>
      		<label>
      			<input <?php if (!(strcmp($row_Recordset1['increase_post_count'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="increase_post_count" value="1" />
      			Yes</label>
      		<br />
      		<label>
      			<input <?php if (!(strcmp($row_Recordset1['increase_post_count'],"0"))) {echo "checked=\"checked\"";} ?> type="radio" name="increase_post_count" value="0" />
      			No</label>
      		<br />
      		</p>
      </div></td>
      <td valign="top"><div align="center">
      	<p>
      		<label>
      			<input <?php if (!(strcmp($row_Recordset1['hide_mods_list'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="hide_mods_list" value="1" />
      			Yes</label>
      		<br />
      		<label>
      			<input <?php if (!(strcmp($row_Recordset1['hide_mods_list'],"0"))) {echo "checked=\"checked\"";} ?> type="radio" name="hide_mods_list" value="0" />
      			No</label>
      		<br />
      		</p>
      </div></td>
      <td valign="top">
      	<div align="center">
      		<input name="Update" type="submit" value="Update" />
      			</div></td></form>
      <td valign="top">
	  <form action="forums.php" method="post" name="delete" target="_self" id="delete">
	    <div align="center">
	      <input name="delete" type="hidden" value="yes" />
	      <input name="deleteID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
	      <input name="Delete" type="submit" id="Delete" value="Delete" /></div>
	  </form>      </td>
    </tr>
 <?php }while($row_Recordset1 = mysql_fetch_assoc($Recordset1))?>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr>
		<td><h2>Permissions - The auth property </h2>
			<div>
				<p>Auth is used for defining permissions on a forum basis. This 10 characters   long varchar contains numbers from 0 to 3 which define the minimum required   level for each feature. </p>
				<pre>0 0 1 1 2 2 2 2 2 3-- Post as HTML  | | | | | | | | +---- Make topics sticky/unsticky  | | | | | | | +------ Lock/unlock topics  | | | | | | +-------- Delete topics and posts  | | | | | +---------- Move/trash topics  | | | | +------------ Edit other people's posts  | | | +-------------- Reply to topics  | | +---------------- Post new topics  | +------------------ Read topics  +-------------------- View forum</pre>
				<p>Each value can be set independently to one of these levels: </p>
				<ul>
					<li>
						<div><strong>0</strong>: Guests</div>
					</li>
					<li>
						<div><strong>1</strong>: Members</div>
					</li>
					<li>
						<div><strong>2</strong>: Moderators (of that forum)</div>
					</li>
					<li>
						<div><strong>3</strong>: Administrators</div>
					</li>
				</ul>
				<p>The default value <em>0011222223</em> is mosty the best choice for a normal   forum. Below are some other handy values for creating special forums: </p>
				<ul>
					<li>
						<div><strong>0011222223</strong>: Default forum, only postable by   members.</div>
					</li>
					<li>
						<div><strong>0000222223</strong>: Default forum, but postable by   guests.</div>
					</li>
					<li>
						<div><strong>0033333333</strong>: Announcements forum, only admins can   do things in it, other people can only read it.</div>
					</li>
					<li>
						<div><strong>2222333333</strong>: Staff-only forum, invisible to guests   and members, moderators can only post and reply, admins can edit, delete,   etc.</div>
					</li>
				</ul>
				<p><strong>Important note:</strong> values do not inherit each other! For   example: <em>1011222223</em> will prohibit guests from seeing the forum but they   will still be able to read topics in it (if they have a link). You can see this   is a bug, however it was done this way to greaten the flexibility of the system. </p>
			</div></td>
	</tr>
</table>

</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($cats);
?>
