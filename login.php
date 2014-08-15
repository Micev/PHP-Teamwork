<?php
$con=mysqli_connect("localhost","root","","teamwork");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_POST){
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);}
$check=mysqli_query($con,'SELECT * FROM `users` WHERE `User_Name` = "'.$username.'" and `User_Password` = "'.$password.'"');
$x=mysqli_num_rows($check);
if($x>0){
    echo 'Logged!';

}else{     echo 'Incorrect Login details';}