<?php
include "./common.php";

if(isset($_POST['id']) && isset($_POST['password']))
{
	$id = $_POST['id'];
	$pw = $_POST['password'];
}

if(!isset($_POST['id']) || !isset($_POST['password']))
{
	echo "<script> alert(\"ID or PW is empty!\");";
	echo "location.href='./main.html';</script>";
	exit();
}

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
    echo "\");";
    echo "location.href='./board.php';</script>";
}
else
{
echo "<script> alert(\"PASSWORD ERROR!\");";
echo "location.href='./main.html';</script>";
}
?>
