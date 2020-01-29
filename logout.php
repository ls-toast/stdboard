<?php
session_start();
session_destroy();
echo "<script> alert('GOOD BYE') </script>";
header("Location: ./main.html");
?>