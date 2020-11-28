<?php 
 
    require_once("connection.php");
    $query = " select * from purchase ";
    $result = mysqli_query($con,$query);
 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>

		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		  width: 100px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		
		body {
		  font-family: "Lato", sans-serif;
		}

		.sidebar {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidebar a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		.sidebar a:hover {
		  color: #f1f1f1;
		}

		.sidebar .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		.openbtn {
		  font-size: 20px;
		 
		  cursor: pointer;
		  background-color: #111;
		  color: white;
		  padding: 10px 15px;
		  border: none;
		}

		.openbtn:hover {
		  background-color: #444;
		}

		#main {
		  transition: margin-left .5s;
		  padding: 16px;
		}

		/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
		@media screen and (max-height: 450px) {
		  .sidebar {padding-top: 15px;}
		  .sidebar a {font-size: 18px;}
		}

		* {
				box-sizing: border-box;
			}

			body {
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
			}

			.header {
				padding: 1px;			
				background: #3498db;
				color: white;
				width: 100%;
				background-size: 50%;
			}

			/* Style the top navigation bar */
			.navbar {
				width: 100%;
				overflow: hidden;
				background-color: #333;
				
			}

			/* Style the navigation bar links */
			.navbar a {
				float: left;
				display: block;
				color: white;
				background-color: match-parent;
				text-align: center;
				padding: 10px 30px;
				text-decoration: none;
			}

			/* Change color on hover */
			.navbar a:hover {
				background-color: #777;
				color: white;
			}

			/* Main column */
			.main {   
				flex: 70%;
				background-color: white;
				padding: 20px;				
			}


			/* Footer */
			.footer {
				padding: 23px;
				text-align: center;
				background: #333;
			}

			/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
			@media screen and (max-width: 400px) {
			  .navbar a {
				float: none;
				width:100%;
			  }
			}

		</style>
		
		<script>
			function openNav() {
			  document.getElementById("mySidebar").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidebar").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			}
		</script>
	</head>
	
	<body>
	
		<div id="mySidebar" class="sidebar">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<a href="view-products.php">My Products</a>
			<a href="view.php">Product Details</a>
			<a href="view-sales.php">Sales Entry</a>
			<a href="view-purchase.php">Purchase Entry</a>
		</div>

		<div class="header">
			<div id="main">
				<button align = "left" class="openbtn" onclick="openNav()">☰</button>  
			</div>

			<h1 align = "center" ><b><font size = "10px">INVENTORY MANAGER</font></br></h1>
			<h4 align = "center">MANAGE YOUR STOCK WITH US !</h4>
			<h3 style = "color:black"> &nbsp &nbsp &nbsp PURCHASE DETAILS</h3>
		</div>

		<div class="navbar">
			<a href="main.php">HOME</a>
			<a href="contact.php">CONTACT US</a>
			<a href="about.html">ABOUT</a>
            <a href="export-purchase.php">EXPORT</a>
			<a href="empty-purchase.php">EMPTY</a>
			<a style = "background-color:green;" href="reg-purchase.php?GetID=<?php echo $ProductID ?>">ADD</a>
		</div>
		
		<div>
		
			<table border = "1" width = "100%">
				<tr>
					<th> HSN </th>
					<th> Part Number </th>							
					<th><font color = "green"> Product Name </font></th>
					<th> Invoice Number </th>
					<th> PO Number </th>
					<th> Vendor </th>
					<th><font color = "blue"> Unit Price </font></th>
					<th> Quantity </th>
					<th><font color = "blue"> Total [without tax] </font></th>
					<th> Unit CGST %</th>
					<th> Total CGST </th>
					<th> Unit SGST %</th>
					<th> Total SGST </th>
					<th> Unit IGST %</th>
					<th> Total IGST </th>
					<th><font color = "green"> Total Tax </font></th>
					<th><font color = "red"> Total [with TAX]</font> </th>
					<th> Date And Time </th>
					<th><font color = "blue"> Edit  </font></th>
					<th><font color = "red"> Delete </font></th>
				</tr>

				<?php 
                                    
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
						$TotalTax = $TotalCgst+$TotalSgst+$TotalIgst;
						$DateAndTime = $row['DateAndTime'];
				?>
				<tr>
					<td><?php echo $HSN ?></td>
					<td><?php echo $PartNo ?></td>
					<td><font color = "green"><?php echo $ProductName ?></font></td>
					<td><?php echo $Invoice ?></td>
					<td><?php echo $PO ?></td>
					<td><?php echo $Vendor ?></td>
					<td><font color = "blue"><?php echo $UnitPrice ?></font></td>
					<td><?php echo $Quantity ?></td>
					<td><font color = "blue"><?php echo $Amount ?></font></td>
					<td><?php echo $UnitCgst ?>%</td>
					<td><?php echo $TotalCgst ?></td>
					<td><?php echo $UnitSgst ?>%</td>
					<td><?php echo $TotalSgst ?></td>
					<td><?php echo $UnitIgst ?>%</td>
					<td><?php echo $TotalIgst ?></td>
					<td><font color = "green"><?php echo $TotalTax ?></font></td>
					<td><font color = "red"><?php echo $Total ?></font></td>
					<td><?php echo $DateAndTime ?></td>
					<td><a style = "text-decoration:none" href="edit-purchase.php?GetID=<?php echo $ProductID ?>"><font color = "blue">Edit</font></a></td>
					<td><a style = "text-decoration:none" href="delete-purchase.php?Del=<?php echo $DateAndTime ?>"><font color = "RED">Delete</font></a></td>	
				</tr>
				<?php
					}
				?>
			</table>
		</div>
		
	</body>
</html>