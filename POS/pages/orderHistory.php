<!DOCTYPE html>

<?php
	include('../php/loginAction.php');
    require_once '../php/config.php';
    require_once '../php/functions.php';
    $User_ID = $_SESSION['user_id'];
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

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 2px solid black;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>

<body id="top">
	<header>
		<a href="">
			<img src="../images/logo.webp">
		</a>
		<!-- Navbar Starts -->
		<nav>
			<ul>
				<li><a href="user.php">Home</a></li>
				<li>
                    <div class="dropdown">
                        <a href="#" class="drop-btn">
                            Profile
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <!-- <a href="#">Profile Management</a>  -->
                            <a href="accountDetails.php">Account Details</a>
                            <a href="../index.php">Log Out</a>
                        </div>
                    </div>
                </li>

				<!-- <li><a href="orderHistory.php">Orders History</a></li> -->
				<li><a href="checkout.php">Cart</a></li>

				<li><a href="user.php#menu-section" class="order-btn btn btn-primary">Order Now</a></li>
			</ul>
		</nav>
		<!-- Navbar End -->
	</header>

    <section class="categories">
		<div class="container">
			<h1 class="text-left">Order History Report</h1>

			<div style="border: 3px solid rgb(0, 0, 0); background-color: rgb(233, 233, 233); height: 900px;">
                    <table>
                        <tr>
                            <th>Order_ID</th>
                            <th>Street Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Card_type</th>
                            <th>Card_Num</th>
                            <th>Total</th>
                            <th>Date</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM `Order` WHERE User_ID = $User_ID ORDER BY Order_ID DESC";
                            $result = mysqli_query($conn,$sql) or die(mysqli_error);
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    $id=$row['Order_ID'];
                                    $Street=$row['Street_delivered_to'];
                                    $City=$row['City_delivered_to'];
                                    $State=$row['State_delivered_to'];
                                    $Zip =$row['Zip_code_delivered_to'];
                                    $Card =$row['Card_type'];
                                    $Card_num= $row['Last_4_digits'];
                                    $Total=$row['Order_total'];
                                    $DOP=$row['Date_of_purchase'];
                                    echo '<tr>
                                            <td>'.$id.'</td> 
                                            <td>'.$Street.'</td> 
                                            <td>'.$City.'</td> 
                                            <td>'.$State.'</td> 
                                            <td>'.$Zip.'</td> 
                                            <td>'.$Card.'</td> 
                                            <td>'.$Card_num.'</td>
                                            <td>$'.$Total.'</td> 
                                            <td>'.$DOP.'</td>
                                            </tr>';
                                    //  <td>
                                    // <a href="../../php/EditOrder.php?editOrder='.$id.'">Edit</a>
                                    // <a href="../../php/DeleteOrder.php?deleteOrder='.$id.'"> Delete</a></td></tr>';
                                }
                            }    
                        ?>
                    </table>
                </div>
		</div>

		<div class="clearfix"></div>
	</section>

</body>

<footer>
	<div class="footer-content text-center" style="margin-bottom: 10%">
		<p class="copyright">© Designed by <a href="#">Team 5 COSC 3380 Spring 2022</a>. All rights reserved.</p>
		<a href="#top">Go to top.</a>
	</div>
</footer>

</html>