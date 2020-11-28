<?php 
 
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        $PID = $_GET['ID'];
        $HSN = $_POST['hsn'];
		$PartNo = $_POST['part'];
		$Invoice =$_POST['invoice'];
		$PO = $_POST['po'];
		$Customer = $_POST['customer'];
		$ProductName = $_POST['pname'];
		$UnitPrice = $_POST['unit'];
		$Quantity = $_POST['quantity'];
		$Amount = $UnitPrice*$Quantity;
		$UnitCgst = $_POST['uc'];
		$TotalCgst = $UnitCgst*$Quantity;
		$UnitSgst = $_POST['us'];
		$TotalSgst = $UnitSgst*$Quantity;
		$UnitIgst = $_POST['ui'];
		$TotalIgst = $UnitIgst*$Quantity;
		$Total = $Amount+$TotalCgst+$TotalSgst+$TotalIgst;
		$DateAndTime = $_POST['dat'];
 
        $query = " update sales set HSN = '".$HSN."', PartNo = '".$PartNo."', ProductName = '".$ProductName."', Invoice = '".$Invoice."', PO = '".$PO."', Customer = '".$Customer."', UnitPrice='".$UnitPrice."', Quantity = '".$Quantity."', Amount='".$Amount."', UnitCgst = '".$UnitCgst."', TotalCgst = '".$TotalCgst."', UnitSgst = '".$UnitSgst."', TotalSgst = '".$TotalSgst."', UnitIgst = '".$UnitIgst."', TotalIgst = '".$TotalIgst."', Total = '".$Total."', DateAndTime='".$DateAndTime."' where ProductID = '".$PID."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view-sales.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view-sales.php");
    }
 
 
?>