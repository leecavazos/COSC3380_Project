<?php
$User_ID = $_POST['User_ID'];
$Street_delivered_to = $_POST['Street_delivered_to'];
$APT_delivered_to = $_POST['APT_delivered_to'];
$City_delivered_to = $_POST['City_delivered_to'];
$State_delivered_to = $_POST['State_delivered_to'];
$Zip_code_delivered_to = $_POST['Zip_code_delivered_to'];
$Card_type = $_POST['Card_type'];
$Last_4_digits = substr($_POST['CardNumber'], -4, 4);
$Order_total = $_POST['Order_total'];
$Date_of_purchase = date('Y-m-d');

$servername = "3.133.98.11";
$username = "root";
$password = "cosc3380";
$databaseName = "POS";

$conn = new mysqli($servername, $username, $password, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo $User_ID, $Street_delivered_to, $APT_delivered_to, $City_delivered_to, $State_delivered_to, $Zip_code_delivered_to, $Card_type, $Last_4_digits. ' ' .$Order_total. ' ' .$Date_of_purchase;
    $stmt = $conn->prepare("INSERT INTO `Order` (User_ID, Street_delivered_to, APT_delivered_to, City_delivered_to, State_delivered_to, Zip_code_delivered_to, Card_type, Last_4_digits, Order_total, Date_of_purchase) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssssds", $User_ID, $Street_delivered_to, $APT_delivered_to, $City_delivered_to, $State_delivered_to, $Zip_code_delivered_to, $Card_type, $Last_4_digits, $Order_total, $Date_of_purchase);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("DELETE FROM `Cart Item` WHERE User_ID = ?");
    $stmt->bind_param("i", $User_ID);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location: ../pages/checkout.php?success=order");
}
