<a href="new_answer.php">New Answer</a>
<?php
session_start();
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
{
    echo "TITLE:".$row['message_Title'] . "</br> " . "TEXT:". $row['message_Text']. "</br> " ."USER:". $row['message_User']. "</br> " ."DATE:". $row['message_Data'];
    echo "<br />";
}
