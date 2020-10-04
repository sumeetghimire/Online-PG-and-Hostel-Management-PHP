<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
	
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="#">Your Payment Receipt Below<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
					
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	
</div>


<?php
    $fname = $_SESSION['fname'];
    $query = "SELECT * FROM food_payment WHERE fname ='$fname'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result))
    {  
    	$hostel_id = $row['fname'];
    	$query6 = "SELECT * FROM food_payment WHERE fname = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
              
          ?>

          <h1 style="color: black;font-size:25px;text-align: center;font-weight: bold">Name:<?php echo $_SESSION['fname'];?></h1>
          <br>
           <h1 style="color: black;font-size:25px;text-align: center;font-weight: bold">Transaction ID: <?php echo $row['payment_id'];?></h1>

          <br>
           <h1 style="color: black;font-size:25px;text-align: center;font-weight: bold">Date of Payment made:  <?php echo $row['date']; ?></h1>


           </h1>

          <br>
           <h1 style="color: black;font-size:25px;text-align: center;font-weight: bold">Time of Payment made:  <?php echo $row['time'];?> </h1>

          <br>
           <h1 style="color: black;font-size:25px;text-align: center;font-weight: bold">Amount: Rs  <?php echo $row['amount'];?></h1> 


  </div>
</div>
<br>
<br>
<br>

   <h1 style="color: black;font-size:35px;text-align: center;font-weight: bold">Keep these for further refrence</h1>
<br><br>
             
    <?php
    } 
   
?>

<br>
<br>



               <div class="container">
      <div class="card">
  

</body>
</html>
