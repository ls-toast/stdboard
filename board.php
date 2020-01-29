<?php
include "./common.php";
$query="SELECT * FROM board";
$res = mysqli_query($con, $query);
?>
<html>
<body>
	<h1> TEST BOARD!</h1>
	<?php 
	echo "Hello! ";
	echo $_SESSION['id'];
	?>
	<table>
		<tr>
		<td width="400" align="center">제목</td>
		<td width="100" align="center">작성자</td>
		</tr>
		<?php
		while($rows = mysqli_fetch_assoc($res))
		{?>
			<tr>
				<td width='400' align='center'> <a href="read.php?no=<?php echo $rows['no'];?>"><?php echo $rows['title'];?></td>
				<td width='100' align='center'> <?php echo $rows['author'];?></td>
			</tr>
		<?php } ?>
	</table>
	<input type="button" onclick="location.href='./write.html'" value="Write">
	<input type="button" onclick="location.href='./logout.php'" value="Logout">
</body>
</html>