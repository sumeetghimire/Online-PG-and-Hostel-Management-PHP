<?php
  session_start();
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "ownpgrent";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Own Your Rent|Admin</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="" method="POST">

                       <div class=" w3l-form-group">
                <label>Username</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="fname" placeholder="Firstname" required="required" />
                </div>
            </div>
           
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="lname" placeholder="lastname" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile Number</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="Mob_no" placeholder="Mobile Number" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>PG unique id</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="Hostel_id" placeholder="Pg id" required="required" />
                </div>
            </div>

          <!--  <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                </div>
            </div>-->

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>
                <div class=" w3l-form-group">
                <label>Unique Number</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="Isadmin" placeholder="Unique Num" required="required" />
                </div>
            </div>

            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2020 DBMS Project. All Rights Reserved | Design by
    </footer>

</body>

</html>








<?php

if (isset($_POST['signup-submit']))
 {


  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Mob_no = $_POST['Mob_no'];
  $Hostel_id = $_POST['Hostel_id'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];
   $Isadmin = $_POST['Isadmin'];

  if($password !== $cnfpassword)
  {
         echo"<script>alert('Password does not match')</script>";

    exit();
  }
  else 
  {

    $sql = "SELECT username FROM hostel_manager WHERE username=?";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
         echo"<script>alert('Could not sign up now try after sometime')</script>";
         exit();
    }
    else 
    {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) 
      {
          echo"<script>alert('Username already taken')</script>";

        exit();
      }
      else 
      {
        $sql = "INSERT INTO hostel_manager (username, fname, lname, Mob_no, Hostel_id,pwd,Isadmin) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
              echo"<script>alert('Could not login now try after sometime')</script>";

          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt,"sssssss",$username,$fname,$lname,$Mob_no, $Hostel_id,$hashedPwd,$Isadmin);
          mysqli_stmt_execute($stmt);
                 echo"<script>alert('sign up successfull')</script>";


          exit();
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  
  exit();
}
?>