<?php
require("header.php");
if(!isset($_SESSION['isLogged'])){
    header('Location: login.php');
}
if(isset($_POST['submit'])){
    $topic=$_GET['topic'];
    $theme=$_POST['theme'];
    $info=$_POST['info'];
    $title=$_POST['title'];
    $msg=$_POST['message'];
    $user=$_SESSION['user'];
    $date= date('d-M-Y H:m:s');
    mysqli_query($con,'INSERT INTO `theme`(`theme_name`, `theme_info`, `topic_ID`)
                        VALUES ("'.$theme.'","'.$info.'","'.$topic.'")');
    mysqli_query($con,'INSERT INTO `message`(`message_Title`, `message_Text`, `message_User`, `message_Data`, `theme_ID`) VALUES ("'.$title.'","'.$msg.'","'.$user.'","'.$date.'", LAST_INSERT_ID())');
    header('Location:topic.php?topic='.$topic);
}
?>
<form method="post" class="themeForm">
    <label for="theme">Theme:</label><input type="text" name="theme" id="theme" required="">
    <label for="themeInfo">Theme info:</label><input type="text" name="info" id="themeInfo" required="">
    <label for="themeMessage">Message title:</label><input type="text" name="title" id="themeMessage" required="">
    <label for="themeQuestion">Question:</label><textarea name="message" id="themeQuestion" required=""></textarea>
<!--   TODO... here make onclick event to send as in right page-->
    <input type="submit" name="submit" onclick="" >
</form>
<?php
require("footer.php");
?>
