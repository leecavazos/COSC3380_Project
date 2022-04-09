<!DOCTYPE html>

<?php
	include('../php/loginAction.php');
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
                            <a href="#">Profile Management</a> 
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

			<div class="box float-container">
				<img src="../images/cate pic sample.jpeg" alt="image1" class="category-img img-responsive" class="img-responsive img-curve">
				<div class="middle">
					<div class="category-caption text-center">Category 1</div>
				</div>
			</div>
			<div class="box float-container">
				<img src="../images/cate pic sample.jpeg" alt="image1" class="category-img img-responsive" class="img-responsive img-curve">
				<div class="middle">
					<div class="category-caption text-center">Category 2</div>
				</div>
			</div>
			<div class="box float-container">
				<img src="../images/cate pic sample.jpeg" alt="image1" class="category-img img-responsive" class="img-responsive img-curve">
				<div class="middle">
					<div class="category-caption text-center">Category 3</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
	</section>
	<!-- Categories Section Ends Here -->

	<!-- Food Menu Section Starts Here -->
	<section class="menu" id="menu-section">
		<div class="container">
			<h2 class="text-center">Explore</h2>

			<div class="item-box float-container">
				<p class="menu-item text-left">Item 1
					<span class="price">$10</span>
				</p>
				<img src="../images/item sample 1.jpeg" class="item-img img-responsive">
				<p class="item-description text-left">Item 1 Description</p>
			</div>

			<div class="item-box float-container">
				<p class="menu-item text-left">Item 2
					<span class="price">$12</span>
				</p>
				<img src="../images/item sample 2.jpeg" class="item-img img-responsive">
				<p class="item-description text-left">Item 2 Description</p>
			</div>

			<div class="item-box float-container">
				<p class="menu-item text-left">Item 3
					<span class="price">$8</span>
				</p>
				<img src="../images/item sample 3.jpeg" class="item-img img-responsive">
				<p class="item-description text-left">Item 3 Description</p>
			</div>

			<div class="item-box float-container">
				<p class="menu-item text-left">Item 4
					<span class="price">$12</span>
				</p>
				<img src="../images/item sample 4.jpeg" class="item-img img-responsive">
				<p class="item-description text-left">Item 4 Description</p>
			</div>

			<div class="item-box float-container">
				<p class="menu-item text-left">Item 5
					<span class="price">$10</span>
				</p>
				<img src="../images/item sample 5.webp" class="item-img img-responsive">
				<p class="item-description text-left">Item 5 Description</p>
			</div>

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