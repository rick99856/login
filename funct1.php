<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php 
session_start();
include("mysql_connect.php");
if(isset($_GET['a'])){
	switch ($_GET['a']) {
		case '1':
				require_once('register.php');
		   			
			break;
		case '2':
     //   			$id = $_SESSION['username'];
        
     //   		 	$sql = "SELECT * FROM login where username='".$id."'";
     //    		$result = mysql_query($sql);
     //    		$row = mysql_fetch_row($result);
        		
       			
    	// 		echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
					// 	<link rel=\"stylesheet\" href=\"dist/css/bootstrap.min.css\">
					// 	<script src=\"dist/js/bootstrap.min.js\"></script>
					// 	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
					// 	<html>
					// <body background=\"fresh-green-background.jpg\" style=\"background-repeat: no-repeat;background-size:cover;\">
					
					// <div class=\"row\">
					// <div class=\"col-md-3 col-md-offset-4\" >
					// <form name=\"form1\" method=\"post\" action=\"update_finish.php\">
     //    			<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >帳號：</span><input type=\"text\" name=\"id\" value=\"$row[1]\" class=\"form-control\"/><br>
     //    			<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >密碼：</span><input type=\"password\" name=\"pw\" value=\"$row[2]\" class=\"form-control\"/> <br>
     //    			<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >再一次輸入密碼：</span><input type=\"password\" name=\"pw2\" value=\"$row[2]\" class=\"form-control\"/> <br>
     //   		 		<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >電話：</span><input type=\"text\" name=\"telephone\" value=\"$row[3]\" class=\"form-control\"/> <br>
     //   				<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >地址：</span><input type=\"text\" name=\"address\" value=\"$row[4]\" class=\"form-control\"/> <br>
     //    			<span style=\"font-family:Microsoft JhengHei;font-size:18px;\" >備註：</span><textarea name=\"other\" cols=\"45\" rows=\"5\" class=\"form-control\">$row[5]</textarea> <br>
     //    			<input type=\"submit\" name=\"button\" class=\"btn btn-success btn-lg btn-block\" value=\"確定\" />
     //    			</form>
     //    			</div>
		   // 			</div>

		   			
		   // 			</body>
		   // 			</html>";
			require_once('update.php');
	
			break;
		case '3':
			require_once('delete.php');

			break;	
		default:
			# code...
			break;
	}
}
?>