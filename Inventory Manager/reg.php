<!DOCTYPE html>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Product Registration</title>
	
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
		  text-align: center;
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

		<form action="insert.php" method="post">
		
		  <div class="container">
			
			<table>
				<col width = 350>
				<col width = 1500>
				
				<tr>
					<h1>Register Products</h1>			
				<hr>
				</tr>
				
			<tr>
				<td><label><b>&nbsp &nbsp &nbsp HSN</b></label></td>
				<td><input type="text" placeholder=" HSN " name="hsn"></td>
			</tr>
			
			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Part Number</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" Part Number " name="part"></td>
			</tr>

			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Product Name</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" Product name " name="pname"></br></td>
			</tr>
			
			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Buy Price</b></label></td><br>
				<td><input type="text" class="form-control mb-2" placeholder=" Price " name="buy"></br></td>
			</tr>
			
			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Profit %</b></label></td><br>
				<td><input type="text" class="form-control mb-2" placeholder=" Profit " name="profit"></br></td>
			</tr>
			
			
			
			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Quantity</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" Quantity " name="quantity"></br></td>
			</tr>

			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Threshold value</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" Threshold Limit" name="threshold"></br></td>
			</tr>

			<tr>
				<td><label><b>&nbsp &nbsp &nbsp Description</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" Description " name="desc"></br></td>
			</tr>
			
			<table>
				<col width = 437>
				<col width = 350>
				<col width = 350>
				<col width = 350>
				<col width = 350>
				<col width = 350>
			<tr>
				
				<td><label><b>&nbsp &nbsp &nbsp TAX: &nbsp &nbsp &nbsp CGST %</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" CGST " name="cgst"></td>
				
				<td><label><b>&nbsp &nbsp &nbsp SGST %</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" SGST " name="sgst"></td>
				
				<td><label><b>&nbsp &nbsp &nbsp IGST %</b></label></td>
				<td><input type="text" class="form-control mb-2" placeholder=" IGST " name="igst"></td>
			</tr>
			<br>
			<tr>
				<td colspan = '6'><button class="registerbtn" name="submit">Submit</button>
			</tr>
		  </div>
		  
		</form>

	</body>
</html>
