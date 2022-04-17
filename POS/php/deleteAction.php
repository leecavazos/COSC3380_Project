<?php
    require_once "config.php";

    if(isset($_GET['id'])) {
        $Product_ID = $_GET['id'];
        $sql = "DELETE FROM product WHERE Product_ID = ?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "i", $Product_ID);
        mysqli_stmt_execute($stmt);
        $stmt->close();
        $conn->close();
        header("location: ../pages/InventoryManager/product.php?success=deleted");
    }
    
    
?>