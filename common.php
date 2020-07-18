<?php
$conn = mysqli_connect('localhost','toast','toor','stdboard');
if($conn)
	echo "CONNECTION SUCCESS!";
else
	echo "CONNECTION FAIL!";
?>
