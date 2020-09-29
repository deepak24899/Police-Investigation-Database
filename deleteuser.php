<?php
header("Location: index.html");
mysql_connect("localhost","root","");
mysql_select_db("pid");
$pid=$_POST['pid'];
$pass=$_POST['password'];
$sql="DELETE FROM users WHERE pid = '" .$pid. "' and password ='" .$pass. "';";
$result=mysql_query($sql);
//if($result){
echo $result;
//}
?>


