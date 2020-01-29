<?php
include "./common.php";
$no = $_GET['no'];
$author_query="SELECT * FROM board WHERE no=$no";
$res = mysqli_query($con, $author_query);
$rows = mysqli_fetch_array($res);
$author = $rows['author'];
$title = $rows['title'];
$contents = $rows['contents'];
if($_SESSION['id'] == $author)
{?>
    <html>
    <body>
        <form method="POST" action="modify_action.php">
        <table>
            <tr>
                <td>TITLE :
                <input type=text name=title value="<?php echo $title?>">
                </td>
            </tr>
            <tr>
                <td>Contents</td>
            </tr>
            <tr>
                <td> <textarea cols=85 rows=15 name=contents><?php echo $contents?></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Write">
        </form>
        <button onclick="location.href='./read.php?no=<?php echo $no;?>'"> Cancle </button>
    </body>
</html>
<?php
$_SESSION['no']=$no;
}
else
{
    echo "<script> alert('FUCK OFF!'); history.back();</script>";
}
?>