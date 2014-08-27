
<?php
include('header.php');
if(!isset($_SESSION['isLogged'])){
    header('Location: login.php');
}?>

<form method="post" class="answerForm">
    <input type="text" name="title" placeholder="Enter tag name...">
    <textarea name="text" placeholder="Enter your answer here..." maxlength="2000"></textarea>
    <input type="submit">
</form>
<?php
if(isset($_POST['text']) && isset($_POST['title'])){
    $theme=$_GET['theme'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $user=$_SESSION['user'];
    $date= date('Y-m-d H:i:s');
    mysqli_query($con,'INSERT INTO `message`(`message_Title`, `message_Text`, `message_User`, `message_Data`, `theme_ID`) VALUES ("'.$title.'","'.$text.'","'.$user.'","'.$date.'", "'.$theme.'")');
}
?>