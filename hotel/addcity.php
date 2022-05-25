<?php

include 'config.php';
$country = $_POST['country'];
$city = $_POST['city'];
//SELECT `city_id`, `name`, `country` FROM `city` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from city where country='$country' and name='$city'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO city (name,country)
VALUES ('$city', '$country')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("City Added Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'managecities.php';</script>";
}else{
      echo '<script> alert("city exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'addcity.html';</script>";
}
?>
