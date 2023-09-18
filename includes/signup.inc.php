<?php

if(isset($_POST['submit'])) {
    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    // Instantiate SignupContr class
    require_once "../classes/dbh.class.php";
    require_once "../classes/signup.class.php";
    require_once "../classes/signupContr.class.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
    // Running error handlers and user signup
    $signup->signupUser();
    // Going to back to front page
    header("location: ../index.php?error=none");
}