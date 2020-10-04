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

        $check5 = $_SESSION['fname'];
      
        $query3="SELECT * FROM payment WHERE fname = '$check5'";
        $result = mysqli_query($conn, $query3);
        $num = mysqli_fetch_row($result);
        if($num==false)
        {

        $cash="Payment Pending, click on payment status above and pay your due";

        }

        else
        {
          $cash="No due Payment";
        }
    



    $fname = $_SESSION['fname'];
    $query = "SELECT * FROM application WHERE fname ='$fname'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result))
    {  
    	$hostel = $row['hostel'];
    	$query6 = "SELECT * FROM hostel WHERE hostel = '$hostel'";
       $result6 = mysqli_query($conn,$query6);
           ?>      
        <h4 style="text-align: center;color:black;font-size: 25px;font-weight: bold"><i class="fa fa-angle-"></i> Room Booked in the name of <?php echo $_SESSION['fname'] ?> at <?php echo $row['app_time'];?> on <?php echo $row['app_date']; ?> will expire on <?php echo $row ['expire_date'];

  
        ?>
        <br>
        <br>
        <botton><?php echo $cash;?></a></botton>
       

       
        <br>
       

  
    
  </div>
</div>
<br><br>
             
    <?php
    } 

?>
