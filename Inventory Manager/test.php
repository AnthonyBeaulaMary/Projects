<?php 
 
    require_once("connection.php");
    
	$query1 = "select count(*) as total from products where Quantity<=Threshold";	
	$result = mysqli_query($con,$query1);
	$data=mysqli_fetch_assoc($result);
	echo $data['total'];
	
	if($data['total'] > 0){
		header("location:mail.php");
	}
?>