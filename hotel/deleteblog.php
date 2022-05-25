<?php
include'config.php';

$id=$_GET["id"];

$sql="DELETE FROM blog WHERE bid='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:viewablogs.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;} 


?>