<?php
include "./common.php";
if(!$con)
 echo "FAILED!";
$id = $_GET['id'];
$pw = $_GET['password'];

$chk_qry="SELECT * FROM users where id='$id'";
$res=mysqli_query($con, $chk_qry);
if(!$res)
    echo "ID ERROR";
$row=mysqli_fetch_array($res);
if($pw == $row['pw'])
    echo "LOGIN SUCCESS!";
else
    echo "PASSWORD ERROR!";
?>
