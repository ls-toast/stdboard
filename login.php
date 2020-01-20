<?php
include "./common.php";
if($con)
 echo "CONNECTED!";
else
 echo "FAILED!";
echo $_GET['id'];
echo $_GET['password'];
?>
