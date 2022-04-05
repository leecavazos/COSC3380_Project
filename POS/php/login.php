<?php
    include('config.php');
    session_start();
    

        // username and password sent from form 
        
        $username = mysqli_real_escape_string($db,$_POST['Username']);
        $password = mysqli_real_escape_string($db,$_POST['Password']); 
        
        $sql = "SELECT User_ID FROM User WHERE Username = '$username' and Password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $username and $password, table row must be 1 row
          
        if($count == 1) {
           session_register("username");
           $_SESSION['login_user'] = $username;
           
           header("/welcome.php");
        }else {
           $error = "Your Username or Password is incorrect. Please try again!";
        }
        
            
?>

    
    