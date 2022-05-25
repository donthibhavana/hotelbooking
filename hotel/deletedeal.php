<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM deals WHERE did='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:managedeals.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>