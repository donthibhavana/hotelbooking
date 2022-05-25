<?php
require_once('config.php');
$member_id = $_GET['member_id'];
	if($member_id!='')
	{
	    
	    $query_json ="select * from city where country='$member_id'" ;
        $retval_json = mysqli_query($conn,$query_json);
	    
	//	$products_result = $conn->query('');
		$options = "<option value=''>Select City</option>";
		while($row = mysqli_fetch_assoc($retval_json)) {
		$options .= "<option value='".$row['city_id']."'>".$row['name']."</option>";
	}
echo $options;
}?>