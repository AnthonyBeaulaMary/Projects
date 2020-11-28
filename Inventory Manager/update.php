<?php 
 
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
		$PID = $_GET['ID'];
        $HSN = $_POST['hsn'];
		$PartNo = $_POST['part'];
		$ProductName = $_POST['pname'];
		$BuyPrice = $_POST['buy'];
		$Profit = $_POST['profit'];
		$SellProfit = $BuyPrice+(($Profit*$BuyPrice)/100);
		$Cgst = $_POST['cgst'];
		$TC = ($Cgst*$SellProfit)/100;
		$Sgst = $_POST['sgst'];
		$TS = ($Cgst*$SellProfit)/100;
		$Igst = $_POST['igst'];
		$TI = ($Cgst*$SellProfit)/100;
		$SellPrice = $SellProfit+$TC+$TS+$TI;
		$Quantity = $_POST['quantity'];
		$Threshold = $_POST['threshold'];
		$Description = $_POST['desc'];
 
        $query = " UPDATE products SET HSN = '".$HSN."', PartNo = '".$PartNo."', ProductName = '".$ProductName."', BuyPrice = '".$BuyPrice."', SellPrice = '".$SellPrice."', Profit = '".$Profit."', Cgst = '".$Cgst."', Sgst = '".$Sgst."', Igst = '".$Igst."', TC = '".$TC."', TS = '".$TS."', TI = '".$TI."', Quantity='".$Quantity."', Threshold='".$Threshold."',Description='".$Description."' where ProductID = $PID";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
 
 
?>