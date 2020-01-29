<?php
include "./common.php";
$no_query = "SELECT max(no) FROM board";
$id = $_SESSION['id'];
$title = $_POST['title'];
$contents = $_POST['contents'];
$res = mysqli_query($con, $no_query);
$rows = mysqli_fetch_array($res);
$no = $rows['max(no)'];
$query = "INSERT INTO board VALUES($no+1,'$title','$id','$contents')";
$res = mysqli_query($con, $query);
if(!$res)
{
 echo "<script> alert('QUERY ERROR!'); </script>";
}
else
{
    echo "<script> alert('DONE!'); location.href='./board.php'</script>";
}
?>