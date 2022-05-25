<?php

include 'config.php';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];

$qus = $_GET['qus'];
$ans = $_GET['ans'];
$cno = $_GET['cno'];

//SELECT `cid`, `fname`, `lname`, `email`, `phone`, `pass`, `question`, `answer`, `cno` FROM `customer` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from customer where email='$email'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO customer (fname,lname, email,phone, pass, question, answer,cno,status)
VALUES ('$fname', '$lname', '$email', '$phone','$pass','$qus','$ans','$cno','Active')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Registerd Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}else{
      echo '<script> alert("User exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'register.html';</script>";
}
?>
