<?php
// var_dump($_POST);
// array(3) { ["name"]=> string(0) "" ["email"]=> string(0) "" ["role"]=> string(2) "GM" }
session_start();
require_once("clasess.php");
$user =  unserialize($_SESSION["user"]);
$name = htmlspecialchars( trim($_POST["name"]));
$email = $_POST["email"];
$role = $_POST["role"];
if (empty($name)||empty($email)||empty($role)) 
{
    header("location:Generalmanager.php?erorr=empty_field");
}
else{

    $rslt = $user->CreateUser($name,$email,$role);
    header("location:Generalmanager.php?done");
}