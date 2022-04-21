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
	
	echo "Your Request has been submitted <br> for a total of $ {$line_total}";
	$rID = $_GET['requestID'];
	$ID = $_GET['productID'];
	$quant = $_GET['quantity'];
	echo $ID;
	echo $quant;
	
	$query1 = "SELECT Price FROM Product WHERE Product_ID = {$ID}";
	$result1 = mysqli_query($connection, $query1);
	$row1 = mysqli_fetch_assoc($result1);
	$price = $row1['Price'];
	echo "<br> {$price}";
	$line_total = $price * $quant;
	echo "";
	
	$query = "INSERT INTO `ITEMS REQUESTED` VALUES ({$rID}, {$ID},{$quant},{$line_total})";

	mysqli_query($connection, $query);
	


?>

