<?php
require_once("clasess.php");
// array(6) {
//     ["name"]=>
//     string(3) "fff"
//     ["adress"]=>
//     string(4) "ffdf"
//     ["phone"]=>
//     string(2) "ff"
//     ["FT"]=>
//     string(2) "ff"
//     ["cooking"]=>
//     string(2) "ff"
//     ["site"]=>
//     string(8) "delivery"
//   } 


$name = $_POST["name"];
$adress= $_POST["adress"];
$FT = $_POST["FT"];
$cooking = $_POST["cooking"];
$site = $_POST["site"];
$phone= $_POST["phone"];

if  (empty($name)|| empty($adress)||empty($FT)||empty($cooking)||empty($site) || empty($phone))
{
    header("location:index.php?error=empty_field");
}
else {
    $rslt = customer::order($name,$adress,$FT,$cooking,$site,$phone);
    header("location:accepted.php");
}
