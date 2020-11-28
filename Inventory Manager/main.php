<?php 
 
    require_once("connection.php");
    $query = " select * from register ";
    $result = mysqli_query($con,$query);
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>INVENTORY Management</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
			* {
				box-sizing: border-box;
			}

			body {
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
			}

			/* Style the header */
			.header {
				padding: 60px;
				text-align: center;
				background: #3498db;
				color: white;
			}

			/* Increase the font size of the h1 element */
			.header h1 {
				font-size: 40px;
			}

			/* Style the top navigation bar */
			.navbar {
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
				padding: 20px 30px;
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

			/* Create two unequal columns that sits next to each other */
			/* Sidebar/left column */
			.side {
				flex: 20%;
				background-color: #d8d8d8;
				padding: 20px;
			}

			/* Main column */
			.main {   
				flex: 70%;
				background-color: white;
				padding: 20px;				
			}

			/* Fake image, just for this example */
			.options a{
				float: 100%;
				display: block;
				color: black;
				background-color: #3498db;
				text-align: center;
				padding: 14px 20px;
				text-decoration: none;
			}
			.options a:hover {
				background-color:#333;
				color: white;
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
	</head>
	<body>

		<div class="header">
			<h1><b><font size = "40px">INVENTORY MANAGER</font></b></h1>
			<h4>MANAGE YOUR STOCK WITH US !</h4>
		</div>

		<div class="navbar">
			<a href="main.php">HOME</a>
			<a href="contact.php">CONTACT US</a>
			<a href="about.html">ABOUT</a>
			<a href="logout.php">LOG OUT</a>
		</div>

		<div class="row">
			<div class="side">
			
				<h2> MENU </h2></br></br>
				
				<div class="options" style="height:60px;">
                    <a href = "view-products.php"><b>My Products</b></a>
				</div><br>
				
				<div class="options" style="height:60px;">
                    <a href = "view.php"><b>Product Details</b></a>
				</div><br>
                                
                                
				<div class="options" style="height:60px;">
                    <a href = "view-purchase.php"><b>Purchase Entry</b></a>
				</div><br>
                                
                                
				<div class="options" style="height:60px;">
					<a href = "view-sales.php"><b>Sales Entry</b></a>
				</div><br>
				
			</div>
			<?php
			
				while($row=mysqli_fetch_assoc($result))
				{
					$Username = $row['Username'];
				}
			?>
		  
			<div class="main">
		  
				<h1 style = text-align:center><b><font size = "7px">WELCOME <?php echo $Username ?></font></b></h1><br>
								
			</div>
			
		</div>

		<div class="footer">
		  
		</div>

	</body>
</html>
