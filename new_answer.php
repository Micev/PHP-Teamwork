<form method="post">
    <input type="text" name="title">
    <textarea name="text"></textarea>
    <input type="submit">
</form>
<?php
include('header.php');
$theme=$_GET['theme'];
$title=$_POST['title'];
$text=$_POST['text'];
$user=$_SESSION['user'];
$date= date('d-M-Y H:m:s');
var_dump($date);
mysqli_query($con,'INSERT INTO `message`(`message_ID`, `message_Title`, `message_Text`, `message_User`, `message_Data`, `theme_ID`)
 VALUES ([NULL ,"'.$title.'","'.$text.'","'.$text.'","'.$user.'","'.$date.'")');

