<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.h.php';
    require_once 'functions.h.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}