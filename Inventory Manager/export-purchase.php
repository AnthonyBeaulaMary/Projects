<?php  
	$conn = new mysqli('localhost', 'root', '');  
	mysqli_select_db($conn, 'crud');
	
	$sql = "SELECT * FROM `purchase`";  	
	$setRec = mysqli_query($conn, $sql);  
	
	$columnHeader = '';  
	$columnHeader = "Product ID" . "\t" . "HSN" . "\t" . "Part Number" . "\t" ."Product Name" . "\t" ."Invoice Number" . "\t" ."Purchase Order" . "\t" . "Vendor Name" . "\t" . "Unit Price" . "\t" . "Quantity" . "\t" ."Price [without TAX]". "\t" ."CGST %" . "\t" ."Total CGST" . "\t" ."SGST %" . "\t" ."Total SGST" . "\t" ."IGST" . "\t" ."Total IGST" . "\t" ."Total Price" . "\t" ."Date and Time" . "\t";  
	$setData = '';  
	
	  while ($rec = mysqli_fetch_row($setRec)) {  
		$rowData = '';  
		foreach ($rec as $value) {  
			$value = '"' . $value . '"' . "\t";  
			$rowData .= $value;  
		}  
		$setData .= trim($rowData) . "\n";  
	}  
	  
	header("Content-type: application/octet-stream");  
	header("Content-Disposition: attachment; filename=Purchase_Details.xls");  
	header("Pragma: no-cache");  
	header("Expires: 0");  

	echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 