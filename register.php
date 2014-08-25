<?php
require("header.php");
$con=mysqli_connect("localhost","root","","teamwork");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$error = "";
if($_POST){
    $username=htmlspecialchars(trim($_POST['username']));
    $password=htmlspecialchars(trim($_POST['password']));
    $confpass=htmlspecialchars(trim($_POST['passwordConf']));
    $email=htmlspecialchars(trim($_POST['email']));
    $emailconf=htmlspecialchars(trim($_POST['emailConf']));
    $first_name=htmlspecialchars(trim($_POST['firstname']));
    $last_name=htmlspecialchars(trim($_POST['lastname']));
    $gender=htmlspecialchars(trim($_POST['gender']));

    # Validate Username #
    // if its not alpha numeric, throw error
    if (!ctype_alnum($username)) {
        $error .= '<p class="error">Username should be alpha numeric characters only.</p>';
    }
    // if username is not 3-20 characters long, throw error
    if (strlen($username) < 3 OR strlen($username) > 20) {
        $error .= '<p class="error">Username should be within 3-20 characters long.</p>';
    }

    # Validate Password #
    // if password is not 3-20 characters long, throw error
    if (strlen($password) < 3 OR strlen($password) > 20) {
        $error .= '<p class="error">Password should be within 3-20 characters long.</p>';
    }

    # Validate Confirm Password #
    // if Confirm Password is not = password, throw error
    if ($confpass != $password) {
        $error .= '<p class="error">Confirm password mismatch.</p>';
    }

    # Validate Email #
    // if email is invalid, throw error
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= '<p class="error">Enter a valid email address.</p>';
    }

   # Validate Confirm Email #
    // if Confirm Email is not = $email, throw error
    if ($emailconf != $email) {
        $error .= '<p class="error">Confirm Email mismatch.</p>';
    }

    # Validate First Name #
    // if its not alpha numeric, throw error
    if (!ctype_alpha(str_replace(array("'", "-"), "",$first_name))) {
        $error .= '<p class="error">First name should be alpha characters only.</p>';
    }
    // if first_name is not 3-20 characters long, throw error
    if (strlen($first_name) < 3 OR strlen($first_name) > 20) {
        $error .= '<p class="error">First name should be within 3-20 characters long.</p>';
    }

    # Validate Last Name #
    // if its not alpha numeric, throw error
    if (!ctype_alpha(str_replace(array("'", "-"), "", $last_name))) {
        $error .= '<p class="error">Last name should be alpha characters only.</p>';
    }
    // if last_name is not 3-20 characters long, throw error
    if (strlen($last_name) < 3 OR strlen($last_name) > 20) {
        $error .= '<p class="error">Last name should be within 3-20 characters long.</p>';
    }

    # Validate Gender #
    // if gender is not selected or invalid, throw error
    if ($gender != 'male' && $gender != 'female') {
        $error .= '<p class="error">Please select your gender.</p>';
    }
    if($password==$confpass && $email==$emailconf && $error==''){
        $password = crypt(md5(sha1($password)),sha1($username));
        $checkUser=mysqli_query($con,'SELECT * FROM `users` WHERE `User_Name` = "'.$username.'"');
        $much=mysqli_num_rows($checkUser);
        if($much>0){
            $error .= '<p class="error">Username exits. Try another username</p>';
        }else{
            mysqli_query($con,'INSERT INTO `users`( `User_Name`, `User_Password`) VALUES ("'.$username.'","'.$password.'")');
            mysqli_query($con,'INSERT INTO `user_details`(`User_FirstName`, `User_LastName`, `User_E-mail`, `User_Gender`)
            VALUES ("'.$first_name.'","'.$last_name.'","'.$email.'","'.$gender.'")');
            echo "<p class='success'>Form has been submitted successfully.</p>";
//            header("Location: login.php");
        }
    }
}
?>
<?=$error?>
<div id="form_wrapper">
    <form method="post" action="register.php" id="reg">
        <input type="text" name="username" placeholder="UserName" required>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="passwordConf" placeholder="Confirm Password">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="emailConf" placeholder="Confirm E-mail">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name">
        <div>
            <div class="gender"><label for="male">Male</label><input type="radio" name="gender" value="male" id="male" required=""></div>
            <div class="gender"><label for="female">Female</label><input type="radio" name="gender" value="female" id="female" required=""></div>
        </div>
        <input type="reset" value="Clear">
        <input type="submit" value="Register">
    </form>
</div>
<?php
require("footer.php");
?>
