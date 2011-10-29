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
    "stepDesc" => "The mawdInstall Wizawd wiwl attempt to cweate a database for UseBB. Pweese pwovide your MySQL Account details, and make sure the account has suwfficient permissions to cweate databases in MySQL. If you are unsure, ask your administwator to cweate a database for you and use the <a href=\"modInstall.php?step=db_manual_create\">manual database set up</a> option.",
    "dbhost" => "Database Host",
    "dbname" => "Database Name",
    "dbuser" => "Database Username",
    "dbpass" => "Database Passwood",
    "dbtype" => "Database Type",
    "dbprefix" => "Database Pwefix",
    "submit" => "Pwoceed >> ", 
    "detailsinvalid" => "Your MySQL details appear to be invawid. Pweese go back and make sure they are cowwect. When in doubt, contact your administwator.",
    "proceed" => "Proceed To Table Creation >>",
    "databasecreated" => "A database for UseBB has been successfully cweated!",
    "databasenotcreated" => "The modInstall Wizawd could not cweate the database, pwobably because of insufficient user permissions. Pwease ask your administwator to cweate a database for UseBB and pwoceed to the <a href=\"modInstall.php?step=db_manual_create\">manual database set up</a> option."
)

?>