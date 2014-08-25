
<?php
include('header.php');?>

<form method="post">
    <input type="text" name="title">
    <textarea name="text"></textarea>
    <input type="submit">
</form>
<?php
$theme=$_GET['theme'];
$title=$_POST['title'];
$text=$_POST['text'];
$user=$_SESSION['user'];
$date= date('d-M-Y H:m:s');
mysqli_query($con,'INSERT INTO `message`(`message_Title`, `message_Text`, `message_User`, `message_Data`, `theme_ID`) VALUES ("'.$title.'","'.$text.'","'.$user.'","'.$date.'", "'.$theme.'")');
?>
