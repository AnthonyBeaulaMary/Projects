<?php

$con=mysqli_connect("localhost","root","","crud");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql1 = "CREATE TABLE register (
 
 Username varchar(50) NOT NULL,
 Password varchar(20) NOT NULL,
 Email varchar(40) NOT NULL,
 Store varchar(11) NOT NULL,
 Mobile int(10)
 
 )";

if ($con->query($sql1) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

?>