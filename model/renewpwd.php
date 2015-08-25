<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
include("member_handle.php");
$pwd1 = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$mem = new Member_handle;
if($pwd1 == $pwd2){
    $result = $mem->newpwd($_SESSION['username'],$pwd1);
    if($result){
        echo '密碼已更新';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
    }
    else{
        echo 'error';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
    }
}
?>