<?php 
 
    require_once("connection.php");
    $ProductID = $_GET['GetID'];
    $query = " select * from products where ProductID='".$ProductID."'";
    $result = mysqli_query($con,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $HSN = $row['HSN'];
		$PartNo = $row['PartNo'];
		$ProductName = $row['ProductName'];
		$BuyPrice = $row['BuyPrice'];
		$SellPrice = $row['SellPrice'];
		$Profit = $row['Profit'];
		$Cgst = $row['Cgst'];
		$Sgst = $row['Sgst'];
		$Igst = $row['Igst'];
		$Quantity = $row['Quantity'];
		$Threshold = $row['Threshold'];
		$Description = $row['Description'];
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>

		<style>
		body {
		  font-family: Arial, Helvetica, sans-serif;
		  background-color: black;
		}

		* {
		  box-sizing: border-box;
		}

		/* Add padding to containers */
		.container {
		  padding: 16px;
		  background-color: white;
		}

		/* Full-width input fields */
		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: none;
		  background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Overwrite default styles of hr */
		hr {
		  border: 1px solid #f1f1f1;
		  margin-bottom: 25px;
		}

		/* Set a style for the submit button */
		.registerbtn {
		  background-color: #4CAF50;
		  color: white;
		  padding: 16px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.registerbtn:hover {
		  opacity: 1;
		}

		/* Add a blue text color to links */
		a {
		  color: dodgerblue;
		}

		/* Set a grey background color and center the text of the "sign in" section */
		.signin {
		  background-color: #f1f1f1;
		  text-align: center;
		}
		</style>
	</head>
	<body>

		<form action="update.php?ID=<?php echo $ProductID ?>" method="post">
		
		  <div class="container">
			<table>

			<tr>
			<label><b>HSN</b></label>
			<input type="text" class="form-control mb-2" placeholder=" HSN " name="hsn" value="<?php echo $HSN ?>"></br>
			</tr>
			
			<tr>
			<label><b>Part Number</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Part Number " name="part" value="<?php echo $PartNo ?>"></br>
			</tr>

			<tr>
			<label><b>Product Name</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Product name " name="pname" value="<?php echo $ProductName ?>"></br>
			</tr>
			
			<tr>
			<label><b>Buy Price</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Price " name="buy" value="<?php echo $BuyPrice ?>"></br>
			</tr>
			
			<tr>
			<label><b>Profit</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Profit " name="profit" value="<?php echo $Profit ?>"></br>
			</tr>
			
			<tr>
			<label><b>CGST</b></label>
			<input type="text" class="form-control mb-2" placeholder=" CGST " name="cgst" value="<?php echo $Cgst ?>"></br>
			</tr>
			
			<tr>
			<label><b>SGST</b></label>
			<input type="text" class="form-control mb-2" placeholder=" SGST " name="sgst" value="<?php echo $Sgst ?>"></br>
			</tr>
			
			<tr>
			<label><b>IGST</b></label>
			<input type="text" class="form-control mb-2" placeholder=" IGST " name="igst" value="<?php echo $Igst ?>"></br>
			</tr>
			
			<tr>
			<label><b>Quantity</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Quantity " name="quantity" value="<?php echo $Quantity ?>"></br>
			</tr>

			<tr>
			<label><b>Threshold value</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Threshold Limit" name="threshold" value="<?php echo $Threshold ?>"></br>
			</tr>

			<tr>
			<label><b>Description</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Description " name="desc" value="<?php echo $Description ?>"></br>
			<hr>
			</tr>
			
			<tr colspan = "2">
			<button class="registerbtn" name="update">Update</button>
		  </div>
		  
		</form>

	</body>
</html>
