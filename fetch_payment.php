 <?php



 
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "okay";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  body{
     background-image:url("seamless.jpg");
  }
 body{

    color:black;
    background-image:url("seamless.jpg");
    text-align: center;
    font-size:10px;
    
    }




div
{
  position:relative;
  left:0.5cm;

}

table, td, th {  
  border: 2px solid black;
  text-align: center;
  font-size:20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th{
  
  font-size: 24px;
  color:blue;
  font-style: bold;
} 
td {
  padding: 20px;
}
h1{

  color:black;
  font-size:30px;
}
</style>
<title>Own Your Rent</title>
  
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--// Meta tag Keywords -->
    
  <!-- css files -->
  <link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->
  
  <!-- web-fonts -->
  <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <!-- //web-fonts -->
  
</head>
<style type="text/css">
  .card-header{
    padding: 15px;
    font-size: 30px;
  }
  .card-body{
    padding: 15px;
  }
  .card-footer{
    text-align: left;
    padding: 15px;
  }
</style>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">      
  <!--Header-->
  <header>
    <div class="container agile-banner_nav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <h1><a class="navbar-brand" href="home.php">Own Your Rent<span class="display"></span></a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="message_user.php">Message Received</a>
          </li>
            <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['fname']; ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu agile_short_dropdown">
              <li>
                <a href="profile.php">My Profile</a>
              </li>
              <li>
                <a href="includes/logout.inc.php">Logout</a>
              </li>
            </ul>
          </li>
          </ul>
        </div>
        
      </nav>
    </div>
  </header>
  <!--Header-->
</div>
<!-- //banner --> 

<?php

   
    $fname2 = $_SESSION['fname'];
    $query = "SELECT * FROM payment WHERE fname ='$fname2'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result))
    {  
      $amount = $row['amount'];
      $query6 = "SELECT * FROM payment WHERE amount = '$amount'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);

         
          ?> 
        
    <?php
    } 

?>

<br>
<br>
<?php
        $check5 = $_SESSION['fname'];
        $cash="Payment Pending";
        $query3="SELECT * FROM payment WHERE fname = '$check5'";
        $result = mysqli_query($conn, $query3);
        $num = mysqli_fetch_row($result);
        if($num==false)
        {

        $cash="Payment Pending";

        }

        else
        {
          $cash="Payment Done";
        }
    


