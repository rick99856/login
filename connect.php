<?php 
	session_start();
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
	include("mysql_connect.php");
	// echo $_POST['id'].' '.$_POST['pwd'];
	

		if(isset($_POST['buttons'])){
			if( empty($_POST['id']) ||  empty($_POST['pwd'])){
				echo '<script>alert("不得為空值")  </script>';
				
				echo '<meta http-equiv=REFRESH CONTENT=1; url=index.php >';
			}
			else{
				$id = $_POST['id'];
				$pwd = $_POST['pwd'];
				$sql = "select * from login where username = '$id'";
				$result = mysql_query($sql);
				$row = @mysql_fetch_row($result);
	// print_r($row);
				echo $id.''.$pwd;
				if($id != null && $pwd !=null && $row[1]==$id && $row[2]==$pwd){
					$_SESSION['username']= $id;
					echo "登入成功";
					echo '<meta http-equiv="refresh" CONTENT="1; url=member.php">';
		// echo <meta http-equiv="refresh" content="0;url=http://mepopeidia.com" />
		// header("Refresh: 0; url=member.php");
				}
				else{
				echo "登入失敗";
				echo '<meta http-equiv="refresh" CONTENT=1; url=index.php>';
				}
			}
		}
		else{
			echo '123';
			header('Location:index.php');
			exit;
			// echo '<meta http-equiv="refresh" CONTENT=1; url=index.php>';
		}
			
		
		


	


?>