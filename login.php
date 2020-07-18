<?php
include 'common.php';
$id = $_POST["usr_id"];
$pw = $_POST["usr_pw"];

$sql = "SELECT * from users where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($id == $row['id'] && $pw == $row['pw'])
{
	echo "<script>alert('HELLO $id!'); location.href='./menu.html';</script>";
	$_SESSION["SESSION"]=$id;
}
else
	echo "LOGIN FAILED!";
?>
