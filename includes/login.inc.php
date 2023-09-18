<?php

if(isset($_POST['submit'])) {
    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instantiate SignupContr class
    require_once "../classes/dbh.class.php";
    require_once "../classes/login.class.php";
    require_once "../classes/loginContr.class.php";
    $login = new LoginContr($uid, $pwd);
    // Running error handlers and user signup
    $login->loginUser();
    header("location: ../personalinfo.php");
}