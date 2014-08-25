<?php
$con=mysqli_connect("localhost","root","","teamwork");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if($_POST){
    $username=htmlspecialchars(trim($_POST['username']));
    $password=htmlspecialchars(trim($_POST['password']));
    $confpass=htmlspecialchars(trim($_POST['passwordConf']));
    $mail=htmlspecialchars(trim($_POST['email']));
    $mailconf=htmlspecialchars(trim($_POST['emailConf']));
    $firstname=htmlspecialchars(trim($_POST['firstname']));
    $lastname=htmlspecialchars(trim($_POST['lastname']));
    $gender=htmlspecialchars(trim($_POST['gender']));
}
if($password==$confpass && $mail==$mailconf){
$password = crypt(md5(sha1($password)),sha1($username));
    $check=mysqli_query($con,'SELECT * FROM `users` WHERE `User_Name` = "'.$username.'"');
    $x=mysqli_num_rows($check);
    if($x>0){
        echo 'Username exits. Try another username';
    }else{
        mysqli_query($con,'INSERT INTO `users`( `User_Name`, `User_Password`) VALUES ("'.$username.'","'.$password.'")');
        mysqli_query($con,'INSERT INTO `user_details`(`User_FirstName`, `User_LastName`, `User_E-mail`, `User_Gender`)
        VALUES ("'.$firstname.'","'.$lastname.'","'.$mail.'","'.$gender.'")');
        header('Location: login.php');
    }}
