<?php 
require_once('config.php'); 

mysql_select_db($database_connect, $connect);
if ($insert=="yes"){
	mysql_query("INSERT INTO usebb_cats SET id='', name='$name', sort_id='$sort_id'") or die(mysql_error());
}
if ($update=="yes"){
	mysql_query("UPDATE usebb_cats SET name='$name', sort_id='$sort_id' WHERE id='$updateID'") or die(mysql_error());
}
if ($delete=="yes"){
	mysql_query("DELETE FROM usebb_cats WHERE id='$deleteID'") or die(mysql_error());
}
mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM usebb_cats";
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<body>
<?php include "index.php";?>
<p>
<form id="category_insert" name="category_insert" method="post" action="categories.php">
  <div align="center">
  <input name="insert" type="hidden" value="yes" />
  <table border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h4>Insert New Category </h4>
      </div></td>
      </tr>
    <tr>
      <td><div align="right">Category Name</div></td>
        <td><div align="left">
          <input type="text" name="name" />
        </div></td>
      </tr>
    <tr>
      <td><div align="right">Sort ID <br> 
      	<span class="style1">(Lower numbers display first)</span></div></td>
        <td><div align="left">
          <input type="text" name="sort_id" />
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
      <td><h4 align="center">Sort ID</h4><br><span class="style1">(Lower numbers display first)</span></td>
      <td><h4 align="center">Update</h4></td>
      <td><h4 align="center">Delete</h4></td>
    </tr>
 <?php do{?>
    <tr>
 <form action="categories.php" method="post" name="update" target="_self">
 <input name="update" type="hidden" value="yes" />
 <input name="updateID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
      <td valign="top"><div align="center"><?php echo $row_Recordset1['id']; ?></div></td>
      <td valign="top"><div align="center">
        <input type="text" name="name" value="<?php echo $row_Recordset1['name']; ?>"/>
      </div></td>
      <td valign="top"><div align="center">
        <input name="sort_id" type="text" value="<?php echo $row_Recordset1['sort_id']; ?>" size="5"/>
      </div></td>
      <td valign="top"><div align="center">
        <input name="Update" type="submit" value="Update" />
      </div></td>
 </form>
      <td valign="top">
	  <form action="categories.php" method="post" name="delete" target="_self" id="delete">
	    <div align="center">
	      <input name="delete" type="hidden" value="yes" />
	      <input name="deleteID" type="hidden" value="<?php echo $row_Recordset1['id']; ?>" />
	      <input name="Delete" type="submit" id="Delete" value="Delete" /></div>
	  </form>      </td>
    </tr>
 <?php }while($row_Recordset1 = mysql_fetch_assoc($Recordset1))?>
</table>
</div>
</body>
<?php
mysql_free_result($Recordset1);
?>
