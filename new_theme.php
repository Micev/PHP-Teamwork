<?php
require("header.php");
if(isset($_POST['submit'])){
    $theme=$_POST['theme'];
    $info=$_POST['info'];
    $title=$_POST['title'];
    $msg=$_POST['message'];
}
?>
<form method="post" class="answerForm">
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
