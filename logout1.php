<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: DriverLogin.php"); // Redirecting To Home Page
}
?>