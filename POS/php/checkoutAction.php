<?php
    //$Order_ID ask to be auto incremented
    //$Purchaser_ID = id of user;
    //$Street_delivered_to =
    //APT_delivered_to = 
    //City_delivered_to =
    //$State_delivered_to =
    //$Zip_code_delivered_to =
    $Card_type = $_POST['Card_type'];
    $Last_4_digits = $_POST['Last_4_digits'];
    $Order_total = 
    $Date_of_purchase = date('YYYY-mm-dd');

    $conn = new mysqli($servername, $username, $password, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT User_ID, Street_address, APT, City, State, Zip FROM user WHERE User_ID = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $Purchaser_ID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)) {
        $Street_delivered_to = $row["Street_address"];
        $APT_delivered_to = $row["APT"];
        $City_delivered_to = $row["City"];
        $State_delivered_to = $row["State"];
        $Zip_code_delivered_to = $row["Zip"];
    }
    echo $Street_delivered_to . ", " . $APT_delivered_to . ", " . $City_delivered_to . ", " . $State_delivered_to . ", " . $Zip;
    mysqli_stmt_close($stmt);
}