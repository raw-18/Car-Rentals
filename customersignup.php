<html>

<head>
    <title> customer Signup | Car Rentals </title>
</head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
    type="text/css">
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
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="glyphicon glyphicon-user"></span> Control Panel <span
                                        class="caret"></span> </a>
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


        <div class="box">
            <div class="title">Customer Registration</div>
            <div class="content">
                <form role="form" action="customer_registered_success.php" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input class="form-control" id="customer_name" type="text" name="customer_name"
                                placeholder="Your Full Name" required="" autofocus="">
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input class="form-control" id="customer_username" type="text" name="customer_username"
                                placeholder="Your Username" required="">
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input class="form-control" id="customer_email" type="email" name="customer_email"
                                placeholder="Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <span id="user-availability-status" style="font-size:12px;">
                                <!--error : You did not enter a valid email.-->
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input class="form-control" id="customer_phone" type="text" name="customer_phone"
                                pattern="^\d{10}$" placeholder="Enter 10 digit number" required="">
                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input class="form-control" id="customer_address" type="text" name="customer_address"
                                placeholder="Address" required="">
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input class="form-control" id="customer_password" type="password" name="customer_password"
                                placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required="">
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="Register" class="send">
                    </div>
                    <label style="margin-left: 5px;margin-top: -25px;">or</label> <br>
                    <label style="margin-left: 5px;color: black;"><a href="customerlogin.php">Have an account?
                            Login.</a></label>

                </form>
            </div>
        </div>

        <?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');
    
    if(isset($_POST['submit'])){
        $name=$_POST['customer_name'];
        $email=$_POST['customer_email'];
        $username=$_POST['customer_username'];
        $password=$_POST['customer_password'];

        $mail = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'rohitjsawant155@gmail.com';                     //SMTP username
            $mail->Password   = 'Rsawant251';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('rohitjsawant155@gmail.com', 'Car Rentals');
            $mail->addAddress('rohitjsawant18@gmail.com', $name);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Car Rentals ';
            $mail->Body    = "Hello $name ,<br><br>Congratualations!<br>You have successfully registered<br>on the Car Rentals.<br><br>Your credentials,<br> Email: $email <br> Password: $password <br><br>Thanks and have a nice day<br>Team Car Rentals";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo "<script>alert('Message has been sent')</scrpit>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    
    ?>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script type="text/javascript">
        (function() {
            emailjs.init("user_XiE4jzZsQXJSJHu5H3XbN");
        })();
        </script>
        <script src="script1.js"></script>
</body>
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5> <?php echo date(''); ?> </h5>
            </div>
        </div>
    </div>
</footer>

</html>