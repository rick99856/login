<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];


if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        echo $id;
        $sql_check = "SELECT * FROM `login` WHERE username='$id'";
        print_r(mysql_query($sql_check));
        $result = mysql_query($sql_check);
        if(mysql_num_rows($result)>0){
                echo '帳號已經使用過了!';
                echo '<meta http-equiv=REFRESH CONTENT="2;url=index.php">';
        }
        else{
             $sql = "INSERT INTO `login`( `username`, `passwd`, `tel`, `adds`, `other`) VALUES ('$id',  '".md5($pw)."', '$telephone', '$address', '$other')";

                if(mysql_query($sql))
                {
                        echo '新增成功!';
                        echo '<meta http-equiv=REFRESH CONTENT="2;url=index.php">';
                }
                else
                {
                      echo '新增失敗!';
                       echo '<meta http-equiv=REFRESH CONTENT="2;url=index.php">';
                 }    
        }
       
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=index.php">';
}
?>