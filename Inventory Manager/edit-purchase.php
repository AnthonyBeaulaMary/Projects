<?php 
 
    require_once("connection.php");
    $ProductID = $_GET['GetID'];
    $query = " select * from purchase where ProductID='".$ProductID."'";
    $result = mysqli_query($con,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $ProductID = $row['ProductID'];
		$HSN = $row['HSN'];
		$PartNo = $row['PartNo'];
		$ProductName = $row['ProductName'];
		$Invoice = $row['Invoice'];
		$PO = $row['PO'];
		$Vendor = $row['Vendor'];
		$UnitPrice = $row['UnitPrice'];
		$Quantity = $row['Quantity'];
		$Amount = $row['Amount'];
		$UnitCgst = $row['UnitCgst'];
		$TotalCgst = $row['TotalCgst'];
		$UnitSgst = $row['UnitSgst'];
		$TotalSgst = $row['TotalSgst'];
		$UnitIgst = $row['UnitIgst'];
		$TotalIgst = $row['TotalIgst'];						
		$Total = $row['Total'];
		$DateAndTime = $row['DateAndTime'];
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

		<form action="update-purchase.php?ID=<?php echo $ProductID ?>" method="post">
		
		  <div class="container">
			<table>
			
			<tr>
			<label><b>HSN</b></label>
			<input type="text" class="form-control mb-2" name="hsn" value="<?php echo $HSN ?>"></br>
			</tr>
			
			<tr>
			<label><b>Part Number</b></label>
			<input type="text" class="form-control mb-2" name="part" value="<?php echo $PartNo ?>"></br>
			</tr>

			<tr>
			<label><b>Product Name</b></label>
			<input type="text" class="form-control mb-2" name="pname" value="<?php echo $ProductName ?>"></br>
			</tr>
			
			<tr>
			<label><b>Invoice Number</b></label>
			<input type="text" class="form-control mb-2" name="invoice" value="<?php echo $Invoice ?>"></br>
			</tr>
			
			<tr>
			<label><b>PO Number</b></label>
			<input type="text" class="form-control mb-2" name="po" value="<?php echo $PO ?>"></br>
			</tr>
			
			<tr>
			<label><b>Vendor</b></label>
			<input type="text" class="form-control mb-2" name="vendor" value="<?php echo $Vendor ?>"></br>
			</tr>
			
			<tr>
			<label><b>Unit Price</b></label>
			<input type="text" class="form-control mb-2" name="unit" value="<?php echo $UnitPrice ?>"></br>
			</tr>
			
			<tr>
			<label><b>Quantity</b></label>
			<input type="text" class="form-control mb-2" name="quantity" value="<?php echo $Quantity ?>"></br>
			</tr>
	
			<tr>
			<label><b>Unit CGST</b></label>
			<input type="text" class="form-control mb-2" name="uc" value="<?php echo $UnitCgst ?>"></br>
			</tr>
			
			<tr>
			<label><b>Unit SGST</b></label>
			<input type="text" class="form-control mb-2" name="us" value="<?php echo $UnitSgst ?>"></br>
			</tr>
		
			<tr>
			<label><b>Unit IGST</b></label>
			<input type="text" class="form-control mb-2" name="ui" value="<?php echo $UnitIgst ?>"></br>
			</tr>
			
			<tr>
			<label><b>Date And Time</b></label>
			<input type="text" class="form-control mb-2" name="dat" value="<?php echo $DateAndTime ?>"></br>
			</tr>
			
			<tr colspan = "2">
			<button class="registerbtn" name="update">Update</button>
		  </div>
		  
		</form>

	</body>
</html>
