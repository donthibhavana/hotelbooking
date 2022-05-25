<?php
include "config.php";

$hid = $_POST['hid'];
$season = $_POST['season'];
$stay = $_POST['stay'];
$amount = $_POST['amount'];
$valid = $_POST['valid'];



    $sql = "INSERT INTO  deals (hid,season,stay,amount,valid)
            values('$hid','$season','$stay','$amount','$valid')";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:managedeals.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>