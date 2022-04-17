<!DOCTYPE html>
<?php
include('navbar.php');
?>

<?php
require_once "../../php/config.php";
$sql = "SELECT Category_ID, Category_name FROM category";
$result = $conn->query($sql);
$num = $result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../../css/inventory.css?v1.2">
</head>

<body>
    <section class="dashboard">
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bx-plus-circle'></i>
                    <span class="text">Add Category</span>
                </div>
            </div>
            <!-- End Dashboard content -->
            <!-- Recent Activity Content Begins -->
            <section>
                <form action="../../php/addCategoryAction.php" method="POST" class="categoryForm">
                    <div class="itemC">
                        <label for="Category_name">Category name:</label>
                        <input type="text" id="Category_name" name="Category_name" required>
                    </div>
                    <div class="itemC">
                        <input type="submit" id="submit">
                    </div>
                </form>
                <?php
                if (isset($_GET["success"])) {
                    if ($_GET["success"] == "category") {
                        echo "<style> .success {font-size: larger; font-weight: 600; text-align: center; color: #04AA6D;}</style><p class='success'>Category successfully added!</p>";
                    }
                }
                ?>
                <?php
                if (isset($_GET["invalid"])) {
                    if ($_GET["invalid"] == "category") {
                        echo "<style> .invalid {color: red; text-align: center;}</style><p class='invalid'> Category name already exists. Please try another one.</p>";
                    }
                }
                ?>
            </section>
            <div class="deleteCategory">
                <div class="overview">
                    <div class="title">
                    <i class='bx bx-minus-circle' ></i>
                        <span class="text">Delete Category</span>
                    </div>
                </div>
                <!-- End Dashboard content -->
                <!-- Recent Activity Content Begins -->

                <div class="activity">
                    <div class="title">
                        <i class='bx bx-spreadsheet'></i>
                        <span class="text">Categories</span>
                    </div>

                    <div class="activity-data">
                        <div class="data">
                            <span class="data-title"> </span>
                            <?php
                            foreach ($rows as $row) {
                                echo "<span class='data-list'></span>";
                            }
                            ?>
                        </div>
                        <div class="data">
                            <span class="data-title">Name</span>
                            <?php
                            foreach ($rows as $row) {
                                echo "<span class='data-list'>{$row['Category_name']}</span>";
                            }
                            ?>
                        </div>

                        <div class="data">
                            <span class="data-title">Delete?</span>
                            <?php
                            for ($ind = 0; $ind < $num; $ind++) {
                                echo "<span class='data-list-link'><a href='../../php/deleteCategoryAction.php?id={$rows[$ind]['Category_ID']}' class='button'><i class='bx bxs-trash'></i></i></a></span>";
                            }
                            ?>
                        </div>
                        <div class="data">
                            <span class="data-title"> </span>
                            <?php
                            foreach ($rows as $row) {
                                echo "<span class='data-list'></span>";
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET["invalid"])) {
                        if ($_GET["invalid"] == "deleted") {
                            echo "<style> .invalid {color: red; text-align: center;}</style><p class='invalid'> Category cannot be deleted because existing products are assigned to it.</p>";
                        }
                    }
                    if (isset($_GET["success"])) {
                        if ($_GET["success"] == "deleted") {
                            echo "<style> .success {font-size: larger; font-weight: 600; text-align: center; color: #04AA6D;}</style><p class='success'>Category successfully deleted!</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


</body>

<script>
    function checkLevels() {
        if (parseInt(document.getElementById('Restock_level').value) > parseInt(document.getElementById('Threshold_level').value)) {
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