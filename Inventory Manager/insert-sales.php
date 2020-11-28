<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {      
        $ProductName = $_POST['pname'];
		$Invoice = $_POST['invoice'];
		$PO = $_POST['po'];
		$Customer = $_POST['customer'];
		$Quantity = $_POST['quantity'];
		$Threshold = $_POST['threshold'];
	
		$query = "select * from products where ProductName ='".$ProductName."'";
		$result = mysqli_query($con,$query);
		
		while($row = mysqli_fetch_assoc($result)){
			$ProductID = $row['ProductID'];			   
			$HSN = $row['HSN'];
			$PartNo = $row['PartNo'];
			$SellPrice = $row['SellPrice'];
			$BuyPrice = $row['BuyPrice'];
			$Profit = $row['Profit'];
			$SellProfit = $BuyPrice+(($Profit*$BuyPrice)/100);	
			$Amount = $SellProfit*$Quantity;
			$UnitCgst = $row['Cgst']; //%
			$TC = $row['TC'];
			$TS = $row['TS'];
			$TI = $row['TI'];
			$TotalCgst = $Quantity*$TC;
			$UnitSgst = $row['Sgst'];
			$TotalSgst = $Quantity*$TS;
			$UnitIgst = $row['Igst'];
			$TotalIgst = $Quantity*$TI;
			//$GST = $TotalCgst+$TotalSgst+$TotalIgst;
			$Total = $SellPrice*$Quantity;
		}

 
		$query1 = " insert into sales (ProductID, HSN, PartNo, ProductName, Invoice, PO, Customer, UnitPrice, Quantity, Amount, UnitCgst, TotalCgst,UnitSgst, TotalSgst, UnitIgst, TotalIgst, Total) values('$ProductID', '$HSN', '$PartNo', '$ProductName', '$Invoice', '$PO', '$Customer', '$SellProfit', '$Quantity','$Amount', '$UnitCgst', '$TotalCgst', '$UnitSgst', '$TotalSgst', '$UnitIgst', '$TotalIgst', '$Total')";
		$result1 = mysqli_query($con,$query1);
 
            if($result)
            {				
				$query2 = "UPDATE products
						  SET Quantity = Quantity-$Quantity 
						  WHERE ProductID = $ProductID";
				$result2 = mysqli_query($con,$query2);
				
				$query3 = "SELECT * FROM products where Quantity<=Threshold";
				$result3 = mysqli_query($con,$query3);
				$data = mysqli_fetch_row($result3);
				
				if($data!=null){
					
					header("location:mail.php");
				}
				
				else{
					header("location:view-sales.php");
				}
            }
            else
            {
                echo ' Please Check Your Query ';
            }
       
    }
    else
    {
        header("location:index.php");
    }
?>