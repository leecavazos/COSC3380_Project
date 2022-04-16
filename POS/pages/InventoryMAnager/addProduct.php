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
    $sql = "SELECT Category_ID, Category_name FROM category";
    $result = $conn->query($sql);
}
?>

<html>

<body>
    <section class="dashboard">
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bx-plus-circle'></i>
                    <span class="text">Add Product</span>
                </div>
            </div>
            <!-- End Dashboard content -->
            <!-- Recent Activity Content Begins -->
            <form action="../../php/addProductAction.php" method="POST">
                <label for="Product_name">Product name:</label>
                <input type="text" id="Product_name" name="Product_name">

                <label for="Price">Price:</label>
                <input type="number" id="Price" name="Price" step="0.01">

                <label for="Category">Category:</label>
                <select id="Category" name="Category">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['Category_ID']}'>{$row['Category_name']}</option>";
                    }
                    ?>
                    <option value=""></option>
                </select>

                <label for="Availability">Currently available for purchase?</label>
                <label for="yes">Yes</label>
                <input type="radio" id="yes" name="Availability" value="1">
                <label for="no">No</label>
                <input type="radio" id="no" name="Availability" value="0">


                <label for="Current_stock_level">Current stock level:</label>
                <input type="number" id="Current_stock_level" name="Current_stock_level" min="0">

                <label for="Threshold_level">Threshold level:</label>
                <input type="number" id="Threshold_level" name="Threshold_level" min="0" onchange="checkLevels()">

                <label for="Restock_level">Restock level:</label>
                <input type="number" id="Restock_level" name="Restock_level" min="0" onchange="checkLevels()">
                <div id="checkLevels"> ❗ Restock level must be greater than threshold.</div>
                <input type="submit" id="submit">
            </form>
            <?php
            if (isset($_GET["invalid"])) {
                echo "<style> .invalid {color: red; text-align: center;}</style><p class='invalid'> Product name already exists. Please try another one.</p>";
            }
            ?>
        </div>
    </section>


</body>

<script>
    function checkLevels() {
        if(parseInt(document.getElementById('Restock_level').value) > parseInt(document.getElementById('Threshold_level').value)) {
            document.getElementById('submit').disabled = false;
            document.getElementById('submit').style = "cursor: pointer";
            document.getElementById('checkLevels').style.display = "none";
        } else {
            document.getElementById('submit').disabled = true;
            document.getElementById('submit').style = "cursor: not-allowed";
            document.getElementById('checkLevels').style.display = "block";
        }
    }
</script>

</html>