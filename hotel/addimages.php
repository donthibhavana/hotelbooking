<?php
include "config.php";

$rid = $_POST['rid'];

//SELECT `id`, `rid`, `img` FROM `images` WHERE 1

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  images (rid, img)
            values('$rid',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
      
      
       echo '<script> alert("Image Added Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'managerooms.php';</script>";
      
 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>