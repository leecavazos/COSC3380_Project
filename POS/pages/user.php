<!DOCTYPE html>

<?php
	include('../php/loginAction.php');
	// include('../php/addToCartAction.php');

?>

<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POS Team 5</title>

	<!-- Link to css file -->
	<link rel="stylesheet" type="text/css" href="../css/main_page.css">
    <link rel="stylesheet" type="text/css" href="../css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="icon" type="image/x-icon" href="../images/logo.webp">
</head>

<body id="top">
	<header>
		<a href="">
			<img src="../images/logo.webp">
		</a>
		<!-- Navbar Starts -->
		<nav>
			<ul>
				<li><a href="#top">Home</a></li>
				<li>
                    <div class="dropdown">
                        <a href="#" class="drop-btn">
                            Profile
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <!-- <a href="#">Profile Management</a>  -->
                            <a href="accountDetails.php">Account Details</a>
                            <a href="../index.html">Log Out</a>
                        </div>
                    </div>
                </li>

				<li><a href="#">Orders History</a></li>
				<li><a href="checkout.php">Cart</a></li>

				<li><a href="#menu-section" class="order-btn btn btn-primary">Order Now</a></li>
			</ul>
		</nav>
		<!-- Navbar End -->
	</header>
	
	<!-- Food Search Section Starts Here -->
	<section class="food-search text-center">
		<span class="food-search">
			<form action="">
				<input type="search" name="search" placeholder="Search for Food">
				<input type="submit" name="submit" value="Search" class="btn btn-primary">
			</form>
		</span>
	</section>
	<!-- Food Search Section Ends Here -->

	<!-- Categories Section Starts Here -->
	<section class="categories">
		<div class="container">
			<h1 class="text-center">Categories</h1>

			<?php
				require_once '../php/config.php';
				$sql = "SELECT * FROM `Category`";
				$result = mysqli_query($conn,$sql) or die(mysqli_error);
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_array($result)) {
						echo '
							<div class="box float-container">
								<img src="../images/cate pic sample '.$row['Category_ID'].'.jpeg" alt="image1" class="category-img img-responsive" class="img-responsive img-curve">
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

			<?php
				require_once '../php/config.php';
				$sql = "SELECT Product_ID, Product_name, Price FROM `Product`";
				$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				if ($result->num_rows > 0) {
					while($row = mysqli_fetch_array($result)) {
						echo '
						<div class="item-box float-container">
							<p class="menu-item text-left">'.$row['Product_name'].'
								<span class="price">$'.$row['Price'].'</span>
							</p>
							<img src="../images/item sample '.$row['Product_ID'].'.jpeg" class="item-img img-responsive">
							<p class="item-description text-left">Item '.$row['Product_ID'].' Description</p>
							<form action="../php/addToCartAction.php" method="post" style="display: flex; flex-direction: row; gap: 20px;">
								<label for="quantity" style="font-size: large;">Quantity</label>
								<input type="number" id="quantity" name="quantity" min="1" 
									style="width: 12%; margin-top: 5%; margin-bottom: 5%; vertical-align: middle;"/>
								<button type="submit" class="btn btn-primary item-btn">Add to Cart</button>
							</form>
						</div>';
					}
				}
			?>

		</div>
	</section>
</body>

<footer>
	<div class="footer-content text-center" style="margin-bottom: 10%">
		<p class="copyright">© Designed by <a href="#">Team 5 COSC 3380 Spring 2022</a>. All rights reserved.</p>
		<a href="#top">Go to top.</a>
	</div>
</footer>

</html>