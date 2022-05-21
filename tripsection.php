<?php 
 include('session_driver.php');
if(!isset($_SESSION['login_driver'])){
    session_destroy();
    // header("location: DriverLogin.php");
}
?>
<?php

if(isset($_POST['submit']))
{
    date_default_timezone_set('Asia/Kolkata');
$driver_id = $conn->real_escape_string($_POST['driver_id']);
// $driver_password = $conn->real_escape_string($_POST['driver_password']);
$latitude = $conn->real_escape_string($_POST['latitude']);
$longitude = $conn->real_escape_string($_POST['longitude']);
$date_added = date("Y-m-d H:i:s");


$query = "INSERT into tb_data(driver_id,latitude,longitude,time)  VALUES ('" . $driver_id . "','" . $latitude . "','" . $longitude . "','" . $date_added . "')";
$success = $conn->query($query);

  echo
  "<script>
  alert('Journey started');  </script>"
  // document.location.href = 'trip.php';

  ;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Driver Login </title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="tripsection.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="getLocation();">
    <div class="container">
        <div class="login-content">
            <form class="myForm" action="" method="post" autocomplete="off">
                <div class="title-container">
                    <h1></h1>
                    <!-- <h1>Trip section</h1> -->
                    <h2> Driver ID: <?php echo $_SESSION['login_driver']; ?></h2>
                    <p>Search your driver id,read details properly<br>and then click on Start trip</p>
                    <p><?php 
                         date_default_timezone_set('Asia/Kolkata');
                           echo "Date: " . date("l Y-m-d") . "<br>";
                           echo "Time: " . date("h:i A");
?>
                    </p>
                    <a href="logout1.php"><span class="glyphicon-log-out"></span> Logout</a>

                </div>

                <div class="login-inner-content">
                    <h3>Search</h3>
                    <div class="search-box">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by booking id..">
                        <i class='bx bx-search'></i>
                    </div>
                    <input type="submit" class="btn" name="submit" value="Start trip">
                    <div class="col-md-9" style="float: none; margin: 0 auto;">
                        <div class="form-area" style="padding: 0px 0px 160px 7px;">
                            <form action="" method="POST">
                                <br style="clear: both">
                                <h3
                                    style="margin-bottom: 25px; text-align: center; font-size: 30px; font-family: 'Playfair Display', serif; font-weight: 100;">
                                    PickUp Data </h3>
                                <?php
      $sql1 = "SELECT * FROM rentedcars rc, clientcars cc, customers c, cars WHERE cc.car_id = rc.car_id AND rc.return_status = 'R' AND c.customer_username = rc.customer_username AND cc.car_id = cars.car_id ORDER BY id DESC";
      $result1 = $conn->query($sql1);
      if (mysqli_num_rows($result1) > 0) {
    ?>
                                <div>
                                    <table class="content-table" id="myTable">
                                        <thead class="thead-dark">
                                            <tr style="text-align:center;">
                                                <th width="10%">Booking ID</th>
                                                <th width="10%">Car</th>
                                                <th width="13%">Customer Name</th>
                                                <th width="7%">Driver ID</th>
                                                <th width="10%">Booking Date</th>
                                                <th width="10%">Rent Start Date</th>
                                                <th width="10%">Rent End Date</th>
                                                <th width="10%">PickUp location</th>
                                                <th width="10%">PickUp Time</th>
                                            </tr>
                                        </thead>
                                        <?php
while($row = mysqli_fetch_assoc($result1)) {
?>
                                        <tr style="text-align:center;">
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["car_name"]; ?></td>
                                            <td><?php echo $row["customer_name"]; ?></td>
                                            <td><?php echo $row["driver_id"]; ?></td>
                                            <td><?php echo $row["booking_date"]; ?></td>
                                            <td><?php echo $row["rent_start_date"] ?></td>
                                            <td><?php echo $row["rent_end_date"]; ?></td>
                                            <td><?php echo $row["location"]; ?></td>
                                            <td><?php echo $row["time"]; ?></td>
                                        </tr>
                                        <?php        } ?>
                                    </table>
                                </div>
                                <?php } else {
  ?>
                                <div class="container">
                                    <div class="jumbotron">
                                        <h1>No booked cars</h1>
                                        <p> Rent some cars now <?php echo $conn->error; ?> </p>
                                    </div>
                                </div>

                                <?php
} ?>


                        </div>
                    </div>
                </div>
                <input type="hidden" name="driver_id" value=" <?php echo $_SESSION['login_driver']; ?>">
                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">
        </div>
    </div>
    </div>
    </form>
    <script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }
    }

    function showPosition(position) {
        document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
        document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("You Must Allow The Request For Geolocation To Fill Out The Form");
                // location.reload();
                break;
        }
    }
    </script>
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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