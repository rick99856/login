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

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        $mem = new Member_handle;
        $result = $mem->update($id,$pw,$telephone,$address,$other);
        if($result){
			echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/member.php">';
        }else{
        	echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/member.php">';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
}
?>