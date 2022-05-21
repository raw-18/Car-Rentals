<!DOCTYPE html>
<?php include 'session_client.php'; ?>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="addcar.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Car Rentals</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php">
                    <i class='bx bx-detail'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-user-circle'></i>
                    <span class="link_name">Admin</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <a href="customer.php">
                    <i class='bx bxs-user-detail'></i>
                    <span class="link_name">Customers</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="customer.php">Customers</a></li>
                </ul>
            </li>
            <li>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-car'></i>
                        <span class="link_name">Cars</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Cars</a></li>
                    <li><a href="Add car.php">Add Car</a></li>
                    <li><a href="My Cars.php">My Cars</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Driver</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Driver</a></li>
                    <li><a href="adddriver.php">Add Driver</a></li>
                    <li><a href="My Drivers.php">My Drivers</a></li>
                </ul>
            </li>
            <li>
                <a href="bookings.php">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Bookings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="bookings.php">Bookings</a></li>
                </ul>
            </li>
            <li>
                <a href="tracking.php">
                    <i class='bx bx-map'></i>
                    <span class="link_name">Tracking</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="tracking.php">Tracking</a></li>
                </ul>
            </li>
            <li>
                <a href="pickup.php">
                    <i class='bx bx-location-plus'></i>
                    <span class="link_name">PickUp Details</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="pickup.php">PickUp Details</a></li>
                </ul>
            </li>
            <li>
                <a href="contactus.php">
                    <i class='bx bxs-contact'></i>
                    <span class="link_name">Contact Us</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="contactus.php">Contact Us</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="name-job">
                        <div class="profile_name">Harry Den</div>
                        <div class="job">Employee</div>
                    </div>
                    <a href="logout.php"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu'></i>
                <span class="text">Add Car</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="C:\xampp\htdocs\Car_Rental-PHP\assets\img\profile.jpg" alt="">
                <span class="admin_name"> Harry Den</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <div class="container" style="margin-top: 40px;">
            <div class="col-md-7" style="float: none; margin: 0 auto;">
                <?php
            if(isset($_SESSION['status']))
            {
                ?>
                <script>
                swal({
                    title: "<?php   echo $_SESSION['status']; ?>",
                    // text: "You clicked the button!",
                    icon: "<?php   echo $_SESSION['status_code']; ?>",
                    button: "Ok, Done!",
                });
                </script>
                <?php
                unset($_SESSION['status']);
            }
            
            ?>
                <div class="form-area">
                    <form role="form" action="entercar1.php" enctype="multipart/form-data" method="POST">
                        <br style="clear: both">
                        <h3
                            style="margin-bottom: 25px; text-align: center; font-size: 30px; font-family: 'Playfair Display', serif; font-weight: 100;">
                            Please Provide Your Car Details. </h3>

                        <div class="form-group">
                            <input type="text" class="form-control" id="car_name" name="car_name"
                                placeholder="Car Name " required autofocus="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="car_nameplate" name="car_nameplate"
                                placeholder="Vehicle Number Plate" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="ac_price" name="ac_price"
                                placeholder="AC Fare per KM (Rs)" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="non_ac_price" name="non_ac_price"
                                placeholder="Non-AC Fare per KM (Rs)" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="ac_price_per_day" name="ac_price_per_day"
                                placeholder="AC Fare per day (Rs)" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="non_ac_price_per_day"
                                name="non_ac_price_per_day" placeholder="Non-AC Fare per day (Rs)" required>
                        </div>

                        <div class="form-group">
                            <input name="uploadedimage" type="file">
                        </div>
                        <button type="submit" id="submit" name="submit" onclick="myFunction()"
                            class="btn btn-success pull-right"> Submit for Rental</button>
                    </form>
                </div>
            </div>

    </section>

    <script src="script.js"></script>
    <script>
    funcation myFunction() {
        alert("Car added succesfully!");
    }
    </script>

</body>

</html>