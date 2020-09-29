 <?php
$mysqli = new mysqli("localhost", "root", "", "pid");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT pid, name
FROM pidlist WHERE pid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($pid, $name);
$stmt->fetch();
$stmt->close();
echo $pid;
?> 