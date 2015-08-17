<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
include("member_handle.php");
$id = $_POST['id'];

if($_SESSION['username'] != null && $_SESSION['username']=="admin"){
        $mem = new Member_handle;
        $mem->delete($id);
        
}
else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
}
?>