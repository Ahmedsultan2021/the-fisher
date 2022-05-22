
<?php
session_start();
require_once("clasess.php");
$user =  unserialize($_SESSION["user"]);
// array(2) { ["order"]=> string(2) "3 " ["asign"]=> string(4) "saab" }
var_dump($_POST);
$order = $_POST["order"];
if (!(empty($_POST["assign"]))) {
    $asign = $_POST["assign"];
    $set = true;
}

if ($set) {
if (!($user->is_assiged_task($asign,$order))) {
    $user->asign_task($asign,$order);
    header("location:Generalmanager.php?done");
    }
    else{
         header("location:Generalmanager.php?erorr=already_assigned_task");
    }
}
else{
    header("location:Generalmanager.php?error=please_select_someone");
}


