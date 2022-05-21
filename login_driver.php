<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['driver_id']) || empty($_POST['driver_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$driver_id=$_POST['driver_id'];
$driver_password=$_POST['driver_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT driver_id, driver_password FROM driver WHERE driver_id=? AND driver_password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $driver_id, $driver_password);
$stmt -> execute();
$stmt -> bind_result($driver_id, $driver_password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
	$_SESSION['login_driver']=$driver_id; // Initializing Session
	header("location: trip.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
date_default_timezone_set('Asia/Kolkata');
$date_added = date("Y-m-d H:i:s");
$update = "UPDATE driver set last_login ='$date_added' where driver_id = '$driver_id' ";
$run = mysqli_query($conn,$update);
mysqli_close($conn); // Closing Connection
}
}
?>