
<html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<script src="dist/js/bootstrap.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<body background="38003.jpg" style="background-repeat: no-repeat;background-size:cover;">
	<div style="height:550px;">
	<!-- <p class=\"bg-primary\">...</p> -->
	<form name="form" method="post" action="index.php" style="margin-top:280px;">
	
	<div class="col-md-4 col-md-offset-4">
		<div class="col-md-8 col-md-offset-3">

		帳號：<input  class="form-control" type="text" name="id"/><br>
		密碼：<input class="form-control" type="password" name="pwd"/><br>
		</div>

	 <?//=$infogetName();?>
	<input type="submit" value="登入" class="btn btn-primary btn-md  col-md-offset-4" name="buttons" style="
    	width: 200;">&nbsp;&nbsp;
    	

	<!-- <a href="register.php">申請帳號</a> -->
	<?php 

		session_start();
		echo "<button type=\"button\" class=\"btn btn-info btn-sm col-md-offset-4 name=\"buttons\" style=\"
    	width: 200;\" onclick='location.href=\"funct1.php?a=1\"'>新增</button>";
		
	?>

	</div>

	<form>
	</div>
</html>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
	include("mysql_connect.php");

		if(isset($_POST['buttons'])){
			if( empty($_POST['id']) ||  empty($_POST['pwd'])){
				echo '<script>alert("不得為空值") </script>';
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
				echo md5($pwd);
				if($id != null && $pwd !=null && $row[1]==$id && $row[2]==md5($pwd)){
					$_SESSION['username'] = $id;
					// echo $_SESSION['username'];
					echo "登入成功";
					echo '<meta http-equiv="refresh" CONTENT="1; url=member.php">';

				}
				else{
					echo "登入失敗";
					echo '<meta http-equiv="refresh" CONTENT=1; url=index.php>';
				}
			}
		}
		else{
			exit;
		}
?>

