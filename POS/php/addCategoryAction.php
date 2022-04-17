<?php 
    require_once "config.php";
    require_once 'functions.php';

    $Category_name = $_POST['Category_name'];

    if(categoryExists($conn, $Category_name) !== false) {
        header("location: ../pages/InventoryManager/category.php?invalid=category");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO category (Category_name) VALUES (?)");
    $stmt->bind_param("s", $Category_name);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    header("location: ../pages/InventoryManager/category.php?success=category");
?>