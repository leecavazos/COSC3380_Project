<?php
    require_once "config.php";
    session_start();
    $User_ID = $_SESSION['user_id'];

    if (isset($_POST['pid']) && isset($_POST['quantity'])) {
        $pid = $_POST['pid'];
        $qty = $_POST['quantity'];
        echo "Processing...";
        if ($stmt = $conn->prepare("INSERT INTO `Cart item`(User_ID, Product_ID, Quantity) VALUES ($User_ID, ?, $qty);")) {
            
            $stmt->bind_param("i",$pid);
            $stmt->execute();
            $stmt->close();
            echo"Done.\n";
            header("location: ../pages/user.php#menu-section?addItem=true");
        }else {
            echo "Error";
        }
    }
?>