<!DOCTYPE html>
<?php
include('navbar.php');
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "pos";

$conn = new mysqli($servername, $username, $password, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT Product_ID, Product_name, Price, Category_name, Available_for_purchase, Current_stock_level, Threshold_level, Restock_level FROM product AS p, category AS c WHERE p.Category_ID = c.Category_ID";
    $result = $conn->query($sql);
    $num = $result->num_rows;
    $rows = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<html>

<body>
    <section class="dashboard">
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bx-plus-circle'></i>
                    <span class="text">Delete Product</span>
                </div>
            </div>
            <!-- End Dashboard content -->
            <!-- Recent Activity Content Begins -->

            <div class="activity">
                <div class="title">
                    <i class='bx bx-spreadsheet'></i>
                    <span class="text">Products</span>
                </div>

                <div class="activity-data">
                    <div class="data">
                        <span class="data-title">Name</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Product_name']}</span>";
                        }
                        ?>
                    </div>
                    <div class="data">
                        <span class="data-title">Price</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Price']}</span>";
                        }
                        ?>
                    </div>
                    <div class="data">
                        <span class="data-title">Category</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Category_name']}</span>";
                        }
                        ?>
                    </div>
                    <div class="data">
                        <span class="data-title">Available?</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>";
                            if ($row['Available_for_purchase'] == 1) {
                                echo "Yes";
                            } else {
                                echo "No";
                            }
                            echo "</span>";
                        }
                        ?>
                    </div>
                    <div class="data">
                        <span class="data-title">Stock</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Current_stock_level']}</span>";
                        }
                        ?>
                    </div>

                    <div class="data">
                        <span class="data-title">Threshold</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Threshold_level']}</span>";
                        }
                        ?>
                    </div>

                    <div class="data">
                        <span class="data-title">Restock</span>
                        <?php
                        foreach ($rows as $row) {
                            echo "<span class='data-list'>{$row['Restock_level']}</span>";
                        }
                        ?>
                    </div>

                    <div class="data">
                        <span class="data-title">Delete?</span>
                        <?php
                        for($ind = 0; $ind < $num; $ind++) {
                            echo "<span class='data-list-link'><a href='deleteAction.php?id={$rows[$ind]['Product_ID']}' class='button'><i class='bx bx-spreadsheet'></i></a></span>";
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

<script>
    function deleteProduct(index) {
        $Product_ID = $rows[index]['Product_ID'];
        <?php
        $sql = "DELETE FROM product WHERE Product_ID = ?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "i", $Product_ID);
        mysqli_stmt_execute($stmt);
        ?>
    }
</script>

</html>