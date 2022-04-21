<?php

	$dbservername = "18.116.44.118";
	$dbusername = "root";
	$dbpassword = "cosc3380";
	$dbname = "POS";

	$connection = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

	if($connection)
		echo "Success!\n";
	else
		die("CONNECTION FAILED! REASON: ".mysqli_connect_error());


	echo "<br> New Request Added!<br>";
	
	$ID = $_GET['productID'];

	echo "<br>The ID is {$ID}<br>";
	


	
	$query1 = "SELECT Price, Current_stock_level, Restock_level FROM Product WHERE Product_ID = {$ID}";
	$result1 = mysqli_query($connection, $query1);
	$row1 = mysqli_fetch_assoc($result1);
	$price = $row1['Price'];
	$cstock = $row1['Current_stock_level'];
	$level = $row1['Restock_level'];
	$quant = $level - $cstock;
	
	echo "<br> Each @ {$price} <br>";
	
	$line_total = $price * $quant;
	
	echo "Your Request has been submitted <br> {$quant} items <br>for a total of $ {$line_total}";
	echo "<br> To be Restocked To {$level} <br>";
	
	$s = "INSERT INTO `Purchase Request` (Generated_on) VALUES (current_date())";
	mysqli_query($connection, $s);

	echo "<br> The Item Request has been submitted to the database!<br>";

	$query2 = "INSERT INTO `Items Requested` (Product_ID, Quantity, Line_total) VALUES ({$ID},{$quant},{$line_total})";
	mysqli_query($connection, $query2);

	echo "For {$ID} and amount {$quant} with a total of {$line_total}<br>";

	// $q = "UPDATE Product SET Current_stock_level = {$level} WHERE Product_ID = {$ID}";
	// mysqli_query($connection, $q);


?>
	