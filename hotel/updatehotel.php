<?php

include 'config.php';

$hid = $_POST['hid'];

$hname = $_POST['hname'];
$phone= $_POST['phone'];
$address = $_POST['address'];

                        //SELECT `hid`, `city_id`, `hname`, `image`, `rating`, `phone`, `address` FROM `hotel` WHERE 1

           $sql = " UPDATE hotel SET hname='$hname', phone='$phone', address='$address' WHERE hid='$hid' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Hotel updated Successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'managehotels.php';</script>";
       


$conn->close();

?>