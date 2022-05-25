<?php
 session_start();
include 'config.php';
 $email=$_SESSION["email"];
 
$rid = $_GET['rid'];
$fromdate = $_GET['fromdate'];
$todate = $_GET['todate'];
$days = $_GET['days'];
$tot = $_GET['tot'];

$f_name = $_GET['f_name'];
$exp = $_GET['exp'];
$cno = $_GET['cno'];
$cvv = $_GET['cvv'];

$payment_id=rand(100001,999999);

//SELECT `bid`, `rid`, `checkin`, `checkout`, `days`, `total`, `email`, `payment_id`, `status` FROM `bookings` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from customer where email='$email' and cno='$cno'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    

        echo '<script> alert("Invalid Card Number payment failed Please try again!")</script>';
      echo "<script type='text/javascript'> document.location = 'payment.php?rid=$rid&price=$tot&fromdate=$fromdate&todate=$todate&days=$days&tot=$tot';</script>";
}else{
    
   
   $test_query = "SELECT * from bookings where (rid='$rid' and checkin='$fromdate' and checkout='$todate') or (rid='$rid' and checkin BETWEEN '$fromdate' AND '$todate') ";
            $res = mysqli_query($con,$test_query);
            $rowss = mysqli_fetch_array($res);
            if(!$rowss)
            {
   
    
                       $query_dis="INSERT INTO bookings (rid,checkin, checkout,days, total, email, payment_id,status)
                    VALUES ('$rid', '$fromdate', '$todate', '$days','$tot','$email','$payment_id','Booked')";
                    //echo $query_dis; 
                    
                    //SELECT `pid`, `payment_id`, `name`, `cno`, `exp`, `cvv`, `amount` FROM `payment` WHERE 1
                        $sql="insert into payment(payment_id,name,cno,exp,cvv,amount) values ('$payment_id','$f_name','$cno','$exp','$cvv','$tot')";
                        //echo $query_dis; 
                        $retval_dis1 = mysqli_query($con,$sql);
                    
                    $retval_dis = mysqli_query($con,$query_dis);
                    
                    mysqli_close($con);
                     echo '<script> alert("Payment Successfully")</script>';
                          echo "<script type='text/javascript'> document.location = 'mybookings.php';</script>"; 

            }
            else
            {
                 echo '<script> alert("Room not available Please try again!")</script>';
      echo "<script type='text/javascript'> document.location = 'viewdetails.php?id=$rid';</script>";
                
            }
    
    
    
}

?>
