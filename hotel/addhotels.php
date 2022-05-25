<?php
include "config.php";
//SELECT `hid`, `city_id`, `hname`, `image`, `rating`, `phone`, `address` FROM `hotel` WHERE 1
$city_id = $_POST['city_id'];
$hname = $_POST['hname'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  hotel (city_id,hname,rating,phone,address,image)
            values('$city_id','$hname','4','$phone','$address',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:managehotels.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>