<?php 
class Member_handle{
  function check(){
    foreach (func_get_args() as $n) {
       if(isset($n)){
         continue;
       }
        else{
          return false;
        }

        return ture;
       
    }
  }

	function register($id , $pw , $telephone,$address,$other){
		$sql_check = "SELECT * FROM `login` WHERE username='$id'";
    $result = mysql_query($sql_check);
	  if(mysql_num_rows($result)>0){
	          echo '帳號已經使用過了!';
	          echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
	  }
    else {
      $sql = "INSERT INTO `login`( `username`, `passwd`, `tel`, `adds`, `other`) VALUES ('$id',  '".md5($pw)."', '$telephone', '$address', '$other')";
      return mysql_query($sql);
        
    }
	}


  function update($id , $pw , $telephone , $address , $other){
       $id = $_SESSION['username'];
    
        //更新資料庫資料語法
        $sql = "update login set passwd = md5('$pw'), tel = '$telephone', adds = '$address', other = '$other' where username = '$id'";
        // echo $sql;
        if(mysql_query($sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/member.php">';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/member.php">';
        }     

  }
  function delete($id){
        $sql = "delete from login where username='$id'";
        if(mysql_query($sql)) {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
        }
        else{
                echo '刪除失敗!';
                echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
        }
  }


}
?>