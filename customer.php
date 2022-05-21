<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'session_client.php'; ?>

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mycars.css">
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
                    <i class='bx bx-current-location'></i>
                    <span class="link_name">Tracking</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="tracking.php">Tracking</a></li>
                </ul>
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
                <span class="text">Customers</span>
            </div>
            <div class="search-box">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                <i class='bx bx-search'></i>
            </div>
            <div class="">
                <a href="pdf1.php" target="_blank"><span class="glyphicon glyphicon-log-out"></span> Make PDF</a>
                <!-- <form action="pdf.php">
        <button type="submit" class="btn btn-success" target="_blank">PDF</button>
      </form> -->
            </div>
            <div class="profile-details">
                <img src="C:\xampp\htdocs\Car_Rental-PHP\assets\img\profile.jpg" alt="">
                <span class="admin_name"> Harry Den</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <div class="col-md-12" style="float: none; margin: 0 auto;">
            <div class="form-area" style="padding: 0px 100px 100px 25px;">
                <form action="" method="POST">
                    <br style="clear: both">
                    <h3
                        style="margin-bottom: 25px; text-align: center; font-size: 30px; font-family: 'Playfair Display', serif; font-weight: 100;">
                        Customers </h3>


                    <?php
// Storing Session
$user_check = $_SESSION['login_client'];
$sql = "SELECT * FROM customers WHERE customer_name IN (SELECT customer_name FROM clientcars WHERE client_username='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { ?>
                    <!-- <div style="overflow-x:auto;"> -->
                    <table class="content-table" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th width="15%"> Username </th>
                                <th width="15%"> Name </th>
                                <th width="13%"> Phone </th>
                                <th width="17%"> Email </th>
                                <th width="13%"> Address </th>
                                <th width="17%"> Password </th>
                            </tr>
                        </thead>

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>


                        <tr>
                            <td> <span><i class='bx bx-chevron-right'></i></span> </td>
                            <td><?php echo $row['customer_username']; ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['customer_phone']; ?></td>
                            <td><?php echo $row['customer_email']; ?></td>
                            <td><?php echo $row['customer_address']; ?></td>
                            <td><?php echo $row['customer_password']; ?></td>


                        </tr>

                        <?php } ?>
                    </table>
            </div>
            <br>
            <?php } else { ?>
            <h4>
                <center>0 Customer available</center>
            </h4>
            <?php }
?>
            </form>
        </div>
        </div>
        </div>

    </section>

    <script src="script.js"></script>
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
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