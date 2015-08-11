
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

if($_SESSION['username'] != null)
{
        
                        $id = $_SESSION['username'];
        
                        $sql = "SELECT * FROM login where username='".$id."'";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_row($result);
                        
                        require_once('updatelayout.php');
                        
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT="2;url=index.php">';
}
?>