<?php
session_start();
require_once("clasess.php");
$user = unserialize($_SESSION["user"]);
$all_users = $user->show_all_dm_informations();
 $orders = $user->show_all_orders();
 $status = $user->Get_prog();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
    }

    h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 600;
        margin-bottom: 30px;
    }

    h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
    }

    .jumbotron {


        background-image: url("worker.jpg");
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
    }

    .container-fluid {
        padding: 60px 50px;
    }

    .bg-grey {
        background-color: #f6f6f6;
    }

    .logo-small {
        color: #f4511e;
        font-size: 50px;
    }

    .logo {
        color: #f4511e;
        font-size: 200px;
    }

    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
    }

    .carousel-control.right,
    .carousel-control.left {
        background-image: none;
        color: #f4511e;
    }

    .carousel-indicators li {
        border-color: #f4511e;
    }

    .carousel-indicators li.active {
        background-color: #f4511e;
    }

    .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
    }

    .item span {
        font-style: normal;
    }

    .panel {
        border: 1px solid #f4511e;
        border-radius: 0 !important;
        transition: box-shadow 0.5s;
    }

    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
    }

    .panel-footer .btn:hover {
        border: 1px solid #f4511e;
        background-color: #fff !important;
        color: #f4511e;
    }

    .panel-heading {
        color: #fff !important;
        background-color: #f4511e !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .panel-footer {
        background-color: white !important;
    }

    .panel-footer h3 {
        font-size: 32px;
    }

    .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
    }

    .panel-footer .btn {
        margin: 15px 0;
        background-color: #f4511e;
        color: #fff;
    }

    .navbar {
        margin-bottom: 0;
        background-color: #f4511e;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #fff !important;
    }

    .navbar-nav li a:hover,
    .navbar-nav li.active a {
        color: #f4511e !important;
        background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }

    footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #f4511e;
    }

    .slideanim {
        visibility: hidden;
    }

    .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
    }

    @keyframes slide {
        0% {
            opacity: 0;
            transform: translateY(70%);
        }

        100% {
            opacity: 1;
            transform: translateY(0%);
        }
    }

    @-webkit-keyframes slide {
        0% {
            opacity: 0;
            -webkit-transform: translateY(70%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0%);
        }
    }

    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }

        .btn-lg {
            width: 100%;
            margin-bottom: 35px;
        }
    }

    @media screen and (max-width: 480px) {
        .logo {
            font-size: 150px;
        }
    }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">The Fisher</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><b>Logout</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1><?php echo $user->name?></h1>
        <p> departmentManager </p>
        <form>
            <div class="input-group">
                <div class="input-group-btn">
                </div>
            </div>
        </form>
    </div>



    <div class="container">
        <h2>Accordion Example</h2>
        <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements
            under the specified parent will be closed when one of the collapsible item is shown.</p>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">All employee</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>E-mail</th>
                                            <th>role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                    foreach($all_users as $users)
                    {
                    ?>
                                            <td> <?= $users["ID"]; ?> </td>
                                            <td> <?= $users["name"]; ?> </td>
                                            <td> <?= $users["email"]; ?> </td>
                                            <td> <?= $users["role"]; ?> </td>

                                        </tr>
                                        <?php 
                    }
                    ?>
                                    </tbody>
                                </table>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">show order progress</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>user id</th>
                                            <th>order id</th>
                                            <th>progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                    foreach($status as $statu)
                    {
                    ?>
                                            <td> <?= $statu["user_ID"]; ?> </td>
                                            <td> <?= $statu["order_id"]; ?> </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width:<?= $statu["prog"]; ?>%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php 
                    }
                    ?>
                                    </tbody>
                                </table>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Show all current orders
                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fish type</th>
                                    <th>site</th>
                                    <th>name</th>
                                    <th>adress</th>
                                    <th>phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                    foreach($orders as $order)
                    {
                    ?>
                                    <td> <?= $order["id"]; ?> </td>
                                    <td> <?= $order["FT"]; ?> </td>
                                    <td> <?= $order["delivery"]; ?> </td>
                                    <td> <?= $order["name"]; ?> </td>
                                    <td> <?= $order["address"]; ?> </td>
                                    <td> <?= $order["phone"]; ?> </td>

                                </tr>
                                <?php 
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>The Fisher Made By <a href="https://www.w3schools.com" title="Visit w3schools"> blablblblbl</a></p>
        </footer>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>