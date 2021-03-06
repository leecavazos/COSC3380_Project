<!DOCTYPE html>
<?php
	require_once 'php/config.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POS Team 5</title>

	<!-- Link to css file -->
	<link rel="stylesheet" type="text/css" href="css/main_page.css">
	<link rel="icon" type="image/x-icon" href="images/logo.webp">
</head>

<!-- Set body id = "top", in case want to go to the top of the page smoothly (using smooth behavior in css) -->
<body id="top">
	<header>
		<a href="">
			<img src="images/logo.webp">
		</a>
		<!-- Navbar Starts -->
		<nav>
			<ul>
				<li><a href="#top">Home</a></li>
				<li><a href="pages/login.php">User Login</a></li>
				<li><a href="pages/AdminLogin.php">Admin</a></li>
				<li><a href="#menu-section" class="order-btn btn btn-primary">Order Now</a></li>
			</ul>
		</nav>
		<!-- Navbar End -->
	</header>
	
	<!-- Food Search Section Starts Here -->
	<section class="food-search text-center">
		<span class="food-search">
			<h1 style="background-color: transparent;">Food Delivery</h1>
			<!-- <form action="">
				<input type="search" name="search" placeholder="Search for Food">
				<input type="submit" name="submit" value="Search" class="btn btn-primary">
			</form> -->
		</span>
	</section>
	<!-- Food Search Section Ends Here -->

	<!-- Categories Section Starts Here -->
	<section class="categories">
		<div class="container">
			<h1 class="text-center">Categories</h1>

			<?php
				$sql = "SELECT * FROM `Category`";
				$result = mysqli_query($conn,$sql) or die(mysqli_error);
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_array($result)) {
						echo '
							<div class="box float-container">
								<img src="images/'.$row['Category_image'].'" alt="image1" class="category-img img-responsive" class="img-responsive img-curve">
								<div class="middle">
									<div class="category-caption text-center">'.$row['Category_name'].'</div>
								</div>
							</div>
						';
					}
				}
			?>
		</div>

		<div class="clearfix"></div>
	</section>
	<!-- Categories Section Ends Here -->

	<!-- Food Menu Section Starts Here -->
	<section class="menu" id="menu-section">
		<div class="container">
			<h2 class="text-center">Explore</h2>
			
			<div class = "menu-container">

				<!-- <p class="item-description text-left">Item '.$row['Product_ID'].' Description</p> -->
			<?php
				// require_once '../php/config.php';
				$sql = "SELECT Product_ID, Product_name, Product_image, Price FROM `Product` WHERE Available_for_purchase = 1";
				$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				if ($result->num_rows > 0) {
					while($row = mysqli_fetch_array($result)) {
						echo '
						<div class="item-box float-container">
							<p id="pid" name="pid" class="menu-item text-left">'.$row['Product_name'].'
								<span class="price">$'.$row['Price'].'</span>
							</p>
							<img src="images/'.$row['Product_image'].'" class="item-img img-responsive">
							
							</div>';
					}
				}
				mysqli_close($conn);
			?>

			</div>
		</div>
	</section>
</body>

<footer>
	<div class="footer-content text-center" style="margin-bottom: 10%">
		<p class="copyright">?? Designed by <a href="#">Team 5 COSC 3380 Spring 2022</a>. All rights reserved.</p>
		<a href="#top">Go to top.</a>
	</div>
</footer>

</html>
