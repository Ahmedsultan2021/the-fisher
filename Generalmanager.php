<?php
 session_start();
 require_once("clasess.php");
 $user =  unserialize($_SESSION["user"]);
 $all_users = $user->show_all_dm_informations();
 $orders = $user->show_all_orders();
 $status = $user->Get_prog();
//  var_dump($all_users);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS.css">

    <style>
    .jumbotron {
        background-image: url("7.jpg");
        background-size: cover;
        background-position: center;
    }

    form {
        margin: 5px;
        padding: 15px;
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
        <p> Generalmanager </p>
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
                                            <td> <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:<?= $statu["prog"]; ?>%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> </td>

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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">assign task to some one</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>role</th>
                                            <th> </th>
                                            <th>pick</th>
                                            <th>tasks</th>
                                            <th>assign</th>
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
                                            <td> <?= $users["role"]; ?> </td>
                                            
                                            <td>
                                                <form method="post" action="assign.php">

                                            </td>
                                            <td> <input type="checkbox" name="assign" id="" value="<?=$users["ID"]; ?>">
                                            </td>
                                            <td>
                                                <label for="order"> Order Id:</label>
                                                <select id="order" name="order">
                                                    <?php foreach ($orders as $order ) { 
                                    ?>
                                                    <option value="<?= $order["id"] ?> "> <?= $order["id"] ?></option>
                                                    <?php
                                  }  ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit">
                                                </form>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Show all current orders </a>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">manage users ADD And DROP </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body"> <div class="text-center">
           
        </div>
        <div class="row ">
            <div class="col-md-8  col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Order</h1>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="Add_user.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"> Email </label>
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                                    placeholder="Enter your email">
                            </div>
                           
                           
                           
                            <div class="custom-select" >
                                <label for="cars">Choose role</label>
                                <select id="cars" name="role">
                                    <option value="gm">Generalmanager</option>
                                    <option value="dm">departmentManager</option>
                                    <option value="worker">worker</option>
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
            </div></div>
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