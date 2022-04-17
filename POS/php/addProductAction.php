<?php 
    require_once "config.php";
    require_once 'functions.php';

    $Product_name = $_POST['Product_name'];
    $Price = $_POST['Price'];
    $Category_ID = $_POST['Category'];
    $Available_for_purchase = $_POST['Availability'];
    $Current_stock_level = $_POST['Current_stock_level'];
    $Threshold_level = $_POST['Threshold_level'];
    $Restock_level = $_POST['Restock_level'];

    if(productExists($conn, $Product_name) !== false) {
        header("location: ../pages/InventoryManager/product.php?invalid=product");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO product (Product_name, Price, Category_ID, Available_for_purchase, Current_stock_level, Threshold_level, Restock_level) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdiiiii", $Product_name, $Price, $Category_ID, $Available_for_purchase, $Current_stock_level, $Threshold_level, $Restock_level);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    header("location: ../pages/InventoryManager/product.php?success=product");
?>