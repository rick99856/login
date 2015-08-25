<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php 
session_start();
include("mysql_connect.php");
if(isset($_GET['a'])){
	switch ($_GET['a']) {
		case '1':
			require_once('../view/register.php');		
			break;
		case '2':
			require_once('../model/update.php');
			break;
		case '3':
			require_once('../view/delete.php');
			break;	
		case '4':
			require_once('../view/forgetpwd.php');
		default:
			break;
	}
}
?>