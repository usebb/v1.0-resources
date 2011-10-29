<!-- 
 UseBB .2 modInstall Template
 Language Selection
 Adapted from Fantastico
 -->

 <html>
	<head>
	
	<title>modInstall (UseBB Installation Mod) - {$lang.stepTitle}  </title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<style type="text/css">
	{literal}

		body {  background-color: #FFFFFF; font-family: Verdana, sans-serif; font-size: 10px; color: #333333}

		a {  font-family: Verdana, sans-serif; font-size: 10px; color: #333333; text-decoration: underline}

		a:hover {  font-family: Verdana, sans-serif; font-size: 10px; color: #000099; }

		a:active {  }

		table {  font-family: Verdana, sans-serif; font-size: 10px; color: #333333; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}

		.MainMenuHead {
			font-weight: bold;
			font-size: 14px;
			color: #333333;
			vertical-align: middle;
			font-family: "Trebuchet MS";
			margin: auto;
			padding-top: 6px;
			padding-right: 3px;
			padding-bottom: 6px;
			padding-left: 3px;
		}

		.MainMenuSubhead {  font-family: "Trebuchet MS"; font-weight: normal; color: #333333; font-size: 12px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}

		.MainMenuCell {  background-color: #FFFFFF}

		.Subheads {  font-family: "Trebuchet MS"; font-weight: bold; color: #333333; font-size: 10px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}

		.TableLeft {  margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}

		.TableMiddle {  }

		.TableRight {  }

		.TableWelcome {  border: 1px #CCCCCC solid}

		.TableMiddleHead {  font-family: Verdana, sans-serif; font-size: 10px; font-weight: bold; color: #3366CC}

		.Hint {  font-family: Verdana, sans-serif; font-size: 10px; color: #3366CC}

		.Emphasize {  font-family: Verdana, sans-serif; font-weight: bold; font-size: 10px; color: #3366CC}

		.BoldText {  font-weight: bold}

		.Infoline {
			font-family: Verdana, sans-serif;
			font-size: 10px;
			border: 0px none black;
		}

		.ColumnCenter {  }

		.ColumnRight {  }

		.MainMenuItems {  font-family: Verdana, sans-serif; font-size: 10px; color: #333333}
		.ButtonPosition {  text-align: center; background-position: center}
		.ButtonDef {  }
		.LeftMenu, a.LeftMenu:link, a.LeftMenu:active, a.LeftMenu:visited  {
			font-family: "Trebuchet MS";
			font-size: 11px;
			font-weight: bold;
			text-decoration: none;
		}
		a.LeftMenu:hover  {
			font-family: "Trebuchet MS";
			font-size: 11px;
			font-weight: bold;
			text-decoration: none;
			color: #3366CC;
		}
		.LeftMenuHeaders, a.LeftMenuHeaders:link, a.LeftMenuHeaders:active, a.LeftMenuHeaders:visited  {
			font-family: "Trebuchet MS";
			font-size: 11px;
			font-weight: bold;
			text-decoration: none;
			color: #999999;
		}
		a.LeftMenuHeaders:hover  {
			font-family: "Trebuchet MS";
			font-size: 11px;
			font-weight: bold;
			text-decoration: none;
			color: #333333;
		}
		.TopMenu, a.TopMenu:link, a.TopMenu:active, a.TopMenu:visited  {
			font-family: "Trebuchet MS";
			font-weight: bold;
			font-size: 12px;
			text-decoration: none;
		}
		a.TopMenu:hover  {
			font-family: "Trebuchet MS";
			font-weight: bold;
			font-size: 12px;
			text-decoration: none;
			color: #666666;
		}
		.contentcell {
			background-color: #FFFFFF;
			border: 1px solid #000000;
			margin: 0px;
			padding: 6px;
		}
		.IconsTable {
			padding-top: 6px;
			padding-right: 0px;
			padding-bottom: 4px;
			padding-left: 0px;
			border-top-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 1px;
			border-left-width: 0px;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-top-color: #999999;
			border-right-color: #999999;
			border-bottom-color: #999999;
			border-left-color: #999999;
		}
		.BottomTable {
			border-top-width: 0px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-top-color: #999999;
			border-right-color: #999999;
			border-bottom-color: #999999;
			border-left-color: #999999;
		}

		.PageTop {  font-family: Impact, "Arial Black", sans-serif; font-size: 48px; font-style: italic; font-weight: normal; color: #CCCCFF; background-color: #333399}

		.ColumnLeft {  background-color: #FFCC33}

		.MainCategories {  font-family: Verdana, sans-serif; font-size: 12px; font-weight: bold; color: #000066; text-align: center; border-color: #999999; border-style: solid; border-top-width: 1px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; margin-top: 6px; padding-top: 8px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}

		.MainCategoriesTop {  font-family: Verdana, sans-serif; font-size: 12px; font-weight: bold; color: #000066; text-align: center}
	{/literal}
	</style>

	<script language="javascript">

		{literal}

		function process()
		{

			if (document.form.method.options[document.form.method.selectedIndex].value != "")
			{

				document.form.submit();

			}

		}

		{/literal}

	</script>

	</head>

	<body>
		<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  
			<tr>
				
				<td height="100%" align="center" valign="middle">
			
					<table width="600" height="400" border="0" cellpadding="0" cellspacing="0">

						<tr> 
							<td height="22"> 

								<table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
									
									<tr> 
						
										<td width="24" align="left" valign="top"><img src="images/xc_left.gif" width="24" height="22" border="0"></td>
										<td align="left" width="100%" valign="middle" style="background-image: url(images/xc_center.gif)">modInstall v.2 - UseBB Installation Wizard </td>
										<td width="24" align="right" valign="top"><img src="images/xc_right.gif" width="24" height="22" border="0"></td>
									 
									 </tr>

								</table>
							</td>

						</tr>
						<tr>

							<td height="100%" valign="top" background="images/xc_stripes.gif" class="BottomTable" style="padding:5px;">

								<h2>{$lang.stepTitle}</h2>

								<table width="100%" height="318" border="0" cellpadding="0" cellspacing="0">

									<tr>

										<td width="20" height="18">&nbsp;</td>
										<td width="150" height="18" align="left" valign="top">&nbsp;</td>
										<td width="12" height="18">&nbsp;</td>

										<td height="18" class="MainMenuHead">&nbsp;</td>
										<td width="20" height="18">&nbsp;</td>
									
									</tr>	
									<tr> 
										
										<td colspan="5" height="100%" align="center" valign="top"> 


											<table width="92%" align="center" class="contentcell" height="100%">

												<tr>

													<td valign="top">
									
														<p class="TableMiddleHead">{$lang.stepDesc}</p>
									
														<form name="form" method="post" action="modInstall.php?step=db_create">
															
															<select name="method" onChange="process();">
															
																<option value="" selected="selected">Choose a Method</option>
																<option value="">- - - - - - - - - - - - - - - - - - - -</option>
																<option value="auto">{$lang.autocreate}</option>
																<option value="manual">{$lang.manualcreate}</option>

															</select>

														</form>

													</td>

												</tr>

											</table>

										</td>

									</tr>
									<tr> 
									
										<td width="20" height="8">&nbsp;</td>
										<td width="150" height="8">&nbsp;</td>
										<td width="12" height="8">&nbsp;</td>
										<td height="8">&nbsp;</td>
										<td width="20" height="8">&nbsp;</td>

									 </tr>

								</table>
								
							</td>
						</tr>

					 </table>
				</td>

			 </tr>

		</table>

	</body>
</html>
