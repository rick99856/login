<?php
session_start(); 
	include("mysql_connect.php");
	include("member_handle.php");
	$mem = new Member_handle;
		if(isset($_POST['buttons'])){
			if ($mem->check($_POST['id'],$_POST['pwd'])==false){
			// if( empty($_POST['id']) ||  empty($_POST['pwd'])){
				echo '<script>alert("帳密不得為空值") </script>';
				echo '<meta http-equiv="refresh" CONTENT="1; url=../index.php">';
			} 
			else {
				$id = $_POST['id'];
				$pwd = $_POST['pwd'];
				$sql = "select * from login where username = '$id'";
				$result = mysql_query($sql);
				$row = @mysql_fetch_row($result);

				if($row[1]==$id && $row[2]==md5($pwd)){

					$_SESSION['username'] = $id;
					$_SESSION['tel'] = $row[3];
					$_SESSION['addr'] = $row[4];
					$_SESSION['other'] = $row[5];

					echo "登入成功";
					echo '<meta http-equiv="refresh" CONTENT="1; url=../view/member.php">';

				}
				else {
					echo "登入失敗";
					echo '<meta http-equiv="refresh" CONTENT="1; url=../index.php">';
				}
			}
		}
		else{
			exit;
		}
?>
