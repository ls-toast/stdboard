<?php 
include "./common.php";
$query = "SELECT * FROM board WHERE no=$_GET[no]";
$res = mysqli_query($con, $query);
$rows = mysqli_fetch_array($res);
?>
<html>
    <body>
        <table align=center >
            <tr>
                <td colspan="4">TITLE : <?php echo $rows['title']?></td>
            </tr>
            <tr>
                <td colspan="4">AUTHOR : <?php echo $rows['author']?></td>
            </tr>
            <tr>
                <td colspan="4" ><div style="border:1px solid; padding:10px;"><?php echo $rows['contents']?></div></td>
            </tr>
        </table>
        <button onclick="location.href='./board.php'"> Back To List </button>
        <button onclick="location.href='./modify.php?no=<?php echo $rows['no']; ?>'"> Modify </button>
        <button onclick="location.href='./delete.php?no=<?php echo $rows['no']; ?>'"> Delete </button>
    </body>
</html>