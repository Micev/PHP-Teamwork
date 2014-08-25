<form method="post">
    Theme:<input type="text" name="theme">
    Theme info:<input type="text" name="info">
    Message title:<input type="text" name="title">
    Question:<textarea name="message"></textarea>
    <input type="submit">
</form>
<?php
$theme=$_POST['theme'];
$info=$_POST['info'];
$title=$_POST['title'];
$msg=$_POST['message'];
