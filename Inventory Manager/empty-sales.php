<?php 
 
	require_once("connection.php ");
 
	$query = " truncate sales ";
	$result = mysqli_query($con,$query);
 
	if($result)
	{
		//echo '<script>alert("Empty Success")</script>'; 
		header("location:view-sales.php");
	}
	else
	{
		echo ' Please Check Your Query ';
	}
 ?>