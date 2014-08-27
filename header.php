<!DOCTYPE html>
<html>
<head>
    <title>Draco Forum</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/registerAndLog.css">
    <link rel="stylesheet" href="style/menu.css"> <!--v2-->
    <meta charset="utf-8">
</head>
<body>
<div id="wrapper">
    <header>
        <a href="index.php"><img src="images/logo.png"></a>
        <div id="menu2">
            <?php
            session_start();
            setcookie('','',30);
            $con=mysqli_connect("localhost","root","","teamwork");
            //v1
            /*if(isset($_SESSION['isLogged'])){
                echo 'Hello '.$_SESSION['user'].' you are logged in.'.'<a href="logout.php">Logout</a>';
            }
            else{
                echo 'Hello Guest. Please <a href="login.php">Login</a> or <a href="register.php">Register</a>.';
            }*/
            ?>

            <!--v2-->
            <div id="userbar">
                <?php
                if(isset($_SESSION['isLogged']))
                    echo '<span style="color: #F56505">Hello,'.htmlentities($_SESSION['user']) .' </span> <a class="item" href="logout.php">Logout</a>';
                else {
                    echo '<a class="item" href="login.php">Login</a> <a class="item" href="register.php">Register</a>';
                }
                ?>
            </div>
            <div id="rightmenu">
                <a class="item" href="https://softuni.bg" target="_blank">SoftUni</a>
                <a class="item" href="index.php">Index</a>
                <a class="item" href="#">Search</a>
                <a class="item" href="#">FAQ</a>
            </div>
            <!--end v2-->
        </div>


    </header>