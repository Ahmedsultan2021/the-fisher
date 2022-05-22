<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>The Fisher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  
    .jumbotron{
        background-image:url("3.jpg");
        background-size: cover;
        background-position: center;
    }
    form{
      margin: 5px;
      padding: 15px;
    }
    .alert{
      background-color:orangered;
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
                    <li><a href="login.php"><b>Login</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="jumbotron text-center">
  <h1> <b>The Fisher </b></h1> 
  <p>We specialize in the best fishes</p> 
</div>
<!-- Container (Pricing Section) -->
<?php
if(!(empty($_GET["error"])))
{
  ?>
<div class="container ">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 panel panel-heading text-center">
      <?php

      if ($_GET["error"]=="wrong_pass_or_email") 
      {
        echo " Wrong Email Or Password";
      }
      elseif($_GET["error"]=="empty_pass")
      {
        echo "please enter your password";
      }
      elseif($_GET["error"]=="empty_email")
      {
        echo "please enter your email";
      }
      ?>

    </div>
  </div>
</div>

   <?php } ?>
<div id="pricing" class="container-fluid">
  <div class="row ">
    <div class="col-md-8  col-md-offset-2">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Login</h1>
        </div>
        <div class="panel-body">
        <!-- <form action="login.php" method="post"> -->
        <form  method="post" action="login_acesess.php">
       <div class="form-group" >
       <label for="exampleInputEmail1">Email</label>
       <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" >
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
       <div class="form-group">
       <label for="exampleInputPassword1">password</label>
         <input type="password" name="ps" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" >
      </div>
  <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
        
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
  <p>The Fisher Made By <a href="https://www.w3schools.com" title="Visit w3schools"> blablblblbl</a></p>
</footer>

<script>
$(document).ready(function(){
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
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
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
