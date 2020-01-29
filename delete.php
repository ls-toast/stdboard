<?php
include "./common.php";
$no=$_GET['no'];
$author_query="SELECT author FROM board WHERE no=$no";
$del_query="DELETE FROM board WHERE no=$no";
$res = mysqli_query($con, $author_query);
$rows = mysqli_fetch_array($res);
$author = $rows['author'];
if($_SESSION['id'] == $author)
{
    $res = mysqli_query($con, $del_query);
    if($res)
    {
        echo "<script> alert('YOUR CONTENTS DELETED!'); location.href='./board.php';</script>";
    }
    else
    {
        echo "<script> alert('DELETE ERROR!'); location.href='./board.php';</script>";
    }
}
else
{
    echo "<script> alert('FUCK OFF!'); history.back();</script>";
}
?>