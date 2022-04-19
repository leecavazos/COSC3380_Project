<?php

	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "POS";

	$connection = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

	if($connection)
		echo "";
	else
		die("CONNECTION FAILED! REASON: ".mysqli_connect_error())
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purchasing</title>

	<!-- Link to css file -->
	<link rel="stylesheet" type="text/css" href="../css/purchase.css">
	
	<!-- Boxicons CDN Link -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

	<?php include('../includes/navbar.php'); ?>

	<!-- Page Content Begins -->
	<!-- Begin Title Content -->
	<section class="dashboard">
		<div class="dash-content">
			<div class="overview">
				<div class="title">
					<i class='bx bx-coin'></i>
					<span class="text">Invoices</span>
				</div>
			</div>
	<!-- End Title content -->
	<!-- Invoice Content Begins -->
			Select Invoice:
			<form method="get" action = "invoicelayout.php">
				<select name="invoiceID">
					<?php 
						//show invoices as a list of options
						$query = "SELECT * FROM `Invoice`";
						$results = mysqli_query($connection, $query);

						while($row = mysqli_fetch_array($results))
						{
							echo "<option value='{$row['Invoice_ID']}'>{$row['Invoice_ID']}</option>";
						}
					?>
				</select>
				<input type="submit" name="generate">
			</form>
	<!-- Invoice Content Ends -->
		</div>
	</section>
	<!-- Page Content Ends -->

</body>
</html>