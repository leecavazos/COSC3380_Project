<?php 
    //$User_ID = 
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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "pos";

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
        $stmt = $conn->prepare("INSERT INTO User (User_ID, First_name, Last_name, Email, Phone_number, Street_address, APT, City, State, Zip, Username, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssssssss", $User_ID, $First_name, $Last_name, $Email, $Phone_number, $Street_address, $APT, $City, $State, $Zip, $Username, $Password);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
        header("location: ../pages/userForm.php?created=success");
    }
?>