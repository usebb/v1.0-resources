<?php 
require_once('config.php'); 

mysql_select_db($database_connect, $connect);
if ($insert=="yes"){
	mysql_query("INSERT INTO usebb_moderators SET forum_id='$forum_id', user_id='$user_id'") or die(mysql_error());
}
if ($delete=="yes"){
	mysql_query("DELETE FROM usebb_moderators WHERE forum_id='$forum_id' AND user_id='$user_id'") or die(mysql_error());
}

mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM usebb_moderators";
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_connect, $connect);
$query_forums_set = "SELECT * FROM usebb_forums";
$forums_set = mysql_query($query_forums_set, $connect) or die(mysql_error());
$row_forums_set = mysql_fetch_assoc($forums_set);
$totalRows_forums_set = mysql_num_rows($forums_set);

mysql_select_db($database_connect, $connect);
$query_members_set = "SELECT * FROM usebb_members";
$members_set = mysql_query($query_members_set, $connect) or die(mysql_error());
$row_members_set = mysql_fetch_assoc($members_set);
$totalRows_members_set = mysql_num_rows($members_set);
?>
<body>
<?php include "index.php";?>
<p>
<form id="insert" name="insert" method="post" action="moderators.php">
  <div align="center">
  <input name="insert" type="hidden" value="yes" />
  <table border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h4>Insert New Moderator </h4>
      </div></td>
      </tr>
    <tr>
      <td><div align="right">Forum</div></td>
        <td><div align="left">
        	<select name="forum_id">
        		<option value="Select">Select</option>
        		<?php
do {  
?>
        		<option value="<?php echo $row_forums_set['id']?>"><?php echo $row_forums_set['name']?></option>
        		<?php
} while ($row_forums_set = mysql_fetch_assoc($forums_set));
  $rows = mysql_num_rows($forums_set);
  if($rows > 0) {
      mysql_data_seek($forums_set, 0);
	  $row_forums_set = mysql_fetch_assoc($forums_set);
  }
?>
        		</select>
        	</div></td>
      </tr>
    <tr>
      <td><div align="right">User </div></td>
        <td><div align="left">
        	<select name="user_id">
        		<option value="Select">Select</option>
        		<?php
do {  
?>
        		<option value="<?php echo $row_members_set['id']?>"><?php echo $row_members_set['name']?></option>
        		<?php
} while ($row_members_set = mysql_fetch_assoc($members_set));
  $rows = mysql_num_rows($members_set);
  if($rows > 0) {
      mysql_data_seek($members_set, 0);
	  $row_members_set = mysql_fetch_assoc($members_set);
  }
?>
        		</select>
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
      <td><h4 align="center">Forum</h4></td>
      <td><h4 align="center">User</h4></td>
      <td><h4 align="center">Delete</h4></td>
    </tr>
 <?php 
 do{
 	$forum_id=$row_Recordset1['forum_id'];
	mysql_select_db($database_connect, $connect);
	$query_forums_setx = "SELECT * FROM usebb_forums WHERE id='$forum_id'";
	$forums_setx = mysql_query($query_forums_setx, $connect) or die(mysql_error());
	$row_forums_setx = mysql_fetch_assoc($forums_setx);
	$totalRows_forums_setx = mysql_num_rows($forums_setx);
	
	$user_id=$row_Recordset1['user_id'];
	mysql_select_db($database_connect, $connect);
	$query_members_setx = "SELECT * FROM usebb_members WHERE id='$user_id'";
	$members_setx = mysql_query($query_members_setx, $connect) or die(mysql_error());
	$row_members_setx = mysql_fetch_assoc($members_setx);
	$totalRows_members_setx = mysql_num_rows($members_setx);
	?>
    <tr>
      <td valign="top"><div align="center"><?php echo $row_forums_setx['name']; ?></div></td>
      <td valign="top"><div align="center"><?php echo $row_members_setx['name']; ?></div></td>
      <td valign="top">
	  <form action="moderators.php" method="post" name="delete" target="_self" id="delete">
	    <div align="center">
	      <input name="delete" type="hidden" value="yes" />
	      <input name="forum_id" type="hidden" value="<?php echo $row_Recordset1['forum_id']; ?>" />
	      <input name="user_id" type="hidden" value="<?php echo $row_Recordset1['user_id']; ?>" />
	      <input name="Delete" type="submit" id="Delete" value="Delete" /></div>
	  </form>      </td>
    </tr>
 <?php }while($row_Recordset1 = mysql_fetch_assoc($Recordset1))?>
</table>
</div>
</body>
<?php
mysql_free_result($Recordset1);
mysql_free_result($forums_set);
mysql_free_result($members_set);
?>
