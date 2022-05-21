<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <span class="text">Admin</span>
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
        <div class="box">
            <div class="title">Create Account</div>
            <div class="content">
                <form role="form" action="client_registered_success.php" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input class="form-control" id="client_name" type="text" name="client_name"
                                placeholder="Your Full Name" required="" autofocus="">
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input class="form-control" id="client_username" type="text" name="client_username"
                                placeholder="Your Username" required="">
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input class="form-control" id="client_email" type="email" name="client_email"
                                onBlur="checkAvailability()" placeholder="Email" required=""
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <span id="user-availability-status" style="font-size:12px;">
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input class="form-control" id="client_phone" type="text" name="client_phone"
                                pattern="^\d{10}$" placeholder="Enter 10 digit number" required=""
                                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input class="form-control" id="client_address" type="text" name="client_address"
                                placeholder="Address" required="">
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input class="form-control" id="client_password" type="password" name="client_password"
                                placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required="">
                        </div>
                        <div><input type="checkbox" onclick="myFunction()"> Show Password</div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                    <label style="margin-left: 5px;margin-top: -25px;">or</label> 
                    <label style="margin-left: 5px;"><a href="clientlogin.php">Have an account? Login.</a></label>

                </form>
            </div>
        </div>
    </section>
    <script>
    function myFunction() {
        var x = document.getElementById("client_password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <script src="script.js"></script>

</body>

</html>