<?php
include 'login_driver.php'; // Includes Login Script

if (isset($_SESSION['login_driver'])) {
    header('location: tripsection.php'); //Redirecting
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="DriverLogin.css">
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <title>Driver Login</title>
</head>

<body>

    <div class="container">
        <div class="login-content">

            <form class="myForm" action="" method="post" autocomplete="off">
                <div class="title-container">
                    <h1></h1>
                    <h2>Driver Login</h2>
                    <p>Enter your driver credentials and start journey with us.</p>
                </div>
                <div class="login-inner-content">
                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle" style="color:black"></i>
                        </div>
                        <div class="div">
                            <h5>Driver id</h5>
                            <input class="input" id="driver_id" type="text" name="driver_id" required="" autofocus="">
                        </div>
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()" style="color:black"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input class="input" id="driver_pasword" type="password" name="driver_password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required="">
                        </div>
                    </div><br>
                    <input type="hidden" name="latitude" value="">
                    <input type="hidden" name="longitude" value="">
                    <button type="submit" class="btn" name="submit">Login</button>

                </div>
            </form>
        </div>
    </div>

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
    // coding with nick

    const inputs = document.querySelectorAll(".input");

    function addcl() {
        let parent = this.parentNode.parentNode;
        parent.classList.add("focus");
    }

    function remcl() {
        let parent = this.parentNode.parentNode;
        if (this.value == "") {
            parent.classList.remove("focus");
        }

    }

    inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl)
    });


    // See Password

    function show() {
        var pswrd = document.getElementById('driver_pasword');
        var icon = document.querySelector('.fas');
        if (pswrd.type === "password") {
            pswrd.type = "text";
            icon.style.color = "#4dd8f3";
        } else {
            pswrd.type = "password";
            icon.style.color = "black";
        }


    }
    </script>
</body>

</html>