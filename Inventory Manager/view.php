<?php 
 
    require_once("connection.php");
    $query = " select * from products ";
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

			/* Style the header */
			.header {
				padding: 1px;
				width: 100%;
				background: #3498db;
				color: white;
			}

			/* Increase the font size of the h1 element */
			.header h1 {
				font-size: 0px;
			}

			/* Style the top navigation bar */
			.navbar {
				overflow: hidden;
				background-color: #333;
				width: 100%;
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

			/* Column container */
			.row {  
				display: flex;
				flex-wrap: wrap;
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

			/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 700px) {
			.row {   
				flex-direction: column;
			  }
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

		<div class="header" >
		
			<div id="main">
				<button align = "left" class="openbtn" onclick="openNav()">☰</button>  
			</div>
	
			<h1 align = "center" ><b><font size = "10px">INVENTORY MANAGER</font></br></h1>
			<h4 align = "center">MANAGE YOUR STOCK WITH US !</h4>
			<h3 style = "color:black"> &nbsp &nbsp &nbsp PRODUCT DETAILS</h3>
			
		</div>

		<div class="navbar">
			<a href="main.php">HOME</a>
			<a href="contact.php">CONTACT US</a>
			<a href="about.html">ABOUT</a>
			<a href="reg.php" style = "background-color:green">ADD</a>
		</div>
		
		<div>
		
			<table border = "1" >
				<tr>
					<th> HSN </th>
					<th> Part Number </th>							
					<th><font color = "green"> Product Name </font></th>
					<th><font color = "blue"> Buy Price </font></th>				
					<th> Profit %</th>
					<th><font color = "blue"> Sell Price [Without Tax] </font></th>
					<th> CGST %</th>
					<th> CGST </th>
					<th> SGST %</th>
					<th> SGST </th>
					<th> IGST %</th>
					<th> IGST </th>
					<th><font color = "green"> Total GST </font></th>
					<th><font color = "blue"> Sell Price </font></th>					
					<th><font color = "red"> Quantity </font></th>
					<th> Threshold </th>
					<th> Description </th>
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
						$BuyPrice = $row['BuyPrice'];
						$Profit = $row['Profit'];
						$SellProfit = $BuyPrice+(($Profit*$BuyPrice)/100);	
						$Cgst = $row['Cgst'];
						$TC = $row['TC'];
						$Sgst = $row['Sgst'];
						$TS = $row['TS'];
						$Igst = $row['Igst'];
						$TI = $row['TI'];						
						$TotalGST = $TC+$TS+$TI;
						$SellPrice = $SellProfit + $TotalGST;
						$Quantity = $row['Quantity'];
						$Threshold = $row['Threshold'];
						$Description = $row['Description'];
                ?>
                <tr>
					<td><?php echo $HSN ?></td>
					<td><?php echo $PartNo ?></td>
					<td><font color = "green"><?php echo $ProductName ?></font></td>
					<td><font color = "blue"><?php echo $BuyPrice ?></font></td>					
					<td><?php echo $Profit ?>%</td>
					<td><font color = "blue"><?php echo $SellProfit ?></font></td>
					<td><?php echo $Cgst ?>%</td>
					<td><?php echo $TC ?></td>
					<td><?php echo $Sgst ?>%</td>
					<td><?php echo $TS ?></td>
					<td><?php echo $Igst ?>%</td>
					<td><?php echo $TI ?></td>
					<td><font color = "green"><?php echo $TotalGST ?></font></td>
					<td><font color = "blue"><?php echo $SellPrice ?></font></td>
					<td><font color = "red"><?php echo $Quantity ?></td>
					<td><?php echo $Threshold ?></td>
					<td><?php echo $Description ?></td>
					<td><a style ="text-decoration:none" href="edit.php?GetID=<?php echo $ProductID ?>"><font color = "blue">Edit</font></a></td>
					<td><a style ="text-decoration:none" href="delete.php?Del=<?php echo $ProductID ?>"><font color = "red">Delete</font></a></td>									
                </tr>        
                <?php 
					}  
				?>                                                                                     
            </table>
		</div>
		
	</body>
</html>