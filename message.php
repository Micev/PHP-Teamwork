<?php
require("header.php");
?>
<div class="btnNewTheme"><input type="button" value="New Answer" onclick=location.href="new_answer.php?theme=<?=$_GET['theme']?>"></div>
<table class="tableAnswer">
    <colgroup>
        <col style="width: 23%"/>
        <col style="width: 77%"/>
    </colgroup>
<?php
$theme=$_GET['theme'];
$con=mysqli_connect("localhost","root","","teamwork");
/*if($_POST){
    $title = htmlspecialchars(trim($_POST['title']));
    $msg = htmlspecialchars(trim($_POST['msg']));
    $user = $_SESSION['user'];

    mysqli_query($con,'INSERT INTO `message`(`message_Title`, `message_Text`, `message_User`, `message_Data`)
    VALUES ("'.$title.'","'.$msg.'","'.$user.'","'.date('y,m,d').'")');
}*/
$all=mysqli_query($con,'SELECT `message_ID`, `message_Title`, `message_Text`, `message_User`, `message_Data` FROM `message` WHERE `theme_ID` = "'.$theme.'"');
while($row = mysqli_fetch_assoc($all))
{?>
    <tr>
        <td>
            <p><span>User: </span><span class="details"><a href="#"><?= $row['message_User'] ?></a></span></p>
            <p><span>Tag: </span><span class="details"><?= $row['message_Title'] ?> </span></p>
            <p><span>Date: </span><span class="details"><?= $row['message_Data'] ?></span></p>
        </td>
        <td><div><?= $row['message_Text'] ?></div></td>
    </tr>
<!--    <tr>-->
<!--        <td><span>User: </span><span class="details"><a href="#">--><?//= $row['message_User'] ?><!--</a></span></td>-->
<!--        <td><span>Title: </span><span class="details">--><?//= $row['message_Title'] ?><!-- </span> </td>-->
<!--        <td><span>Date: </span><span class="details">--><?//= $row['message_Data'] ?><!--</span> </td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td colspan="3">--><?//= $row['message_Text'] ?><!--</td>-->
<!--    </tr>-->
<?php
}?>
</table>
<?php
require("footer.php");
?>
