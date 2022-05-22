<?php
session_start();
require_once("clasess.php");
$user = unserialize($_SESSION["user"]);
$id = $user->id;
$tasks = $user-> show_all_my_tasks($id);
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


        background-image: url("wo.jpg");
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
                <a class="navbar-brand" href="#myPage"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1> <b> <?= $user->name?> </b></h1>
        <p> worker </p>
    </div>

    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>wellcom <b> <?= $user->name?> </b> </h2>
            <h4>please Check your tasks and enter your Progress </h4>
        </div>
        <div class="container">
            <div class="container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Your tasks</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> my id</th>
                                            <th>male id</th>
                                            <th>my progress</th>
                                            <th>pick to edit</th>
                                            <th>edit progress</th>
                                            <th></th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                          foreach ($tasks as $task) {
                                            ?>
                                            <td> <?= $task["user_ID"]; ?> </td>
                                            <td> <?= $task["order_id"]; ?> </td>
                                            <td> <?= $task["prog"]; ?> </td>
                                            <td>
                                                <div class="form-check">
                                                    <form method="post" action="prog.php">
                                                        <input type="checkbox" name="order_id" id=""
                                                            value="<?=$task["order_id"]; ?>">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" name="prog"
                                                        id="exampleFormControlSelect1">
                                                        <option value="10">10%</option>
                                                        <option value="20">20%</option>
                                                        <option value="30">30%</option>
                                                        <option value="40">40%</option>
                                                        <option value="50">50%</option>
                                                        <option value="60">60%</option>
                                                        <option value="70">70%</option>
                                                        <option value="80">80%</option>
                                                        <option value="90">90%</option>
                                                        <option value="100">100%</option>
                                                    </select>
                                                </div>
                                            <td> <button type="submit" class="btn btn-primary">Submit</button></td>
                                            </form>
                                            </td>
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
            </div>
        </div>
    </div>




    <!-- Container (Contact Section) -->


    <!-- Image of location/map -->

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
    </footer>

    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function() {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
    </script>

</body>

</html>