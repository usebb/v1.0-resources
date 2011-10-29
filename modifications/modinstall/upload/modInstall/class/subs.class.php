<?php
/**
 * modInstall Sub Routines Library
 * @copyright Wehnerweb Media SOlutions 2004
 * @author Jake Wehner <jwehner@wehnerweb.com>
 * @version     $Id: functions.class.php,v1.0.0 4/30/2004 9:12:39 PM Exp $
 * @date        $Date: 2/22/2004 4/30/2004 9:12:43 PM PM $
 * @revision    $Revision: 1.0.0 $
 * @filename    $RCSfile: functions.class.php,v $
 **/

/**
 * FUNCTIONS LIBRARY - assorted functions
 *
 */

class std
{

	/**
	 * ValidateMySQL() - Validate MySQL details.
	 *
	 * @param str $user - MySQL User
	 * @param str $pass - MySQL Pass
	 * @param str $host - MySQL Host
	 * @param str $db - MySQL Database
	 */
	
	function ValidateMySQL ( $user, $pass, $host, $db )
	{

		if (false !== @mysql_connect ( $host, $user, $pass ) )
		{

			if ( false !== @mysql_select_db ( $db ) )
			{

				@mysql_close();

				return true;

			}

			else
			{
				
				@mysql_close();

				return false;

			}

		}

		else
		{
			
			return false;

		}

	} // END FUNCTION

	/**
	 * CreateDatabase() - Auto Create A DB.
	 *
	 * @param str $user - MySQL User
	 * @param str $pass - MySQL Pass
	 * @param str $host - MySQL Host
	 */

	function CreateDatabase ( $user, $pass, $host )
	{

		if ( false !== @mysql_connect( $host, $user, $pass ) )
		{

			//----------------------------------------
			// Create a unique 4 digit number to trail
			// a database name to ensure no name battles
			// or whatever...
			//----------------------------------------

			$num = uniqid (rand(), true);
			
			$num = substr($num, 0, 4);

			//----------------------------------------
			// Create the db.
			//----------------------------------------

			if ( false !== @mysql_query("CREATE DATABASE usebb".$num) )
			{
				
				@mysql_close();

				return "usebb".$num;

			}

			else
			{
				
				@mysql_close();

				return false;

			}
			 
		}

		else
		{

			return false;

		}

	}

	/**
	 * WriteConfig - Write the UseBB Config.php file
	 *
	 * @param array $config - Associative array of config settings
	 */

	function WriteConfig( $config = array() )
	{

		if ( $handle = fopen (USEBB_PATH ."config.php", "w") )
		{

			$to_write = "<"."?php \r\n\r\n"
						   ."// Config File Generated ". date("D M j G:i:s T Y") ." By modInstall UseBB Installer\r\n\r\n";

			foreach ( $config AS $key => $def )
			{

				$to_write .= "\$dbs['". $key ."'] = \"". $def ."\";\r\n";

			}
			
			$to_write .= "\r\n\r\n?>";

			if ( fwrite( $handle, $to_write) )
			{
			
				fclose($handle);

				if ( chmod(USEBB_PATH ."config.php", 0644) )
				{

					return true;

				}

			}

		}

		else
		{   
	
			return false;

		}

	}

} // END CLASS

?>