<?php
 
    include '../../php/config.php';
    session_start();
    $query = "SELECT SUM(Order_total) as total from `Order`";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    // $requestID =  $row['Request_ID'];
    // echo "{$Date}<br>";
    // $query2 = "SELECT Product_ID, Quantity FROM `Items Requested` WHERE Request_ID = '$requestID'";
    // $result2 = mysqli_query($conn,$query2);
    // $row2 = mysqli_fetch_assoc($result2);
    
    // echo "{$row2['Quantity']}";
    ?>

<!doctype html>
<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="../../css/invstyle.css">

    <title>Sales</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo">
                    <img src="#" alt="" class="img-fluid">
                </div>
                <div class="top-left">
                    <div class="graphic-path">
                        <p>Sales</p>
                    </div>
                    <div class="position-relative">
                        <p>Stats <span><?php echo "{$_GET['search']}" ?></span></p>
                    </div>
                </div>
            </section>
            <section class="store-user mt-5">
                <div class="col-10">
                    <!-- <div class="row bb pb-3">
                        <div class="col-7">
                            <p>Supplier,</p>
                            <h2>Team 5 Supplies</h2>
                            <p class="address"> 555 Money Avenue, <br> Golden Hills TX, 77077 </p>
                        </div>
                        <div class="col-5">
                            <p>Client,</p>
                            <h2>Team 5 Store</h2>
                            <p class="address"> 1111 Winning Avenue, <br> Businessmen Heroes TX, 77011 </p>
                        </div>
                    </div> -->
                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <!-- <p>Most popular Item: 
                                <span>
                                <?php
                                $sql = "SELECT Product_ID, MAX(Quatity) FROM(
                                SELECT Product_ID, SUM(Quantity) FROM `Line Item`) group by Product_ID;" ;
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $PID = $row['Product_ID'];
                                echo $PID;
                                ?>
                                </span>
                            </p> -->
                            <p>Manager: <span><?php echo $_SESSION['login_user'] ?></span></p>
                        </div>
                        <div class="col-5">
                            <p>Date of Report: <span>04/21/2022</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="balance-info">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            <?php
                $sql = "SELECT Product_ID, Sum(Quantity) FROM POS.`Line Item` group by Product_ID";
                $result = mysqli_query($conn, $sql);
                $sampleArrayID = array();
                $sampleArrayQ = array();
                while($row = mysqli_fetch_assoc($result)){
                    $Product = $row['Product_ID'];
                    $Quant = $row['Sum(Quantity)'];
                    array_push($sampleArrayID,$Product);
                    array_push($sampleArrayQ, $Quant);
                }
                // print_r($sampleArrayID);
                // echo "<br>";
                // print_r($sampleArrayQ);

                // $js_array = json_encode($sampleArrayID);
                // $js_array2 = json_encode($sampleArrayQ);
                // echo "var xValues = ". $js_array . ";\n";
                // echo "var yValues = ".$js_array2. ";\n";
            ?>
            <script>
                var xValues = <?php echo json_encode($sampleArrayID); ?>;
                var yValues = <?php echo json_encode($sampleArrayQ); ?>;
                var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
                ];

                new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                    }]
                },
                options: {
                    title: {
                    display: true,
                    text: "Most Sold Product(Product_ID):"
                    }
                }
                });
            </script>
                <div class="row">
                    <div class="col-4" style="margin-top: 100px;">
                        <table class="table border-0 table-hover">
                            <?php 
                            $sql = "SELECT * FROM `Order`";
                            $result = mysqli_query($conn, $sql);
                            $rowcount = mysqli_num_rows($result);
                            echo "<tr>";
                            echo "<td>Total Orders</td>";
                            echo "<td>{$rowcount}</td>";
                            echo "</tr>";
                            
                            ?>
                            <tr>
                                <?php
                                $sql = "SELECT * FROM `User`";
                                $result = mysqli_query($conn, $sql);
                                $rowcount = mysqli_num_rows($result);
                                ?>
                                <td>Total Num Of Users:</td>
                                <td><?php echo "{$rowcount}"; ?></td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td>Total Sales:</td>
                                    <?php
                                    $sql = "SELECT SUM(Order_total) as total from `Order`";
                                    $result1 = $conn->query($sql)->fetch_all(MYSQLI_NUM);
                                    ?>
                                    <td><?php echo "{$result1[0][0]}"; ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Cart Image -->
            <img src="../../images/cart.jpeg" class="img-fluid cart-bg" alt="">

        </div>
    </div>


</body>
</html>


