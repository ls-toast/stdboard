<?php
include "./common.php";
$id = $_GET['id'];
$pw = $_GET['password'];
$name = $_GET['name'];
$no_qry = "select max(no) from users";
$res = mysqli_query($con, $no_qry);
$row = mysqli_fetch_array($res);
$no = $row['max(no)'];
$no = $no+1;
$insert_qry = "insert into users(no,id,pw,name) values($no,'{$id}','{$pw}','{$name}')";
$res = mysqli_query($con, $insert_qry);
if($res)
 echo "INSERT SUCCESSS";
else
 echo "INSERT ERROR";
?>
