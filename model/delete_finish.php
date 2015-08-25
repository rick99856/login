<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
include("member_handle.php");
$id = $_POST['id'];

if($_SESSION['username'] != null && $_SESSION['username']=="admin"){
	if($id =="admin"){
		echo '不可以刪除最高權限者!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/member.php">';
	}
	else{
		$mem = new Member_handle;
        $result = $mem->delete($id);
       	if($result){
       		echo '刪除成功!';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
       	}
       	else{
       		echo '刪除失敗!';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
       	}
       		
	}
   
}
else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
}
?>