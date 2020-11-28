<html>
	<body>
		<?php
		require_once 'connection.php';

		$query = "select * from products where Quantity<Threshold";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_row($result);
		
		$query1 = "select * from register";
		$result1 = mysqli_query($con, $query1);
		$row1 = mysqli_fetch_row($result1);
		$email = $row1[2];
		
		require_once 'phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$subject = "LOW STOCK NOTIFICATION";
		$text_message = "Hello";
		$message = "<b>Part Number : $row[2] <br>
					Product Name : $row[3] <br>
					Quantity : $row[13] <br>
					Threshold : $row[14]</b>";

		$mail->IsSMTP();
		$mail->isHTML(true);

		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = '587';
		$mail->AddAddress($email);
		//$mail->AddAddress('shyjeerajasekaran@gmail.com');
		$mail->Username ="inventorymanagerabc@gmail.com";
		$mail->Password ="manager@123";
		$mail->SetFrom('inventorymanagerabc@gmail.com','INVENTORY MANAGER');
		//$mail->AddReplyTo("beaulagiatros@gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->AltBody = $message;
		//$mail->AddAttachment("insert.php"); 

		if(!$mail->Send())
		{
			echo "Message not sent";
		}
		else{
			header("location:view-sales.php");
		}
		?>
	</body>
</html>