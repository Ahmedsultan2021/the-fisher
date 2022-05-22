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
    <div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Our services</h2><br>
  <h4>Here we present our three services to ensure your optimal service</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="fresh.jpg" alt="Paris" width="400" height="300">
        <p><strong>Fresh fish department</strong></p>
        <p>We offer the best types of fish</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="cooked.jpg" alt="New York" width="400" height="300">
        <p><strong>cooking department</strong></p>
        <p>We offer you the most delicious food</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="del.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Delivery Department</strong></p>
        <p>We reach you wherever you are</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This Resturant is the best. I am so happy with the product!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this resturant?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Order</h2>
            <h4> bel hana Wel Shifa </h4>
        </div>
        <div class="row ">
            <div class="col-md-8  col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Order</h1>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="order.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"> adress </label>
                                <input type="text" name="adress" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter your adress">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"> phone </label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter your phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fish type</label>
                                <input type="text" name="FT" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter your fish Type">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cooking prefer</label>
                                <input type="text" name="cooking" class="form-control" id="exampleInputPassword1"
                                    placeholder="cooking prefer">
                            </div>
                            <div class="custom-select">
                                <label for="cars">Choose onsite or Delivery:</label>
                                <select id="cars" name="site">
                                    <option value="delivery">Delivery</option>
                                    <option value="onsite">onsite</option>
                                </select>
                            </div>
                            <div>
                                <span style="color:red">
                                    <?php
    if (!empty($_GET["error"]))
    {
    if ($_GET["error"]=="empty_field") {
      echo "empty field please fill all fields";
    }
  }
    ?>
                                </span>
                            </div>
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