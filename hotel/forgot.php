<?php

include 'config.php';

$email = $_GET['email'];

$pass = $_GET['pass'];

$qus = $_GET['qus'];
$ans = $_GET['ans'];


//SELECT `cid`, `fname`, `lname`, `email`, `phone`, `pass`, `question`, `answer`, `cno` FROM `customer` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from customer where email='$email' and question='$qus' and answer='$ans'";
           // $result = mysqli_query($con,$query_json);
            
            $result = $conn->query($query_json);

if ($result->num_rows > 0) {
            
                 $query_dis = " UPDATE customer SET pass='$pass' WHERE email='$email' ";
    
$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("New Password Updated Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}else{
      echo '<script> alert("Incorrect Details please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'forgot.html';</script>";
}
?>
