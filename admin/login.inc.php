<?php

if (isset($_POST['login-submit']))
 {

  require 'config.inc.php';

  $Username = $_POST['Username'];
  $password = $_POST['pwd'];

  if (empty($Username) || empty($password)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM hostel_manager WHERE Username = '$Username'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false)
      {
      header("Refresh: 1; url=/ownyourrent/login.php");

        echo "<script>alert('Wrong Password')</script>";
         }

      else if($pwdCheck == true)
       {

        //session_start();
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
  
      
       
        header("Location:admin_home.php?login=success");
        
      }
      else {
        header("Location: index.php?error=strangeerr");
        exit();
      }
    }
    else
    {
    
       header("Refresh: 1; url=index.php");

        echo "<script>alert('No user found')</script>";
         }


    }
  }

else {
  header("Location: ../login.php");
  exit();
}
