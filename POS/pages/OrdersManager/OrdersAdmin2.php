<!DOCTYPE html>
<?php
include('navbar.php');
?>
<?php
	require_once "../../php/config.php";
    require_once "../../php/functions.php";
	$sql = "SELECT SUM(Order_total) as total from `Order`";
	$result1 = $conn->query($sql)->fetch_all(MYSQLI_NUM);
	
?>
<html>
<style>
    .input_box{
        border-radius: 5px;
        border: 2px solid;
        border-color: black;
        padding: 20px; 
        width: 250px;
        height: 15px;    
    }
    .block {
        display: inline;
        width: 5%;
        border: none;
        border-radius: 5px;
        background-color: grey;
        color: white;
        padding: 14px 28px;
        cursor: pointer;
        text-align: center;
        margin-top: 10px;
    }
</style>
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
				    <i class='bx bxs-dollar-circle'></i>
					<span class="text">Total Sales</span>
					<span class="number">$<?php echo $result1[0][0];?></span>
				</div>
				<div class="box box2">
					<i class='bx bx-box' ></i>
					<span class="text">Number of Current Orders</span>
					<span class="number">
                        <?php
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            if($result){
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                        ?>
                    </span>
				</div>
				<div class="box box3">
					<i class='bx bxs-user' ></i>
					<span class="text">Number of Current Users</span>
					<span class="number">
                        <?php
                            $sql = "SELECT * FROM `User`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            if($result){
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                        ?>
                    </span>
				</div>
			</div>
		</div>
	<!-- End Dashboard content -->
	<!-- Recent Activity Content Begins -->    
		<div class="activity">
			<div class="title">
				<i class='bx bx-time' ></i>
				<span class="text">Sales</span>
			</div>
            <span style="">
                <form action="" method="POST" style="margin-left: 10px;">
                        <label style="display: block; margin-top: 0px;" > 
                            <span class="text">Search</span>
                        </label>
                        <input type="search" name="search" placeholder="Order ID, Card Number, Date, User_ID" class="input_box">
                        <input type="submit" name="submit" value="Go" class="block" style="float:center; margin-top: 0px;">
                </form>
            </span>
            <!-- OUTOUT OF THE DB BEGINS -->
			<div class="activity-data">                
                <div class="data ID">
                    <span class="data-title">Order ID</span>
                    <?php 
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['Order_ID'];
                                echo '<span>' .$id. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['Order_ID'];
                                echo '<span>' .$id. '</span>';
                            }
                        }
                    ?>
                </div>
                <div class="data manID">
                    <span class="data-title">User ID</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $PID=$row['User_ID'];
                                echo '<span>' .$PID. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $PID=$row['User_ID'];
                                echo '<span>' .$PID. '</span>';
                            }
                        }
                    ?>    
                </div>	
                <div class="data ID">
                    <span class="data-title">Address</span>
                    <?php 
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Street=$row['Street_delivered_to'];
                                echo '<span>' .$Street. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                            $Street=$row['Street_delivered_to'];
                            echo '<span>' .$Street. '</span>';
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">City</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $City=$row['City_delivered_to'];
                                echo '<span>' .$City. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $City=$row['City_delivered_to'];
                                echo '<span>' .$City. '</span>';
                            }
                        }
                    ?>
                </div>		
                <div class="data ID">
                    <span class="data-title">State</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $State=$row['State_delivered_to'];
                                echo '<span>' .$State. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $State=$row['State_delivered_to'];
                                echo '<span>' .$State. '</span>';
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">Zip</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Zip=$row['Zip_code_delivered_to'];
                                echo '<span>' .$Zip. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Zip =$row['Zip_code_delivered_to'];
                                echo '<span>' .$Zip. '</span>';
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">Card Type</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Card=$row['Card_type'];
                                echo '<span>' .$Card. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Card =$row['Card_type'];
                                echo '<span>' .$Card. '</span>'; 
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">Card Num</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Card_num=$row['Last_4_digits'];
                                echo '<span>' .$Card_num. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Card_num= $row['Last_4_digits'];
                                echo '<span>' .$Card_num. '</span>';
                            }
                        }
                    ?>
                </div>	
                <div class="data totalß">
                    <span class="data-title">Total</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Total=$row['Order_total'];
                                echo '<span>' .$Total. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $Total=$row['Order_total'];
                                echo '<span>' .$Total. '</span>';
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">D.O.P</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $DOP=$row['Date_of_purchase'];
                                echo '<span>' .$DOP. '</span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $DOP=$row['Date_of_purchase'];
                                echo '<span>' .$DOP. '</span>';$sql = "SELECT * FROM `Order`";
                            }
                        }
                    ?>
                </div>	
                <div class="data ID">
                    <span class="data-title">Operations</span>
                    <?php
                        if(isset($_POST['submit'])){
                            $Input = validate($_POST['search']);
                            $sql = "SELECT * FROM `Order` WHERE Order_ID='$Input' OR Last_4_digits='$Input' OR Date_of_purchase = '$Input' OR User_ID = '$Input'";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['Order_ID'];
                                echo '<span><a href="EditOrderForm.php?editOrder='.$id.'">Edit</a>
                                <a href="../../php/DeleteOrder.php?deleteOrder='.$id.'"> Delete</a></span>';
                            }
                        }
                        else{
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($row = mysqli_fetch_assoc($result)){
                                $id=$row['Order_ID'];
                                echo '<span><a href="EditOrderForm.php?editOrder='.$id.'">Edit</a>
                                <a href="../../php/DeleteOrder.php?deleteOrder='.$id.'"> Delete</a></span>';  
                            }
                        }
                    ?>
                </div>	
			</div>
		</div>
<!-- Recent Activity Content Ends -->
	</div>
	</section>
</body>
</html>