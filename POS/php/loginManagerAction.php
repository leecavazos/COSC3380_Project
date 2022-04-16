<?php
   require_once "config.php";
   session_start();

   if (isset($_POST['uname']) && isset($_POST['psw'])) {

      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;  
      }
  
      $username = validate($_POST['uname']);
      $password = validate($_POST['psw']);

      $sql = "SELECT Manager_username, Manager_password, Manager_ID, Managing_role FROM manger WHERE Manager_username='$username' AND Manager_password='$password'";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      if (mysqli_num_rows($result) === 1) {
         $row = mysqli_fetch_assoc($result);
         if ($row['Manager_username'] === $username && $row['Manager_password'] === $password) {
            $_SESSION['login_user'] = $username;
            $_SESSION['Manager_ID'] = $row['Manager_ID'];

            if($row['Managing_role'] == 'Sales') {
                header("Location: ../pages/OrdersManager/OrdersAdmin.php");
            } else if ($row['Managing_role'] == 'Purchasing') {
                header("Location: ../pages/purchasing/purchase.html");
            } else if ($row['Managing_role'] == 'Inventory') {
                header("Location: ../pages/InventoryManager/InventoryAdmin.php");
            }
            

            exit();
         }
         else {
            header("Location: ../pages/login.php?invalid=true");
            exit();
         }
      }
      else {
         header("Location: ../pages/login.php?invalid=true");
         exit();
      }
   }
            
?>