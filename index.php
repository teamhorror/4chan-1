<?php
/**
 * 
 *
 * @author EpicDewd
 * @version 1.0
 * @copyright HalpMeh, 11 November, 2010
 * @package 4chan
 **/
error_reporting(E_ALL);
# Config
include_once dirname(__FILE__) . ("/Config.php");

# Classes
include_once dirname(__FILE__) . ("/Classes/Mysql.Class.php");
include_once dirname(__FILE__) . ("/Classes/Install.Class.php");
include_once dirname(__FILE__) . ("/Classes/General.Functions.php");
# Check if we're installed
if(!isset($host)) {
	$Install = new Install;
	if(isset($_POST['areWeHere']))
	{
		$pass = safe($_POST['pass']);
		if($pass == "SQL Pass")
		{
			$pass = '';
		}
		$Install->Generate(safe($_POST['host']), safe($_POST['user']), $pass, safe($_POST['name']));
		$Install->Done();
	}
	$Install->HTML();
	$Install->Done();
}
else

# HardCore Code
$db = new MySql($host, $user, $pass, $name);

# HTML & PHP Include
include_once dirname(__FILE__) . ("/Header.index.php");
include_once dirname(__FILE__) . ("/Main.index.php");
include_once dirname(__FILE__) . ("/Footer.index.php");
?>
