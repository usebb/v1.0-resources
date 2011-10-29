<?php 
require_once('config.php'); 
mysql_select_db($database_connect, $connect);
if ($update_pass=="yes"){
	$passwd=md5($pass);
	mysql_query("UPDATE usebb_members SET passwd='$passwd' WHERE id='$update_pass_ID'") or die(mysql_error());
}
if ($update=="yes"){
	mysql_query("UPDATE usebb_members SET name='$name', email='$email', banned='$banned', banned_reason='$banned_reason' WHERE id='$updateID'") or die(mysql_error());
}
if ($delete=="yes"){
	mysql_query("DELETE FROM usebb_members WHERE id='$deleteID'") or die(mysql_error());
}
mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM usebb_members";
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<body>
<?php include "index.php";?>
<h4 align="center">UseBB Members 
</h4>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="10">
	<?php do{?>
	<tr>
		<td>
			<div align="right">
				<table border="1">
					<tr>
						<td><h4 align="center">ID</h4></td>
					<td><h4 align="center">Name</h4></td>
					<td><h4 align="center">Email</h4></td>
					<td><div align="center">
						<h4>Banned</h4>
					</div></td>
					<td><div align="center">
						<h4>Reason for Ban </h4>
					</div></td>
					<td><h4 align="center">Update</h4></td>
				</tr>
					<tr valign="top">
						<form action="members.php" method="post" name="update" target="_self" id="update">
							<input name="update" type="hidden" value="yes" />
							<input name="updateID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
							<td><div align="center"><?php echo $row_Recordset1['id']; ?></div></td>
						<td><input type="text" name="name" value="<?php echo $row_Recordset1['name']; ?>"/></td>
						<td>
							<div align="center">
								<input name="email" type="text" id="email" value="<?php echo $row_Recordset1['email']; ?>" />
							</div>					</td>
						<td><p>
							<label>
								<input <?php if (!(strcmp($row_Recordset1['banned'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="banned" value="1" />
								Yes</label>
							<br />
							<label>
								<input <?php if (!(strcmp($row_Recordset1['banned'],"0"))) {echo "checked=\"checked\"";} ?> type="radio" name="banned" value="0" />
								No</label>
							<br/>
							</p>					</td>
						<td>
							<div align="center">
								<textarea name="banned_reason" rows="5"><?php echo $row_Recordset1['banned_reason']; ?></textarea>
							</div>					</td>
						<td>
							<div align="center">
								<input name="Update" type="submit" value="Update" />
							</div>					</td>
					</form>
				</tr>
					</table>
		</div></td>
		<td valign="top">
			
			<div align="left">
				<table width="100%" border="1">
					<tr>
						<td>
							<div align="center">
								<h4>Delete</h4>
						</div>					</td>
					</tr>
					<tr>
						<td>
							<form action="members.php" method="post" name="delete" target="_self" id="delete">
								<input name="delete" type="hidden" value="yes" />
								<input name="deleteID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
								<input name="Delete" type="submit" id="Delete" value="Delete" /> 
							</form>					</td>
					</tr>
					</table>
		</div></td>
		<td valign="top">
			<div align="left">
				<table width="100%" border="1">
					<tr>
						<td><div align="center">
							<h4>Reset Password </h4>
						</div></td>
					</tr>
					<tr>
						<td>
							<form action="members.php" method="post" name="pass" target="_self" id="pass">
								<input name="update_pass" type="hidden" value="yes" />
								<input name="update_pass_ID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
								<input name="pass" type="text" />
								<input type="submit" name="Submit" value="Submit" />
							</form>						</td>
					</tr>
				</table>
		</div></td>
	</tr>
<?php }while($row_Recordset1 = mysql_fetch_assoc($Recordset1))?>
</table>

</div>
</body>
<?php
mysql_free_result($Recordset1);
?>
