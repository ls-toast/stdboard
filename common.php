<?php
$conn = mysqli_connect('localhost','root','toor','stdboard');
if($conn)
	echo "CONNECTION SUCCESS!";
else
	echo "CONNECTION FAIL!";
?>
