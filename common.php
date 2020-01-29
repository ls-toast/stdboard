<?php
session_start();
$con = mysqli_connect("localhost","root","toor","stdboard");
if(!$con)
{
 echo "DB CONNECT FAILED!";
}
if(!isset($_SESSION['id']))
{
	echo "<script> alert('LOGIN FIRST!');";
	echo "location.href='./main.html';</script>";
}
?>
