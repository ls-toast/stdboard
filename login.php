<?php
include 'common.php';
$id = $_POST["usr_id"];
$pw = $_POST["usr_pw"];

$sql = "SELECT * from users where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($id == $row['id'] && $pw == $row['pw'])
{
	echo "ID : ".$row['id']."</br>";
	echo "PW : ".$row['pw']."</br>";
	echo "NICKNAME : ".$row['nickname']."</br>";
	echo "DESC : ".$row['description']."</br>";
}
else
	echo "LOGIN FAILED!";
?>
