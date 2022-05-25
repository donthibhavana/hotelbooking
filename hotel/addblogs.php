<?php
session_start();
include "config.php";
//SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
$country = $_POST['country'];
$name = $_POST['name'];
$des = $_POST['des'];
 
 $email=$_SESSION["email"];

$dat=date("l jS \of F Y h:i:s A");

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  blog (country,name,dat,email,des,image)
            values('$country','$name','$dat','$email','$des',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location:viewblogs.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>