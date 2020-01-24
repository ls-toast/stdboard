<?php
include "./common.php";
$id = $_GET['id'];
$pw = $_GET['password'];
$name = $_GET['name'];
$no_qry = "select max(no) from users";
$res = mysqli_query($con, $no_qry);
echo $res;
?>
