<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'session_client.php'; ?>

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>

    <link rel="stylesheet" href="pickup.css">
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
                <span class="text">Contact Us</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="\assets\img\profile.jpg" alt="">
                <span class="admin_name"> Harry Den</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
        <!-- <iframe src="https://script.google.com/macros/s/AKfycbz_LZzC5Z-nSLUrwaTcJS9POKAmz3gd7v2lrG8_IcPxiiFs-RutT3yGMbIjXkzAkBXb/exec"
      width="100%" height="500px" scrolling="no" style="border: none;"></iframe> -->
        <div class="col-md-9" style="float: none; margin: 0 auto;">
            <div class="form-area" style="padding: 0px 0px 160px 86px;">
                <form action="" method="POST">
                    <br style="clear: both">
                    <h3
                        style="margin-bottom: 25px; text-align: center; font-size: 30px; font-family: 'Playfair Display', serif; font-weight: 100;">
                        Contact Data </h3>
                    <?php
      // Storing Session
      $user_check = $_SESSION['login_client'];
      $sql = "SELECT `contact_id`,`Name`, `Email`, `Message` FROM `contact` WHERE 1";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) { ?>

                    <table class="content-table">
                        <thead class="thead-dark">
                            <tr>
                                <th> </th>
                                <th>No.</th>
                                <th> Name</th>
                                <th> Email </th>
                                <th> Message </th>
                            </tr>
                        </thead>

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>


                        <tr>
                            <td> <span><i class='bx bx-chevron-right'></i></span> </td>
                            <td><?php echo $row['contact_id']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Message']; ?></td>
                            <!-- <td> <a href='delete.php?rn=$result[id]'> Delete </td> -->

                        </tr>

                        <?php } ?>
                    </table>
                    <br>


                    <?php } else { ?>

                    <h4>
                        <center>0 Drivers available</center>
                    </h4>

                    <?php }
      ?>

    </section>

    <script src="script.js"></script>

</body>

</html>