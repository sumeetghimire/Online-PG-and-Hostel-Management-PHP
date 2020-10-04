<?php

if (isset($_POST['login-submit']))
 {

  require 'config.inc.php';

  $email = $_POST['email'];
  $password = $_POST['pwd'];

  if (empty($email) || empty($password)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM Student WHERE email = '$email'";
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
        $_SESSION['email'] = $row['email'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['department'] = $row['Dept'];
        $_SESSION['year_of_study'] = $row['Year_of_study'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['room_id'] = $row['Room_id'];
        if(isset($_SESSION['department']))
        {
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        //echo $_SESSION['lname'];
        header("Location: ../home.php?login=success");
        
      }
      else {
        header("Location: ../login.php?error=strangeerr");
        exit();
      }
    }
    else
    {
    
       header("Refresh: 1; url=http://localhost:8012/Hostel-Management-System-master/login.php");

        echo "<script>alert('No user found')</script>";
         }


    }
  }

else {
  header("Location: ../login.php");
  exit();
}
