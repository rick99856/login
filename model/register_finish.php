<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
include("member_handle.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];


if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        
        $mem = new Member_handle;
        if($mem->register($id,$pw,$telephone,$address,$other)){
	          echo '新增成功!';
	          echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';

	    }       
	    else {
              echo '新增失敗!';
              echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
        }  
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
}
?>