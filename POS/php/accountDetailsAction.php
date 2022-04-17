<?php 
    $User_ID = 123;
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Email = $_POST['Email'];
    $Phone_number = $_POST['Phone_number'];
    $Street_address = $_POST['Street_address'];
    $APT = $_POST['APT'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zip = $_POST['Zip'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $servername = "3.133.98.11";
    $username = "root";
    $password = "cosc3380";
    $databaseName = "POS";

    require_once 'functions.php';

    $conn = new mysqli($servername, $username, $password, $databaseName);
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        if(emailExistsForOtherUser($conn, $Email, $User_ID) !== false) {
            header("location: ../pages/accountDetails.php?invalid=email");
            exit();
        }
        if(usernameExistsForOtherUser($conn, $Username, $User_ID) !== false) {
            header("location: ../pages/accountDetails.php?invalid=username");
            exit();
        }
        $stmt = $conn->prepare("UPDATE User SET User_ID = ?, First_name = ?, Last_name = ?, Email = ?, Phone_number = ?, Street_address = ?, APT = ?, City = ?, State = ?, Zip = ?, Username = ?, Password = ? WHERE User_ID = ?");
        $stmt->bind_param("isssssssssssi", $User_ID, $First_name, $Last_name, $Email, $Phone_number, $Street_address, $APT, $City, $State, $Zip, $Username, $Password, $User_ID);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
        header("location: ../pages/accountDetails.php?created=success");
    }
?>