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
    <link rel="stylesheet" href="assets/css/Contact us.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php"><img class="logo" src="assets/img/logo1.png" alt="Car logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php if (isset($_SESSION['submit_client'])) { ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION[
                            'submit_client'
                        ]; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
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
            
            <?php } elseif (isset($_SESSION['submit_customer'])) { ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION[
                            'submit_customer'
                        ]; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
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
        <!-- /.container -->
    </nav>

    <section>
 <div class="contact">
        <header>
            <h1>Contact Us</h1>
            <!-- <p>The pain itself is important to the main adipisicing elite. 
              Yes, they don't know how to look for their entire life right now, 
              and they have no idea how to do it! Our pain prevents our troubles, 
              therefore no one chosen by the avoidance of the soul may result in rejecting that great one, 
              and I will easily explain it to my wants, when I need it! A great one.</p> -->
        </header>
         <div class="content">
            <div class="content-form">
                <section>
                   
                    <h2>Address</h2>
                    <p>
                    ITPL Road <br>
                    Andheri(E), Mumbai <br>
                    Maharashtra, PIN 400069,India
                    </p>
                </section>

                <section>
                   
                    <h2>Phone</h2>
                    <p>+91 - 0123456789</p>
                </section>

                <section>
                   
                    <h2>E-mail</h2>
                    <p>carrentals@gmail.com</p>
                </section>
            </div>
        </div> 

        <form  action="" method="GET" name="google-sheet">
        <div class="form">
            <div class="right">
              <div class="contact-form">
              <input type="text" id="Name" name="Name"  placeholder="" required/>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="E-mail" name="Email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">  
                  <span>E-mail Id</span>
              </div>
              <div class="contact-form">
               <textarea name="Message" id="Message"></textarea>
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" name="submit" value="Send Message">
              </div>
              </div>
            </div>
          </div>
    </form>
    </div> 
    <section>
    <div class="social-icons">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div> 
    </section>
             
        <div class="empty">

        </div>
    </div>  
    
    <?php



if(isset($_GET['submit']))
{

$Name = $conn->real_escape_string($_GET['Name']);
$Email = $conn->real_escape_string($_GET['Email']);
$Message = $conn->real_escape_string($_GET['Message']);

$query = "INSERT into contact(Name,Email,Message)  VALUES ('" . $Name . "','" . $Email . "','" . $Message . "')";
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


?>

    <?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');
    
    if(isset($_POST['submit'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $Message=$_POST['Message'];

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
            $mail->Body    = "Hello $name ,<br><br>Congratualations!<br>You have successfully registered<br>on the Car Rentals.<br><br>Your credentials,<br> Email: $email <br> Message: $Message <br><br>Thanks and have a nice day<br>Team Car Rentals";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo "<script>alert('Message has been sent')</scrpit>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    
    ?>
    </section>
    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbx8l9k75961A8kORki8gQv-ch1GenSerh1Y-j7UkaH8y1r64LnFBggGMh5xmylBilsa/exec'
  const form = document.forms['google-sheet']

  form.addEventListener('submit' , e => {orm
     e.preventDefault()
     fetch(scriptURL, { method: 'POST', body: new FormData(form)})
     .then(response => alert("Thank you..!"))
     .catch(error => console.error('Error!' , error.Message))
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
</script>
</body>
</html>