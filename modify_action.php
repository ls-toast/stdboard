<?php
include "./common.php";
$id = $_SESSION['id'];
$title = $_POST['title'];
$contents = $_POST['contents'];
$no = $_SESSION['no'];
$query = "UPDATE board SET title='$title', author='$id', contents='$contents' WHERE no=$no";
$res = mysqli_query($con, $query);
if(!$res)
{
 echo "<script> alert('QUERY ERROR!'); </script>";
}
else
{
    echo "<script> alert('DONE!'); location.href='./board.php'</script>";
}
$_SESSION['no'] = random_int();
?>