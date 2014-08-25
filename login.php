<?php
session_start();
$con=mysqli_connect("localhost","root","","teamwork");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_POST){
    $username=htmlspecialchars(trim($_POST['username']));
    $password=htmlspecialchars(trim($_POST['password']));
}
$password = crypt(md5(sha1($password)),sha1($username));
$check=mysqli_query($con,'SELECT * FROM `users` WHERE `User_Name` = "'.$username.'" and `User_Password` = "'.$password.'"');
$x=mysqli_num_rows($check);
if($x>0){
    session_start();
    echo 'Logged!';
    $_SESSION['isLogged']=true;
    $_SESSION['user']=$username;
    header("Location: header.php");
}
else{
    echo 'Incorrect Login details';
}
