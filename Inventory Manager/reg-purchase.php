<!DOCTYPE html>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Registration Form</title>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
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

		<form action="insert-purchase.php" method="post">
		
		  <div class="container">
			<table>
			<tr>
			<h1>Purchase Entry</h1>	
			<hr>
			</tr>		
			
			<tr>
			<label><b>Product Name</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Product name " name="pname"></br>
			</tr>
			
			<tr>
			<label><b>Invoice Number</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Invoice Number " name="invoice"></br>
			</tr>
			
			<tr>
			<label><b>PO Number</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Purchase Order Number " name="po"></br>
			</tr>
			
			<tr>
			<label><b>Vendor</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Vendor Name " name="vendor"></br>
			</tr>
			
			<tr>
			<label><b>Unit Price [without TAX]</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Unit Price " name="unit"></br>
			</tr>
			
			<tr>
			<label><b>Quantity</b></label>
			<input type="text" class="form-control mb-2" placeholder=" Quantity " name="quantity"></br>
			</tr>
			
			
			<tr>
			<label><b>CGST %</b></label>
			<input type="text" class="form-control mb-2" placeholder=" CGST " name="cgst"></br>
			</tr>
			
			<tr>
			<label><b>SGST %</b></label>
			<input type="text" class="form-control mb-2" placeholder=" SGST " name="sgst"></br>
			</tr>
			
			<tr>
			<label><b>IGST %</b></label>
			<input type="text" class="form-control mb-2" placeholder=" IGST " name="igst"></br>
			</tr>
					
			<tr colspan = "2">
			<button class="registerbtn" name="submit">Submit</button>
		  </div>
		  
		</form>

	</body>
</html>
