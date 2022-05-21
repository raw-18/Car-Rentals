<!DOCTYPE html>
<html>
<?php
session_start();
require 'connection.php';
$conn = Connect();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/af5d7bcccf.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class='spinner-wrapper'>
        <div class="spinner"></div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><img class="logo" src="assets/img/logo1.png"
                        alt="Car logo">
                </a>
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
                            <li>
                                <!-- <a href="admin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"> -->
                                    <a href="admin.php" class="dropdown-toggle active">
                                    <span
                                        class="glyphicon glyphicon-user"></span> Dashboard 
                                        <!-- <span
                                        class="caret"></span> -->
                                     </a>
                                <!-- <ul class="dropdown-menu">
                                    <li> <a href="entercar.php">Add Car</a></li>
                                    <li> <a href="admin.php">Dashboard</a></li>
                                    <li> <a href="enterdriver.php"> Add Driver</a></li>
                                    <li> <a href="https://docs.google.com/spreadsheets/d/1A-dQUIFzsGVwtiSur-HiaqiO1AV8jhowjPlIwcZowrM/edit#gid=0"
                                            target="_blank">View</a></li>

                                </ul> -->
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
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="prereturncar.php">Return Now</a></li>
                                <li> <a href="mybookings.php"> My Bookings</a></li>
                            </ul>
                        </li>
                    </ul>
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
                    <!-- <li>
                        <a href="clientlogin.php">Employee</a>
                    </li> -->
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"> Employee <span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="clientlogin.php">Admin Login</a></li>
                                <li> <a href="DriverLogin.php">Driver Login</a></li>
                            </ul>
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
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="content">
                    <small>Welcome to our</small>
                    <h1>Car Rental<br>System</h1>
                    <p class="content-text" style="color: white">
                        Online Car Rental Service
                    </p>
                    <a href="#sec2" class="btn btn-circle page-scroll blink">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Cars</h3>
        <br>
        <section class="menu-content">
            <?php
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) > 0) {
                while ($row1 = mysqli_fetch_assoc($result1)) {

                    $car_id = $row1['car_id'];
                    $car_name = $row1['car_name'];
                    $ac_price = $row1['ac_price'];
                    $ac_price_per_day = $row1['ac_price_per_day'];
                    $non_ac_price = $row1['non_ac_price'];
                    $non_ac_price_per_day = $row1['non_ac_price_per_day'];
                    $car_img = $row1['car_img'];
                    ?>
            <a href="booking.php?id=<?php echo $car_id; ?>">
                <div class="sub-menu">


                    <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
                    <h5><b> <?php echo $car_name; ?> </b></h5>
                    <h6> AC Fare: <?php echo 'Rs. ' .
                $ac_price .
                '/km & Rs.' .
                $ac_price_per_day .
                '/day'; ?></h6>
                    <h6> Non-AC Fare: <?php echo 'Rs. ' .
                $non_ac_price .
                '/km & Rs.' .
                $non_ac_price_per_day .
                '/day'; ?></h6>


                </div>
            </a>
            <?php
                }
            } else {
                 ?>
            <h1> No cars available :( </h1>
            <?php
            }
            ?>
        </section>

    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>
    <footer class="footer">
        <div class="row">
            <div class="col">
                <img class="logo" src="assets/img/logo1.png" alt="Car logo">
                <p> No more worries about petrol mileage, insurance, and car breakdowns!
                    Car Rental System has enabled driving convenience for travellers around
                    the country and is fast expanding its reach to cities.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div>
                </h3>
                <p>ITPL Road<br>
                    Andheri(E), Mumbai<br>
                    Maharashtra, PIN 400069,India</p>
                <p class="email-id">carrentals@gmail.com</p>
                <h4>+91 - 0123456789</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact us.php">Contact</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">FAQs</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Feedback <div class="underline"><span></span></h3>
                <form>
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i>
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <script>
    function myMap() {
        myCenter = new google.maps.LatLng(25.614744, 85.128489);
        var mapOptions = {
            center: myCenter,
            zoom: 12,
            scrollwheel: true,
            draggable: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
    </script>
    <script>
    function sendGaEvent(category, action, label) {
        ga('send', {
            hitType: 'event',
            eventCategory: category,
            eventAction: action,
            eventLabel: label
        });
    };
    </script>
    <script>
    let spinnerWrapper = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', function() {
        // spinnerWrapper.style.display = 'none';
        spinnerWrapper.parentElement.removeChild(spinnerWrapper);
    });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap"
        type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>