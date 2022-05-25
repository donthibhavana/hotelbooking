<?php
include "config.php";
//SELECT `rid`, `hid`, `roomnumber`, `type`, `beds`, `price`, `image` FROM `room` WHERE 1
$hid = $_POST['hid'];
$roomnumber = $_POST['roomnumber'];
$type = $_POST['type'];
$beds = $_POST['beds'];

$price = $_POST['price'];


$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  room (hid,roomnumber,type,beds,price,image)
            values('$hid','$roomnumber','$type','$beds','$price',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:managehotels.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>