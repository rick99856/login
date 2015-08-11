<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>

<html>
 <head>
  <meta charset="utf8">
  <title>功能頁</title>
	
    
<script> 
function getArgs() { 
   var args = new Object(); 
   //location = b.htm?aa=asda" 
   //locatin.search = ?aa=asds" 
   var query = location.search.substring(1); //aa=1&bb=abc&cc=測試" 
   var pairs = query.split("&"); 
   for(var i=0;i<pairs.length;i++) { 
      var pos = pairs[i].indexOf("="); 
      if (pos == -1) continue; 
      var argname = pairs[i].substring(0,pos); 
      var value = pairs[i].substring(pos+1); 
      args[argname] = decodeURIComponent(value); 
   } 
   return args; 
} 
var args = getArgs(); 
if (args.a=="1") {
   alert("a=" + args.a);
   <form name="form" method="post" action="register_finish.php">
   帳號：<input type="text" name="id" /> <br>
   密碼：<input type="password" name="pw" /> <br>
   再一次輸入密碼：<input type="password" name="pw2" /> <br>
   電話：<input type="text" name="telephone" /> <br>
   地址：<input type="text" name="address" /> <br>
   備註：<textarea name="other" cols="45" rows="5"></textarea> <br>
   <input type="submit" name="button" value="確定" />
   </form>
   
  
}
else if (args.a=="2") {
   // alert("a=" + args.a);
   
  
}
else if (args.a=="3") {
   // alert("a=" + args.a);
   
  
}
else{

}
      
</script> 
 </head>
<body>
    


 </body>
</html>