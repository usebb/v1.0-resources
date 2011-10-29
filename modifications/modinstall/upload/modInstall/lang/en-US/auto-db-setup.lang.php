<?php
/**
 * modInstall Auto Set Up DB Langs
 * @copyright Wehnerweb Media SOlutions 2004
 * @author Jake Wehner <jwehner@wehnerweb.com>
 * @version     $Id: select-language.lang.php,v1.0.0 4/30/2004 5:00:59 PM Exp $
 * @date        $Date: 4/30/2004 5:01:02 PM $
 * @revision    $Revision: 1.0.0 $
 * @filename    $RCSfile: select-language.lang.php,v $
 **/

/**
 *AUTO DB SET UP - Values for the database set up steps.
 *
 */

$LANG = array(

	"stepTitle" => "Database Set Up",
	"stepDesc" => "The modInstall Wizard will attempt to create a database for UseBB. Please provide your MySQL Account details, and make sure the account has sufficient permissions to create databases in MySQL. If you are unsure, ask your administrator to create a database for you and use the <a href=\"modInstall.php?step=db_manual_create\">manual database set up</a> option.",
	"dbhost" => "Database Host",
	"dbname" => "Database Name",
	"dbuser" => "Database Username",
	"dbpass" => "Database Password",
	"dbtype" => "Database Type",
	"dbprefix" => "Database Prefix",
	"submit" => "Proceed >> ", 
	"detailsinvalid" => "Your MySQL details appear to be invalid. Please go back and make sure they are correct. When in doubt, contact your administrator.",
	"proceed" => "Proceed To Table Creation >>",
	"databasecreated" => "A database for UseBB has been successfully created!",
	"databasenotcreated" => "The modInstall Wizard could not create the database, probably because of insufficient user permissions. Please ask your administrator to create a database for UseBB and proceed to the <a href=\"modInstall.php?step=db_manual_create\">manual database set up</a> option."
)

?>