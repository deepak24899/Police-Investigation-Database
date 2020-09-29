<?php
header("Location: main.html");
mysql_connect("localhost","root","");
mysql_select_db("pid");
$name=$_POST['name'];
$pid=$_POST['pid'];
$pass=$_POST['password'];
$email=$_POST['email'];
$sql="UPDATE users SET username = '" .$name. "', mail ='" .$email. "', password = '" .$pass. "' WHERE pid = '" .$pid. "';";
$result=mysql_query($sql);
//if($result){
//echo "Created";
//}
?>

