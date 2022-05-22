<?php
session_start();

if (empty($_POST["order_id"])) {
    header("location:worker.php?erorr=pick_order");
}else {
    require_once("clasess.php");
    $user =  unserialize($_SESSION["user"]);
    var_dump($user);
    $user_id = $user->id;
    $order_id = $_POST["order_id"];
    var_dump($order_id);
    $prog = $_POST["prog"];
    $rslt = $user->submit_prog($prog,$user_id,$order_id);
    header("location:worker.php?status=done");
    }





