<?php
session_start();
if($_SESSION['isLogged']){
    echo 'Hello '.$_SESSION['user'].' you are logged in.'.'<a href="logout.php">Logout</a>';
}
else{
    echo 'Hello Guest. Please <a href="login.html">Login</a> or <a href="Register.html">Register</a>.';
}
?>
<form method="post" action="message.php">
    <input type="text" name="title">
    <textarea name="msg"></textarea>
    <input type="submit" value="Post">
</form>