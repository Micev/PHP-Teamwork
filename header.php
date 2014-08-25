<!DOCTYPE html>
<html>
<head>
    <title>Draco Forum</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/registerAndLog.css">
    <meta charset="utf-8">
</head>
<body>
<div id="wrapper">
    <header>
        <img src="images/logo.png">
        <div id="menu">
           <?php
           session_start();
           if(isset($_SESSION['isLogged'])){
               echo 'Hello '.$_SESSION['user'].' you are logged in.'.'<a href="logout.php">Logout</a>';
           }
           else{
               echo 'Hello Guest. Please <a href="login.php">Login</a> or <a href="register.php">Register</a>.';
           }
           ?>
        </div>
    </header>
