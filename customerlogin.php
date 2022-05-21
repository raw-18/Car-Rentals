<?php
include 'login_customer.php'; // Includes Login Script

if (isset($_SESSION['login_customer'])) {
    header('location: index.php'); //Redirecting
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Customer Login | Car Rental </title>
    <meta charset="UTF-8">
</head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
    type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: white">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    Car Rentals </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php if (isset($_SESSION['login_client'])) { ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION[
                                'login_client'
                            ]; ?></a>
                    </li>
                    <li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="glyphicon glyphicon-user"></span> Control Panel <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="entercar.php">Add Car</a></li>
                                    <li> <a href="enterdriver.php"> Add Driver</a></li>
                                    <li> <a href="clientview.php">View</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php } elseif (isset($_SESSION['login_customer'])) { ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION[
                                    'login_customer'
                                ]; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php } else { ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Employee</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="About.php">About</a>
                    </li>
                    <li>
                        <a href="Contact us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <?php } ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--  <div class="main">

    <div class="left">

                    <h1>Customer<br><span>Log in</span></h1>

    </div>

    <div class="right">
                  <form action="" method="POST">
                    <div class="form">

                                    <h1>Customer Log In</h1><br>

                                    <h3>Sign into your account</h3>
                                    <div> 
                                    <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Username" required="" autofocus="">
                                    </div>
                                    <div>
                                    <input class="form-control" id="customer_password" type="password" name="customer_password" placeholder="Password" required="">
                                    </div>

                                    <div class="row">
                                      <div class="form-group col-xs-4">
                                           <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Log in</button>

                                      </div>
                                    </div><br>
                               
                                    
                                    <a href="customersignup.php"><u>Create a new account.</u></a>
                    </div>
                  </form>
    </div>

</div>-->

    <div class="main">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">

                <div class="text">
                    <span class="text-1">Complete miles of journey<br>with one step</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Customer Login</div>
                    <form action="" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class='bx bx-user'></i>
                                <input class="form-control" id="customer_username" type="text" name="customer_username"
                                    placeholder="Username" required="" autofocus="">
                            </div>
                            <div class="input-box">
                                <i class='bx bx-lock-alt'></i>
                                <input class="form-control" id="customer_password" type="password"
                                    name="customer_password" placeholder="Password" required="">
                            </div>
                            <div class="text"><input type="checkbox" onclick="myFunction()"> Show Password</div>
                            <div class="button input-box">
                                <input class="btn btn-primary" name="submit" type="submit" value=" Login">
                            </div>
                            <div class="text sign-up-text">Don't have an account?<a href="customersignup.php"><u>Sigup
                                        now</u></a>
                            </div>
                    </form>
                    <script>
                    function myFunction() {
                        var x = document.getElementById("customer_password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>


</body>


</html>