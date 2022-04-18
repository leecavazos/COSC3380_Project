<!DOCTYPE html>
<?php
include('navbar.php');
?>
<?php
	require_once "../../php/config.php";
	$sql = "SELECT SUM(Current_stock_level) FROM Product";
	$result1 = $conn->query($sql)->fetch_all(MYSQLI_NUM);
	$sql = "SELECT COUNT(Product_ID) FROM Product";
	$result2 = $conn->query($sql)->fetch_all(MYSQLI_NUM);
	$sql = "SELECT COUNT(Category_ID) FROM Category";
	$result3 = $conn->query($sql)->fetch_all(MYSQLI_NUM);
	
?>
<html>
<body>
<section class="dashboard">
		<div class="dash-content">
			<div class="overview">
				<div class="title">
					<i class='bx bx-coin'></i>
					<span class="text">Dashboard</span>
				</div>

				<div class="boxes">
					<div class="box box1">
					<i class='bx bxs-package'></i>
						<span class="text">Total Inventory</span>
						<span class="number"><?php echo $result1[0][0];?></span>
					</div>
					<div class="box box2">
					<i class='bx bxs-popsicle' ></i>
						<span class="text">Number of Current Products</span>
						<span class="number"><?php echo $result2[0][0];?></span>
					</div>
					<div class="box box3">
					<i class='bx bx-folder' ></i>
						<span class="text">Number of Current Categories</span>
						<span class="number"><?php echo $result3[0][0];?></span>
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
</body>
</html>