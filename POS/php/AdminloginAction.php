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
      $manages = validate($_POST['manages']);

      $sql = "SELECT Username, Password, Manages FROM Manager WHERE Username='$username' AND Password='$password' AND Manages='$manages'";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      if (mysqli_num_rows($result) === 1) {
         $row = mysqli_fetch_assoc($result);
         if ($row['Username'] === $username && $row['Password'] === $password && $row['Manages'] === $manages) {
            $_SESSION['login_user'] = $username;
            // $_SESSION['user_id'] = $row['User_ID'];
            if($manages === 'Inventory'){
               header("Location: ../pages/InventoryMAnager/");
               exit();
            }
            elseif($manages === 'Orders'){
               header("Location: ../pages/OrdersManager/");
               exit();
            }
            elseif($manages === 'Purchasing'){
               header("Location: ../pages/purchasing/");
               exit();
            }

         }
         else {
            header("Location: ../pages/AdminLogin.php?invalid=true");
            exit();
         }
      }
      else {
         header("Location: ../pages/AdminLogin.php?invalid=true");
         exit();
      }
   }
            
?>

    
    