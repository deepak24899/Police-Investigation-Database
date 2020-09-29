<?php
mysql_connect("localhost","root","");
mysql_select_db("pid");
$pid=$_POST['pid'];
$pass=$_POST['password'];
$query = sprintf("SELECT pid FROM users 
    WHERE pid='%s' AND password='%s'",
    mysql_real_escape_string($pid),
    mysql_real_escape_string($pass));$result=mysql_query($sql);
 if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
else
    echo "Success";
//if($result){
//echo "Success";
//}
?>
