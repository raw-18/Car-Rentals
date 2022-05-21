<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("assets/img/1642169768077.jpeg");
        height: 700px;
        background-size: cover;
        background-position: fixed;
        background-attachment: fixed;

    }

    .spinner-wrapper {
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 0.7;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .spinner {
        position: relative;
        width: 8rem;
        height: 8rem;
        border-radius: 50%;
    }

    .spinner::before,
    .spinner:after {
        content: "";
        position: absolute;
        border-radius: 50%;
    }

    .spinner:before {
        width: 100%;
        height: 100%;
        background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
        animation: spin 0.5s infinite linear;
    }

    .spinner:after {
        width: 90%;
        height: 90%;
        background-color: white;
        opacity: 0.7;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .image-1 {}

    .baby {
        color: white;
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 40%;
        margin-top: 10%;
        margin-left: 21%;
        width: 60%;
        padding: 10px;
        font-family: 'Playfair Display', serif;
    }

    .content-text {
        color: white;
        font-size: 20px;
        text-align: center;
        margin-left: 21%;
        margin-top: -40%;
        width: 60%;
        padding: 10px;
        font-family: 'Playfair Display', serif;
    }

    .coustom-breadcrumb {
        margin: 0 auto;
        padding: 0 10px;
        position: relative;
        margin-top: -20%;
        text-align: center;
        z-index: 1;
    }

    .coustom-breadcrumb li {
        font-size: 14px;
        line-height: 35px;
    }

    .coustom-breadcrumb li {
        color: white;
        display: inline-block;
        list-style: outside none none;
        font-size: 25px;
        margin: 0 auto;
        padding: 0 10px;
        position: relative;
    }

    .coustom-breadcrumb a {
        color: white;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    h2 {
        text-align: center;
        color: white;
        margin-top: 50px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 30px 0;
        margin-left: 600px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    input[type=submit] {
        width: 20%;
        margin-right: 20px;
        background-color: #4CAF50;
        font-size: 20px;
        font-weight: bold;
        color: white;
        padding: 14px 20px;
        margin: 8px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

    }
    </style>

</head>

<body>
    <div class='spinner-wrapper'>
        <div class="spinner"></div>
    </div>
    <div class="image-1">
        <p class="baby">Thank you for visiting Car Rentals! We wish you have a safe ride.</p>
        <p class="content-text">Your car is Booked! Please check your bookings.</p>

    </div>

    <!-- <h2>Click here for Pick up Location</h2> -->

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="index.php"
            style="color:white;">HOME</a></button>

    <!-- <div id="id01" class="modal">

        <form class="modal-content animate" action="" method="">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>

            </div>

            <div class="container">
                <label for="uname"><b>Name</b></label>
                <input type="text" id="Name" name="name" placeholder="Enter your name" required />
                <label for="uname"><b>Phone No</b></label>
                <input type="text" id="Phone No" name="phoneno" placeholder="Enter 10 digit number" pattern="^\d{10}$"
                    required />

                <label for="uname"><b>Booked car Name</b></label>
                <input type="text" placeholder="Enter car name" name="carname" required>

                <label for="uname"><b>Pick Up Location</b></label>
                <input type="text" placeholder="Enter Location" name="location" required>

                <label for="uname"><b>Pick Up Date</b></label>
                <input type="date" placeholder="dd/mm/yyyy" name="date" required>

                <label for="uname"><b>Pick Up Time</b></label>
                <input type="time" placeholder="00:00 AM/PM" name="time" required>

            </div>

            <div>
                <input type="submit" name="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>

    <?php

require 'connection.php';
$conn = Connect();

if(isset($_GET['submit']))
{

$name = $conn->real_escape_string($_GET['name']);
$phoneno = $conn->real_escape_string($_GET['phoneno']);
$carname = $conn->real_escape_string($_GET['carname']);
$location = $conn->real_escape_string($_GET['location']);
$date = $conn->real_escape_string($_GET['date']);
$time = $conn->real_escape_string($_GET['time']);


$query = "INSERT into pickup(name,phoneno,carname,location,date,time)  VALUES ('" . $name . "','" . $phoneno . "','" . $carname . "','" . $location . "','" . $date . "','" . $time . "')";
$success = $conn->query($query);

if($success)
{
?>
    <script>
    alert("data inserted properly");
    </script>
    <?php
}else{
?>
    <script>
    alert("data not properly");
    </script>
    <?php
}
}


?> -->
    <script>
    let spinnerWrapper = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', function() {
        // spinnerWrapper.style.display = 'none';
        spinnerWrapper.parentElement.removeChild(spinnerWrapper);
    });
    </script>


    <!-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycby-whl55jCNz00TEzWk2c-qWrLdDDSu9dAATfdOwMuImi1dRI_JjbRzp29gwA-uOFDK/exec'
  const form = document.forms['google-sheet']

  form.addEventListener('submit' , e => {
     e.preventDefault()
     fetch(scriptURL, { method: 'POST', body: new FormData(form)})
     .then(response => alert("Thanks for connecting us..!"))
     .catch(error => console.error('Error!' , error.message))
  })
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> -->

</body>

</html>

</body>

</html>