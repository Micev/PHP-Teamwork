<form method="post">
    Theme:<input type="text" name="theme">
    Theme info:<input type="text" name="info">
    Message title:<input type="text" name="title">
    Question:<textarea name="message"></textarea>
    <input type="submit">
</form>
<?php
include('header.php');
$theme=$_POST['theme'];
$info=$_POST['info'];
$titleID=$_GET['topic'];
$title=$_POST['title'];
$msg=$_POST['message'];
mysqli_query($con,'INSERT INTO `theme`(`theme_ID`, `theme_name`, `theme_info`, `topic_ID`) VALUES ( NULL ,"'.$theme.'","'.$info.'","'.$titleID.'")');