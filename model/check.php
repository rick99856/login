<?php
session_start(); 
	include("mysql_connect.php");

		if(isset($_POST['buttons'])){
			if( empty($_POST['id']) ||  empty($_POST['pwd'])){
				echo '<script>alert("不得為空值") </script>';
				echo '<meta http-equiv="refresh" CONTENT="1; url=../index.php">';
			}
			else{
				$id = $_POST['id'];
				$pwd = $_POST['pwd'];
				$sql = "select * from login where username = '$id'";
				$result = mysql_query($sql);
				$row = @mysql_fetch_row($result);
				// print_r($row);
				// echo $id.''.$pwd;
				// echo $row[2]."<br><br>";
				// echo md5($pwd);
				if($id != null && $pwd !=null && $row[1]==$id && $row[2]==md5($pwd)){
					$_SESSION['username'] = $id;

					echo "登入成功";
					echo '<meta http-equiv="refresh" CONTENT="1; url=../view/member.php">';

				}
				else{
					echo "登入失敗";
					echo '<meta http-equiv="refresh" CONTENT="1; url=../index.php">';
				}
			}
		}
		else{
			exit;
		}
?>
