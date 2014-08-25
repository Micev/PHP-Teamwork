<!DOCTYPE html>
<html>
<head>
    <title>Draco Forum</title>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="utf-8">
</head>
<body>
<img src="images/logo.png">
<div id="menu">
   <?php
   session_start();
   $log= $_SESSION['isLogged'];
   if($log){
       echo 'Hello '.$_SESSION['user'].' you are logged in.'.'<a href="logout.php">Logout</a>';
   }
   else{
       echo 'Hello Guest. Please <a href="login.html">Login</a> or <a href="Register.html">Register</a>.';
   }
   ?>
</div>

