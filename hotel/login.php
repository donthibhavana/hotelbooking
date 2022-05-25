<?php
session_start();

include 'config.php';

$uname = $_POST['email'];
$pass = $_POST['pass'];



$sql = "SELECT email,pass FROM customer where email='$uname' and pass='$pass' and status='Active'";
$result = $conn->query($sql);

$_SESSION["email"] = $uname;
if ($result->num_rows > 0) {


  header('Location:home.php');
} else {

 echo '<script> alert("Invalid Details or Blocked by Admin. Please try Again!")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}
$conn->close();

?>