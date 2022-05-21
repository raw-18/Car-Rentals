<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'session_client.php'; ?>

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tracking.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        width: 100%;
        height: 100vh;
    }
    </style>
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
                    <i class='bx bx-current-location'></i>
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
                <span class="text">Tracking</span>
            </div>
            <div class="search-box">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Driver id..">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="C:\xampp\htdocs\Car_Rental-PHP\assets\img\profile.jpg" alt="">
                <span class="admin_name"> Harry Den</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
        <!-- <div class="track">
      <input class="track" id="car_id" type="text" name="" placeholder="Enter Car Number" required="" autofocus="">
      <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Track</button>
    </div>
    <div class="mapBox">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15073.193918745794!2d73.05233364999998!3d19.18216135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1644560511784!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy"></iframe>
    </div> -->
        <?php
      // Storing Session
      $user_check = $_SESSION['login_client'];
      $sql = "SELECT `id`, `driver_id`, `time`, `latitude`, `longitude` FROM `tb_data` WHERE 1 ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) { ?>

        <table class="content-table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th> </th>

                    <th> Driver ID</th>
                    <th> Date/Time</th>
                    <th> Map </th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tbody>
                <tr>
                    <td> <span><i class='bx bx-chevron-right'></i></span> </td>

                    <td><?php echo $row['driver_id']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td style="width: 450px; height: 450px;"><iframe style="width: 100%; height: 100%;"
                            src="https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed"></iframe>
                    </td>

                    <!-- <td> <a href='delete.php?rn=$result[id]'> Delete </td> -->

                </tr>
            </tbody>

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
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>


</body>

</html>