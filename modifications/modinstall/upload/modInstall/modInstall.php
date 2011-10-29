<?php
/**
 * UseBB Installation Mod 
 * @copyright Wehnerweb Media SOlutions 2004
 * @author Jake Wehner <jwehner@wehnerweb.com>
 * @version     $Id: modInstall.php,v1.00 4/27/2004 5:34:03 PM Exp $
 * @date        $Date: 4/27/2004 5:34:06 PM $
 * @revision    $Revision: .2 $
 * @filename    $RCSfile: modInstall.php,v $
 **/

error_reporting(E_ALL);


/**
 * USEBB .2 INSTALLATION MOD - VERSION .2
 *
 * Installs version of UseBB according to mod version (.2 in this case.);
 */

//----------------------------------------
// USER EDITABLE HERE. SHOULD WORK AS IS.
//----------------------------------------

define("ROOT_DIR", "./");
define("USEBB_PATH", "../");

//----------------------------------------
// Start sessions, required for lang and
// other info to be shared between steps.
//----------------------------------------

session_start();

//----------------------------------------
// Before we do ANYTHING, check if 
// an installation lock file exists.
//----------------------------------------

if ( file_exists ("install.lock") )
{

	die("<html><head><title>modInstall Error</title></head><body><h2>modInstall Error</h2><b>Installation Lock Detected!</b><br /><br /> Installation is currently locked due the <b>install.lock</b> file located in the /modInstall directory. Please delete this file to continue.</body></html>");

}

//----------------------------------------
// Load the language and tpl layer.
//----------------------------------------

require ROOT_DIR . "class/lang.class.php";

	$lang = &new LANGUAGE;

	$lang->lang_dir = ROOT_DIR ."lang";

	// Check if there is a language selected, and if not, load the default.

	if ( isset($_SESSION['language']) )
	{

		$theLang = $HTTP_SESSION_VARS['language'];

		$lang->load_language($theLang);

	}

	else
	{

		$lang->load_language("en-US");

	}

require ROOT_DIR . "class/subs.class.php";
	
	$std = &new std;

require ROOT_DIR ."lib/Smarty/Smarty.class.php";

	$tpl = &new Smarty;

	//$tpl->force_compile = true;

	$tpl->caching = false;

	$tpl->compile_dir = ROOT_DIR ."lib/Smarty/templates_c";

	$tpl->templates_dir = ROOT_DIR ."lib/Smarty/templates";


//----------------------------------------
// Decide what task we shall commit our
// CPU to...
//----------------------------------------

if ( isset ($HTTP_GET_VARS['step']) )
{

	$step = $HTTP_GET_VARS['step'];

}

else
{

	$step = "lang";

}

switch ($step)
{

	case "lang":
		do_select_language();
		break;

	case "db_create":
		do_create_db();
		break;

	case "db_manual_create":
		do_db_manual_create();
		break;

	case "db_auto_create":
		do_db_auto_create();
		break;

	case "create_tables":
		do_create_tables();
		break;

	case "board_config":
		do_board_config();
		break;

	case "final";
		do_disable_installer();

	default:
		do_select_language();
		break;

}

//----------------------------------------
// FUNCTION: do_select_language();
// Language selection steps.
//----------------------------------------

function do_select_language()
{

	global $lang, $tpl, $HTTP_POST_VARS, $HTTP_SESSION_VARS;

	//----------------------------------------
	// Perhaps for some odd reason they already 
	// have a language cookie. Lets take care to 
	// avoid unneccessary steps...
	//----------------------------------------

	if ( count( $HTTP_SESSION_VARS ) > 0 )
	{

		if ( in_array("language", $HTTP_SESSION_VARS ) )
		{

			header("Location: modInstall.php?step=db_create");
		
		}

	}

	//----------------------------------------
	// Load the default language set.
	//----------------------------------------

	$lang->load_package("select-language");

	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Check if the page was submitted.
	//----------------------------------------

	if ( count($HTTP_POST_VARS) < 1 )
	{

		// Set up a hash for langs (always initiate :| )

		$langs = array();

		// Attempt to open the lanf dir to see what we can use.

		if ( ! is_dir ( $lang->lang_dir ) OR ! is_readable( $lang->lang_dir) )
		{

			die("<html><head><title>modInstall Error</title></head><body><h2>modInstall Error</h2><b>Language Directory Unavailable</b><br /><br /> The /lang directory can not be read.</body></html>");

		}

		else
		{

			if ($handle = opendir(ROOT_DIR ."lang") )
			{

				while ( false !== ($item = readdir($handle) ) ) 
				{

					if ($item != "." AND $item != ".." AND false !== ( is_dir ( ROOT_DIR ."lang/". $item )) )
					{

						$langs[] = $item;

					}
				
				}

				closedir($handle);


			}

			else
			{

				die("<html><head><title>modInstall Error</title></head><body><h2>modInstall Error</h2><b>Language Directory Unavailable</b><br /><br /> The /lang directory can not be read.</body></html>");

			}

		}

		//----------------------------------------
		// Assign the vars for the install wizard.
		//----------------------------------------

		$tpl->assign("langs", $langs);

		//----------------------------------------
		// Display the lang select page.
		//----------------------------------------

		$tpl->display("file:". ROOT_DIR ."tpl/SelectLanguage.tpl");

		exit;
	
	}

	else
	{

		//----------------------------------------
		// It was, so lets load a lang and move on.
		//----------------------------------------

		$HTTP_SESSION_VARS['language'] = $HTTP_POST_VARS['lang'];

		header("Location: modInstall.php?step=db_create");

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: do_db_create();
// Database set up steps.
//----------------------------------------

function do_create_db() 
{

	global $lang, $tpl, $HTTP_POST_VARS;

	//----------------------------------------
	// Load the language set.
	//----------------------------------------

	$lang->load_package("select-db-method");

	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Give the user the option of using a 
	// db they have, or having the database
	// auto created. Check if they submitted 
	// form.
	//----------------------------------------

	if ( count ($HTTP_POST_VARS) < 1 )
	{

		$tpl->display("file:". ROOT_DIR ."tpl/SelectDatabaseMethod.tpl");

		exit;

	}

	else
	{

		if ( $HTTP_POST_VARS['method'] == "auto" )
		{
	
			header("Location: modInstall.php?step=db_auto_create");
		   
		}

		else if ( $HTTP_POST_VARS['method'] == "manual")
		{

			header("Location: modInstall.php?step=db_manual_create");


		}

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: do_manual_db_create();
// Use a database which is already available.
//----------------------------------------

function do_db_manual_create()
{

	global $lang, $tpl, $HTTP_POST_VARS, $std, $HTTP_SESSION_VARS;

	//----------------------------------------
	// Load the language set.
	//----------------------------------------

	$lang->load_package("manual-db-setup");

	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Check if the form was submitted.
	//----------------------------------------

	if ( count ( $HTTP_POST_VARS ) < 4 )
	{

		$tpl->display("file:". ROOT_DIR ."tpl/ManualDatabaseSetupForm.tpl");

		exit;

	}

	else
	{

		//----------------------------------------
		// Check to see if the details are
		// valid. If so, register the data to the 
		// session and update the user, providing
		// the option to proceed to table creation.
		//----------------------------------------

		$data = array(

			"dbuser" => $HTTP_POST_VARS['db_user'],
			"dbpass" => $HTTP_POST_VARS['db_pass'],
			"dbhost" => $HTTP_POST_VARS['db_host'],
			"dbname" => $HTTP_POST_VARS['db_name'],
			"dbtype" => "mysql",
			"dbprefix" => "usebb_"
			
			);

		if ( false !== $std->ValidateMySQL($data['dbuser'], $data['dbpass'], $data['dbhost'], $data['dbname']) )
		{

			foreach ( $data AS $k => $v )
			{

				$HTTP_SESSION_VARS[ $k ] = $v;

			}

			//----------------------------------------
			// Write the config file which should be
			// one dir back if they put this installer 
			// in the right place.
			//----------------------------------------   

			$config = array(
		
				"type" => $data['dbtype'],
				"server" => $data['dbhost'],
				"username" => $data['dbuser'],
				"passwd" => $data['dbpass'],
				"dbname" => $data['dbname'],
				"prefix" => $data['dbprefix'] 
			   
				);

			if ( $std->WriteConfig($config) )
			{

				$tpl->display("file:". ROOT_DIR ."tpl/MySQLDetailsValid.tpl");

				exit;

			}

			else
			{

				$tpl->display("file:". ROOT_DIR ."tpl/ConfigFailed.tpl");

				exit;

			}

		}


		else
		{

			$tpl->display("file:". ROOT_DIR ."tpl/MySQLDetailsInvalid.tpl");

			exit;

		}

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: do_auto_db_create();
// Attempt to set up a new database
// automagically.
//----------------------------------------

function do_db_auto_create()
{

	global $lang, $tpl, $HTTP_POST_VARS, $std;

	//----------------------------------------
	// Load the language set.
	//----------------------------------------

	$lang->load_package("auto-db-setup");

	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Check if the form was submitted.
	//----------------------------------------

	if ( count ( $HTTP_POST_VARS ) < 3 )
	{

		$tpl->display("file:". ROOT_DIR ."tpl/AutoDatabaseSetupForm.tpl");

		exit;

	}

	else
	{

		//----------------------------------------
		// Check to see if the details are
		// valid. If so, register the data to the 
		// session and update the user, providing
		// the option to proceed to table creation.
		//----------------------------------------

		$data = array(

			"dbuser" => $HTTP_POST_VARS['db_user'],
			"dbpass" => $HTTP_POST_VARS['db_pass'],
			"dbhost" => $HTTP_POST_VARS['db_host'],
			"dbtype" => "mysql",
			"dbprefix" => "usebb_"
			
			);

	   foreach ( $data AS $k => $v )
	   {

		   $HTTP_SESSION_VARS[ $k ] = $v;

	   }

	   $theDatabase = false;

	   if ( $theDatabase = $std->CreateDatabase($HTTP_SESSION_VARS['dbuser'], $HTTP_SESSION_VARS['dbpass'], $HTTP_SESSION_VARS['dbhost']) )
	   {

			$HTTP_SESSION_VARS['db_name'] = $theDatabase;
			
			$data['dbname'] = $theDatabase;

			if ( $std->WriteConfig($data) )
			{

				$tpl->display("file:". ROOT_DIR ."tpl/MySQLDatabaseCreated.tpl");

				exit;

			 }

			 else
			 {

				$tpl->display("file:". ROOT_DIR ."tpl/ConfigFailed.tpl");

				exit;

			 }

		}


		else
		{

			$tpl->display("file:". ROOT_DIR ."tpl/MySQLDatabaseFailed.tpl");

			exit;

		}  

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: create_tables();
// Create the UseBB tables.
//----------------------------------------

function do_create_tables()
{

	global $lang, $tpl, $HTTP_SESSION_VARS;

	//----------------------------------------
	// Load the language.
	//----------------------------------------

	$lang->load_package("create-tables");
	
	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Attempt to connect to execute the SQL
	// from the the dump.
	//----------------------------------------    

	if ( $link = @mysql_connect( $HTTP_SESSION_VARS['dbhost'], $HTTP_SESSION_VARS['dbuser'], $HTTP_SESSION_VARS['dbpass']) )
	{

		if ( @mysql_select_db ( $HTTP_SESSION_VARS['dbname'] ) )
		{

			require ROOT_DIR ."sql/SQL.php";

			$SQL = array_merge ( $TABLES, $DATA );
			
			//----------------------------------------
			// Loop through and execute SQL.
			//----------------------------------------

			foreach ( $SQL AS $k => $v )
			{

				@mysql_query($v);

			}

			mysql_close($link);

			$tpl->display("file:". ROOT_DIR ."tpl/MySQLTablesCreated.tpl");

			exit;

		}

		else
		{
			mysql_close($link);

			$tpl->display("file:". ROOT_DIR ."tpl/MySQLTablesFailed.tpl");

			exit;

		}

	}

	else
	{

		$tpl->display("file:". ROOT_DIR ."tpl/MySQLTablesFailed.tpl");

		exit;

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: do_board_config();
// Configure UseBB's crucial settings 
// (settings which arent required to be changed
// in order for UseBB to run can wait untill we get
// to our admin cp.
//----------------------------------------

function do_board_config()
{

	global $lang, $tpl, $HTTP_POST_VARS, $HTTP_SERVER_VARS, $HTTP_SESSION_VARS;

	//----------------------------------------
	// Load language.
	//----------------------------------------

	$lang->load_package("board-config");
	
	$tpl->assign("lang", $lang->lang);

	if ( count( $HTTP_POST_VARS ) < 4 )
	{

		//----------------------------------------
		// Sort out a board url.
		//----------------------------------------

		$board_url = str_replace("modInstall/modInstall.php", "", $HTTP_SERVER_VARS['HTTP_REFERER']);
		
		if ( ! $board_url )
		{

			$board_url = substr($HTTP_SERVER_VARS['SCRIPT_NAME'],0, -15);
			
			if ($board_url == "")
			{

				$board_url == "/";
			
			}
			
			$board_url = str_replace("/modInstall", "", $board_url);

			$board_url = "http://". $HTTP_SERVER_VARS['SERVER_NAME'] . $board_url ."/"; 
		} 

		$board_url = str_replace("?step=create_tables", "", $board_url);

		$tpl->assign("requestUrl", $board_url);

		$HTTP_SESSION_VARS['BoardUrl'] = $board_url;

		$tpl->display("file:". ROOT_DIR ."tpl/BoardConfigForm.tpl");

		exit;

	}

	else
	{

		$data = array (

			"board_url" => mysql_escape_string($HTTP_POST_VARS['board_url']),
			"board_title" => mysql_escape_string($HTTP_POST_VARS['board_title']),
			"board_desc" => mysql_escape_string($HTTP_POST_VARS['board_desc']),
			"admin_email" => mysql_escape_string($HTTP_POST_VARS['admin_email'])
			);

		if ( $link = @mysql_connect($HTTP_SESSION_VARS['dbhost'], $HTTP_SESSION_VARS['dbuser'], $HTTP_SESSION_VARS['dbpass']) )
		{

			if( @mysql_select_db($HTTP_SESSION_VARS['dbname']) )
			{
				
				$upd_query[] = "UPDATE usebb_config SET content = \"{$data['board_title']}\" where name=\"board_name\"";
				$upd_query[] = "UPDATE usebb_config SET content = \"{$data['board_desc']}\" where name=\"board_descr\"";
				$upd_query[] = "UPDATE usebb_config SET content = \"{$data['board_url']}\" where name=\"board_url\"";
				$upd_query[] = "UPDATE usebb_config SET content = \"{$data['admin_email']}\" where name=\"admin_email\"";

				$num = 0;

				foreach ( $upd_query AS $query )
				{

					if ( @mysql_query($query, $link) )
					{

						++$num;
					
					}

				}

				if ( $num = 4 )
				{
					
					mysql_close($link);

					$tpl->display("file:". ROOT_DIR ."tpl/BoardConfigSuccess.tpl");

					exit;

				}

				else
				{

					mysql_close($link);

					$tpl->display("file:". ROOT_DIR ."tpl/ConfigFailed.tpl");

					exit;

				}

			}

			else
			{   

				mysql_close($link);

				$tpl->display("file:". ROOT_DIR ."tpl/ConfigFailed.tpl");

				exit;

			}

		}

		else
		{

			$tpl->display("file:". ROOT_DIR ."tpl/ConfigFailed.tpl");

			exit;

		}
				

	}

} // END FUNCTION

//----------------------------------------
// FUNCTION: do_disable_installer();
// Lock the installation wizard.
//----------------------------------------

function do_disable_installer()
{

	global $lang, $tpl, $HTTP_SESSION_VARS;

	session_destory();

	//----------------------------------------
	// Load the language file.
	//----------------------------------------

	$lang->load_package("final");

	$tpl->assign("lang", $lang->lang);

	//----------------------------------------
	// Create the install lock file.
	//----------------------------------------

	if ( $handle = fopen("install.lock", "w") )
	{

		if ( fwrite($handle, "All your base are belong to us.") )
		{

			fclose($handle);

			if ( chmod ("install.lock", 0644) )
			{

				$tpl->assign("BoardUrl", $HTTP_SESSION_VARS['BoardUrl']);

				$tpl->display("file:". ROOT_DIR ."tpl/InstallerLocked.tpl");

				exit;

			}

		}

	}

} // END FUNCTION

?>