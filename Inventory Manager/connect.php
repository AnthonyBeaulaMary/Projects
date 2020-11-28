<?php

$con=mysqli_connect("localhost","root","","crud");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql1 = "CREATE TABLE products (
 ProductID int(20) NOT NULL AUTO_INCREMENT,
 HSN varchar(30),
 PartNo varchar(30) NOT NULL,
 ProductName varchar(50) NOT NULL,
 BuyPrice float(30) NOT NULL,
 SellPrice float(30) NOT NULL,
 Profit float(30) NOT NULL,
 Cgst float(30) DEFAULT 0,
 TC float(30) DEFAULT 0,
 Sgst float(30) DEFAULT 0,
 TS float(30) DEFAULT 0,
 Igst float(30) DEFAULT 0,
 TI float(30) DEFAULT 0,
 Quantity int(30) NOT NULL,
 Threshold int(30) NOT NULL,
 Description varchar(100),
 PRIMARY KEY (ProductID)
 )";

if ($con->query($sql1) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

?>