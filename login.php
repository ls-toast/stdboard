<?php
session_start();
include "./common.php";

$id = $_GET['id'];
$pw = $_GET['password'];

$chk_qry="SELECT * FROM users where id='$id'";
$res=mysqli_query($con, $chk_qry);
$row=mysqli_fetch_array($res);
if($id != $row['ID'])
{
    echo "<script> alert(\"ID ERROR!\");";
    echo "location.href='./main.html';</script>";
}

if($pw == $row['PW'])
{
    $_SESSION['id']=$id;
    echo "<script> alert(\"HELLO ";
    echo $id;
    echo "\")</script>";
}
else
{
echo "<script> alert(\"PASSWORD ERROR!\");";
echo "location.href='./main.html';</script>";
}
?>
