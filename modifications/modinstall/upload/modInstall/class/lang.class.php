<?php
/**
 * modInstall Language Layer
 * @copyright Wehnerweb Media SOlutions 2004
 * @author Jake Wehner <jwehner@wehnerweb.com>
 * @version     $Id: lang.class.php,v1.0.0 2/22/2004 9:03:29 PM Exp $
 * @date        $Date: 2/22/2004 9:03:33 PM $
 * @revision    $Revision: 1.0.0 $
 * @filename    $RCSfile: lang.class.php,v $
 **/

/**
 * LANGUAGE HANDLER - Load language sets/packages.
 *
 */

class LANGUAGE
{

	/**
	 * Language Dir
	 *
	 * @param str $lang_dir
	 */

	var $lang_dir;

	/**
	 * Language Package
	 *
	 * @param array $lang
	 */

	 var $lang = array();

	/**
	 * function load_language()
	 *
	 * Load a language set.
	 * @param str $lang_set - the language to load
	 */

	function load_language ( $lang_set )
	{

		//----------------------------------------
		// Check if the lang set exists.
		//----------------------------------------

		if ( ! is_dir ( ROOT_DIR ."/lang/". $lang_set) )
		{

			die("<h3>modInstall Error</h3><b>Language Set Does Not Exist</b> <br /><br />The requested language set, \"". $lang_set ."\", could not be loaded. Please make sure it exists in the /lang directory.");

		}

		else
		{
	
			$this->lang_dir = ROOT_DIR ."/lang/". $lang_set;

			return true;

		}

	} //END FUNCTION

	/**
	 * function load_package()
	 *
	 * Load a language pack for a source file.
	 * @param str $lang_package - the pack
	 */

	function load_package ( $lang_package )
	{

		//----------------------------------------
		// Does the package exist?
		//----------------------------------------
	  
		if ( ! file_exists ( $this->lang_dir ."/". $lang_package .".lang.php" ) )
		{

			die("<h3>modInstall Error</h3><b>Language Package Does Not Exist</b> <br /> <br /> The requested language package, \"". $lang_package ."\", could not be loaded. Please make sure it exists in the ". $this->lang_dir ." directory.");
			
			return false;

		}
		
		else
		{

			require $this->lang_dir ."/". $lang_package .".lang.php";

			//----------------------------------------
			// Loop throught the lang array, 
			// registering values for use.
			//----------------------------------------

			foreach ( $LANG AS $k => $v )
			{

				$this->lang[ $k ] = stripslashes ( $v );

			}

			unset ( $LANG);

			return true;

		}

	} // END FUNCTION

} // END CLASS

?>