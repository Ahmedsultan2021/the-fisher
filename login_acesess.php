<?php
// array(2) { ["email"]=> string(13) "amr@gmail.com" ["ps"]=> string(4) "ssss" }
session_start();
require_once("clasess.php");
$email = htmlspecialchars(trim( $_POST["email"]));
$password = $_POST["ps"];
var_dump($_POST);
$user = user::login($email,md5($password));
if ((empty($email))) {
    header("location:login.php?error=empty_email");
}
elseif(empty($password))
{
    header("location:login.php?error=empty_pass");

}
elseif (!empty($user))
 {
    if ($user->role=="gm") {
        $_SESSION["user"]= serialize($user);
        header("location:Generalmanager.php");
    }
    elseif($user->role == "dm"){
        $_SESSION["user"]= serialize($user);
        header("location:manager.php");
    }
    elseif($user->role =="worker"){
        $_SESSION["user"]= serialize($user);
        header("location:worker.php");
    }
}
else{
    header("location:login.php?error=wrong_pass_or_email");
}


