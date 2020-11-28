<?php 
 
	require_once("connection.php ");
 
	$query = " truncate purchase ";
	$result = mysqli_query($con,$query);
 
	if($result)
	{ 
		header("location:view-purchase.php");
	}
	else
	{
		echo ' Please Check Your Query ';
	}
 ?>