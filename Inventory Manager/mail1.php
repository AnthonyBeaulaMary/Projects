<html>
	<body>
		<?php
			require_once 'connection.php';
			
			$query1 = "select * from register";
			$result1 = mysqli_query($con, $query1);
			$row1 = mysqli_fetch_row($result1);
			$to = $row1[2];
			
			$query = "select * from products where Quantity<Threshold";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_row($result);
			
			//$to = "beaulagiatros@gmail.com";
			$subject = "LOW STOCK NOTIFICATION";
			$msg = "<b>Part Number : $row[2] <br>
						Product Name : $row[3] <br>
						Quantity : $row[13] <br>
						Threshold : $row[14]</b>";
			$headers = "From: inventorymanagerabc@gmail.com" ;

			mail($to,$subject,$msg,$headers);
			
			header("location:view-sales.php");
		?>
	</body>
</html>