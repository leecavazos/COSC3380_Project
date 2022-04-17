<?php
    require_once "config.php";
    require_once "functions.php";

    if(isset($_GET['id'])) {
        $Category_ID = $_GET['id'];
        if(categoryReferenced($conn, $Category_ID) == true) {
            header("location: ../pages/InventoryManager/category.php?invalid=deleted");
            exit();
        }
        $sql = "DELETE FROM category WHERE Category_ID = ?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "i", $Category_ID);
        mysqli_stmt_execute($stmt);
        $stmt->close();
        $conn->close();
        header("location: ../pages/InventoryManager/category.php?success=deleted");
    }
    
    
?>