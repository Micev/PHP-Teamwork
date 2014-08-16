<?php
session_start();
if($_SESSION['isLogged']){
    echo 'Hello '.$_SESSION['user'].' you are logged in.';
}
else{
    echo 'Hello Guest. Please <a href="login.html">Login</a> or <a href="Register.html">Register</a>.';
}