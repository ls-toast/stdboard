<?php
include './common.php';

$id=$_POST["reg_id"];
$pw=$_POST["reg_pw"];
$nick=$_POST["reg_nickname"];
$desc=$_POST["reg_description"];


$query="INSERT INTO users (id,pw,nickname,description) VALUES ('$id', '$pw', '$nick', '$desc')";
$result = mysqli_query($conn,$query);
if($result)
	echo "<script> alert('REGISTER SUCCESS!'); location.href='./index.html';</script>"
?>
