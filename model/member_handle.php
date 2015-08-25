<?php 
class Member_handle{

  function check($id,$pwd){
    //檢查是否為空值
    if(isset($id) && isset($pwd)){
      return true;
    }
    else{
      return false;
    }
  }

	function register($id , $pw , $telephone,$address,$other){
    //
		$sql_check = "SELECT * FROM `login` WHERE username='$id'";
    $result = mysql_query($sql_check);
	  if(mysql_num_rows($result)>0){
	     return "帳號已經使用過了!";
	  }
    else {
      $sql = "INSERT INTO `login`( `username`, `passwd`, `tel`, `adds`, `other`) VALUES ('$id',  '".md5($pw)."', '$telephone', '$address', '$other')";
      return mysql_query($sql);
        
    }
	}


  function update($id , $pw , $telephone , $address , $other){
       $id = $_SESSION['username'];
    
        //更新資料庫資料語法
        $sql = "UPDATE login set passwd = md5('$pw'), tel = '$telephone', adds = '$address', other = '$other' where username = '$id'";
        // echo $sql;
        if(mysql_query($sql)){
            return true;
        }
        else{
            return false; 
        }     

  }
  function telprove($id,$tel){
        $sql = "select * from login where username = '$id'";
        $result = mysql_query($sql);
        $row = @mysql_fetch_row($result);
        if($tel == $row[3]){
          return true;
        }
        else{
          return false;
        }
  }

  function newpwd($id,$pwd){
     $sql = "UPDATE login set passwd = md5('$pwd') where username = '$id'";
      // $sql_check = "SELECT * FROM `login` WHERE username='$id'";
      // $sql = "INSERT INTO `login`( `username`, `passwd`, `tel`, `adds`, `other`) VALUES ('$id',  '".md5($pw)."', '$telephone', '$address', '$other')";
      return mysql_query($sql);
  }


}

?>