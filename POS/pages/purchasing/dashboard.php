<?php

	$dbservername = "18.116.44.118";
	$dbusername = "root";
	$dbpassword = "cosc3380";
	$dbname = "POS";

	$connection = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

	if($connection)
		echo "<br>";
	else
		die("CONNECTION FAILED! REASON: ".mysqli_connect_error());

	$sqlp = "SELECT COUNT(Request_ID) FROM `Items Requested`";
	$res = mysqli_query($connection, $sqlp);
	$res = mysqli_fetch_assoc()
	// echo "<br> New Request Added!<br>";
	
	// $ID = $_GET['productID'];

	// echo "<br>The ID is {$ID}<br>";
	


	
	// $query1 = "SELECT Price, Current_stock_level, Restock_level FROM Product WHERE Product_ID = {$ID}";
	// $result1 = mysqli_query($connection, $query1);
	// $row1 = mysqli_fetch_assoc($result1);
	// $price = $row1['Price'];
	// $cstock = $row1['Current_stock_level'];
	// $level = $row1['Restock_level'];
	// $quant = $level - $cstock;
	
	// echo "<br> Each @ {$price} <br>";
	
	// $line_total = $price * $quant;
	
	// echo "Your Request has been submitted <br> {$quant} items <br>for a total of $ {$line_total}";
	// echo "<br> To be Restocked To {$level} <br>";
	
	// $s = "INSERT INTO `Purchase Request` (Generated_on) VALUES (current_date())";
	// mysqli_query($connection, $s);

	// echo "<br> The Item Request has been submitted to the database!<br>";

	// $query2 = "INSERT INTO `Items Requested` (Product_ID, Quantity, Line_total) VALUES ({$ID},{$quant},{$line_total})";
	// mysqli_query($connection, $query2);

	// echo "For {$ID} and amount {$quant} with a total of {$line_total}<br>";

	// $q = "UPDATE Product SET Current_stock_level = {$level} WHERE Product_ID = {$ID}";
	// mysqli_query($connection, $q);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purchasing</title>

	<!-- Link to css file -->
	<link rel="stylesheet" type="text/css" href="../../css/purchase.css">
	
	<!-- Boxicons CDN Link -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
	
	<?php include('navbar.php'); ?>
	
	<!-- Page Content Begins -->
	<!-- Begin Dashboard Content -->
	<section class="dashboard">
		<div class="dash-content">
			<div class="overview">
				<div class="title">
					<i class='bx bx-coin'></i>
					<span class="text">Dashboard</span>
				</div>

				<div class="boxes">
					<div class="box box1">
						<i class='bx bx-message-square-error'></i>
						<span class="text">Pending Requests</span>
						<span class="number">2</span>
					</div>
					<div class="box box2">
						<i class='bx bx-check-square' ></i>
						<span class="text">Amount Approved</span>
						<span class="number">$325,000</span>
					</div>
					<div class="box box3">
						<i class='bx bx-message-alt-x' ></i>
						<span class="text">Amount Rejected</span>
						<span class="number">$23,600</span>
					</div>
				</div>
			</div>
	<!-- End Dashboard content -->
	<!-- Recent Activity Content Begins -->
			<div class="activity">
				<div class="title">
					<i class='bx bx-time' ></i>
					<span class="text">Recent Requests</span>
				</div>

				<div class="activity-data">
					<div class="data ID">
						<span class="data-title">Request ID</span>
						<span class="data-list">10377694</span>
						<span class="data-list">10377695</span>
						<span class="data-list">10377696</span>
						<span class="data-list">10377697</span>
						<span class="data-list">10377698</span>
						<span class="data-list">10377699</span>
					</div>
					<div class="data manID">
						<span class="data-title">Manager ID</span>
						<span class="data-list">147865</span>
						<span class="data-list">147866</span>
						<span class="data-list">147866</span>
						<span class="data-list">147665</span>
						<span class="data-list">147767</span>
						<span class="data-list">147865</span>
					</div>
					<div class="data dateReq">
						<span class="data-title">Request Date</span>
						<span class="data-list">06-06-06</span>
						<span class="data-list">06-05-06</span>
						<span class="data-list">06-05-06</span>
						<span class="data-list">06-01-06</span>
						<span class="data-list">05-31-06</span>
						<span class="data-list">05-06-06</span>
					</div>
					<div class="data total">
						<span class="data-title">Total Asking</span>
						<span class="data-list">$250</span>
						<span class="data-list">$350</span>
						<span class="data-list">$223</span>
						<span class="data-list">$167</span>
						<span class="data-list">$132</span>
						<span class="data-list">$221</span>
					</div>
					<div class="data status">
						<span class="data-title">Status</span>
						<span class="data-list">Pending</span>
						<span class="data-list">Pending</span>
						<span class="data-list">Rejected</span>
						<span class="data-list">Rejected</span>
						<span class="data-list">Approved</span>
						<span class="data-list">Approved</span>
					</div>
					<div class="data dateApprv">
						<span class="data-title">Approval Date</span>
						<span class="data-list">N/A</span>
						<span class="data-list">N/A</span>
						<span class="data-list">06-05-06</span>
						<span class="data-list">06-02-06</span>
						<span class="data-list">05-31-06</span>
						<span class="data-list">05-07-06</span>
					</div>					
				</div>
			</div>
	<!-- Recent Activity Content Ends -->
		</div>
	</section>
	<!-- Page Content Ends -->

	
	

	



</body>
</html>