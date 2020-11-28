<?php

$con=mysqli_connect("localhost","root","","crud");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql1 = "CREATE TABLE sales (
 ProductID int(30) NOT NULL,
 HSN varchar(30),
 PartNo varchar(30) NOT NULL,
 ProductName varchar(50) NOT NULL,
 Invoice varchar(30) NOT NULL,
 PO varchar(30),
 Customer varchar(50) NOT NULL,
 UnitPrice float(11) NOT NULL,
 Quantity int(11) NOT NULL, 
 Amount float(30),
 UnitCgst float(30) DEFAULT 0,
 TotalCgst float(30) DEFAULT 0,
 UnitSgst float(30) DEFAULT 0,
 TotalSgst float(30) DEFAULT 0,
 UnitIgst float(30) DEFAULT 0,
 TotalIgst float(30) DEFAULT 0,
 Total float(30) NOT NULL,
 DateAndTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )";

if ($con->query($sql1) === TRUE) {
    echo "Table sales created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

?>