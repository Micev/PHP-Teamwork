<?php
$con=mysqli_connect("localhost","root","","teamwork");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_POST){
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);}
    $check=mysqli_query($con,'SELECT * FROM `users` WHERE `User_Name` = "'.$username.'"');
    $x=mysqli_num_rows($check);

if($x>0){
        echo 'Username exits. Try another username';

    }else{     mysqli_query($con,'INSERT INTO `users`( `User_Name`, `User_Password`) VALUES ("'.$username.'","'.$password.'")');
    }