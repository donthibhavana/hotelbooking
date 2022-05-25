<?php

include 'config.php';

$id = $_GET['id'];

$status = $_GET['status'];


if($status=="Active")
{
           $sql = " UPDATE customer SET status='Blocked' WHERE cid='$id' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Customer Blocked Successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'customers.php';</script>";
       
}
else
{
         $sql1 = " UPDATE customer SET status='Active' WHERE cid='$id' ";
    
  $retval_dis1 = mysqli_query($conn,$sql1);
       
      echo '<script> alert("Customer Activated Successfully")</script>';
          echo "<script type='text/javascript'> document.location = 'customers.php';</script>";
   
}




$conn->close();

?>