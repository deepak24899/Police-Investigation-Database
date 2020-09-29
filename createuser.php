<?php
mysql_connect("localhost","root","");
mysql_select_db("pid");
$name=$_POST['name'];
$pid=$_POST['pid'];
$pass=$_POST['password'];
$email=$_POST['email'];
$sql="INSERT INTO users VALUES ('" .$name. "','" .$email. "','" .$pid. "','" .$pass. "')";
$result=mysql_query($sql);
if($result){
echo "Created";
}
?>
