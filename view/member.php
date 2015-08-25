<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
    <script src="../dist/js/bootstrap.min.js"></script>
    <div class="col-md-6 col-md-offset-3">
        <div class="col-md-8 col-md-offset-4">
            <img src="https://cdn3.iconfinder.com/data/icons/mixed-3d-icons/512/VIP_icon_3D-128.png" ><br>
        </div>
     
    <body background="../resource/38003.jpg" style="background-repeat: no-repeat;background-size:cover;">
<?php
session_start(); 
include("../model/mysql_connect.php");

    
    if($_SESSION['username'] != null){

        $sql = "SELECT * FROM login";
        $result = mysql_query($sql);
        echo "<table class=\"table table-hover\">";
        
        while($row = mysql_fetch_row($result))
        {
                echo "<tr>";
                echo "<td>$row[0] </td> <td>名字(帳號)：$row[1]</td> " . 
                 "<td>電話：$row[3] </td> <td>地址：$row[4]</td> <td>備註：$row[5]</td>";
                echo "</tr>";
        }

        echo "</table>";
    }
    else{
        echo 'tou don\'t have premission!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=../index.php">';
    }
    require_once('button.php');
?>


    </div>

</html>

