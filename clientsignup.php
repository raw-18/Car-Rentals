<html>

<head>
    <title> Employee Signup | Car Rentals  </title>
</head>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
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
                            </ul>
                        </div>
                        <?php } ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--<div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Car Rentals - Registration</h1>
            <br>
            <p class="text-center">Get started by creating an employee account</p>
        </div>
    </div>

    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"> Create Account </div>
                <div class="panel-body">

                    <form role="form" action="client_registered_success.php" method="POST">


                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_id"><span class="text-danger" style="margin-right: 5px;">*</span> Employee ID: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_id" type="text" name="client_id" placeholder="Your Employee ID" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                     </span>
                                </div>
                            </div>
                         </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_name"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_name" type="text" name="client_name" placeholder="Your Full Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Your Username" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_email" type="email" name="client_email" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_phone"><span class="text-danger" style="margin-right: 5px;">*</span> Phone: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_phone" type="text" name="client_phone" placeholder="Phone" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-contact" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_address" type="text" name="client_address" placeholder="Address" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="client_password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        <label style="margin-left: 5px;">or</label> <br>
                        <label style="margin-left: 5px;"><a href="clientlogin.php">Have an account? Login.</a></label>

                    </form>

                </div>

            </div>

        </div>
    </div>-->
    <div class="box">
    <div class="title">Employee Registration</div>
    <div class="content">
    <form role="form" action="client_registered_success.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input class="form-control" id="client_name" type="text" name="client_name" placeholder="Your Full Name" required="" autofocus="">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Your Username" required="">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input class="form-control" id="client_email" type="email" name="client_email" onBlur="checkAvailability()" placeholder="Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <span id="user-availability-status" style="font-size:12px;"><!--error : You did not enter a valid email.--></span>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input class="form-control" id="client_phone" type="text"  pattern="^\d{10}$" name="client_phone" placeholder="Enter 10 digit number" required="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input class="form-control" id="client_address" type="text" name="client_address" placeholder="Address" required="">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <label style="margin-left: 5px;margin-top: -25px;">or</label> <br>
        <label style="margin-left: 5px;"><a href="clientlogin.php">Have an account? Login.</a></label>

    </form>
    </div>
  </div>
</body>
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5><?php echo date(''); ?> </h5>
            </div>
        </div>
    </div>
</footer>

</html>