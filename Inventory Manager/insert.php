<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['pname']) || empty($_POST['buy']) || empty($_POST['threshold']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
			$HSN = $_POST['hsn'];
			$PartNo = $_POST['part'];
            $ProductName = $_POST['pname'];
			$BuyPrice = $_POST['buy'];
			$Profit = $_POST['profit']; //%
            $SellProfit = $BuyPrice+(($Profit*$BuyPrice)/100);		//sp(130) = 100+ 30*100 /100	
			$Cgst = $_POST['cgst']; //%
			$TC = ($Cgst*$SellProfit)/100; //tc = 9*130 /100
			$Sgst = $_POST['sgst']; //%
			$TS = ($Sgst*$SellProfit)/100;
			$Igst = $_POST['igst']; //%
			$TI = ($Igst*$SellProfit)/100;
			$TotalGST = $TC+$TS+$TI;
			$SellPrice = $SellProfit + $TotalGST;
			$Quantity = $_POST['quantity'];
            $Threshold = $_POST['threshold'];
			$Description = $_POST['desc'];
 
            //$query = " insert into products (ProductName, Prize, Quantity, Threshold, Description) values('$ProductName','$Prize', '$Quantity','$Threshold','$Description')";
            $query = " insert into products (HSN, PartNo, ProductName, BuyPrice, SellPrice, Profit, Cgst, TC, Sgst, TS, Igst, TI, Quantity, Threshold, Description) values ('$HSN', '$PartNo', '$ProductName','$BuyPrice', '$SellPrice', '$Profit', '$Cgst', '$TC', '$Sgst', '$TS', '$Igst', '$TI', '$Quantity','$Threshold','$Description')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>