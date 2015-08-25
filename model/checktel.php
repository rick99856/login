<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
include("member_handle.php");
$id = $_POST['id'];
$tel = $_POST['tel'];
$mem = new Member_handle;
if ($mem->check($id,$tel)==false){
      // if( empty($_POST['id']) ||  empty($_POST['pwd'])){
        echo '<script>alert("帳密不得為空值") </script>';
        echo '<meta http-equiv="refresh" CONTENT="1; url=../view/forgetpwd.php">';
}
else{
  if($mem->telprove($id,$tel)){
            echo '確定OK';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../view/repwd.php">';
  }
  else{
    echo '此電話與ID不相符';
            echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
  }
  
}


?>