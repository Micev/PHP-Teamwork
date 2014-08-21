<?php
session_start();
$con=mysqli_connect("localhost","root","","teamwork");
if($_POST){
    $title = htmlspecialchars(trim($_POST['title']));
    $msg = htmlspecialchars(trim($_POST['msg']));
    $user = $_SESSION['user'];

    mysqli_query($con,'INSERT INTO `message`(`message_Title`, `message_Text`, `message_User`, `message_Data`)
    VALUES ("'.$title.'","'.$msg.'","'.$user.'","'.date('y,m,d').'")');
}
$all=mysqli_query($con,'SELECT `message_ID`, `message_Title`, `message_Text`, `message_User`, `message_Data` FROM `message`');
while($row = mysqli_fetch_array($all))
{
    echo $row['message_Title'] . " " . $row['message_Text']. " " . $row['message_User']. " " . $row['message_Data'];
    echo "<br />";
}