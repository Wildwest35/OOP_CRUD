<?php

if(isset($_POST['submit'])) {
    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instantiate SignupContr class
    require_once "../classes/Dbh.classes.php";
    require_once "../classes/login.classes.php";
    require_once "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);
    // Running error handlers and user signup
    $login->loginUser();
    header("location: ../personalinfo.php");
}