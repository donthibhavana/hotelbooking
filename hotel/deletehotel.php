<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM hotel WHERE hid='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:managehotels.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>