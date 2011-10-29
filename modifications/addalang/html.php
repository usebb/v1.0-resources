<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title><?php echo$lang['ModName'] ?> - <?php echo $lang['AddLang'] ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css.php" />
</head>
<body>
<a href="index.php"><img src="gfx/default/usebb.gif" border="0"></a>
<br><br>
<table class="maintable">
  <tbody>
    <form method="POST" name="Add">
    <tr class="tablehead">
      <th colspan="2"><? echo $lang['Desc'] ?></th>
    </tr>
    <tr>
      <td width="100%" class="td2"><?php echo $lang['Select'] ?>
	<select size="1" name="langfile">

<?php
	LangFiles();
?>    
	</select>
      </td>
    </tr>
    <tr>
      <td width="100%" class="td2"><input type="checkbox" name="overwrite"><?php echo $lang['Overwrite'] ?></td>
    </tr>
    <tr>
      <td width="100%" class="td2"><input type="checkbox" name="default"><?php echo $lang['SetAsDefault'] ?></td>
    </tr>
    <tr>
      <td width="100%" class="td2"><input type="submit" name="submit" value="<?php echo $lang['Add'] ?>"></td>
    </tr>
    </form>
  </tbody>
</table>
<br><br>
<center>
	<div class="copyright">
		<a href="http://www.UseBB.net" target="_blank"><img src="gfx/default/powered-by-usebb.gif" border="0"></a><br>
		<?php echo$lang['ModName'] ?> mod by <a href="http://www.UseBB.net/profile.php?id=17">Eran-s</a><br>
		Powered by <a href="http://www.usebb.net" target="_blank">UseBB</a> <?php echo USEBB_VERSION ?>- Copyright &copy; 2003-2004 UseBB Team
	</div>
</center>
</body>
</html>
