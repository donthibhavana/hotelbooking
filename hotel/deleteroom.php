<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM room WHERE rid='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:managerooms.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>