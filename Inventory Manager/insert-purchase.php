<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {   
		$ProductName = $_POST['pname'];
		$Invoice = $_POST['invoice'];
		$PO = $_POST['po'];
		$Vendor = $_POST['vendor'];
		$Quantity = $_POST['quantity'];
		$UnitPrice = $_POST['unit'];
		$UnitCGST = $_POST['cgst'];
		$UnitSGST = $_POST['sgst'];
		$UnitIGST = $_POST['igst'];
		
		$query = "select * from products where ProductName ='".$ProductName."'";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_assoc($result)){
			$ProductID = $row['ProductID'];			   
			$HSN = $row['HSN'];
			$PartNo = $row['PartNo'];				
			$Amount = $UnitPrice*$Quantity;
			$TC = ($UnitCGST * $UnitPrice)/100;
			$TS = ($UnitSGST * $UnitPrice)/100;
			$TI = ($UnitIGST * $UnitPrice)/100;		
			$TotalCgst = $Quantity*$TC;
			$TotalSgst = $Quantity*$TS;
			$TotalIgst = $Quantity*$TI;
			$GST = $TotalCgst+$TotalSgst+$TotalIgst;
			$Total = $Amount+$GST;
		}

		$query1 = " insert into purchase (ProductID, HSN, PartNo, ProductName, Invoice, PO, Vendor, UnitPrice, Quantity, Amount, UnitCgst, TotalCgst,UnitSgst, TotalSgst, UnitIgst, TotalIgst, Total) values('$ProductID', '$HSN', '$PartNo', '$ProductName', '$Invoice', '$PO', '$Vendor', '$UnitPrice', '$Quantity','$Amount', '$UnitCGST', '$TotalCgst', '$UnitSGST', '$TotalSgst', '$UnitIGST', '$TotalIgst', '$Total')";
		$result1 = mysqli_query($con,$query1);

		if($result1)
		{
			$query2 = "UPDATE products
					SET Quantity = Quantity+$Quantity 
					WHERE ProductID = $ProductID";
			$result2 = mysqli_query($con,$query2);
			header("location:view-purchase.php");
		}
		else
		{
			echo '  Please Check Your Query ';
		}
       
    }
    else
    {
        header("location:index.php");
    }
?>